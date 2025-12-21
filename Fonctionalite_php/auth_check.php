<?php

    session_start();


function protect_page($role) {
   
    if (!isset($_SESSION['user_id'])) {
        header("Location: /ASSAD/login.php");
        exit();
    }

   
    if ($_SESSION['role'] !== $role) {
        header("Location: /ASSAD/index.php");
        exit();
    }
}