<?php
// mmbuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan Teman-teman semua<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("ilham", "Hi");

echo "<hr>";

$kita = "ilham";
$ucapanSalam = "Selamat pagi";
// memanggilnya lagi tanpa mengisi parameter salam
perkenalan($kita);

echo "<p><i><strong>By:Muhammad ilham</strong>";

?>