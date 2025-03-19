@extends('layouts.app')

@section('content')

<!-- Set the background color to #FEFAE0 -->
<div style="background-color: #FEFAE0; min-height: 100vh;">

    <!-- Section with a full-width video playing in the background -->
    <section class="relative" style="height: 600px; overflow: hidden;">
        <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover">
            <source src="{{ asset('videos/sza-reel1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="grid grid-cols-1 m-auto relative z-20">
            <header>
                <div class="content">
                    <div class="flex justify-center pt-10">
                        <div class="m-auto w-4/5 block text-center">
                            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                                BLOG POSTS
                            </h1>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </section>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a 
                href="/blog/create"
                class="bg-black hover:bg-gray-800 text-white text-lg py-3 px-6 rounded-lg ml-4">
                Create post
            </a>
        </div>
    @endif

    @foreach ($posts as $post)
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-300">
            <div>
                <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" style="max-width: 100%; height: auto;">
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                    {{ $post->title }}
                </h2>

                <span class="text-gray-600">
                    By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>

                <!-- Short preview of the description -->
                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{ \Illuminate\Support\Str::limit($post->description, 150, '...') }}
                </p>

                <a href="/blog/{{ $post->slug }}" class="bg-black hover:bg-gray-800 text-white text-lg py-3 px-6 rounded-lg ml-4">
                    Keep Reading
                </a>

                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                    <div class="flex items-center gap-4 mt-6">
                        <a href="/blog/{{ $post->slug }}/edit"
                            class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-900 hover:text-gray-100 transition duration-300 ease-in-out transform hover:scale-105">
                            Edit
                        </a>

                        <form action="/blog/{{ $post->slug }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 hover:text-gray-100 transition duration-300 ease-in-out transform hover:scale-105"
                                type="submit">
                                Delete
                            </button>
                        </form>
                    </div>
                @endif
            </div>
        </div>     
    @endforeach

</div>

@endsection
