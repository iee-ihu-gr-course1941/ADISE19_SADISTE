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
    }

    public function down() {
        Schema::dropIfExists('cards');
    }
}
