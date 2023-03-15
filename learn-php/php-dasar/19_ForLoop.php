<?php

// bagian isi for loop
// for (init statement; kondisi; post statement){};

// // #INCREMENT
// for ($count=1; $count <=10; $count++){
//     echo "Ini perulangan for loop ke : $count" . PHP_EOL;
// }

// // #DECREMENT 
// for ($count=10; $count >=1; $count--){
//     echo "Ini perulangan for loop ke : $count" . PHP_EOL;
// }


// # SOAL ALGORITMA

// 1. Menampilkan Bilangan Ganjil dan Genap
for ($i = 1; $i <=10; $i++){
    if($i % 2 == 0){
        echo "$i-ini adalah bilangan genap" . PHP_EOL;
    }else{
        echo "$i-ini adalah bilangan ganjil" . PHP_EOL;
    }
}

// 2. Menampilkan Bilangan Prima
for ($i=1; $i<=20; $i++){
    $a = 0;
    for ($j=1; $j<=$i; $j++){
        if ($i % $j == 0){
            $a++;
        }
    }
    if($a == 2){
        echo $i.",";
    }
}

// 3. Membuat Abjad Huruf
$abjad = range("A","Z");
$count = count($abjad);

for ($i=0; $i < $count; $i++){
    echo $abjad[$i];
}
