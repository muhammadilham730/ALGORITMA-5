<?php
// mmbuat fungsi
function perkenalan($nama, $salam){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan Teman-teman semua<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("ilham", "Hi");

  echo "<hr>";

  $saya = "ilham";
  $ucapanSalam = "Selamat pagi";
  // memanggilnya lagi
  perkenalan($saya, $ucapanSalam);

  echo "<p><i><strong>By:ilham</strong>";

?>