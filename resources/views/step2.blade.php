<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, viewport-fit=cover" name="viewport"/>
    <title>Registration - Step 2</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet"/>
    <!-- Theme Configuration -->
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                "on-secondary-fixed-variant": "#3d4947",
                "on-primary-fixed-variant": "#005049",
                "secondary-fixed": "#d8e5e2",
                "primary-container": "#008378",
                "on-surface-variant": "#3d4947",
                "surface-container-high": "#dee8ff",
                "secondary": "#55615f",
                "surface-bright": "#f9f9ff",
                "error-container": "#ffdad6",
                "inverse-primary": "#6bd8cb",
                "on-primary-container": "#f4fffc",
                "on-background": "#111c2d",
                "outline": "#6d7a77",
                "tertiary-container": "#66768d",
                "tertiary-fixed-dim": "#b7c8e1",
                "primary": "#00685f",
                "on-tertiary-fixed-variant": "#38485d",
                "on-tertiary": "#ffffff",
                "surface-container-highest": "#d8e3fb",
                "secondary-container": "#d8e5e2",
                "secondary-fixed-dim": "#bcc9c6",
                "on-primary-fixed": "#00201d",
                "on-surface": "#111c2d",
                "surface-container-lowest": "#ffffff",
                "surface": "#f9f9ff",
                "on-error-container": "#93000a",
                "tertiary-fixed": "#d3e4fe",
                "surface-container": "#e7eeff",
                "surface-container-low": "#f0f3ff",
                "surface-dim": "#cfdaf2",
                "on-error": "#ffffff",
                "on-tertiary-fixed": "#0b1c30",
                "on-secondary-fixed": "#121e1c",
                "inverse-surface": "#263143",
                "on-tertiary-container": "#fdfcff",
                "surface-variant": "#d8e3fb",
                "background": "#f9f9ff",
                "surface-tint": "#006a61",
                "outline-variant": "#bcc9c6",
                "on-secondary": "#ffffff",
                "tertiary": "#4d5d73",
                "primary-fixed": "#89f5e7",
                "error": "#ba1a1a",
                "primary-fixed-dim": "#6bd8cb",
                "on-primary": "#ffffff",
                "on-secondary-container": "#5b6765",
                "inverse-on-surface": "#ecf1ff"
            },
            "borderRadius": {
                "DEFAULT": "0.25rem",
                "lg": "0.5rem",
                "xl": "0.75rem",
                "full": "9999px"
            },
            "spacing": {
                "section-gap": "48px",
                "gutter-md": "16px",
                "margin-mobile": "24px",
                "stack-md": "16px",
                "stack-lg": "32px",
                "stack-sm": "8px"
            },
            "fontFamily": {
                "headline-lg-mobile": ["Plus Jakarta Sans"],
                "label-md": ["Plus Jakarta Sans"],
                "body-lg": ["Plus Jakarta Sans"],
                "headline-md": ["Plus Jakarta Sans"],
                "headline-lg": ["Plus Jakarta Sans"],
                "body-sm": ["Plus Jakarta Sans"],
                "label-sm": ["Plus Jakarta Sans"]
            },
            "fontSize": {
                "headline-lg-mobile": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                "label-md": ["14px", {"lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "600"}],
                "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                "headline-md": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                "headline-lg": ["30px", {"lineHeight": "38px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}]
            }
          },
        },
      }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }
        
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            -webkit-tap-highlight-color: transparent;
        }

        .focus-ring:focus-within {
            box-shadow: 0 0 0 2px theme('colors.primary');
            border-color: theme('colors.primary');
        }

        .ambient-glow {
            background: radial-gradient(circle at top right, rgba(0, 104, 95, 0.05), transparent 40%),
                        radial-gradient(circle at bottom left, rgba(0, 104, 95, 0.03), transparent 30%);
        }
        
        body {
          min-height: max(884px, 100dvh);
        }
    </style>
