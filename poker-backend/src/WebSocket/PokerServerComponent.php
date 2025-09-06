<?php

namespace WebSocket; // This namespace is crucial and matches composer.json

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class PokerServerComponent implements MessageComponentInterface {
    protected $tables; // A collection of poker tables

    public function __construct() {
        $this->tables = new \SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $conn) {
        echo "New connection! ({$conn->resourceId})\n";
    }

    public function onClose(ConnectionInterface $conn) {
        // A connection has been closed.
        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        // An error occurred.
        echo "An error has occurred: {$e->getMessage()}\n";
        $conn->close();
    }
    // You'll need to implement onMessage to handle game logic
    public function onMessage(ConnectionInterface $conn, $msg) {
        // Placeholder for message processing
        echo "Received message: " . $msg . "\n";
        // Broadcast message to other users, handle game logic, etc.
    }
}