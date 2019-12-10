<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventngosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventngos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('ngo_id');
            $table->string('title');
            $table->string('slug');
            $table->string('date');
            $table->string('image');
            $table->string('location');
            $table->text('event_details');
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
        Schema::dropIfExists('eventngos');
    }
}
