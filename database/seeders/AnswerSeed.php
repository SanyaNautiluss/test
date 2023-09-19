<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Question;
use Illuminate\Database\Seeder;

class AnswerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $questions = Question::all();

        foreach ($questions as $question) {
            $correctAnswers = [];
            
            // Generate two unique correct answer indices between 1 and 4
            while (count($correctAnswers) < 2) {
                $correctAnswer = rand(1, 4);
                if (!in_array($correctAnswer, $correctAnswers)) {
                    $correctAnswers[] = $correctAnswer;
                }
            }

            foreach (range(1, 4) as $index) {
                $question->answers()->create([
                    'answer' => $faker->unique()->word,
                    'is_correct' => in_array($index, $correctAnswers) ? 1 : 0,
                ]);
            }
        }
    }
}
