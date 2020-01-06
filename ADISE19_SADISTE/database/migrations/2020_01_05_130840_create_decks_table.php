<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecksTable extends Migration {

    public function up() {
        Schema::create('decks', function (Blueprint $table) {
            $table->bigIncrements('id');
            // The cards column contains JSON-encoded arrays of foreign keys
            // pointing to the cards the deck currently has.
            $table->json('cards');
        });
    }

    public function down() {
        Schema::dropIfExists('decks');
    }
}
