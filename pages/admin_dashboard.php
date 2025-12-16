<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Safari Admin Dashboard</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Theme Configuration -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#36e27b", // Vibrant Green
                        "primary-dark": "#2ab562",
                        "background-light": "#f6f8f7", // Soft parchment/cloud
                        "background-dark": "#112117", // Deep jungle night
                        "surface-light": "#ffffff",
                        "surface-dark": "#1a2c22", // Slightly lighter jungle green
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"],
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "2xl": "2rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        /* Custom scrollbar for clean look */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
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
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display antialiased transition-colors duration-300">
<div class="relative flex flex-col min-h-screen w-full overflow-x-hidden pb-24">
<!-- TopAppBar -->
<header class="sticky top-0 z-50 bg-surface-light/90 dark:bg-background-dark/90 backdrop-blur-md border-b border-slate-100 dark:border-slate-800 px-4 py-3 flex items-center justify-between transition-colors duration-300">
<div class="flex items-center gap-3">
<button class="p-2 -ml-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-800 dark:text-white transition-colors">
<span class="material-symbols-outlined text-2xl">menu</span>
</button>
</div>
<h1 class="text-lg font-bold tracking-tight text-slate-900 dark:text-white flex items-center gap-2">
<span class="text-primary material-symbols-outlined fill-1">nature_people</span>
                Safari Admin
            </h1>
