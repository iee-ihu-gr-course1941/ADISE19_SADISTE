<?php

namespace App\Game;

/**
 * A deck to which players play cards.
 */
class StackDeck extends Deck
{
    public function __construct()
    {
        $this->cards = array();
    }

    /**
     * @param Card $card The card to add to the top of the deck.
     */
    public function addCard(Card $card): void
    {
        $this->cards[sizeof($this->cards)] = $card;
    }

    /**
     * @return array All cards except the top one from the deck.
     */
    public function getCardsForDrawDeck(): array
    {
        $topCard = $this->cards[sizeof($this->cards) - 1];
        $this->remove(sizeof($this->cards) - 1);
        $cards = $this->cards;
        $this->cards = array();
        $this->addCard($topCard);
        return $cards;
    }

    public function showTopCard(): void
    {
        echo "Stack top card: ";
        $this->cards[sizeof($this->cards) - 1]->print();
    }

    /**
     * @return Card The top card of the deck.
     */
    public function getTopCard(): Card
    {
        return $this->cards[sizeof($this->cards) - 1];
    }

    public function print()
    {
        foreach ($this->cards as $card) {
            $card->print();
        }
    }
}
