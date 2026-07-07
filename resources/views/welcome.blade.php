<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Registration - Consent</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <!-- Tailwind Configuration -->
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
        body {
            background-color: #f9f9ff;
            font-family: 'Plus Jakarta Sans', sans-serif;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .pill-progress-segment {
            height: 6px;
            border-radius: 9999px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .premium-shadow {
            box-shadow: 0 10px 40px -10px rgba(0, 104, 95, 0.12);
        }
        .button-hover-effect {
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .button-hover-effect:active {
            transform: scale(0.97);
        }
        .bg-gradient-soft {
            background: radial-gradient(circle at top right, rgba(137, 245, 231, 0.15) 0%, transparent 40%),
                        radial-gradient(circle at bottom left, rgba(231, 238, 255, 0.5) 0%, transparent 40%);
        }
        .glow-effect {
            box-shadow: 0 0 30px rgba(0, 104, 95, 0.15);
        }
    </style>
</head>
<body class="bg-background text-on-surface min-h-screen flex flex-col relative bg-gradient-soft">
<!-- Decorative background elements -->
<div class="fixed top-20 -right-20 w-64 h-64 bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>
<div class="fixed bottom-20 -left-20 w-80 h-80 bg-secondary-container/20 rounded-full blur-3xl pointer-events-none"></div>
<!-- Top Navigation Bar -->
<header class="w-full top-0 sticky bg-surface/80 backdrop-blur-md flex items-center justify-between px-margin-mobile h-16 w-full z-50 border-b border-outline-variant/10">
    <div class="flex items-center gap-4">
        <button class="active:scale-95 duration-150 hover:bg-secondary-container/50 transition-colors p-2 rounded-full">
            <span class="material-symbols-outlined text-primary" data-icon="arrow_back">arrow_back</span>
        </button>
        <h1 class="font-headline-md text-headline-md font-bold text-primary tracking-tight">Registration</h1>
    </div>
    <div class="flex items-center">
        <span class="font-label-md text-on-surface-variant bg-surface-container-high px-3 py-1 rounded-full text-xs">Step 1 of 4</span>
    </div>
</header>
<!-- Progress Indicator -->
<div class="px-margin-mobile mt-6 space-y-stack-sm">
    <div class="flex gap-2 w-full">
        <div class="pill-progress-segment bg-primary flex-[1.5] shadow-sm"></div>
        <div class="pill-progress-segment bg-secondary-container/50 flex-1"></div>
        <div class="pill-progress-segment bg-secondary-container/50 flex-1"></div>
        <div class="pill-progress-segment bg-secondary-container/50 flex-1"></div>
    </div>
</div>
<!-- Main Content Canvas -->
<main class="flex-1 flex flex-col items-center justify-center px-margin-mobile py-stack-lg z-10">
    <!-- Registration Consent Card -->
    <div class="w-full max-w-md bg-white/70 backdrop-blur-xl rounded-[2rem] p-8 border border-white/50 flex flex-col items-center text-center space-y-stack-lg premium-shadow">
        <!-- Hero Illustration/Icon Container -->
        <div class="relative">
            <div class="absolute inset-0 bg-primary/20 blur-2xl rounded-full scale-110 animate-pulse"></div>
            <div class="w-24 h-24 rounded-3xl bg-primary flex items-center justify-center relative glow-effect rotate-3">
                <span class="material-symbols-outlined text-white text-[44px] -rotate-3" data-icon="verified_user" style="font-variation-settings: 'FILL' 1;">verified_user</span>
            </div>
        </div>
        <!-- Content -->
        <div class="space-y-4">
            <h2 class="font-headline-lg text-2xl text-on-surface leading-tight tracking-tight">Persetujuan Pendaftaran Ulang</h2>
            <p class="font-body-lg text-on-surface-variant/80 px-2 leading-relaxed">Apakah Anda bersedia untuk melakukan pendaftaran ulang? Khusus untuk pelanggan yang mendaftar ulang sekarang, Anda akan mendapatkan <span class="text-primary font-bold">penambahan kecepatan sebesar 10 Mbps</span>.</p>
        </div>
        <!-- Visual Decorative Element -->
        <div class="w-full h-24 rounded-2xl overflow-hidden relative opacity-95 group">
            <div class="w-full h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-110" data-alt="Abstract tech landscape" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDEO9HUzObs_l6E7ueCsxEGRn5qPrhO8GjP0LtMCV0vyEcBdQZUQsjAgrj7NwvZnHebwh0YMHG0N9zaSoqB-hHNgi2BpYD61WnyRdBfWFrhFUgnrx9kNdFrlzXLUKh_xW8ZtsCvzVNzU8buYFaW4izKoqaxIbWj1szPs9abAy1H0WZu6S7YQyF6STbsNuJinlPAK_yoMEiO-Np_wfvA9zsCXbBiYtMjpli-VlV4uMA0FbrthquzSxSo1g')"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-white to-transparent"></div>
        </div>
        <!-- Action Buttons -->
        <div class="w-full flex flex-col gap-4 pt-4">
            <form action="{{ route('register.start') }}" method="POST" class="w-full">
                @csrf
                <button type="submit" class="w-full h-[60px] bg-primary text-on-primary rounded-2xl font-semibold text-label-md flex items-center justify-center button-hover-effect shadow-lg shadow-primary/20 hover:shadow-xl hover:shadow-primary/30">
                    Ya, Saya Bersedia
                </button>
            </form>
            <div class="w-full">
                <button type="button" disabled class="w-full h-[60px] bg-gray-100 dark:bg-surface-container-high text-gray-400 dark:text-outline-variant/60 border border-gray-200 dark:border-outline-variant/30 rounded-2xl font-semibold text-label-md flex items-center justify-center cursor-not-allowed opacity-60">
                    Tidak
                </button>
            </div>
        </div>
    </div>
    <!-- Trust Badge -->
    <div class="mt-8 flex items-center gap-2 px-4 py-2 bg-surface-container-low/50 rounded-full border border-outline-variant/10">
        <span class="material-symbols-outlined text-[18px] text-primary/60" data-icon="lock">lock</span>
        <span class="font-label-sm text-on-surface-variant/70">Data Anda dilindungi enkripsi industri</span>
    </div>
</main>
<!-- Bottom Utility Bar -->
<footer class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-6 py-3 pb-8 bg-surface/90 backdrop-blur-md border-t border-outline-variant/10">
    <button class="flex flex-col items-center justify-center text-on-surface-variant group">
        <div class="p-2 rounded-xl group-hover:bg-primary/5 transition-colors">
            <span class="material-symbols-outlined mb-0.5 group-hover:text-primary transition-colors" data-icon="help_outline">help_outline</span>
        </div>
        <span class="font-label-sm text-[10px] uppercase tracking-wider font-bold">Help</span>
    </button>
    <button class="flex flex-col items-center justify-center text-on-surface-variant group">
        <div class="p-2 rounded-xl group-hover:bg-primary/5 transition-colors">
            <span class="material-symbols-outlined mb-0.5 group-hover:text-primary transition-colors" data-icon="contact_support">contact_support</span>
        </div>
        <span class="font-label-sm text-[10px] uppercase tracking-wider font-bold">Support</span>
    </button>
</footer>
<!-- Padding for footer -->
<div class="h-24 w-full"></div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Subtle entrance animations
        const card = document.querySelector('main > div');
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            card.style.transition = 'all 0.8s cubic-bezier(0.16, 1, 0.3, 1)';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 100);
    });
</script>
</body>
</html>
