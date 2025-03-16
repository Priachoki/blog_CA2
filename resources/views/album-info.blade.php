@extends('layouts.app')

@section('content')

<div class="w-4/5 mx-auto py-10">
    <!-- Album Title -->
    <h1 class="text-5xl font-extrabold text-center italic text-purple-700">
        {{ ucfirst($album) }} Album Info
    </h1>

    @php
        $albums = [
            'LANA' => [
                'image' => 'https://i.scdn.co/image/ab67616d00001e02209356748e67773a69774a02',
                'release' => 'October 20, 2023',
                'description' => 'A deluxe edition featuring unreleased tracks and remixes from SZA\'s vault.',
                'tracks' => [
                    ['title' => 'No More Hiding', 'spotify' => 'https://open.spotify.com/embed/track/6gofCueySlBTKWFkOntP2F'],
                    ['title' => 'What Do I Do', 'spotify' => 'https://open.spotify.com/embed/track/5Wl7p7TylkA7Kec3HV0i5b'],
                    ['title' => '30 for 30 (with Kendrick Lamar)', 'spotify' => 'https://open.spotify.com/embed/track/3rXZ1j7QTXphBCavJDBZXz'],
                    ['title' => 'Diamond Boy (DTM)', 'spotify' => 'https://open.spotify.com/embed/track/2kwtmk3MEM1rJ2ROBlDPJm'],
                    ['title' => 'BMF', 'spotify' => 'https://open.spotify.com/embed/track/6uhsCywVYs0A9wWf0IE81N'],
                    ['title' => 'Scorsese Baby Daddy', 'spotify' => 'https://open.spotify.com/embed/track/1TmxBpnOfi6Qo76EubG57l'],
                    ['title' => 'Love Me 4 Me', 'spotify' => 'https://open.spotify.com/embed/track/0ubNlPTaQkfNWkFO9Q9MOt'],
                    ['title' => 'Chill Baby', 'spotify' => 'https://open.spotify.com/embed/track/0ubNlPTaQkfNWkFO9Q9MOt'],
                    ['title' => 'My Turn', 'spotify' => 'https://open.spotify.com/embed/track/0ubNlPTaQkfNWkFO9Q9MOt'],
                    ['title' => 'Crybaby', 'spotify' => 'https://open.spotify.com/embed/track/0ubNlPTaQkfNWkFO9Q9MOt'],
                    ['title' => 'Kitchen', 'spotify' => 'https://open.spotify.com/embed/track/31tVhNpdfsOhZKDhNXul7k'],
                    ['title' => 'Get Behind Me (Interlude)', 'spotify' => 'https://open.spotify.com/embed/track/7BidXxXMEtU3eUM2026i2p'],
                    ['title' => 'Drive', 'spotify' => 'https://open.spotify.com/embed/track/2xCb1jIzhLMm8DYcAVK6UY'],
                    ['title' => 'Another Life', 'spotify' => 'https://open.spotify.com/embed/track/6YDeZ8E4Sq63omeicaKbgS'],
                    ['title' => 'Saturn', 'spotify' => 'https://open.spotify.com/embed/track/63VqnjTVYJiwVoUm0OCdy6'],
                    ['title' => 'Joni (feat. Don Toliver)', 'spotify' => 'https://open.spotify.com/embed/track/5Hi7mKvhNYvk4PIURtuY42'],
                    ['title' => 'Take You Down', 'spotify' => 'https://open.spotify.com/embed/track/0sbjvSYXqzLiMPID9FPYjL'],
                    ['title' => 'Open Arms (Just SZA)', 'spotify' => 'https://open.spotify.com/embed/track/0uQHm4CLatNbvDFHt1Ystl'],
                    ['title' => 'PSA', 'spotify' => 'https://open.spotify.com/embed/track/0IrFjSpWJzYsZ9UeZxqdgt']
                ]
            ],
            'Ctrl' => [
                'image' => 'https://upload.wikimedia.org/wikipedia/en/b/bf/SZA_-_Ctrl_cover.png',
                'release' => 'June 9, 2017',
                'description' => 'SZA\'s debut studio album, featuring hits like "Love Galore" and "The Weekend."',
                'tracks' => [
                    ['title' => 'Supermodel', 'spotify' => 'https://open.spotify.com/embed/track/5wTVNpi5WDByxBgKgUE6MU'],
                    ['title' => 'Love Galore (feat. Travis Scott)', 'spotify' => 'https://open.spotify.com/embed/track/0q75NwOoFiARAVp4EXU4Bs'],
                    ['title' => 'Doves in the Wind (feat. Kendrick Lamar)', 'spotify' => 'https://open.spotify.com/embed/track/593W4qZOwwdqF6YnimJjL6'],
                    ['title' => 'Drew Barrymore', 'spotify' => 'https://open.spotify.com/embed/track/06u5LrUpbosQlQ1QJFhPpG'],
                    ['title' => 'Prom', 'spotify' => 'https://open.spotify.com/embed/track/5yvhdo8FXbBsIllxv2Rr94'],
                    ['title' => 'The Weekend', 'spotify' => 'https://open.spotify.com/embed/track/5yvhdo8FXbBsIllxv2Rr94'],
                    ['title' => 'Garden (Say It Like Dat)', 'spotify' => 'https://open.spotify.com/embed/track/19woxaSpjOefa2JnAOoqW5'],
                    ['title' => 'Broken Clocks', 'spotify' => 'https://open.spotify.com/embed/track/2fXwCWkh6YG5zU1IyvQrbs'],
                    ['title' => 'Anything', 'spotify' => 'https://open.spotify.com/embed/track/0336UwEBwBBao8uWCuugYr?utm_source=generator'],
        ['title' => 'Wavy', 'spotify' => 'https://open.spotify.com/embed/track/3LcoHjgdNl4xtWVaJGSA1p?utm_source=generator'],
        ['title' => 'Normal Girl', 'spotify' => 'https://open.spotify.com/embed/track/5fQBa4wkmq28xpSLOQ202K?utm_source=generator'],
        ['title' => 'Pretty Little Birds (feat. Isaiah Rashad)', 'spotify' => 'https://open.spotify.com/embed/track/1IgePMOW0qEe1AViWgkal9?utm_source=generator'],
        ['title' => '20 Something', 'spotify' => 'https://open.spotify.com/embed/track/4h6ViRoztTBpWcJ1zFT9Zg?utm_source=generator']
                ]
],
            'SOS' => [
    'image' => 'https://media.pitchfork.com/photos/638902d5f777c8e284615da3/1:1/w_1500,h_1500,c_limit/SZA.jpg',
    'release' => 'December 9, 2022',
    'description' => 'SZA\'s second studio album, featuring "Good Days" and "I Hate U."',
    'tracks' => [
        ['title' => 'SOS', 'spotify' => 'https://open.spotify.com/embed/track/5xMw6qCcpd2gBXPGTegC4W'],
        ['title' => 'Kill Bill', 'spotify' => 'https://open.spotify.com/embed/track/3OHfY25tqY28d16oZczHc8'],
        ['title' => 'Seek & Destroy', 'spotify' => 'https://open.spotify.com/embed/track/6eT2V7nKXyMf47TwPbtgAD'],
        ['title' => 'Low', 'spotify' => 'https://open.spotify.com/embed/track/2GAhgAjOhEmItWLfgisyOn'],
        ['title' => 'Love Language', 'spotify' => 'https://open.spotify.com/embed/track/1eIXYZWEfJO3Na2LCCnIJE'],
        ['title' => 'Blind', 'spotify' => 'https://open.spotify.com/embed/track/2CSRrnOEELmhpq8iaAi9cd'],
        ['title' => 'Used', 'spotify' => 'https://open.spotify.com/embed/track/1TweDM3JC49LNeelLVg3yX'],
        ['title' => 'Snooze', 'spotify' => 'https://open.spotify.com/embed/track/4iZ4pt7kvcaH6Yo8UoZ4s2'],
        ['title' => 'Notice Me', 'spotify' => 'https://open.spotify.com/embed/track/4fnNBPN9W6AoOYSQS3FJxT'],
        ['title' => 'Gone Girl', 'spotify' => 'https://open.spotify.com/embed/track/2Sjx8DWZO5zaTyTAmgo2gY'],
        ['title' => 'Smoking on my Ex Pack', 'spotify' => 'https://open.spotify.com/embed/track/4jTs7ny5eSRnKTzxdrFv5I'],
        ['title' => 'Ghost in the Machine', 'spotify' => 'https://open.spotify.com/embed/track/4h5x3XHLVYFJaItKuO2rhy'],
        ['title' => 'F2F', 'spotify' => 'https://open.spotify.com/embed/track/2e2AXpIiJpet5b4qg85Gh6'],
        ['title' => 'Nobody Gets Me', 'spotify' => 'https://open.spotify.com/embed/track/5Y35SjAfXjjG0sFQ3KOxmm'],
        ['title' => 'Conceited', 'spotify' => 'https://open.spotify.com/embed/track/4hTej08FutmriOs7S1hWWy'],
        ['title' => 'Special', 'spotify' => 'https://open.spotify.com/embed/track/6RQ5IwG7uADz9LDWliJGjU'],
        ['title' => 'Too Late', 'spotify' => 'https://open.spotify.com/embed/track/4rAg5bbrdZX00mXXhLvYXj'],
        ['title' => 'Far', 'spotify' => 'https://open.spotify.com/embed/track/74NI58MQexwZjNu1Gu6GjT'],
        ['title' => 'Shirt', 'spotify' => 'https://open.spotify.com/embed/track/2wSTnntOPRi7aQneobFtU4'],
        ['title' => 'Open Arms', 'spotify' => 'https://open.spotify.com/embed/track/0xaFw2zDYf1rIJWl2dXiSF'],
        ['title' => 'I Hate U', 'spotify' => 'https://open.spotify.com/embed/track/2aJnyNu4PQxQ2lyj5boiMG'],
        ['title' => 'Good Days', 'spotify' => 'https://open.spotify.com/embed/track/4PMqSO5qyjpvzhlLI5GnID'],
        ['title' => 'Forgiveless', 'spotify' => 'https://open.spotify.com/embed/track/5IcP1PPnleZ2kuwKDyfNC5']
    ]
],

        ];
    @endphp

    @if(isset($albums[$album]))
        <div class="text-center mt-10">
            <!-- Album Cover -->
            <div class="flex justify-center">
                <img src="{{ $albums[$album]['image'] }}" alt="{{ $album }} Cover"
                     class="w-96 rounded-lg shadow-lg transition-transform transform hover:scale-105">
            </div>

            <!-- Album Details -->
            <h2 class="text-4xl font-extrabold text-gray-800 mt-5 italic">{{ ucfirst($album) }}</h2>
            <p class="text-lg text-gray-600 mt-2 font-medium">
                <span class="font-bold">Released:</span> {{ $albums[$album]['release'] }}
            </p>
            <p class="text-md text-gray-700 mt-5 font-light max-w-3xl mx-auto">
                {{ $albums[$album]['description'] }}
            </p>
            
            <!-- Tracklist -->
            <h3 class="text-3xl font-extrabold text-gray-800 mt-10">Tracklist:</h3>

            <!-- Tracks Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-4/5 mx-auto mt-8">
                @foreach($albums[$album]['tracks'] as $track)
                    <div class="bg-white shadow-lg rounded-xl p-6 hover:shadow-2xl transition duration-300">
                        <p class="text-xl font-bold text-purple-800">{{ $track['title'] }}</p>
                        <iframe class="rounded-lg mt-3" src="{{ $track['spotify'] }}" width="100%" height="152"
                                frameborder="0" allowfullscreen allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                loading="lazy"></iframe>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center text-red-500 text-lg mt-10">Album not found.</p>
    @endif

    <!-- Back Button -->
    <div class="mt-10 text-center">
        <a href="{{ url('/') }}" 
           class="bg-purple-600 hover:bg-purple-800 text-white text-lg font-bold py-3 px-6 rounded-lg shadow-lg transition transform hover:scale-105">
             Go Back Home
        </a>
    </div>
</div>

@endsection
