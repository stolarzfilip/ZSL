<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pole i obwód kwadrata</title>
  </head>
  <body>

    <h3>Pole [cm<sup>2</sup>] i obwód [cm] kwadrata</h3>
    <form method="post">
      <input type="text" name="a" placeholder="Podaj bok a:"><br><br>
      <input type="submit" name="b" value="Oblicz">
    </form>

    <?php
      function pole($a){
        echo $a*$a;
      }
      function obw($a){
        echo $a*4;
      }
      if(!empty($_POST["a"])){
        echo "<hr><h4>Długość boku a: $_POST[a]cm";
        echo "<br>Pole kwadrata wynosi: ";
        echo pole($_POST["a"]);
        echo "cm<sup>2</sup><br>";
        echo "Obwód kwadrata wynosi: ";
        echo obw($_POST["a"])."cm</h4>";
      }
      else{
        echo "<hr><h4>Uzupełnij wszystkie pola!!!</h4>";
      }
    ?>

  </body>
</html>
