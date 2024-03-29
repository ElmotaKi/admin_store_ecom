<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_color_size', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_size_id')->unsigned(); // Corrected column name
            $table->foreign('product_size_id')->references('id')->on('product_size');
            $table->integer('product_color_id')->unsigned(); // Corrected column name
            $table->foreign('product_color_id')->references('id')->on('product_color');
            $table->integer('quantity');
            $table->decimal('prix-tow',10,2)->nullable();
            $table->decimal('descounte',10,2)->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_color_size');
    }
};
