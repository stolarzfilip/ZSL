<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pole prostokąta</title>
  </head>
  <body>

    <h3>Pole prostokąta [cm<sup>2</sup>]</h3>
    <form method="post">
      <input type="text" name="a1" placeholder="Podaj bok a:"><br><br>
      <input type="text" name="a2" placeholder="Podaj bok b:"><br><br>
      <input type="submit" name="b1" value="Oblicz">
    </form>

    <?php
      function pole($a1,$a2){
        echo $a1*$a2;
      }
      if(!empty($_POST["a1"]) && !empty($_POST["a2"])){
        echo "<hr><h4>Pole prostokąta wynosi: ";
        echo pole($_POST["a1"],$_POST["a2"]);
        echo "cm<sup>2</sup></h4>";
      }
      else{
        echo "<hr><h4>Uzupełnij wszystkie pola!!!</h4>";
      }
    ?>

  </body>
</html>
