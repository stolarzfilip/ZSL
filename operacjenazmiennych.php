<?php  
    echo PHP_VERSION; 
    echo "<br>",2**10,"<br>";  

    $x=20; 
    $y=2; 
    echo $x<=>$y; 
    
    $x=1; 
    $y=1.0; 
    echo gettype($x),"<br>";
    echo gettype($y),"<br>"; 

    if ($x==$y){ 
        echo "równe"; 
    }
    else {
        echo "różne";
    } 

    if ($x===$y){ 
        echo "równe"; 
    }
    else {
        echo "różne";
    }


?>