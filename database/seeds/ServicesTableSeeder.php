<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 23; $i++) {
          $new_service = new Service();
          $new_service->pool = $faker->boolean();
          $new_service->wifi = $faker->boolean();
          $new_service->pet = $faker->boolean();
          $new_service->parking = $faker->boolean();
          $new_service->pianoforte = $faker->boolean();
          $new_service->sauna = $faker->boolean();
          $new_service->suite_id = $i + 1;
          $new_service->save();
        }
    }
}