</head>
<body class="bg-background text-on-surface min-h-screen flex flex-col selection:bg-primary-container selection:text-on-primary-container">
<!-- TopAppBar from JSON -->
<header class="w-full top-0 sticky z-40 bg-surface dark:bg-surface-dim flex items-center justify-between px-margin-mobile h-16 w-full">
    <div class="flex items-center gap-4">
        <a href="/" class="flex items-center justify-center p-2 rounded-full hover:bg-secondary-container/50 transition-colors active:scale-95 duration-150 text-primary dark:text-primary-fixed">
            <span class="material-symbols-outlined" data-icon="arrow_back">arrow_back</span>
        </a>
        <h1 class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed">Registration</h1>
    </div>
    <div class="flex items-center">
        <div class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-label-sm font-label-sm">
            Step 2 of 4
        </div>
    </div>
</header>
<main class="flex-grow flex flex-col relative ambient-glow px-margin-mobile pb-32">
    <!-- Progress Bar -->
    <section class="mt-stack-md flex gap-2">
        <div class="h-1.5 flex-1 rounded-full bg-primary"></div>
        <div class="h-1.5 flex-1 rounded-full bg-primary"></div>
        <div class="h-1.5 flex-1 rounded-full bg-secondary-fixed"></div>
        <div class="h-1.5 flex-1 rounded-full bg-secondary-fixed"></div>
    </section>
    <!-- Form Intro -->
    <section class="mt-stack-lg">
        <h2 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface">Informasi Pribadi</h2>
        <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Mohon lengkapi data diri Anda di bawah ini dengan benar untuk memproses pendaftaran.</p>
    </section>
    <!-- Registration Form -->
    <form class="mt-stack-lg space-y-stack-lg" id="registrationForm">
        @csrf
        <!-- Full Name -->
        <div class="space-y-stack-sm">
            <label class="font-label-md text-label-md text-on-surface-variant" for="full_name">Nama Lengkap</label>
            <div class="relative group">
                <input class="w-full h-14 px-4 bg-surface-container-lowest border border-outline-variant rounded-lg text-body-lg focus:ring-0 focus:border-primary transition-all placeholder:text-outline/50 outline-none" id="full_name" name="full_name" placeholder="Contoh: Budi Santoso" type="text"/>
                <span class="absolute right-4 top-1/2 -translate-y-1/2 text-outline/30 material-symbols-outlined" data-icon="person">person</span>
            </div>
        </div>
        <!-- ID Number -->
        <div class="space-y-stack-sm">
            <label class="font-label-md text-label-md text-on-surface-variant" for="id_number">Nomor ID</label>
            <div class="relative group">
                <input class="w-full h-14 px-4 bg-surface-container-lowest border border-outline-variant rounded-lg text-body-lg focus:ring-0 focus:border-primary transition-all placeholder:text-outline/50 outline-none" id="id_number" name="id_number" placeholder="Nomer ID " type="number"/>
                <span class="absolute right-4 top-1/2 -translate-y-1/2 text-outline/30 material-symbols-outlined" data-icon="id_card">id_card</span>
            </div>
            <p class="text-xs text-on-surface-variant/80 mt-1.5 px-1">
                Jika Anda lupa nomor ID, Anda bisa melihat di <a href="https://layanan.jernih.net.id" target="_blank" class="text-primary font-semibold hover:underline">layanan.jernih.net.id</a>
            </p>
        </div>
        <!-- Phone Number -->
        <div class="space-y-stack-sm">
            <label class="font-label-md text-label-md text-on-surface-variant" for="phone_number">Nomor Telepon</label>
            <div class="relative group">
                <input class="w-full h-14 px-4 bg-surface-container-lowest border border-outline-variant rounded-lg text-body-lg focus:ring-0 focus:border-primary transition-all placeholder:text-outline/50 outline-none" id="phone_number" name="phone_number" placeholder="Contoh: 081234567890" type="tel"/>
                <span class="absolute right-4 top-1/2 -translate-y-1/2 text-outline/30 material-symbols-outlined" data-icon="phone">phone</span>
            </div>
        </div>
        <!-- Full Address -->
        <div class="space-y-stack-sm">
            <label class="font-label-md text-label-md text-on-surface-variant" for="address">Alamat Lengkap</label>
            <div class="relative group">
                <textarea class="w-full p-4 bg-surface-container-lowest border border-outline-variant rounded-lg text-body-lg focus:ring-0 focus:border-primary transition-all placeholder:text-outline/50 outline-none resize-none" id="address" name="address" placeholder="Jl. Raya No. 123, Kelurahan, Kecamatan, Kota" rows="4"></textarea>
                <span class="absolute right-4 top-4 text-outline/30 material-symbols-outlined" data-icon="location_on">location_on</span>
            </div>
        </div>
    </form>
    <!-- Subtle Decorative Element -->
    <div class="mt-stack-lg p-6 bg-secondary-container/30 rounded-xl border border-secondary-container/50 flex gap-4 items-start">
        <div class="p-2 bg-primary-container/10 rounded-lg">
            <span class="material-symbols-outlined text-primary" data-icon="shield">shield</span>
        </div>
        <div>
            <p class="font-label-md text-label-md text-primary">Keamanan Terjamin</p>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Data Anda dienkripsi dan hanya digunakan untuk keperluan verifikasi layanan resmi.</p>
        </div>
    </div>
