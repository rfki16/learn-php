<?php

// contoh 1 
function contoh1($nama)
{
    echo "Hello $nama" . PHP_EOL;
}
contoh1("Achmad");



// contoh 2 
function contoh2($nama, $job){
    echo "Hello : $nama \njob : $job" . PHP_EOL;
}
contoh2("rifki", "developer");



// contoh 3 (default) tips => use default for last parameter
function contoh3($nama = "Anonymouse"){
    echo "Nama kamu siapa $nama" . PHP_EOL;
}

function contoh33($first, $last=""){
    echo "Hello There $first $last" . PHP_EOL;
}
contoh3();
contoh3("contoh 3");
contoh33("Edo","Kurnia");
contoh33("Mahmud");



// contoh 4 (type function)
function contoh4(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total " .PHP_EOL;
}
contoh4(100,50);
contoh4("50","50");
contoh4(true,false);



// contoh 5 (variable-length argument)
function contoh5(...$values)
{
    $total = 0;
    foreach ($values as $value)
    {
        
        $total += $value;
    }

    echo "Total " . implode("+",$values) . "= $total" . PHP_EOL;
}
// jika ada array
$values = [1,2,21,12,4,12];
contoh5(1,4,21,41,2);
contoh5(...$values);