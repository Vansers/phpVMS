<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAirlinesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airlines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 5);
            $table->string('iata', 3)->nullable();
            $table->string('name', 50);
            $table->string('country', 2)->nullable();
            $table->boolean('active');
            $table->timestamps();

            $table->index('code');
            $table->unique('code');

            $table->index('iata');
            $table->unique('iata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('airlines');
    }
}
