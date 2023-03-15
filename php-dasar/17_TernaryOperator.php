<?php

// $gender = "WANITA";
// $hi = null;

// // without Ternary
// if ($gender == "PRIA"){
//    echo $hi . "Hi Bro";
// } else{
//     echo $hi . "Hi Nona".PHP_EOL;
// }

// with Ternary
$gender = "PRIA";
$hi = $gender == "PRIA" ? "Hi Bro" : "Hi Nona";

echo $hi . PHP_EOL;

