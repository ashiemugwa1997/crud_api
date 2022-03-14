<?php

namespace Database\Seeders;

use App\Models\uZer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class uZerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        uZer::truncate();

        $faker = \Faker\Factory::create();


        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++)
        {
            uZer::create([
                'email'=>$faker->email,
                'password'=>$faker->password,
                'user_name'=>$faker->name,
                'first_name'=>$faker->name,
                'last_name'=>$faker->name,
            ]);
        }
    }
}
