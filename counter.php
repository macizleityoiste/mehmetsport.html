<?php
session_start();

// IP adresini al
$user_ip = $_SERVER['REMOTE_ADDR'];

// Sayacı başlat
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1; // İlk ziyaret
    $_SESSION['ip_address'] = $user_ip; // Kullanıcının IP adresini kaydet
} elseif ($_SESSION['ip_address'] !== $user_ip) {
    $_SESSION['counter']++; // Farklı IP ise artır
    $_SESSION['ip_address'] = $user_ip; // Yeni IP adresini kaydet
}

// Sayı verilerini kaydet
file_put_contents('counter.txt', $_SESSION['counter']);

// Ziyaret sayısını döndür
echo $_SESSION['counter'];
?>
