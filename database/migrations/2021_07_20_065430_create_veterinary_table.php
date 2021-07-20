<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeterinaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veterinary', function (Blueprint $table) {
            $table->integer('vet_id', true);
            $table->string('vet_fname', 225);
            $table->string('vet_lname', 225);
            $table->string('vet_mname', 225);
            $table->bigInteger('vet_mobile');
            $table->bigInteger('vet_tel');
            $table->date('vet_birthday')->nullable();
            $table->binary('vet_DP')->nullable();
            $table->string('vet_blk', 100)->nullable();
            $table->string('vet_street', 100);
            $table->string('vet_subdivision', 100)->nullable();
            $table->string('vet_barangay', 100);
            $table->string('vet_city', 100);
            $table->integer('vet_zip');
            $table->date('vet_dateAdded')->nullable();
            $table->integer('clinic_id')->index('clinic_id');
            $table->integer('user_id')->index('user_id');
            $table->tinyInteger('vet_isActive')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veterinary');
    }
}
