<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_adresse', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_adress_id');
 
            $table->foreign('user_adress_id')->references('id')->on('users');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('postal-code');
            $table->string('phone');
            $table->string('email');
            $table->string('name');
            $table->string('username');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_adresse');
    }
};
