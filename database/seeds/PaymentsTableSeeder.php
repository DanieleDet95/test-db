<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Payment;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
          $new_payment = new Payment();
          $new_payment->type = rand(1, 3);
          $new_payment->user_id = rand(1, 12);
          $new_payment->save();
        }
    }
}
