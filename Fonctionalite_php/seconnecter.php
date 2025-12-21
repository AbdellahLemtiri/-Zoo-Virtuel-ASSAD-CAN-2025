<?php
session_start();
require_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    

    $email = isset($_POST["email"]) ? strtolower(trim($_POST["email"])) : '';
    $password = isset($_POST["password"]) ? trim($_POST["password"]) : '';

    if (!empty($email) && !empty($password)) {

      
        $emailRegex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

        $passRegex = "/^[0-9]{4,8}$/";

        if (!preg_match($emailRegex, $email)) {
            header("Location: ../index.php?error=invalid_email_format");
            exit();
        }

        if (!preg_match($passRegex, $password)) {
            header("Location: ../index.php?error=invalid_password_format");
            exit();
        }

        $stmt = $connect->prepare("SELECT * FROM utilisateurs WHERE LOWER(email) = ? LIMIT 1");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

       
        if ($user && password_verify($password, trim($user["mot_passe_hash"]))) {
            
            $_SESSION["id"] = $user["id"];
            $_SESSION["nom"] = $user["nom"];
            $_SESSION["role"] = $user["role"];

      
            if ($user["role"] === "admin") {
                header("Location: ../11-admin/index.php");
            } 
            elseif ($user["role"] === "guide") {
                if ((int)$user["approuve"] === 0) {
                    header("Location: booking.php"); 
                } else {
                    header("Location: ../22-guide/index.php");
                }
            } 
            elseif ($user["role"] === "visiteur") {
                  if ((int)$user["approuve"] === 0) {
                    header("Location: booking.php"); 
                }
                else{
              header("Location: ../33-visiteur/index.php");
                }
            
            }
            exit();

        } else {
            header("Location: ../index.php?error=login_failed");
            exit();
        }
    } else {
        header("Location: ../index.php?error=empty_fields");
        exit();
    }
}