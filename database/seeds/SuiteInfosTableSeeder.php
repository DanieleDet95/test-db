<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\SuiteInfo;

class SuiteInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 23; $i++) {
          $new_sinfo = new SuiteInfo();
          $new_sinfo->address = $faker->address;
          $new_sinfo->rooms = rand(1, 5);
          $new_sinfo->beds = rand(1, 10);
          $new_sinfo->baths = rand(1, 3);
          $new_sinfo->square_m = rand(10, 200);
          $new_sinfo->price = $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 9999.99);
          $new_sinfo->description = $faker->text(3000);
          $new_sinfo->suite_id = $i + 1;
          $new_sinfo->save();
        }
    }
}
