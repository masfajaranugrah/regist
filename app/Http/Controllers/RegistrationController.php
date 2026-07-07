<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RegistrationController extends \Illuminate\Routing\Controller
{
    /**
     * Start the registration flow (User selected 'Ya, Saya Bersedia')
     */
    public function start(Request $request)
    {
        $registration = Registration::create([
            'consent' => true,
            'status' => 'Pending',
        ]);

        session(['registration_id' => $registration->id]);

        return redirect('/step-2');
    }

    /**
     * Decline the registration (User selected 'Tidak')
     */
    public function decline(Request $request)
    {
        $registration = Registration::create([
            'name' => 'Anonymous (User Declined)',
            'consent' => false,
            'status' => 'Declined',
        ]);

        session()->forget('registration_id');

        return redirect('/success?declined=true');
    }

    /**
     * Store Step 2 data (Personal Info)
     */
    public function storeStep2(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'id_number' => 'required|string|max:50',
            'phone_number' => 'required|string|max:50',
            'address' => 'required|string',
        ]);

        $regId = session('registration_id');

        if (!$regId) {
            $registration = Registration::create([
                'status' => 'Pending',
            ]);
            $regId = $registration->id;
            session(['registration_id' => $regId]);
        } else {
            $registration = Registration::find($regId);
            if (!$registration) {
                $registration = Registration::create([
                    'status' => 'Pending',
                ]);
                $regId = $registration->id;
                session(['registration_id' => $regId]);
            }
        }

        $registration->update([
            'name' => $request->full_name,
            'id_number' => $request->id_number,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);

        return response()->json(['success' => true]);
    }

    /**
     * Upload social media proof image via AJAX
     */
    public function uploadProof(Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:10240', // Max 10MB
            'platform' => 'required|string|in:tiktok-1,tiktok-2,instagram-1,instagram-2',
        ]);

        $regId = session('registration_id');
        if (!$regId) {
            return response()->json(['error' => 'Session expired. Please start over.'], 400);
        }

        $registration = Registration::find($regId);
        if (!$registration) {
            return response()->json(['error' => 'Registration not found.'], 404);
        }

        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $filename = 'proof_' . $regId . '_' . $request->platform . '_' . time() . '.' . $extension;

        // Save to public/uploads directory directly
        $file->move(public_path('uploads'), $filename);
        $publicPath = '/uploads/' . $filename;

        // Map platform to database column
        $columnMap = [
            'tiktok-1' => 'tiktok_creative',
            'tiktok-2' => 'tiktok_jernih',
            'instagram-1' => 'ig_creative',
            'instagram-2' => 'ig_jernih',
        ];

        $column = $columnMap[$request->platform];
        $registration->update([
            $column => $publicPath,
        ]);

        return response()->json([
            'success' => true,
            'path' => $publicPath,
        ]);
    }

    /**
     * Finish the registration flow (changes status to 'Consented')
     */
    public function finish(Request $request)
    {
        $regId = session('registration_id');
        if (!$regId) {
            return redirect('/');
        }

        $registration = Registration::find($regId);
        if ($registration) {
            $registration->update([
                'status' => 'Consented',
            ]);
        }

        // Keep it in session temporarily to display on success page, or forget
        session()->forget('registration_id');

        return redirect('/success');
    }

    /**
     * Display the Registrant Management dashboard page with dynamic data
     */
    public function dashboardIndex(Request $request)
    {
        // Fetch all registrations
        $query = Registration::query();

        // Search filter
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('id_number', 'like', "%{$search}%")
                  ->orWhere('address', 'like', "%{$search}%")
                  ->orWhere('phone_number', 'like', "%{$search}%");
            });
        }

        // Pagination
        $registrations = $query->orderBy('created_at', 'desc')->paginate(10);

        // Stats calculation
        $totalRegistrants = Registration::count();
        $totalConsented = Registration::where('status', 'Consented')->count();
        $totalPending = Registration::where('status', 'Pending')->count();
        $totalDeclined = Registration::where('status', 'Declined')->count();

        // System Health (let's calculate as percentage of verified/consented + pending over total)
        $securityHealth = $totalRegistrants > 0 
            ? round((($totalConsented + $totalPending) / $totalRegistrants) * 100, 1) 
            : 100.0;

        return view('dashboard.registrations', compact(
            'registrations', 
            'totalRegistrants', 
            'totalConsented', 
            'totalPending', 
            'totalDeclined',
            'securityHealth'
        ));
    }

    /**
     * Display the Dashboard Overview page with dynamic statistics and recent activity
     */
    public function dashboardOverview(Request $request)
    {
        $totalRegistrants = Registration::count();
        $totalConsented = Registration::where('status', 'Consented')->count();
        $totalPending = Registration::where('status', 'Pending')->count();
        $totalDeclined = Registration::where('status', 'Declined')->count();
        
        // Calculate conversion rate
        $conversionRate = $totalRegistrants > 0
            ? round(($totalConsented / $totalRegistrants) * 100)
            : 0;

        // Fetch recent activities (last 5 registrations)
        $recentRegistrations = Registration::orderBy('created_at', 'desc')->limit(5)->get();

        return view('dashboard.index', compact(
            'totalRegistrants',
            'totalConsented',
            'totalPending',
            'totalDeclined',
            'conversionRate',
            'recentRegistrations'
        ));
    }

    /**
     * Export all registrations to Excel (.xls format)
     */
    public function exportExcel()
    {
        $fileName = 'registrations_' . date('Y-m-d_H-i-s') . '.xls';
        $registrations = Registration::all();

        $headers = array(
            "Content-type"        => "application/vnd.ms-excel",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $callback = function() use($registrations) {
            $file = fopen('php://output', 'w');
            
            // Output HTML template configured for Microsoft Excel compatibility
            fwrite($file, '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">');
            fwrite($file, '<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>Registrations</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head>');
            fwrite($file, '<body>');
            fwrite($file, '<table border="1">');
            
            // Header Row
            fwrite($file, '<tr style="background-color: #00685f; color: #ffffff; font-weight: bold;">');
            fwrite($file, '<th>ID</th>');
            fwrite($file, '<th>Name</th>');
            fwrite($file, '<th>ID Number</th>');
            fwrite($file, '<th>Phone Number</th>');
            fwrite($file, '<th>Address</th>');
            fwrite($file, '<th>Consent</th>');
            fwrite($file, '<th>TikTok Creative</th>');
            fwrite($file, '<th>TikTok Jernih</th>');
            fwrite($file, '<th>IG Creative</th>');
            fwrite($file, '<th>IG Jernih</th>');
            fwrite($file, '<th>Status</th>');
            fwrite($file, '<th>Registered At</th>');
            fwrite($file, '</tr>');

            foreach ($registrations as $reg) {
                $consent = $reg->consent === null ? '-' : ($reg->consent ? 'Yes' : 'No');
                $tiktok_creative = $reg->tiktok_creative ? asset($reg->tiktok_creative) : '-';
                $tiktok_jernih = $reg->tiktok_jernih ? asset($reg->tiktok_jernih) : '-';
                $ig_creative = $reg->ig_creative ? asset($reg->ig_creative) : '-';
                $ig_jernih = $reg->ig_jernih ? asset($reg->ig_jernih) : '-';
                $date = $reg->created_at ? $reg->created_at->toDateTimeString() : '-';

                fwrite($file, '<tr>');
                fwrite($file, '<td>' . htmlspecialchars($reg->id) . '</td>');
                fwrite($file, '<td>' . htmlspecialchars($reg->name ?? 'Anonymous') . '</td>');
                // Use styling to preserve leading zeros in Excel
                fwrite($file, '<td style="vnd.ms-excel.numberformat:@">' . htmlspecialchars($reg->id_number ?? '-') . '</td>');
                fwrite($file, '<td style="vnd.ms-excel.numberformat:@">' . htmlspecialchars($reg->phone_number ?? '-') . '</td>');
                fwrite($file, '<td>' . htmlspecialchars($reg->address ?? '-') . '</td>');
                fwrite($file, '<td>' . htmlspecialchars($consent) . '</td>');
                fwrite($file, '<td>' . htmlspecialchars($tiktok_creative) . '</td>');
                fwrite($file, '<td>' . htmlspecialchars($tiktok_jernih) . '</td>');
                fwrite($file, '<td>' . htmlspecialchars($ig_creative) . '</td>');
                fwrite($file, '<td>' . htmlspecialchars($ig_jernih) . '</td>');
                fwrite($file, '<td>' . htmlspecialchars($reg->status) . '</td>');
                fwrite($file, '<td>' . htmlspecialchars($date) . '</td>');
                fwrite($file, '</tr>');
            }

            fwrite($file, '</table></body></html>');
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    /**
     * Delete a registration record
     */
    public function destroy($id)
    {
        $registration = Registration::find($id);
        if ($registration) {
            // Delete associated proof files if they exist in public/uploads
            $fields = ['tiktok_creative', 'tiktok_jernih', 'ig_creative', 'ig_jernih'];
            foreach ($fields as $field) {
                if ($registration->$field) {
                    $filePath = public_path($registration->$field);
                    if (file_exists($filePath)) {
                        @unlink($filePath);
                    }
                }
            }
            $registration->delete();
        }

        return redirect()->route('dashboard.registrations')->with('success', 'Data registrasi berhasil dihapus.');
    }

    /**
     * Update the status of a registration
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string|in:Pending,Consented,Declined',
        ]);

        $registration = Registration::find($id);
        if (!$registration) {
            return redirect()->route('dashboard.registrations')->with('error', 'Data registrasi tidak ditemukan.');
        }

        $registration->update([
            'status' => $request->status,
        ]);

        return redirect()->route('dashboard.registrations')->with('success', 'Status registrasi berhasil diperbarui.');
    }
}
