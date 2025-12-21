<?php
session_start();
require_once "connect.php"; 

if (isset($_POST['save_visite'])) {
    $titre        = $_POST['titre'];
    $langue       = $_POST['langue'];
    $prix         = $_POST['prix'];
    $date_heure   = $_POST['date_heure'];
    $duree        = $_POST['duree'];
    $capacite_max = $_POST['capacite_max'];

    if (!empty($titre) && !empty($date_heure) && !empty($prix)) {
        
        mysqli_begin_transaction($connect);

        try {
            $stmt = mysqli_prepare($connect, "INSERT INTO visites_guidees (titre, date_heure, langue, capacite_max, statut, duree, prix) VALUES (?, ?, ?, ?, 'ouverte', ?, ?)");
            mysqli_stmt_bind_param($stmt, "sssiii", $titre, $date_heure, $langue, $capacite_max, $duree, $prix);
            mysqli_stmt_execute($stmt);

            $id_visite = mysqli_insert_id($connect);

            if (isset($_POST['etape_titre']) && is_array($_POST['etape_titre'])) {
                $etapes_titres = $_POST['etape_titre'];
                $etapes_descs  = $_POST['etape_desc'];

                $stmt_etape = mysqli_prepare($connect, "INSERT INTO etapes_visite (titre_etape, description_etape, ordre_etape, id_visite) VALUES (?, ?, ?, ?)");

                foreach ($etapes_titres as $key => $val_titre) {
                    if (!empty(trim($val_titre))) {
                        $ordre = $key + 1;
                        $desc  = $etapes_descs[$key];
                        mysqli_stmt_bind_param($stmt_etape, "ssii", $val_titre, $desc, $ordre, $id_visite);
                        mysqli_stmt_execute($stmt_etape);
                    }
                }
            }

            
            mysqli_commit($connect);
            header("Location: ../index.php?msg=success");
            exit(0);

        } catch (Exception $e) {
            mysqli_rollback($connect);
            header("Location: ../index.php?msg=error");
            exit(0);
        }

    } else {
        header("Location: ../index.php?msg=empty_fields");
        exit(0);
    }
} 
header("Location: ../index.php");
exit(0);
?>