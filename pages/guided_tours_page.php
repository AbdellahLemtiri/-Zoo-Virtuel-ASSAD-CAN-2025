<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Guided Tours - African Wildlife App</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Config -->
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#36e27b",
                        "background-light": "#f6f8f7",
                        "background-dark": "#112117",
                        "surface-dark": "#1c2e24", // Slightly lighter for cards
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "1rem", "lg": "1.5rem", "xl": "2rem", "2xl": "2.5rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark font-display antialiased text-slate-900 dark:text-white pb-24">
<!-- Top Header -->
<header class="sticky top-0 z-50 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-md px-4 py-3 border-b border-black/5 dark:border-white/5">
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="relative">
<div class="bg-center bg-no-repeat bg-cover rounded-full size-10 border-2 border-primary" data-alt="User profile avatar smiling young explorer" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBYvz0jtKGDi-FDINDXEFDyVLu_ZPc8QeEAF-dBlK4HPXyH-0tUXEij8DM_9_sTEJt86P_JARqtDqYPGs8Y1XGF2jYqeO0dZE8edxE3V0v96eI8tTcxcD636LWSejrFphWHd14JrpgVLUy5ywsXOjSkJM8G-AgyKPj5q5DmWaYI97t3hfLaKIqr7Izr4XgjTzpAm9xTgpd08hpMg7bFpgWkCoVp-TmgCnToKg9sL7N_4rHxhkWUjsEaWSLt7nzXrM8iDp6FnSCwNbY");'>
</div>
<div class="absolute bottom-0 right-0 size-3 bg-primary rounded-full border-2 border-background-dark"></div>
</div>
<div>
<p class="text-xs text-gray-400 font-medium">Welcome back,</p>
<h2 class="text-white text-base font-bold leading-tight">Explorer Leo 🦁</h2>
</div>
</div>
<button class="flex items-center justify-center size-10 rounded-full bg-surface-dark text-primary hover:bg-white/10 transition-colors relative">
<span class="material-symbols-outlined text-[24px]">confirmation_number</span>
<span class="absolute top-2 right-2 size-2 bg-red-500 rounded-full"></span>
</button>
</div>
</header>
<!-- Search Section -->
<div class="px-4 py-4">
<label class="flex flex-col w-full">
<div class="flex w-full items-center rounded-full h-12 bg-surface-dark border border-white/5 focus-within:border-primary/50 transition-colors overflow-hidden pr-2">
<div class="text-gray-400 flex items-center justify-center pl-4 pr-2">
<span class="material-symbols-outlined">search</span>
</div>
<input class="flex w-full min-w-0 flex-1 resize-none bg-transparent text-white focus:outline-0 placeholder:text-gray-500 text-sm font-normal leading-normal h-full border-none focus:ring-0" placeholder="Cheetahs, dates, languages..." value=""/>
<button class="flex items-center justify-center size-9 rounded-full bg-white/10 text-white">
<span class="material-symbols-outlined text-[20px]">tune</span>
</button>
</div>
</label>
</div>
<!-- Categories Chips -->
<div class="flex gap-3 px-4 pb-2 overflow-x-auto no-scrollbar">
<button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-primary pl-5 pr-5 transition-transform active:scale-95">
<span class="text-background-dark text-sm font-bold leading-normal">All Tours</span>
</button>
<button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-surface-dark border border-white/5 pl-5 pr-5 transition-transform active:scale-95">
<span class="text-white text-sm font-medium leading-normal">Safari</span>
</button>
<button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-surface-dark border border-white/5 pl-5 pr-5 transition-transform active:scale-95">
<span class="text-white text-sm font-medium leading-normal">Bird Watching</span>
</button>
<button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-surface-dark border border-white/5 pl-5 pr-5 transition-transform active:scale-95">
<span class="text-white text-sm font-medium leading-normal">Junior Ranger</span>
</button>
<button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-full bg-surface-dark border border-white/5 pl-5 pr-5 transition-transform active:scale-95">
<span class="text-white text-sm font-medium leading-normal">Night Trek</span>
</button>
</div>
<!-- Featured Carousel -->
<section class="pt-6 pb-2">
<div class="flex items-center justify-between px-4 mb-3">
<h2 class="text-white text-xl font-bold">Featured this month</h2>
<button class="text-primary text-sm font-bold">See All</button>
</div>
<div class="flex w-full overflow-x-auto no-scrollbar px-4 gap-4 pb-4 snap-x snap-mandatory">
<!-- Featured Card 1 -->
<div class="flex-none w-[280px] snap-center group relative overflow-hidden rounded-xl aspect-[4/3]">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Lion pride resting in the savanna grass at sunset" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDcfTvDuJtwVscEFa5CD5To0Ctq1NKqkgMKkY0e-2iJtlSC5z70I80HlkuUOssbfJS0VcFXpJrtSZS6A8-CxHtGl_nlxi-PNmjm2dMNZ0mr6tOTVK7jRuE1fwHitCqqDkilGATNOnwIj9Pl47AK2QMWmhFrfVFkJxKpTZlIM-t9TQCs0ziPI7jLiC-APUS2kBh6EK-mzeHF3reK0CZAYucCz1Ad_FwD7exL8dwICRJHMSNSCP_4-jZCEdDBHJRzqMpb15LU_eB1doM");'>
</div>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
<div class="absolute top-3 left-3 bg-white/20 backdrop-blur-md px-2 py-1 rounded-lg">
<p class="text-xs font-bold text-white flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-yellow-400 fill-1">star</span> 4.9
                    </p>
