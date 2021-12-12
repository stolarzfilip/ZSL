<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      $connect = new mysqli("localhost", "root", "", "zsl_3pi2t_g2");

      $sql = "SELECT * FROM `users` INNER JOIN `cities` ON users.cityid=cities.city_id";
      $result = $connect->query($sql);
      if (isset($_GET['error'])) {
        echo $_GET['error'].'<br><br>';
      }
      echo <<<TABLE
        <table>
          <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
            <th>Miasto</th>
            <th>Data utworzenia użytkownika</th>
          </tr>
TABLE;

      while ($user = $result->fetch_assoc()) {
        echo <<< USER
          <tr>
            <td>$user[id]</td>
            <td>$user[name]</td>
            <td>$user[surname]</td>
            <td>$user[birthdate]</td>
            <td>$user[city]</td>
            <td>$user[create_date]</td>
            <td><a href="./scripts/delste_user.php?delateUser=$user[id]">Usuń</a></td>
            <td><a href="./5_db_select_delete.php?updateUser=$user[id]">Aktualizuj</a></td>
          </tr>
USER;
      }
      echo "</table>";

      if (isset($_GET['addUser'])) {
        echo <<< FORMADDUSER
          <h4>Doawanie użytkownika</h4>
          <form action="./scripts/add_user.php" method="post">
            <input type="text" name="name" placeholder="Podaj imię"><br><br>
            <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
            <input type="date" name="birthday"> Data urodzenia<br><br>
            <select name="cityid">
FORMADDUSER;
$sql = "SELECT * FROM `cities`";
$result = $connect->query($sql);
while ($city = $result->fetch_assoc()) {
  echo "<option value=\"$city[city_id]\">$city[city]</option>";
}
        echo <<< FORMADDUSER
            </select><br><br>
            <input type="submit" value="Dodaj użytkownika">
          </form>
FORMADDUSER;
      }else{
        echo '<br><a href="./5_db_select_delete.php?addUser=">Dodaj użytkownika</a>';
      }

      if (isset($_GET['updateUser'])) {
        $sql="SELECT * FROM `users` WHERE `id` = $_GET[updateUser]";
        $result = $connect->query($sql);
        $user = $result->fetch_assoc();
        echo <<< FORMUPDATEUSER
          <h4>Aktualizacja użytkownika</h4>
          <form action="./scripts/update_user.php" method="post">
            <input type="hidden" name="id" value="$_GET[updateUser]">
            <input type="text" name="name" value="$user[name]"><br><br>
            <input type="text" name="surname" value="$user[surname]"><br><br>
            <input type="date" name="birthday" value="$user[birthday]"> Data urodzenia<br><br>
            <select name="cityid">
FORMUPDATEUSER;
$sql = "SELECT * FROM `cities`";
$result = $connect->query($sql);
while ($city = $result->fetch_assoc()) {
  if ($city['city_id'] == $user['cityid']) {
    echo "<option value=\"$city[city_id]\" selected>$city[city]</option>";
  }else{
    echo "<option value=\"$city[city_id]\">$city[city]</option>";
  }
}
        echo <<< FORMUPDATEUSER
            </select><br><br>
            <input type="submit" value="Dodaj użytkownika">
          </form>
FORMUPDATEUSER;
      }
     ?>

  </body>
</html>
