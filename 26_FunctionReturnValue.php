<?php

function sum (int $a, int $b) : int{
    $total = $a + $b;
    return $total;
}

$result = sum(90,10);
var_dump($result);

function rank(int $value) : string{
    if($value >= 80){
        return "A";
    }
    elseif($value >= 70)
    {
        return "B";
    }
    elseif($value >= 60)
    {
        return "C";
    }
    elseif($value >= 50)
    {
        return "D";
    } else{
        return "E";
    }

    echo "test return";
}

$final = rank(50);
var_dump($final);