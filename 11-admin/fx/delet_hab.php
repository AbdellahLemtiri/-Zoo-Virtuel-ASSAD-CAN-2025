<?php
require_once "connect.php";
if($_SERVER["REQUEST_METHOD"]== "GET"){
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "DELETE FROM habitats WHERE id = $id";
      if($connect->query($sql)){
          echo "<script>alert('habitat supprimé avec succès');</script>";
        
      }
      else{

      }
  header("location:../admin_habitatas.php");
    }
}