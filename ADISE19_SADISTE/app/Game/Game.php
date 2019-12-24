<?php

include_once 'DrawDeck.php';
include_once 'StackDeck.php';
include_once 'UserDeck.php';
include_once 'Card.php';

class Game
{

//private $clockwiseRotation;
//private $stackPlusCards;
private $currentPlayer;
private $playingOrder;
private $drawDeck;
private $stackDeck;
private $usersDecks;


public function __construct()
{
    $this->currentPlayer = 0;
    $this->playingOrder = array(0, 1);
    $this->drawDeck = new DrawDeck();
    $this->stackDeck = new StackDeck();
    $this->usersDecks = array(new UserDeck(), new UserDeck());
    $this->drawDeck->shuffle();
}

/*
public function changeRotation()
{
    // Change game rotation
}
*/

/*
public function skipTurn()
{
    // Skip player's turn
}
*/

/*
public function givePlusFour()
{
    // Give next player +4 cards
    // If next player stack with a +2 or a +4 card give to stack to the next player
}
*/

/*
public function givePlusTwo()
{
    // Give next player +2 cards
    // If next player stack with a +2 or a +4 card give to stack to the next player
}
*/

}

?>