<?php

namespace App\Game;

use App\Enum\CardColor;
use App\Enum\CardType;

class Card 
{

    private $color;
    private $type;

    public function __construct($color, $type)
    {
        if(CardColor::isValidName($color))
        {
            $this->color = $color;
        }
        else
        {
            throw new Exception("Invalid color");
        }

        if(CardType::isValidName($type))
        {
            $this->type = $type;
        }
        else
        {
            throw new Exception("Invalid type");
        }
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getType()
    {
        return $this->type;
    }    

    public function print()
    {
        echo "Card{ color:" . $this->getColor() . ", type:" . $this->getType() . " }\n";
    }

}

?>