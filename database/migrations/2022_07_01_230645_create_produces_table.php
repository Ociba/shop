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
        Schema::create('produces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produce_category_id');
            $table->foreignId('created_by');
            $table->string('produce_name');
            $table->string('produce_type');
            $table->string('quantity');
            $table->string('price');
            $table->string('phone_number');
            $table->string('image');
            $table->string('description');
            $table->string('percentage_discount')->nullable();
            $table->string('new_amount')->nullable();
            $table->enum('status',['available', 'sold'])->default('available');
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
        Schema::dropIfExists('produces');
    }
};
