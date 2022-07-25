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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by');
            $table->string('equipment');
            $table->string('quantity');
            $table->string('price');
            $table->string('description');
            $table->string('discount_amount')->nullable();
            $table->string('equipment_discount')->nullable();
            $table->string('photo');
            $table->enum('status', ['active', 'taken', 'out of stock'])->default('active');
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
        Schema::dropIfExists('equipment');
    }
};
