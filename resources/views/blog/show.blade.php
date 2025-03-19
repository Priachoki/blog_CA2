@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<!-- Display the blog post image -->
<div class="w-4/5 m-auto text-center">
    <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="rounded-lg shadow-lg" style="max-width: 100%; height: auto;">
</div>

<div class="w-4/5 m-auto pt-10">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>

    <!-- Back Button -->
    <div class="mt-6">
        <a href="{{ url('/blog') }}" class="bg-black hover:bg-gray-800 text-white text-lg py-3 px-6 rounded-lg ml-4">
            ← Back to Blog
        </a>
    </div>
</div>

@endsection
