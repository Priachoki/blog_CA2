<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoodSeeder extends Seeder
{
    public function run()
    {
        DB::table('moods')->insert([
            ['mood_name' => 'Happy'],
            ['mood_name' => 'Sad'],
            ['mood_name' => 'Motivated'],
            ['mood_name' => 'Relaxed'],
            ['mood_name' => 'Energetic'],
        ]);
    }
}
