<?php

require_once "../Fonctionalite_php/connect.php"; 

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
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Gestion des Animaux - ASSAD Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body class="bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark font-display antialiased min-h-screen flex overflow-hidden">

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
            </nav>
        </div>

        <div class="flex flex-col gap-4 border-t border-slate-100 dark:border-slate-800 pt-6">
            <div class="flex items-center justify-between bg-slate-50 dark:bg-slate-800/50 p-3 rounded-2xl">
                <div class="flex items-center gap-3">
                    <div class="relative">
                        <img class="h-10 w-10 rounded-full object-cover ring-2 ring-white dark:ring-slate-700" 
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLpsL4U45kNe2pJTEnRso6tfRPA6aLzfj3_19OQE6427LVmJ5aiOc1ZRWmvboLsjGaNmK64pZi1jhhiR-v87OvRhal9yHiSxQvTiX-eipY5OBy7UKmVoRy-c_ZXvLyH0-CLxF8G1ng-sBh2jhO4Yf-eaj5B3UE6mv0ggcUeAMOn8OYOLPj8EBGQKb-92AiJo5VHKJHGnSSRxJMnzp3emTjiTzC3qYd_2iEed3MQVluydYS0yi194Z_ztMxCH_6roaeCDAm0hQHwnIW" alt="Admin">
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>

<main class="flex-1 flex flex-col h-screen overflow-hidden relative">
    <header class="bg-surface-light dark:bg-surface-dark border-b border-gray-200 dark:border-gray-800 shrink-0 z-10">
        <div class="px-6 py-5 max-w-7xl mx-auto w-full">
            <div class="flex flex-wrap justify-between items-end gap-4">
                <div class="flex flex-col gap-1">
                    <h1 class="text-3xl font-black tracking-tight text-text-light dark:text-text-dark">Gestion des Animaux</h1>
                    <p class="text-text-secondary-light dark:text-text-secondary-dark text-sm font-medium flex items-center gap-1">
                        Base de données complète des espèces du Zoo Virtuel
                    </p>
                </div>
                <div class="flex items-center gap-3">
                    <a href="#" data-modal-toggle="modal_add_animal"
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
                                                    <img src="<?= htmlspecialchars($animal['image']) ?>" alt="<?= htmlspecialchars($animal['nom']) ?>" 
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
                                                <a href="fx/edit_animal.php?id=<?= $animal['id'] ?>" class="p-2 rounded-lg hover:bg-blue-50 text-blue-600 transition-colors" title="Modifier">
                                                    <span class="material-symbols-outlined text-xl">edit</span>
                                                </a>
                                                <a href="fx/delete_animal.php?id=<?= $animal['id'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet animal ?')" class="p-2 rounded-lg hover:bg-red-50 text-red-500 transition-colors" title="Supprimer">
                                                    <span class="material-symbols-outlined text-xl">delete</span>
                                                </a>
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
            </div>
        </div>
    </main>
</body>
</html>
