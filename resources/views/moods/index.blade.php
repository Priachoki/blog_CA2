@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#FEFAE0] py-12 relative overflow-hidden">
    <!-- 🎶💫 Floating background emojis (🎵 removed) -->
    <div class="absolute text-6xl opacity-10 animate-slow-float pointer-events-none select-none">
        <div class="absolute bottom-20 right-20">🎶</div>
        <div class="absolute top-1/2 left-1/3">💫</div>
    </div>

    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-12 text-gray-800">🎵 Explore Music by Mood</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($moods as $index => $mood)
                <!-- Mood Card -->
                <div class="rounded-2xl p-6 shadow-lg bg-white border-t-4 border-emerald-300 text-gray-800 cursor-pointer hover:scale-105 transform transition mood-portal"
                     data-target="portal-{{ $index }}">
                    <div class="text-3xl mb-2">🎭 {{ $mood->mood_name }}</div>
                    <p class="text-sm italic text-gray-500">Tap to explore this vibe</p>
                </div>

                <!-- Mood Portal -->
                <div id="portal-{{ $index }}"
                     class="w-full hidden portal-overlay bg-[#FEFAE0] text-gray-800 py-12">
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

                                    @if ($song->spotify_embed)
                                        <div class="embed-container mt-2">
                                            {!! $song->spotify_embed !!}
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

<!-- Styles -->
<style>
    .portal-overlay {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.5s ease, transform 0.5s ease;
        pointer-events: none;
        background-color: #FEFAE0 !important;
    }

    .portal-overlay.show {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
    }

    .portal-overlay::-webkit-scrollbar {
        width: 6px;
    }

    .portal-overlay::-webkit-scrollbar-thumb {
        background: rgba(0, 0, 0, 0.2);
        border-radius: 10px;
    }

    .embed-container iframe {
        width: 100% !important;
        height: 80px !important;
        border-radius: 8px;
    }

    /* Animations */
    .animate-slide-up {
        animation: slideUp 0.6s ease forwards;
    }

    .animate-fade-in {
        animation: fadeIn 1s ease-in-out forwards;
    }

    .animate-slow-float {
        animation: slowFloat 10s ease-in-out infinite;
    }

    @keyframes slideUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slowFloat {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }
</style>

<!-- JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const moodCards = document.querySelectorAll(".mood-portal");
        const closeButtons = document.querySelectorAll(".close-portal");

        moodCards.forEach(card => {
            card.addEventListener("click", () => {
                const target = card.getAttribute("data-target");
                const portal = document.getElementById(target);

                if (portal) {
                    portal.classList.remove("hidden");
                    void portal.offsetWidth;
                    portal.classList.add("show");
                }
            });
        });

        closeButtons.forEach(button => {
            button.addEventListener("click", () => {
                const portal = button.closest(".portal-overlay");
                portal.classList.remove("show");

                setTimeout(() => {
                    portal.classList.add("hidden");
                }, 500);
            });
        });
    });
</script>
@endsection
