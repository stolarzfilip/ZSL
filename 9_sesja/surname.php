<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Imię i nazwisko</title>
  </head>
  <body>
    <h4>Imię i nazwisko</h4>

    <?php
      echo $_SESSION["name"]. " " .$_SESSION["surname"]."<br>";
      echo "<br>Identyikator sesji: ";
      echo session_id()."<br>";
      session_regenerate_id();
      echo "<br>Identyikator sesji: ";
      echo session_id();
    ?>

    <br><br>
    <a href="./sesja1.php">Strona domowa</a>

  </body>
</html>
