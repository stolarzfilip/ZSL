<?php 
    function text(){
        echo "text";
    } 
    function name($name){
        echo $name;
    }
   function validateString($string, $lenght, $color){ 
       return substr(ucfirst(strtolower(trim($string))), 0, $lenght);
    } 
    function from($from){
       return ucfirst(strtolower($from));
    }
?>