<?php

namespace App\Game;

use App\Game\Deck;
use App\Game\Card;

class StackDeck extends Deck
{

public function __construct()
{
    $this->cards = array();
}

public function addCard($card)
{
    $this->cards[sizeof($this->cards)] = $card;
}

public function getCardsForDrawDeck()
{
    $topCard = $this->cards[sizeof($this->cards)-1];
    $this->remove(sizeof($this->cards)-1);
    $cards = $this->cards;
    $this->cards = array();
    $this->addCard($topCard);
    return $cards;
}

public function showTopCard()
{
    echo "Stack top card: ";
    $this->cards[sizeof($this->cards)-1]->print();
}

public function getTopCard()
{
    return $this->cards[sizeof($this->cards)-1];
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
