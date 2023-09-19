<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Test;
use Illuminate\Database\Seeder;

class CategorySeedPivot extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();
        $tests = Test::pluck('id')->toArray();

        foreach ($categories as $category) {
            // Generate a random number of tests to sync (between 1 and 5)
            $numberOfTests = rand(1, 5);
            
            // Shuffle the $tests array randomly
            shuffle($tests);

            // Select the first $numberOfTests from the shuffled array
            $selectedTests = array_slice($tests, 0, $numberOfTests);

            // Sync the selected tests to the category
            $category->tests()->sync($selectedTests);
        }
    }
}
