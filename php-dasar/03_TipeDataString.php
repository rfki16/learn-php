<?php

// \n untuk ENTER, \t untuk TAB ini namanya escape sequence

// Single Quote > tidak bisa menggunakna \n \t
echo 'Name : ';
echo 'Achmad Rifki';
echo "\n";

// Double Quote
echo "Name : ";
echo "Achmad\t Rifki\n";

// Heredoc
echo <<<TEXT
Ini adalah contoh Heredoc
bisa enter tanpa harus ketik slice n 

TEXT;

// Nowdoc > tidak memiliki kemampuan PARSING
echo <<<'TEXT'
Ini adalah contoh Nowdoc
bisa enter tanpa harus ketik slice n
TEXT;
