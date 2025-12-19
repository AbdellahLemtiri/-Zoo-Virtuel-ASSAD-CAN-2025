

<!DOCTYPE html>

<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tableau de bord - ASSAD</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    primary: "#0d9488",        
                    "primary-dark": "#0f766e",
                    "primary-light": "#2dd4bf",
                    "background-light": "#f0fdfa",
                    "background-dark": "#042f2e",
                    "surface-light": "#ffffff",
                    "surface-dark": "#134e4a",
                    "text-light": "#164e63",
                    "text-dark": "#a7f3d0",
                    "text-secondary-light": "#0891b2",
                    "text-secondary-dark": "#5eead4",
                    "accent": "#f59e0b"         
                },
                fontFamily: {
                    sans: ["Plus Jakarta Sans", "sans-serif"]
                },
                animation: {
                    'fade-in': 'fadeIn 0.7s ease-out forwards',
                    'slide-up': 'slideUp 0.8s ease-out forwards',
                    'pulse-glow': 'pulseGlow 2s infinite'
                },
                keyframes: {
                    fadeIn: { '0%': { opacity: '0' }, '100%': { opacity: '1' } },
                    slideUp: { '0%': { transform: 'translateY(60px)', opacity: '0' }, '100%': { transform: 'translateY(0)', opacity: '1' } },
                    pulseGlow: { '0%, 100%': { boxShadow: '0 0 20px rgba(13,148,136,0.3)' }, '50%': { boxShadow: '0 0 40px rgba(13,148,136,0.6)' } }
                }
            }
        }
    }