<div class="flex items-center gap-2">
<button class="relative p-1 rounded-full overflow-hidden border-2 border-primary/20 hover:border-primary transition-colors">
<img alt="Admin User Profile Picture" class="w-8 h-8 object-cover rounded-full" data-alt="Close up of a woman smiling outdoors" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCa4SktwNLt7XkzwFiqXNMYgc7Zgt4CpqkVVXcMyVXeKssU_R6GzQFFj2ENWNcPdxGzZvEW2soM7SQetpNTR5azrPiggLnYIpu2pMXipFO7S-NX2VBbzgvWDbig_VYF-hUatm1Hvt_cuRLUP5O_PntsN4arsx2MOM4Ni8Av9XwgWzuyJ2PvDj63t42l65cB9z3cctwtn2zKAW677WbIMDBYGUckqtoqI3fZIFIwVcQBadj5i47X8ct2r90M2AK0LOd-b0xI0HXGaBg"/>
<div class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-primary border-2 border-white dark:border-background-dark rounded-full"></div>
</button>
</div>
</header>
<!-- Welcome Section -->
<div class="px-4 pt-6 pb-2">
<h2 class="text-2xl font-bold text-slate-900 dark:text-white leading-tight">Jambo, Ranger Jane! 🦁</h2>
<p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Ready to manage the savanna today?</p>
</div>
<!-- Quick Stats Overview -->
<div class="w-full overflow-x-auto hide-scrollbar px-4 py-4">
<div class="flex gap-4 min-w-max">
<!-- Stat Card 1 -->
<div class="flex flex-col p-5 bg-white dark:bg-surface-dark rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 w-40 flex-shrink-0">
<div class="flex items-center gap-2 mb-2">
<span class="p-1.5 bg-blue-50 dark:bg-blue-900/30 rounded-lg text-blue-600 dark:text-blue-400">
<span class="material-symbols-outlined text-xl">groups</span>
</span>
<span class="text-xs font-semibold text-slate-500 dark:text-slate-400">Explorers</span>
</div>
<p class="text-2xl font-bold text-slate-900 dark:text-white">12.5k</p>
<div class="flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-sm text-primary">trending_up</span>
<span class="text-xs font-medium text-primary">+12%</span>
</div>
</div>
<!-- Stat Card 2 -->
<div class="flex flex-col p-5 bg-white dark:bg-surface-dark rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 w-40 flex-shrink-0">
<div class="flex items-center gap-2 mb-2">
<span class="p-1.5 bg-orange-50 dark:bg-orange-900/30 rounded-lg text-orange-600 dark:text-orange-400">
<span class="material-symbols-outlined text-xl">tour</span>
</span>
<span class="text-xs font-semibold text-slate-500 dark:text-slate-400">Safaris</span>
</div>
<p class="text-2xl font-bold text-slate-900 dark:text-white">42</p>
<div class="flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-sm text-primary">trending_up</span>
<span class="text-xs font-medium text-primary">+5% active</span>
</div>
</div>
<!-- Stat Card 3 -->
<div class="flex flex-col p-5 bg-white dark:bg-surface-dark rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 w-40 flex-shrink-0">
<div class="flex items-center gap-2 mb-2">
<span class="p-1.5 bg-emerald-50 dark:bg-emerald-900/30 rounded-lg text-emerald-600 dark:text-emerald-400">
<span class="material-symbols-outlined text-xl">pets</span>
</span>
<span class="text-xs font-semibold text-slate-500 dark:text-slate-400">Species</span>
</div>
<p class="text-2xl font-bold text-slate-900 dark:text-white">108</p>
<div class="flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-sm text-slate-400">add</span>
<span class="text-xs font-medium text-slate-400">2 pending</span>
</div>
</div>
</div>
</div>
<!-- Management Grid (The Main Dashboard) -->
<div class="px-4 pt-2">
<div class="flex items-center justify-between mb-3">
<h3 class="text-lg font-bold text-slate-900 dark:text-white">Management Console</h3>
</div>
<div class="grid grid-cols-2 gap-3">
<!-- Manage Users -->
<button class="flex flex-col items-center justify-center p-6 bg-white dark:bg-surface-dark rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-md hover:border-primary/50 transition-all group">
<div class="w-14 h-14 bg-purple-50 dark:bg-purple-900/20 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl text-purple-600 dark:text-purple-400">manage_accounts</span>
</div>
<span class="font-bold text-slate-800 dark:text-slate-100">Users</span>
<span class="text-xs text-slate-500 dark:text-slate-400 mt-1">Manage explorers</span>
</button>
<!-- Manage Animals -->
<button class="flex flex-col items-center justify-center p-6 bg-white dark:bg-surface-dark rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-md hover:border-primary/50 transition-all group">
<div class="w-14 h-14 bg-amber-50 dark:bg-amber-900/20 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl text-amber-600 dark:text-amber-400">pets</span>
</div>
<span class="font-bold text-slate-800 dark:text-slate-100">Animals</span>
<span class="text-xs text-slate-500 dark:text-slate-400 mt-1">Profile &amp; Facts</span>
</button>
<!-- Manage Habitats -->
<button class="flex flex-col items-center justify-center p-6 bg-white dark:bg-surface-dark rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-md hover:border-primary/50 transition-all group">
<div class="w-14 h-14 bg-emerald-50 dark:bg-emerald-900/20 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl text-emerald-600 dark:text-emerald-400">forest</span>
</div>
<span class="font-bold text-slate-800 dark:text-slate-100">Habitats</span>
<span class="text-xs text-slate-500 dark:text-slate-400 mt-1">Map &amp; Zones</span>
</button>
<!-- Manage Tours -->
<button class="flex flex-col items-center justify-center p-6 bg-white dark:bg-surface-dark rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-md hover:border-primary/50 transition-all group">
<div class="w-14 h-14 bg-blue-50 dark:bg-blue-900/20 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl text-blue-600 dark:text-blue-400">map</span>
</div>
<span class="font-bold text-slate-800 dark:text-slate-100">Guided Tours</span>
<span class="text-xs text-slate-500 dark:text-slate-400 mt-1">Routes &amp; Guides</span>
</button>
<!-- Analytics / Stats -->
<button class="col-span-2 flex items-center justify-between p-5 bg-slate-900 dark:bg-slate-800 rounded-2xl shadow-sm hover:shadow-md transition-all group">
<div class="flex items-center gap-4">
<div class="w-10 h-10 bg-slate-800 dark:bg-slate-700 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined text-xl text-primary">bar_chart</span>
</div>
<div class="flex flex-col text-left">
<span class="font-bold text-white">View Full Statistics</span>
<span class="text-xs text-slate-400">Deep dive into app performance</span>
</div>
</div>
<span class="material-symbols-outlined text-slate-400 group-hover:translate-x-1 transition-transform">chevron_right</span>
</button>
</div>
</div>
<!-- Recent Activity Section -->
<div class="px-4 pt-6 pb-2">
<h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">Recent Activity</h3>
<div class="flex flex-col gap-3">
<!-- Activity Item 1 -->
<div class="flex items-start gap-3 p-3 bg-white dark:bg-surface-dark rounded-xl border border-slate-100 dark:border-slate-800">
<img alt="Baby lion" class="w-12 h-12 rounded-lg object-cover flex-shrink-0" data-alt="Close up of a cute lion cub" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAyp2zC3HFsEk0GwgHEoNMSUKv5hDF_r1sIrlJ94wcL-CwaI-uSCeRX1N7JcWmuyXI7RPJfVhz75eaxuq12eoTwCDNp4W7AT3VfLUGNQKgTb4D6C4Ybf5iF_TGWwY5o6hC67XjIxp5RvAhaY_aIFM9UR13HqjsgmLunXlOe9uHqxm58CzkkkGPoG-wfhsNbkBLKak9x6yiikfCC-LRLqpktuVxxmKO9VC9Y4GyWKBKbld4QirlOIbpARnUFOh-A9c1C_S5Hzptl3-c"/>
<div class="flex-1 min-w-0">
<p class="text-sm font-semibold text-slate-900 dark:text-white truncate">New Profile: Simba</p>
<p class="text-xs text-slate-500 dark:text-slate-400">Added to <span class="text-emerald-600 dark:text-emerald-400 font-medium">Animals</span> by Ranger Mike</p>
</div>
<span class="text-xs font-medium text-slate-400 whitespace-nowrap">2m ago</span>
</div>
<!-- Activity Item 2 -->
<div class="flex items-start gap-3 p-3 bg-white dark:bg-surface-dark rounded-xl border border-slate-100 dark:border-slate-800">
<div class="w-12 h-12 rounded-lg bg-orange-100 dark:bg-orange-900/20 flex items-center justify-center flex-shrink-0 text-orange-600 dark:text-orange-400">
<span class="material-symbols-outlined">confirmation_number</span>
</div>
<div class="flex-1 min-w-0">
<p class="text-sm font-semibold text-slate-900 dark:text-white truncate">Ticket #8829 Refunded</p>
<p class="text-xs text-slate-500 dark:text-slate-400">Processed in <span class="text-orange-600 dark:text-orange-400 font-medium">Bookings</span></p>
</div>
<span class="text-xs font-medium text-slate-400 whitespace-nowrap">1h ago</span>
</div>
<!-- Activity Item 3 -->
<div class="flex items-start gap-3 p-3 bg-white dark:bg-surface-dark rounded-xl border border-slate-100 dark:border-slate-800">
<img alt="Savanna landscape" class="w-12 h-12 rounded-lg object-cover flex-shrink-0" data-alt="Wide shot of African savanna landscape" src="https://lh3.googleusercontent.com/aida-public/AB6AXuABOChHVmNWbvcC4wzwXadCfGtxX2zcIFb6d-sVgRufZYEDXRffbCYkNq2OZnm1UQTScgnRrjhxR8etAptV3F8Pwq45fbfxHo0eQI45eNIXhuk_hWFt0oT5MQjIN_8WPqPiulxV3VrV4LEHH3usCIF53iNj_x5P61sRN_kHgN1rBYwCIdqCBOucOLLmQ8weXjo4b7kp55-fyDWYngPVJMmn9HLU3c4CP8-0oo88iXye4Xm0EAu37VgYNbrh7XTbfKzaT05udGHWjJA"/>
<div class="flex-1 min-w-0">
<p class="text-sm font-semibold text-slate-900 dark:text-white truncate">Serengeti Tour Update</p>
<p class="text-xs text-slate-500 dark:text-slate-400">Route modified in <span class="text-blue-600 dark:text-blue-400 font-medium">Tours</span></p>
</div>
<span class="text-xs font-medium text-slate-400 whitespace-nowrap">4h ago</span>
</div>
</div>
</div>
<!-- Extra spacing for scrolling past FAB -->
<div class="h-24"></div>
</div>
<!-- Floating Action Button -->
<button class="fixed bottom-24 right-4 z-40 bg-primary hover:bg-primary-dark text-slate-900 rounded-2xl w-14 h-14 flex items-center justify-center shadow-lg shadow-primary/30 transition-all hover:scale-105 active:scale-95">
<span class="material-symbols-outlined text-3xl font-bold">add</span>
</button>
<!-- Bottom Navigation Bar -->
<nav class="fixed bottom-0 w-full bg-white dark:bg-surface-dark border-t border-slate-200 dark:border-slate-800 px-6 py-3 flex justify-between items-center z-50 pb-safe">
<button class="flex flex-col items-center gap-1 text-primary">
<span class="material-symbols-outlined text-2xl fill-1">dashboard</span>
<span class="text-[10px] font-bold">Home</span>
</button>
<button class="flex flex-col items-center gap-1 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 transition-colors">
<span class="material-symbols-outlined text-2xl">notifications</span>
<span class="text-[10px] font-medium">Alerts</span>
</button>
<button class="flex flex-col items-center gap-1 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 transition-colors">
<span class="material-symbols-outlined text-2xl">settings</span>
<span class="text-[10px] font-medium">Settings</span>
</button>
</nav>
<!-- Safe area spacing for mobile (bottom) handled by pb-safe in custom classes or just padding -->
<style>
        .pb-safe {
            padding-bottom: env(safe-area-inset-bottom, 20px);
        }
    </style>
</body></html>