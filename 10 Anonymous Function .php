<?php
$kendaraan 	= array('Mobil', 'Motor', 'Sepeda');
$upper 		= array_map('toupper', $kendaraan);
function toupper($array_val) {
	return strtoupper($array_val);
}
echo '<pre>'; print_r($upper);


function nama_bulan($bulan, $callback) {
	$list_bulan = array (1 => 'Januari', 2 => 'Februari', 3 => 'Maret');
	$nama = $list_bulan[$bulan];
	
	if (is_callable($callback)) {
		return $callback($nama);
	}
	return $nama;
}
echo "<hr>";
$bulan = nama_bulan(2, function($val) {
		return strtoupper($val);
	});
echo $bulan; // Hasil: FEBRUARI


echo "<p><i><strong>By:ilham</strong>";