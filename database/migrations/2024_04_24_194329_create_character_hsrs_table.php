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
        Schema::create('character_hsrs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('path');
            $table->string('element');
            $table->string('role');
            $table->longText('detail');
            $table->string('rarity');
            $table->string('tier_moc');
            $table->string('tier_pf');
            $table->foreignId('lightcone_sign_id');
            $table->foreignId('lightcone_alt1_id');
            $table->foreignId('lightcone_alt2_id');
            $table->foreignId('relic_opt1_id');
            $table->foreignId('relic_opt2_id');
            $table->foreignId('planar_opt1_id');
            $table->foreignId('planar_opt2_id');
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
        Schema::dropIfExists('character_hsrs');
    }
};
