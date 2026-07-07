<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Registration Successful</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .success-blob {
            filter: blur(80px);
            opacity: 0.4;
            z-index: -1;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }
        @keyframes check-draw {
            to { stroke-dashoffset: 0; }
        }
        .check-path {
            stroke-dasharray: 100;
            stroke-dashoffset: 100;
            animation: check-draw 1.2s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }
    </style>

    <style>
        body {
          min-height: max(884px, 100dvh);
        }
    </style>
</head>
<body class="bg-background text-on-surface min-h-screen flex flex-col overflow-x-hidden">
<!-- Background Decorative Elements -->
<div class="fixed top-0 left-0 w-full h-full pointer-events-none overflow-hidden -z-10">
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary-fixed-dim success-blob rounded-full"></div>
    <div class="absolute top-1/2 -right-48 w-[500px] h-[500px] bg-secondary-fixed success-blob rounded-full"></div>
    <div class="absolute -bottom-32 left-1/4 w-80 h-80 bg-tertiary-fixed success-blob rounded-full"></div>
</div>
<!-- Navigation Shell (Suppressed as per task: focused success state) -->
<header class="w-full h-16 flex items-center justify-between px-margin-mobile bg-transparent">
    <div class="font-headline-md text-headline-md font-bold text-primary">Registration</div>
    <div class="w-10 h-10 rounded-full bg-secondary-container/30 flex items-center justify-center">
        <span class="material-symbols-outlined text-primary" data-icon="done_all">done_all</span>
    </div>
</header>
<main class="flex-grow flex flex-col items-center justify-center px-margin-mobile text-center pt-8 pb-32">
    <!-- Celebration Visual -->
    <div class="relative w-64 h-64 mb-stack-lg flex items-center justify-center">
        <!-- Central Success Icon Container -->
        <div class="absolute inset-0 bg-primary-container/10 rounded-full animate-pulse"></div>
        <div class="absolute inset-4 bg-primary-container/20 rounded-full"></div>
        <div class="z-10 w-32 h-32 bg-primary rounded-full flex items-center justify-center shadow-[0px_10px_20px_rgba(13,148,136,0.2)] animate-float">
            <svg class="w-20 h-20 text-on-primary fill-none stroke-current stroke-[2.5]" stroke-linecap="round" stroke-linejoin="round" viewbox="0 0 24 24">
                <path class="check-path" d="M20 6L9 17L4 12"></path>
            </svg>
        </div>
        <!-- Floating Particles (Decorative) -->
        <div class="absolute top-4 left-8 w-4 h-4 bg-tertiary-container rounded-sm rotate-45 animate-bounce"></div>
        <div class="absolute bottom-10 right-4 w-3 h-3 bg-secondary-fixed-dim rounded-full animate-ping"></div>
        <div class="absolute top-1/2 -left-4 w-2 h-2 bg-primary-fixed-dim rounded-full"></div>
    </div>
    <!-- Success Message -->
    <div class="space-y-stack-sm mb-stack-lg max-w-md">
        <h1 class="font-headline-lg-mobile text-headline-lg-mobile md:font-headline-lg md:text-headline-lg text-on-surface">
            Registrasi Berhasil!
        </h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant px-4">
            Terima kasih telah bergabung. Akun Anda telah siap digunakan untuk mengeksplorasi layanan kami dengan tenang dan percaya diri.
        </p>
    </div>
    <!-- Action Buttons -->
    <div class="w-full max-w-sm flex flex-col gap-stack-md">
        <a href="/" class="w-full h-[56px] bg-primary text-on-primary font-label-md text-label-md rounded-lg shadow-[0px_10px_20px_rgba(13,148,136,0.15)] active:scale-95 transition-all duration-200 flex items-center justify-center">
            Ke Beranda
        </a>
    </div>
</main>

<!-- Confetti Script -->
<script>
    function createConfetti() {
        const colors = ['#00685f', '#6bd8cb', '#4d5d73', '#89f5e7'];
        for (let i = 0; i < 50; i++) {
            const confetti = document.createElement('div');
            confetti.style.position = 'fixed';
            confetti.style.width = Math.random() * 10 + 5 + 'px';
            confetti.style.height = Math.random() * 10 + 5 + 'px';
            confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
            confetti.style.left = Math.random() * 100 + 'vw';
            confetti.style.top = '-10px';
            confetti.style.borderRadius = '2px';
            confetti.style.zIndex = '99';
            confetti.style.transform = `rotate(${Math.random() * 360}deg)`;
            document.body.appendChild(confetti);

            const animation = confetti.animate([
                { transform: `translate(0, 0) rotate(0deg)`, opacity: 1 },
                { transform: `translate(${Math.random() * 100 - 50}px, 100vh) rotate(${Math.random() * 360}deg)`, opacity: 0 }
            ], {
                duration: Math.random() * 3000 + 2000,
                easing: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)'
            });

            animation.onfinish = () => confetti.remove();
        }
    }
    
    // Trigger confetti on load
    window.addEventListener('DOMContentLoaded', () => {
        setTimeout(createConfetti, 500);
    });
</script>
</body>
</html>
