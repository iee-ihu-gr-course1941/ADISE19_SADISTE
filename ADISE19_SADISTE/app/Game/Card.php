<?php

namespace App\Game;

use App\Enum\CardColor;
use App\Enum\CardType;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

/**
 * Model representing a single card.
 */
class Card extends Model {

    protected $timestamps = false;

    private $color;
    private $type;

    /**
     * @param CardColor $color The card's color.
     * @param CardType $type The card's type.
     * @throws InvalidArgumentException if a card's type is invalid for its color.
     */
    public function __construct(CardColor $color, CardType $type) {
        if ($color === CardColor::BLACK() && $type !== CardType::WILD() && $type !== CardType::DRAW()) {
            throw new InvalidArgumentException('Black cards can only be wild or draw');
        }

        if ($type === CardType::WILD() && $color !== CardColor::BLACK()) {
            throw new InvalidArgumentException('Wild cards can only be black');
        }

        $this->color = $color;
        $this->type = $type;
    }

    /**
     * @return string The string representation of the card.
     */
    public function __toString(): string {
        return "Card{ color:" . $this->getColor() . ", type:" . $this->getType() . " }";
    }

    /**
     * @return CardColor The card's color.
     */
    public function getColor(): CardColor {
        return $this->color;
    }

    /**
     * @return CardType The card's type.
     */
    public function getType(): CardType {
        return $this->type;
    }

    /**
     * Prints the card's string representation.
     */
    public function print(): void {
        echo $this . " }\n";
    }
}
