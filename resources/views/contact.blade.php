@extends('layouts.app')

@section('content')
<!-- Sleek Dark Theme Contact Page -->
<section class="min-h-screen bg-gradient-to-b from-black via-[#0A0A0A] to-[#121212] text-white py-20 px-6">
    <div class="max-w-6xl mx-auto space-y-24">

        <!-- Hero Header -->
        <div class="text-center">
            <h1 class="text-5xl font-extrabold mb-3 tracking-tight">Let's Connect with SZA</h1>
            <p class="text-gray-400 text-md max-w-2xl mx-auto">Whether it’s business inquiries, fan appreciation, or media requests — here's everything you need to reach out and stay updated with SZA.</p>
        </div>

        <!-- Contact Info Card -->
        <div class="bg-[#181818] p-10 rounded-2xl shadow-xl border border-[#2A2A2A]">
            <h2 class="text-2xl font-semibold text-white mb-6">📩 Contact Information</h2>
            <ul class="space-y-5 text-gray-300 text-sm">
                <li><strong>Business:</strong> <a href="mailto:contact@szaofficial.com" class="text-blue-400 hover:underline">contact@szaofficial.com</a></li>
                <li><strong>Management:</strong> <a href="mailto:management@szaofficial.com" class="text-blue-400 hover:underline">management@szaofficial.com</a></li>
                <li><strong>Press:</strong> <a href="mailto:press@szaofficial.com" class="text-blue-400 hover:underline">press@szaofficial.com</a></li>
                <li><strong>Fan Mail:</strong> P.O. Box 1234, Los Angeles, CA 90001</li>
            </ul>
        </div>

        <!-- Official Links -->
        <div class="bg-[#181818] p-10 rounded-2xl shadow-xl border border-[#2A2A2A]">
            <h2 class="text-2xl font-semibold text-white mb-6">🔗 Official Links</h2>
            <div class="space-y-6">
                <a href="https://sza.lnk.to/Lana" target="_blank" class="block bg-[#232323] hover:bg-[#333] p-4 rounded-xl transition border border-[#333]">
                    <div class="flex justify-between items-center">
                        <span class="text-white font-medium">sza.lnk.to/Lana</span>
                        <span class="text-sm text-blue-400">Open</span>
                    </div>
                </a>
                <a href="https://youtu.be/1Wdzodfx87s?si=FXXyfGmqlRMmt996" target="_blank" class="block bg-[#232323] hover:bg-[#333] p-4 rounded-xl transition border border-[#333]">
                    <div class="flex flex-col">
                        <span class="text-white font-medium">Drive (Official Video)</span>
                        <span class="text-xs text-gray-400">youtu.be/1Wdzodfx87s?si=FXXyfGmqlRMmt996</span>
                    </div>
                </a>
                <a href="https://shop.szasos.com" target="_blank" class="block bg-[#232323] hover:bg-[#333] p-4 rounded-xl transition border border-[#333]">
                    <div class="flex flex-col">
                        <span class="text-white font-medium">Merch 🦺🪴⚽</span>
                        <span class="text-xs text-gray-400">shop.szasos.com</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Upcoming Events -->
        <div class="bg-[#181818] p-10 rounded-2xl shadow-xl border border-[#2A2A2A]">
            <h2 class="text-2xl font-semibold mb-6">📅 Upcoming Events</h2>
            <div class="space-y-6">
                <div class="flex justify-between items-center border-b border-gray-800 pb-4">
                    <div>
                        <p class="font-semibold text-white">April 5, 2025</p>
                        <p class="text-sm text-gray-400">Madison Square Garden, New York</p>
                    </div>
                    <a href="#" class="text-sm bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">Buy Tickets</a>
                </div>
                <div class="flex justify-between items-center border-b border-gray-800 pb-4">
                    <div>
                        <p class="font-semibold text-white">April 12, 2025</p>
                        <p class="text-sm text-gray-400">Crypto.com Arena, Los Angeles</p>
                    </div>
                    <a href="#" class="text-sm bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">Buy Tickets</a>
                </div>
                <div class="flex justify-between items-center">
                    <div>
                        <p class="font-semibold text-white">May 3, 2025</p>
                        <p class="text-sm text-gray-400">O2 Arena, London</p>
                    </div>
                    <a href="#" class="text-sm bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">Buy Tickets</a>
                </div>
            </div>
        </div>

        <!-- Social Embeds -->
        <div class="grid md:grid-cols-2 gap-10">
            <div>
                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/DF2HTZJuPAY/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style="background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px rgba(0,0,0,0.5), 0 1px 10px rgba(0,0,0,0.15); margin:1px auto; max-width:540px; min-width:326px; padding:0; width:99.375%;"></blockquote>
                <script async src="//www.instagram.com/embed.js"></script>
            </div>
            <div>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/7tYKF4w9nC0nq9CsPZTHyP?utm_source=generator&theme=0" width="100%" height="352" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                <iframe class="mt-6" allow="autoplay *; encrypted-media *; fullscreen *" frameborder="0" height="450" style="width:100%;max-width:660px;overflow:hidden;border-radius:12px" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/artist/sza/635682487"></iframe>
            </div>
        </div>

        <!-- YouTube Embed -->
        <div class="mt-10">
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/videoseries?list=UUBx8sXz3vY2k6lLE_zI8e3w" title="SZA Official YouTube" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="border-radius:12px;"></iframe>
        </div>

        <div class="mt-12">
            <a class="twitter-timeline" data-theme="dark" data-height="400" href="https://twitter.com/sza?ref_src=twsrc%5Etfw">Tweets by @sza</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>

        <!-- Notice -->
        <div class="bg-[#181818] p-8 rounded-xl text-gray-400 text-sm border border-[#2A2A2A]">
            <p class="font-semibold text-white mb-2">📌 Note:</p>
            <p>Due to high volumes of messages, responses may be delayed. Please use official contact emails for business and press inquiries. We appreciate your love and support!</p>
        </div>

    </div>
</section>
@endsection
