<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data</title>
  </head>
  <body>
    <?php
      echo $_SESSION["name"]."<br><br>";
      $_SESSION["surname"] = "Nowak";
    ?>

    <a href="./surname.php">Imię i nazwisko</a>

  </body>
</html>
