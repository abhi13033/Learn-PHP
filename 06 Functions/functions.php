<?php

/*
function hello(){
    echo "Hello Everybody <br>";
}



function abhi(){
    echo "Hello Sir <br>";
}


hello();
hello();
echo "Hey this is an example";
hello();
hello();
hello();

abhi();
abhi();
abhi();
abhi();
abhi();
*/


/*function hello($fname, $lname){
    echo "Hello $fname $lname.<br>";
}

function sum($a,$b){
    echo $a + $b;
}

// hello("Abhinav", "Srivastava");

// hello("Bill", "Gates");

/*$one = 10;
$two = 20.55;

sum($one, $two);*/




/*
function hello($fname = "First", $lname = "Last" ){

$v = "$fname $lname";

return $v;

}

$name = hello("Abhinav", "Srivastava");

echo "Hello $name";
*/


/*

function sum($math, $eng, $sc){
    $s = $math + $eng + $sc;

    return $s;
}

function percentage($st){
    $per = $st / 3;
    echo $per . "%";

}

$total = sum(55,88,99);

percentage($total);


*/


/*

function testing(&$string){
 $string .= " and something extra.";
}

$str = "This is a string";
testing($str);
echo $str;

*/


function first($num){
    $num += 5;
}

function second(&$num){
    $num += 7;
}



$number = 10;
first($number);
echo "Original value is $number <br>";

second($number);
echo "Original value is $number <br>";




?>