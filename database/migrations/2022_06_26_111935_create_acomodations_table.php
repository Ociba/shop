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
        Schema::create('acomodations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('property_size')->nullable();
            $table->string('bedroom')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('garage')->nullable();
            $table->string('location');
            $table->string('description')->nullable();
            $table->string('price');
            $table->string('discount')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('photo')->nullable();
            $table->string('property_status')->nullable();
            $table->enum('status', ['available', 'taken'])->default('available');
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
        Schema::dropIfExists('acomodations');
    }
};
