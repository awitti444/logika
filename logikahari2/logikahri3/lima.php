<?php
// buatlah kelompok dari bilangan di bawah ini
// kelompok pertama berisikan bilangan yang terdapat kedua variabel
// Dan kelompok kedua bilangan yang hanya terdapat disalah satu variabel saja

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelpertama = array_intersect($bil1, $bil2); //mengkelompokkan dengan array_intersect
$kelkedua = array_merge(array_diff($bil1, $bil2), array_diff($bil2, $bil1)); // kelompok dengan satu variabel

echo "Kelompok Pertama: " . implode(', ', $kelpertama) . "\n";
echo "Kelompok Kedua: " . implode(', ', $kelkedua) . "\n";

// ket
// array_merge ini adalah fungsi PHP untuk menggabungkan 2 buah array menjadi satu. 
// array_diff() membandingkan nilai dari dua (atau lebih) array, dan mengembalikan perbedaannya.
// array_intersect () adalah fungsi yang digunakan untuk membandingkan dua (atau lebih) kunci array, dan mengembalikan persimpangan.
?>

