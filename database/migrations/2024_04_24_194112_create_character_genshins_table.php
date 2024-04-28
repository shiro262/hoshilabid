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
        Schema::create('character_genshins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('element');
            $table->string('role');
            $table->longText('detail');
            $table->string('rarity');
            $table->string('tier');
            $table->foreignId('weapon_sign_genshin_id');
            $table->foreignId('weapon_alt1_genshin_id');
            $table->foreignId('weapon_alt2_genshin_id');
            $table->foreignId('artifact_opt1_id');
            $table->foreignId('artifact_opt2_id');
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
        Schema::dropIfExists('character_genshins');
    }
};
