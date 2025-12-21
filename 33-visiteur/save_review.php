<?php
// CREATE TABLE commentaires (
//   id INT AUTO_INCREMENT PRIMARY KEY,
//   id_visite_guidee INT,
//   id_utilisateur INT,
//   note INT CHECK (note BETWEEN 1 AND 5),  
//   texte TEXT,
//   date_commentaire TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//   FOREIGN KEY (id_visite_guidee) REFERENCES visites_guidees(id) ON DELETE CASCADE,
//   FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id) ON DELETE CASCADE
// );

session_start();
include "../Fonctionalite_php/connect.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['id'])) {
    $id_visiteur = $_SESSION['id'];
    $id_visite = $_POST['id_visite'];
    $note = $_POST['note'];
    $commentaire = mysqli_real_escape_string($connect, $_POST['commentaire']);
    $sql = "INSERT INTO commentaires (id_visite_guidee, id_utilisateur,note, texte) VALUES (?, ?, ?, ?)";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("iiis", $id_visite, $id_visiteur, $note, $commentaire);
    $stmt->execute();
    header("Location: reservation.php?msg=Merci pour votre avis");
}
?>