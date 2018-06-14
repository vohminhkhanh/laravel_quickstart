<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TaskTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('tasks')->insert([
                'name' => $faker->name,
            ]);
        }
    }
}
