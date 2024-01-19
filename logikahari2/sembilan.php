<?php
function hitung_imt($berat_badan, $tinggi_badan) {
    $tinggi_badan_m = $tinggi_badan / 100;
    $imt = $berat_badan / ($tinggi_badan_m * $tinggi_badan_m);
    return $imt;
}

function tentukan_kategori_imt($imt) {
    if ($imt < 18.5) {
        return "berat badan kurang";
    } else if ($imt < 22.9) {
        return "normal";
    } else if ($imt < 24.9) {
        return "berat badan lebih";
    } else {
        return "obesitas";
    }
}

$berat_badan = 44;
$tinggi_badan = 148;
$imt = hitung_imt($berat_badan, $tinggi_badan);
$kategori_imt = tentukan_kategori_imt($imt);

echo "Berat badan: $berat_badan kg\n";
echo "Tinggi badan: $tinggi_badan cm\n";
echo "IMT: $imt\n";
echo "Kategori IMT: $kategori_imt\n";

?>