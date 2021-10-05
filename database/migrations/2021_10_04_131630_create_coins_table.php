<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('symbol');
            $table->text('description');
            $table->string('logo');
            $table->string('price');
            $table->string('market_cap');
            $table->dateTime('launch_date');
            $table->boolean('is_presale');
            $table->string('binance_smart_chain');
            $table->string('ethereum');
            $table->string('solana');
            $table->string('polygon');
            $table->string('website');
            $table->string('telegram');
            $table->string('telegram');
            $table->text('additional_info');
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
        Schema::dropIfExists('coins');
    }
}
