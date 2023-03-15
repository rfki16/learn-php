<?php

$first = [
    "first_name" => "Achmad"
];

$last = [
    "first_name" => "Teuku",
    "last_name" => "Rifki"
];

// akan di ignore salah satu first name tergantung variable mana yang dipanggil duluan
$full = $last + $first;
var_dump($full);

// =================================
// Kode Operator Array ke Dua
// =================================

$first = [
    "first_name" => "Achmad",
    "last_name" => "Rifki"
];

$last = [
    "last_name" => "Rifki",
    "first_name" => "Teuku"
];

var_dump($first == $last);
var_dump($first === $last);
var_dump($first != $last);
