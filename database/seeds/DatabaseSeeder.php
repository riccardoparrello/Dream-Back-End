<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(Game1Seeder::class);
        $this->call(Game2Seeder::class);
        $this->call(Game3Seeder::class);
        $this->call(Game4Seeder::class);
        $this->call(Game5Seeder::class);
        $this->call(Game6Seeder::class);

    }
}
