<?php
function cekUmur($umur) {
    if ($umur < 18) {
        return "Maaf, kamu belum cukup umur.";
    }
    return "Selamat, kamu boleh masuk.";
}

echo cekUmur(16); // Output: Maaf, kamu belum cukup umur.

echo "<p><i><strong>By:ilham</strong>";