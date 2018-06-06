<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
        	['artist' => 'Bob Marley', 'title' => 'No Woman No Cry', 'url' => 'https://www.youtube.com/watch?v=x59kS2AOrGM'],
        	['artist' => 'Bob Marley', 'title' => 'Three Little Birds', 'url' => 'https://www.youtube.com/watch?v=LanCLS_hIo4'],
        	['artist' => 'Dire Straits', 'title' => 'Sultans of Swing', 'url' => 'https://www.youtube.com/watch?v=l5Zpmaz2OKE'],
        	['artist' => 'Nas', 'title' => 'N.Y. State Of Mind', 'url' => 'https://www.youtube.com/watch?v=hI8A14Qcv68'],
        	['artist' => 'Mobb Deep', 'title' => 'Shook Ones PT 2', 'url' => 'https://www.youtube.com/watch?v=0NUX4tW5pps'],
        ]);
    }
}
