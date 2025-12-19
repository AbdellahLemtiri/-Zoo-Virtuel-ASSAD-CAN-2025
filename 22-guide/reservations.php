
<!DOCTYPE html>

<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Réservations - ASSAD</title>
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
                    primary: "#0d9488",          // Teal واعر مودرن
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
                    "accent": "#f59e0b"          // لمسة ذهبية
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
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-main-light dark:text-text-sec-dark hover:bg-border-light dark:hover:bg-surface-dark transition-colors font-medium" href="index.php">
                        <span class="material-symbols-outlined text-text-sec-light dark:text-text-sec-dark">dashboard</span>
                        <span>Tableau de bord</span>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-main-light dark:text-text-sec-dark hover:bg-border-light dark:hover:bg-surface-dark transition-colors font-medium" href="mes_visites.php">
                        <span class="material-symbols-outlined text-text-sec-light dark:text-text-sec-dark">map</span>
                        <span>Mes Visites</span>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary dark:text-primary font-bold" href="#">
                        <span class="material-symbols-outlined">groups</span>
                        <span>Réservations</span>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-main-light dark:text-text-sec-dark hover:bg-border-light dark:hover:bg-surface-dark transition-colors font-medium" href="parametres.php">
                        <span class="material-symbols-outlined text-text-sec-light dark:text-text-sec-dark">settings</span>
                        <span>Paramètres</span>
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
                <div class="flex flex-wrap justify-between items-end gap-4">
                    <div class="flex flex-col gap-2">
                        <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">Réservations</h2>
                        <p class="text-text-sec-light dark:text-text-sec-dark text-lg">Suivez les inscriptions pour vos visites et gérez les participants.</p>
                    </div>
                </div>
                
                <div class="flex flex-col">
                    <div class="flex border-b border-border-light dark:border-border-dark gap-6 overflow-x-auto">
                        <?php 
                        $tabs = [
                            'upcoming' => ['label' => 'À Venir', 'icon' => 'schedule'],
                            'past' => ['label' => 'Passées', 'icon' => 'done_all'],
                            'cancelled' => ['label' => 'Annulées', 'icon' => 'block'],
                        ];
                        
                        foreach ($tabs as $key => $tab) : 
                            $is_active = $active_tab === $key;
                            $tab_class = $is_active 
                                ? 'border-primary text-primary font-bold' 
                                : 'border-transparent text-text-sec-light dark:text-text-sec-dark hover:border-border-light dark:hover:border-border-dark hover:text-text-main-light dark:hover:text-text-main-dark font-medium';
                            $count = $tab_counts[$key] ?? 0;
                        ?>
                            <a href="?tab=<?= $key ?>" class="flex items-center gap-2 pb-3 px-1 border-b-2 <?= $tab_class ?> transition-all whitespace-nowrap">
                                <span class="material-symbols-outlined text-[20px]"><?= $tab['icon'] ?></span>
                                <span><?= $tab['label'] ?></span>
                                <span class="px-2 py-0.5 text-xs rounded-full bg-primary/20 text-primary dark:bg-primary/50 dark:text-text-main-dark font-bold"><?= $count ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark shadow-sm overflow-x-auto">
                    
                    <table class="min-w-full divide-y divide-border-light dark:divide-border-dark">
                        <thead class="bg-gray-50/50 dark:bg-white/5">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-text-sec-light dark:text-text-sec-dark uppercase tracking-wider">
                                    Nom du Visiteur
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-text-sec-light dark:text-text-sec-dark uppercase tracking-wider">
                                    Visite
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-text-sec-light dark:text-text-sec-dark uppercase tracking-wider">
                                    Date & Heure
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-bold text-text-sec-light dark:text-text-sec-dark uppercase tracking-wider">
                                    Participants
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-text-sec-light dark:text-text-sec-dark uppercase tracking-wider">
                                    Statut
                                </th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-bold text-text-sec-light dark:text-text-sec-dark uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border-light dark:divide-border-dark">
                            
                            <?php if (empty($current_reservations)): ?>
                                <tr>
                                    <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center text-sm text-text-sec-light dark:text-text-sec-dark">
                                        Aucune réservation dans cette catégorie (<?= $tabs[$active_tab]['label'] ?>).
                                    </td>
                                </tr>
                            <?php else: ?>
                                
                                <?php foreach ($current_reservations as $reservation) : ?>
                                    <tr class="hover:bg-background-light dark:hover:bg-white/5 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-text-main-light dark:text-text-main-dark"><?= htmlspecialchars($reservation['visitor_name']) ?></div>
                                            <div class="text-xs text-text-sec-light dark:text-text-sec-dark">Réf: <?= htmlspecialchars($reservation['ref']) ?></div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-text-main-light dark:text-text-main-dark line-clamp-1"><?= htmlspecialchars($reservation['tour_title']) ?></div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-text-main-light dark:text-text-main-dark"><?= (new DateTime($reservation['date']))->format('d M Y') ?></div>
                                            <div class="text-xs text-text-sec-light dark:text-text-sec-dark"><?= htmlspecialchars($reservation['time']) ?></div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            <span class="text-sm font-bold"><?= htmlspecialchars($reservation['participants']) ?></span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                        
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div class="flex justify-end gap-2">
                                                <button title="Voir les détails" class="text-primary hover:text-orange-600 transition-colors p-1 rounded-full">
                                                    <span class="material-symbols-outlined text-[20px]">info</span>
                                                </button>
                                                <?php if ($reservation['status'] === 'confirmed'): ?>
                                                    <button title="Marquer comme complétée" class="text-green-600 hover:text-green-700 transition-colors p-1 rounded-full">
                                                        <span class="material-symbols-outlined text-[20px]">done</span>
                                                    </button>
                                                    <button title="Annuler la réservation" class="text-red-600 hover:text-red-700 transition-colors p-1 rounded-full">
                                                        <span class="material-symbols-outlined text-[20px]">close</span>
                                                    </button>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>

</html>