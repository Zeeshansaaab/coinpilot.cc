<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nfts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->decimal('price');
            $table->string('chain');
            $table->boolean('isnft');
            $table->string('address');
            $table->string('artist_link');
            $table->string('artist_name');
            $table->dateTime('launch_date');
            $table->string('telegram');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('discord');
            $table->text('description');
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
        Schema::dropIfExists('nfts');
    }
}
