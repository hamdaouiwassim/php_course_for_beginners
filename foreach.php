<?php

// loops : foreach 

$person = array( "firstname" => "wassim" , "lastname" => "hamdaoui" , "job" => "developer" );

// $keys = array_keys( $person );

// // var_dump($keys);

// for( $case = 0 ; $case < 3 ; $case++ ){
//     $key = $keys[ $case ];
//     echo $person [$key];
//     echo "<br />";

// }

foreach($person as $key => $value){

    echo "key = " . $key . " : " .  $value;
    echo "<br />";
}


?>