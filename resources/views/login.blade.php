<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Admin Central | Login</title>
    <!-- Google Fonts: Plus Jakarta Sans & Material Symbols -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f9f9ff;
            overflow: hidden;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .serene-glass {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(226, 232, 240, 0.5);
        }
        .floating-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            z-index: -1;
            opacity: 0.4;
            animation: float 20s infinite alternate ease-in-out;
        }
        @keyframes float {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(40px, -60px) scale(1.1); }
        }
        .shadow-serene {
            box-shadow: 0px 10px 20px rgba(13, 148, 136, 0.08);
        }
        input:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(0, 104, 95, 0.1);
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen relative p-margin-mobile">
<!-- Decorative Animated Background Elements -->
<div class="floating-orb w-96 h-96 bg-primary-fixed top-[-10%] left-[-5%]"></div>
<div class="floating-orb w-[500px] h-[500px] bg-tertiary-fixed-dim bottom-[-15%] right-[-10%]" style="animation-delay: -5s;"></div>
<div class="floating-orb w-64 h-64 bg-secondary-fixed top-[40%] right-[10%]" style="animation-delay: -2s;"></div>
<!-- Login Container -->
<main class="w-full max-w-md z-10">
    <div class="flex flex-col items-center mb-stack-lg">
        <div class="w-16 h-16 bg-primary rounded-xl flex items-center justify-center mb-stack-sm shadow-serene">
            <span class="material-symbols-outlined text-on-primary text-4xl">dashboard</span>
        </div>
        <h1 class="text-headline-lg font-headline-lg text-on-background tracking-tight">Admin Central</h1>
        <p class="text-body-lg font-body-lg text-on-surface-variant">Serene Dashboard Access</p>
    </div>
    <!-- Card Section -->
    <div class="serene-glass rounded-xl p-8 md:p-10 shadow-serene w-full">
        <form class="space-y-stack-md" id="loginForm">
            <!-- Email Field -->
            <div class="space-y-2">
                <label class="text-label-md font-label-md text-on-surface" for="email">Email Address</label>
                <div class="relative flex items-center">
                    <span class="material-symbols-outlined absolute left-4 text-outline">mail</span>
                    <input class="w-full pl-12 pr-4 py-4 bg-surface-container-lowest border border-outline-variant rounded-lg text-body-lg font-body-lg focus:border-primary transition-all duration-200" id="email" name="email" placeholder="name@company.com" required="" type="email"/>
                </div>
            </div>
            <!-- Password Field -->
            <div class="space-y-2">
                <div class="flex justify-between items-center">
                    <label class="text-label-md font-label-md text-on-surface" for="password">Password</label>
                    <a class="text-label-sm font-label-sm text-primary hover:underline transition-all" href="#">Forgot password?</a>
                </div>
                <div class="relative flex items-center">
                    <span class="material-symbols-outlined absolute left-4 text-outline">lock</span>
                    <input class="w-full pl-12 pr-12 py-4 bg-surface-container-lowest border border-outline-variant rounded-lg text-body-lg font-body-lg focus:border-primary transition-all duration-200" id="password" name="password" placeholder="••••••••" required="" type="password"/>
                    <button class="absolute right-4 text-outline hover:text-primary transition-colors" onclick="togglePassword()" type="button">
                        <span class="material-symbols-outlined" id="passIcon">visibility</span>
                    </button>
                </div>
            </div>
            <!-- Security Check -->
            <div class="flex items-center gap-stack-sm pt-2">
                <input class="w-5 h-5 rounded-sm border-outline-variant text-primary focus:ring-primary-container transition-all" id="remember" type="checkbox"/>
                <label class="text-label-md font-label-md text-on-surface-variant cursor-pointer" for="remember">Keep me signed in</label>
            </div>
            <!-- Sign In Button -->
            <button class="w-full py-4 mt-stack-md bg-primary text-on-primary rounded-lg font-headline-md text-headline-md shadow-serene hover:bg-primary-container transition-all duration-300 transform active:scale-[0.98] flex items-center justify-center gap-2" type="submit">
                <span>Sign In</span>
                <span class="material-symbols-outlined">arrow_forward</span>
            </button>
        </form>
        <!-- Support Footer -->
        <div class="mt-8 pt-8 border-t border-outline-variant flex flex-col items-center gap-stack-sm">
            <p class="text-body-sm font-body-sm text-on-surface-variant">Trouble logging in?</p>
            <button class="text-label-md font-label-md text-primary flex items-center gap-1 hover:gap-2 transition-all">
                Contact IT Support
                <span class="material-symbols-outlined text-[18px]">support_agent</span>
            </button>
        </div>
    </div>
    <!-- Bottom Branding -->
    <p class="text-center mt-stack-lg text-label-sm font-label-sm text-outline opacity-60">
        © 2024 Registration Monitor Ecosystem. All rights reserved.
    </p>
