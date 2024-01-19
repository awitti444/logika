<?php
// gunakan fungsi untuk menghitung suku pertama sampai 12 dari rumus a*4+n*3 dengan a = 9.

function hitungSuku($a, $n){
    return $a*4+$n*3;
}

$a = 9;

for($n = 1; $n <= 12; $n++){
    $hasil = hitungSuku($a, $n);
    echo "Suku ke-$n: $hasil\n";
}