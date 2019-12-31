<?php

namespace App\Game;

abstract class Deck implements \Countable
{

protected $cards;

public function count()
{
    return sizeof($this->cards);
}

public function remove($index)
{
    unset($this->cards[$index]);
    $this->cards = array_values($this->cards);
}

public function size()
{
    return sizeof($this->cards);
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
