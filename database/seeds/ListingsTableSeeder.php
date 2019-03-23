<?php

use Illuminate\Database\Seeder;
use App\Listing;
use Faker\Factory as Faker;
use Illuminate\Support\Str;


class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $faker = Faker::create();
            $limit = 50;
            for ($i = 0; $i < $limit; $i++) {
                Listing::create([
                    'user_id' => $faker->numberBetween($min = 1, $max = 5),
                    'name' => $faker->company,
                    'address' => $faker->address,
                    'website' => $faker->url,
                    'email' => $faker->email,
                    'phone' => $faker->phoneNumber,
                    'bio' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),

                ]);
            }
	}
}