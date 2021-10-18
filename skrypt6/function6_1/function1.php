<?php 
    function text(){
        echo "text";
    } 
    function name($name){
        echo $name;
    }
   function validateString($string, $lenght){ 
       return substr(ucfirst(strtolower(trim($string))), 0, $lenght);
    }
?>