<?php

include_once "BasicEnum.php";

abstract class CardType extends BasicEnum
{
    const zero = 0;
    const one = 1;
    const two = 2;
    const three = 3;
    const four = 4;
    const five = 5;
    const six = 6;
    const seven = 7;
    const eight = 8;
    const nine = 9;
    const reverse = 10;
    const draw = 11;
    const skip = 12;
    const wild = 13;
}

?>