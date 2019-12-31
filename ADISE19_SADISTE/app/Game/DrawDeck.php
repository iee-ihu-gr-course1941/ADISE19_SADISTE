<?php

namespace App\Game;

use App\Game\Deck;
use App\Game\Card;

class DrawDeck extends Deck
{

public function __construct()
{
    $this->cards = array(
        new Card("red", "zero"), new Card("red", "one"), new Card("red", "two"), new Card("red", "three"), new Card("red", "four"), new Card("red", "five"), new Card("red", "six"), new Card("red", "seven"), new Card("red", "eight"), new Card("red", "nine"), new Card("red", "reverse"), new Card("red", "draw"), new Card("red", "skip"),
        new Card("red", "one"), new Card("red", "two"), new Card("red", "three"), new Card("red", "four"), new Card("red", "five"), new Card("red", "six"), new Card("red", "seven"), new Card("red", "eight"), new Card("red", "nine"), new Card("red", "reverse"), new Card("red", "draw"), new Card("red", "skip"),
        new Card("yellow", "zero"), new Card("yellow", "one"), new Card("yellow", "two"), new Card("yellow", "three"), new Card("yellow", "four"), new Card("yellow", "five"), new Card("yellow", "six"), new Card("yellow", "seven"), new Card("yellow", "eight"), new Card("yellow", "nine"), new Card("yellow", "reverse"), new Card("yellow", "draw"), new Card("yellow", "skip"),
        new Card("yellow", "one"), new Card("yellow", "two"), new Card("yellow", "three"), new Card("yellow", "four"), new Card("yellow", "five"), new Card("yellow", "six"), new Card("yellow", "seven"), new Card("yellow", "eight"), new Card("yellow", "nine"), new Card("yellow", "reverse"), new Card("yellow", "draw"), new Card("yellow", "skip"),
        new Card("green", "zero"), new Card("green", "one"), new Card("green", "two"), new Card("green", "three"), new Card("green", "four"), new Card("green", "five"), new Card("green", "six"), new Card("green", "seven"), new Card("green", "eight"), new Card("green", "nine"), new Card("green", "reverse"), new Card("green", "draw"), new Card("green", "skip"),
        new Card("green", "one"), new Card("green", "two"), new Card("green", "three"), new Card("green", "four"), new Card("green", "five"), new Card("green", "six"), new Card("green", "seven"), new Card("green", "eight"), new Card("green", "nine"), new Card("green", "reverse"), new Card("green", "draw"), new Card("green", "skip"),
        new Card("blue", "zero"), new Card("blue", "one"), new Card("blue", "two"), new Card("blue", "three"), new Card("blue", "four"), new Card("blue", "five"), new Card("blue", "six"), new Card("blue", "seven"), new Card("blue", "eight"), new Card("blue", "nine"), new Card("blue", "reverse"), new Card("blue", "draw"), new Card("blue", "skip"),
        new Card("blue", "one"), new Card("blue", "two"), new Card("blue", "three"), new Card("blue", "four"), new Card("blue", "five"), new Card("blue", "six"), new Card("blue", "seven"), new Card("blue", "eight"), new Card("blue", "nine"), new Card("blue", "reverse"), new Card("blue", "draw"), new Card("blue", "skip"),
        new Card("black", "wild"), new Card("black", "wild"), new Card("black", "wild"), new Card("black", "wild"),
        new Card("black", "draw"), new Card("black", "draw"), new Card("black", "draw"), new Card("black", "draw")
    );
}

public function draw()
{
    $card = $this->cards[0];
    $this->remove(0);
    return $card;
}

public function shuffle()
{
    $tempCards = $this->cards;
    $this->cards = array();
    $tempCardsSize = sizeof($tempCards);
    for($counter = 0;$counter < $tempCardsSize;$counter++)
    {
        $index = rand(0, sizeof($tempCards)-1);
        $this->cards[$counter] = $tempCards[$index];
        unset($tempCards[$index]);
        $tempCards = array_values($tempCards);
    }
}

public function addCards($cards)
{
    $this->cards = $this->cards + $cards;
}

}

?>
