<?php

namespace App\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static CardType ZERO()
 * @method static CardType ONE()
 * @method static CardType TWO()
 * @method static CardType THREE()
 * @method static CardType FOUR()
 * @method static CardType FIVE()
 * @method static CardType SIX()
 * @method static CardType SEVEN()
 * @method static CardType EIGHT()
 * @method static CardType NINE()
 * @method static CardType REVERSE()
 * @method static CardType DRAW()
 * @method static CardType SKIP()
 * @method static CardType WILD()
 */
class CardType extends Enum
{
    private const ZERO = 'zero';
    private const ONE = 'one';
    private const TWO = 'two';
    private const THREE = 'three';
    private const FOUR = 'four';
    private const FIVE = 'five';
    private const SIX = 'six';
    private const SEVEN = 'seven';
    private const EIGHT = 'eight';
    private const NINE = 'nine';
    private const REVERSE = 'reverse';
    private const DRAW = 'draw';
    private const SKIP = 'skip';
    private const WILD = 'wild';
}
