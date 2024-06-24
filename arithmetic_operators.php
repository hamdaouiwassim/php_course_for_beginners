<?php

// Arithmetic operators ( + , - , + , - , * , / , % , ** )

$a = "f150.7";
$c = 90;
$b = 120;

echo gettype( $a );

echo "<br />";

echo gettype( $b );
echo "<br />";
echo gettype( +$b );

echo -$b;

echo $c + $b ;

echo $b - $c;

echo $b * $c;

echo $b / $c; // 120 / 90

echo $b % $c; 

echo 2 ** 3;


?>