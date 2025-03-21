<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mood;

class MoodController extends Controller
{
    public function index()
    {
        $moods = Mood::with('songs')->get(); 
        return view('moods.index', compact('moods'));
    }

    public function getSongs(Request $request)
{
    $mood = Mood::where('mood_name', $request->mood)->with('songs')->first();

    if ($mood) {
        return response()->json($mood->songs);
    } else {
        return response()->json(['error' => 'Mood not found'], 404);
    }
}

}
