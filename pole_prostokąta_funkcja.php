<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pole i obwód prostokąta</title>
  </head>
  <body>

    <h3>Pole [cm<sup>2</sup>] i obwód [cm] prostokąta</h3>
    <form method="post">
      <input type="text" name="a1" placeholder="Podaj bok a:"><br><br>
      <input type="text" name="a2" placeholder="Podaj bok b:"><br><br>
      <input type="submit" name="b1" value="Oblicz">
    </form>

    <?php
      function pole($a1,$a2){
        echo $a1*$a2;
      }
      function obw($a1,$a2){
        echo $a1*2+$a2*2;
      }
      if(!empty($_POST["a1"]) && !empty($_POST["a2"])){
        echo "<hr><h4>Długość boku a: $_POST[a1]cm";
        echo "<br>Długość boku b: $_POST[a2]cm";
        echo "<br>Pole prostokąta wynosi: ";
        echo pole($_POST["a1"],$_POST["a2"]);
        echo "cm<sup>2</sup>";
        echo "<br>Obwód prostokąta wynosi: ";
        echo obw($_POST["a1"],$_POST["a2"])."cm</h4>";
      }
      else{
        echo "<hr><h4>Uzupełnij wszystkie pola!!!</h4>";
      }
    ?>

  </body>
</html>
