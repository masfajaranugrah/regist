<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Registration Step 3 - Social Follow</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100..900&amp;display=swap" rel="stylesheet"/>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .step-pill {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .pill-progress-segment {
            height: 6px;
            border-radius: 9999px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .social-card {
            transition: transform 0.2s ease, border-color 0.2s ease, background-color 0.2s ease;
        }
        .social-card:active {
            transform: scale(0.99);
        }
        @keyframes subtle-float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-4px); }
        }
        .float-animation {
            animation: subtle-float 3s ease-in-out infinite;
        }
    </style>
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
          min-height: max(884px, 100dvh);
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body-lg min-h-screen flex flex-col">
<!-- Top Navigation Bar -->
<header class="w-full top-0 sticky bg-surface dark:bg-surface-dim z-50 flex items-center justify-between px-margin-mobile h-16 w-full">
    <div class="flex items-center gap-4">
        <a href="/step-3" class="text-primary hover:bg-secondary-container/50 transition-colors p-2 rounded-full active:scale-95 duration-150 flex items-center justify-center">
            <span class="material-symbols-outlined">arrow_back</span>
        </a>
        <h1 class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed">Registration</h1>
    </div>
    <div class="flex items-center">
        <div class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-label-sm font-label-sm">
            Step 4 of 5
        </div>
    </div>
