<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('firstVisit');
            $table->string('appointmentSubject');
            $table->string('appointmentDate');
            $table->string('mostPreferTime');
            $table->string('lessPreferTime');
            $table->string('status');
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
        Schema::dropIfExists('appointment');
    }
};