</main>
<!-- Fixed Bottom Action Area -->
<div class="fixed bottom-0 left-0 w-full bg-surface/80 backdrop-blur-md px-margin-mobile pt-4 pb-10 z-30">
    <button class="w-full h-14 bg-primary text-on-primary font-label-md text-label-md rounded-lg shadow-[0px_10px_20px_rgba(0,106,97,0.15)] flex items-center justify-center gap-2 active:scale-95 transition-transform" id="nextBtn">
        Selanjutnya
        <span class="material-symbols-outlined text-[18px]" data-icon="arrow_forward">arrow_forward</span>
    </button>
</div>
<!-- BottomNavBar from JSON (Filtering: This is a task-focused sub-page, but showing Help/Support as per JSON intent) -->
<!-- Suppression Logic: Suppressing standard nav to prioritize transactional flow, but keeping buttons for context -->
<footer class="fixed bottom-0 left-0 w-full z-20 flex justify-around items-center px-4 py-2 pb-safe bg-surface/50 pointer-events-none">
    <div class="hidden">
        <!-- JSON Anchors: Help, Support -->
        <div class="flex flex-col items-center justify-center text-on-surface-variant dark:text-outline-variant p-2">
            <span class="material-symbols-outlined" data-icon="help_outline">help_outline</span>
            <span class="font-label-sm text-label-sm">Help</span>
        </div>
        <div class="flex flex-col items-center justify-center text-on-surface-variant dark:text-outline-variant p-2">
            <span class="material-symbols-outlined" data-icon="contact_support">contact_support</span>
            <span class="font-label-sm text-label-sm">Support</span>
        </div>
    </div>
</footer>
<script>
    // Micro-interactions
    const inputs = document.querySelectorAll('input, textarea');
    const nextBtn = document.getElementById('nextBtn');

    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            input.parentElement.classList.add('shadow-sm');
        });
        input.addEventListener('blur', () => {
            input.parentElement.classList.remove('shadow-sm');
        });
    });

    nextBtn.addEventListener('click', (e) => {
        // Create ripple effect
        const ripple = document.createElement('span');
        ripple.classList.add('absolute', 'inset-0', 'bg-white/20', 'rounded-lg', 'animate-ping');
        nextBtn.appendChild(ripple);
        setTimeout(() => ripple.remove(), 600);
        
        // Simple validation feedback logic
        let valid = true;
        inputs.forEach(input => {
            if (!input.value.trim()) {
                input.classList.add('border-red-500');
                valid = false;
            } else {
                input.classList.remove('border-red-500');
            }
        });

        if (valid) {
            const formData = new FormData(document.getElementById('registrationForm'));
            nextBtn.disabled = true;
            nextBtn.innerHTML = 'Memproses... <span class="animate-spin inline-block w-4 h-4 border-2 border-t-transparent border-white rounded-full"></span>';
            
            fetch('/register/step-2', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    console.log('Navigating to step 3...');
                    window.location.href = '/step-3';
                } else {
                    alert('Terjadi kesalahan: ' + (data.error || 'Silakan coba lagi.'));
                    nextBtn.disabled = false;
                    nextBtn.innerHTML = 'Selanjutnya <span class="material-symbols-outlined text-[18px]" data-icon="arrow_forward">arrow_forward</span>';
                }
            })
            .catch(err => {
                console.error(err);
                alert('Gagal menghubungkan ke server.');
                nextBtn.disabled = false;
                nextBtn.innerHTML = 'Selanjutnya <span class="material-symbols-outlined text-[18px]" data-icon="arrow_forward">arrow_forward</span>';
            });
        }
    });
</script>
</body>
</html>
