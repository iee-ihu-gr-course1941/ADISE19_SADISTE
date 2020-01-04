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

    public $timestamps = false;

    protected $fillable = ['color', 'type'];

    private $color;
    private $type;

    /**
     * @return string The string representation of the card.
     */
    public function __toString(): string {
        return "Card{ color:" . $this->getColor() . ", type:" . $this->getType() . " }";
    }

    /**
     * @return CardColor The card's color.
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * @return CardType The card's type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @throws InvalidArgumentException if there is a mismatch between card type and color.
     */
    public function setColorAttribute($value) {
        $value = strval($value);
        $color = new CardColor($value);

        $this->validateColorTypeCombination($color, $this->type);

        $this->attributes['color'] = $value;
        $this->color = $color;
    }

    /**
     * @throws InvalidArgumentException if there is a mismatch between card type and color.
     */
    public function setTypeAttribute($value) {
        $value = strval($value);
        $type = new CardType($value);

        $this->validateColorTypeCombination($this->color, $type);

        $this->attributes['type'] = $value;
        $this->type = $type;
    }

    /**
     * Prints the card's string representation.
     */
    public function print(): void {
        echo $this . " }\n";
    }

    private function validateColorTypeCombination(CardColor $color = null, CardType $type = null) {
        if ($color !== null && $type !== null) {
            if ($color == CardColor::BLACK() && $type != CardType::WILD() && $type != CardType::DRAW()) {
                throw new InvalidArgumentException('Black cards can only be wild or draw');
            }

            if ($type == CardType::WILD() && $color != CardColor::BLACK()) {
                throw new InvalidArgumentException('Wild cards can only be black');
            }
        }
    }
}
