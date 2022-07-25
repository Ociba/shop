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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_category_id');
            $table->string('price');
            $table->string('number');
            $table->string('discount')->nullable();
            $table->string('new_price')->nullable();
            $table->text('description');
            $table->foreignId('created_by');
            $table->enum('status', ['active', 'out of stock', 'delivered'])->default('active');
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
        Schema::dropIfExists('shops');
    }
};