</div>
<div class="absolute bottom-0 left-0 p-4 w-full">
<h3 class="text-white font-bold text-lg mb-1">The Big 5 Safari</h3>
<p class="text-gray-300 text-xs line-clamp-1">Experience the majesty of Africa's giants.</p>
</div>
</div>
<!-- Featured Card 2 -->
<div class="flex-none w-[280px] snap-center group relative overflow-hidden rounded-xl aspect-[4/3]">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Giraffes eating leaves from a tall tree" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBUVrxt8aSzaffKYhBeQFd-rjgwQcHQf0WgL37xfQ8gZ6lUKITOW-D5SxBFGbREZnANkkVwV-PBV3WqnV9KE0ab0UeOiHuZMArvWsgkNKANAK6y8KZcx3PgODr897mG9q-suVgFN_KtIXKXII2mDZ2G7xlwyW0XUb3OKTlf305v2JTsYmhPmw5bif6Ufd7QymcyJZ_7prb3ia0eLu_TJ117T1uJlfXxcFOZtaWW-dltC0o2Kr_ItxHI-SGy9biOUnaIlh5nJleyr0o");'>
</div>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
<div class="absolute top-3 left-3 bg-white/20 backdrop-blur-md px-2 py-1 rounded-lg">
<p class="text-xs font-bold text-white flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-yellow-400 fill-1">star</span> 4.8
                    </p>
