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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('id_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('address')->nullable();
            $table->boolean('consent')->nullable(); // true for 'Ya', false for 'Tidak'
            $table->string('tiktok_creative')->nullable();
            $table->string('tiktok_jernih')->nullable();
            $table->string('ig_creative')->nullable();
            $table->string('ig_jernih')->nullable();
            $table->string('status')->default('Pending'); // 'Consented', 'Pending', 'Declined'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
