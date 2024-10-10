<?php
if(isset($_COOKIE["user"])) {
    echo "Selamat datang " . $_COOKIE["user"];
} else {
    echo "Selamat datang, ilham!";
}

// Membuat cookie yang berlaku selama satu jam
setcookie("user", "ilham!", time() + (3600), "/");

// Mengatur expiry time ke satu jam yang lalu
setcookie("user", "", time() - 3600);

echo "<p><i><strong>By:ilham</strong>";