<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailssesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailsses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Container', 50);
            $table->date('Arrival_Date')->nullable();
            $table->date('Due_date')->nullable();
            $table->string('Berth', 50)->nullable();
            $table->string('section')->nullable();
            $table->string('Size', 20)->nullable();
            $table->string('Line', 20)->nullable();
            $table->string('Merchant',20)->nullable();
            $table->string('Name_emp', 20)->nullable();
            $table->text('note')->nullable();



            $table->string('Creat By', 20)->nullable();

            $table->string('user')->nullable();
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
        Schema::dropIfExists('detailsses');
    }
}
