<?php
function nama_bulan($bulan) {
	$nama_bulan = array (1 => 'Januari', 2 => 'Februari', 3 => 'Maret');
	$semester 	= $bulan < 7 ? 1 : 2;
	return array('bulan' => $nama_bulan[$bulan],'semester' => $semester);
}
$bulan = nama_bulan(3);
echo '<pre>'; print_r($bulan);

function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
  }
  
  echo "<p>Umur saya adalah ". hitungUmur(2008, 2024) ." tahun";
  
echo "<p><i><strong>By:ilham</strong>";