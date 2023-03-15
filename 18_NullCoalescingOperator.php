<?php

// $data = [];

// // without Null Coalescing
// if (isset($data ["action"])){
//     $action = $data["action"];
// } else {
//     $action = "Nothing";
// }

// echo $action . PHP_EOL;

// with Null Coalescing
$data = ["action" => "create"];
$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;

