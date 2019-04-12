<?php

use App\Joke;
use Faker\Factory;
use Illuminate\Database\Seeder;

class JokesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();



        foreach(range(1,30) as $index)

        {

            Joke::create([

                'body' => $faker->paragraph($nbSentences = 3),

                'user_id' =>$faker->numberBetween($min = 1, $max = 5)

            ]);

        }
    }
}
