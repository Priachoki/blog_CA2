<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    public function run()
    {
        DB::table('songs')->insert([
            ['mood_id' => 1, 'song_title' => 'Good Days', 'album' => 'SOS',
            'spotify_link' => 'https://open.spotify.com/track/3YJJjQPAbDT7mGpX3WtQ9A',
            'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/3YJJjQPAbDT7mGpX3WtQ9A?utm_source=generator&theme=0" width="100%" height="352" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
           ],
       
           ['mood_id' => 1, 'song_title' => 'Kill Bill', 'album' => 'SOS',
            'spotify_link' => 'https://open.spotify.com/track/5kI4eCXXzyuIUXjQra0Cxi',
            'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5kI4eCXXzyuIUXjQra0Cxi?utm_source=generator&theme=0" width="100%" height="352" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
           ],
            [
                'mood_id' => 1,
                'song_title' => 'Prom',
                'album' => 'Ctrl',
                'spotify_link' => 'https://open.spotify.com/track/0gLdV2wA3qApvLSVjF37Fo',
                'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5yvhdo8FXbBsIllxv2Rr94?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
            ],
            [
                'mood_id' => 1,
                'song_title' => 'Broken Clocks',
                'album' => 'Ctrl',
                'spotify_link' => 'https://open.spotify.com/track/3YJJjQPAbDT7mGpX3WtQ9A',
                'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2fXwCWkh6YG5zU1IyvQrbs?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
            ],
            [
                'mood_id' => 1,
                'song_title' => 'Garden (Say It Like Dat)',
                'album' => 'Ctrl',
                'spotify_link' => 'https://open.spotify.com/track/7lFdJ2lZQ1W3AtXox3P6kJ',
                'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/19woxaSpjOefa2JnAOoqW5?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
            ],
            [
                'mood_id' => 1,
                'song_title' => 'Love Galore (feat. Travis Scott)',
                'album' => 'Ctrl',
                'spotify_link' => 'https://open.spotify.com/track/1Xv7CSXAHj5a2hGgXH2CZn',
                'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/0q75NwOoFiARAVp4EXU4Bs?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
            ],
            [
                'mood_id' => 1,
                'song_title' => 'I Hate U',
                'album' => 'SOS',
                'spotify_link' => 'https://open.spotify.com/track/4uUG5RXrOk84mYEfFvj3cK',
                'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/4iN2sxWPPKU48NXyzLaXku?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 2,
                    'song_title' => 'Drew Barrymore',
                    'album' => 'Ctrl',
                    'spotify_link' => 'https://open.spotify.com/track/0z7tnD5xI3Pp3N9fE3I1hz',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/06u5LrUpbosQlQ1QJFhPpG?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 2,
                    'song_title' => '20 Something',
                    'album' => 'Ctrl',
                    'spotify_link' => 'https://open.spotify.com/track/5hLilO4VZSftn7fIRwDOcG',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/4h6ViRoztTBpWcJ1zFT9Zg?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 2,
                    'song_title' => 'Supermodel',
                    'album' => 'Ctrl',
                    'spotify_link' => 'https://open.spotify.com/track/0ZNU020wNYvgW84iljPkPP',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5wTVNpi5WDByxBgKgUE6MU?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 2,
                    'song_title' => 'Special',
                    'album' => 'SOS',
                    'spotify_link' => 'https://open.spotify.com/track/2bv9PVjNPMH8sVD3PeDRpw',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/6RQ5IwG7uADz9LDWliJGjU?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 2,
                    'song_title' => 'Nobody Gets Me',
                    'album' => 'SOS',
                    'spotify_link' => 'https://open.spotify.com/track/0mXwBhM2YH1e1cBHNw5t5L',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5Y35SjAfXjjG0sFQ3KOxmm?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 2,
                    'song_title' => 'Ghost In The Machine',
                    'album' => 'SOS',
                    'spotify_link' => 'https://open.spotify.com/track/6lsJBzFYFOLZ6OQ6J0I9aD',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/4h5x3XHLVYFJaItKuO2rhy?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 2,
                    'song_title' => 'Open Arms',
                    'album' => 'SOS',
                    'spotify_link' => 'https://open.spotify.com/track/3cPq0PUwfoCEyxUX2qkH6m',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/0uQHm4CLatNbvDFHt1Ystl?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 3,
                    'song_title' => 'Power is Power',
                    'album' => 'For The Throne',
                    'spotify_link' => 'https://open.spotify.com/track/2MSuhdxM1nmdkOpFFwMibI',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/4cbdPT6uaBOgOQe3fLMofl?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 3,
                    'song_title' => 'Love Galore',
                    'album' => 'Ctrl',
                    'spotify_link' => 'https://open.spotify.com/track/0rKtyWc8bvkriBthvHKY8d',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/0q75NwOoFiARAVp4EXU4Bs?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 3,
                    'song_title' => 'I Hate U',
                    'album' => 'SOS',
                    'spotify_link' => 'https://open.spotify.com/track/5mXrH0gz6YD4EOzX4FuhhJ',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/4iN2sxWPPKU48NXyzLaXku?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 3,
                    'song_title' => 'Prom',
                    'album' => 'Ctrl',
                    'spotify_link' => 'https://open.spotify.com/track/2S1LebN6HtGpDvsqN4xWjV',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5yvhdo8FXbBsIllxv2Rr94?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 3,
                    'song_title' => 'Shirt',
                    'album' => 'SOS',
                    'spotify_link' => 'https://open.spotify.com/track/1wsf2o5dFHQ4LEBAGzJaie',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2wSTnntOPRi7aQneobFtU4?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 3,
                    'song_title' => 'No Love',
                    'album' => 'Still Over It',
                    'spotify_link' => 'https://open.spotify.com/track/0RzT9tBLcQhFgsIfPjDo7G',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/08SB2OtZkaliju77WYEKxk?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 3,
                    'song_title' => 'The Weekend',
                    'album' => 'Ctrl',
                    'spotify_link' => 'https://open.spotify.com/track/7Ks4VCY1wFebnOdJrM13t3',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/6gU9OKjOE7ghfEd55oRO57?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 4,
                    'song_title' => 'Garden (Say It Like Dat)',
                    'album' => 'Ctrl',
                    'spotify_link' => 'https://open.spotify.com/track/0tZ3ozkS2TW1kWkWkW2DHA',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/19woxaSpjOefa2JnAOoqW5?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 4,
                    'song_title' => 'Good Days',
                    'album' => 'SOS',
                    'spotify_link' => 'https://open.spotify.com/track/3YJJjQPAbDT7mGpX3WtQ9A',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/4PMqSO5qyjpvzhlLI5GnID?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 4,
                    'song_title' => 'Blind',
                    'album' => 'SOS',
                    'spotify_link' => 'https://open.spotify.com/track/5FNSvPfrIXdjR2vyxRJ5Bd',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2CSRrnOEELmhpq8iaAi9cd?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 4,
                    'song_title' => 'Pretty Little Birds',
                    'album' => 'Ctrl',
                    'spotify_link' => 'https://open.spotify.com/track/0VVjUQyAh1jf4Hq8wQ2nWA',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/1IgePMOW0qEe1AViWgkal9?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 4,
                    'song_title' => 'Go Gina',
                    'album' => 'Ctrl',
                    'spotify_link' => 'https://open.spotify.com/track/5WhtH84mWX365HAuFtvUfS',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/6Vmow8PuUaU7W1T2WWLZk2?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 4,
                    'song_title' => '2AM',
                    'album' => 'Ctrl (Deluxe)',
                    'spotify_link' => 'https://open.spotify.com/track/6QRA2HLdXjixgn4rK3WxgR',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/3vZGtceCbJVh5aDT4XhE0p?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 4,
                    'song_title' => 'Open Arms (feat. Travis Scott)',
                    'album' => 'SOS',
                    'spotify_link' => 'https://open.spotify.com/track/3RImwuwCwE7crueDjIk5Kh',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/0uQHm4CLatNbvDFHt1Ystl?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 4,
                    'song_title' => 'Awkward',
                    'album' => 'Z',
                    'spotify_link' => 'https://open.spotify.com/track/0Srx65XYb91Pbp2lLRsgxD',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2xZ0zfuDTv5LxLhEgD82PG?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 4,
                    'song_title' => 'Sweet November',
                    'album' => 'Z',
                    'spotify_link' => 'https://open.spotify.com/track/1CmDgfqFsVjkHDaTsNV2aL',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/7swGurTfZlwx7mTOE8PpIc?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 5,
                    'song_title' => 'F2F',
                    'album' => 'SOS',
                    'spotify_link' => 'https://open.spotify.com/track/3N0StJrgJb2EfoJCM0Rz0w',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2e2AXpIiJpet5b4qg85Gh6?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 5,
                    'song_title' => 'Seek & Destroy',
                    'album' => 'SOS',
                    'spotify_link' => 'https://open.spotify.com/track/4g1AuYxCROx8FJ7qLQo3Lh',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/6eT2V7nKXyMf47TwPbtgAD?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 5,
                    'song_title' => 'Hit Different (feat. Ty Dolla $ign)',
                    'album' => 'Single',
                    'spotify_link' => 'https://open.spotify.com/track/3DhFYq0vGxRZbOBnfuP8nP',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/7Bar1kLTmsRmH6FCKKMEyU?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 5,
                    'song_title' => 'Power Is Power (with The Weeknd & Travis Scott)',
                    'album' => 'For the Throne',
                    'spotify_link' => 'https://open.spotify.com/track/3YyVJ3wL2zztK2U5MqwHVP',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/4cbdPT6uaBOgOQe3fLMofl?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 5,
                    'song_title' => 'Shirt',
                    'album' => 'SOS',
                    'spotify_link' => 'https://open.spotify.com/track/3YVVcoiwpoGlp0mRuEAVxt',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2wSTnntOPRi7aQneobFtU4?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 5,
                    'song_title' => 'Broken Clocks',
                    'album' => 'Ctrl',
                    'spotify_link' => 'https://open.spotify.com/track/3WvQp1h8xF5S3HiYrqQ7D4',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2fXwCWkh6YG5zU1IyvQrbs?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 5,
                    'song_title' => 'I Hate U',
                    'album' => 'SOS',
                    'spotify_link' => 'https://open.spotify.com/track/3sW3oSbzsfecv9XoUdGs7h',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/4iN2sxWPPKU48NXyzLaXku?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 5,
                    'song_title' => 'Babylon (feat. Kendrick Lamar)',
                    'album' => 'Z',
                    'spotify_link' => 'https://open.spotify.com/track/1KsASRNugrTThp5fSxZBHH',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/6Aj2H0Z0v0JgnSfPEwCgW0?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 5,
                    'song_title' => 'Prom',
                    'album' => 'Ctrl',
                    'spotify_link' => 'https://open.spotify.com/track/5aiVTe2kdJuTMzdoe9Nspa',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5yvhdo8FXbBsIllxv2Rr94?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
                [
                    'mood_id' => 5,
                    'song_title' => 'Forgiveless (feat. Ol’ Dirty Bastard)',
                    'album' => 'SOS',
                    'spotify_link' => 'https://open.spotify.com/track/2zhrIQgsXnsfcC1cUHHWxC',
                    'spotify_embed' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5IcP1PPnleZ2kuwKDyfNC5?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'
                ],
            ]);
            }
}
