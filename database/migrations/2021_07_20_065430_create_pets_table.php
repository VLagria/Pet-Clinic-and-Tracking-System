<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->integer('pet_id', true);
            $table->string('pet_name', 225);
            $table->string('pet_gender', 15)->nullable();
            $table->date('pet_birthday')->nullable();
            $table->string('pet_notes', 300);
            $table->string('pet_bloodType', 100);
            $table->binary('pet_DP')->nullable();
            $table->date('pet_registeredDate')->nullable();
            $table->integer('pet_type_id')->index('pet_type_id');
            $table->integer('pet_breed_id')->index('pet_breed_id');
            $table->integer('customer_id')->index('customer_id');
            $table->integer('clinic_id')->index('clinic_id');
            $table->tinyInteger('pet_isActive')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
