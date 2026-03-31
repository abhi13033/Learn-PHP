<?php

// && Operator

$age = 20; 

if($age >= 18  && $age <= 21){
    echo "You are eligible <br>";
}

// OR || Operator

$age = 25; 

if($age >= 18  || $age <= 21){
    echo "You are eligible";

   
}



// NOT ! Operator

$age = 25; 

if(!($age <= 18)){
    echo "You are eligible";

   
}



// XOR Operator


$age = 20; 

if($age >= 18  xor $age <= 19){
    echo "You are eligible";

   
}


?>