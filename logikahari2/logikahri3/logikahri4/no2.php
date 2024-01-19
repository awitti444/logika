<?php
// gunakan fungsi untuk menghitung waktu istirahat dan waktu kerja pegawai selama jam kerja 8 jam perhari, dengan 20 menit jam istirahat,
//  shalat dari 30 menit jam istirahat makan

$jamKerjaPerHari = 8;
$waktuIstirahat = 20;
$waktuShalat = 30;

function WaktuKerja($jamKerja, $istirahat, $shalat) {
    $totalWaktuKerja = $jamKerja * 60;  
    $totalWaktuIstirahat = $istirahat + $shalat;    

    $waktuKerjaSebenarnya = $totalWaktuKerja - $totalWaktuIstirahat;

    return array(
        'waktuKerja' => $waktuKerjaSebenarnya,
        'totalWaktuIstirahat' => $totalWaktuIstirahat
    );
}

$hasil = WaktuKerja($jamKerjaPerHari, $waktuIstirahat, $waktuShalat);

echo "Waktu kerja : {$hasil['waktuKerja']} menit\n";
echo "Total waktu istirahat: {$hasil['totalWaktuIstirahat']} menit\n";

?>