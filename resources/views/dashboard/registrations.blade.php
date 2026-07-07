<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Registration Monitor | Admin Central</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <!-- Tailwind Config -->
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "inverse-primary": "#6bd8cb",
                    "on-tertiary-fixed-variant": "#38485d",
                    "tertiary-fixed": "#d3e4fe",
                    "surface-container-low": "#f0f3ff",
                    "error": "#ba1a1a",
                    "surface-dim": "#cfdaf2",
                    "on-primary-fixed-variant": "#005049",
                    "primary-fixed-dim": "#6bd8cb",
                    "inverse-surface": "#263143",
                    "secondary": "#55615f",
                    "on-primary-container": "#f4fffc",
                    "surface-container-high": "#dee8ff",
                    "on-surface": "#111c2d",
                    "on-error-container": "#93000a",
                    "tertiary-fixed-dim": "#b7c8e1",
                    "outline-variant": "#bcc9c6",
                    "primary-fixed": "#89f5e7",
                    "tertiary-container": "#66768d",
                    "surface": "#f9f9ff",
                    "secondary-fixed-dim": "#bcc9c6",
                    "surface-container-lowest": "#ffffff",
                    "surface-container": "#e7eeff",
                    "on-tertiary-container": "#fdfcff",
                    "primary": "#00685f",
                    "on-secondary-fixed-variant": "#3d4947",
                    "on-primary-fixed": "#00201d",
                    "error-container": "#ffdad6",
                    "on-secondary-fixed": "#121e1c",
                    "primary-container": "#008378",
                    "on-surface-variant": "#3d4947",
                    "on-primary": "#ffffff",
                    "surface-container-highest": "#d8e3fb",
                    "on-tertiary": "#ffffff",
                    "secondary-fixed": "#d8e5e2",
                    "on-secondary": "#ffffff",
                    "surface-tint": "#006a61",
                    "surface-bright": "#f9f9ff",
                    "on-background": "#111c2d",
                    "tertiary": "#4d5d73",
                    "secondary-container": "#d8e5e2",
                    "outline": "#6d7a77",
                    "on-tertiary-fixed": "#0b1c30",
                    "on-secondary-container": "#5b6765",
                    "background": "#f9f9ff",
                    "inverse-on-surface": "#ecf1ff",
                    "on-error": "#ffffff",
                    "surface-variant": "#d8e3fb"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "stack-lg": "32px",
                    "section-gap": "48px",
                    "gutter-md": "16px",
                    "stack-md": "16px",
                    "stack-sm": "8px",
                    "margin-mobile": "24px"
            },
            "fontFamily": {
                    "headline-lg-mobile": ["Plus Jakarta Sans"],
                    "headline-lg": ["Plus Jakarta Sans"],
                    "label-md": ["Plus Jakarta Sans"],
                    "label-sm": ["Plus Jakarta Sans"],
                    "headline-md": ["Plus Jakarta Sans"],
                    "body-lg": ["Plus Jakarta Sans"],
                    "body-sm": ["Plus Jakarta Sans"]
            },
            "fontSize": {
                    "headline-lg-mobile": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "headline-lg": ["30px", {"lineHeight": "38px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "label-md": ["14px", {"lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "600"}],
                    "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}],
                    "headline-md": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                    "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            -webkit-font-smoothing: antialiased;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #bcc9c6;
            border-radius: 10px;
        }
        .table-container {
            box-shadow: 0px 10px 20px rgba(13, 148, 136, 0.04);
        }
    </style>
