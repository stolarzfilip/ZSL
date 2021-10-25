<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane</title>
</head>
<body>
<?php 
    echo "<h3>Dane:</h3><hr>";
    if(!empty($_POST["name"]) && !empty($_POST["color"])){
        require_once "../function6_1/function1.php";
    
        echo "Imię bez poprawy: ".$_POST["name"].", długość: ".strlen($_POST["name"])."<br>";
        $color=$_POST["color"]; 
        echo "<div style=\"color: $color\">"; 
        echo "Imię bez poprawy: ".validateString($_POST["name"], 4, $_POST["color"]).", 
        długość: ".strlen(validateString($_POST["name"], 4, $_POST["color"])).", 
        narodowość: </div>".from($_POST["from"]); 
    }  
?> 
    
</body>
</html>
