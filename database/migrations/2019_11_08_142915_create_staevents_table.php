<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaeventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staevents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('state_id');
            $table->string('image');
            $table->string('title');
            $table->string('date');
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
        Schema::dropIfExists('staevents');
    }
}
