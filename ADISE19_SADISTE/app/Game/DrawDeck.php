<?php

namespace App\Game;

/**
 * A deck players draw from during a game.
 */
class DrawDeck extends Deck {

    /**
     * Pop the card at the top of the deck.
     *
     * @return Card The popped card.
     */
    public function draw(): Card {
        $card = $this->attributes['cards'][0];
        $this->remove(0);
        return $card;
    }

    /**
     * Randomize the order of the deck.
     */
    public function shuffle(): void {
        $temp = $this->cards;
        shuffle($temp);
        $this->cards = $temp;
    }

    /**
     * Add cards to the bottom of the deck.
     *
     * @param array $cards An array of cards to add to the deck.
     */
    public function addCards(array $cards): void {
        array_push($this->attributes['cards'], $cards);
    }
}
