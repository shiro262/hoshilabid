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
        Schema::create('valkryies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('element');
            $table->string('role');
            $table->longText('detail');
            $table->string('rarity');
            $table->string('tier');
            $table->foreignId('weapon_sign_hi3_id');
            $table->foreignId('weapon_alt1_hi3_id');
            $table->foreignId('weapon_alt2_hi3_id');
            $table->foreignId('stigmata_sign_id');
            $table->foreignId('stigmata_alt_id');
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
        Schema::dropIfExists('valkryies');
    }
};
