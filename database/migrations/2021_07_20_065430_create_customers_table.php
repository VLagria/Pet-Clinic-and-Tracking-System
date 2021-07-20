<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->integer('customer_id', true);
            $table->string('customer_fname', 225);
            $table->string('customer_lname', 225);
            $table->string('customer_mname', 225);
            $table->bigInteger('customer_mobile');
            $table->bigInteger('customer_tel')->nullable();
            $table->string('customer_gender', 15)->nullable();
            $table->date('customer_birthday')->nullable();
            $table->binary('customer_DP')->nullable();
            $table->string('customer_blk', 100);
            $table->string('customer_street', 100);
            $table->string('customer_subdivision', 100)->nullable();
            $table->string('customer_barangay', 100);
            $table->string('customer_city', 100);
            $table->integer('customer_zip');
            $table->integer('user_id')->index('user_id');
            $table->tinyInteger('customer_isActive')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
