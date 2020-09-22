<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
          [
                UsersTableSeeder::class,
                UserInfosTableSeeder::class,
                ServicesTableSeeder::class,
                SuitesTableSeeder::class,            
                PaymentsTableSeeder::class,
                HighlightsTableSeeder::class,
                ImagesTableSeeder::class,

          ]);
    }
}
