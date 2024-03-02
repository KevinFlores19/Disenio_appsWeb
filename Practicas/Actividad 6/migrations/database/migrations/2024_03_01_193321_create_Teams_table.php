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
        Schema::create('Teams', function (Blueprint $table) {
            $table->id();
            $table->string ('Name',50)->unique();
            $table->string ('City',50)->nullable();
            $table->tinyInteger ('Titles')->default(0);
            $table->foreignId ('Logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Teams');
    }
};
