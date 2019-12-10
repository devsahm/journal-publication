<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMregistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mregisters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('member_id');
            $table->string('email');
            $table->string('surname');
            $table->string('firstname');
            $table->string('othername');
            $table->string('title');
            $table->string('dob');
            $table->string('nationality');
            $table->string('state');
            $table->string('job_title');
            $table->text('employer');
            $table->string('correspondence');
            $table->string('home_address');
            $table->string('telephone');
            $table->string('business_nature');
            $table->string('work_nature');
            $table->string('psychology_field');
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
        Schema::dropIfExists('mregisters');
    }
}
