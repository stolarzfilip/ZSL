<!DOCTYPE html>
<html lang="pl">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>

        <?php 
            if(!isset($_POST["person"]) && !isset($_POST["buttonAVG"])){
                echo <<< FORMCOUNTPERSON
                <h3>Ilość osób w rodzinie</h3> 
                <form method="post">
                <input type="number" name="person" placeholder="Podaj ilość osób"> <br><br> 
                <input type="submit" value="Zatwierdz">
                </form> 
FORMCOUNTPERSON;
            }
        ?>

        <?php
            if(!empty($_POST["person"])){
                echo "<h3>Ilość osób w rodzinie: $_POST[person]</h3>"; 
                echo <<< FORMEAGPERSON
                <form method="post">
FORMEAGPERSON;  
                for($i=1; $i <= $_POST["person"]; $i++){
                    echo "<input type=\"number\" name=\"eag$i\" placeholder=\"Podaj wiek osoby $i\"><br><br>";     
                }
                echo '<input type="submit" name="buttonAVG" value="Oblicz średni wiek">';
                echo <<< FORMEAGPERSON
                </form> 
FORMEAGPERSON; 
            } 

            if(!isset($_POST["buttonAVG"])){
                foreach ($_POST as $key => $value) {
                   echo "$key: $value<br>"; 
                   if($key != "buttonAVG")
                }
                echo "Średni wiek: $ageAVG";
            }
        ?>
<!--dodać zaokrąglenie do dwóch miejsc po przecinku (number_format) 
dodać hiperłącze wyświetlające początkowy formularz (header("location))-->
 </body>
</html>