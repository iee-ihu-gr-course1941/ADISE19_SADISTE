<?php

namespace App\Game;

use Exception;
use App\Enum\CardColor;
use App\Enum\CardType;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    private $color;
    private $type;

    public function __construct($color, $type)
    {
        if (CardColor::isValidName($color)) {
            $this->color = $color;
        } else {
            throw new Exception("Invalid color");
        }

        if (CardType::isValidName($type)) {
            $this->type = $type;
        } else {
            throw new Exception("Invalid type");
        }

        if ($color === 'black' && $type !== 'wild' && $type !== 'draw') {
            throw new Exception('Black cards can only be wild or draw');
        }

        if ($type === 'wild' && $color !== 'black') {
            throw new Exception('Wild cards can only be black');
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
