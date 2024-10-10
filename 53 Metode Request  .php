<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lanjutkan dengan mengolah data form
}



if (empty($name) || empty($email) || empty($message)) {
    echo "Semua bidang harus diisi.";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email tidak valid.";
    exit;
}

$to = 'tujuan@example.com'; // Ganti dengan alamat email tujuan
$subject = 'Pesan dari Website';
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: ". $email . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "Pesan terkirim dengan sukses.";
} else {
    echo "Pesan gagal dikirim.";
}

$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

$message = "<html><body>";
$message .= "<p>Pesan:</p>";
$message .= "<p>" . nl2br(htmlspecialchars($message)) . "</p>";
$message .= "</body></html>";

// Fungsi mail() seperti contoh sebelumnya.

echo "<p><i><strong>By:ilham</strong>";