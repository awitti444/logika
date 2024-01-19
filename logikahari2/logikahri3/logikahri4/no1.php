<?php
// gunakan fungsi untuk menghitung angka 1000, apakah bisa di bagi dengan angka 3, 5, 7, dan 10. Kemudian
// print "Angka 1000 bisa dibagi dengan angka 5 saja" atau "Angka 1000 bisa di bagi dengan angka 5 dan 10"
// sesuaikan dengan hasilnya. (gunakan 2 fungsi, untuk menghitung pembagian, cetak hasil, pastikan hasil dari pembagian di buat
// array, misal [3,7] yaitu angka yang bisa di bagi dengan 1000)

function hitungPembagian($angka)
{
    $hasilPembagian = [];

    if ($angka % 3 == 0) {
        $hasilPembagian[] = 3;
    }

    if ($angka % 5 == 0) {
        $hasilPembagian[] = 5;
    }

    if ($angka % 7 == 0) {
        $hasilPembagian[] = 7;
    }

    if ($angka % 10 == 0) {
        $hasilPembagian[] = 10;
    }

    return $hasilPembagian;
}

function cetakHasil($hasilPembagian)
{
    if (empty($hasilPembagian)) {
        echo "Angka tidak bisa dibagi oleh 3, 5, 7, atau 10.";
    } else {
        $hasilString = "Angka 1000 bisa dibagi dengan angka ";
        $count = count($hasilPembagian);

        for ($i = 0; $i < $count; $i++) {
            $hasilString .= $hasilPembagian[$i];

            if ($i < $count - 1) {
                $hasilString .= ', ';
            }
        }

        if ($count == 1) {
            $hasilString .= ' saja';
        } else {
            $hasilString .= '';
        }

        echo $hasilString;
    }
}

$angka = 1000;
$hasilPembagian = hitungPembagian($angka);
cetakHasil($hasilPembagian);

?>


