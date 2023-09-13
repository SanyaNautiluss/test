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
        Schema::create('result_questions_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('result_question_id');
            $table->unsignedBigInteger('answer_id');
            $table->foreign('result_question_id')->references('id')->on('result_questions');
            $table->foreign('answer_id')->references('id')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_questions_answers');
    }
};