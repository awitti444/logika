<?php
// buatlah urutan perkalian 1 x 1 = 1 sampai dengan 3 x 10 = 30

for($a=1;$a<=3;$a++)
    {
        for($b=1;$b <=10;$b++)
        {
        $hitung=$a*$b;
        echo "$a x $b = $hitung\n";
        }
    }
?>