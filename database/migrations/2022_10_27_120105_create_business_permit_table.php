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
        Schema::create('business_permit', function (Blueprint $table) {
            $table->string('businesType');
            $table->string('dtiNo');
            $table->string('paymentMode');
            $table->string('applicationDate');
            $table->string('tin');
            $table->string('ammendFrom');
            $table->string('ammendTo');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('tradeName');
            $table->string('incentive');
            $table->string('businessAdd');
            $table->string('postalCode');
            $table->string('businessHotline');
            $table->string('ownerAdd');
            $table->string('ownerPostalCode');
            $table->string('ownerHotline');
            $table->string('contactPerson');
            $table->string('emergencyContact');
            $table->string('businessArea');
            $table->string('employeeTotal');
            $table->string('lessorName');
            $table->string('lessorAdd');
            $table->string('lessorPhone');
            $table->string('lessorEmail');
            $table->string('montlyRent');
            $table->string('filledupFile');
            $table->string('occupancyFile');
            $table->string('brgyClearanceFile');
            $table->string('sanitaryFile');
            $table->string('fireSafetyFile');
            $table->string('otherFile');
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
        Schema::dropIfExists('business_permit');
    }
};
