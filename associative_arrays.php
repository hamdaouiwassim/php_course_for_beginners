<?php

// associative arrays

$person = array( "firstname" => "wassim" , "lastname" => "hamdaoui" , "job" => "developer" );

echo $person["job"];

echo count($person);

echo "<br />";

var_dump( $person );

//echo $person["age"];


$personKeys =   array_keys( $person ); // keys of person array ( firstname , lastname , job )

var_dump($personKeys);










?>