</header>
<main class="flex-grow px-margin-mobile pt-stack-md pb-stack-lg max-w-md mx-auto w-full">
    <!-- Progress Indicator -->
    <div class="mt-2 mb-stack-lg space-y-stack-sm w-full">
        <div class="flex gap-2 w-full">
            <div class="pill-progress-segment bg-primary flex-1"></div>
            <div class="pill-progress-segment bg-primary flex-1"></div>
            <div class="pill-progress-segment bg-primary flex-1"></div>
            <div class="pill-progress-segment bg-primary flex-[1.5] shadow-sm"></div>
            <div class="pill-progress-segment bg-secondary-container/50 flex-1"></div>
        </div>
    </div>
    <!-- Instruction Section -->
    <div class="text-center mb-stack-lg">
        <h2 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface mb-2">Ikuti kami untuk melanjutkan</h2>
        <p class="text-on-surface-variant text-body-sm">Dapatkan update terbaru dan konten eksklusif melalui media sosial kami.</p>
    </div>
    <!-- Illustration / Visual Anchor -->
    <div class="relative w-full aspect-square max-h-64 mb-stack-lg mx-auto rounded-xl overflow-hidden bg-secondary-container flex items-center justify-center">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 left-0 w-32 h-32 bg-primary-fixed blur-3xl rounded-full translate-x-[-20%] translate-y-[-20%]"></div>
            <div class="absolute bottom-0 right-0 w-32 h-32 bg-secondary-fixed-dim blur-3xl rounded-full translate-x-[20%] translate-y-[20%]"></div>
        </div>
        <div class="z-10 text-center px-4">
            <div class="bg-surface p-4 rounded-full shadow-lg inline-flex items-center justify-center mb-4 float-animation">
                <span class="material-symbols-outlined text-primary text-5xl" style="font-variation-settings: 'FILL' 1;">group_add</span>
            </div>
        </div>
    </div>
    <!-- Social Buttons Grid -->
    <div class="space-y-stack-md mb-stack-lg">
        <!-- TikTok 1 -->
        <div class="social-card w-full flex items-center justify-between p-4 bg-surface border-2 border-outline-variant rounded-xl group hover:border-primary cursor-pointer" id="btn-tiktok-1" onclick="triggerUpload('tiktok-1')">
            <div class="flex items-center gap-4 flex-grow">
                <div class="w-12 h-12 bg-on-background text-white rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 fill-current" viewbox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.17-2.89-.6-4.13-1.47-.13-.08-.24-.17-.35-.27-.01 2.44.02 4.88-.01 7.32-.12 2.36-1.27 4.67-3.22 5.97-2.03 1.37-4.74 1.71-7.01 1.05-2.73-.81-4.71-3.37-4.71-6.19 0-2.31 1.28-4.43 3.32-5.49 1.14-.58 2.45-.8 3.7-.62.01 1.43-.01 2.87.03 4.3-.7-.21-1.47-.25-2.18-.04-1.28.37-2.19 1.63-2.15 2.95.06 1.46 1.34 2.68 2.8 2.62 1.48-.06 2.65-1.32 2.64-2.79-.02-3.83-.01-7.66-.02-11.49-.01-.3-.02-.6-.03-.9z"></path></svg>
                </div>
                <div class="text-left">
                    <p class="font-label-md text-label-md text-on-surface">Jernih Creative</p>
                    <p class="text-on-surface-variant text-[12px]">@jernihcreatif</p>
                </div>
            </div>
            <!-- Buka TikTok link badge -->
            <a href="https://www.tiktok.com/@jernihcreatif?is_from_webapp=1&amp;sender_device=pc" target="_blank" onclick="event.stopPropagation();" class="flex items-center gap-1 bg-[#010101]/10 text-on-background hover:bg-[#010101]/20 px-3 py-1.5 rounded-full text-xs font-bold transition-colors mr-2">
                <span>Buka</span>
                <span class="material-symbols-outlined text-[14px]">open_in_new</span>
            </a>
            <div class="flex flex-col items-center gap-1 ml-2 pl-4 border-l border-outline-variant hover:opacity-80 transition-opacity">
                <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary hover:bg-primary/20 transition-all" id="upload-icon-tiktok-1">
                    <span class="material-symbols-outlined text-[18px]">cloud_upload</span>
                </div>
                <span class="text-[10px] font-label-sm text-on-surface-variant" id="upload-label-tiktok-1">Unggah</span>
                <input type="file" id="file-tiktok-1" class="hidden" accept="image/*" onchange="handleFileChange(event, 'tiktok-1')"/>
            </div>
        </div>
        <!-- TikTok 2 -->
        <div class="social-card w-full flex items-center justify-between p-4 bg-surface border-2 border-outline-variant rounded-xl group hover:border-primary cursor-pointer" id="btn-tiktok-2" onclick="triggerUpload('tiktok-2')">
            <div class="flex items-center gap-4 flex-grow">
                <div class="w-12 h-12 bg-on-background text-white rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 fill-current" viewbox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.17-2.89-.6-4.13-1.47-.13-.08-.24-.17-.35-.27-.01 2.44.02 4.88-.01 7.32-.12 2.36-1.27 4.67-3.22 5.97-2.03 1.37-4.74 1.71-7.01 1.05-2.73-.81-4.71-3.37-4.71-6.19 0-2.31 1.28-4.43 3.32-5.49 1.14-.58 2.45-.8 3.7-.62.01 1.43-.01 2.87.03 4.3-.7-.21-1.47-.25-2.18-.04-1.28.37-2.19 1.63-2.15 2.95.06 1.46 1.34 2.68 2.8 2.62 1.48-.06 2.65-1.32 2.64-2.79-.02-3.83-.01-7.66-.02-11.49-.01-.3-.02-.6-.03-.9z"></path></svg>
                </div>
                <div class="text-left">
                    <p class="font-label-md text-label-md text-on-surface">PT Jernih Multi Komunikasi</p>
                    <p class="text-on-surface-variant text-[12px]">@jernih.net</p>
                </div>
            </div>
            <!-- Buka TikTok link badge -->
            <a href="https://www.tiktok.com/@jernih.net?is_from_webapp=1&amp;sender_device=pc" target="_blank" onclick="event.stopPropagation();" class="flex items-center gap-1 bg-[#010101]/10 text-on-background hover:bg-[#010101]/20 px-3 py-1.5 rounded-full text-xs font-bold transition-colors mr-2">
                <span>Buka</span>
                <span class="material-symbols-outlined text-[14px]">open_in_new</span>
            </a>
            <div class="flex flex-col items-center gap-1 ml-2 pl-4 border-l border-outline-variant hover:opacity-80 transition-opacity">
                <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary hover:bg-primary/20 transition-all" id="upload-icon-tiktok-2">
                    <span class="material-symbols-outlined text-[18px]">cloud_upload</span>
                </div>
                <span class="text-[10px] font-label-sm text-on-surface-variant" id="upload-label-tiktok-2">Unggah</span>
                <input type="file" id="file-tiktok-2" class="hidden" accept="image/*" onchange="handleFileChange(event, 'tiktok-2')"/>
            </div>
        </div>
        <!-- Instagram 1 -->
        <div class="social-card w-full flex items-center justify-between p-4 bg-surface border-2 border-outline-variant rounded-xl group hover:border-primary cursor-pointer" id="btn-instagram-1" onclick="triggerUpload('instagram-1')">
            <div class="flex items-center gap-4 flex-grow">
                <div class="w-12 h-12 bg-gradient-to-tr from-[#f9ce34] via-[#ee2a7b] to-[#6228d7] text-white rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 fill-current" viewbox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.332 3.608 1.308.975.975 1.245 2.242 1.308 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.332 2.633-1.308 3.608-.975.975-2.242 1.245-3.608 1.308-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.332-3.608-1.308-.975-.975-1.245-2.242-1.308-3.608-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.332-2.633 1.308-3.608.975-.975 2.242-1.245 3.608-1.308 1.266-.058 1.646-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.355 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
                </div>
                <div class="text-left">
                    <p class="font-label-md text-label-md text-on-surface">Jernih Creative</p>
                    <p class="text-on-surface-variant text-[12px]">@jernihcreatife</p>
                </div>
            </div>
            <!-- Buka Instagram link badge -->
            <a href="https://www.instagram.com/jernihcreatife" target="_blank" onclick="event.stopPropagation();" class="flex items-center gap-1 bg-[#ee2a7b]/10 text-[#ee2a7b] hover:bg-[#ee2a7b]/20 px-3 py-1.5 rounded-full text-xs font-bold transition-colors mr-2">
                <span>Buka</span>
                <span class="material-symbols-outlined text-[14px]">open_in_new</span>
            </a>
            <div class="flex flex-col items-center gap-1 ml-2 pl-4 border-l border-outline-variant hover:opacity-80 transition-opacity">
                <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary hover:bg-primary/20 transition-all" id="upload-icon-instagram-1">
                    <span class="material-symbols-outlined text-[18px]">cloud_upload</span>
                </div>
                <span class="text-[10px] font-label-sm text-on-surface-variant" id="upload-label-instagram-1">Unggah</span>
                <input type="file" id="file-instagram-1" class="hidden" accept="image/*" onchange="handleFileChange(event, 'instagram-1')"/>
            </div>
        </div>
        <!-- Instagram 2 -->
        <div class="social-card w-full flex items-center justify-between p-4 bg-surface border-2 border-outline-variant rounded-xl group hover:border-primary cursor-pointer" id="btn-instagram-2" onclick="triggerUpload('instagram-2')">
            <div class="flex items-center gap-4 flex-grow">
                <div class="w-12 h-12 bg-gradient-to-tr from-[#f9ce34] via-[#ee2a7b] to-[#6228d7] text-white rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 fill-current" viewbox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.332 3.608 1.308.975.975 1.245 2.242 1.308 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.332 2.633-1.308 3.608-.975.975-2.242 1.245-3.608 1.308-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.332-3.608-1.308-.975-.975-1.245-2.242-1.308-3.608-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.332-2.633 1.308-3.608.975-.975 2.242-1.245 3.608-1.308 1.266-.058 1.646-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.355 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
                </div>
                <div class="text-left">
                    <p class="font-label-md text-label-md text-on-surface">PT Jernih Multi Komunikasi</p>
                    <p class="text-on-surface-variant text-[12px]">@jernihnet</p>
                </div>
            </div>
            <!-- Buka Instagram link badge -->
            <a href="https://www.instagram.com/jernihnet" target="_blank" onclick="event.stopPropagation();" class="flex items-center gap-1 bg-[#ee2a7b]/10 text-[#ee2a7b] hover:bg-[#ee2a7b]/20 px-3 py-1.5 rounded-full text-xs font-bold transition-colors mr-2">
                <span>Buka</span>
                <span class="material-symbols-outlined text-[14px]">open_in_new</span>
            </a>
            <div class="flex flex-col items-center gap-1 ml-2 pl-4 border-l border-outline-variant hover:opacity-80 transition-opacity">
                <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary hover:bg-primary/20 transition-all" id="upload-icon-instagram-2">
                    <span class="material-symbols-outlined text-[18px]">cloud_upload</span>
                </div>
                <span class="text-[10px] font-label-sm text-on-surface-variant" id="upload-label-instagram-2">Unggah</span>
                <input type="file" id="file-instagram-2" class="hidden" accept="image/*" onchange="handleFileChange(event, 'instagram-2')"/>
            </div>
        </div>
    </div>
