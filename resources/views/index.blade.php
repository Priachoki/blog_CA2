@extends('layouts.app')

@section('content')

<!-- Parent container with the background image -->
<div class="background-image"> <!-- Apply the background image here -->
    <!-- Section with the fixed background image and color overlay -->
    <section class="relative" style="height: 600px;"> <!-- Match the height with the CSS -->
        <div class="absolute inset-0 bg-[#f5ebe0] z-10"></div> <!-- Removed opacity -->
        
        <div class="grid grid-cols-1 m-auto relative z-20"> <!-- Ensure content is above the overlay -->
            <header>
                <div class="content">
                    <div class="flex text-gray-100 pt-10">
                        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                                If all the world's a stage, put me in the front row
                            </h1>
                            <a 
                                href="/blog"
                                class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </section>

    <!-- Section 1: SZA Bio -->
<section class="p-15 bg-white pt-20 pb-20">
    <div class="w-4/5 mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <!-- Left Side - Large Image -->
        <div class="w-full flex justify-center">
            <img src="https://i.pinimg.com/736x/6b/78/34/6b7834bf33bb71612370fe6cd752769f.jpg" 
                 alt="SZA" 
                 class="w-full max-w-lg h-auto rounded-xl shadow-xl transform hover:scale-105 transition duration-300 ease-in-out">
        </div>

        <!-- Right Side - Text Content -->
        <div class="text-left">
            <h2 class="text-5xl font-extrabold text-gray-800 italic mb-5">
                SZA: A Soulful Force in Modern Music
            </h2>

            <p class="text-gray-700 text-lg leading-relaxed">
                Born on November 8, 1989, in St. Louis, Missouri, SZA is an American singer-songwriter known for blending R&B, hip-hop, and soul 
                into a unique and captivating sound. She gained widespread recognition with her debut studio album, Ctrl, in 2017.
            </p>

            <!-- Second Image (Now beside the second paragraph) -->
            <div class="w-full sm:w-1/3 float-right ml-5 mt-2">
                <img src="https://pbs.twimg.com/media/GAIPmlBW0AAxus8.jpg" 
                     alt="SZA" 
                     class="w-full max-w-xs h-auto rounded-xl shadow-md transform hover:scale-105 transition duration-300 ease-in-out">
            </div>

            <p class="text-gray-700 text-lg leading-relaxed mt-5">
                Her music delves into themes of love, heartbreak, self-discovery, and identity, resonating deeply with listeners worldwide.
                She began making music in the early 2010s, releasing two extended plays before signing with Top Dawg Entertainment. 
                Her third EP, Z, was her first commercial success, followed by the critically acclaimed Ctrl.
                <br><br>
                Ctrl was ranked as the best album of 2017 by Time. She also collaborated with Maroon 5 on What Lovers Do and contributed to the 
                Black Panther soundtrack with All the Stars featuring Kendrick Lamar. In 2021, her single Good Days became her first 
                solo top 10 Billboard Hot 100 hit.
            </p>
        </div>
    </div>

    <!-- Button Layout -->
    <div class="w-4/5 mx-auto mt-10 flex justify-center">
        <a href="/blog"
           class="bg-purple-500 text-white text-lg font-extrabold py-3 px-8 rounded-3xl shadow-md 
                  transform hover:scale-105 transition duration-300 ease-in-out">
            Find Out More
        </a>
    </div>
</section>

    <section class="p-15 bg-[#f5ebe0] pt-20 pb-20"> 
   <div m-8></div>
    </section>

   <!-- Section 2: Albumns -->
  
