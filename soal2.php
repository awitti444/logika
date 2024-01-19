<?php

$jumlah_peserta = 121 ;
$nama_peserta = "Eko";
$mata_lomba_eko = "Web App";
$tingkat_pendidikan_eko = "SMK";

// 2 digit terakhir tahun pelaksanaan (asumsi tahun ini adalah 2024)
$tahun_pelaksanaan = date('y');

// kode mata lomba dan tingkat pendidikan
$kode_mata_lomba = "";
$kode_pendidikan = "";

if ($mata_lomba_eko == "Web App") {
    $kode_mata_lomba = "01W";
} elseif ($mata_lomba_eko == "Android") {
    $kode_mata_lomba = "02A";
} elseif ($mata_lomba_eko == "Game") {
    $kode_mata_lomba = "03G";
}

if ($tingkat_pendidikan_eko == "SMP") {
    $kode_pendidikan = "P";
} elseif ($tingkat_pendidikan_eko == "SMA" || $tingkat_pendidikan_eko == "SMK" || $tingkat_pendidikan_eko == "MA") {
    $kode_pendidikan = "A";
}

$nomor_peserta_eko = $jumlah_peserta +1 . $kode_mata_lomba . $kode_pendidikan . $tahun_pelaksanaan;

echo "Nomor peserta $nama_peserta: $nomor_peserta_eko\n";

?>