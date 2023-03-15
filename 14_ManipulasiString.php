<?php


// Manipulasi String dengan penambahan variable
$nama = "Achmad Rifki";
echo "Nama : " . $nama . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;


// Mengubah tipe data 
$valueString = (string) 100;
$valueInt = (int) "100";
$valueFloat = (float) "9.5";

var_dump($valueString);
var_dump($valueInt);
var_dump($valueFloat);

// mengidentifikasi string
$evo = "Evo";

echo $evo[0] . PHP_EOL;
echo $evo[1] . PHP_EOL;
echo $evo[2] . PHP_EOL;

// Curly case menambahkan variabel tanpa spasi
echo "Halo kami dari $evo s" . PHP_EOL;
echo "Halo kami dari {$evo}s" . PHP_EOL;
