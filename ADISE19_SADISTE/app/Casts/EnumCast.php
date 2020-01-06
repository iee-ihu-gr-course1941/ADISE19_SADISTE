<?php

namespace App\Casts;

use Vkovic\LaravelCustomCasts\CustomCastBase;

class EnumCast extends CustomCastBase {

    public function setAttribute($value) {
        return $value->getValue();
    }
}