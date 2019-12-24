<?php

include_once "Deck.php";
include_once "Card.php";

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

public function pickCard($index)
{
    $card = $this->cards[$index];
    $this->remove($index);
    return $card;
}

}

?>
