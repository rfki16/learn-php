<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name); // harus panggil filter sebagai variabel pertama
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Rifki", "strtoupper");
sayHello("Rifki", "strtolower");
sayHello("Rifki", function (string $name): string {
    return strtoupper($name); // gunakan ($name) untuk memanggil variabel
});
sayHello("Rifki", fn ($name) => strtolower($name)); // gunakan ($name) untuk memanggil variabel
