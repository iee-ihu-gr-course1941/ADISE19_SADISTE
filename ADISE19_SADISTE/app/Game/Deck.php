<?php

namespace App\Game;

use App\Casts\CardArrayCast;
use Countable;
use Illuminate\Database\Eloquent\Model;
use OutOfRangeException;

abstract class Deck extends Model implements Countable {

    public $timestamps = false;

    protected $table = 'decks';
    protected $attributes = [
        'cards' => []
    ];
    protected $casts = [
        'cards' => CardArrayCast::class,
    ];

    /**
     * @return int The number of cards in the deck.
     */
    public function count(): int {
        return sizeof($this->cards);
    }

    /**
     * Get the card at the specified index.
     *
     * @param int $index The index from which to get the card.
     * @return Card The card at the specified index.
     * @throws OutOfRangeException if the provided index is less than 0 or greater or equal to the size of the deck.
     */
    public function getCard(int $index): Card {
        return Card::find($this->cards[$index]);
    }

    /**
     * Remove a card from a specific place in the deck (starts from the top).
     *
     * @param int $index The index from which to remove the card.
     */
    public function remove(int $index): void {
        unset($this->attributes['cards'][$index]);
        $this->cards = array_values($this->cards);
    }
}
