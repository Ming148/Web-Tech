<?php 
   
    if (isset($_POST['inpvalue'])) { 
        $number = $_POST['inpvalue']; 
        $v = intval($number); 
        for ($i = 2; $i <= 12; $i++) { 
            echo "$v <br>"; 
        } 
    } 
    ?>