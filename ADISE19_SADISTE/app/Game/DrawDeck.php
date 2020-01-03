<?php

namespace App\Game;

/**
 * A deck players draw from during a game.
 */
class DrawDeck extends Deck {

    public function __construct() {
        $this->cards = Card::all()->all();
    }

    /**
     * Pop the card at the top of the deck.
     *
     * @return Card The popped card.
     */
    public function draw(): Card {
        $card = $this->cards[0];
        $this->remove(0);
        return $card;
    }

    /**
     * Randomize the order of the deck.
     */
    public function shuffle(): void {
        $tempCards = $this->cards;
        $this->cards = array();
        $tempCardsSize = sizeof($tempCards);

        for ($counter = 0; $counter < $tempCardsSize; $counter++) {
            $index = rand(0, sizeof($tempCards) - 1);
            $this->cards[$counter] = $tempCards[$index];
            unset($tempCards[$index]);
            $tempCards = array_values($tempCards);
        }
    }

    /**
     * Add cards to the bottom of the deck.
     *
     * @param array $cards An array of cards to add to the deck.
     */
    public function addCards(array $cards): void {
        $this->cards = $this->cards + $cards;
    }
}
