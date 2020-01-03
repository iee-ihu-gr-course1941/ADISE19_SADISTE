<?php

namespace App\Game;

use Countable;
use Illuminate\Database\Eloquent\Model;

abstract class Deck extends Model implements Countable {

    protected $cards;

    /**
     * @return int The number of cards in the deck.
     */
    public function count(): int {
        return sizeof($this->cards);
    }

    /**
     * Remove a card from a specific place in the deck (starts from the top).
     *
     * @param int $index The index from which to remove the card.
     */
    public function remove(int $index): void {
        unset($this->cards[$index]);
        $this->cards = array_values($this->cards);
    }

    public function size() {
        return sizeof($this->cards);
    }

    public function print() {
        foreach ($this->cards as $card) {
            $card->print();
        }
    }
}
