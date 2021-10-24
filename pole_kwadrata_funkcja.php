<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pole kwadrata</title>
  </head>
  <body>

    <h3>Pole kwadrata [cm<sup>2</sup>]</h3>
    <form method="post">
      <input type="text" name="a" placeholder="Podaj bok a:"><br><br>
      <input type="submit" name="b" value="Oblicz">
    </form>

    <?php
      function pole($a){
        echo $a*$a;
      }
      if(!empty($_POST["a"])){
        echo "<hr><h4>Pole kwadrata wynosi: ";
        echo pole($_POST["a"]);
        echo "cm<sup>2</sup></h4>";
      }
      else{
        echo "<hr><h4>Uzupełnij wszystkie pola!!!</h4>";
      }
    ?>

  </body>
</html>
