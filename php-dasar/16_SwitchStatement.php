<?php

$nilai = "E";

switch($nilai){
    case "A" :
        echo "Anda Lulus dengan sangat baik";
        break;

    case "B" :
    case "C" :
        echo "Anda Lulus";
        break;

    case "D" :
        echo "Maaf Anda Gagal";
        break;
    
    default :
        echo "Mungkin Anda salah jurusan :p";
}

// Contoh IF Statement
// if ($nilai == "A"){
//     echo "Anda Lulus dengan sangat baik";
// } else if($nilai == "B" || $nilai == "C"){
//     echo "Anda Lulus";
// } else if ($nilai == "D"){
//     echo "Maaf Anda Gagal";
// } else{
//     echo "Mungkin Anda salah jurusan";
// }