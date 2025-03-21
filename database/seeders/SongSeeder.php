<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    public function run()
    {
        DB::table('songs')->insert([
            ['mood_id' => 1, 'song_title' => 'Good Days', 'album' => 'SOS', 'spotify_link' => 'https://open.spotify.com/track/xyz'],
            ['mood_id' => 2, 'song_title' => 'Drew Barrymore', 'album' => 'Ctrl', 'spotify_link' => 'https://open.spotify.com/track/abc'],
            ['mood_id' => 3, 'song_title' => '20 Something', 'album' => 'Ctrl', 'spotify_link' => 'https://open.spotify.com/track/def'],
        ]);
    }
}
