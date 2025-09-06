<?php

namespace Game;

class Player {
    public $id;
    public $chips;
    public $hand;
    public $status; // 'active', 'folded', 'all-in'

    public function __construct(string $id, int $chips) {
        $this->id = $id;
        $this->chips = $chips;
        $this->hand = [];
        $this->status = 'active';
    }
}