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

        $type = [
          24,
          72,
          144,
        ];
        $price = [
          2.99,
          5.99,
          9.99,
        ];

        for ($i=0; $i < 10; $i++) {
          $new_highlight = new Highlight();
          $num_random = rand(0,2);
          $new_highlight->id = $i + 1;
          $new_highlight->start = $faker->dateTime();
          $new_highlight->end = $faker->dateTime();
          $new_highlight->type = $type[$num_random];
          $new_highlight->price = $price[$num_random];
          $new_highlight->payment_id = rand(1, 10);
          $new_highlight->save();
        }
    }
}
