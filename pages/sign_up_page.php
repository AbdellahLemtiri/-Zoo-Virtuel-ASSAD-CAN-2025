<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Safari App - Sign Up</title>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#36e27b",
                        "background-light": "#f6f8f7",
                        "background-dark": "#112117",
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px"},
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
<body class="font-display bg-background-light dark:bg-background-dark min-h-screen selection:bg-primary selection:text-background-dark">
<!-- Main Container with Background Image Overlay -->
<div class="relative flex min-h-screen w-full flex-col items-center justify-center overflow-hidden">
<!-- Background Image -->
<div class="absolute inset-0 z-0 h-full w-full bg-cover bg-center" data-alt="Wide shot of African savanna at dusk with silhouettes of trees" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuARZR0j-KQhugSKQziLJJO2uGjBbmirZ68WsUelv7Zsq3maB372MO2nV1B5dQ7oGZP10ARG3FnC9nSaT2WJ8HPuLAVSMOMx0W2IBzLDZs3V6EcKqrhMfcRMJZd3lmDShiMmI_MVVpfsrx9N9kum5gglmNzI7BwJZnqe41Z492u485MGcs9iwb-8W8LyxQu1j12Y4j5LG_iJ3ja072U5KjgEa7mAQ6bfShfD1cBFns6FXOy1srMEeGYL4lAM8VXiv6fDWtjBf-o5O6o');">
<!-- Dark Overlay for readability -->
<div class="absolute inset-0 bg-background-dark/80 backdrop-blur-[2px]"></div>
</div>
<!-- Card Container -->
<div class="relative z-10 w-full max-w-md px-4 py-8 md:px-6">
<!-- Glass Card -->
<div class="flex flex-col gap-6 rounded-lg bg-background-dark/60 p-6 shadow-2xl backdrop-blur-md border border-white/5">
<!-- Header Section -->
<div class="flex flex-col items-center gap-2 text-center">
<div class="flex h-16 w-16 items-center justify-center rounded-full bg-primary/20 text-primary mb-2">
<span class="material-symbols-outlined text-4xl">pets</span>
</div>
<h1 class="text-white tracking-tight text-3xl font-bold leading-tight">Join the Safari</h1>
<p class="text-gray-300 text-base font-normal leading-normal max-w-xs">Start your adventure into the wild today. Create your account.</p>
</div>
<!-- Form Section -->
<form class="flex flex-col gap-5" onsubmit="event.preventDefault()">
<!-- Role Switcher -->
<div class="flex flex-col gap-2">
<span class="text-xs font-medium text-gray-400 uppercase tracking-wider ml-3">Select your role</span>
<div class="flex w-full rounded-full bg-background-dark p-1 border border-white/10">
<label class="cursor-pointer flex-1 relative">
<input checked="" class="peer sr-only" name="role" type="radio" value="Visitor"/>
<div class="flex items-center justify-center rounded-full py-2.5 px-4 text-sm font-medium text-gray-400 transition-all duration-200 peer-checked:bg-primary peer-checked:text-background-dark peer-checked:shadow-lg">
<span class="material-symbols-outlined mr-2 text-[18px]">hiking</span>
<span>Visitor</span>
</div>
</label>
<label class="cursor-pointer flex-1 relative">
<input class="peer sr-only" name="role" type="radio" value="Guide"/>
<div class="flex items-center justify-center rounded-full py-2.5 px-4 text-sm font-medium text-gray-400 transition-all duration-200 peer-checked:bg-primary peer-checked:text-background-dark peer-checked:shadow-lg">
<span class="material-symbols-outlined mr-2 text-[18px]">explore</span>
<span>Guide</span>
</div>
</label>
</div>
<!-- Dynamic Info Text (using CSS peer to simulate state logic for "Guide") -->
<!-- This block is normally hidden, we'll show a static example or leave it as a general note for the design -->
<div class="mt-1 flex items-start gap-2 rounded-xl bg-primary/10 p-3 text-primary text-sm">
<span class="material-symbols-outlined text-[18px] mt-0.5">info</span>
<span class="leading-tight">Guide accounts require admin approval and license verification.</span>
</div>
</div>
<!-- Inputs Group -->
<div class="flex flex-col gap-4">
<!-- Name Field -->
<div class="relative group">
<div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-primary transition-colors">
<span class="material-symbols-outlined">person</span>
</div>
<input class="w-full rounded-full bg-background-dark/50 border border-white/10 py-3.5 pl-12 pr-4 text-white placeholder-gray-500 outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="Full Name" type="text"/>
</div>
<!-- Email Field -->
<div class="relative group">
<div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-primary transition-colors">
<span class="material-symbols-outlined">mail</span>
</div>
<input class="w-full rounded-full bg-background-dark/50 border border-white/10 py-3.5 pl-12 pr-4 text-white placeholder-gray-500 outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="Email Address" type="email"/>
</div>
<!-- Password Field -->
<div class="relative group">
<div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-primary transition-colors">
<span class="material-symbols-outlined">lock</span>
</div>
<input class="w-full rounded-full bg-background-dark/50 border border-white/10 py-3.5 pl-12 pr-4 text-white placeholder-gray-500 outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="Password" type="password"/>
</div>
<!-- Confirm Password Field -->
<div class="relative group">
<div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-primary transition-colors">
<span class="material-symbols-outlined">lock_reset</span>
</div>
<input class="w-full rounded-full bg-background-dark/50 border border-white/10 py-3.5 pl-12 pr-4 text-white placeholder-gray-500 outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="Confirm Password" type="password"/>
</div>
</div>
<!-- Submit Button -->
<button class="mt-2 w-full rounded-full bg-primary py-4 text-base font-bold text-background-dark shadow-lg shadow-primary/20 hover:bg-primary/90 hover:shadow-primary/40 active:scale-[0.98] transition-all duration-200">
                        Start Exploring
                    </button>
<!-- Footer -->
<div class="text-center">
<p class="text-sm text-gray-400">
                            Already a member? 
                            <a class="font-semibold text-primary hover:text-white transition-colors" href="#">Log in</a>
</p>
</div>
</form>
</div>
<!-- Bottom Spacer -->
<div class="h-8"></div>
</div>
</div>
</body></html>