</main>
<!-- Side Illustration/Atmosphere (Visible on larger screens) -->
<div class="hidden lg:block fixed left-0 top-0 bottom-0 w-1/4 h-full pointer-events-none opacity-20">
    <div class="w-full h-full bg-cover bg-center" data-alt="A macro photography shot of soft teal silk fabric rippling under gentle, diffused light. The aesthetic is clean, minimalist, and serene, with subtle gradients of light blue and deep turquoise. The overall atmosphere is calming and professional, mirroring a modern luxury spa or premium digital service." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXu7BW743XTe7o_6xfj2LxlgNOHW_mifKmT5sEmm4Xd-WoUd7FWCPh-05TBJRm0djh2qBv4szGWj-YeYpj-0WtvFVS8H9V7hDTrU0oEG-gNdox-xS27wvWe7lBJrN1oXOOGfrmJh7aNqXNQM2TjiryT2sF6AduputJ2UMvzl5p8bLMKYfhpf4HghegXUluLXlfxliQZPAV9SfzKNEc5Wp-JLy8fiaGZbz8FTLrg5WyQzYGAPO3MCyp1Q2g')"></div>
</div>
<div class="hidden lg:block fixed right-0 top-0 bottom-0 w-1/4 h-full pointer-events-none opacity-20 transform scale-x-[-1]">
    <div class="w-full h-full bg-cover bg-center" data-alt="Abstract translucent glass shapes floating in a bright, ethereal white void. The shapes are tinted with soft teal and mint green hues, catching the light like polished crystals. The composition is asymmetrical and modern, representing clarity, order, and high-end professional design. The mood is breathable and quiet." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCNwOmMDD9g7JOouI59viYbtFFLdTHBlfKVnqzG1oG827geb0S_8Y_7743tRvKKGhuOGKUND3icUYEIl_CDUbq6jiV9sC17jdIzKWKeh2tSMxM-Ol7xdBNbIW79XNxWwZHwSru9MT8zfUGibU2Mh82YDQAsRkFex88AVIYHTnmx2lfkMqK9wDvD4DDbo9U5PUsfRuHS504tFtnlriT80etreR1GdbRLfHugY9A8igl0LvNOWncy0-oSxg')"></div>
</div>
<script>
    function togglePassword() {
        const passInput = document.getElementById('password');
        const passIcon = document.getElementById('passIcon');
        if (passInput.type === 'password') {
            passInput.type = 'text';
            passIcon.textContent = 'visibility_off';
        } else {
            passInput.type = 'password';
            passIcon.textContent = 'visibility';
        }
    }

    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const btn = e.target.querySelector('button[type="submit"]');
        const originalContent = btn.innerHTML;
        
        // Interaction Feedback
        btn.disabled = true;
        btn.innerHTML = '<span class="material-symbols-outlined animate-spin">progress_activity</span> Authenticating...';
        
        setTimeout(() => {
            btn.classList.add('bg-primary-container');
            btn.innerHTML = '<span class="material-symbols-outlined">check_circle</span> Welcome back';
            
            // Redirect to dashboard
            setTimeout(() => {
                btn.innerHTML = originalContent;
                btn.disabled = false;
                window.location.href = '/dashboard';
            }, 1000);
        }, 1500);
    });
</script>
</body>
</html>
