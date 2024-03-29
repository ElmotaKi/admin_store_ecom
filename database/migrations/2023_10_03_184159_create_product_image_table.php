<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_image', function (Blueprint $table) {
            $table->id();
            $table->integer('product_color_size_id')->unsigned();
            $table->foreign('product_color_size_id')->references('id')->on('product_color_size');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_image');
    }
};

