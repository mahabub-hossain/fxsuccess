<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFxsignalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fxsignals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id');
            $table->integer('currency_id');
            $table->string('signal_type');
            $table->string('sig_time');
            $table->string('sig_valid');
            $table->string('take_profit');
            $table->string('at_type');
            $table->string('stop_loss');
            $table->string('image');
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
        Schema::dropIfExists('fxsignals');
    }
}
