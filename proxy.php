<?php
// proxy.php

// Orijinal m3u8 linkini tanımla
$original_link = 'https://varsports.zortstream.shop/601/index.m3u8'; // Buraya orijinal linki koy

// M3U8 dosyasını al ve içeriği yazdır
header('Content-Type: application/x-mpegURL');
readfile($original_link);
?>
