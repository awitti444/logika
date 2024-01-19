<?php

// diberikan dua kondisi saat pukul 07.00 sampai 11.
// 30 merupakan "waktu kerja" dan saat pukul 11.30 sampai 12. 
// 15 merupakan "waktu istirahat" dan saat pukul 12.15 sampai 16.00
// merupakan "waktu kerja" sementara saat pukul 16.00 sampai 07.00 merupakan "bukan waktu kerja".
// apabila sekarang pukul 16.00 maka sekarang merupakan waktu?
// (syarat: variabel, jam, dan menit dipisahkan, diketahui variabel jam = 16 dan menit = 0, diketahui jam = 15 dan menit = 40 (hasilnya waktu.kerja))

$jam = 11;
$menit = 40;

if (($jam >= 7 && $jam < 11) || ($jam == 11 && $menit <= 30)){
    $waktu = "waktu kerja";
} elseif (($jam >= 11 && $jam <= 12) || ($jam == 12 && $menit <= 15)){
    $waktu = "waktu istirahat";
} elseif (($jam >= 12 && $jam <= 16) || ($jam == 16 && $menit < 15)){
    $waktu = "waktu kerja";
} else {
    $waktu = "bukan waktu kerja";
}

echo "Jadi sekarang merupakan $waktu"

?>