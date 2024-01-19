<?php
// $bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66]
// dari bilangan diatas kelompok lah menjadi dua kelompok pertama
// yaitu kelompok pertama untuk nilai kompeten  yg lebih dari dan sama dengan 75 dan
// kelompok dua belum kompeten yang kurang dari 75
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

$kompeten = [];
$belum_kompeten = [];

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $belum_kompeten[] = $nilai;
    }
}

echo "kelompok pertama (kompeten): " . implode(', ', $kompeten) . "\n";
echo "kelompok kedua (belum kompeten): " . implode(', ', $belum_kompeten) . "\n";
?>