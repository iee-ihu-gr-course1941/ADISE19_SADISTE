<?php

use App\Game\Card;
use App\Enum\CardColor;
use App\Enum\CardType;
use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    public function run()
    {
        Card::create(['color' => CardColor::RED(), 'type' => CardType::ZERO()]);
        Card::create(['color' => CardColor::RED(), 'type' => CardType::ONE()]);
        Card::create(['color' => CardColor::RED(), 'type' => CardType::TWO()]);
        Card::create(['color' => CardColor::RED(), 'type' => CardType::THREE()]);
        Card::create(['color' => CardColor::RED(), 'type' => CardType::FOUR()]);
        Card::create(['color' => CardColor::RED(), 'type' => CardType::FIVE()]);
        Card::create(['color' => CardColor::RED(), 'type' => CardType::SIX()]);
        Card::create(['color' => CardColor::RED(), 'type' => CardType::SEVEN()]);
        Card::create(['color' => CardColor::RED(), 'type' => CardType::EIGHT()]);
        Card::create(['color' => CardColor::RED(), 'type' => CardType::NINE()]);
        Card::create(['color' => CardColor::RED(), 'type' => CardType::REVERSE()]);
        Card::create(['color' => CardColor::RED(), 'type' => CardType::DRAW()]);
        Card::create(['color' => CardColor::RED(), 'type' => CardType::SKIP()]);
        Card::create(['color' => CardColor::YELLOW(), 'type' => CardType::ZERO()]);
        Card::create(['color' => CardColor::YELLOW(), 'type' => CardType::ONE()]);
        Card::create(['color' => CardColor::YELLOW(), 'type' => CardType::TWO()]);
        Card::create(['color' => CardColor::YELLOW(), 'type' => CardType::THREE()]);
        Card::create(['color' => CardColor::YELLOW(), 'type' => CardType::FOUR()]);
        Card::create(['color' => CardColor::YELLOW(), 'type' => CardType::FIVE()]);
        Card::create(['color' => CardColor::YELLOW(), 'type' => CardType::SIX()]);
        Card::create(['color' => CardColor::YELLOW(), 'type' => CardType::SEVEN()]);
        Card::create(['color' => CardColor::YELLOW(), 'type' => CardType::EIGHT()]);
        Card::create(['color' => CardColor::YELLOW(), 'type' => CardType::NINE()]);
        Card::create(['color' => CardColor::YELLOW(), 'type' => CardType::REVERSE()]);
        Card::create(['color' => CardColor::YELLOW(), 'type' => CardType::DRAW()]);
        Card::create(['color' => CardColor::YELLOW(), 'type' => CardType::SKIP()]);
        Card::create(['color' => CardColor::GREEN(), 'type' => CardType::ZERO()]);
        Card::create(['color' => CardColor::GREEN(), 'type' => CardType::ONE()]);
        Card::create(['color' => CardColor::GREEN(), 'type' => CardType::TWO()]);
        Card::create(['color' => CardColor::GREEN(), 'type' => CardType::THREE()]);
        Card::create(['color' => CardColor::GREEN(), 'type' => CardType::FOUR()]);
        Card::create(['color' => CardColor::GREEN(), 'type' => CardType::FIVE()]);
        Card::create(['color' => CardColor::GREEN(), 'type' => CardType::SIX()]);
        Card::create(['color' => CardColor::GREEN(), 'type' => CardType::SEVEN()]);
        Card::create(['color' => CardColor::GREEN(), 'type' => CardType::EIGHT()]);
        Card::create(['color' => CardColor::GREEN(), 'type' => CardType::NINE()]);
        Card::create(['color' => CardColor::GREEN(), 'type' => CardType::REVERSE()]);
        Card::create(['color' => CardColor::GREEN(), 'type' => CardType::DRAW()]);
        Card::create(['color' => CardColor::GREEN(), 'type' => CardType::SKIP()]);
        Card::create(['color' => CardColor::BLUE(), 'type' => CardType::ZERO()]);
        Card::create(['color' => CardColor::BLUE(), 'type' => CardType::ONE()]);
        Card::create(['color' => CardColor::BLUE(), 'type' => CardType::TWO()]);
        Card::create(['color' => CardColor::BLUE(), 'type' => CardType::THREE()]);
        Card::create(['color' => CardColor::BLUE(), 'type' => CardType::FOUR()]);
        Card::create(['color' => CardColor::BLUE(), 'type' => CardType::FIVE()]);
        Card::create(['color' => CardColor::BLUE(), 'type' => CardType::SIX()]);
        Card::create(['color' => CardColor::BLUE(), 'type' => CardType::SEVEN()]);
        Card::create(['color' => CardColor::BLUE(), 'type' => CardType::EIGHT()]);
        Card::create(['color' => CardColor::BLUE(), 'type' => CardType::NINE()]);
        Card::create(['color' => CardColor::BLUE(), 'type' => CardType::REVERSE()]);
        Card::create(['color' => CardColor::BLUE(), 'type' => CardType::DRAW()]);
        Card::create(['color' => CardColor::BLUE(), 'type' => CardType::SKIP()]);
        Card::create(['color' => CardColor::BLACK(), 'type' => CardType::WILD()]);
        Card::create(['color' => CardColor::BLACK(), 'type' => CardType::DRAW()]);
    }
}
