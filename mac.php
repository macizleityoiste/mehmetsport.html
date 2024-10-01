<?php
// Maç linklerini döndüren PHP dosyası
$matches = [
    [
        "name" => "Beşiktaş vs Fenerbahçe",
        "url" => "https://example.com/besiktas_vs_fenerbahce.m3u8",
        "status" => "Canlı",
        "date" => "01 Ekim 2024"
    ],
    [
        "name" => "Galatasaray vs Trabzonspor",
        "url" => "https://example.com/galatasaray_vs_trabzonspor.m3u8",
        "status" => "Yakında",
        "date" => "05 Ekim 2024"
    ],
    [
        "name" => "Başakşehir vs Sivasspor",
        "url" => "https://example.com/basaksehir_vs_sivasspor.m3u8",
        "status" => "Bitti",
        "date" => "29 Eylül 2024"
    ]
];

// JSON formatında döndür
header('Content-Type: application/json');
echo json_encode($matches);
?>
