<?php

namespace task29;
use Tightenco\Collect\Support\Collection;

class DeckOfCards {
    private Collection $cards;

    public function __construct(array $cards) {
        $this->cards = collect($cards);
        $this->cards = $this->cards
        ->map(fn ($card) => collect($card)->pad(4, $card))
        ->flatten();
    }

    public function getShuffled(): array {
        return $this->cards->shuffle()->all();
    }

    public function __toString(){
        return '{$this->cards}';
    }
}