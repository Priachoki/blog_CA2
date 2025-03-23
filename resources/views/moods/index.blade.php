@extends('layouts.app')

@section('content')
@auth
<div class="min-h-screen py-12 relative overflow-hidden" style="background-color: #FEFAE0;">

    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-12 text-gray-800">🎵 Explore Music by Mood</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($moods as $index => $mood)
                <!-- Mood Card -->
                <div class="rounded-2xl p-6 shadow-lg bg-white border-t-4 border-emerald-300 text-gray-800 cursor-pointer hover:scale-105 transform transition mood-portal"
                     data-target="portal-{{ $index }}">
                    <div class="text-3xl mb-2"> {{ $mood->mood_name }}</div>
                    <p class="text-sm italic text-gray-500">Tap to explore this vibe</p>
                </div>

                <!-- Mood Portal -->
                <div id="portal-{{ $index }}"
                     class="w-full hidden portal-overlay bg-[#FEFAE0] text-gray-800 py-12 relative z-50">
                    <!-- Close Button -->
                    <button class="absolute top-6 right-6 text-2xl bg-black/10 p-2 rounded-full hover:bg-black/20 close-portal">
                        ✖
                    </button>

                    <!-- Portal Title -->
                    <h2 class="text-4xl font-extrabold mt-10 mb-6 animate-fade-in">🎧 {{ $mood->mood_name }} Playlist</h2>

                    <!-- Songs List -->
                    @if ($mood->songs->isNotEmpty())
                        <div class="w-full max-w-5xl grid grid-cols-1 sm:grid-cols-2 gap-6 px-6 pb-12">
                            @foreach ($mood->songs as $song)
                                <div class="bg-white p-4 rounded-xl shadow border border-neutral-200 text-left animate-slide-up">
                                    <p class="text-lg font-semibold text-gray-800 mb-2">
                                        🎵 {{ $song->song_title }}
                                        <span class="text-sm text-gray-500 italic"> – {{ $song->album }}</span>
                                    </p>

                                    @php
                                        // Extract track ID from spotify_embed HTML
                                        preg_match('/track\/([a-zA-Z0-9]+)/', $song->spotify_embed ?? '', $matches);
                                        $trackId = $matches[1] ?? null;
                                    @endphp

                                    @if ($trackId)
                                        <div class="embed-container mt-4">
                                            <iframe 
                                                src="https://open.spotify.com/embed/track/{{ $trackId }}?utm_source=generator" 
                                                width="100%" 
                                                height="232" 
                                                frameborder="0" 
                                                allowfullscreen 
                                                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
                                                loading="lazy">
                                            </iframe>
                                        </div>
                                    @else
                                        <p class="text-red-500 text-sm mt-2">Embed not available</p>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-500 italic mb-10">No songs available for this mood.</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
@endauth

@guest
<div class="min-h-screen flex items-center justify-center text-gray-700 text-xl" style="background-color: #FEFAE0;">
    Please 
    <a href="{{ route('login') }}" class="text-emerald-600 underline mx-2">log in</a> 
    to explore music by mood.
</div>
@endguest
@endsection

<!-- Styles -->
@push('styles')
<style>
    .portal-overlay {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.5s ease, transform 0.5s ease;
        pointer-events: none;
    }

    .portal-overlay.show {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
    }

    .embed-container {
        width: 100%;
        max-width: 900px; /* Wider view */
        margin: 0 auto;
        overflow: hidden;
    }

    .embed-container iframe {
        width: 100% !important;
        height: 232px !important;
        overflow: hidden;
        border: none;
        border-radius: 12px;
        display: block;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .animate-slide-up {
        animation: slideUp 0.6s ease forwards;
    }

    .animate-fade-in {
        animation: fadeIn 1s ease-in-out forwards;
    }

    @keyframes slideUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
</style>
@endpush

<!-- JavaScript -->
@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const moodCards = document.querySelectorAll(".mood-portal");

        moodCards.forEach(card => {
            card.addEventListener("click", () => {
                const targetId = card.getAttribute("data-target");
                const portal = document.getElementById(targetId);

                if (portal) {
                    portal.classList.remove("hidden");
                    portal.classList.add("show");
                }
            });
        });

        document.addEventListener("click", function(event) {
            if (event.target.classList.contains("close-portal")) {
                const portal = event.target.closest(".portal-overlay");
                if (portal) {
                    portal.classList.remove("show");
                    setTimeout(() => {
                        portal.classList.add("hidden");
                    }, 500);
                }
            }
        });
    });
</script>
@endpush
