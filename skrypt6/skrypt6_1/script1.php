<?php
    if(!empty($_POST["name"])){
        require_once "../function6_1/function1.php";
        echo text(); 
        echo "<br>";
        echo name("Krystyna");
        echo "<br>";
        echo $_POST["name"];
        echo "<br>"; 
        echo validateString($_POST["name"], 10);
    } 
    
?>