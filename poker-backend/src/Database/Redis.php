<?php

namespace Database;

class Redis {
    private $client;

    public function __construct() {
        // Implement your Redis connection logic here
    }

    public function getClient() {
        return $this->client;
    }
}