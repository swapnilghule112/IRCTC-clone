<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_details', function (Blueprint $table) {
            $table->string('train_name' , 100);
            $table->integer('train_number' , 100);
            $table->string('source', 100);
            $table->string('destination', 100);
            $table->date('date');
            $table->time('time');
            $table->integer('AC');
            $table->integer('Sleeper');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train_details');
    }
}
