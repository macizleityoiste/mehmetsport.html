<?php
header('Content-Type: application/json');

$channels = [
    [
        "name" => "BeIN Sports 1",
        "url" => "https://ozweb.duckdns.org/cdn/getrok/1.m3u8?v=aHR0cHM6Ly93d3cub2hhLnRvL29oYS10di9wbGF5LzE1OTc4NjE2NDI0ZDJkMTFlMjU4YmY=",
        "status" => "CANLI",
        "date" => date("Y-m-d H:i:s")
    ],
    [
        "name" => "BeIN Sports 2",
        "url" => "https://ozweb.duckdns.org/cdn/getrok/1.m3u8?v=aHR0cHM6Ly93d3cub2hhLnRvL29oYS10di9wbGF5LzM4MzA2OTEzMTY2ZWY3ZjQ4YzE5YmY=",
        "status" => "CANLI",
        "date" => date("Y-m-d H:i:s")
    ],
    [
        "name" => "BeIN Sports 3",
        "url" => "https://ozweb.duckdns.org/cdn/getrok/1.m3u8?v=aHR0cHM6Ly93d3cub2hhLnRvL29oYS10di9wbGF5LzE0ODk0MzA3NTQ0YWY3ODQwYmM1NWU=",
        "status" => "CANLI",
        "date" => date("Y-m-d H:i:s")
    ]
];

echo json_encode($channels);
?>
