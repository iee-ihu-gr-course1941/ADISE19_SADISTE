<?php

namespace App\Game;

use App\Game\Deck;
use App\Game\Card;

class UserDeck extends Deck
{

public function __construct()
{
    $this->cards = array();
}

public function addCard($card)
{
    $this->cards[sizeof($this->cards)] = $card;
}

public function getCards()
{
    return $this->cards;
}

public function getCard($index)
{
    return $this->cards[$index];
}

public function pickCard($index)
{
    $card = $this->cards[$index];
    $this->remove($index);
    return $card;
}

public function print()
{
    foreach($this->cards as $card)
    {
        $card->print();
    }
}

}

?>
