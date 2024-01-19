<?php
 
    $andi = 25;
    $mtk= 83;
    $inggris= 87;
    $indo= 86;

    $RataRata = ($mtk + $inggris + $indo)/3;

    if ($andi >= 16 && $andi <= 25 && $mtk >= 87 && $inggris >= 85 && $indo >= 87 && $RataRata >= 85){
        echo "diterima";
    } else{
        echo "ditolak";
    }

?>