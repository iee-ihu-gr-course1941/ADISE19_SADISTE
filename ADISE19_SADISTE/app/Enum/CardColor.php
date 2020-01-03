<?php

namespace App\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static CardColor RED()
 * @method static CardColor GREEN()
 * @method static CardColor BLUE()
 * @method static CardColor YELLOW()
 * @method static CardColor BLACK()
 */
class CardColor extends Enum {
    private const RED = 'red';
    private const GREEN = 'green';
    private const BLUE = 'blue';
    private const YELLOW = 'yellow';
    private const BLACK = 'black';
}
