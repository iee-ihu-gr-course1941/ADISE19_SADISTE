<?php

use App\Enum\CardColor;
use App\Enum\CardType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration {
    public function up() {
        Schema::create('cards', function (Blueprint $table) {
            $table->bigIncrements('id');

            $colorsIterator = CardColor::getIterator();
            $colors = [];

            foreach ($colorsIterator as $key => $value) {
                array_push($colors, $key);
            }

            $table->enum('color', $colors);

            $typeIterator = CardType::getIterator();
            $types = [];

            foreach ($typeIterator as $key => $value) {
                array_push($types, $key);
            }

            $table->enum('type', $types);
        });
    }

    public function down() {
        Schema::dropIfExists('cards');
    }
}
