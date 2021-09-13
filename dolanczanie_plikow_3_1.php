<!DOCTYPE html> 
<html lang="pl" dir="ltr">

    <head>
        <title>Dołączanie plików</title>
    </head>
    
    <body>
        <h3>Początek strony</h3>  
            <?php 
                include './3_1.php';        // wyświetla raz
                include_once './3_1.php';   // wyświetla tylko jeden raz 
                include './3_1324.php';     // przy błędnej nazwie wyświetla błąd ale nadal działa i wyświetla koniec strony 
                 
                echo "<br>";
                require './3_1.php';        // dołącza jak include
                require './3_123.php';      // przy błędzie nie kończy kodu
            ?>
        <h3>Koniec strony</h3>
    </body>   

</html>   

