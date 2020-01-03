<?php

use App\Enum\CardColor;
use App\Enum\CardType;
use App\Game\Card;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration {
    public function up() {
        Schema::create('cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('color', CardColor::values());
            $table->enum('type', CardType::values());
            $table->unique(['color', 'type']);
        });

        // Card insertions.
        (new Card(CardColor::RED(), CardType::ZERO()))->save();
        (new Card(CardColor::RED(), CardType::ONE()))->save();
        (new Card(CardColor::RED(), CardType::TWO()))->save();
        (new Card(CardColor::RED(), CardType::THREE()))->save();
        (new Card(CardColor::RED(), CardType::FOUR()))->save();
        (new Card(CardColor::RED(), CardType::FIVE()))->save();
        (new Card(CardColor::RED(), CardType::SIX()))->save();
        (new Card(CardColor::RED(), CardType::SEVEN()))->save();
        (new Card(CardColor::RED(), CardType::EIGHT()))->save();
        (new Card(CardColor::RED(), CardType::NINE()))->save();
        (new Card(CardColor::RED(), CardType::REVERSE()))->save();
        (new Card(CardColor::RED(), CardType::DRAW()))->save();
        (new Card(CardColor::RED(), CardType::SKIP()))->save();
        (new Card(CardColor::YELLOW(), CardType::ZERO()))->save();
        (new Card(CardColor::YELLOW(), CardType::ONE()))->save();
        (new Card(CardColor::YELLOW(), CardType::TWO()))->save();
        (new Card(CardColor::YELLOW(), CardType::THREE()))->save();
        (new Card(CardColor::YELLOW(), CardType::FOUR()))->save();
        (new Card(CardColor::YELLOW(), CardType::FIVE()))->save();
        (new Card(CardColor::YELLOW(), CardType::SIX()))->save();
        (new Card(CardColor::YELLOW(), CardType::SEVEN()))->save();
        (new Card(CardColor::YELLOW(), CardType::EIGHT()))->save();
        (new Card(CardColor::YELLOW(), CardType::NINE()))->save();
        (new Card(CardColor::YELLOW(), CardType::REVERSE()))->save();
        (new Card(CardColor::YELLOW(), CardType::DRAW()))->save();
        (new Card(CardColor::YELLOW(), CardType::SKIP()))->save();
        (new Card(CardColor::GREEN(), CardType::ZERO()))->save();
        (new Card(CardColor::GREEN(), CardType::ONE()))->save();
        (new Card(CardColor::GREEN(), CardType::TWO()))->save();
        (new Card(CardColor::GREEN(), CardType::THREE()))->save();
        (new Card(CardColor::GREEN(), CardType::FOUR()))->save();
        (new Card(CardColor::GREEN(), CardType::FIVE()))->save();
        (new Card(CardColor::GREEN(), CardType::SIX()))->save();
        (new Card(CardColor::GREEN(), CardType::SEVEN()))->save();
        (new Card(CardColor::GREEN(), CardType::EIGHT()))->save();
        (new Card(CardColor::GREEN(), CardType::NINE()))->save();
        (new Card(CardColor::GREEN(), CardType::REVERSE()))->save();
        (new Card(CardColor::GREEN(), CardType::DRAW()))->save();
        (new Card(CardColor::GREEN(), CardType::SKIP()))->save();
        (new Card(CardColor::BLUE(), CardType::ZERO()))->save();
        (new Card(CardColor::BLUE(), CardType::ONE()))->save();
        (new Card(CardColor::BLUE(), CardType::TWO()))->save();
        (new Card(CardColor::BLUE(), CardType::THREE()))->save();
        (new Card(CardColor::BLUE(), CardType::FOUR()))->save();
        (new Card(CardColor::BLUE(), CardType::FIVE()))->save();
        (new Card(CardColor::BLUE(), CardType::SIX()))->save();
        (new Card(CardColor::BLUE(), CardType::SEVEN()))->save();
        (new Card(CardColor::BLUE(), CardType::EIGHT()))->save();
        (new Card(CardColor::BLUE(), CardType::NINE()))->save();
        (new Card(CardColor::BLUE(), CardType::REVERSE()))->save();
        (new Card(CardColor::BLUE(), CardType::DRAW()))->save();
        (new Card(CardColor::BLUE(), CardType::SKIP()))->save();
        (new Card(CardColor::BLACK(), CardType::WILD()))->save();
        (new Card(CardColor::BLACK(), CardType::DRAW()))->save();
    }

    public function down() {
        Schema::dropIfExists('cards');
    }
}
