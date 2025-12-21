<?php
session_start();
require_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!empty($_POST["email"]) && !empty($_POST["password"])) {

        $email = trim($_POST["email"]);
        $password = $_POST["password"];

       
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: login.php?error=email_format");
            exit;
        }

        if (!preg_match("/^[0-9]+$/", $password)) {
            header("Location: login.php?error=password_digits_only");
            exit;
        }

        $stmt = $connect->prepare("SELECT id, nom, role, mot_passe_hash, approuve FROM utilisateurs WHERE email = ? LIMIT 1");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user["mot_passe_hash"])) {

            if ($user["role"] === "guide" && (int)$user["approuve"] === 0) {
                header("Location: pages/booking_confirmation_page.php");
                exit;
            }

            $_SESSION["id"] = $user["id"];
            $_SESSION["nom"] = $user["nom"];
            $_SESSION["role"] = $user["role"];

           
            if ($user["role"] === "admin") {
                header("Location: ../11-admin/index.php");
            } elseif ($user["role"] === "guide") {
                header("Location: ../22-guide/index.php");
            } else {
                header("Location: ../33-visiteur/index.php");
            }
            exit;

        } else {
          
            header("Location: login.php?error=login_failed");
            exit;
        }

    } else {
        header("Location: login.php?error=empty_fields");
        exit;
    }
}