</div>
<div class="absolute bottom-0 left-0 p-4 w-full">
<h3 class="text-white font-bold text-lg mb-1">Tall Tales</h3>
<p class="text-gray-300 text-xs line-clamp-1">Walking tour with the gentle giants.</p>
</div>
</div>
</div>
</section>
<!-- Main Tour List -->
<section class="px-4 py-2 flex flex-col gap-6">
<h2 class="text-white text-xl font-bold">Upcoming Tours</h2>
<!-- Card 1 -->
<div class="bg-surface-dark rounded-xl overflow-hidden p-3 hover:bg-surface-dark/80 transition-colors">
<div class="relative w-full aspect-video rounded-lg overflow-hidden mb-3">
<div class="w-full h-full bg-center bg-cover" data-alt="Baby elephant walking next to mother" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDDwLtpCAR00kzyXtIXsEZvMwjQZFOMfx9iVxyMGLnntj_EZwylX7oPI9uZgdeNyx4Pnrzb1i49ZEfhpxVNrrfDrVGN7fFuE3IcUIW9FRLeRQWM9J9SIc0CTmoyBhIJxsy_0J1O9gpAaxnCA-UVUasSKsFSjr2Yk1ZmazW-szemPnyYFts515kJ9VV9bsPS1wa3YWIHL_eupCDcu-7VwTncOPOY9zv7Jg8C96Ya4RMkJoeSNSkMD9N3ZaNqauW3awVkBunK0uXuaYI");'>
</div>
<div class="absolute top-2 right-2 bg-black/60 backdrop-blur-sm px-2 py-1 rounded-md flex items-center gap-1">
<span class="material-symbols-outlined text-primary text-[16px]">bolt</span>
<span class="text-xs font-bold text-white">Filling Fast</span>
</div>
</div>
<div class="px-1 pb-1">
<div class="flex justify-between items-start mb-2">
<h3 class="text-white text-lg font-bold">Savanna Giants Walk</h3>
<div class="flex flex-col items-end">
<span class="text-primary font-bold text-lg">$45</span>
<span class="text-gray-400 text-[10px]">per person</span>
</div>
</div>
<!-- Metadata Grid -->
<div class="grid grid-cols-2 gap-y-2 gap-x-4 mb-4">
<div class="flex items-center gap-2 text-gray-300">
<span class="material-symbols-outlined text-[18px] text-primary">calendar_month</span>
<span class="text-xs font-medium">Oct 12 • 09:00 AM</span>
</div>
<div class="flex items-center gap-2 text-gray-300">
<span class="material-symbols-outlined text-[18px] text-primary">schedule</span>
<span class="text-xs font-medium">2 Hours</span>
</div>
<div class="flex items-center gap-2 text-gray-300">
<span class="material-symbols-outlined text-[18px] text-primary">translate</span>
<span class="text-xs font-medium">English, Spanish</span>
</div>
<div class="flex items-center gap-2 text-gray-300">
<span class="material-symbols-outlined text-[18px] text-primary">group</span>
<span class="text-xs font-medium text-orange-400">4 spots left</span>
</div>
</div>
<button class="w-full bg-primary text-background-dark font-bold text-sm py-3 rounded-full hover:bg-green-400 transition-colors flex items-center justify-center gap-2">
                    View Tour Details
                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
</div>
<!-- Card 2 -->
<div class="bg-surface-dark rounded-xl overflow-hidden p-3 hover:bg-surface-dark/80 transition-colors">
<div class="relative w-full aspect-video rounded-lg overflow-hidden mb-3">
<div class="w-full h-full bg-center bg-cover" data-alt="Lemur with big orange eyes looking from a tree branch at night" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAIOJNg5YTbL6jH_CHtqCqDTA34o7m13jHUpoNLP4GTkCkpCAgtQRtKv-PG12_Tns_5jbEVk7omkAlVozDA5DdOrb1IG3L-u9JMCIOg9bctOmnGscxktT9HznL_-9KIRLjV2yb362xjwJ0VlgATwuSK7ppqkm77v4gdYG5gCAYFsIFIYMBJZ4t1eajQ4Y6oLNtt3rE3MAaV4ZiV_FO2k-rQdy3P6avb9XiAgXfCfS4DfvBfOP_S8trYhbz_bigoYk0RP_WuBPzrzoY");'>
</div>
<div class="absolute top-2 right-2 bg-indigo-500/80 backdrop-blur-sm px-2 py-1 rounded-md flex items-center gap-1">
<span class="material-symbols-outlined text-white text-[16px]">dark_mode</span>
<span class="text-xs font-bold text-white">Night Tour</span>
</div>
</div>
<div class="px-1 pb-1">
<div class="flex justify-between items-start mb-2">
<h3 class="text-white text-lg font-bold">Junior Ranger Night Trek</h3>
<div class="flex flex-col items-end">
<span class="text-primary font-bold text-lg">$30</span>
<span class="text-gray-400 text-[10px]">per person</span>
</div>
</div>
<!-- Metadata Grid -->
<div class="grid grid-cols-2 gap-y-2 gap-x-4 mb-4">
<div class="flex items-center gap-2 text-gray-300">
<span class="material-symbols-outlined text-[18px] text-primary">calendar_month</span>
<span class="text-xs font-medium">Oct 14 • 07:00 PM</span>
</div>
<div class="flex items-center gap-2 text-gray-300">
<span class="material-symbols-outlined text-[18px] text-primary">schedule</span>
<span class="text-xs font-medium">1.5 Hours</span>
</div>
<div class="flex items-center gap-2 text-gray-300">
<span class="material-symbols-outlined text-[18px] text-primary">translate</span>
<span class="text-xs font-medium">English</span>
</div>
<div class="flex items-center gap-2 text-gray-300">
<span class="material-symbols-outlined text-[18px] text-primary">group</span>
<span class="text-xs font-medium text-green-400">8 spots left</span>
</div>
</div>
<button class="w-full bg-white/10 text-white border border-white/10 font-bold text-sm py-3 rounded-full hover:bg-white/20 transition-colors flex items-center justify-center gap-2">
                    View Tour Details
                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
