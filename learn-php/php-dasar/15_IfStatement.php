<?php

$nilai = 80;
$absen = 80;

// Penggunaan if statement
if ($nilai >= 70 && $absen >= 80) {
    echo "Selamat Anda Lulus" . PHP_EOL;
} else {
    echo "Maaf, Anda Tidak Lulus" . PHP_EOL;
}

// Penggunaan else if
if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda adalah A";
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda adalah B";
} else if ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda adalah C";
} else {
    echo "Nilai Anda adalah D";
}
