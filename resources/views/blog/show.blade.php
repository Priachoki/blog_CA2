@extends('layouts.app')

@section('content')

<!-- Blog Post Container -->
<div class="min-h-screen bg-[#F3F4F6] py-12">

    <!-- Post Title Section -->
    <div class="w-4/5 mx-auto text-left">
        <div class="py-10">
            <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 leading-tight">
                {{ $post->title }}
            </h1>
        </div>
    </div>

    <!-- Blog Post Image -->
    <div class="w-4/5 mx-auto text-center">
        <div class="relative bg-gray-200 p-2 rounded-lg shadow-lg flex justify-center">
            <img src="{{ asset('images/' . $post->image_path) }}" 
                 alt="{{ $post->title }}" 
                 class="rounded-lg shadow-md max-w-3xl w-full h-96 object-contain">
        </div>
    </div>

    <!-- Blog Content Section -->
    <div class="w-4/5 mx-auto pt-10">

        <!-- Blog Meta Info -->
        <span class="text-gray-500 text-lg">
            By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, 
            Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
        </span>

        <!-- Blog Description -->
        <p class="text-lg md:text-xl text-gray-700 pt-8 pb-10 leading-relaxed font-light">
            {{ $post->description }}
        </p>

        <!-- Back Button (Original Color Preserved) -->
        <div class="mt-6">
            <a href="{{ url('/blog') }}" 
               class="bg-black hover:bg-gray-800 text-white text-lg py-3 px-6 rounded-lg shadow-md transition transform hover:scale-105">
                ← Back to Blog
            </a>
        </div>
    </div>
</div>

@endsection
