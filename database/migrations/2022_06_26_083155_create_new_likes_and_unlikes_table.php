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
        Schema::create('new_likes_and_unlikes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id');
            $table->string('likes_and_unlikes')->comment = '1 is likes and 0 is unlikes';
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
        Schema::dropIfExists('new_likes_and_unlikes');
    }
};
