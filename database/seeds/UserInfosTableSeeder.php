<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\UserInfo;

class UserInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 12; $i++) {
        $new_uinfos = new UserInfo();

        $new_uinfos->user_id = $i+1;
        $new_uinfos->name = $faker->name;
        $new_uinfos->lastname = $faker->name;
        $new_uinfos->birthday = $faker->dateTime();
        $new_uinfos->save();
      }
    }
}
