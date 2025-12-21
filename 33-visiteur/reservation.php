 <?php
    // session_start();
    // $_SESSION['role_utilisateur'] = "visiteur";
    // include "../Fonctionalite_php/connect.php";

    // if (
    //     // isset($_SESSION['role_utilisateur'], $_SESSION['logged_in'], $_SESSION['id_utilisateur'], $_SESSION['nom_utilisateur']) &&
    //     // $_SESSION['role_utilisateur'] === "visiteur" &&
    //     // $_SESSION['logged_in'] === TRUE
    //     1
    // ) {
    //     $id_utilisateur = htmlspecialchars($_SESSION['id_utilisateur']) ?? "a";
    //     $nom_utilisateur = htmlspecialchars($_SESSION['nom_utilisateur'])?? "a";
    //     $role_utilisateur = htmlspecialchars($_SESSION['role_utilisateur'])?? "a";

    //     $sql = " select * from  utilisateurs where role='guide' ";
    //     $resultat = $conn->query($sql);

    //     $array_guides = array();
    //     while ($ligne =  $resultat->fetch_assoc())
    //         array_push($array_guides, $ligne);

    //     $sql = " select * from  visitesguidees  inner join  utilisateurs  on id_utilisateur =id_guide  ";
    //     $resultat = $conn->query($sql);

    //     $array_visites = array();
    //     while ($ligne =  $resultat->fetch_assoc())
    //         array_push($array_visites, $ligne);
    // } else {
    //     header("Location: ../connexion.php?error=access_denied");
    //     exit();
    // }




    // $sql = "SELECT a.*, h.nom_habitat 
    //     FROM animaux a 
    //     JOIN habitats h ON a.id_habitat = h.id_habitat 
    //     WHERE 1=1";



    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //     if (!empty($_POST['search'])) {
    //         $sql .= " AND a.nom_animal LIKE '" . $_POST['search'] . "%'";
    //     }

    //     // filter par Habitat
    //     if (!empty($_POST['id_habitat'])) {
    //         $sql .= " AND a.id_habitat = " . $_POST['id_habitat'];
    //     }

    //     // Filtre par typr alimentation
    //     if (!empty($_POST['alimentation_animal'])) {
    //         $sql .= " AND a.alimentation_animal = '" . $_POST['alimentation_animal'] . "'";
    //     }
    // }

    // try {
    //     $resultat = $conn->query($sql);
    //     $array_animaux = array();
    //     while ($ligne =  $resultat->fetch_assoc())
    //         array_push($array_animaux, $ligne);
    // } catch (Exception $e) {

    //     error_log(date('Y-m-d H:i:s') . " - Erreur Recherche Animaux : " . $e->getMessage() . PHP_EOL, 3, "../error.log");
    //     $array_animaux = array();
    //     while ($ligne =  $resultat->fetch_assoc())
    //         array_push($array_animaux, $ligne);
    // }




$sql_guides = "SELECT id, nom FROM utilisateurs WHERE role = 'Guide' AND approuve = 1";
$res_guides = $connect->query($sql_guides);
$array_guides = $res_guides->fetch_all(MYSQLI_ASSOC);

$where_clause = "WHERE v.statut = 'disponible'"; 

$sql_visites = "SELECT v.*, 
                (v.capacite_max - COALESCE(SUM(r.nbpersonnes), 0)) AS places_restantes
                FROM visitesguidees v
                LEFT JOIN reservations r ON v.id_visite = r.idvisite
                $where_clause
                GROUP BY v.id_visite
                ORDER BY v.dateheure ASC";

