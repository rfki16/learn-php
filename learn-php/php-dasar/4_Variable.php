<?php

// Variable di PHP memudahkan user untuk mengganti variable
$name = "Achmad";
$age = 21;

echo "Nama : ";
echo $name;
echo "\n";

echo "Umur : ";
echo $age;
echo "\n";

// Variable Variables, string value variables
$name = "achmad";
$$name = "rifki";

echo "Contoh = ";
echo $name;
echo "\n";

echo "achmad : ";
echo $achmad; // harus sama dengan isi variable $name
