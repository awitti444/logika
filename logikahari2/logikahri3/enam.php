<?php
// tampilkan lah data di bawah ini yang hanya memiliki diskon 
$barang = [
    [
        'nama'=> 'Ban',
        'diskon' => 10,
    ],
    [
        'nama'=> 'Oli Mesin',
    ],
    [
        'nama'=> 'Kampas rem'
    ],
    [
        'nama'=> 'Busi',
        'diskon'=> 9,
    ],
    [
        'nama'=>'Akumulator',
        'diskon'=> 7,
    ]
];

foreach ($barang as $item) {
    if (isset($item['diskon'])) {
        echo "Nama: " . $item['nama'] . ", Diskon: " . $item['diskon'] . "%\n";
    }
}

?>