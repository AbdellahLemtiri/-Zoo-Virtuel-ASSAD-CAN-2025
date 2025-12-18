<?php

?>

<!DOCTYPE html>
<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Gestion des Utilisateurs - ASSAD Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
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
</head>

<body
    class="bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark font-display antialiased min-h-screen flex overflow-hidden">
 <?php
// On détecte la page actuelle pour allumer le bon bouton
$current_page = basename($_SERVER['PHP_SELF']);

// Fonction pour générer les styles dynamiquement
function nav_item($href, $icon, $label, $current_page) {
    $is_active = ($current_page == $href);
    
    // Classes si le lien est ACTIF
    if ($is_active) {
        return "flex items-center gap-3 px-4 py-3 rounded-xl bg-emerald-500 text-white shadow-lg shadow-emerald-200 dark:shadow-none transition-all duration-300";
    } 
    // Classes si le lien est INACTIF (avec Hover)
    else {
        return "flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 dark:hover:bg-emerald-500/10 dark:hover:text-emerald-400 transition-all duration-200 group";
    }
}
?>

<aside class="w-72 bg-white dark:bg-slate-900 border-r border-slate-100 dark:border-slate-800 flex-col hidden md:flex h-screen sticky top-0 shrink-0">
    <div class="h-full flex flex-col justify-between p-6">
        
        <div class="flex flex-col gap-8">
            <div class="flex items-center gap-4 px-2">
                <div class="h-11 w-11 rounded-xl bg-gradient-to-br from-emerald-400 to-green-600 flex items-center justify-center shadow-md">
                    <span class="material-symbols-outlined text-white text-2xl">eco</span>
                </div>
                <div class="flex flex-col">
                    <h1 class="text-slate-800 dark:text-white text-xl font-extrabold tracking-tight leading-none">ASSAD Admin</h1>
                    <p class="text-emerald-500 text-[10px] font-bold uppercase tracking-widest mt-1">Zoo Virtuel</p>
                </div>
            </div>

            <nav class="flex flex-col gap-2">
                
            <a href="dash.php" class="<?= nav_item('dash.php', 'dashboard', 'Vue d\'ensemble', $current_page) ?>">
                    <span class="material-symbols-outlined text-[22px]">dashboard</span>
                    <span class="text-sm font-semibold">Vue d'ensemble</span>
                </a>

                <a href="admin_animaux.php" class="<?= nav_item('admin_animaux.php', 'pets', 'Gestion Animaux', $current_page) ?>">
                    <span class="material-symbols-outlined text-[22px]">pets</span>
                    <span class="text-sm font-semibold">Gestion Animaux</span>
                </a>

                <a href="admin_habitats.php" class="<?= nav_item('admin_habitats.php', 'forest', 'Habitats', $current_page) ?>">
                    <span class="material-symbols-outlined text-[22px]">forest</span>
                    <span class="text-sm font-semibold">Habitats</span>
                </a>

                <a href="admin_users.php" class="<?= nav_item('admin_users.php', 'group', 'Utilisateurs', $current_page) ?>">
                    <span class="material-symbols-outlined text-[22px]">group</span>
                    <span class="text-sm font-semibold">Utilisateurs</span>
                </a>

                <a href="settings.php" class="<?= nav_item('settings.php', 'settings', 'Paramètres', $current_page) ?>">
                    <span class="material-symbols-outlined text-[22px] group-hover:rotate-45 transition-transform duration-500">settings</span>
                    <span class="text-sm font-semibold">Paramètres</span>
                </a>

            </nav>
        </div>

        <div class="flex flex-col gap-4 border-t border-slate-100 dark:border-slate-800 pt-6">
            <div class="flex items-center justify-between bg-slate-50 dark:bg-slate-800/50 p-3 rounded-2xl">
                <div class="flex items-center gap-3">
                    <div class="relative">
                        <img class="h-10 w-10 rounded-full object-cover ring-2 ring-white dark:ring-slate-700" 
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLpsL4U45kNe2pJTEnRso6tfRPA6aLzfj3_19OQE6427LVmJ5aiOc1ZRWmvboLsjGaNmK64pZi1jhhiR-v87OvRhal9yHiSxQvTiX-eipY5OBy7UKmVoRy-c_ZXvLyH0-CLxF8G1ng-sBh2jhO4Yf-eaj5B3UE6mv0ggcUeAMOn8OYOLPj8EBGQKb-92AiJo5VHKJHGnSSRxJMnzp3emTjiTzC3qYd_2iEed3MQVluydYS0yi194Z_ztMxCH_6roaeCDAm0hQHwnIW" alt="Admin">
                        <span class="absolute bottom-0 right-0 h-3 w-3 bg-emerald-500 border-2 border-white dark:border-slate-800 rounded-full"></span>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-sm font-bold text-slate-700 dark:text-slate-200"><?= $nom_utilisateur ?></p>
                        <p class="text-[11px] text-slate-400 font-medium italic">Super Admin</p>
                    </div>
                </div>
                <a href="logout.php" title="Déconnexion" class="text-slate-400 hover:text-red-500 transition-colors">
                    <span class="material-symbols-outlined text-xl">logout</span>
                </a>
            </div>
        </div>

    </div>
