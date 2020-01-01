<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum(
                'color',
                array(
                    'red',
                    'yellow',
                    'green',
                    'blue',
                    'black'
                )
            );
            $table->enum(
                'type',
                array(
                    'zero',
                    'one',
                    'two',
                    'three',
                    'four',
                    'five',
                    'six',
                    'seven',
                    'eight',
                    'nine',
                    'reverse',
                    'draw',
                    'skip',
                    'wild'
                )
            );
        });
    }

    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
