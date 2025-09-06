<?php

// Ensure you have required vendor/autoload.php for Composer
require __DIR__ . '/../../vendor/autoload.php';

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
// This is the class that needs to be correctly namespaced and autoloaded
use WebSocket\PokerServerComponent; 

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new PokerServerComponent() // This is where the error was
        )
    ),
    8080
);

echo "WebSocket server started on port 8080...\n";
$server->run();