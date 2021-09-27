<!DOCTYPE html>
<html lang="pl" dir="ltr">
    <head>  
        <title> Prostokąt </title>
    </head>

    <body> 
       <h3> Kwadrat </h3> 
       <form  method="post"> 
            <input type="text" name="sideA" placeholder="Podaj bok a"><br><br>    
            <input type="text" name="sideB" placeholder="Podaj bok b"><br><br>    
            <input type="submit" value="Oblicz"><br><br> 
        </form>
    </body> 

    <?php  
        if(!empty($_POST["sideA"]) && !empty($_POST["sideB"])){
            $sideA=$_POST["sideA"];
            $sideB=$_POST["sideB"];
            $area=$sideA*$sideB; 
            $circuit=2*$sideA+2*$sideB;
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