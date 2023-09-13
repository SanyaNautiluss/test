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
        Schema::create('start_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('test_id');
            $table->string('user_name')->nullable();
            $table->integer('total_points')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('start_results');
    }
};