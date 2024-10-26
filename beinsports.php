<?php
// beinsports.php

header('Content-Type: application/json');

$channels = [
    [
        'name' => 'BeinSports1 - Yedek Yayın 1',
        'url' => 'https://varsports.zortstream.shop/601/index.m3u8',
        'status' => 'CANLI',
        'date' => 'Maç Zamanı Aktif'
    ],
    [
        'name' => 'BeinSports1 - Yedek Yayın 2',
        'url' => 'https://ozweb.duckdns.org/cdn/getrok/1.m3u8?v=aHR0cHM6Ly93d3cub2hhLnRvL29oYS10di9wbGF5LzIxMTM0NjIzOTg0M2RkZWRlOGZhYmM=',
        'status' => 'CANLI',
        'date' => '7/24'
    ],
    // Diğer kanalları buraya ekleyebilirsin
];

echo json_encode($channels);
?>
