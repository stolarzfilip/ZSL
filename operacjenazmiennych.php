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

   // postinkrementacja $x++ 
   // preinkrementacja ++$x  
   // postdekrementacja $x--
   // predekrementacja --$x  

 $x=2; 
 echo "<hr>$x"; 
 echo $x++; 
 echo ++$x,"<br>";

$x=1; 
echo $x; // 1 
$x=$x++; 
echo $x; // 1
$x=++$x; 
echo $x; // 2
$y=++$x; 
echo $x; // 3
echo $y; // 3
$y=$x++; 
echo $x; // 4
echo "$y<br>"; // 3


?>