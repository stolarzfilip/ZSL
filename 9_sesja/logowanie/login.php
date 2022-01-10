<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Logowanie</title>
  </head>
  <body>
    <?php
    if(isset($_SESSION["error"]))
      echo $_SESSION["error"]."<br>";

      echo <<< form
      <form action="./script.php" method="post">
        <input type="text" name="email" placeholder="E-mail"><br><br>
        <input type="password" name="pass" placeholder="Hasło"><br><br>
        <input type="submit" value="Zatwierdz">
      </form>
form;

      unset($_SESSION["error"]);
    ?>


  </body>
</html>
