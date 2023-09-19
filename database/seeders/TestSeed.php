<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Test;
use Illuminate\Database\Seeder;

class TestSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach(range(1,5) as $id)
        {
            Test::insert([
                'id' => $id,
                'name' => $faker->sentence(1)
            ]);
        }
    }
}
