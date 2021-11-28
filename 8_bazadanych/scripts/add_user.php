<?php
  if(!empty($_POST)){
    foreach ($_POST as $key => $value) {
      //echo "$key: $value<br>";
      if (empty($value)) {
        //echo "<script>history.back()</script>";
        header("location: ../4_db_select_delate.php?error=Wypełnij wszystkie pola!&addUser=");
        exit();
      }
    }
    require_once "./conect.php";
    $sql="INSERT INTO `users` (`id`, `name`, `surname`, `birthdate`, `create_date`) VALUES (NULL, '$_POST[name]', '$_POST[surname]', '$_POST[birthdate]', current_timestamp());";
    $connect->query($sql);
    //header("location: ../4_db_select_delate.php");
    if($connect->affected_rows){
      header("location: ../4_db_select_delate.php?error=Dodano użytkownika");
    }
    else{
      header("location: ../4_db_select_delate.php?error=Nie dodano użytkownika!");
    }
  }
?>
