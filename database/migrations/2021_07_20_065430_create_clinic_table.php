<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic', function (Blueprint $table) {
            $table->integer('clinic_id', true);
            $table->string('clinic_name', 225);
            $table->string('owner_name', 225);
            $table->bigInteger('clinic_mobile');
            $table->string('clinic_email', 225);
            $table->bigInteger('clinic_tel')->nullable();
            $table->string('clinic_blk', 100);
            $table->string('clinic_street', 100);
            $table->string('clinic_barangay', 100);
            $table->string('clinic_city', 100);
            $table->integer('clinic_zip');
            $table->tinyInteger('clinic_isActive')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinic');
    }
}
