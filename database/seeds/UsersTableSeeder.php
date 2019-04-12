<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;

class UsersTableSeeder extends Seeder
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



        foreach(range(1,5) as $index)

        {

            User::create([

                'name' => $faker->userName,

                'email' =>$faker->email,

                'password' =>bcrypt('secret')

            ]);

        }
    }
}
