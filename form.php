<!DOCTYPE html>
<html lang="pl" dir="ltr">
   <head> 
   </head>

   <body> 
       <h3> Dane użytkownika </h3>
         <form> 
             <input type="text" name="name" placeholder="Podaj imię"><br><br> 
             <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>  
             <input type="color" name="color" placeholder="Podaj swój ulubiony kolor"><br><br> 
             <input type="submit" value="Zatwierdz dane"><br><br>
         </form> 

         <?php  
            if(!empty($_GET["name"]) && !empty($_GET["surname"]) && !empty($_GET["color"])){       //isset sprawdza czy istnieje, !empty - gdy pole jest puste pokazuje else
                echo <<< E
                    Imię i nazwisko: $_GET[name] $_GET[surname] <br>
                    Kolor: $_GET[color]                     
E;                                                                       //get szybszy ale mniej bezpieczny
            }                                                            //w echo <<< musi być $_GET bez "" lub w {}
            else{
                echo "Wypełnij wszystkie pola!";
            }
         ?>

    </body>

</html>