<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Registration Monitor - Admin Central</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f9f9ff;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .stat-card-shadow {
            box-shadow: 0px 10px 20px rgba(13, 148, 136, 0.04);
        }
    </style>
</head>
<body class="bg-background text-on-background">
<div class="flex h-screen overflow-hidden">
    <!-- SideNavBar -->
    @include('dashboard.sidebar')

    <!-- Main Content Wrapper -->
    <div class="flex-grow flex flex-col min-w-0">
        <!-- TopNavBar -->
        <header class="w-full h-16 border-b border-secondary-container bg-surface flex justify-between items-center px-gutter-md shrink-0">
            <div class="flex items-center gap-4 flex-grow max-w-md">
                <div class="relative w-full">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-body-lg">search</span>
                    <input class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-full text-body-sm focus:outline-none focus:border-primary transition-all" placeholder="Search registrants..." type="text"/>
                </div>
            </div>
            <div class="flex items-center gap-6">
                <div class="hidden sm:flex items-center gap-1">
                    <span class="text-headline-md font-bold text-primary">Registration Monitor</span>
                </div>
                <div class="flex items-center gap-4">
                    <button class="relative p-2 text-on-surface-variant hover:text-primary transition-colors cursor-pointer active:opacity-80">
                        <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                        <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full border-2 border-surface"></span>
                    </button>
                    <button class="p-2 text-on-surface-variant hover:text-primary transition-colors cursor-pointer active:opacity-80">
                        <span class="material-symbols-outlined" data-icon="help">help</span>
                    </button>
                </div>
            </div>
        </header>
        <!-- Scrollable Content Canvas -->
        <main class="flex-grow overflow-y-auto p-gutter-md md:p-stack-lg bg-background">
            <!-- Welcome Section -->
            <div class="mb-stack-lg">
                <h2 class="font-headline-lg text-headline-lg text-on-surface">Dashboard Overview</h2>
                <p class="text-body-lg text-on-surface-variant">Real-time performance metrics for the registration cycle.</p>
            </div>
            <!-- Bento-ish Stats Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter-md mb-section-gap">
                <!-- Total Registrants -->
                <div class="bg-surface-container-lowest p-6 rounded-xl border border-secondary-container/40 stat-card-shadow flex flex-col gap-2">
                    <div class="flex justify-between items-start">
                        <div class="p-3 bg-primary/10 rounded-lg text-primary">
                            <span class="material-symbols-outlined" data-icon="group">group</span>
                        </div>
                    </div>
                    <p class="text-on-surface-variant text-label-md font-label-md mt-2">Total Registrants</p>
                    <h3 class="text-headline-lg font-headline-lg text-on-surface">{{ number_format($totalRegistrants) }}</h3>
                </div>
                <!-- Consented -->
                <div class="bg-surface-container-lowest p-6 rounded-xl border border-secondary-container/40 stat-card-shadow flex flex-col gap-2">
                    <div class="flex justify-between items-start">
                        <div class="p-3 bg-tertiary-container/10 rounded-lg text-tertiary-container">
                            <span class="material-symbols-outlined" data-icon="verified">verified</span>
                        </div>
                    </div>
                    <p class="text-on-surface-variant text-label-md font-label-md mt-2">Consented</p>
                    <h3 class="text-headline-lg font-headline-lg text-on-surface">{{ number_format($totalConsented) }}</h3>
                    <div class="w-full bg-secondary-fixed h-1.5 rounded-full mt-2">
                        <div class="bg-primary h-1.5 rounded-full" style="width: {{ $totalRegistrants > 0 ? ($totalConsented / $totalRegistrants) * 100 : 0 }}%"></div>
                    </div>
                </div>
                <!-- Pending -->
                <div class="bg-surface-container-lowest p-6 rounded-xl border border-secondary-container/40 stat-card-shadow flex flex-col gap-2">
                    <div class="flex justify-between items-start">
                        <div class="p-3 bg-error-container/20 rounded-lg text-error">
                            <span class="material-symbols-outlined" data-icon="pending_actions">pending_actions</span>
                        </div>
                    </div>
                    <p class="text-on-surface-variant text-label-md font-label-md mt-2">Pending</p>
                    <h3 class="text-headline-lg font-headline-lg text-on-surface">{{ number_format($totalPending) }}</h3>
                </div>
                <!-- Social Media Conversion -->
                <div class="bg-primary p-6 rounded-xl text-on-primary stat-card-shadow flex flex-col gap-2 relative overflow-hidden">
                    <div class="z-10 relative">
                        <div class="p-3 bg-white/20 rounded-lg inline-block">
                            <span class="material-symbols-outlined" data-icon="hub">hub</span>
                        </div>
                        <p class="text-white/80 text-label-md font-label-md mt-2">Social Media Conversion</p>
                        <h3 class="text-headline-lg font-headline-lg">{{ $conversionRate }}%</h3>
                    </div>
                    <!-- Background Accent -->
                    <div class="absolute -right-4 -bottom-4 w-24 h-24 bg-white/10 rounded-full blur-2xl"></div>
                </div>
            </div>
            <!-- Main Grid: Activity & Insights -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-stack-lg">
                <!-- Recent Activity Table (2/3 width on desktop) -->
                <div class="lg:col-span-2 bg-surface-container-lowest rounded-xl border border-secondary-container/40 stat-card-shadow overflow-hidden">
                    <div class="px-6 py-5 border-b border-secondary-container/40 flex justify-between items-center">
                        <h4 class="text-headline-md font-headline-md text-on-surface">Recent Activity</h4>
                        <a href="/dashboard/registrations" class="text-primary text-label-md font-label-md hover:underline">View All</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-surface text-on-surface-variant text-label-sm uppercase tracking-wider">
                                <tr>
                                    <th class="px-6 py-4 font-semibold">User</th>
                                    <th class="px-6 py-4 font-semibold">Status</th>
                                    <th class="px-6 py-4 font-semibold">Date</th>
                                    <th class="px-6 py-4 font-semibold text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-secondary-container/30">
                                @forelse($recentRegistrations as $reg)
                                <tr class="hover:bg-surface-container-low/50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-secondary-fixed flex items-center justify-center text-primary font-bold text-xs">
                                                {{ strtoupper(substr($reg->name ?? 'A', 0, 2)) }}
                                            </div>
                                            <div>
                                                <p class="text-body-sm font-semibold text-on-surface">{{ $reg->name ?? 'Anonymous' }}</p>
                                                <p class="text-label-sm text-on-surface-variant">{{ $reg->phone_number ?? '-' }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        @if($reg->status === 'Consented')
                                        <span class="px-2.5 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold">Consented</span>
                                        @elseif($reg->status === 'Pending')
                                        <span class="px-2.5 py-1 rounded-full bg-tertiary-container/10 text-tertiary-container text-xs font-bold">Pending</span>
                                        @else
                                        <span class="px-2.5 py-1 rounded-full bg-red-100 text-red-800 text-xs font-bold">Declined</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-body-sm text-on-surface-variant">{{ $reg->created_at->diffForHumans() }}</td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="/dashboard/registrations?search={{ urlencode($reg->name) }}" class="p-2 hover:bg-secondary-container/50 rounded-lg text-on-surface-variant transition-colors inline-block">
                                            <span class="material-symbols-outlined" data-icon="visibility">visibility</span>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-8 text-center text-on-surface-variant text-body-sm">
                                        No recent activity.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Side Panel: Quick Actions & Trends -->
                <div class="space-y-stack-lg">
                    <!-- Chart Card Placeholder -->
                    <div class="bg-surface-container-lowest p-6 rounded-xl border border-secondary-container/40 stat-card-shadow">
                        <h4 class="text-headline-md font-headline-md text-on-surface mb-4">Weekly Trend</h4>
                        <div class="h-48 w-full flex items-end gap-2 px-2">
                            <div class="w-full bg-primary/20 rounded-t-lg h-[40%] hover:bg-primary transition-all cursor-pointer relative group">
                                <span class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] px-1.5 py-0.5 rounded opacity-0 group-hover:opacity-100 transition-opacity">M</span>
                            </div>
                            <div class="w-full bg-primary/20 rounded-t-lg h-[65%] hover:bg-primary transition-all cursor-pointer relative group"></div>
                            <div class="w-full bg-primary rounded-t-lg h-[90%] hover:brightness-110 transition-all cursor-pointer relative group"></div>
                            <div class="w-full bg-primary/20 rounded-t-lg h-[55%] hover:bg-primary transition-all cursor-pointer relative group"></div>
                            <div class="w-full bg-primary/20 rounded-t-lg h-[75%] hover:bg-primary transition-all cursor-pointer relative group"></div>
                            <div class="w-full bg-primary/20 rounded-t-lg h-[45%] hover:bg-primary transition-all cursor-pointer relative group"></div>
                            <div class="w-full bg-primary/20 rounded-t-lg h-[60%] hover:bg-primary transition-all cursor-pointer relative group"></div>
                        </div>
                        <div class="flex justify-between mt-4 text-label-sm text-on-surface-variant px-1">
                            <span>Mon</span>
                            <span>Sun</span>
                        </div>
                    </div>
                    <!-- System Status Card -->
                    <div class="bg-surface-container-lowest p-6 rounded-xl border border-secondary-container/40 stat-card-shadow">
                        <h4 class="text-label-md font-label-md text-on-surface-variant uppercase mb-4 tracking-widest">Quick Actions</h4>
                        <div class="grid grid-cols-2 gap-3">
                            <a href="{{ route('dashboard.export-excel') }}" class="flex flex-col items-center justify-center p-4 rounded-xl border border-secondary-container hover:bg-secondary-container/20 transition-colors gap-2 text-center w-full">
                                <span class="material-symbols-outlined text-primary" data-icon="download">download</span>
                                <span class="text-label-sm font-semibold">Export Excel</span>
                            </a>
                            <button class="flex flex-col items-center justify-center p-4 rounded-xl border border-secondary-container hover:bg-secondary-container/20 transition-colors gap-2">
                                <span class="material-symbols-outlined text-primary" data-icon="mail">mail</span>
                                <span class="text-label-sm font-semibold">Bulk Email</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-4 rounded-xl border border-secondary-container hover:bg-secondary-container/20 transition-colors gap-2">
                                <span class="material-symbols-outlined text-primary" data-icon="edit_calendar">edit_calendar</span>
                                <span class="text-label-sm font-semibold">Schedule</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-4 rounded-xl border border-secondary-container hover:bg-secondary-container/20 transition-colors gap-2">
                                <span class="material-symbols-outlined text-primary" data-icon="share">share</span>
                                <span class="text-label-sm font-semibold">Share Link</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- Mobile Navigation (Bottom Bar) -->
