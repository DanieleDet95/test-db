<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Highlight;

class HighlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $times = [
          24,
          72,
          144,
        ];

        for ($i=0; $i < 10; $i++) {
          $new_highlight = new Highlight();
          $new_highlight->id = $i + 1;
          $new_highlight->duration = $times[rand(0,2)];
          $new_highlight->expire = $faker->dateTime();
          $new_highlight->suite_id = rand(1, 23);
          $new_highlight->payment_id = rand(1, 10);
          $new_highlight->save();
        }
    }
}
