<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>
<body>
    <h4>Użytkownicy</h4>

    <?php
        $connect = new mysqli("localhost","root","","zsl_3pi2t_g2");
        $sql = "SELECT * FROM `users`";
        $result = $connect->query($sql);

        if(isset($_GET["error"])){
          echo "$_GET[error] <br><br>";
        }


    echo <<< TABLE
        <table>
            <tr>
                <th>Id</th>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Data urodzenia</th>
                <th>Data utworzenia użytkownika</th>
            </tr>

TABLE;

    while ($user = $result->fetch_assoc()){
        echo <<<USER
        <tr>
            <td>$user[id]</td>
            <td>$user[name]</td>
            <td>$user[surname]</td>
            <td>$user[birthdate]</td>
            <td>$user[create_date]</td>
            <td><a href="./scripts/delste_user.php?delateUser=$user[id]">Usuń</a></td>
        </tr>
USER;
    }
    echo "</table>";
    if(isset($_GET["addUser"])){
      echo <<< FORMADDUSER
      <h4>Dodawanie użytkownika</h4>
      <form action="./scripts/add_user.php" method="post">
        <input type="text" name="name" placeholder="Imie"><br><br>
        <input type="text" name="surname" placeholder="Nazwisko"><br><br>
        <input type="date" name="birthdate"> Data urodzenia<br><br>
        <input type="submit" value="Dodaj użytkownika">
      </form>
FORMADDUSER;
    }
    else{
      echo '<br><a href="./4_db_select_delate.php?addUser=$user[id]">Dodaj użytkownika</a>';
    }

    ?>

</body>
</html>
