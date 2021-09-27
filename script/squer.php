<!DOCTYPE html>
<html lang="pl" dir="ltr">
    <head>  
        <title> Kwadrat </title>
    </head>

    <body> 
       <h3> Kwadrat </h3> 
       <form  method="post"> 
            <input type="text" name="sideA" placeholder="Podaj bok a"><br><br>    
            <input type="submit" value="Oblicz"><br><br> 
        </form>
    </body> 

    <?php  
        if(!empty($_POST["sideA"])){
            $sideA=$_POST["sideA"];
            $area=pow($sideA, 2); 
            $circuit=4*$sideA;
            echo <<< E
            <hr>
            Pole kwadratu wynosi: $area cm<sup>2</sup><br>
            Obwód kwadratu wynosi: $circuit cm
E;
        }
        else{
            echo "Wypełnij wszystkie pola!";
        }
    ?>

</html>