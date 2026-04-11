<?php

  $x = 10;
    

function test(){

global $x; //keyword to use global variable inside function
  
    echo "Variable X inside function : $x <br>";
}

test();
echo "Variable X outside function : $x" ;




?>