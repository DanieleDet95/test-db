<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Suite;

class SuitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 23; $i++) {
          $new_suite = new Suite();

          $new_suite->user_id = rand(1,12);
          $new_suite->title = $faker->word;
          $new_suite->address = $faker->address;
          $new_suite->rooms = rand(1, 5);
          $new_suite->beds = rand(1, 10);
          $new_suite->baths = rand(1, 3);
          $new_suite->square_m = rand(10, 200);
          $new_suite->latitude = rand(-90, 90);
          $new_suite->longitude = rand(-180, 180);
          $new_suite->price = $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 9999.99);
          $new_suite->description = $faker->text(3000);
          $new_suite->main_image = $faker->imageUrl($width = 150, $height = 100);
          $new_suite->save();

          $new_suite->services()->attach(rand(1,6));
        }
    }
}
