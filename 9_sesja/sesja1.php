<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona domowa</title>
  </head>
  <body>
    <h4>Strona domowa</h4>
    <?php
      //unsert($_SESSION["name"]);
      //session_destroy();
      echo session_status();
      $_SESSION["name"] = "Janusz";
    ?>
    <a href="./data.php">Dana</a>

  </body>
</html>
