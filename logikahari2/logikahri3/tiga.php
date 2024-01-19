<?php
// ubah pukul 19.00 menjadi pukul "07.00 pm" dan ubah pukul 23.45
// menjadi pukul 11.45 pm, pukul 08.55 menjadi pukul "08.55 am" dengan sebuah fungsi 
// yang di buat sendiri, bukan fungsi data() yang sudah ada di php. Hint: substr() atau explode

function ubahFormatWaktu($waktu) {
    list($jam, $menit) = explode(':', $waktu); //pisah jam menit dgn explode
    if ($jam >= 12) { // konferensi jam ke 12 jam
        $ampm = 'pm';
        $jam = ($jam > 12) ? ($jam - 12) : $jam;
    } else {
        $ampm = 'am';
    }
    $jam = str_pad($jam, 2, '0', STR_PAD_LEFT);     // Format waktu dengan menambahkan 0 di depan jika jam atau menit kurang dari 10
    $menit = str_pad($menit, 2, '0', STR_PAD_LEFT);
    $hasil = "$jam:$menit $ampm";
    return $hasil;
}

// Contoh penggunaan
$waktu1 = '19:00';
$waktu2 = '23:45';
$waktu3 = '08:55';

$hasil1 = ubahFormatWaktu($waktu1);
$hasil2 = ubahFormatWaktu($waktu2);
$hasil3 = ubahFormatWaktu($waktu3);

echo "Waktu asli: $waktu1, waktu di ubah: $hasil1\n"; 
echo "Waktu asli: $waktu2, waktu di ubah: $hasil2\n";
echo "Waktu asli: $waktu3, waktu di ubah: $hasil3\n";

?>
