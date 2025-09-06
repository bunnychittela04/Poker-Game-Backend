<?php

namespace Game;

class PokerGame {
    public $players = [];
    public $communityCards = [];
    public $pot = 0;
    public $turn = null;
    public $state = 'waiting_for_players';

    public function addPlayer(Player $player): void {
        $this->players[] = $player;
    }

    // This class will contain all the core game logic
    // (e.g., deal, bet, raise, fold, determine winner).
}