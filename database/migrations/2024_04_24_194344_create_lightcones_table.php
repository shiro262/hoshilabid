<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lightcones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('path');
            $table->string('rarity');
            $table->longText('detail');
            $table->string('stats');
            $table->string('source');
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
        Schema::dropIfExists('lightcones');
    }
};
