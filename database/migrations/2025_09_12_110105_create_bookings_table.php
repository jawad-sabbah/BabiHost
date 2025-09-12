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
        Schema::create('bookings', function (Blueprint $table) {
             $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('room_id');
        $table->integer('total_price');
        $table->date('check_in');
        $table->date('check_out');
        $table->string('status')->default('pending');
        $table->timestamps();

        $table->foreign('user_id')->references('user_id')->on('_users')->onDelete('cascade');
        $table->foreign('room_id')->references('room_id')->on('rooms')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
