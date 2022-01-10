<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Skrypt</title>
  </head>
  <body>

    <?php
    if(!empty($_POST["email"]) && !empty($_POST["pass"])){
      echo "Udało się zalogować";
      echo '<br><br><a href="./login.php">Powrót do logowania</a>';
    }
    else{
      $_SESSION["error"] = "Wypełnij wszystkie pola!<br>";
      header("location: ./login.php");
    }
    ?>

  </body>
</html>
