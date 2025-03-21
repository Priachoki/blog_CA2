<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    
    protected $fillable = ['mood_id', 'song_title', 'album', 'spotify_link', 'spotify_embed'];

    public function mood()
    {
        return $this->belongsTo(Mood::class);
    }
}

