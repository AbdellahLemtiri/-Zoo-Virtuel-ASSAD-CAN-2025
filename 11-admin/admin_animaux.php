<?php
// 1. الاتصال بقاعدة البيانات
require_once "../Fonctionalite_php/connect.php"; 

// 2. جلب الحيوانات مع سمية الـ Habitat (باستعمال JOIN)
$sql = "SELECT a.*, h.nom AS nom_habitat 
        FROM animaux a 
        LEFT JOIN habitats h ON a.id_habitat = h.id 
        ORDER BY a.id DESC";

$result = $connect->query($sql);
$animaux = [];

if ($result) {
    $animaux = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Gestion des Animaux - ASSAD Admin</title>
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
                        "primary": "#ec7f13",
                        "primary-dark": "#d16a0a",
                        "background-light": "#f8f7f6",
                        "background-dark": "#221910",
                        "surface-light": "#ffffff",
                        "surface-dark": "#2d241b",
                        "text-light": "#1b140d",
                        "text-dark": "#f0e6dd",
                        "text-secondary-light": "#9a734c",
                        "text-secondary-dark": "#b08d6b",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
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
                        <h1 class="text-3xl font-black tracking-tight text-text-light dark:text-text-dark">Gestion des Animaux</h1>
                        <p
                            class="text-text-secondary-light dark:text-text-secondary-dark text-sm font-medium flex items-center gap-1">
                            Base de données complète des espèces du Zoo Virtuel
                        </p>
                    </div>
                    <div class="flex items-center gap-3">

                        <a href="admin_add_animal.php"
                            class="flex items-center gap-2 px-4 py-2 rounded-lg bg-green-600 hover:bg-green-700 text-white shadow-lg shadow-green-600/30 transition-all text-sm font-bold">
                            <span class="material-symbols-outlined text-lg">add</span>
                            Ajouter Nouvel Animal
</a>
                    </div>
                </div>
            </div>
        </header>
   <div class="flex-1 overflow-y-auto bg-gray-50 dark:bg-[#0f172a]">
    <div class="max-w-7xl mx-auto w-full px-6 py-8 flex flex-col gap-8">
        
        <div class="flex flex-col md:flex-row justify-between items-center gap-4 p-5 bg-white dark:bg-[#1e293b] rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm">
            <div class="flex flex-wrap gap-3">
                <button class="px-5 py-2.5 text-sm font-bold rounded-xl bg-teal-600 text-white shadow-lg shadow-teal-600/20 hover:bg-teal-700 transition-all">
                    Tous (<?= count($animaux) ?>)
                </button>
              
            </div>

            <div class="relative w-full md:w-auto">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-lg">search</span>
                <input class="pl-10 pr-4 py-2.5 rounded-xl border-gray-200 dark:border-gray-600 bg-gray-50 dark:bg-[#0f172a] text-sm w-full md:w-72 focus:ring-2 focus:ring-teal-500 focus:border-teal-500 outline-none transition-all"
                    placeholder="Rechercher un animal..." type="text" />
            </div>
        </div>

        <div class="bg-white dark:bg-[#1e293b] rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm whitespace-nowrap">
                    <thead class="bg-gray-50 dark:bg-gray-800/50 border-b border-gray-100 dark:border-gray-700">
                        <tr>
                            <th class="px-6 py-4 font-semibold text-gray-500 dark:text-gray-400">Animal</th>
                            <th class="px-6 py-4 font-semibold text-gray-500 dark:text-gray-400">Espèce</th>
                            <th class="px-6 py-4 font-semibold text-gray-500 dark:text-gray-400">Habitat</th>
                            <th class="px-6 py-4 font-semibold text-gray-500 dark:text-gray-400">Alimentation</th>
                            <th class="px-6 py-4 font-semibold text-gray-500 dark:text-gray-400 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                        <?php if (count($animaux) > 0): ?>
                            <?php foreach ($animaux as $animal): ?>
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-4">
                                            <div class="h-12 w-12 rounded-xl overflow-hidden bg-gray-200 border border-gray-200 dark:border-gray-600 shadow-sm">
                                                <img src="../assets/img/<?= htmlspecialchars($animal['image']) ?>" 
                                                     alt="<?= htmlspecialchars($animal['nom']) ?>" 
                                                     class="h-full w-full object-cover"
                                                     onerror="this.src='https://via.placeholder.com/100?text=No+Img'">
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="font-bold text-gray-900 dark:text-white text-base"><?= htmlspecialchars($animal['nom']) ?></span>
                                                <span class="text-xs text-gray-400">ID: #<?= $animal['id'] ?></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-3 py-1 rounded-full text-xs font-medium bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400 border border-blue-100 dark:border-blue-800">
                                            <?= htmlspecialchars($animal['espece']) ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2 text-gray-600 dark:text-gray-300">
                                            <span class="material-symbols-outlined text-lg text-teal-500">landscape</span>
                                            <?= htmlspecialchars($animal['nom_habitat'] ?? 'Non assigné') ?>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="text-gray-600 dark:text-gray-400"><?= htmlspecialchars($animal['alimentation']) ?></span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                            <button class="p-2 rounded-lg hover:bg-blue-50 text-blue-600 transition-colors" title="Modifier">
                                                <span class="material-symbols-outlined text-xl">edit</span>
                                            </button>
                                            <button class="p-2 rounded-lg hover:bg-red-50 text-red-500 transition-colors" title="Supprimer">
                                                <span class="material-symbols-outlined text-xl">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="px-6 py-10 text-center text-gray-500 dark:text-gray-400">
                                    <div class="flex flex-col items-center gap-2">
                                        <span class="material-symbols-outlined text-4xl text-gray-300">pets</span>
                                        <p>Aucun animal trouvé dans la base de données.</p>
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            
            <div class="p-4 border-t border-gray-100 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800/30 flex justify-center">
                <span class="text-xs text-gray-400">Fin de la liste</span>
            </div>
        </div>
    </div>
</div>
    </main>

</body>

</html>