</main>
<!-- Footer Action -->
<footer class="p-margin-mobile bg-surface">
    <button class="w-full h-[56px] bg-outline-variant text-on-secondary font-label-md rounded-lg flex items-center justify-center gap-2 cursor-not-allowed transition-all duration-300" disabled="" id="finish-btn">
        <span>Selanjutnya</span>
        <span class="material-symbols-outlined text-[18px]">chevron_right</span>
    </button>
</footer>
<!-- Padding to prevent fixed bottom nav from covering the footer button -->
<div class="h-24 w-full"></div>
<!-- Help / Support Bottom Nav -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 py-2 pb-safe bg-surface dark:bg-surface-dim shadow-[0px_-2px_10px_rgba(13,148,136,0.05)] md:hidden">
    <button class="flex flex-col items-center justify-center text-on-surface-variant dark:text-outline-variant p-2 hover:bg-secondary-fixed-dim/20 transition-all active:scale-95 duration-200">
        <span class="material-symbols-outlined">help_outline</span>
        <span class="font-label-sm text-label-sm">Help</span>
    </button>
    <button class="flex flex-col items-center justify-center text-on-surface-variant dark:text-outline-variant p-2 hover:bg-secondary-fixed-dim/20 transition-all active:scale-95 duration-200">
        <span class="material-symbols-outlined">contact_support</span>
        <span class="font-label-sm text-label-sm">Support</span>
    </button>
