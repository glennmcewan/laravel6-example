<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeasuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('enabled')->default(1);
            $table->string('slug')->unique();
            $table->string('display_name');
            // TODO: add in a later migration...different measures for different drinks
            // $table->foreign('applicable_type');
            $table->timestamps();
            // TODO: add normalisation once applicable_type is enabled, i.e. 1/2 pint = 568ml
            // $table->int('normalised_value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('measures');
    }
}
