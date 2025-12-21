<?php
session_start();
require_once "connect.php";
$email = '';
$password = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (
        isset($_POST["email"], $_POST["password"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["password"])
    ) {

        $email = trim($_POST["email"]);
        $password = $_POST["password"];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Email ou mot de passe incorrect");
        }



        $stmt = $connect->prepare("
    SELECT id, nom, role, mot_passe_hash, approuve
    FROM utilisateurs
    WHERE email = ?
    LIMIT 1
");

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            echo("Email ou mot de passe incorrect");
        }

        $user = $result->fetch_assoc();

        if (!password_verify($password, $user["mot_passe_hash"])) {
            die("Email ou mot de passe incorrect");
        }

        if ($user["role"] === "guide" && (int)$user["approuve"] === 0) {
            header("Location: booking.php");
            exit;
        }

        $_SESSION["id"] = $user["id"];
        $_SESSION["nom"] = $user["nom"];
        $_SESSION["role"] = $user["role"];

        if ($user["role"] === "admin") {
            header("Location:11-admin/inedx.php");
        } elseif ($user["role"] === "guide") {
            header("Location:22-guide/index.php");
        } elseif ($user["role"] === "guide") {
            header("Location:33-visiteur/index.php");
        }
        exit;
    } else {
        die("Veuillez remplir tous les champs !");
    }
}