<nav class="md:hidden fixed bottom-0 left-0 right-0 h-16 bg-surface-container-lowest flex items-center justify-around px-4 z-50">
    <button class="flex flex-col items-center gap-1 text-primary">
        <span class="material-symbols-outlined" data-icon="dashboard" style="font-variation-settings: 'FILL' 1;">dashboard</span>
        <span class="text-[10px] font-bold">Overview</span>
    </button>
    <button class="flex flex-col items-center gap-1 text-on-surface-variant opacity-60">
        <span class="material-symbols-outlined" data-icon="how_to_reg">how_to_reg</span>
        <span class="text-[10px] font-medium">Register</span>
    </button>
    <button class="flex flex-col items-center gap-1 text-on-surface-variant opacity-60">
        <span class="material-symbols-outlined" data-icon="settings">settings</span>
        <span class="text-[10px] font-medium">Settings</span>
    </button>
</nav>
<script>
    // Micro-interactions for table rows
    document.querySelectorAll('tr').forEach(row => {
        row.addEventListener('mouseenter', () => {
            row.style.cursor = 'pointer';
        });
    });

    // Simple Dashboard Counter Animation Simulation
    document.addEventListener('DOMContentLoaded', () => {
        const h3s = document.querySelectorAll('h3');
        h3s.forEach(h3 => {
            const finalValue = h3.innerText;
            if (!isNaN(finalValue.replace(',', '').replace('%', ''))) {
                let start = 0;
                const end = parseFloat(finalValue.replace(',', '').replace('%', ''));
                const duration = 1000;
                const step = end / (duration / 16);
                
                const animate = () => {
                    start += step;
                    if (start < end) {
                        h3.innerText = finalValue.includes('%') ? Math.floor(start) + '%' : Math.floor(start).toLocaleString();
                        requestAnimationFrame(animate);
                    } else {
                        h3.innerText = finalValue;
                    }
                };
                animate();
            }
        });
    });
</script>
</body>
</html>
