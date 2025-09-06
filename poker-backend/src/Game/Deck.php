<?php

namespace Game;

class Deck {
    private $cards;

    public function __construct() {
        $this->cards = $this->createDeck();
    }

    private function createDeck(): array {
        $suits = ['H', 'D', 'C', 'S']; // Hearts, Diamonds, Clubs, Spades
        $ranks = ['2', '3', '4', '5', '6', '7', '8', '9', 'T', 'J', 'Q', 'K', 'A'];
        $deck = [];
        foreach ($suits as $suit) {
            foreach ($ranks as $rank) {
                $deck[] = $rank . $suit;
            }
        }
        return $deck;
    }

    public function shuffle(): void {
        shuffle($this->cards);
    }

    public function dealCard(): ?string {
        return array_pop($this->cards);
    }
}