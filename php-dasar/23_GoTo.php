<?php

// use for jump but not recommended
// dont forget use ; in goto
goto a;
echo "Hello World" . PHP_EOL;

a: 
echo "hello A" . PHP_EOL;

// complex example
$count = 1;

while(true){
    echo "ini perulangan ke - $count" . PHP_EOL;
    
    // if $count more than 10
    if ($count >= 10){
        goto end;
    }

    $count++;
}

end : 
echo "End Looping";

$count = 1;

while (true){
    echp "ini perulangan ke - $count";
    if ($count >= 10){
        goto end;
    }
    $count++;
}

end : 
echo "endd";