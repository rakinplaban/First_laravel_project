<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockMarkets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockmarkets', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('trade_code');
            $table->float('open',3,2);
            $table->float('close',3,2);
            $table->float('high',3,2);
            $table->float('low',3,2);
            $table->decimal('volume',20);
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
        Schema::drop('stockmarkets');
    }
}
