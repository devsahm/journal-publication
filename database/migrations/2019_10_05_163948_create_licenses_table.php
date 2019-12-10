<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('surname');
            $table->string('firstname');
            $table->string('othername');
            $table->string('title');
            $table->string('dob');
            $table->string('nationality');
            $table->string('state')->nullabel();
            $table->string('business_name');
            $table->string('business_address');
            $table->string('telephone');
            $table->string('email');
            $table->string('job_title');
            $table->string('registration');
            $table->string('workshop');
            $table->string('cerficate');
            $table->string('passport');
            $table->string('evidence');
            $table->string('payment');
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
        Schema::dropIfExists('licenses');
    }
}
