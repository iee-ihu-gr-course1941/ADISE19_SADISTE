<?php

namespace App\Game;

/**
 * A deck to which players play cards.
 */
class StackDeck extends Deck {

    /**
     * @param Card $card The card to add to the top of the deck.
     */
    public function addCard(Card $card): void {
        $this->attributes['cards'][$this->count()] = $card;
    }

    /**
     * @return array All cards except the top one from the deck.
     */
    public function getCardsForDrawDeck(): array{
        $topCard = $this->attributes['cards'][$this->count() - 1];
        $this->remove($this->count() - 1);

        $cards = $this->attributes['cards'];
        $this->cards = [$topCard];

        return $cards;
    }

    public function showTopCard(): void {
        echo "Stack top card: ";
        $this->attributes['cards'][$this->count() - 1]->print();
    }

    /**
     * @return Card The top card of the deck.
     */
    public function getTopCard(): Card {
        return $this->attributes['cards'][$this->count() - 1];
    }

    public function print() {
        foreach ($this->attributes['cards'] as $card) {
            $card->print();
        }
    }
}
