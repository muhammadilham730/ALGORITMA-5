<?php
function tambahSatu(&$nilai) {
    $nilai++;
}

$angka = 10;
tambahSatu($angka);
echo $angka; // Output: 11

echo "<p><i><strong>By:ilham</strong>";