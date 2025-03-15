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
    <section class="p-15 bg-white pt-20 pb-20"> <!-- Use padding instead of margin -->
        <div class="mx-auto sm:grid grid-cols-2 gap-20 w-4/5 py-1">
            <div class="w-full "> <!-- Adjusted width to make the image smaller -->
                <img src="https://i.pinimg.com/736x/6b/78/34/6b7834bf33bb71612370fe6cd752769f.jpg" 
                     alt="SZA" 
                     class="w-full h-auto rounded-lg shadow-lg"> <!-- Responsive image -->
            </div>
            
        
            <div class="m-auto sm:m-auto text-left w-4/5 block">
                <h2 class="text-5xl font-extrabold text-gray-700">
                    SZA: A Soulful Force in Modern Music
                </h2>
                
                <p class="py-8 text-gray-700 text-lg leading-relaxed">
                    Born on November 8, 1989, in St. Louis, Missouri, SZA is an American singer-songwriter known for blending R&B, hip-hop,
                    and soul into a unique and captivating sound. She gained widespread recognition with her debut studio album, 
                    Ctrl, in 2017. Her music delves into themes of love, heartbreak, self-discovery, 
                    and identity, resonating deeply with listeners worldwide. <br> <br>
                    SZA was born Solána Imani Rowe was born on November 8, 1989 in St. Louis, Missouri & raised in Maplewood, New Jersey. 
                    She began making music in the early 2010s, releasing two extended plays: See.SZA.Run & S, before signing with the hip hop 
                    record label Top Dawg Entertainment, through which she released Z, her third EP and first retail release. SZA's debut studio album,
                     Ctrl was released on June 9, 2017 to universal acclaim from music critics. It debuted at number three on the US Billboard 200 and was 
                     eventually certified platinum by the Recording Industry Association of America (RIAA). The album and its songs were nominated for four
                      Grammy Awards and SZA was nominated for Best New Artist at the 60th annual ceremony. Ctrl was ranked as the best album of 2017 by Time. 
                      That year, she also featured on Maroon 5's hit single, What Lovers Do. The next year, she collaborated with Kendrick Lamar to create All the Stars 
                      for the Black Panther soundtrack; the song was nominated for the Golden Globe Award and the Academy Award for Best Original Song. In 2021, her single: 
                    Good Days became popular on streaming platforms and became her first solo top 10 hit on the Billboard Hot 100.
                </p>
                <div class="w-full sm:w-1/2"> <!-- Adjusted width to make the image smaller -->
                    <img src="https://pbs.twimg.com/media/GAIPmlBW0AAxus8.jpg" 
                         alt="SZA" 
                         class="w-full h-auto rounded-lg shadow-lg"> <!-- Responsive image -->
                </div>
        
                <a 
                    href="/blog"
                    class="uppercase bg-purple-400 text-gray-100 text-lg font-extrabold py-3 px-8 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
    </section>
    <section class="p-15 bg-[#f5ebe0] pt-20 pb-20"> 
   <div m-8></div>
    </section>

    <!-- Section 2: Expertise -->
    <section class="p-15 bg-white pt-20 pb-20"> <!-- Use padding instead of margin -->
        <div class="text-center p-15 text-black">
            <h2 class="font-extrabold block text-4xl py-1"> 
                Albums
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 w-4/5 m-auto py-15">
                <!-- Album 1: Ctrl -->
                <div class="text-center">
                    <img src="https://i.scdn.co/image/ab67616d00001e02209356748e67773a69774a02" 
                         alt="LANA Album Cover" 
                         class="w-48 h-48 mx-auto rounded-lg shadow-lg">
                    <h3 class="text-2xl font-extrabold text-gray-700 mt-4">
                        LANA
                    </h3>
                    <p class="py-4 text-gray-700 text-sm leading-relaxed">
                        Released: October 20, 2023 <br>
                        A deluxe edition featuring unreleased tracks and remixes from SZA's vault.
                    </p>
                    <a href="{{ route('album.info', ['album' => 'LANA']) }}" 
                        class="bg-purple-300 text-white py-2 px-4 rounded-lg mt-3 inline-block">
                         More Info
                     </a>
                </div>
                <div class="text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/en/b/bf/SZA_-_Ctrl_cover.png" 
                         alt="Ctrl Album Cover" 
                         class="w-48 h-48 mx-auto rounded-lg shadow-lg">
                    <h3 class="text-2xl font-extrabold text-gray-700 mt-4">
                        Ctrl
                    </h3>
                    <p class="py-4 text-gray-700 text-sm leading-relaxed">
                        Released: June 9, 2017 <br>
                        SZA's debut studio album, featuring hits like "Love Galore" and "The Weekend."
                    </p>
                    <a href="{{ route('album.info', ['album' => 'Ctrl']) }}" 
                        class="bg-purple-300 text-white py-2 px-4 rounded-lg mt-3 inline-block">
                         More Info
                     </a>
                </div>
    
                <!-- Album 2: SOS -->
                <div class="text-center">
                    <img src="https://media.pitchfork.com/photos/638902d5f777c8e284615da3/1:1/w_1500,h_1500,c_limit/SZA.jpg" 
                         alt="SOS Album Cover" 
                         class="w-48 h-48 mx-auto rounded-lg shadow-lg">
                    <h3 class="text-2xl font-extrabold text-gray-700 mt-4">
                        SOS
                    </h3>
                    <p class="py-4 text-gray-700 text-sm leading-relaxed">
                        Released: December 9, 2022 <br>
                        SZA's second studio album, featuring "Good Days" and "I Hate U."
                    </p>
                    <a href="{{ route('album.info', ['album' => 'SOS']) }}" 
                        class="bg-purple-300 text-white py-2 px-4 rounded-lg mt-3 inline-block">
                         More Info
                     </a>
                </div>
    
                <!-- EP 1: See.SZA.Run -->
                <div class="text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFIaiWrUKL-O9aXwPKT8hv6zm4q99P9knhPw&s" 
                         alt="See.SZA.Run EP Cover" 
                         class="w-48 h-48 mx-auto rounded-lg shadow-lg">
                    <h3 class="text-2xl font-extrabold text-gray-700 mt-4">
                        See.SZA.Run
                    </h3>
                    <p class="py-4 text-gray-700 text-sm leading-relaxed">
                        Released: October 29, 2012 <br>
                        SZA's debut EP, showcasing her early R&B and soul sound.
                    </p>
                    <a href="{{ route('album.info', ['album' => 'See.SZA.Run']) }}" 
                        class="bg-purple-300 text-white py-2 px-4 rounded-lg mt-3 inline-block">
                         More Info
                     </a>
                </div>
    
                <!-- EP 2: S -->
                <div class="text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/en/3/3d/S_-_ep_-_by_-_SZA.png" 
                         alt="S EP Cover" 
                         class="w-48 h-48 mx-auto rounded-lg shadow-lg">
                    <h3 class="text-2xl font-extrabold text-gray-700 mt-4">
                        S
                    </h3>
                    <p class="py-4 text-gray-700 text-sm leading-relaxed">
                        Released: April 10, 2013 <br>
                        SZA's second EP, featuring tracks like "Teen Spirit."
                    </p>
                    <a href="{{ route('album.info', ['album' => 'S']) }}" 
                        class="bg-purple-300 text-white py-2 px-4 rounded-lg mt-3 inline-block">
                         More Info
                     </a>
                </div>
    
                <!-- EP 3: Z -->
                <div class="text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/en/f/f4/SZA_-_Z.png" 
                         alt="Z EP Cover" 
                         class="w-48 h-48 mx-auto rounded-lg shadow-lg">
                    <h3 class="text-2xl font-extrabold text-gray-700 mt-4">
                        Z
                    </h3>
                    <p class="py-4 text-gray-700 text-sm leading-relaxed">
                        Released: April 8, 2014 <br>
                        SZA's third EP, featuring collaborations with Kendrick Lamar.
                    </p>
                    <a href="{{ route('album.info', ['album' => 'Z']) }}" 
                        class="bg-purple-300 text-white py-2 px-4 rounded-lg mt-3 inline-block">
                         More Info
                     </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: PHP Blog Post -->
    <section class="p-15 bg-[#f5ebe0] pt-20 pb-20"> <!-- Use padding instead of margin -->
        <div class="sm:grid grid-cols-2 w-4/5 m-auto bg-green-600">
            <div class="flex bg-yellow-700 text-gray-100 pt-10">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                    <span class="uppercase text-xs">
                       POPULAR
                    </span>

                    <h3 class="text-xl font-bold py-10">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                    </h3>

                    <a 
                        href=""
                        class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                        Find Out More
                    </a>
                </div>
            </div>
            <div>
                <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
            </div>
        </div>
    </section>
</div>

@endsection