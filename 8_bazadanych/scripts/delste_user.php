<?php
  if(!empty($_GET['delateUser'])){
    //echo $_GET["delsteUser"];
    require_once './conect.php';
    $sql="DELETE FROM `users` WHERE `users`.`id` = $_GET[delateUser] ";
    $connect->query($sql);
    if($connect->affected_rows){
      echo "ok";
      //header("location: ../3_db_select_delate.php?error=Prawidłowo usunięto rekord o id = $_GET[delateUser]");
      header("location: ../4_db_select_delate.php?error=Prawidłowo usunięto rekord o id = $_GET[delateUser]");
    }
    else{
      //header("location: ../3_db_select_delate.php?error=Nie usunięto rekordu!");
      header("location: ../4_db_select_delate.php?error=Nie usunięto rekordu!");
    }
  }
  else{
    header("location: ../3_db_select_delate.php");
  }
?>
