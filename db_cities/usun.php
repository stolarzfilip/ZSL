<?php
  if(!empty($_GET["usun"])){
    require_once "./conect_city.php";
    $sql = "DELETE FROM `cities` WHERE `cities`.`city_id` = $_GET[usun]";
    $polonczenie->query($sql);
      if($polonczenie->affected_rows){
        header("location: ./tabela_db.php?error=Usunięto miasto o id = $_GET[usun] z tabeli.");
      }
      else{
        header("location: ./tabela_db.php?error=Nie usunięto użytkownika!");
      }
  }
  else{
    header("location: ./tabela_db.php");
  }
?>