$res_visites = $connect->query($sql_visites);
$array_visites = $res_visites->fetch_all(MYSQLI_ASSOC);

    ?>

 <!DOCTYPE html>

 <html class="light" lang="fr">

 <head>
     <meta charset="utf-8" />
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
     <title>Réservation Visites - Zoo Virtuel ASSAD</title>
     <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
     <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap"
         rel="stylesheet" />
     <link
         href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
         rel="stylesheet" />
     <script id="tailwind-config">
         tailwind.config = {
             darkMode: "class",
             theme: {
                 extend: {
                     colors: {
                         "primary": "#ec7f13",
                         "background-light": "#f8f7f6",
                         "background-dark": "#221910",
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
     <style>
         .material-symbols-outlined {
             font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
         }
     </style>
 </head>

 <body class="bg-background-light dark:bg-background-dark text-[#1b140d] font-display min-h-screen flex flex-col">
     <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-[#f3ede7]">
         <div class="max-w-[1200px] mx-auto px-4 md:px-10 py-3">
             <div class="flex items-center justify-between whitespace-nowrap">
                 <div class="flex items-center gap-4">
                     <div class="text-primary">
                         <span class="material-symbols-outlined text-4xl">pets</span>
                     </div>
                     <h2 class="text-[#1b140d] text-lg font-bold leading-tight tracking-[-0.015em]">Zoo Virtuel ASSAD
                     </h2>
                 </div>
                 <div class="hidden lg:flex flex-1 justify-end gap-8">
                     <div class="flex items-center gap-9">
                         <a class="text-[#1b140d] text-sm font-medium hover:text-primary transition-colors"
                             href="index.php">Accueil</a>
                         <a class="text-[#1b140d] text-sm font-medium hover:text-primary transition-colors"
                             href="animaux.php">Animaux</a>
                         <a class="text-primary text-sm font-bold hover:text-primary transition-colors"
                             href="reservation.php">Réservation</a>
                         <a class="text-[#1b140d] text-sm font-medium hover:text-primary transition-colors"
                             href="#">CAN 2025</a>
                     </div>

                 </div>
                 <button class="lg:hidden text-[#1b140d]">
                     <span class="material-symbols-outlined">menu</span>
                 </button>
             </div>
         </div>
     </header>

 <?php foreach ($array_visites as $visit) : 
    $date_visite = strtotime($visit['dateheure']); 
    $maintenant = time();
    $places_restantes = $visit['places_restantes'];
    $is_full = $places_restantes <= 0;
?>
    <div class="flex flex-col sm:flex-row gap-4 p-4 rounded-2xl bg-white border border-[#f3ede7] shadow-md hover:shadow-lg transition-all <?= $is_full ? 'opacity-75 grayscale' : '' ?>">
        
        <div class="h-48 sm:h-auto sm:w-48 rounded-xl bg-cover bg-center shrink-0 relative bg-primary/10 flex items-center justify-center">
            <span class="material-symbols-outlined text-4xl text-primary/30">map</span>
            
            <?php if ($date_visite <= $maintenant && $date_visite > ($maintenant - 3600)) : ?>
                <div class="m-2 absolute top-0 left-0 inline-flex px-2 py-1 bg-green-500 text-white text-xs font-bold rounded-lg items-center gap-1">
                    <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span> En direct
                </div>
            <?php elseif ($date_visite > $maintenant) : ?>
                <div class="m-2 absolute top-0 left-0 inline-flex px-2 py-1 bg-blue-600 text-white text-xs font-bold rounded-lg items-center gap-1">
                    <span class="material-symbols-outlined text-[14px]">schedule</span> Programmé
                </div>
            <?php endif; ?>
        </div>

        <div class="flex flex-col justify-between flex-1 gap-4">
            <div>
                <h4 class="text-xl font-bold mb-1 text-[#1b140d]"><?= htmlspecialchars($visit['titre']) ?></h4>
                <div class="flex flex-wrap items-center gap-4 mt-2 text-sm text-gray-500">
                    <div class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-primary text-[18px]">calendar_month</span>
                        <span><?= date('d M Y, H:i', $date_visite) ?></span>
                    </div>
                    <div class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-primary text-[18px]">group</span>
                        <span class="<?= $is_full ? 'text-red-500' : '' ?>">
                            <?= $is_full ? 'Complet' : $places_restantes . ' places dispo.' ?>
                        </span>
                    </div>
                    <div class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-primary text-[18px]">payments</span>
                        <span class="font-bold text-green-600"><?= number_format($visit['prix'], 2) ?> DH</span>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap gap-3 mt-auto pt-2 border-t border-gray-100">
                <a href="visite_details.php?id=<?= $visit['id_visite'] ?>" class="flex items-center gap-2 px-4 py-2 rounded-lg bg-gray-100 text-gray-700 text-sm font-semibold hover:bg-gray-200 transition-colors">
                    <span class="material-symbols-outlined text-[18px]">visibility</span> Détails
                </a>

                <?php if (!$is_full && isset($_SESSION['user_id'])) : ?>
                    <button onclick="openBookingModal(<?= $visit['id_visite'] ?>, '<?= addslashes($visit['titre']) ?>', <?= $places_restantes ?>)" 
                            class="flex items-center gap-2 px-4 py-2 rounded-lg bg-primary text-white text-sm font-semibold hover:bg-orange-600 transition-colors">
                        <span class="material-symbols-outlined text-[18px]">confirmation_number</span> Réserver
                    </button>
                <?php elseif (!$is_full): ?>
                    <a href="login.php" class="text-xs text-primary underline">Connectez-vous pour réserver</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>

     <footer class="bg-[#1b140d] text-white pt-16 pb-8 mt-auto">
         <div class="max-w-[1200px] mx-auto px-4 md:px-10">
             <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                 <div class="col-span-1 md:col-span-1">
                     <div class="flex items-center gap-3 mb-6">
                         <div class="text-primary">
                             <span class="material-symbols-outlined text-4xl">pets</span>
                         </div>
                         <span class="font-bold text-xl">ASSAD Zoo</span>
                     </div>
                     <p class="text-gray-400 text-sm leading-relaxed mb-6">
                         Le premier zoo virtuel dédié à la faune africaine. Soutenez la conservation et célébrez la CAN 2025 avec nous.
                     </p>
                 </div>
                 <div>
                     <h4 class="font-bold mb-4 text-white">Explorer</h4>
                     <ul class="space-y-3 text-gray-400 text-sm">
                         <li><a class="hover:text-primary transition-colors" href="animaux.php">Nos Animaux</a></li>
                         <li><a class="hover:text-primary transition-colors" href="reservation.php">Réservation Visites</a></li>
                         <li><a class="hover:text-primary transition-colors" href="#">Programme Éducatif</a></li>
                     </ul>
                 </div>
                 <div>
                     <h4 class="font-bold mb-4 text-white">CAN 2025</h4>
                     <ul class="space-y-3 text-gray-400 text-sm">
                         <li><a class="hover:text-primary transition-colors" href="#">Billetterie</a></li>
                         <li><a class="hover:text-primary transition-colors" href="#">Fan Zone Virtuelle</a></li>
                         <li><a class="hover:text-primary transition-colors" href="#">Partenaires</a></li>
                     </ul>
                 </div>
                 <div>
                     <h4 class="font-bold mb-4 text-white">Newsletter</h4>
                     <p class="text-gray-400 text-sm mb-4">Restez informé des naissances et des matchs.</p>
                     <div class="flex gap-2">
                         <input
                             class="bg-white/10 border-none rounded-lg text-sm text-white px-3 py-2 w-full focus:ring-1 focus:ring-primary"
                             placeholder="Votre email" type="email" />
                         <button class="bg-primary hover:bg-orange-600 text-white rounded-lg px-3 py-2 transition-colors">
                             <span class="material-symbols-outlined text-sm">send</span>
                         </button>
                     </div>
                 </div>
             </div>
             <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                 <p class="text-gray-500 text-xs">© 2025 Zoo Virtuel ASSAD. Tous droits réservés.</p>
                 <div class="flex gap-6 text-gray-500 text-xs">
                     <a class="hover:text-white transition-colors" href="#">Confidentialité</a>
                     <a class="hover:text-white transition-colors" href="#">Conditions</a>
                     <a class="hover:text-white transition-colors" href="#">Cookies</a>
                 </div>
             </div>
         </div>
     </footer>
 </body>

 </html>