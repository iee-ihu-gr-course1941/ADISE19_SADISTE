<?php

namespace App\Casts;

use App\ENum\CardType;

class CardTypeCast extends EnumCast {

    public function setAttribute($value) {
        return $value->getValue();
    }

    public function castAttribute($value) {
        if ($value != '') {
            return new CardType($value);
        } else {
            return null;
        }
    }
}