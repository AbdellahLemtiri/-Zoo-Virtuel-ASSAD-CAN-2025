<?php

require_once "connect.php";
session_start();
if (
    $_SERVER['REQUEST_METHOD'] === "POST" &&
    isset($_POST['nom'], $_POST['role'], $_POST['email'], $_POST['password'])
) {

    $fullName = $_POST['nom'];
    $role = $_POST['role'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO utilisateurs (nom, role, email, mot_passe_hash) VALUES (?, ?, ?, ?)";

    $stmt = $connect->prepare($sql);
    $stmt->bind_param("ssss", $fullName, $role, $email, $hashedPassword);

    if ($stmt->execute()) {
        
        header("Location: ../index.php?message=user_added");
    } else {
        header("Location: ../index.php?error=4");
    }

    $stmt->close();
} else {

    header("Location: ../index.php?error=1");
    exit();

}
