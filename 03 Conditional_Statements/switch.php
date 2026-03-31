<?php

$age = 17; 

switch($age){
    case ($age >= 15 && $age <= 20):
        echo "You are eligible";
        break;

    case ($age >= 21 && $age <= 30):
        echo "You are not eligible";
        break;    
    

    default:
        echo "Enter the valid age";
        
        
    
}





?>