</script>
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 1,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }

        body {
            font-family: "Plus Jakarta Sans", sans-serif;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen text-text-main-light dark:text-text-main-dark transition-colors duration-200">
    <div class="flex h-screen w-full overflow-hidden">
        <?php

$current_page = basename($_SERVER['PHP_SELF']);
?>

      <?php

function nav_item($href, $label, $current_page) {
    $is_active = ($current_page == $href);
    
 
    if ($is_active) {
        return "flex items-center gap-3 px-4 py-3 rounded-xl bg-emerald-500 text-white shadow-lg shadow-emerald-200 dark:shadow-none transition-all duration-300";
    } 
    // إذا لم يكن الرابط نشطًا، نُضيف فئة غير نشطة مع hover
    else {
        return "flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 dark:hover:bg-emerald-500/10 dark:hover:text-emerald-400 transition-all duration-200 group";
    }
}
?>
<aside class="hidden lg:flex flex-col w-72 border-r border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark p-6 h-full justify-between">
    <div class="flex flex-col gap-8">
        <div class="flex items-center gap-3 px-2">
            <div class="bg-primary/20 p-2 rounded-lg">
                <span class="material-symbols-outlined text-primary text-3xl">pets</span>
            </div>
            <div>
                <h1 class="text-xl font-bold tracking-tight">ASSAD</h1>
                <p class="text-text-sec-light dark:text-text-sec-dark text-xs uppercase tracking-wider font-semibold">Guide Space</p>
            </div>
        </div>
        <nav class="flex flex-col gap-2">
            <a class="<?= nav_item('dash.php', 'Tableau de bord', $current_page) ?>" href="dash.php">
                <span class="material-symbols-outlined">dashboard</span>
                <span>Tableau de bord</span>
            </a>
            <a class="<?= nav_item('mes_visites.php', 'Mes Visites', $current_page) ?>" href="mes_visites.php">
                <span class="material-symbols-outlined text-text-sec-light dark:text-text-sec-dark">map</span>
                <span>Mes Visites</span>
            </a>
            <a class="<?= nav_item('reservations.php', 'Réservations', $current_page) ?>" href="reservations.php">
                <span class="material-symbols-outlined text-text-sec-light dark:text-text-sec-dark">groups</span>
                <span>Réservations</span>
            </a>
        </nav>
    </div>
    <div class="flex items-center gap-3 px-4 py-3 rounded-xl bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark shadow-sm">
        <div class="bg-center bg-cover rounded-full h-10 w-10 border-2 border-primary" data-alt="Portrait du guide" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB6SweDCChTHrnzUi3ijD-HqKt7FximPeaVPRuHptoZB3gCiNIREev191XH6lCU2g9dWO-0nb19loXauXqO29KxIYeVB8L_qXV7j_z9ew9PCkxmtTGzyhArcCoyjioHHD9oWPKFoA4SKfrqRSRlWptyCfastPtNkgSlFizXCwA60Izfk-CrC13bruBTAOjH610XOUvFB1RnfkoM-IeFW7fkvzAujenUwRWp02gjgWiOhb4zpbuGErPegntLM0188b1Dkbt6DnzndgR5");'></div>
        <div class="flex flex-col overflow-hidden">
            <p class="text-sm font-bold truncate"><?= $nom_utilisateur ?></p>
            <p class="text-text-sec-light dark:text-text-sec-dark text-xs truncate">Guide <?= $role_utilisateur ?></p>
        </div>
    </div>
</aside>

        <main class="flex-1 flex flex-col h-full overflow-y-auto overflow-x-hidden">
            <div class="lg:hidden flex items-center justify-between p-4 border-b border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark sticky top-0 z-20">
                <span class="material-symbols-outlined text-primary">pets</span>
                <span class="material-symbols-outlined text-text-main-light dark:text-text-main-dark">menu</span>
            </div>
            
            <div class="p-6 md:p-10 max-w-7xl mx-auto w-full flex flex-col gap-8">
                
                <div class="flex flex-col gap-2">
                    <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">Bonjour, <?= htmlspecialchars($profile_data['first_name'] ?? $nom_utilisateur) ?> !</h2>
                    <p class="text-text-sec-light dark:text-text-sec-dark text-lg">Votre espace de gestion pour les visites virtuelles d'ASSAD.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <div class="bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark shadow-md p-5 flex flex-col gap-2">
                        <span class="material-symbols-outlined text-primary text-3xl">event_upcoming</span>
                        <p class="text-sm text-text-sec-light dark:text-text-sec-dark font-medium">Prochaine Visite</p>
                        <p class="text-xl font-extrabold tracking-tight text-primary"><?= $stats['next_tour_date'] ?></p>
                        <p class="text-sm font-semibold"><?= $stats['next_tour_time'] ?></p>
                    </div>

                    <div class="bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark shadow-md p-5 flex flex-col gap-2">
                        <span class="material-symbols-outlined text-green-600 text-3xl">map</span>
                        <p class="text-sm text-text-sec-light dark:text-text-sec-dark font-medium">Visites Créées</p>
                        <p class="text-xl font-extrabold tracking-tight"><?= $stats['total_tours'] ?></p>
                        <p class="text-sm font-semibold">total historique</p>
                    </div>

                    <div class="bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark shadow-md p-5 flex flex-col gap-2">
                        <span class="material-symbols-outlined text-blue-600 text-3xl">groups</span>
                        <p class="text-sm text-text-sec-light dark:text-text-sec-dark font-medium">Réservations à Venir</p>
                        <p class="text-xl font-extrabold tracking-tight"><?= $stats['upcoming_reservations'] ?></p>
                        <p class="text-sm font-semibold">participants confirmés</p>
                    </div>

                    <div class="bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark shadow-md p-5 flex flex-col gap-2">
                        <span class="material-symbols-outlined text-yellow-500 text-3xl">star</span>
                        <p class="text-sm text-text-sec-light dark:text-text-sec-dark font-medium">Note Guide</p>
                        <p class="text-xl font-extrabold tracking-tight"><?= number_format($stats['guide_ranking'], 1) ?> / 5.0</p>
                        <p class="text-sm font-semibold">basé sur les retours</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    
                    <div class="lg:col-span-2 flex flex-col gap-4">
                        <h3 class="text-2xl font-bold border-b border-border-light dark:border-border-dark pb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">calendar_today</span>
                            Votre Événement Important
                        </h3>
                        
                        <div class="bg-surface-light dark:bg-surface-dark rounded-xl border border-primary/50 shadow-lg p-6 flex flex-col sm:flex-row gap-6">
                            <div class="flex-1 flex flex-col justify-between">
                                <div>
                                    <p class="text-xs uppercase font-bold text-primary mb-1">Visite Programmée</p>
                                    <h4 class="text-2xl font-extrabold mb-3"><?= htmlspecialchars($next_tour['title']) ?></h4>
                                    
                                    <div class="flex items-center gap-4 text-text-sec-light dark:text-text-sec-dark mb-4">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                                            <span><?= $next_tour['date'] ?></span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[18px]">schedule</span>
                                            <span><?= $next_tour['time'] ?></span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[18px]">group</span>
                                            <span class="font-bold text-text-main-light dark:text-text-main-dark"><?= $next_tour['participants'] ?></span>
                                            <span>participants</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap gap-3 pt-4 border-t border-border-light dark:border-border-dark/50">
                                    <a href="<?= $next_tour['link'] ?>" target="_blank" class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-5 py-2.5 rounded-lg font-bold shadow-md transform hover:scale-[1.02] transition-all">
                                        <span class="material-symbols-outlined text-[20px]">videocam</span>
                                        <span>Rejoindre la Visite</span>
                                    </a>
                                    <a href="mes_visites.php?id=<?= $next_tour['id'] ?>" class="flex items-center gap-2 px-5 py-2.5 rounded-lg border border-border-light dark:border-border-dark text-text-main-light dark:text-text-main-dark font-semibold hover:bg-border-light dark:hover:bg-surface-dark transition-colors">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                        <span>Modifier</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:col-span-1 flex flex-col gap-4">
                        <h3 class="text-2xl font-bold border-b border-border-light dark:border-border-dark pb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-blue-600">bolt</span>
                            Activité Récente
                        </h3>
                        
                        <div class="bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark shadow-md divide-y divide-border-light dark:divide-border-dark">
                            <?php foreach ($recent_activity as $activity): 
                                $icon = match ($activity['type']) {
                                    'new_reservation' => ['icon' => 'person_add', 'color' => 'text-green-600'],
                                    'tour_edit' => ['icon' => 'edit', 'color' => 'text-primary'],
                                    'tour_completed' => ['icon' => 'check_circle', 'color' => 'text-blue-600'],
                                    default => ['icon' => 'info', 'color' => 'text-gray-500'],
                                };
                            ?>
                                <div class="flex items-start gap-4 p-4 hover:bg-background-light dark:hover:bg-white/5 transition-colors">
                                    <span class="material-symbols-outlined text-2xl <?= $icon['color'] ?> shrink-0 mt-1"><?= $icon['icon'] ?></span>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-medium text-text-main-light dark:text-text-main-dark"><?= htmlspecialchars($activity['message']) ?></p>
                                        <p class="text-xs text-text-sec-light dark:text-text-sec-dark mt-0.5"><?= htmlspecialchars($activity['time']) ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            
                            <?php if (empty($recent_activity)): ?>
                                <div class="p-4 text-center text-text-sec-light dark:text-text-sec-dark text-sm">
                                    Aucune activité récente.
                                </div>
                            <?php endif; ?>
                            
                        </div>
                        <a href="reservations.php" class="text-sm text-primary font-semibold hover:underline text-right mt-2">
                            Voir toutes les réservations
                            <span class="material-symbols-outlined text-[16px] align-middle ml-1">arrow_forward</span>
                        </a>
                    </div>
                    
                </div>
            </div>
        </main>
    </div>
</body>

</html>