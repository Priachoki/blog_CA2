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



    <!-- Section 3: PHP Blog Post -->
  <section class="p-15 bg-[#f5ebe0] pt-20 pb-20">
    <div class="w-4/5 mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        
        <!-- Left Side: Image -->
        <div class="w-full flex justify-center">
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" 
                 alt="Technology" 
                 class="w-full max-w-lg h-auto rounded-xl shadow-lg">
        </div>

        <!-- Right Side: Text Content -->
        <div class="text-left w-4/5">
            <h3 class="text-5xl font-extrabold text-gray-700 leading-tight">
                Popular
            </h3>

            <p class="py-8 text-gray-700 text-lg leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad?
                Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
            </p>

            <a href="" 
               class="uppercase bg-purple-400 text-gray-100 text-lg font-extrabold py-3 px-8 rounded-3xl shadow-md">
                Find Out More
            </a>
        </div>

    </div>
</section>

</div>

@endsection