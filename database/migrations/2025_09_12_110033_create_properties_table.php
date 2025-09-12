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
        Schema::create('properties', function (Blueprint $table) {
           $table->id();
        $table->unsignedBigInteger('host_id');
        $table->string('name');
        $table->text('description')->nullable();
        $table->string('type');
        $table->string('city');
        $table->string('address');
        $table->string('status')->default('active');
        $table->timestamps();

        $table->foreign('host_id')->references('id')->on('hosts')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
