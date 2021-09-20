<!DOCTYPE html>
<html lang="pl" dir="ltr">
    <head> 
    </head>

    <body> 
       <h3> Formularz </h3>
        <form>     
            <input type="text" name="name" placeholder="Podaj imię"><br><br>
            <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
            <input type="number" name="old" placeholder="Podaj wiek"><br><br> 
            <input type="text" name="from" placeholder="Podaj swoją narodowość"><br><br>  
            <input type="submit" value="Prześlij dane"><br><br> 
        </form>

        <?php 
         if(!empty($_GET['name']) && !empty($_GET['surname']) && !empty($_GET['old']) && !empty($_GET['from'])){
              $name=ucfirst(strtolower($_GET["name"])); 
              echo $name;
         } 
         else{echo "Wypełnij wszystkie pola!";} 
        ?>

    </body>

</html>