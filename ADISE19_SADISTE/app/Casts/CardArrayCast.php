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

        $json = json_encode($array);
        return $json;
    }

    public function castAttribute($value) {
        if (gettype($value) == 'string') {
            if ($value != '') {
                $cardIDsArray = json_decode($value);
                return Card::whereIn('id', $cardIDsArray)->get()->all();
            } else {
                return [];
            }
        } else {
            return [];
        }
    }
}