<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $faker = Faker::create();
        for($i = 0; $i < 6; $i++){
            $data[] = [
                "image" => $faker->imageUrl(),
                "title" => $faker->word,
                "subtitle" => $faker->word,
                "description" => $faker->sentence(2),
            ];
        }

        \DB::table('cards')->insert($data);
    }
}
