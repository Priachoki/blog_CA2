@extends('layouts.app')

@section('content')

<!-- Full Page Container with Background Color -->
<div class="min-h-screen bg-gray-100 text-gray-900">

    <!-- Header Section with Clean Design -->
    <section class="relative flex items-center justify-center text-center bg-white py-20 shadow-md">
        <div>
            <h1 class="text-6xl font-extrabold uppercase tracking-wider text-gray-800">
                About SZA
            </h1>
            <p class="text-lg mt-4 text-gray-600 max-w-2xl mx-auto">
                Discover the artistry, journey, and impact of one of R&B's most defining voices.
            </p>
        </div>
    </section>

    <!-- About SZA Content -->
    <div class="w-4/5 mx-auto py-16">

        <!-- Introduction Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10 mb-16">
            <div class="text-left">
                <h2 class="text-5xl font-bold text-gray-900 mb-6">Who is SZA?</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    SZA (Solána Imani Rowe) is a Grammy-winning R&B artist known for her soulful voice, poetic lyrics, and genre-blending sound.
                    She gained mainstream recognition with her critically acclaimed album <i>Ctrl</i> and continues to redefine modern R&B
                    with her unique storytelling and experimental style.
                </p>
            </div>
            <div class="flex justify-center">
                <img src="https://media.gettyimages.com/id/1986486328/photo/los-angeles-california-sza-accepts-the-best-r-b-song-award-for-snooze-onstage-during-the-66th.jpg?s=612x612&w=gi&k=20&c=gXHqwl7GMlTKCPG54LrqY0FsMK_1ZvfOkkNZUZIgg-I=" 
                     alt="SZA Award" 
                     class="max-w-md w-full h-auto rounded-lg shadow-lg transition transform hover:scale-105">
            </div>
        </div>

        <!-- Section Divider -->
        <div class="w-full h-1 bg-gray-300 rounded-lg my-16"></div>

        <!-- SZA’s Musical Journey Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
            <div class="flex justify-center order-2 md:order-1">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA6GHJSdMjLgPe95RE_QC6dTpuKS5kzcWZj4SPP4MOxisB7E8AlUEcHak&s" 
                     alt="SZA Performing" 
                     class="max-w-md w-full h-auto rounded-lg shadow-lg transition transform hover:scale-105">
            </div>
            <div class="text-left order-1 md:order-2">
                <h3 class="text-4xl font-bold text-gray-900 mb-6">A Journey Through Music</h3>
                <p class="text-lg text-gray-700 leading-relaxed">
                    SZA's musical journey began in the early 2010s when she independently released her first two EPs, 
                    <i>See.SZA.Run</i> (2012) and <i>S</i> (2013). Her ability to mix R&B, neo-soul, and alternative 
                    influences quickly caught the attention of **Top Dawg Entertainment (TDE)**, making her the label’s 
                    first female signee.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed mt-4">
                    With the release of <i>Ctrl</i> in 2017, SZA achieved mainstream success. The album, filled with introspective
                    lyrics and emotional storytelling, featured hits like "Love Galore," "Drew Barrymore," and "The Weekend."
                    It was praised for its raw honesty and vulnerability, making SZA a defining voice in contemporary R&B.
                </p>
            </div>
        </div>

        <!-- Section Divider -->
        <div class="w-full h-1 bg-gray-300 rounded-lg my-16"></div>

        <!-- The Impact of SZA Section -->
        <div class="text-center mb-16">
            <h3 class="text-4xl font-bold text-gray-900 mb-6">The Impact of SZA</h3>
            <p class="text-lg text-gray-700 leading-relaxed max-w-3xl mx-auto">
                SZA’s influence on the music industry goes beyond her sound. She has inspired a new wave of R&B artists, championed self-love and
                authenticity, and consistently pushes creative boundaries. With her latest album <i>SOS</i> (2022), she continues to break records, 
                proving that her music is both timeless and innovative.
            </p>
        </div>

        <!-- SZA's Achievements Section with Interactive Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
            
            <!-- Achievement 1 -->
            <div class="bg-white p-8 rounded-lg shadow-lg transition transform hover:scale-105">
                <h4 class="text-3xl font-bold text-gray-900">🏆 Grammy Winner</h4>
                <p class="text-gray-600 mt-4">Won Best R&B Song for "Snooze" at the 66th Grammy Awards.</p>
            </div>

            <!-- Achievement 2 -->
            <div class="bg-white p-8 rounded-lg shadow-lg transition transform hover:scale-105">
                <h4 class="text-3xl font-bold text-gray-900">💿 Platinum Albums</h4>
                <p class="text-gray-600 mt-4"><i>Ctrl</i> and <i>SOS</i> both achieved multi-platinum status.</p>
            </div>

            <!-- Achievement 3 -->
            <div class="bg-white p-8 rounded-lg shadow-lg transition transform hover:scale-105">
                <h4 class="text-3xl font-bold text-gray-900">📈 Billboard #1</h4>
                <p class="text-gray-600 mt-4"><i>SOS</i> debuted at #1 on the Billboard 200.</p>
            </div>

        </div>

        <!-- CTA Section -->
        <div class="mt-20 text-center">
            <h3 class="text-4xl font-bold text-gray-900">Stay Updated</h3>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto mt-4">
                Follow SZA’s journey and never miss an update on her music, tours, and achievements.
            </p>
            <a href="/blog" 
               class="mt-6 inline-block bg-black text-white font-semibold text-lg py-3 px-6 rounded-lg shadow-lg transition hover:bg-gray-800 hover:scale-105">
                Explore More
            </a>
        </div>

    </div>

</div>

@endsection
