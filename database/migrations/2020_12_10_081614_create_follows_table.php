<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Container', 50)->nullable();
            $table->date('Arrival_Date')->nullable();
            $table->date('Due_date')->nullable();
            $table->string('Berth', 50)->nullable();

            $table->string('Size', 20)->nullable();
            $table->string('Line', 20)->nullable();
            $table->string('Merchant',20)->nullable();
             $table->text('note_shreh')->nullable();

             $table->string('Name_Dri')->nullable();
              $table->string('phone_Dri')->nullable();
             $table->string('No_Car')->nullable();

             $table->string('Name_stor')->nullable();
             $table->string('phone_stor')->nullable();

             $table->string('oajba')->nullable();

             $table->date('load_date')->nullable();
             $table->date('export_date')->nullable();
             $table->date('end_exp_date')->nullable();


            $table->string('section')->nullable();
            $table->string('notee')->nullable();
          $table->text('user')->nullable();

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
        Schema::dropIfExists('follows');
    }
}
