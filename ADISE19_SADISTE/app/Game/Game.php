<?php

namespace App\Game;

use App\Enum\CardColor;
use Illuminate\Database\Eloquent\Model;
use function reset;

class Game extends Model
{
    protected $primaryKey = 'id';

    private $clockwiseRotation;
    private $currentPlayer;
    private $playingOrder;
    private $drawDeck;
    private $stackDeck;
    private $usersDecks;
    private $changedColor;
    private $stopGame;

    public function __construct()
    {
        $this->clockwiseRotation = True;
        $this->stackPlusCards = 0;
        $this->currentPlayer = 0;
        $this->playingOrder = array(0, 1);
        $this->drawDeck = new DrawDeck();
        $this->stackDeck = new StackDeck();
        $this->usersDecks = array(new UserDeck(), new UserDeck());
        $this->changedColor = null;
        $this->stopGame = False;

        $this->drawDeck->shuffle();
        $this->stackDeck->addCard($this->drawDeck->draw());
        for ($counter = 0; $counter < 7; $counter++) {
            $this->usersDecks[0]->addCard($this->drawDeck->draw());
            $this->usersDecks[1]->addCard($this->drawDeck->draw());
        }
    }

    private function isLegalMove($index)
    {
        $playerCard = $this->usersDecks[$this->currentPlayer]->getCard($index);
        $stackCard = $this->stackDeck->getTopCard();

        return (
            ($stackCard->getColor() === CardColor::BLACK() && $playerCard->getColor() === $this->changedColor)
            ||
            ($playerCard->getColor() === CardColor::BLACK())
            ||
            ($playerCard->getColor() === $stackCard->getColor())
            ||
            ($playerCard->getType() === $stackCard->getType()));
    }

    private function nextPlayer()
    {
        if ($this->clockwiseRotation) {
            if ($this->currentPlayer < sizeof($this->playingOrder) - 1) {
                $this->currentPlayer++;
            } else {
                $this->currentPlayer = 0;
            }
        } else {
            if ($this->currentPlayer > 0) {
                $this->currentPlayer--;
            } else {
                $this->currentPlayer = sizeof($this->playingOrder) - 1;
            }
        }

        if ($this->drawDeck->size() < 10) {
            $cards = $this->stackDeck->getCardsForDrawDeck();
            $this->drawDeck->addCards($cards);
        }
    }

    private function changeRotation()
    {
        $this->clockwiseRotation = !$this->clockwiseRotation;
    }

    #TODO update this function to work with the front end
    private function changeColor()
    {
        while (true) {
            shell_exec(reset);
            $ans = readLine("Choose a color (red, green, blue, yellow): ");
            if ($ans == "red" || $ans == "green" || $ans == "blue" || $ans == "yellow") {
                $this->changedColor = $ans;
                return;
            }
        }
    }

    private function givePlusFour()
    {
        $this->nextPlayer();
        for ($counter = 0; $counter < 4; $counter++) {
            $this->usersDecks[$this->currentPlayer]->addCard($this->drawDeck->draw());
        }
    }

    private function givePlusTwo()
    {
        $this->nextPlayer();
        for ($counter = 0; $counter < 2; $counter++) {
            $this->usersDecks[$this->currentPlayer]->addCard($this->drawDeck->draw());
        }
    }

    private function draw()
    {
        $this->usersDecks[$this->currentPlayer]->addCard($this->drawDeck->draw());
        $this->nextPlayer();
    }

    //TODO update this function to work with the front end
    private function playerWon()
    {
        $this->stopGame = True;
    }

    public function playCard($index)
    {
        if ($this->isLegalMove($index)) {
            $playerCard = $this->usersDecks[$this->currentPlayer]->getCard($index);

            $card = $this->usersDecks[$this->currentPlayer]->pickCard($index);
            $this->stackDeck->addCard($card);

            if ($this->usersDecks[$this->currentPlayer]->size() == 0) {
                $this->playerWon();
            } else {
                if ($playerCard->getType() == "reverse") {
                    $this->changeRotation();
                } else if ($playerCard->getType() == "draw") {
                    if ($playerCard->getColor() == "black") {
                        $this->givePlusFour();
                    } else {
                        $this->givePlusTwo();
                    }
                } else if ($playerCard->getType() == "skip") {
                    $this->nextPlayer();
                } else if ($playerCard->getType() == "wild") {
                    $this->changeColor();
                }

                $this->nextPlayer();
            }

            return True;
        }
        return False;
    }

    public function shell()
    {
        $message = "";
        while (True) {
            shell_exec(reset);
            if ($this->stopGame) {
                break;
            } else {
                echo "Message: " . $message . "\n";
                $this->print();
                echo "\nPlayer: " . $this->currentPlayer . "\n";
                $ans = readLine("type your move: ");

                if ($ans == "exit") {
                    return;
                } else if ($ans >= 1 && $ans <= 7) {
                    if ($this->playCard($ans - 1)) {
                        $message = "Card played";
                    } else {
                        $message = "You can't do that, try again";
                    }
                } else if ($ans == "draw") {
                    $this->draw();
                }
            }
        }

        echo "===============================================\n";
        echo "\nPlayer " . $this->currentPlayer . " won\n";
        echo "===============================================\n";
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
