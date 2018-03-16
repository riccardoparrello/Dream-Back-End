<?php

use Illuminate\Database\Seeder;

class Game3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('games')->insert([
            'title' => "Test3",
            'description' => "Super awesome game awesome super",
            'points' => 1,
            'rating' => 1,
            'downloads' => 14,
            'game_picture' => "https://image.freepik.com/free-icon/table-tennis-racket-and-ping-pong-ball_318-35218.jpg",
            'game_files' => "https://image.freepik.com/free-icon/table-tennis-racket-and-ping-pong-ball_318-35218.jpg",
            'created_at' => "2018-03-02 01:01:01"
           
        ]);
    }
}
