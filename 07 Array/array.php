<?php

$colors = array("red", "yellow", "green", "blue");

// $colors = ["red", "yellow", "green", "blue"]; //another way to write array

/*echo $colors[0]. "<br>";
echo $colors[1]. "<br>";
echo $colors[2]. "<br>";
echo $colors[3];*/

// another method used to print array

/*echo "<pre>";  // we use this tag to organize the array
print_r($colors);
echo "</pre>";*/

echo "<ul>";
for($i = 0; $i < 4; $i++){
    echo "<li> $colors[$i] </li>";
}
echo "</ul>";






?>