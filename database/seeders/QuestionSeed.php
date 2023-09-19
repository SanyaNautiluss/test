<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Test;
use Illuminate\Database\Seeder;

class QuestionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $tests = Test::all();

        foreach ($tests as $test) {
            $numberOfQuestions = rand(5, 10); // Generate a random number between 5 and 10
            foreach (range(1, $numberOfQuestions) as $index) {
                $test->questions()->create([
                    'question_text' => $faker->sentence(4)
                ]);
            }
        }
    }
}
