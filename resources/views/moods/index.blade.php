@extends('layouts.app')

@section('content')
@auth
<div class="min-h-screen py-12 relative overflow-hidden" style="background-color: #FEFAE0;">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-12 text-gray-800">🎵 Explore Music by Mood</h1>

        <!-- Mood Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($moods as $index => $mood)
                <div 
                    class="rounded-2xl p-6 shadow-lg bg-white border-t-4 border-emerald-300 text-gray-800 cursor-pointer hover:scale-105 transform transition mood-portal"
                    data-mood="{{ $mood->mood_name }}"
                    data-index="{{ $index }}"
                >
                    <div class="text-3xl mb-2"> {{ $mood->mood_name }}</div>
                    <p class="text-sm italic text-gray-500">Tap to explore this vibe</p>
                </div>
            @endforeach
        </div>

        <!-- Shared Mood Portal Overlay -->
        <div id="shared-portal"
            class="portal-overlay hidden fixed inset-0 bg-[#FEFAE0] overflow-y-auto z-50 py-12 px-6 text-gray-800">

            <button class="absolute top-6 right-6 text-3xl p-2 rounded-full hover:text-purple-600 close-portal">&#10006;</button>

            <h2 id="portal-title" class="text-4xl font-extrabold mt-10 mb-6 text-center animate-fade-in">🎷 Playlist</h2>

            <div id="portal-content" class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 gap-6"></div>
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

    .embed-container iframe {
        width: 100% !important;
        height: 232px !important;
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

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const moodCards = document.querySelectorAll(".mood-portal");
        const sharedPortal = document.getElementById("shared-portal");
        const closeBtn = sharedPortal.querySelector(".close-portal");
        const portalTitle = document.getElementById("portal-title");
        const portalContent = document.getElementById("portal-content");

        const moodData = @json($moods);

        moodCards.forEach(card => {
            card.addEventListener("click", () => {
                const moodName = card.dataset.mood;
                const index = card.dataset.index;
                const mood = moodData[index];

                portalTitle.textContent = `🎷 ${moodName} Playlist`;
                portalContent.innerHTML = '';

                if (mood.songs && mood.songs.length > 0) {
                    mood.songs.forEach(song => {
                        const container = document.createElement('div');
                        container.className = 'bg-white p-4 rounded-xl shadow border border-neutral-200 text-left animate-slide-up';

                        const title = document.createElement('p');
                        title.className = 'text-lg font-semibold text-gray-800 mb-2';
                        title.innerHTML = `🎵 ${song.song_title} <span class="text-sm text-gray-500 italic">&ndash; ${song.album}</span>`;
                        container.appendChild(title);

                        const match = song.spotify_embed?.match(/track\/([a-zA-Z0-9]+)/);
                        const trackId = match ? match[1] : null;

                        if (trackId) {
                            const iframe = document.createElement('iframe');
                            iframe.src = `https://open.spotify.com/embed/track/${trackId}?utm_source=generator`;
                            iframe.width = '100%';
                            iframe.height = '232';
                            iframe.frameBorder = '0';
                            iframe.allow = 'autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture';
                            iframe.loading = 'lazy';
                            iframe.className = 'rounded-xl mt-4';
                            container.appendChild(iframe);
                        } else {
                            const error = document.createElement('p');
                            error.className = 'text-red-500 text-sm mt-2';
                            error.textContent = 'Embed not available';
                            container.appendChild(error);
                        }

                        portalContent.appendChild(container);
                    });
                } else {
                    portalContent.innerHTML = `<p class="text-gray-500 italic mb-10">No songs available for this mood.</p>`;
                }

                sharedPortal.classList.remove("hidden");
                sharedPortal.classList.add("show");
            });
        });

        closeBtn.addEventListener("click", () => {
            sharedPortal.classList.remove("show");
            setTimeout(() => {
                sharedPortal.classList.add("hidden");
            }, 300);
        });
    });
</script>
@endpush
