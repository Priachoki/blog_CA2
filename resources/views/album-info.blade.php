@extends('layouts.app')

@section('content')
<div class="w-4/5 mx-auto py-10">
    <h1 class="text-5xl font-bold text-center text-gray-700">{{ ucfirst($album) }}</h1>
    
    <p class="mt-5 text-lg text-gray-600 text-center">
        Details about {{ ucfirst($album) }} will be displayed here.
    </p>

    <div class="mt-10 text-center">
        <a href="{{ url('/') }}" class="bg-blue-500 text-white py-2 px-4 rounded-lg">
            Go Back Home
        </a>
    </div>
</div>
@endsection
