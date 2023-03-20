<?php

$firstName = "Achmad";
$lastName = "Rifki";

// anonym function
$anonymousFunction = function () use ($firstName, $lastName) {
    return "Hello $firstName $lastName" . PHP_EOL;
};

// arrow function
$arrowFunction = fn () => "Hi $firstName $lastName" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();
