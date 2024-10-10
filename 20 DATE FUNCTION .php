<?php
echo date("Y-m-d H:i:s");  // output contoh: 2023-03-15 14:00:00
echo date("l, d-m-Y"); // output contoh: Rabu, 15-03-2023
date_default_timezone_set('Asia/Jakarta');
echo date("Y-m-d H:i:s"); // output akan sesuai dengan zona waktu Jakarta
echo date("Y-m-d", strtotime("+1 week")); // menambahkan satu minggu dari tanggal saat ini

echo "<p><i><strong>By:ilham</strong>";