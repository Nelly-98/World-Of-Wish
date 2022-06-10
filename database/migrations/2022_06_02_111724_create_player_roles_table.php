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
        Schema::create('player_roles', function (Blueprint $table) {
            $table->id();
            $table->enum('player_class', ['warrior', 'wizard', 'archer', 'priest', 'druid']);
            $table->tinyInteger('health');
            $table->string('weapon')->nullable();
            $table->tinyInteger('attack')->nullable();
            $table->foreignId('player_id')->constrained('players')->onDelete('cascade');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('player_roles', function (Blueprint $table) {
            $table->dropConstrainedForeignId("player_id");
        });
        Schema::dropIfExists('player_roles');
    }
};
