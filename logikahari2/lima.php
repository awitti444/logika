<?php

$b = 154000;
$diskon = 0.07;

if ($b > 100000) {
    $b = $b - ($b*$diskon);
    echo "jadi hasilnya = $b";
}

