<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('Merchant', 50)->nullable();
            $table->string('Phone_Merchant', 50)->nullable();
            $table->string('Address', 50)->nullable();
            $table->string('Notee', 50)->nullable();
            $table->string('Creat By', 20)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('merchants');
    }
}
