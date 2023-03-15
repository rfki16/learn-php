<?php

$name = "Achmad";
$age = null;

echo "Nama : ";
echo $name;
echo "\n";

echo "Umur : ";
echo $age;
echo "\n";

$contoh = "Ridwan";
$umur = null;

echo is_null($umur); // mengecheck apakah variable tersebut null
echo "\n";
var_dump(is_null($umur)); // untuk melihat apakah variable tersebut null dengan true/false
echo "\n";

$makan = null;
unset($makan); //untuk menghapus variabel (tidak direkomendasikan)
echo "\n";

echo $makan;
var_dump(isset($makan)); // untuk mengecheck apakah sebuah variable ada dan nilainya tidak null
