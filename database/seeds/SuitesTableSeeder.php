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
          $new_suite->save();


        }
    }
}
