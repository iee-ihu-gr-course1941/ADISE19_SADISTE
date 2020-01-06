<?php

namespace App\Casts;

use App\Game\Card;
use Vkovic\LaravelCustomCasts\CustomCastBase;

class CardArrayCast extends CustomCastBase {

    public function setAttribute($value) {
        $array = [];

        foreach ($value as $index => $card) {
            $array[$index] = $card->id;
        }

        return $array;
    }

    public function castAttribute($value) {
        if ($value != '') {
            $cardIDsArray = json_decode($value);
            return Card::whereIn('id', $cardIDsArray)->get()->all();
        } else {
            return [];
        }
    }
}