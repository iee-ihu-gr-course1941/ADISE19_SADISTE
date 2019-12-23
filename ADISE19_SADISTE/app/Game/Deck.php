<?php

abstract class Deck implements Countable
{

protected $cards;

public function __construct()
{
    $this->cards = array();
}

public function count()
{
    return sizeof($this->cards);
}

public function remove($index)
{
    unset($this->cards[$index]);
    array_values($this->cards);
}

}

?>