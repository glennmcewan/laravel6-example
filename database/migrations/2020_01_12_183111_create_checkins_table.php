<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->references('id')->on('users');
            // TODO: add drink_id reference later
            // $table->string('drink_id')->references('id')->on('drinks');
            $table->string('measure_id')->references('id')->on('measures');
            $table->string('serving_style_id')->references('id')->on('serving_styles');
            $table->float('rating');
            $table->string('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkins');
    }
}
