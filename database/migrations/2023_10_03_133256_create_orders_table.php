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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('order_id');
 
            $table->foreign('order_id')->references('id')->on('users');
            $table->integer('status')->default(0);
            $table->string('paymend-method');
            $table->string('paymend-id');
            $table->string('total-prix');
            $table->string('address');
            $table->string('email');
            $table->string('name');
            $table->string('username');
            $table->string('city');
            $table->string('postal-code');
            $table->string('contry');
            $table->string('phone');
            $table->string('shoping-prix');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
