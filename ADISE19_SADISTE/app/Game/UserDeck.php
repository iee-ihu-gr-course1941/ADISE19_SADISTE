<?php

include_once "Deck.php";
include_once "Card.php";

class UserDeck extends Deck
{

public function addCard($card)
{
    $this->cards[sizeof($this->cards)] = $card;
}

public function getCards()
{
    return $this->cards;
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
        echo $card->getColor() . ", ";
        echo $card->getType() . "\n";
    }
}

}

?>