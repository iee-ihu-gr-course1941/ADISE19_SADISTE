<?php

include_once "Deck.php";
include_once "Card.php";

class DrawDeck extends Deck
{

public function draw()
{
    $card = $this->cards[0];
    $this->remove(0);
    return $card;
}

public function addCards($cards)
{
    $this->cards = $this->cards + $cards;
}

}

?>
