<?php

function sayHello()
{
    echo "Hello yang disana" . PHP_EOL;
}

sayHello();
sayHello();
sayHello();
sayHello();

// function undifined
$a = false;

if ($a){
    function sayWhat(){
        echo "Kamu iyah" . PHP_EOL;
    }
}

sayWhat();