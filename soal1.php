<?php

// Usia Andi
$usia_andi = 16;
// Tahun kelahiran Andi
$tahun_lahir_andi = 2024 - $usia_andi;

// Usia Beni (3 tahun lebih tua dari Dani)
$usia_beni = $usia_andi + 3;
// Tahun kelahiran Beni
$tahun_lahir_beni = 2024 - $usia_beni;

// Tahun kelahiran Dani (sama dengan Andi)
$tahun_lahir_dani = $tahun_lahir_andi;

// Usia Eko (1 lustrum sebelum usia Beni)
$usia_eko = $usia_beni - 5;
// Tahun kelahiran Eko
$tahun_lahir_eko = 2024 - $usia_eko;

// mengecek apakah tahun tertentu adalah tahun kabisat
function Kabisat($tahun) {
    return ($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0);
}

echo "Tahun kelahiran Andi: $tahun_lahir_andi \n";
echo "Tahun kelahiran Beni: $tahun_lahir_beni \n";
echo "Tahun kelahiran Dani: $tahun_lahir_dani \n";
echo "Tahun kelahiran Eko: $tahun_lahir_eko \n";

// Menentukan siapa yang lahir di bulan kabisat
if (Kabisat($tahun_lahir_andi) && !Kabisat($tahun_lahir_eko)) {
    echo "Jadi, antara Andi dan Eko, yang lahir di bulan kabisat adalah Andi.\n";
} elseif (!Kabisat($tahun_lahir_andi) && Kabisat($tahun_lahir_eko)) {
    echo "Jadi, antara Andi dan Eko, yang lahir di bulan kabisat adalah Eko.\n";
} else {
    echo "Jadi, baik Andi maupun Eko, keduanya lahir di bulan kabisat atau bukan.\n";
}

?>