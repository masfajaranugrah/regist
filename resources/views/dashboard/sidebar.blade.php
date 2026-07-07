<!-- SideNavBar -->
<aside class="h-screen w-64 border-r border-secondary-container dark:border-outline-variant bg-surface dark:bg-surface-container-lowest flex flex-col py-stack-lg px-gutter-md flex-shrink-0 z-50">
    <div class="mb-10 px-4">
        <h1 class="text-headline-md font-headline-md text-primary dark:text-inverse-primary font-extrabold tracking-tight">Admin Central</h1>
        <p class="text-body-sm text-on-surface-variant">Serene Dashboard</p>
    </div>
    <nav class="flex-grow space-y-2">
        <!-- Overview -->
        <a class="flex items-center gap-3 px-4 py-3 {{ request()->is('dashboard') ? 'bg-primary-container text-on-primary-container' : 'text-on-surface-variant hover:bg-secondary-container/50 dark:hover:bg-surface-container-high' }} rounded-lg transition-all duration-200 active:scale-95 group" href="/dashboard">
            <span class="material-symbols-outlined {{ request()->is('dashboard') ? '' : 'group-hover:text-primary' }}">dashboard</span>
            <span class="text-label-md font-label-md">Overview</span>
        </a>
        <!-- Registrations -->
        <a class="flex items-center gap-3 px-4 py-3 {{ request()->is('dashboard/registrations') ? 'bg-primary-container text-on-primary-container' : 'text-on-surface-variant hover:bg-secondary-container/50 dark:hover:bg-surface-container-high' }} rounded-lg transition-all duration-200 active:scale-95 group" href="/dashboard/registrations">
            <span class="material-symbols-outlined {{ request()->is('dashboard/registrations') ? '' : 'group-hover:text-primary' }}" style="font-variation-settings: 'FILL' 1;">how_to_reg</span>
            <span class="text-label-md font-label-md">Registrations</span>
        </a>
    </nav>
    <div class="mt-auto pt-6 border-t border-secondary-container/30 flex items-center gap-3 px-4">
        <img class="w-10 h-10 rounded-full object-cover" data-alt="A professional headshot of a female administrator with a friendly, confident expression, set against a blurred modern office background with soft teal accents. High-end lighting creates a polished, premium look consistent with a corporate dashboard aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2R3xW6LsltnyngBk-zHJwck5CzM11auEGtj7fnAydOxuH8bhE6jl9N89BZUDjJdJXuDDW7F29gng1z3AUqitjdrUtQvU1Y6_y7lf6n6ZR35VacE1vfxq8ftPxopP9njeQWhHCOCncODFH4dQAjynJ9DbCMcKrPsoceVzyJa6B5EPfy2jT4mu_X4252yb_xenzswkk286so1PkGBF1HF15luHnCDNk9ueqSFyTFJLN-bXA5fwrfMZSnw"/>
        <div class="overflow-hidden">
            <p class="text-label-md font-bold text-on-surface truncate">Admin User</p>
            <p class="text-body-sm text-on-surface-variant truncate">System Manager</p>
        </div>
    </div>
</aside>
