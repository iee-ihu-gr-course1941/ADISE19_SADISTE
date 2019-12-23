<?php

include '../Enum/CardColor.php';
include '../Enum/CardType.php';


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

}

?>