</aside>
    <main class="flex-1 flex flex-col h-screen overflow-hidden relative">
        <header
            class="bg-surface-light dark:bg-surface-dark border-b border-gray-200 dark:border-gray-800 shrink-0 z-10">
            <div class="px-6 py-5 max-w-7xl mx-auto w-full">
                <div class="flex flex-wrap justify-between items-end gap-4">
                    <div class="flex flex-col gap-1">
                        <h1 class="text-3xl font-black tracking-tight text-text-light dark:text-text-dark">Gestion des Utilisateurs</h1>
                        <p
                            class="text-text-secondary-light dark:text-text-secondary-dark text-sm font-medium flex items-center gap-1">
                            Contrôle total sur les comptes Guides et Visiteurs
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button
                            class="flex items-center gap-2 px-4 py-2 rounded-lg bg-green-600 hover:bg-green-700 text-white shadow-lg shadow-green-600/30 transition-all text-sm font-bold">
                            <span class="material-symbols-outlined text-lg">person_add</span>
                            Ajouter Utilisateur
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <div class="flex-1 overflow-y-auto bg-background-light dark:bg-background-dark">
            <div class="max-w-7xl mx-auto w-full px-6 py-8 flex flex-col gap-8">
                
                <div class="flex flex-col md:flex-row justify-between items-center gap-4 p-4 bg-surface-light dark:bg-surface-dark rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm">
                    <div class="flex flex-wrap gap-3">
                        <button class="px-4 py-2 text-sm font-bold rounded-lg bg-primary text-white shadow-sm">Tous (<?= count($users) ?>)</button>
                        <button class="px-4 py-2 text-sm font-medium rounded-lg bg-gray-100 dark:bg-gray-800 text-text-secondary-light dark:text-text-secondary-dark hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">Guides (<?= count(array_filter($users, fn($u) => $u['role'] === 'guide')) ?>)</button>
                        <button class="px-4 py-2 text-sm font-medium rounded-lg bg-gray-100 dark:bg-gray-800 text-text-secondary-light dark:text-text-secondary-dark hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">Visiteurs (<?= count(array_filter($users, fn($u) => $u['role'] === 'visitor')) ?>)</button>
                    </div>
                    <div class="relative w-full md:w-auto">
                        <span
                            class="material-symbols-outlined absolute left-2.5 top-1/2 -translate-y-1/2 text-gray-400 text-sm">search</span>
                        <input
                            class="pl-8 pr-3 py-1.5 rounded-lg border-gray-200 dark:border-gray-700 bg-white dark:bg-surface-dark text-sm w-full md:w-64 focus:ring-primary/20 focus:border-primary"
                            placeholder="Rechercher par nom ou email..." type="text" />
                    </div>
                </div>

                <div
                    class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-xl border border-gray-100 dark:border-gray-800 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm whitespace-nowrap">
                            <thead
                                class="bg-gray-50/50 dark:bg-gray-800/30 border-b border-gray-100 dark:border-gray-800">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-semibold text-text-secondary-light dark:text-text-secondary-dark">
                                        Utilisateur</th>
                                    <th
                                        class="px-6 py-3 font-semibold text-text-secondary-light dark:text-text-secondary-dark">
                                        Rôle</th>
                                    <th
                                        class="px-6 py-3 font-semibold text-text-secondary-light dark:text-text-secondary-dark">
                                        Statut</th>
                                    <th
                                        class="px-6 py-3 font-semibold text-text-secondary-light dark:text-text-secondary-dark">
                                        Dernière Connexion</th>
                                    <th
                                        class="px-6 py-3 font-semibold text-text-secondary-light dark:text-text-secondary-dark text-right">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                                USER 
                                    <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-800/50 transition-colors group">
                                        <td class="px-6 py-3">
                                            <div class="flex items-center gap-3">
                                                <div class="flex flex-col">
                                                    <span class="font-bold text-text-light dark:text-text-dark">
                                                    NAME</span>
                                                    <span class="text-xs text-text-secondary-light truncate">MAIL</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-3">
                                           <!-- //ROLE -->
                                        </td>
                                        <td class="px-6 py-3">
                                         <!-- STATUS -->
                                            <span class="text-xs text-gray-500 capitalize">STATUS</span>
                                        
                                        <td class="px-6 py-3 text-right">
                                            <div
                                                class="flex items-center justify-end gap-1">
                                                <button
                                                    class="p-1.5 rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-blue-500"
                                                    title="Voir/Éditer le profil">
                                                    <span class="material-symbols-outlined text-lg">visibility</span>
                                                </button>
                                                <?php
                                                //  if ($user['status'] === 'active'): 
                                                 ?>
                                                    <button
                                                        class="p-1.5 rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-yellow-500"
                                                        title="Suspendre">
                                                        <span class="material-symbols-outlined text-lg">lock</span>
                                                    </button>
                                                <?php
                                            //  else: 
                                             ?>
                                                    <button
                                                        class="p-1.5 rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-green-500"
                                                        title="Activer">
                                                        <span class="material-symbols-outlined text-lg">lock_open</span>
                                                    </button>
                                                <?php 
                                            // endif; 
                                            ?>
                                                <?php 
                                                // if ($user['role'] !== 'admin'):
                                                 ?>
                                                    <button
                                                        class="p-1.5 rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-red-500"
                                                        title="Supprimer">
                                                        <span class="material-symbols-outlined text-lg">delete</span>
                                                    </button>
                                                <?php
                                            //  endif; 
                                             ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                            //  endforeach; 
                             ?>
                            </tbody>
                        </table>
                        <?php 
                        // if (empty($users)):
                         ?>
                             <div class="p-6 text-center text-text-secondary-light dark:text-text-secondary-dark text-sm">
                                Aucun utilisateur trouvé.
                            </div>
                        <?php 
                    // endif; 
                    ?>
                    </div>
                </div>
            </div>
            <div class="pb-6 text-center">
                <p class="text-[10px] text-gray-300 uppercase tracking-[0.2em] font-bold">Inspiré par la force des Lions
                    de l'Atlas</p>
            </div>
        </div>
    </main>

</body>

</html>