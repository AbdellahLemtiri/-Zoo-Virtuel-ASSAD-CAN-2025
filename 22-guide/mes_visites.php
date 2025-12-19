<?php
session_start();

// --- Inclusion du fichier de connexion à la base de données (à décommenter)
// include "../db_connect.php"; 

// 1. Vérification stricte des variables de session pour l'accès guide
if (
    isset($_SESSION['user_role'], $_SESSION['logged_in'], $_SESSION['user_id'], $_SESSION['user_name']) &&
    $_SESSION['user_role'] === "guide" &&
    $_SESSION['logged_in'] === TRUE
) {
    // Extraction des données de session
    $id_utilisateur = htmlspecialchars($_SESSION['user_id']);
    $nom_utilisateur = htmlspecialchars($_SESSION['user_name']);
    $role_utilisateur = htmlspecialchars($_SESSION['user_role']);
    
    // 2. SIMULATION DE DONNÉES (Remplacer par l'appel à la base de données)
    /* // Remplacez cette simulation par votre appel réel à la base de données :
    // $tours = get_guide_tours_by_user_id($conn, $id_utilisateur);
    */

    $tours = [
        [
            'id' => 101, 
            'title' => "L'Heure du Repas - Lions de l'Atlas", 
            'date' => 'Aujourd\'hui', 
            'time' => '14:00', 
            'status' => 'live', 
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBB3mzttMFekKaHiUMQgz9CbcCvR-LHMfkNamiYLEoaa6mr4VX3RGazcvrLyN6USTeeR3THkb5RzRgunm2nxYGRlj0JP37XKsb0oTpMuUfgiqYzKIQpDFu5Cwamtq0rGjsH93RIdsA6guKSg4KakhrlAV6mKU_SZGX00TM6y3-uGVugQHONmrBvFsVLmZ73htnyBEHRcaZXZ-cwzOoPb7aiKe-dIsmCV4By1n5q6PJKo8CSmh3GTGb2hDjnxSb8_vhCsJz-sArwzoL6', 
            'description' => 'Session exclusive pour observer le repas des lions. Parfait pour les fans de football.',
            'participants' => 25,
        ],
        [
            'id' => 102, 
            'title' => "Lever de soleil dans la Savane", 
            'date' => '25 Jan 2025', 
            'time' => '06:30', 
            'status' => 'scheduled', 
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAfp1bRMyv2dpQqfAcWjFmov8tllqhuTY-_7UKcmK-i0fMBP2vNUs7ta46MQfmTONER1DQyAx2aJYaTryLYpem5_0BsepLpYqjmtcIETHp2qoPYPAbF2TTeSPu67kaUjiIdASU4OSJMXDgdjgjpJT5xL0H-1JwQEvusRygo8LeqFaCu6ycLdtlWvG2wXG7sBd1VU4fS_Hg92lZd3utjDBwg6X37BHYrAv1sG9jHDnukIlmD_PVRRnBVWf8KE4P2CRtbfde8lcINnmdv', 
            'description' => 'Découvrez le réveil de la faune africaine. Une expérience calme et apaisante.',
            'participants' => 12,
        ],
        [
            'id' => 103, 
            'title' => "Les Secrets de l'Oasis", 
            'date' => '01 Fév 2025', 
            'time' => '10:00', 
            'status' => 'draft', 
            'image' => 'http://googleusercontent.com/profile/picture/4', 
            'description' => 'Visite virtuelle préparatoire pour une nouvelle zone thématique.',
            'participants' => 0,
        ],
    ];

} else {
    // Redirection de sécurité
    header("Location: connexion.php?error=access_denied");
    exit(); 
}
?>
<!DOCTYPE html>

