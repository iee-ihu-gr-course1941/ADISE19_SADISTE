<?php

namespace App\Game;

use OutOfRangeException;

/**
 * The deck from which a player plays.
 */
class UserDeck extends Deck {

    /**
     * Add a card to the end of the deck.
     * @param Card $card The card to add.
     */
    public function addCard(Card $card): void {
        $this->attributes['cards'][$this->count()] = $card;
    }

    /**
     * Get a card at the specified index and remove it from the deck.
     *
     * @param int $index The index from which to get the card.
     * @return Card The card at the specified index.
     * @throws OutOfRangeException if the index is less than 0 or greater or equal to the deck's size.
     */
    public function pickCard(int $index): Card {
        $card = $this->attributes['cards'][$index];
        $this->remove($index);
        return $card;
    }

    public function print() {
        foreach ($this->cards as $card) {
            $card->print();
        }
    }
}
