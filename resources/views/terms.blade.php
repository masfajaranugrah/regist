<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Terms & Conditions</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=block" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        try {
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        "colors": {
                            "tertiary": "#4d5d73",
                            "surface-container-high": "#dee8ff",
                            "primary": "#00685f",
                            "surface-container-lowest": "#ffffff",
                            "primary-container": "#008378",
                            "on-secondary-container": "#5b6765",
                            "surface-dim": "#cfdaf2",
                            "inverse-surface": "#263143",
                            "error": "#ba1a1a",
                            "surface": "#f9f9ff",
                            "on-surface-variant": "#3d4947",
                            "on-primary-fixed-variant": "#005049",
                            "secondary-fixed-dim": "#bcc9c6",
                            "primary-fixed-dim": "#6bd8cb",
                            "secondary": "#55615f",
                            "error-container": "#ffdad6",
                            "secondary-fixed": "#d8e5e2",
                            "inverse-on-surface": "#ecf1ff",
                            "outline": "#6d7a77",
                            "outline-variant": "#bcc9c6",
                            "on-error-container": "#93000a",
                            "on-tertiary": "#ffffff",
                            "on-primary": "#ffffff",
                            "background": "#f9f9ff",
                            "secondary-container": "#d8e5e2",
                            "on-tertiary-fixed-variant": "#38485d",
                            "on-surface": "#111c2d",
                            "on-secondary": "#ffffff",
                            "on-error": "#ffffff",
                            "inverse-primary": "#6bd8cb",
                            "on-secondary-fixed-variant": "#3d4947",
                            "on-primary-container": "#f4fffc",
                            "tertiary-container": "#66768d",
                            "surface-variant": "#d8e3fb",
                            "tertiary-fixed-dim": "#b7c8e1",
                            "primary-fixed": "#89f5e7",
                            "surface-tint": "#006a61",
                            "tertiary-fixed": "#d3e4fe",
                            "on-background": "#111c2d",
                            "on-tertiary-container": "#fdfcff",
                            "surface-container": "#e7eeff",
                            "on-tertiary-fixed": "#0b1c30",
                            "surface-container-low": "#f0f3ff",
                            "on-primary-fixed": "#00201d",
                            "surface-bright": "#f9f9ff",
                            "on-secondary-fixed": "#121e1c",
                            "surface-container-highest": "#d8e3fb"
                        },
                        "borderRadius": {
                            "DEFAULT": "0.25rem",
                            "lg": "0.5rem",
                            "xl": "0.75rem",
                            "full": "9999px"
                        },
                        "spacing": {
                            "margin-mobile": "24px",
                            "stack-sm": "8px",
                            "stack-lg": "32px",
                            "stack-md": "16px",
                            "gutter-md": "16px",
                            "section-gap": "48px"
                        },
                        "fontFamily": {
                            "body-lg": ["Plus Jakarta Sans"],
                            "label-md": ["Plus Jakarta Sans"],
                            "headline-lg-mobile": ["Plus Jakarta Sans"],
                            "body-sm": ["Plus Jakarta Sans"],
                            "headline-md": ["Plus Jakarta Sans"],
                            "label-sm": ["Plus Jakarta Sans"],
                            "headline-lg": ["Plus Jakarta Sans"]
                        },
                        "fontSize": {
                            "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                            "label-md": ["14px", {"lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "600"}],
                            "headline-lg-mobile": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                            "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                            "headline-md": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                            "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}],
                            "headline-lg": ["30px", {"lineHeight": "38px", "letterSpacing": "-0.02em", "fontWeight": "700"}]
                        }
                    },
                },
            }
        } catch (_e) {}
    </script>
    <style>
        body {
            background-color: #f9f9ff;
            font-family: 'Plus Jakarta Sans', sans-serif;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
            min-height: max(884px, 100dvh);
        }
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
        .pill-progress-segment {
            height: 6px;
            border-radius: 9999px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .bg-gradient-soft {
            background: radial-gradient(circle at top right, rgba(137, 245, 231, 0.15) 0%, transparent 40%),
                        radial-gradient(circle at bottom left, rgba(231, 238, 255, 0.5) 0%, transparent 40%);
        }
        .terms-scroll::-webkit-scrollbar {
            width: 6px;
        }
        .terms-scroll::-webkit-scrollbar-track {
            background: transparent;
        }
        .terms-scroll::-webkit-scrollbar-thumb {
            background: #bcc9c6;
            border-radius: 10px;
        }
    </style>
</head>
<body class="bg-background text-on-surface min-h-screen flex flex-col relative bg-gradient-soft selection:bg-primary-container selection:text-on-primary-container">

    <!-- Decorative background elements -->
    <div class="fixed top-20 -right-20 w-64 h-64 bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="fixed bottom-20 -left-20 w-80 h-80 bg-secondary-container/20 rounded-full blur-3xl pointer-events-none"></div>

    <!-- Top Navigation Bar -->
    <header class="w-full top-0 sticky bg-surface/80 backdrop-blur-md flex items-center justify-between px-margin-mobile h-16 w-full z-50 border-b border-outline-variant/10">
        <div class="flex items-center gap-4">
            <a href="/" class="active:scale-95 duration-150 hover:bg-secondary-container/50 transition-colors p-2 rounded-full flex items-center justify-center text-primary" aria-label="Go back">
                <span class="material-symbols-outlined" data-icon="arrow_back">arrow_back</span>
            </a>
            <h1 class="font-headline-md text-headline-md font-bold text-primary tracking-tight">Registration</h1>
        </div>
        <div class="flex items-center">
            <span class="font-label-md text-on-surface-variant bg-surface-container-high px-3 py-1 rounded-full text-xs">Step 2 of 5</span>
        </div>
    </header>

    <!-- Progress Indicator -->
    <div class="px-margin-mobile mt-6 space-y-stack-sm max-w-md mx-auto w-full">
        <div class="flex gap-2 w-full">
            <div class="pill-progress-segment bg-primary flex-1"></div>
            <div class="pill-progress-segment bg-primary flex-[1.5] shadow-sm"></div>
            <div class="pill-progress-segment bg-secondary-container/50 flex-1"></div>
            <div class="pill-progress-segment bg-secondary-container/50 flex-1"></div>
            <div class="pill-progress-segment bg-secondary-container/50 flex-1"></div>
        </div>
    </div>

    <!-- Main Content-->
    <main class="flex-grow px-margin-mobile flex flex-col max-w-md mx-auto w-full pt-6 pb-32">
        <h2 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface mb-stack-md">Syarat &amp; Ketentuan</h2>
        
        <!-- Terms Scrollable Area -->
        <div class="flex-grow bg-white border border-outline-variant rounded-xl p-4 overflow-y-auto terms-scroll max-h-[45vh] mb-stack-md shadow-sm">
            <div class="prose prose-sm text-on-surface-variant font-body-sm text-body-sm leading-relaxed">
                <h4 class="font-bold text-on-surface mb-2">1. Pendahuluan</h4>
<p class="mb-4">
Selamat datang di layanan PT Jernih Multi Komunikasi. Dengan melakukan pendaftaran dan menggunakan layanan kami, pelanggan dianggap telah membaca, memahami, dan menyetujui seluruh syarat dan ketentuan yang berlaku. Mohon membaca ketentuan ini dengan saksama sebelum melanjutkan proses registrasi.
</p>

<h4 class="font-bold text-on-surface mb-2">2. Perangkat yang Dipinjamkan</h4>
<p class="mb-4">
Perangkat telekomunikasi, seperti ONT/Modem, Router (apabila disediakan), serta perangkat pendukung lainnya merupakan milik PT Jernih Multi Komunikasi dan dipinjamkan kepada pelanggan selama masa berlangganan. Ketentuan mengenai penggunaan dan pengembalian perangkat diatur lebih lanjut dalam perjanjian kerja sama.
</p>

<h4 class="font-bold text-on-surface mb-2">3. Tanggung Jawab atas Perangkat</h4>
<p class="mb-4">
Pelanggan wajib menjaga seluruh perangkat yang dipinjamkan dalam kondisi baik. Apabila terjadi kerusakan, kehilangan, atau kerusakan yang disebabkan oleh kelalaian maupun kesengajaan pelanggan, maka pelanggan berkewajiban mengganti kerugian sesuai dengan harga perangkat yang berlaku di PT Jernih Multi Komunikasi.
</p>

<h4 class="font-bold text-on-surface mb-2">4. Masa Kontrak Berlangganan</h4>
<p class="mb-4">
Masa kontrak berlangganan adalah minimal <strong>12 (dua belas) bulan</strong>. Apabila hingga bulan ke-11 pelanggan tidak mengajukan permohonan penghentian layanan secara tertulis, maka kontrak dianggap diperpanjang secara otomatis hingga masa kontrak berikutnya (24 bulan) sesuai ketentuan yang berlaku.
</p>

<h4 class="font-bold text-on-surface mb-2">5. Penghentian Layanan</h4>
<p class="mb-4">
Apabila pelanggan menghentikan layanan secara sepihak sebelum masa kontrak berakhir, dengan alasan apa pun, maka pelanggan dikenakan biaya penalti sebesar <strong>50% dari sisa total biaya berlangganan</strong> sesuai masa kontrak yang belum berjalan. Seluruh perangkat milik PT Jernih Multi Komunikasi wajib dikembalikan dalam kondisi baik. Apabila perangkat tidak dikembalikan atau mengalami kerusakan akibat kelalaian pelanggan, maka akan dikenakan biaya penggantian sesuai harga perangkat.
</p>

<h4 class="font-bold text-on-surface mb-2">6. Pembayaran</h4>
<p class="mb-4">
Pelanggan wajib melakukan pembayaran biaya berlangganan tepat waktu sesuai tanggal jatuh tempo. Apabila terjadi keterlambatan pembayaran, PT Jernih Multi Komunikasi berhak melakukan pembatasan (limitasi) atau penghentian sementara layanan hingga pembayaran diselesaikan. Selama masa limitasi, biaya berlangganan tetap dihitung dan ditagihkan sesuai tarif normal.
</p>

<h4 class="font-bold text-on-surface mb-2">7. Privasi dan Perlindungan Data</h4>
<p class="mb-4">
PT Jernih Multi Komunikasi berkomitmen menjaga keamanan dan kerahasiaan data pribadi pelanggan. Informasi pelanggan hanya digunakan untuk keperluan administrasi, operasional layanan, dan peningkatan kualitas pelayanan. Data pelanggan tidak akan diperjualbelikan atau diberikan kepada pihak ketiga tanpa persetujuan pelanggan, kecuali diwajibkan oleh peraturan perundang-undangan yang berlaku.
</p>

<h4 class="font-bold text-on-surface mb-2">8. Perubahan Ketentuan</h4>
<p class="mb-4">
PT Jernih Multi Komunikasi berhak mengubah syarat dan ketentuan ini sewaktu-waktu sesuai kebutuhan operasional maupun ketentuan hukum yang berlaku. Setiap perubahan akan diinformasikan kepada pelanggan melalui media komunikasi resmi. Dengan tetap menggunakan layanan setelah perubahan diberlakukan, pelanggan dianggap menyetujui ketentuan yang telah diperbarui.
</p>

<p class="italic text-xs mt-4">
Terakhir diperbarui: 07 Juli 2026
</p>

            </div>
        </div>

        <!-- Checkbox Interaction -->
        <label class="flex items-start gap-4 p-4 rounded-xl border border-outline-variant bg-surface hover:bg-secondary-container/20 transition-all cursor-pointer group mb-stack-lg">
            <div class="relative flex items-center">
                <input type="checkbox" id="terms-checkbox" class="peer h-6 w-6 rounded border-outline text-primary focus:ring-primary focus:ring-offset-0 transition-all cursor-pointer appearance-none checked:bg-primary checked:border-primary">
                <span class="material-symbols-outlined absolute text-white scale-0 peer-checked:scale-100 transition-transform pointer-events-none text-lg left-1/2 -translate-x-1/2" style="font-variation-settings: 'wght' 600">check</span>
            </div>
            <span class="text-body-sm font-body-sm text-on-surface-variant select-none group-active:scale-[0.98] transition-transform">
                Saya setuju dengan <span class="text-primary font-semibold">Syarat &amp; Ketentuan</span> yang berlaku dalam platform ini.
            </span>
        </label>
    </main>

    <!-- Fixed Bottom Action Area -->
    <div class="fixed bottom-0 left-0 w-full bg-surface/80 backdrop-blur-md z-30 border-t border-outline-variant/10">
        <div class="max-w-md mx-auto px-margin-mobile pt-4 pb-10 flex flex-col gap-4">
            <button id="next-button" disabled class="w-full h-14 bg-outline-variant text-on-surface-variant font-label-md text-label-md rounded-lg flex items-center justify-center gap-2 transition-all duration-300 shadow-none cursor-not-allowed opacity-50">
                <span>Selanjutnya</span>
                <span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
            </button>

            <!-- Help/Support Links (BottomNavBar predicted component mapping) -->
            <footer class="flex justify-center items-center gap-8 pt-2">
                <button class="flex flex-col items-center justify-center text-on-surface-variant p-2 hover:bg-secondary-fixed-dim/20 transition-all rounded-lg active:scale-95 duration-200">
                    <span class="material-symbols-outlined text-xl" data-icon="help_outline">help_outline</span>
                    <span class="text-label-sm font-label-sm mt-1">Help</span>
                </button>
                <button class="flex flex-col items-center justify-center text-on-surface-variant p-2 hover:bg-secondary-fixed-dim/20 transition-all rounded-lg active:scale-95 duration-200">
                    <span class="material-symbols-outlined text-xl" data-icon="contact_support">contact_support</span>
                    <span class="text-label-sm font-label-sm mt-1">Support</span>
                </button>
            </footer>
        </div>
    </div>

    <!-- Script at the end of the page -->
    <script>
        const checkbox = document.getElementById('terms-checkbox');
        const nextButton = document.getElementById('next-button');

        checkbox.addEventListener('change', function() {
            if (this.checked) {
                // Enabled state - Modern high-end style
                nextButton.disabled = false;
                nextButton.classList.remove('bg-outline-variant', 'text-on-surface-variant', 'cursor-not-allowed', 'opacity-50', 'shadow-none');
                nextButton.classList.add('bg-primary', 'text-on-primary', 'active:scale-95', 'shadow-[0px_10px_20px_rgba(13,148,136,0.15)]');
                
                // Add a subtle entrance animation for the change
                nextButton.animate([
                    { transform: 'scale(1)', opacity: 0.8 },
                    { transform: 'scale(1.02)', opacity: 1 },
                    { transform: 'scale(1)', opacity: 1 }
                ], {
                    duration: 300,
                    easing: 'ease-out'
                });
            } else {
                // Disabled state
                nextButton.disabled = true;
                nextButton.classList.add('bg-outline-variant', 'text-on-surface-variant', 'cursor-not-allowed', 'opacity-50', 'shadow-none');
                nextButton.classList.remove('bg-primary', 'text-on-primary', 'active:scale-95', 'shadow-[0px_10px_20px_rgba(13,148,136,0.15)]');
            }
        });

        // Navigate to Step 3 (Informasi Pribadi)
        nextButton.addEventListener('click', function() {
            if (!this.disabled) {
                window.location.href = '/step-3';
            }
        });
    </script>
</body>
</html>