<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Mes Visites - ASSAD</title>
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
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary dark:text-primary font-bold" href="#">
                        <span class="material-symbols-outlined">map</span>
                        <span>Mes Visites</span>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-main-light dark:text-text-sec-dark hover:bg-border-light dark:hover:bg-surface-dark transition-colors font-medium" href="reservations.php">
                        <span class="material-symbols-outlined text-text-sec-light dark:text-text-sec-dark">groups</span>
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
                        <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">Mes Visites</h2>
                        <p class="text-text-sec-light dark:text-text-sec-dark text-lg">Liste complète et gestion de toutes vos visites virtuelles.</p>
                    </div>
                    <button class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-xl font-bold shadow-lg shadow-primary/30 transition-all transform hover:scale-105">
                        <span class="material-symbols-outlined text-[20px]">add_circle</span>
                        <span>Créer une nouvelle visite</span>
                    </button>
                </div>
                
                <div class="flex flex-col gap-6">
                    <div class="flex items-center gap-4 border-b border-border-light dark:border-border-dark pb-3">
                        <h3 class="text-xl font-bold">Visites (<?= count($tours) ?>)</h3>
                        <div class="flex gap-2 text-sm">
                             <span class="px-3 py-1 bg-primary/20 text-primary rounded-full font-semibold cursor-pointer">Tous</span>
                             <span class="px-3 py-1 bg-border-light dark:bg-surface-dark text-text-sec-light dark:text-text-sec-dark rounded-full font-medium hover:bg-primary/10 transition-colors cursor-pointer">À venir (2)</span>
                             <span class="px-3 py-1 bg-border-light dark:bg-surface-dark text-text-sec-light dark:text-text-sec-dark rounded-full font-medium hover:bg-primary/10 transition-colors cursor-pointer">Brouillons (1)</span>
                        </div>
                    </div>
                    
                    <?php foreach ($tours as $tour) : ?>
                        <?php 
                            // Définir les classes et les icônes en fonction du statut
                            $status_class = '';
                            $status_text = '';
                            $status_icon = '';

                            switch ($tour['status']) {
                                case 'live':
                                    $status_class = 'bg-green-500/90';
                                    $status_text = 'En direct';
                                    $status_icon = '<span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>';
                                    break;
                                case 'scheduled':
                                    $status_class = 'bg-blue-600/90';
                                    $status_text = 'Programmé';
                                    $status_icon = '<span class="material-symbols-outlined text-[14px] leading-none">schedule</span>';
                                    break;
                                case 'draft':
                                    $status_class = 'bg-gray-600/90';
                                    $status_text = 'Brouillon';
                                    $status_icon = '<span class="material-symbols-outlined text-[14px] leading-none">edit_note</span>';
                                    break;
                                default:
                                    $status_class = 'bg-gray-400/90';
                                    $status_text = 'Inconnu';
                                    $status_icon = '';
                            }
                        ?>
                        
                        <div class="flex flex-col sm:flex-row gap-4 p-4 rounded-2xl bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark shadow-md hover:shadow-lg transition-shadow duration-300">
                            
                            <div class="h-48 sm:h-auto sm:w-48 rounded-xl bg-cover bg-center shrink-0 relative" data-alt="<?= htmlspecialchars($tour['title']) ?>" style='background-image: url("<?= $tour['image'] ?>");'>
                                <div class="m-2 absolute top-0 left-0 inline-flex px-2 py-1 <?= $status_class ?> backdrop-blur-sm text-white text-xs font-bold rounded-lg items-center gap-1">
                                    <?= $status_icon ?>
                                    <?= $status_text ?>
                                </div>
                            </div>
                            
                            <div class="flex flex-col justify-between flex-1 gap-4">
                                <div>
                                    <h4 class="text-xl font-bold mb-1 hover:text-primary transition-colors cursor-pointer"><?= htmlspecialchars($tour['title']) ?></h4>
                                    
                                    <p class="text-sm text-text-main-light/80 dark:text-text-main-dark/80 line-clamp-2 mb-2"><?= htmlspecialchars($tour['description']) ?></p>
                                    
                                    <div class="flex flex-wrap items-center gap-4 mt-2 text-sm text-text-sec-light dark:text-text-sec-dark">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-primary text-[18px]">calendar_month</span>
                                            <span><?= htmlspecialchars($tour['date']) ?>, <?= htmlspecialchars($tour['time']) ?></span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-primary text-[18px]">group</span>
                                            <span><?= $tour['participants'] ?> participants</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flex flex-wrap gap-3 mt-auto pt-2 border-t border-border-light dark:border-border-dark/50">
                                    <a href="visite_details.php?id=<?= $tour['id'] ?>" class="flex items-center gap-2 px-4 py-2 rounded-lg bg-primary text-white text-sm font-semibold hover:bg-primary/90 transition-colors">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                        Détails
                                    </a>
                                    <button class="flex items-center gap-2 px-4 py-2 rounded-lg border border-border-light dark:border-border-dark text-sm font-semibold hover:bg-border-light dark:hover:bg-surface-dark transition-colors">
                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                        Modifier
                                    </button>
                                    <?php if ($tour['status'] !== 'draft') : ?>
                                        <button class="flex items-center gap-2 px-4 py-2 rounded-lg border border-red-200 dark:border-red-900/30 text-red-600 dark:text-red-400 text-sm font-semibold hover:bg-red-50 dark:hover:bg-red-900/10 transition-colors">
                                            <span class="material-symbols-outlined text-[18px]">cancel</span>
                                            Annuler
                                        </button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    
                    <?php if (empty($tours)): ?>
                        <div class="text-center p-10 bg-surface-light dark:bg-surface-dark rounded-xl border border-dashed border-border-light dark:border-border-dark">
                            <span class="material-symbols-outlined text-primary text-5xl mb-3">sentiment_dissatisfied</span>
                            <p class="text-lg font-semibold">Aucune visite trouvée.</p>
                            <p class="text-text-sec-light dark:text-text-sec-dark text-sm mt-1">Cliquez sur "Créer une nouvelle visite" pour commencer.</p>
                        </div>
                    <?php endif; ?>
                    
                </div>
            </div>
        </main>
    </div>
</body>

</html>