</head>
<body class="bg-background text-on-background h-screen flex overflow-hidden">
    <!-- SideNavBar -->
    @include('dashboard.sidebar')

    <!-- Main Content Area -->
    <main class="flex-grow flex flex-col overflow-hidden">
        <!-- TopNavBar -->
        <header class="w-full h-16 border-b border-secondary-container dark:border-outline-variant bg-surface dark:bg-surface-container-lowest flex justify-between items-center px-gutter-md flex-shrink-0">
            <div class="flex items-center gap-4">
                <h2 class="text-headline-md font-headline-md font-bold text-primary dark:text-inverse-primary">Registration Monitor</h2>
            </div>
            <div class="flex items-center gap-6">
                <div class="hidden md:flex items-center bg-secondary-container/30 px-3 py-1.5 rounded-full border border-outline-variant/30">
                    <span class="material-symbols-outlined text-on-surface-variant text-[20px] mr-2">search</span>
                    <input class="bg-transparent border-none focus:ring-0 text-body-sm text-on-surface placeholder:text-on-surface-variant/60 w-48" placeholder="Global search..." type="text"/>
                </div>
                <div class="flex items-center gap-4">
                    <button class="relative p-2 text-on-surface-variant hover:text-primary transition-colors cursor-pointer active:opacity-80">
                        <span class="material-symbols-outlined">notifications</span>
                        <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full border-2 border-surface"></span>
                    </button>
                    <button class="p-2 text-on-surface-variant hover:text-primary transition-colors cursor-pointer active:opacity-80">
                        <span class="material-symbols-outlined">help</span>
                    </button>
                </div>
            </div>
        </header>
        <!-- Canvas Content -->
        <div class="flex-grow overflow-y-auto custom-scrollbar bg-surface/50 p-margin-mobile">
            <div class="max-w-7xl mx-auto space-y-stack-lg">
                @if(session('success'))
                <div class="p-4 rounded-xl bg-primary/10 border border-primary text-primary text-body-sm flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px]">check_circle</span>
                    <span>{{ session('success') }}</span>
                </div>
                @endif
                @if(session('error'))
                <div class="p-4 rounded-xl bg-error-container/20 border border-error text-error text-body-sm flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px]">error</span>
                    <span>{{ session('error') }}</span>
                </div>
                @endif

                <!-- Page Header & Action Bar -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-gutter-md">
                    <div>
                        <h3 class="text-headline-lg font-headline-lg text-on-surface">Registrant Management</h3>
                        <p class="text-body-lg text-on-surface-variant mt-1">Review, authorize, and manage system-wide user registrations.</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="{{ route('dashboard.export-excel') }}" class="flex items-center justify-center gap-2 px-6 py-3 border border-secondary-container hover:bg-secondary-container/20 text-on-surface rounded-lg font-label-md text-label-md transition-all active:scale-95 shadow-sm">
                            <span class="material-symbols-outlined text-primary">download</span>
                            Export Excel
                        </a>
                        <a href="/" target="_blank" class="flex items-center justify-center gap-2 px-6 py-3 bg-primary text-on-primary rounded-lg font-label-md text-label-md hover:bg-primary-container transition-all active:scale-95 shadow-sm">
                            <span class="material-symbols-outlined">person_add</span>
                            Add New Registrant Form
                        </a>
                    </div>
                </div>
                <!-- Filters and Table Controls -->
                <form action="{{ route('dashboard.registrations') }}" method="GET" class="bg-surface-container-lowest rounded-xl p-4 flex flex-wrap items-center justify-between gap-4 border border-secondary-container/50 table-container w-full">
                    <div class="flex items-center gap-4 w-full md:w-auto flex-grow">
                        <div class="relative w-full md:w-80">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                            <input name="search" value="{{ request('search') }}" class="w-full pl-10 pr-4 py-2 bg-surface border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary text-body-sm" placeholder="Search by name, ID, or address..." type="text"/>
                        </div>
                        <button type="submit" class="flex items-center justify-center gap-2 px-4 py-2 bg-primary text-on-primary rounded-lg font-label-md text-label-md hover:bg-primary-container transition-all active:scale-95 shadow-sm">
                            Search
                        </button>
                        @if(request('search'))
                        <a href="{{ route('dashboard.registrations') }}" class="flex items-center justify-center gap-2 px-4 py-2 border border-outline-variant text-on-surface-variant rounded-lg hover:bg-secondary-container/30 transition-colors text-label-md">
                            Clear
                        </a>
                        @endif
                    </div>
                    <div class="text-body-sm text-on-surface-variant">
                        Showing <span class="font-bold text-on-surface">{{ $registrations->firstItem() ?? 0 }}</span> to <span class="font-bold text-on-surface">{{ $registrations->lastItem() ?? 0 }}</span> of <span class="font-bold text-on-surface">{{ number_format($totalRegistrants) }}</span> registrants
                    </div>
                </form>
                <!-- Main Data Table Card -->
                <div class="bg-surface-container-lowest rounded-xl border border-secondary-container/50 overflow-hidden table-container">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-secondary-container/20 border-b border-secondary-container">
                                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">ID Number</th>
                                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Address</th>
                                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-secondary-container/30">
                                @forelse($registrations as $reg)
                                <tr class="hover:bg-secondary-container/10 transition-colors group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold text-xs">
                                                {{ strtoupper(substr($reg->name ?? 'A', 0, 2)) }}
                                            </div>
                                            <div>
                                                <p class="text-body-sm font-bold text-on-surface">{{ $reg->name ?? 'Anonymous' }}</p>
                                                <p class="text-[12px] text-on-surface-variant">{{ $reg->phone_number ?? '-' }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-body-sm text-on-surface">{{ $reg->id_number ?? '-' }}</td>
                                    <td class="px-6 py-4 text-body-sm text-on-surface-variant max-w-xs truncate" title="{{ $reg->address }}">{{ $reg->address ?? '-' }}</td>
                                    <td class="px-6 py-4">
                                        @if($reg->status === 'Consented')
                                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary/10 text-primary text-[12px] font-bold">
                                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                            Consented
                                        </span>
                                        @elseif($reg->status === 'Pending')
                                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container text-[12px] font-bold">
                                            <span class="w-1.5 h-1.5 rounded-full bg-outline"></span>
                                            Pending
                                        </span>
                                        @else
                                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-red-100 text-red-800 text-[12px] font-bold">
                                            <span class="w-1.5 h-1.5 rounded-full bg-red-600"></span>
                                            Declined
                                        </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button 
                                                class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary/5 rounded-full transition-all" 
                                                title="View Details"
                                                onclick='openDetailsModal(@json($reg))'
                                            >
                                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                                            </button>
                                            <form action="{{ route('dashboard.registrations.destroy', $reg->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data registrasi ini?')" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="p-2 text-on-surface-variant hover:text-error hover:bg-error/5 rounded-full transition-all" title="Delete">
                                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-10 text-center text-on-surface-variant text-body-sm">
                                        No registrations found.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination -->
                    <div class="px-6 py-4 border-t border-secondary-container">
                        {{ $registrations->appends(request()->query())->links() }}
                    </div>
                </div>
                <!-- Subtle Informational Cards (Bento-lite) -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 pb-margin-mobile">
                    <div class="p-6 rounded-xl bg-surface-container-low border border-primary/10 flex flex-col gap-2">
                        <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">group</span>
                        <div class="mt-2">
                            <p class="text-label-sm text-on-surface-variant uppercase tracking-wider">Total Registrants</p>
                            <p class="text-headline-md font-extrabold text-on-surface">{{ number_format($totalRegistrants) }}</p>
                        </div>
                    </div>
                    <div class="p-6 rounded-xl bg-surface-container-low border border-primary/10 flex flex-col gap-2">
                        <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">how_to_reg</span>
                        <div class="mt-2">
                            <p class="text-label-sm text-on-surface-variant uppercase tracking-wider">Total Consented</p>
                            <p class="text-headline-md font-extrabold text-on-surface">{{ number_format($totalConsented) }}</p>
                        </div>
                    </div>
                    <div class="p-6 rounded-xl bg-surface-container-low border border-secondary/10 flex flex-col gap-2">
                        <span class="material-symbols-outlined text-secondary">pending_actions</span>
                        <div class="mt-2">
                            <p class="text-label-sm text-on-surface-variant uppercase tracking-wider">Pending Approval</p>
                            <p class="text-headline-md font-extrabold text-on-surface">{{ number_format($totalPending) }}</p>
                        </div>
                    </div>
                    <div class="p-6 rounded-xl bg-primary-container text-on-primary-container flex flex-col gap-2 relative overflow-hidden">
                        <div class="relative z-10">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">shield</span>
                            <div class="mt-2">
                                <p class="text-label-sm text-on-primary-container/80 uppercase tracking-wider">Security Health</p>
                                <p class="text-headline-md font-extrabold">{{ number_format($securityHealth, 1) }}%</p>
                            </div>
                            <div class="mt-auto pt-2 text-[12px] font-bold">Encrypted &amp; Verified</div>
                        </div>
                        <!-- Atmospheric effect -->
                        <div class="absolute -right-4 -bottom-4 w-24 h-24 bg-white/10 rounded-full blur-3xl"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Details Modal -->
    <div id="detailsModal" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/50 backdrop-blur-sm p-4">
        <div class="bg-surface dark:bg-surface-container-lowest rounded-2xl max-w-2xl w-full border border-secondary-container shadow-2xl overflow-hidden flex flex-col max-h-[90vh]">
            <!-- Header -->
            <div class="px-6 py-4 bg-secondary-container/20 border-b border-secondary-container flex justify-between items-center">
                <h4 class="text-headline-md font-bold text-primary">Detail Registrasi</h4>
                <button onclick="closeDetailsModal()" class="p-1.5 hover:bg-secondary-container/50 rounded-full transition-all text-on-surface-variant">
                    <span class="material-symbols-outlined text-[24px]">close</span>
                </button>
            </div>
            <!-- Content -->
            <div class="p-6 overflow-y-auto space-y-6 custom-scrollbar text-on-surface">
                <!-- Personal Info Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-[12px] text-on-surface-variant uppercase font-bold tracking-wider">Nama Lengkap</p>
                        <p id="modalName" class="text-body-lg font-semibold mt-0.5">-</p>
                    </div>
                    <div>
                        <p class="text-[12px] text-on-surface-variant uppercase font-bold tracking-wider">Nomor KTP / ID</p>
                        <p id="modalId" class="text-body-lg font-semibold mt-0.5">-</p>
                    </div>
                    <div>
                        <p class="text-[12px] text-on-surface-variant uppercase font-bold tracking-wider">Nomor Telepon</p>
                        <p id="modalPhone" class="text-body-lg font-semibold mt-0.5">-</p>
                    </div>
                    <div>
                        <p class="text-[12px] text-on-surface-variant uppercase font-bold tracking-wider mb-1">Status</p>
                        <form id="updateStatusForm" method="POST" class="flex items-center gap-2">
                            @csrf
                            @method('PATCH')
                            <select id="modalStatusSelect" name="status" class="bg-surface border border-outline-variant rounded-lg text-body-sm px-3 py-1.5 focus:ring-2 focus:ring-primary focus:border-primary">
                                <option value="Pending">Pending</option>
                                <option value="Consented">Consented</option>
                                <option value="Declined">Declined</option>
                            </select>
                            <button type="submit" class="px-3 py-1.5 bg-primary text-on-primary rounded-lg font-semibold text-body-sm hover:bg-primary-container transition-all active:scale-95 shadow-sm">
                                Update
                            </button>
                        </form>
                    </div>
                    <div>
                        <p class="text-[12px] text-on-surface-variant uppercase font-bold tracking-wider">Persetujuan Awal</p>
                        <div id="modalConsent" class="text-body-lg font-semibold mt-0.5">-</div>
                    </div>
                    <div class="md:col-span-2">
                        <p class="text-[12px] text-on-surface-variant uppercase font-bold tracking-wider">Alamat Lengkap</p>
                        <p id="modalAddress" class="text-body-sm mt-0.5 whitespace-pre-line">-</p>
                    </div>
                </div>
                
                <!-- Social Media Proof Section -->
                <div class="border-t border-secondary-container/50 pt-4">
                    <h5 class="font-bold text-primary mb-3">Bukti Upload Media Sosial</h5>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <!-- TikTok Creative -->
                        <div class="flex flex-col items-center p-3 bg-surface-container-low rounded-xl border border-secondary-container/50 text-center">
                            <span class="text-[11px] font-bold text-on-surface-variant mb-2">TikTok Creative</span>
                            <div id="proofTiktokCreative" class="w-full aspect-square bg-surface-container-highest rounded-lg overflow-hidden flex items-center justify-center border border-outline-variant/35">
                                <span class="text-xs text-outline/60">Tidak ada</span>
                            </div>
                        </div>
                        <!-- TikTok Jernih -->
                        <div class="flex flex-col items-center p-3 bg-surface-container-low rounded-xl border border-secondary-container/50 text-center">
                            <span class="text-[11px] font-bold text-on-surface-variant mb-2">TikTok Jernih</span>
                            <div id="proofTiktokJernih" class="w-full aspect-square bg-surface-container-highest rounded-lg overflow-hidden flex items-center justify-center border border-outline-variant/35">
                                <span class="text-xs text-outline/60">Tidak ada</span>
                            </div>
                        </div>
                        <!-- Instagram Creative -->
                        <div class="flex flex-col items-center p-3 bg-surface-container-low rounded-xl border border-secondary-container/50 text-center">
                            <span class="text-[11px] font-bold text-on-surface-variant mb-2">IG Creative</span>
                            <div id="proofIgCreative" class="w-full aspect-square bg-surface-container-highest rounded-lg overflow-hidden flex items-center justify-center border border-outline-variant/35">
                                <span class="text-xs text-outline/60">Tidak ada</span>
                            </div>
                        </div>
                        <!-- Instagram Jernih -->
                        <div class="flex flex-col items-center p-3 bg-surface-container-low rounded-xl border border-secondary-container/50 text-center">
                            <span class="text-[11px] font-bold text-on-surface-variant mb-2">IG Jernih</span>
                            <div id="proofIgJernih" class="w-full aspect-square bg-surface-container-highest rounded-lg overflow-hidden flex items-center justify-center border border-outline-variant/35">
                                <span class="text-xs text-outline/60">Tidak ada</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div class="px-6 py-4 bg-secondary-container/10 border-t border-secondary-container flex justify-end">
                <button onclick="closeDetailsModal()" class="px-5 py-2.5 bg-primary text-on-primary rounded-lg font-semibold hover:bg-primary-container transition-all active:scale-95 text-body-sm">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <script>
        // Details Modal logic
        function openDetailsModal(reg) {
            document.getElementById('modalName').innerText = reg.name || 'Anonymous';
            document.getElementById('modalId').innerText = reg.id_number || '-';
            document.getElementById('modalPhone').innerText = reg.phone_number || '-';
            document.getElementById('modalAddress').innerText = reg.address || '-';
            
            // Set form action and select value
            document.getElementById('updateStatusForm').action = '/dashboard/registrations/' + reg.id + '/status';
            document.getElementById('modalStatusSelect').value = reg.status;

            const consentEl = document.getElementById('modalConsent');
            if (reg.consent === 1 || reg.consent === true) {
                consentEl.innerHTML = '<span class="text-green-600 font-bold">Ya, Bersedia</span>';
            } else if (reg.consent === 0 || reg.consent === false) {
                consentEl.innerHTML = '<span class="text-red-600 font-bold">Tidak</span>';
            } else {
                consentEl.innerText = '-';
            }

            const renderProof = (elId, path) => {
                const container = document.getElementById(elId);
                if (path) {
                    container.innerHTML = `<a href="${path}" target="_blank" class="block w-full h-full"><img src="${path}" class="w-full h-full object-cover hover:scale-105 transition-transform" /></a>`;
                } else {
                    container.innerHTML = '<span class="text-xs text-outline/60">Tidak ada</span>';
                }
            };

            renderProof('proofTiktokCreative', reg.tiktok_creative);
            renderProof('proofTiktokJernih', reg.tiktok_jernih);
            renderProof('proofIgCreative', reg.ig_creative);
            renderProof('proofIgJernih', reg.ig_jernih);

            const modal = document.getElementById('detailsModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeDetailsModal() {
            const modal = document.getElementById('detailsModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // Micro-interactions
        document.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('click', function(e) {
                if (this.classList.contains('active:scale-95')) return;
                this.style.opacity = '0.7';
                setTimeout(() => this.style.opacity = '1', 150);
            });
        });

        // Simple row highlight logic
        document.querySelectorAll('tbody tr').forEach(row => {
            row.addEventListener('click', (e) => {
                if (e.target.closest('button') || e.target.closest('a')) return;
                row.classList.toggle('bg-primary/5');
            });
        });
    </script>
</body>
</html>
