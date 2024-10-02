// server.js
const WebSocket = require('ws');

const wss = new WebSocket.Server({ port: 8080 });

wss.on('connection', (ws) => {
    console.log('Yeni bir bağlantı kuruldu.');

    ws.on('message', (message) => {
        console.log(`Mesaj alındı: ${message}`);
        // Tüm bağlantılara mesajı gönder
        wss.clients.forEach((client) => {
            if (client.readyState === WebSocket.OPEN) {
                client.send(message);
            }
        });
    });
});

console.log('WebSocket sunucusu 8080 portunda çalışıyor.');
