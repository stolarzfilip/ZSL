<?php
    echo "ZSL <br>";
    echo "ZSL <hr>";  

    $name="Janusz";
    echo 'Imię: $name <br>';
    echo "Imię: $name <br><hr>"; 

// konkatenacja

    echo "Janusz"." Kowalski <br><hr>"; 

// typy danych 
 // całkowity 
    $calkowita=10; 
    $bin=0b101; //5 
    $oct=011; //9 
    $hex=0x11; //17 
    echo $calkowita;
    echo $bin;
    echo $oct;
    echo $hex.'<br>'; 

 // zmiennoprzecinkowy 
    $x=10.3; 
    echo $x.'<br>'; 

 // logiczny 
    $prawda=true; 
    $falsz=false;
    echo $prawda.'<br>'; 
    echo $falsz.'<br>';  

//składnia heredoc 

echo <<< E
   <hr>Twoje imię: $name<br>
   Poznań<br>
   ZSŁ<hr>
E;

$text = <<< E
   <hr>Twoje imię: $name<br>
   Poznań<br>
   ZSŁ<hr>
E; 
echo $text;

// składnia nawdoc 
echo <<< 'E'
   <hr>Twoje imię: $name<br>
   Poznań<br>
   ZSŁ<hr>
E; 

    $surname="Nowak"; 
    echo "\$name $surname";
?> 
