<?php

include_once 'DrawDeck.php';
include_once 'StackDeck.php';
include_once 'UserDeck.php';
include_once 'Card.php';

class Game
{

private $clockwiseRotation;
//private $stackPlusCards;
private $currentPlayer;
private $playingOrder;
private $drawDeck;
private $stackDeck;
private $usersDecks;
private $changedColor;

public function __construct()
{
    $this->clockwiseRotation = True;
    $this->currentPlayer = 0;
    $this->playingOrder = array(0, 1);
    $this->drawDeck = new DrawDeck();
    $this->stackDeck = new StackDeck();
    $this->usersDecks = array(new UserDeck(), new UserDeck());
    $this->changedColor = null;

    $this->drawDeck->shuffle();
    $this->stackDeck->addCard($this->drawDeck->draw());
    for($counter = 0;$counter < 7;$counter++)
    {
        $this->usersDecks[0]->addCard($this->drawDeck->draw());
        $this->usersDecks[1]->addCard($this->drawDeck->draw());
    }
}

// TODO update fuctnion with exceptions
private function isLegalMove($index)
{
    $playerCard = $this->usersDecks[$this->currentPlayer]->getCard($index);
    $stackCard = $this->stackDeck->getTopCard();

    return ( 
        ($stackCard->getColor() == "black" && $playerCard->getColor() == $this->changedColor)
        ||
        ($playerCard->getColor() == "black")
        ||
        ($playerCard->getColor() == $stackCard->getColor())
        ||
        ($playerCard->getType() == $stackCard->getType())
    );
}

private function nextPlayer()
{
    if($this->clockwiseRotation)
    {
        if($this->currentPlayer < sizeof($this->playingOrder)-1)
        {
            $this->currentPlayer++;
        }
        else
        {
            $this->currentPlayer = 0;
        }
    }
    else
    {
        if($this->currentPlayer > 0)
        {
            $this->currentPlayer--;
        }
        else
        {
            $this->currentPlayer = sizeof($this->playingOrder)-1;
        }
    }
}

private function changeRotation()
{
    $this->clockwiseRotation = !$this->clockwiseRotation;
}

#TODO update this function to work with the front end
private function changeColor()
{
    while(true)
    {
        shell_exec(reset);
        $ans = readLine("Choose a color (red, green, blue, yellow): ");
        if($ans == "red" || $ans == "green" || $ans == "blue" || $ans == "yellow")
        {
            $this->changedColor = $ans;
            return;
        }
        
    }
}

/*
private function givePlusFour()
{
    // Give next player +4 cards
    // If next player stack with a +2 or a +4 card give to stack to the next player
}
*/

/*
private function givePlusTwo()
{
    // Give next player +2 cards
    // If next player stack with a +2 or a +4 card give to stack to the next player
}
*/

private function draw()
{
    $this->usersDecks[$this->currentPlayer]->addCard($this->drawDeck->draw());
    $this->nextPlayer();
}

public function playCard($index)
{
    if($this->isLegalMove($index))
    {
        $playerCard = $this->usersDecks[$this->currentPlayer]->getCard($index);

        $card = $this->usersDecks[$this->currentPlayer]->pickCard($index);
        $this->stackDeck->addCard($card);

        if($playerCard->getType() == "reverse")
        {
            $this->changeRotation();
        }
        else if($playerCard->getType() == "draw")
        {
            if($playerCard->getColor() == "black")
            {
                //TODO draw +4
            }
            else
            {
                //TODO draw +2
            }
        }
        else if($playerCard->getType() == "skip")
        {
            $this->nextPlayer();
        }
        else if($playerCard->getType() == "wild")
        {
            $this->changeColor();
        }

        $this->nextPlayer();

        return True;
    }
    return False;
}

public function shell()
{
    $message = "";
    while(True){
        shell_exec(reset);
        echo "Message: " . $message . "\n";
        $this->print();
        echo "\nPlayer: " . $this->currentPlayer . "\n";
        $ans = readLine("type your move: ");

        if($ans == "exit")
        {
            return;
        }

        if($ans >= 1 && $ans <= 7)
        {
            if($this->playCard($ans-1))
            {
                $message = "Card played";
            }
            else
            {
                $message = "You can't do that, try again";
            }
        }

        if($ans == "draw")
        {
            $this->draw();
        }
        
    }
}

public function print()
{
    /*
    echo "DrawDeck cards: \n";
    $this->drawDeck->print();
    */
    echo "==========================================\n";
    $this->stackDeck->print();
    echo "==========================================\n";
    echo "Player's 0 deck:\n";
    $this->usersDecks[0]->print();
    echo "Number of cards: " . $this->usersDecks[0]->size() . "\n";
    echo "==========================================\n";
    echo "Player's 1 deck:\n";
    $this->usersDecks[1]->print();
    echo "Number of cards: " . $this->usersDecks[1]->size() . "\n";
    echo "==========================================\n";
}

}

?>