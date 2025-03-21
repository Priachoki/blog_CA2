@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h1 class="text-3xl font-bold text-center mb-8">Moods & Songs</h1>

    @foreach ($moods as $mood)
        <div class="bg-gray-100 p-6 rounded-lg shadow-md mb-6">
            <!-- Mood Name -->
            <h2 class="text-2xl font-semibold text-gray-800">{{ $mood->mood_name }}</h2>
            
            <!-- Songs List -->
            @if($mood->songs->count() > 0)
                <ul class="mt-4 space-y-4">
                    @foreach ($mood->songs as $song)
                        <li class="border-b border-gray-300 pb-4">
                            <p class="text-lg font-bold text-gray-900">{{ $song->song_title }}</p>
                            <p class="text-gray-700">Album: {{ $song->album }}</p>
                            <a href="{{ $song->spotify_link }}" target="_blank" class="text-blue-600 hover:underline">Listen on Spotify</a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-500 mt-2">No songs available for this mood.</p>
            @endif
        </div>
    @endforeach
</div>
@endsection