<section class="p-15 bg-white pt-20 pb-20"> 
    <div class="text-center p-15 text-black">
        <h2 class="font-extrabold block text-5xl py-1"> <!-- Made the heading larger -->
            Albums
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-16 w-4/5 m-auto py-15">
            <!-- Album 1: LANA -->
            <div class="text-center">
                <img src="https://i.scdn.co/image/ab67616d00001e02209356748e67773a69774a02" 
                     alt="LANA Album Cover" 
                     class="w-64 h-64 mx-auto rounded-lg shadow-lg">
                <h3 class="text-3xl font-extrabold text-gray-700 mt-6 italic"> <!-- Added italic class -->
                    LANA
                </h3>
                <p class="py-4 text-gray-700 text-lg leading-relaxed">
                    Released: October 20, 2023 <br>
                    A deluxe edition featuring unreleased tracks and remixes from SZA's vault.
                </p>
                <a href="{{ route('album.info', ['album' => 'LANA']) }}" 
                    class="bg-purple-600 hover:bg-purple-800 text-white text-lg py-3 px-6 rounded-lg mt-4 inline-block">
                     More Info
                 </a>
            </div>

            <!-- Album 2: Ctrl -->
            <div class="text-center">
                <img src="https://upload.wikimedia.org/wikipedia/en/b/bf/SZA_-_Ctrl_cover.png" 
                     alt="Ctrl Album Cover" 
                     class="w-64 h-64 mx-auto rounded-lg shadow-lg">
                <h3 class="text-3xl font-extrabold text-gray-700 mt-6 italic"> <!-- Added italic class -->
                    Ctrl
                </h3>
                <p class="py-4 text-gray-700 text-lg leading-relaxed">
                    Released: June 9, 2017 <br>
                    SZA's debut studio album, featuring hits like "Love Galore" and "The Weekend."
                </p>
                <a href="{{ route('album.info', ['album' => 'Ctrl']) }}" 
                    class="bg-purple-600 hover:bg-purple-800 text-white text-lg py-3 px-6 rounded-lg mt-4 inline-block">
                     More Info
                 </a>
            </div>

            <!-- Album 3: SOS -->
            <div class="text-center">
                <img src="https://media.pitchfork.com/photos/638902d5f777c8e284615da3/1:1/w_1500,h_1500,c_limit/SZA.jpg" 
                     alt="SOS Album Cover" 
                     class="w-64 h-64 mx-auto rounded-lg shadow-lg">
                <h3 class="text-3xl font-extrabold text-gray-700 mt-6 italic"> <!-- Added italic class -->
                    SOS
                </h3>
                <p class="py-4 text-gray-700 text-lg leading-relaxed">
                    Released: December 9, 2022 <br>
                    SZA's second studio album, featuring "Good Days" and "I Hate U."
                </p>
                <a href="{{ route('album.info', ['album' => 'SOS']) }}" 
                    class="bg-purple-600 hover:bg-purple-800 text-white text-lg py-3 px-6 rounded-lg mt-4 inline-block">
                     More Info
                 </a>
            </div>
        </div>
    </div>
</section>

<section class="p-15 bg-[#f5ebe0] pt-20 pb-20"> 
    <div m-8></div>
     </section>

<section class="p-15 bg-white pt-20 pb-20">
    <div class="text-center p-15 text-black">
        <h2 class="font-extrabold text-5xl py-1">
            SZA's Most Popular Songs
        </h2>

       <div id="popular-songs">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 w-4/5 m-auto py-10">
            <!-- First 6 Songs (Always Visible) -->
            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">
                    Luther (with SZA)
                </h3>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2CGNAOSuO1MEFCbBRgUzjd?utm_source=generator&theme=0" 
                        width="100%" height="152" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                </iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">
                    All The Stars (with Kendrick Lamar)
                </h3>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/3GCdLUSnKSMJhs4Tj6CV3s?utm_source=generator" 
                        width="100%" height="152" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                </iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">
                    30 For 30 (with Kendrick Lamar)
                </h3>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/3aSWXU6owkZeVhh94XxEWO?utm_source=generator&theme=0" 
                        width="100%" height="152" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                </iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">
                    BMF
                </h3>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/3U3hFkMr0Q90pD24EkE3Pr?utm_source=generator&theme=0" 
                        width="100%" height="152" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                </iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">
                    Snooze
                </h3>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/4iZ4pt7kvcaH6Yo8UoZ4s2?utm_source=generator&theme=0" 
                        width="100%" height="152" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                </iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">
                    Kill Bill
                </h3>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/1Qrg8KqiBpW07V7PNxwwwL?utm_source=generator&theme=0" 
                        width="100%" height="152" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                </iframe>
            </div>
        </div>

        <!-- Hidden Additional Songs -->
        <div id="extra-songs" class="hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 w-4/5 m-auto py-10">
            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">
                    Saturn
                </h3>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/040I32EKLxQrkuxQu1pqvT?utm_source=generator&theme=0" 
                        width="100%" height="152" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                </iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">
                    Nobody Gets Me
                </h3>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5Y35SjAfXjjG0sFQ3KOxmm?utm_source=generator&theme=0" 
                        width="100%" height="152" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                </iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">
                    Open Arms (feat. Travis Scott)
                </h3>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/6koKhrBBcExADvWuOgceNZ?utm_source=generator&theme=0" 
                        width="100%" height="152" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                </iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">
                    Good Days
                </h3>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/4PMqSO5qyjpvzhlLI5GnID?utm_source=generator&theme=0" 
                        width="100%" height="152" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                </iframe>
            </div>
        </div>

        <!-- SZA's Singles Section (Hidden Initially) -->
        <div id="sza-singles" class="hidden grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 w-4/5 m-auto py-10">
            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">No SZNS</h3>
                <iframe src="https://open.spotify.com/embed/album/05kT1p6wyim40HJVzg7tt3?utm_source=generator&theme=0" width="100%" height="152"
                        frameBorder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">Snooze (feat. Justin Bieber)</h3>
                <iframe src="https://open.spotify.com/embed/album/0bQ8NyqdTKKQpZHYhZqCUU?utm_source=generator&theme=0" width="100%" height="152"
                        frameBorder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">Slime You Out (feat. SZA)</h3>
                <iframe src="https://open.spotify.com/embed/track/3RaCGXCiiMufRPoexXxGkV?utm_source=generator&theme=0" width="100%" height="152"
                        frameBorder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">Kill Bill (feat. Doja Cat)</h3>
                <iframe src="https://open.spotify.com/embed/album/4OanbmuJAWz8JPVE4cJA9L?utm_source=generator&theme=0" width="100%" height="152"
                        frameBorder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">Special (feat. SZA)</h3>
                <iframe src="https://open.spotify.com/embed/album/5Qw3usvS6dDOE0ErN6tl7O?utm_source=generator&theme=0" width="100%" height="152"
                        frameBorder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">Beautiful (feat. Future & SZA)</h3>
                <iframe src="https://open.spotify.com/embed/album/180PxJxb58IlSaWU0XWY0Q?utm_source=generator&theme=0" width="100%" height="152"
                        frameBorder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">Shirt</h3>
                <iframe src="https://open.spotify.com/embed/album/6Kqm5aSp69hTaOHTx38hsD?utm_source=generator&theme=0" width="100%" height="152"
                        frameBorder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">Persuasive</h3>
                <iframe src="https://open.spotify.com/embed/album/7LYy99hyg4eHQeYkKPuS6R?utm_source=generator&theme=0" width="100%" height="152"
                        frameBorder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">No Love (feat. Cardi B)</h3>
                <iframe src="https://open.spotify.com/embed/album/1Rt2ZYJ3tBKqXtFuB19xz4?utm_source=generator&theme=0" width="100%" height="152"
                        frameBorder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">Fue Mejor (feat. SZA)</h3>
                <iframe src="https://open.spotify.com/embed/album/5h23sIlF1FvjdIdcJofXlI?utm_source=generator&theme=0" width="100%" height="152"
                        frameBorder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>

            <div class="text-center bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-extrabold text-gray-700 mb-4 italic">Hit Different</h3>
                <iframe src="https://open.spotify.com/embed/album/4xmJCh7ct63QvQ5wRc44db?utm_source=generator&theme=0" width="100%" height="152"
                        frameBorder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
        </div>

        <!-- Show More Button -->
        <button id="showMoreBtn" class="bg-black hover:bg-gray-800 text-white text-lg py-3 px-6 rounded-lg mt-6">
            Show More Songs
        </button>
        <button id="showSinglesBtn" class="bg-black hover:bg-gray-800 text-white text-lg py-3 px-6 rounded-lg ml-4">
            Show Others
        </button>
    </div>
</section>

<!-- JavaScript to Toggle Extra Songs -->
<script>
    document.getElementById("showMoreBtn").addEventListener("click", function () {
        var extraSongs = document.getElementById("extra-songs");
        var singles = document.getElementById("sza-singles");
        if (extraSongs.classList.contains("hidden")) {
            extraSongs.classList.remove("hidden");
            singles.classList.add("hidden");
            this.innerText = "Show Less Songs";
        } else {
            extraSongs.classList.add("hidden");
            this.innerText = "Show More Songs";
        }
    });

    document.getElementById("showSinglesBtn").addEventListener("click", function () {
        var singles = document.getElementById("sza-singles");
        var extraSongs = document.getElementById("extra-songs");
        if (singles.classList.contains("hidden")) {
            singles.classList.remove("hidden");
            extraSongs.classList.add("hidden");
            this.innerText = "Hide SZA's Singles";
        } else {
            singles.classList.add("hidden");
            this.innerText = "Show SZA's Singles";
        }
    });
</script>
<section class="p-15 bg-[#f5ebe0] pt-20 pb-20"> 
    <div m-8></div>
     </section>
    
</div>

@endsection