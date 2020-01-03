<?php

namespace App\Game;

use OutOfRangeException;

/**
 * The deck from which a player plays.
 */
class UserDeck extends Deck {
    public function __construct() {
        $this->cards = array();
    }

    /**
     * Add a card to the end of the deck.
     * @param Card $card The card to add.
     */
    public function addCard(Card $card): void {
        $this->cards[sizeof($this->cards)] = $card;
    }

    /**
     * @return array All the cards in the deck.
     */
    public function getCards(): array {
        return $this->cards;
    }

    /**
     * Get the card at the specified index.
     *
     * @param int $index The index from which to get the card.
     * @return Card The card at the specified index.
     * @throws OutOfRangeException if the index is less than 0 or greater or equal to the deck's size.
     */
    public function getCard(int $index): Card {
        return $this->cards[$index];
    }

    /**
     * Get a card at the specified index and remove it from the deck.
     *
     * @param int $index The index from which to get the card.
     * @return Card The card at the specified index.
     * @throws OutOfRangeException if the index is less than 0 or greater or equal to the deck's size.
     */
    public function pickCard(int $index): Card {
        $card = $this->cards[$index];
        $this->remove($index);
        return $card;
    }

    public function print() {
        foreach ($this->cards as $card) {
            $card->print();
        }
    }
}
