@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-10">
    <h1 class="text-3xl font-extrabold text-center text-gray-900 mb-6">🎵 Moods & Songs 🎶</h1>

    <div class="space-y-8">
        @foreach ($moods as $mood)
            <div class="bg-white p-6 rounded-lg shadow-md">
                <!-- Mood Title -->
                <h2 class="text-2xl font-bold text-gray-800 mb-4">🟢 {{ $mood->mood_name }}</h2>

                <!-- Check if Songs Exist -->
                @if ($mood->songs->isNotEmpty())
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($mood->songs as $song)
                            <div class="bg-gray-100 p-4 rounded-lg shadow">
                                <p class="text-lg font-semibold text-gray-700">
                                    🎶 {{ $song->song_title }} - <span class="text-gray-500">{{ $song->album }}</span>
                                </p>

                                <!-- Spotify Embed -->
                                @if ($song->spotify_embed)
                                    <div class="mt-3">
                                        {!! $song->spotify_embed !!}
                                    </div>
                                @else
                                    <p class="text-red-500 mt-2">Spotify embed not available</p>
                                @endif

                                <!-- Listen on Spotify Button -->
                                <a href="{{ $song->spotify_link }}" target="_blank"
                                   class="inline-block mt-4 bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                                    🎧 Listen on Spotify
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500">No songs available for this mood.</p>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection
