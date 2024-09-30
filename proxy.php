<?php
header('Content-Type: application/json');

$channels = [
    '1' => 'https://ozweb.duckdns.org/cdn/getrok/1.m3u8?v=aHR0cHM6Ly93d3cub2hhLnRvL29oYS10di9wbGF5LzIxMTM0NjIzOTg0M2RkZWRlOGZhYmM=',
    '2' => 'https://ozweb.duckdns.org/cdn/getrok/1.m3u8?v=aHR0cHM6Ly93d3cub2hhLnRvL29oYS10di9wbGF5LzIxMTM0NjIzOTg0M2RkZWRlOGZhYmM=',
    '3' => 'https://ozweb.duckdns.org/cdn/getrok/1.m3u8?v=aHR0cHM6Ly93d3cub2hhLnRvL29oYS10di9wbGF5LzIxMTM0NjIzOTg0M2RkZWRlOGZhYmM=',
    '4' => 'https://ozweb.duckdns.org/cdn/getrok/1.m3u8?v=aHR0cHM6Ly93d3cub2hhLnRvL29oYS10di9wbGF5LzIxMTM0NjIzOTg0M2RkZWRlOGZhYmM=',
    '5' => 'https://ozweb.duckdns.org/cdn/getrok/1.m3u8?v=aHR0cHM6Ly93d3cub2hhLnRvL29oYS10di9wbGF5LzIxMTM0NjIzOTg0M2RkZWRlOGZhYmM='
];

echo json_encode($channels);
?>
