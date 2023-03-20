<?php

// AF 1
$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};
$sayHello("Rifki");

// AF 2
function GoodBye(string $name, $filter)
{
    $filterName = $filter($name);
    echo "Good Bye $filterName" . PHP_EOL;
}
GoodBye("Rifki", function ($name): string {
    return strtoupper($name);
});

// AF 3
$anonym = function (string $name): string {
    return strtolower($name);
};
GoodBye("Andi", $anonym);

// AF 4 - Menggunakan Variabel diluar function
$firstName = "Achmad";
$lastName = "Rifki";

$sayHelloRifki = function () use ($firstName, $lastName) { // gunakan kata use untuk akses variabel yang ada di luar
    echo "Hello $firstName $lastName";
};

$sayHelloRifki();
