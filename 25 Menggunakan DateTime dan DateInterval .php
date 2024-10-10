<?php
$date = new DateTime();
$date->add(new DateInterval('P10D')); // menambahkan 10 hari
echo $date->format('Y-m-d');

echo "<p><i><strong>By:ilham</strong>";

?>