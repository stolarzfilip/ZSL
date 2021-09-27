<?php
    //print_r($_POST); 
    if(!empty($_POST["name"]) && !empty($_POST["figura"])){
        switch($_POST["figura"]){
            case "kwadrat": 
                echo "kwadrat";  
                header('location: ./squer.php');
                break; 
            case "prostokąt": 
                echo "prostokąt"; 
                header('location: ./prosto.php');
                break;
        }
    }
    else{
        ?>
            <script>
                history.back(); 
            </script> 
        <?php
    }
?>