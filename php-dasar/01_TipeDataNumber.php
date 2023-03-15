<?php

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);
//selalu dimulai dengan angka 0

echo "HexaDecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b11111111);
//selalu dimulai dengan angka 0b

echo "Undescore di Number : ";
var_dump(1_500_484);
//underscore _ digunakan untuk menandai agar mudah dibaca

// ============== FLOAT ==============

echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E notation plus (1.2 x 1000) ";
var_dump(1.2e3);

echo "Floating Point dengan E notation minus (7 x 0.001) ";
var_dump(7e-3);

echo "Underscore di Floating Point";
var_dump(1_234.123);

// ============== Overflow ==============
// akan berubah menjadi e+18 jika melebihi kapasitas
echo "Integer Overflow ";
var_dump(9223372036854775808);