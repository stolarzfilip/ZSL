<?php  
$text = <<< E
    ZSL - Zespół Szkół Łączności 
E; 

echo"$text<br>"; 
echo nl2br($text),'<hr>';           

$name="janUSZ"; 
echo strtolower($name),"<br>";      // małe litery
echo strtoupper($name),"<br>";      // duże litery 

$data="januSZ kOWALSKI"; 
echo ucfirst($data),'<br>';         // pierwszy wyraz z zaczyna się z dużej litery
echo ucwords($data),'<br>';         // zmiana wszystkich pierwszych liter w wyrazie na dyże
 
$lorem="Lorem ipsum dolor sit, amet consectetur adipisicing elit.
Amet iste, distinctio impedit vero quas minima eveniet magnam
excepturi provident est animi aliquam qui sit deserunt reiciendis
dolorem quidem eos rerum!";  
echo "<hr>$lorem<hr>"; 
$col=wordwrap($lorem, 30, "<br>"); 
echo $col; 

// czyszczenie zawartości bufora 
ob_clean();

// usuwanie białycz znaków 
$name="Janusz"; 
$name1=" Janusz  ";
echo "Długość \$name: ".strlen($name),"<br>";   // 6
echo "Długość \$name: ".strlen($name1),"<br>";  // 9
echo "Długość \$name: ".strlen(ltrim($name1)),"<br>";   // usuwa slacje po lewej stronie w liczeniu
echo "Długość \$name: ".strlen(rtrim($name1)),"<br>";   // usuwa slacje po prawej stronie w liczeniu 
echo "Długość \$name: ".strlen(trim($name1)),"<br>";    // usuwa slacje po obu stronach w liczeniu

echo strstr("Janusz@gmail.com", "@"); 
echo strstr("Janusz@gmail.com", "G"); 
echo stristr("Janusz@gmail.com", "G"); 

$name="janusz"; 
echo "<br>" ;
echo substr($name, 2),'<br>'; 
echo substr($name, 2,3); 
echo substr($name, -2); 
echo substr($name, -2,1); 
?>