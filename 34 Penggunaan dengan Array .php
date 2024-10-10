<?php
$array = array("nama" => "John", "umur" => 25);

if (isset($array["nama"])) {
    echo "Kunci 'nama' ada di array.";
} else {
    echo "Kunci 'nama' tidak ada di array.";
}

if (isset($array["alamat"])) {
    echo "Kunci 'alamat' ada di array.";
} else {
    echo "Kunci 'alamat' tidak ada di array.";
}

echo "<p><i><strong>By:ilham</strong>";

?>