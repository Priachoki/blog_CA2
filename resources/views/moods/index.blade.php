@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 py-12">
    <div class="container mx-auto px-6">
        <!-- Page Title -->
        <h1 class="text-3xl font-extrabold text-center text-gray-800 mb-10">
            🎶 Explore Music by Mood 🎵
        </h1>

        <div class="space-y-10">
            @foreach ($moods as $mood)
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <!-- Mood Title -->
                    <h2 class="text-2xl font-bold text-gray-700 border-b-2 border-gray-300 pb-2 mb-6">
                        🎭 {{ $mood->mood_name }}
                    </h2>

                    @if ($mood->songs->isNotEmpty())
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                            @foreach ($mood->songs as $song)
                                <div class="bg-gray-50 p-4 rounded-md shadow-sm hover:shadow-md transition duration-200">
                                    <p class="text-md font-semibold text-gray-800">
                                        🎵 {{ $song->song_title }}
                                        <span class="text-gray-500 text-sm"> - {{ $song->album }}</span>
                                    </p>

                                    @if ($song->spotify_embed)
                                        <div class="mt-3 rounded overflow-hidden">
                                            {!! $song->spotify_embed !!}
                                        </div>
                                    @else
                                        <p class="text-red-500 mt-2 text-sm">Embed not available</p>
                                    @endif

                                    <a href="{{ $song->spotify_link }}" target="_blank"
                                       class="inline-block mt-3 bg-gray-700 text-white text-sm px-4 py-1.5 rounded hover:bg-gray-800 transition">
                                        🎧 Listen on Spotify
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-500 italic">No songs available for this mood.</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
