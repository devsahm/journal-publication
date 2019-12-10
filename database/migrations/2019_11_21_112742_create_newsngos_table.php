<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsngosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsngos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('ngo_id');
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->text('news_details');
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
        Schema::dropIfExists('newsngos');
    }
}
