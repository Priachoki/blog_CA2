@extends('layouts.app')

@section('content')

<!-- Full Page Container with Background Color -->
<div class="min-h-screen bg-[#F3F4F6]">

    <!-- Header Section with Video Background -->
    <section class="relative h-[600px] overflow-hidden">
        <video autoplay muted loop class="absolute inset-0 w-full h-full object-contain">
            <source src="{{ asset('videos/sza-reel1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="relative z-20 flex items-center justify-center h-full bg-black/50">
            <header class="text-center bg-white/10 backdrop-blur-md p-6 rounded-xl shadow-lg">
                <h1 class="text-5xl font-bold uppercase text-white tracking-wide">
                    Blog Posts
                </h1>
            </header>
        </div>
    </section>

    <!-- Session Message -->
    @if (session()->has('message'))
        <div class="w-4/5 mx-auto mt-8">
            <p class="w-2/6 mx-auto mb-4 text-white bg-green-500 rounded-lg py-4 text-center shadow-md">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    <!-- Create Post Button (For Logged-in Users) -->
    @if (Auth::check())
        <div class="w-4/5 mx-auto mt-10 flex justify-end">
            <a href="/blog/create" 
               class="bg-gradient-to-r from-gray-900 to-black text-white text-lg py-3 px-6 rounded-lg shadow-md transition transform hover:scale-105">
                + Create Post
            </a>
        </div>
    @endif

    <!-- Blog Posts Section (Grid Layout - 2 per row) -->
    <div class="w-4/5 mx-auto my-12 grid grid-cols-1 md:grid-cols-2 gap-10">
        @foreach ($posts as $post)
            <article class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="grid grid-cols-1">

                    <!-- Resized Post Image (Shows the Full Image) -->
                    <div class="relative h-80 bg-gray-200 flex items-center justify-center">
                        <img src="{{ asset('images/' . $post->image_path) }}" 
                             alt="{{ $post->title }}" 
                             class="w-full h-full object-contain rounded-t-lg">
                    </div>

                    <!-- Post Content -->
                    <div class="p-6 flex flex-col justify-between">
                        
                        <div>
                            <h2 class="text-gray-900 font-semibold text-2xl pb-3 hover:text-gray-700 transition">
                                {{ $post->title }}
                            </h2>
                            <span class="text-gray-500 text-sm block mb-4">
                                By <span class="font-medium text-gray-800">{{ $post->user->name }}</span>, 
                                Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                            </span>
                            <!-- Short Description -->
                            <p class="text-md text-gray-700 leading-relaxed font-light mb-5">
                                {{ \Illuminate\Support\Str::limit($post->description, 120, '...') }}
                            </p>
                        </div>

                        <!-- Buttons: Read More, Edit, Delete -->
                        <div class="flex justify-between items-center">
                            <a href="/blog/{{ $post->slug }}" 
                               class="bg-gradient-to-r from-gray-900 to-black text-white text-md py-2 px-4 rounded-lg shadow-md transition hover:scale-105">
                                Read More
                            </a>

                            @if (Auth::check() && Auth::user()->id == $post->user_id)
                                <div class="flex items-center gap-3">
                                    <a href="/blog/{{ $post->slug }}/edit"
                                       class="bg-black text-white px-3 py-2 rounded-lg hover:bg-gray-900 transition transform hover:scale-105 shadow-md">
                                        Edit
                                    </a>
                                    <form action="/blog/{{ $post->slug }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="bg-gray-500 text-white px-3 py-2 rounded-lg hover:bg-gray-600 transition transform hover:scale-105 shadow-md" type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</div>

@endsection
