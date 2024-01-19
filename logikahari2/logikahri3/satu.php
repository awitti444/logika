<?php
// hitung panjang sisi persegi dengan luas 25 cm

for ($a = 1; $a <= 25; $a++) {
    if ($a * $a == 25) { // mencari yang hasilnya jadi 25, karena rumus panjang sisinya adalah sisi kali sisi
        echo "Jadi panjang sisi persegi adalah: " . $a . " cm";
        break;
    }
}
?>
