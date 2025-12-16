<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>African Wildlife App Login</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#36e27b",
                        "background-light": "#f6f8f7",
                        "background-dark": "#112117",
                        "surface-dark": "#1c2e24",
                        "surface-light": "#ffffff",
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "1rem",
                        "lg": "1.5rem",
                        "xl": "2rem",
                        "2xl": "3rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        /* Custom scrollbar hide for cleaner mobile look */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
<style>
    /* body {
      min-height: max(884px, 100dvh);
    } */
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark font-display antialiased text-gray-900 dark:text-white h-screen flex flex-col overflow-hidden">
<!-- Main Container -->
<div class="relative flex h-full w-full flex-col overflow-y-auto no-scrollbar">
<!-- Header Image Area -->
<div class="relative w-full h-[35vh] min-h-[260px] flex-shrink-0">
<!-- Background Image -->
<div class="absolute inset-0 bg-cover bg-center" data-alt="Lush green African jungle canopy with sunlight filtering through leaves" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDiFV_stPDhtssX4odXGGsFZ0naz1t7gk4mtd8TGeMPhdVH05q88ObkoQ018DhazAYqBm-wzwBMTqTCeaC3D0E9vh-THO8Yf0ntCFcWWWlufHgGN6L4XXgOrK7aQM93K3WZnxjIJZjYyQLvWol3Q10NPbD_SPYdD8rc8argTkhm3ZDYBnpGQZtIHNKowYgHwwNoLeSsYKpQiskQ80rvM89om0ouWII5eXo7sab3RDAtEl9sGyz8M0SCTfkDMlaWyiSXz_spJfqs6Kk');">
<!-- Gradient Overlay for text legibility at bottom -->
<div class="absolute inset-0 bg-gradient-to-b from-black/30 via-transparent to-background-light dark:to-background-dark"></div>
</div>
<!-- Top Bar -->
<div class="absolute top-0 left-0 w-full p-4 pt-8 flex justify-between items-center z-10">
<button class="flex items-center justify-center size-10 rounded-full bg-black/20 backdrop-blur-md text-white border border-white/10 active:scale-95 transition-transform">
<span class="material-symbols-outlined">arrow_back</span>
</button>
<div class="bg-primary/90 text-background-dark px-3 py-1 rounded-full text-xs font-bold tracking-wide uppercase shadow-lg">
                    Safari Kids
                </div>
</div>
</div>
<!-- Content Body - Spills up slightly over the image -->
<div class="relative flex-1 flex flex-col px-6 -mt-8 z-10">
<!-- Welcome Header -->
<div class="text-center mb-8">
<h1 class="text-3xl font-bold tracking-tight mb-2 text-gray-900 dark:text-white drop-shadow-sm">
                    Welcome back, Explorer!
                </h1>
<p class="text-gray-600 dark:text-gray-400 text-sm font-medium">
                    Log in to continue your wild adventure.
                </p>
</div>

<form class="flex flex-col gap-5 w-full max-w-sm mx-auto">

<div class="space-y-1.5">
<label class="text-sm font-semibold text-gray-700 dark:text-gray-300 ml-2">Email Address</label>
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-500 dark:text-gray-400 group-focus-within:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">mail</span>
</div>
<input class="w-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-gray-700 rounded-2xl py-3.5 pl-11 pr-4 text-gray-900 dark:text-white placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all shadow-sm" placeholder="explorer@safari.com" type="email"/>
</div>
</div>

<div class="space-y-1.5">
<label class="text-sm font-semibold text-gray-700 dark:text-gray-300 ml-2">Password</label>
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-500 dark:text-gray-400 group-focus-within:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">lock</span>
</div>
<input class="w-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-gray-700 rounded-2xl py-3.5 pl-11 pr-12 text-gray-900 dark:text-white placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all shadow-sm" placeholder="" type="password"/>
<button class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600 dark:hover:text-gray-200 transition-colors" type="button">
<span class="material-symbols-outlined text-[20px]">visibility</span>
</button>
</div>
</div>

<div class="flex items-center justify-between pt-1">
<label class="flex items-center gap-2 cursor-pointer group">
<div class="relative flex items-center">
<input class="peer h-5 w-5 cursor-pointer appearance-none rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-surface-dark checked:border-primary checked:bg-primary transition-all" type="checkbox"/>
<span class="absolute text-background-dark opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 pointer-events-none">
<span class="material-symbols-outlined text-[16px] font-bold">check</span>
</span>
</div>
<span class="text-sm font-medium text-gray-600 dark:text-gray-400 group-hover:text-gray-800 dark:group-hover:text-gray-200 transition-colors">Remember me</span>
</label>
<a class="text-sm font-semibold text-primary hover:text-primary/80 transition-colors" href="#">Forgot Password?</a>
</div>

<button class="w-full bg-primary hover:bg-[#2dd46e] text-background-dark font-bold text-lg py-4 rounded-2xl shadow-lg shadow-primary/20 active:scale-[0.98] transition-all flex items-center justify-center gap-2 mt-4" type="button">
<span>Log In</span>
<span class="material-symbols-outlined">login</span>
</button>
</form>
<div style="width: 100px ;"></div>

<div class="mt-8 mb-6 relative flex items-center justify-center w-full max-w-sm mx-auto">
<div class="absolute inset-x-0 h-px bg-gray-200 dark:bg-gray-700"></div>
<span class="relative bg-background-light dark:bg-background-dark px-4 text-xs font-medium text-gray-500 uppercase tracking-wider">Or continue with</span>
</div>



<div class="mt-auto pb-6 text-center">
<p class="text-sm text-gray-500 dark:text-gray-400">
                    Don't have an account? 
                    <a class="text-primary font-bold hover:underline decoration-2 underline-offset-2" href="#">Start your journey</a>
</p>
</div>
</div>
</div>
</body></html>