<?php
// hitunglah jumlah tiap tiap orang
$students = [
    [
        'nama'=> 'Andi',
        'nilai'=> [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama'=> 'Dani',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama'=> 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

foreach ($students as $item) {
    $total_nilai = array_sum($item['nilai']);
    echo "{$item['nama']} memiliki total nilai: {$total_nilai}\n";
}

// array_sum untuk menjumlahkan
?>

