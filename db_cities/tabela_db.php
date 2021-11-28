<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <link rel="stylesheet" href="./style2.css">
    <meta charset="utf-8">
    <title>Miasta</title>
  </head>
  <body>
    <h3> Miasta </h3>

    <?php
    $polonczenie = new mysqli("localhost","root","","zsl_3pi2t_g2");
    $sql= "SELECT * FROM `cities`";
    $rezultat = $polonczenie->query($sql);

    echo <<< tablica
      <table>
        <tr>
          <th>Id miasta</th>
          <th>Miasto</th>
        </tr>
tablica;

    while($user=$rezultat->fetch_assoc()){

      echo <<< tablica2
      <tr>
        <td>$user[city_id]</td>
        <td>$user[city]</td>
        <td><a href="./usun.php?usun=$user[city_id]">Usuń</a></td>
      </tr>
tablica2;
    }
      echo "</table>"
    ?>

  </body>
</html>
