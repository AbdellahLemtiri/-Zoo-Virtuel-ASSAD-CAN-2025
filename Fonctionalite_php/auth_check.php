<?php

    session_start();


function protect_page($role) {
   
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../index.php");
        exit();
    }

   
    if ($_SESSION['role'] !== $role) {
   header("Location: ../index.php");
        exit();
    }
}