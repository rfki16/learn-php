<?php

$names = ["Achmad", "Rifki", "Developer"];

// without foreach
//  np : add count and $names[$i]
for ($i = 0; $i < count($names); $i++){
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

// use foreach
foreach ($names as $name){
    echo "Data $name" . PHP_EOL;
}

// use key array in foreach
$data = [
    "first_name" => "Achmad",
    "last_name" => "Rifki",
    "job" => "Developer"
];

foreach ($data as $key => $value){
    echo "$key = $value" . PHP_EOL;
}
