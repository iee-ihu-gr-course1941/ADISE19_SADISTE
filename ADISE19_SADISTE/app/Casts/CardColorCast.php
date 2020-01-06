<?php

namespace App\Casts;

use App\Enum\CardColor;

class CardColorCast extends EnumCast {

    public function setAttribute($value) {
        return $value->getValue();
    }

    public function castAttribute($value) {
        if ($value != '') {
            return new CardColor($value);
        } else {
            return null;
        }
    }
}