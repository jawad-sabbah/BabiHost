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
        Schema::create('reviews', function (Blueprint $table) {
             $table->id('review_id');
        $table->unsignedBigInteger('property_id');
        $table->unsignedBigInteger('user_id');
        $table->integer('rating');
        $table->text('comment')->nullable();
        $table->timestamps();

        $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
        $table->foreign('user_id')->references('user_id')->on('_users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
