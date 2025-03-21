<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song; // ✅ Import the Song model

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::with('mood')->get(); // ✅ Eager load moods
        return view('songs.index', compact('songs'));
    }
}
