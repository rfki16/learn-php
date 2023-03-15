<?php

// BREAK
$counter = 1;

while (true){
    echo "ini adalah counter ke-$counter" . PHP_EOL;

    if ($counter >= 10){
        break;
    }

    $counter++;
}

for ($count = 1; $count <=10; $count++ ){
    if ($count % 2 == 1){
        continue;
    }
    echo "ini adalah contoh continu-$count". PHP_EOL;
}