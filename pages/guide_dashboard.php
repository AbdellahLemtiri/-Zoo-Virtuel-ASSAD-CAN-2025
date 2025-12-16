<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Guide Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
            extend: {
                colors: {
                "primary": "#52d411",
                "background-light": "#f6f8f6",
                "background-dark": "#162210",
                "surface-light": "#ffffff",
                "surface-dark": "#1f2b1a",
                },
                fontFamily: {
                "display": ["Inter", "sans-serif"]
                },
                borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
            },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .icon-filled {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        /* Hide scrollbar for clean UI */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#131811] dark:text-[#e2e4e0] antialiased transition-colors duration-300">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden pb-24">
<!-- TopAppBar -->
<header class="sticky top-0 z-40 flex items-center justify-between bg-surface-light/80 dark:bg-surface-dark/80 px-4 py-3 backdrop-blur-md border-b border-gray-200/50 dark:border-white/5">
<div class="flex items-center gap-3">
<button class="flex size-10 items-center justify-center rounded-full text-[#131811] dark:text-white hover:bg-black/5 dark:hover:bg-white/10 active:scale-95 transition-all">
<span class="material-symbols-outlined">menu</span>
</button>
<h1 class="text-lg font-bold tracking-tight">Guide Dashboard</h1>
</div>
<div class="flex items-center gap-3">
<button class="relative flex size-10 items-center justify-center rounded-full text-[#131811] dark:text-white hover:bg-black/5 dark:hover:bg-white/10 active:scale-95 transition-all">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute right-2 top-2 h-2 w-2 rounded-full bg-primary ring-2 ring-white dark:ring-[#1f2b1a]"></span>
</button>
<button class="size-9 overflow-hidden rounded-full border-2 border-primary ring-2 ring-transparent transition-all active:scale-95">
<img alt="Profile picture of Guide Sarah" class="h-full w-full object-cover" data-alt="Portrait of a female guide smiling in outdoor gear" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBa7IlH3RTrB8_6C8Pt5UTeVHq66albl4w8eOW6NdbWBmbZPY_4UeWOeGYKlI5hBRWV52WTHYquUBMZFkWIe327Lk8ABjfmVO_6FihfHAi8HiKtsd59nLwUMQMkcVEy15NEAHpWHj-raNuLjY6aEnGqyHyHuLx2CZOpuiRG7zpmueR6I5K7iN-miADBoA44IIFT6AiYKGpGElfFI9qV1V0ZR0nEzcBSOl0EEnPkF3XW5g9rZkkpHT9jZhmo1bu6SPFJN2CXAZ8gF_w"/>
</button>
</div>
</header>
<!-- HeadlineText -->
<div class="px-5 pt-6 pb-2">
<h2 class="tracking-tight text-[28px] font-bold leading-tight text-gray-900 dark:text-white">Jambo, Sarah! 🌿</h2>
<p class="mt-1 text-base font-medium text-gray-500 dark:text-gray-400">Here's what's happening in the wild today.</p>
</div>
<!-- Stats Section -->
<div class="w-full overflow-x-auto px-5 pb-6 pt-4 no-scrollbar">
<div class="flex gap-4">
<!-- Stat Card 1 -->
<div class="flex min-w-[160px] flex-1 flex-col gap-3 rounded-2xl bg-surface-light dark:bg-surface-dark p-5 shadow-[0_2px_12px_rgba(0,0,0,0.04)] border border-gray-100 dark:border-white/5">
<div class="flex items-center gap-2">
<div class="flex size-8 items-center justify-center rounded-full bg-primary/10 dark:bg-primary/20 text-primary">
<span class="material-symbols-outlined text-[20px]">tour</span>
</div>
<p class="text-sm font-semibold text-gray-600 dark:text-gray-300">Upcoming</p>
</div>
<div>
<p class="tracking-tight text-3xl font-bold text-gray-900 dark:text-white">12</p>
<p class="text-xs font-medium text-primary mt-1 flex items-center gap-0.5">
<span class="material-symbols-outlined text-[14px]">trending_up</span>
                            +2 this week
                        </p>
</div>
</div>
<!-- Stat Card 2 -->
<div class="flex min-w-[160px] flex-1 flex-col gap-3 rounded-2xl bg-surface-light dark:bg-surface-dark p-5 shadow-[0_2px_12px_rgba(0,0,0,0.04)] border border-gray-100 dark:border-white/5">
<div class="flex items-center gap-2">
<div class="flex size-8 items-center justify-center rounded-full bg-orange-100 dark:bg-orange-900/30 text-orange-600 dark:text-orange-400">
<span class="material-symbols-outlined text-[20px]">person_add</span>
</div>
<p class="text-sm font-semibold text-gray-600 dark:text-gray-300">Pending</p>
</div>
<div>
<p class="tracking-tight text-3xl font-bold text-gray-900 dark:text-white">3</p>
<p class="text-xs font-medium text-orange-600 dark:text-orange-400 mt-1">Action needed</p>
</div>
</div>
<!-- Stat Card 3 -->
<div class="flex min-w-[160px] flex-1 flex-col gap-3 rounded-2xl bg-surface-light dark:bg-surface-dark p-5 shadow-[0_2px_12px_rgba(0,0,0,0.04)] border border-gray-100 dark:border-white/5">
<div class="flex items-center gap-2">
<div class="flex size-8 items-center justify-center rounded-full bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400">
<span class="material-symbols-outlined text-[20px]">payments</span>
</div>
<p class="text-sm font-semibold text-gray-600 dark:text-gray-300">Earnings</p>
</div>
<div>
<p class="tracking-tight text-3xl font-bold text-gray-900 dark:text-white">$1.2k</p>
<p class="text-xs font-medium text-emerald-600 dark:text-emerald-400 mt-1 flex items-center gap-0.5">
<span class="material-symbols-outlined text-[14px]">trending_up</span>
                            +15%
                        </p>
</div>
</div>
</div>
</div>
<!-- Adapted Sidebar Menu -> Quick Actions Grid -->
<div class="px-5 mb-2">
<h3 class="mb-3 text-sm font-bold uppercase tracking-wider text-gray-400 dark:text-gray-500">Guide Actions</h3>
<div class="grid grid-cols-2 gap-3">
<button class="group flex flex-col items-center justify-center gap-2 rounded-xl bg-primary text-[#131811] p-4 shadow-sm active:scale-95 transition-all">
<span class="material-symbols-outlined text-[28px] group-hover:scale-110 transition-transform">add_circle</span>
<span class="text-sm font-bold">Create Tour</span>
</button>
<button class="group flex flex-col items-center justify-center gap-2 rounded-xl bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/10 p-4 shadow-sm active:scale-95 transition-all">
<span class="material-symbols-outlined text-[28px] text-gray-700 dark:text-gray-300 group-hover:scale-110 transition-transform">edit_road</span>
<span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Edit Tour</span>
</button>
<button class="group flex flex-col items-center justify-center gap-2 rounded-xl bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/10 p-4 shadow-sm active:scale-95 transition-all">
<span class="material-symbols-outlined text-[28px] text-gray-700 dark:text-gray-300 group-hover:scale-110 transition-transform">event_busy</span>
<span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Cancel Tour</span>
</button>
<button class="group flex flex-col items-center justify-center gap-2 rounded-xl bg-white dark:bg-surface-dark border border-gray-200 dark:border-white/10 p-4 shadow-sm active:scale-95 transition-all">
<span class="material-symbols-outlined text-[28px] text-gray-700 dark:text-gray-300 group-hover:scale-110 transition-transform">calendar_month</span>
<span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Reservations</span>
</button>
</div>
</div>
<!-- Reservations List (Table Adaptation) -->
<div class="mt-6 flex-1 rounded-t-[32px] bg-white dark:bg-[#1A2415] px-5 py-8 shadow-[0_-8px_30px_rgba(0,0,0,0.04)] dark:shadow-none border-t border-gray-100/50 dark:border-white/5">
<div class="mb-6 flex items-end justify-between">
<div>
<h3 class="text-xl font-bold text-gray-900 dark:text-white">Recent Reservations</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">Manage your upcoming guests</p>
</div>
<button class="mb-1 text-sm font-bold text-primary hover:brightness-110">View All</button>
</div>
<div class="flex flex-col gap-4">
<!-- Reservation Card 1 -->
<div class="group relative flex items-center gap-4 rounded-2xl bg-gray-50 dark:bg-white/5 p-3 pr-4 transition-all hover:bg-gray-100 dark:hover:bg-white/10">
<div class="relative h-16 w-16 shrink-0 overflow-hidden rounded-xl">
<img alt="Lion resting in savannah grass" class="h-full w-full object-cover" data-alt="Close up of a lion face in the wild" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAys1DpRALXma1kWIiql2hu8ZRVtEZ8BZtCBAVjVZrRvSWiJcYY_lI456b9XkeUjBBR953uCv5-zf-7r-6yLIU2zEUFeBBaqkGkX_Icg1YmzNmnuIm6AXePj3mFTcBTR4gUUp9B5coh0_JQEPZ8FAPF6oFxJ9HEQqVdXrJ8jsjK25eBupBq7AGnKFhWUoOBui32oithGUb8pOh6ZqUVzWLMGAdw4bUPZGLg-A16fAVk8UskHJucV116GKXwDHoHzvSYITBY-e7ATu0"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
</div>
<div class="flex-1 min-w-0">
<div class="flex items-center justify-between mb-1">
<h4 class="truncate text-base font-bold text-gray-900 dark:text-white">Lion Safari</h4>
<span class="inline-flex items-center rounded-full bg-green-100 dark:bg-green-900/40 px-2 py-0.5 text-xs font-bold text-green-700 dark:text-green-400">Confirmed</span>
</div>
<p class="text-sm text-gray-600 dark:text-gray-300 truncate">Guest: <span class="font-medium text-gray-900 dark:text-white">The Smith Family (4)</span></p>
<div class="mt-1 flex items-center gap-3 text-xs text-gray-500 dark:text-gray-400">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">calendar_today</span> Oct 24</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">schedule</span> 09:00 AM</span>
</div>
</div>
<button class="shrink-0 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">
<span class="material-symbols-outlined">more_vert</span>
</button>
</div>
<!-- Reservation Card 2 -->
<div class="group relative flex items-center gap-4 rounded-2xl bg-gray-50 dark:bg-white/5 p-3 pr-4 transition-all hover:bg-gray-100 dark:hover:bg-white/10">
<div class="relative h-16 w-16 shrink-0 overflow-hidden rounded-xl">
<img alt="African Elephant walking" class="h-full w-full object-cover" data-alt="Elephant walking through savannah" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDGABDkdFgn4TXb2p1qK7o5Laizxk98Wrjg9B4Yqj75Hs4rP0Jm_hcvtPEqyYv4WuaLdjDefYe8Ps1Dit3OmrzjODdXRx1gSAjCr4Xwhf2m_WgjXucUVMUdPo_DrHQlSBleh6QTsiakpN0GyiJitZnx8n7FZDf8tncDyuIoFgqwp_AQUmcmIBJW47hBDW1pPDEEZq6Ien-YOjqTz0TjLQQnwdZO1fchAMYZbI9nwkIKVeroC6rtp8FQi5DxXDehvY3yKi__HQfzobo"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
</div>
<div class="flex-1 min-w-0">
<div class="flex items-center justify-between mb-1">
<h4 class="truncate text-base font-bold text-gray-900 dark:text-white">Elephant Walk</h4>
<span class="inline-flex items-center rounded-full bg-yellow-100 dark:bg-yellow-900/40 px-2 py-0.5 text-xs font-bold text-yellow-700 dark:text-yellow-400">Pending</span>
</div>
<p class="text-sm text-gray-600 dark:text-gray-300 truncate">Guest: <span class="font-medium text-gray-900 dark:text-white">Emma Johnson (2)</span></p>
<div class="mt-1 flex items-center gap-3 text-xs text-gray-500 dark:text-gray-400">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">calendar_today</span> Oct 25</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">schedule</span> 02:30 PM</span>
</div>
</div>
<button class="shrink-0 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">
<span class="material-symbols-outlined">more_vert</span>
</button>
</div>
<!-- Reservation Card 3 -->
<div class="group relative flex items-center gap-4 rounded-2xl bg-gray-50 dark:bg-white/5 p-3 pr-4 transition-all hover:bg-gray-100 dark:hover:bg-white/10">
<div class="relative h-16 w-16 shrink-0 overflow-hidden rounded-xl">
<img alt="Leopard in tree" class="h-full w-full object-cover" data-alt="Leopard resting on a tree branch" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnMvrn5b8hUWHXiz1T7OjcTuk9Xex7IYHLw37TN_nJDWWk3Eko99gWS-0LqyYMyEduZrtsyG58qBuQBhiCB7U2_jnhSX4bSVs9Kp5JWkaXZy8FB9CHmCP6A1v2xP7sXgv0GVKsuE4BTFgZbdzbm-lF_elsXC6gMDrtFFtl3JuRy28zW9lWNiGVk7bppTAWfgrc2LFgQ0L9SnHKrFsz2Le-WjZFKQjX5loS6mJXzcvAR823ZhYbqoufXIwFBsuPAC-5I3iXD_ZKHQ4"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
</div>
<div class="flex-1 min-w-0">
<div class="flex items-center justify-between mb-1">
<h4 class="truncate text-base font-bold text-gray-900 dark:text-white">Sunset Game Drive</h4>
<span class="inline-flex items-center rounded-full bg-red-100 dark:bg-red-900/40 px-2 py-0.5 text-xs font-bold text-red-700 dark:text-red-400">Cancelled</span>
</div>
<p class="text-sm text-gray-600 dark:text-gray-300 truncate">Guest: <span class="font-medium text-gray-900 dark:text-white">Lucas M. (1)</span></p>
<div class="mt-1 flex items-center gap-3 text-xs text-gray-500 dark:text-gray-400">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">calendar_today</span> Oct 26</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">schedule</span> 05:00 PM</span>
</div>
</div>
<button class="shrink-0 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">
<span class="material-symbols-outlined">more_vert</span>
</button>
</div>
<!-- Reservation Card 4 -->
<div class="group relative flex items-center gap-4 rounded-2xl bg-gray-50 dark:bg-white/5 p-3 pr-4 transition-all hover:bg-gray-100 dark:hover:bg-white/10">
<div class="relative h-16 w-16 shrink-0 overflow-hidden rounded-xl">
<img alt="Zebras grazing" class="h-full w-full object-cover" data-alt="Herd of zebras in the wild" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOyiPsLh9nZPrShVe2_PuOZRvpkiieYJZddmw5_uNS0iFYiePiwJuVjOA71mrx0RvfyDcIhMSN7tGeKK3GFIuQFqPFkM3hNHyjKTxyoWVNPKBP9sBACcjGGk_q8WVk5L1iECmlK2vZWZIqGwAOAJnDmpFf43eTa8cWT-8hmdTMyCkQZlCBcc1hT3cscCwoR3U-PdVvx6_jaGYAfS1U6_ABRC9-biw4RuMGbhNT9e7mX_Li9mMyzpMD6x_n83k-v77h45LKyJD_2cg"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
</div>
<div class="flex-1 min-w-0">
<div class="flex items-center justify-between mb-1">
<h4 class="truncate text-base font-bold text-gray-900 dark:text-white">Migration Watch</h4>
<span class="inline-flex items-center rounded-full bg-green-100 dark:bg-green-900/40 px-2 py-0.5 text-xs font-bold text-green-700 dark:text-green-400">Confirmed</span>
</div>
<p class="text-sm text-gray-600 dark:text-gray-300 truncate">Guest: <span class="font-medium text-gray-900 dark:text-white">Sarah Connor (5)</span></p>
<div class="mt-1 flex items-center gap-3 text-xs text-gray-500 dark:text-gray-400">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">calendar_today</span> Nov 01</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">schedule</span> 06:30 AM</span>
</div>
</div>
<button class="shrink-0 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">
<span class="material-symbols-outlined">more_vert</span>
</button>
</div>
</div>
</div>
</div>
<!-- Bottom Navigation -->
<nav class="fixed bottom-0 left-0 z-50 w-full border-t border-gray-200 dark:border-white/5 bg-white/90 dark:bg-[#162210]/90 pb-[env(safe-area-inset-bottom)] pt-2 backdrop-blur-xl">
<div class="flex h-16 items-center justify-around px-2">
<button class="flex flex-1 flex-col items-center gap-1 p-2 text-primary">
<span class="material-symbols-outlined icon-filled">dashboard</span>
<span class="text-[10px] font-bold">Home</span>
</button>
<button class="flex flex-1 flex-col items-center gap-1 p-2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">
<span class="material-symbols-outlined">map</span>
<span class="text-[10px] font-medium">Tours</span>
</button>
<div class="flex flex-1 -mt-8 justify-center">
<button class="flex size-14 items-center justify-center rounded-full bg-primary text-[#131811] shadow-lg shadow-primary/30 active:scale-95 transition-transform">
<span class="material-symbols-outlined text-[28px]">add</span>
</button>
</div>
<button class="flex flex-1 flex-col items-center gap-1 p-2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">
<span class="material-symbols-outlined">chat</span>
<span class="text-[10px] font-medium">Chat</span>
</button>
<button class="flex flex-1 flex-col items-center gap-1 p-2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">
<span class="material-symbols-outlined">settings</span>
<span class="text-[10px] font-medium">Settings</span>
</button>
</div>
</nav>
</body></html>