</div>
<!-- Card 3 -->
<div class="bg-surface-dark rounded-xl overflow-hidden p-3 hover:bg-surface-dark/80 transition-colors">
<div class="relative w-full aspect-video rounded-lg overflow-hidden mb-3">
<div class="w-full h-full bg-center bg-cover" data-alt="Colorful kingfisher bird waiting on a branch" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuByQy2ysMT0Lgnr1aTOK7kyf6fWzbfu6wgMQodVa0eM5hIqOh_3dsRQfRXGAwI-sOe9kyuJFuHYDRu8aM-XQCL6m3u_-U_ReuqW-fGjpc-z7R8cmsuuTTHqlSEU_8zTUNBe1yS2Upz4l5RgSDgPqgLQkkOjavl_9zC6Wh7nP_ZA6SSkBsFe0c0byRHViC7D_raFB4FvoiDSuazXtqp72XuGYmIzr8k22q7fP7N8ugZ13GjPzqNS5ojuDA3Ovu7qiQqUVektdbujJkM");'>
</div>
</div>
<div class="px-1 pb-1">
<div class="flex justify-between items-start mb-2">
<h3 class="text-white text-lg font-bold">Dawn Chorus Birding</h3>
<div class="flex flex-col items-end">
<span class="text-primary font-bold text-lg">$55</span>
<span class="text-gray-400 text-[10px]">per person</span>
</div>
</div>
<!-- Metadata Grid -->
<div class="grid grid-cols-2 gap-y-2 gap-x-4 mb-4">
<div class="flex items-center gap-2 text-gray-300">
<span class="material-symbols-outlined text-[18px] text-primary">calendar_month</span>
<span class="text-xs font-medium">Oct 15 • 05:30 AM</span>
</div>
<div class="flex items-center gap-2 text-gray-300">
<span class="material-symbols-outlined text-[18px] text-primary">schedule</span>
<span class="text-xs font-medium">3 Hours</span>
</div>
<div class="flex items-center gap-2 text-gray-300">
<span class="material-symbols-outlined text-[18px] text-primary">translate</span>
<span class="text-xs font-medium">French, English</span>
</div>
<div class="flex items-center gap-2 text-gray-300">
<span class="material-symbols-outlined text-[18px] text-primary">group</span>
<span class="text-xs font-medium text-green-400">Available</span>
</div>
</div>
<button class="w-full bg-white/10 text-white border border-white/10 font-bold text-sm py-3 rounded-full hover:bg-white/20 transition-colors flex items-center justify-center gap-2">
                    View Tour Details
                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
</div>
</section>
<!-- Bottom Navigation -->
<nav class="fixed bottom-0 left-0 w-full bg-surface-dark/90 backdrop-blur-lg border-t border-white/5 pb-6 pt-3 px-6 z-40">
<ul class="flex justify-between items-center">
<li>
<a class="flex flex-col items-center gap-1 text-gray-400 hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined">home</span>
<span class="text-[10px] font-medium">Home</span>
</a>
</li>
<li>
<a class="flex flex-col items-center gap-1 text-primary" href="#">
<span class="material-symbols-outlined fill-1">tour</span>
<span class="text-[10px] font-bold">Tours</span>
</a>
</li>
<li>
<div class="relative -top-6">
<button class="size-14 bg-primary rounded-full flex items-center justify-center shadow-[0_0_15px_rgba(54,226,123,0.4)] hover:scale-105 transition-transform">
<span class="material-symbols-outlined text-background-dark text-[28px]">qr_code_scanner</span>
</button>
</div>
</li>
<li>
<a class="flex flex-col items-center gap-1 text-gray-400 hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined">map</span>
<span class="text-[10px] font-medium">Map</span>
</a>
</li>
<li>
<a class="flex flex-col items-center gap-1 text-gray-400 hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined">person</span>
<span class="text-[10px] font-medium">Profile</span>
</a>
</li>
</ul>
</nav>
</body></html>