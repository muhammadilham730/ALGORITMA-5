<?php
$tanggalAwal = strtotime("1 January 2021");
$tanggalAkhir = strtotime("1 January 2022");
$selisihHari = ($tanggalAkhir - $tanggalAwal) / 60 / 60 / 24;
echo "Selisih hari: " . $selisihHari; // Menampilkan selisih hari antara dua tanggal

echo "<p><i><strong>By:ilham</strong>";

?>