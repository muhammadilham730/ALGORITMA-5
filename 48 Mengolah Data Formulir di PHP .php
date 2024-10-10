<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Mengambil data dari field formulir
  $name = $_POST['name'];
  $email = $_POST['email'];

  // Menampilkan data yang dikirimkan
  echo "Nama: " . $name . "<br>";
  echo "Email: " . $email;
} else {
  // Jika formulir tidak dikirim dengan metode POST
  echo "Metode pengiriman formulir tidak valid.";
}

echo "<p><i><strong>By:ilham</strong>";