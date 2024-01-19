<?php

// terdapat satu variabel yang memiliki value -5.
// Tentukanlah apakah variable tersebut masuk ke dlm
// kolom bilangan bulat positif, bilangan bulat negatif atau bilangan cacah.
// Dan apakah variabel tersebut merupakan variabel kelipatan 3.

$angka = -5;

if ($angka > 0) {
    echo "variabel termasuk dlm bilangan positif.";
} elseif ($angka < 0) {
    echo "variabel termasuk dlm bilangan negatif.";
} else {
    echo "variabel vftermasuk dlm bilangan cacah.";
}

// menentukan variabel apakah memiliki kelipatan dri 3.
if ($angka % 3 == 0) {
    echo "Variabel merupakan kelipatan dari 3.";
} else {
    echo "Variabel bukan kelipatan dari 3.";
}
?>


