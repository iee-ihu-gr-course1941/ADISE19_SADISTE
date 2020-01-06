<?php

namespace App\Game;

use App\Casts\CardColorCast;
use App\Casts\CardTypeCast;
use App\Enum\CardColor;
use App\Enum\CardType;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;
use Vkovic\LaravelCustomCasts\HasCustomCasts;

/**
 * Model representing a single card.
 */
class Card extends Model {

    use HasCustomCasts;

    public $timestamps = false;

    protected $fillable = ['color', 'type'];
    protected $attributes = [
        'color' => null,
        'type' => null,
    ];
    protected $casts = [
        'color' => CardColorCast::class,
        'type' => CardTypeCast::class,
    ];

    private $color;
    private $type;

    /**
     * @return string The string representation of the card.
     */
    public function __toString(): string {
        return "Card{ color:" . $this->getColor() . ", type:" . $this->getType() . " }";
    }

    /**
     * @throws InvalidArgumentException if there is a mismatch between card type and color.
     */
    public function setColorAttribute($value) {
        validateColorTypeCombination($value, $this->attributes['type']);
        $this->attributes['color'] = $value;
    }

    /**
     * @throws InvalidArgumentException if there is a mismatch between card type and color.
     */
    public function setTypeAttribute($value) {
        validateColorTypeCombination($this->attributes['color'], $value);
        $this->attributes['type'] = $value;
    }

    /**
     * Prints the card's string representation.
     */
    public function print(): void {
        echo $this . " }\n";
    }
}

function validateColorTypeCombination(CardColor $color = null, CardType $type = null) {
    if ($color != null && $type != null) {
        if ($color == CardColor::BLACK() && $type != CardType::WILD() && $type != CardType::DRAW()) {
            throw new InvalidArgumentException('Black cards can only be wild or draw');
        }

        if ($type == CardType::WILD() && $color != CardColor::BLACK()) {
            throw new InvalidArgumentException('Wild cards can only be black');
        }
    }
}