</nav>
<script>
    const status = {
        'tiktok-1': false,
        'tiktok-2': false,
        'instagram-1': false,
        'instagram-2': false
    };

    function triggerUpload(platform) {
        document.getElementById(`file-${platform}`).click();
    }

    function handleFileChange(event, platform) {
        const file = event.target.files[0];
        if (file) {
            const iconContainer = document.getElementById(`upload-icon-${platform}`);
            const label = document.getElementById(`upload-label-${platform}`);
            const btn = document.getElementById(`btn-${platform}`);
            
            // Show uploading state
            iconContainer.innerHTML = '<span class="material-symbols-outlined text-[18px] animate-spin text-primary">sync</span>';
            label.innerText = 'Mengunggah...';
            label.classList.remove('text-green-600', 'text-red-600', 'font-bold');
            label.classList.add('text-on-surface-variant');
            
            const formData = new FormData();
            formData.append('file', file);
            formData.append('platform', platform);
            
            fetch('/register/upload-proof', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    // Set green checkmark success state on the upload button
                    iconContainer.innerHTML = '<span class="material-symbols-outlined text-[18px] text-white">check</span>';
                    iconContainer.classList.remove('bg-primary/10', 'text-primary');
                    iconContainer.classList.add('bg-green-500');
                    
                    label.innerText = 'Selesai';
                    label.classList.remove('text-on-surface-variant');
                    label.classList.add('text-green-600', 'font-bold');

                    // Force mark this social item as toggled/followed
                    status[platform] = true;
                    
                    btn.classList.remove('border-outline-variant', 'border-red-500');
                    btn.classList.add('border-primary', 'bg-primary-container/10');
                    
                    updateFinishButton();
                } else {
                    iconContainer.innerHTML = '<span class="material-symbols-outlined text-[18px]">cloud_upload</span>';
                    label.innerText = 'Gagal';
                    label.classList.add('text-red-600', 'font-bold');
                    btn.classList.add('border-red-500');
                    alert('Gagal mengunggah file: ' + (data.error || 'Silakan coba lagi.'));
                }
            })
            .catch(err => {
                console.error(err);
                iconContainer.innerHTML = '<span class="material-symbols-outlined text-[18px]">cloud_upload</span>';
                label.innerText = 'Gagal';
                label.classList.add('text-red-600', 'font-bold');
                btn.classList.add('border-red-500');
                alert('Gagal mengunggah file. Silakan coba lagi.');
            });
        }
    }

    function updateFinishButton() {
        const finishBtn = document.getElementById('finish-btn');
        if (status['tiktok-1'] && status['tiktok-2'] && status['instagram-1'] && status['instagram-2']) {
            finishBtn.disabled = false;
            finishBtn.classList.remove('bg-outline-variant', 'cursor-not-allowed');
            finishBtn.classList.add('bg-primary', 'shadow-lg', 'active:scale-95');
        } else {
            finishBtn.disabled = true;
            finishBtn.classList.add('bg-outline-variant', 'cursor-not-allowed');
            finishBtn.classList.remove('bg-primary', 'shadow-lg', 'active:scale-95');
        }
    }

    // Add navigation action when clicking the finish button
    document.getElementById('finish-btn').addEventListener('click', function() {
        if (!this.disabled) {
            window.location.href = '/register/finish';
        }
    });
</script>
</body>
</html>
