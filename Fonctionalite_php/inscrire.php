<?php

require_once "connect.php";
session_start();

if (
    $_SERVER['REQUEST_METHOD'] === "POST" &&
    isset($_POST['nom'], $_POST['role'], $_POST['email'], $_POST['password'])
) {
    $fullName = trim($_POST['nom']);
    $role = $_POST['role'];
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $regexNom = "/^[a-zA-ZÀ-ÿ\s]{3,50}$/";
    $regexEmail = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $regexPassword = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    
    if (!preg_match($regexNom, $fullName)) {
        header("Location: ../index.php?error=invalid_name");
        exit();
    }
    if (!preg_match($regexEmail, $email)) {
        header("Location: ../index.php?error=invalid_email");
        exit();
    }
    if (!preg_match($regexPassword, $password)) {
        header("Location: ../index.php?error=weak_password");
        exit();
    }
    $allowedRoles = ['visiteur','guide'];
    if (!in_array($role, $allowedRoles)) 
    {
        header("Location: ../index.php?error=invalidRole");
        exit();
    }
    if($role==='visiteur')
    {
        $approuve = 1;
    }
    else
    {
          $approuve = 0;
    }
    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
    $sql = "INSERT INTO utilisateurs (nom,role,approuve, email, mot_passe_hash) VALUES (?, ?, ?, ?)";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("ssis", $fullName,$role,$approuve,$email,$hashedPassword);
    if ($stmt->execute()) 
    {
        header("Location: ../index.php?message=user_addedbien");
    }
     else 
    {
      
        header("Location: ../index.php?error=db_erroremaildeja");
    }

    $stmt->close();
} else {
    header("Location: ../index.php?errorform");
    exit();
}