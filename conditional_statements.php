<?php
// conditional statements

// if

// opr comp ( == , === , > , < , >= , <= , <> , != , !==  )

$a = 7;

if ( $a < 10 ) {

    echo "a inferieur a 10";
    
}

// if ( $a < 10 ) echo "a inferieur a 10"; // if shorthand

// if else statement



$word = "hello";

// if ( $word === "hello" ){
//     echo "English detected";
// }else {
//     echo "Another language detected";
// }

// if else shorthand 
$message = $word === "hello" ? "English detected" : "Another language detected";
echo $message;

// if elseif else statement

$b = 17;

if ( $b < 10 ) {

    echo "b inferieur a 10";
}elseif ( $b > 10  ){
    echo "b superieur a 10";
}else{
    echo "b egal a 10";
}

// Nested if

if ( $b < 10 ){
    if ( $b < 5 ){
        echo "b too small";
    }
}





?>