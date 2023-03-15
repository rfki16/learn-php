<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);
echo "\n";

$str = ["Achmad", "Rifki", "RPL"];
var_dump($str);

// Memanggil salah satu index
var_dump($str[0]);

// Mengubah salah satu index
$str[1] = "Teuku";
var_dump($str);

// Menghapus salah satu index
unset($str[1]);
var_dump($str);

// Menambahkan kebelakang
$str[] = "Oke";
var_dump($str);

// Menghitung jumlah array
var_dump(count($str));

// =============================

// Maping Array
$budi = [
    "id"    => "budi",
    "nama"  => "Utomo",
    "age"   => "20"
];
var_dump($budi);

// Array dalam Array
$rifki = [
    "nama"  => "achmad",
    "umur"  => "21",
    "address"   => [
        "city"  => "jakarta",
        "rt" => "02"
    ]
];

var_dump($rifki);

// Memanggil array dalam array
var_dump($rifki["address"]["city"]);

// Menghapus array dalam array
unset($rifki["address"]["rt"]);
var_dump($rifki);
