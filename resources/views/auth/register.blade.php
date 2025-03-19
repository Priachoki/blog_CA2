@extends('layouts.app')

@section('content')
<main class="flex items-center justify-center h-screen" style="background-color: #FEFAE0;">
    <div class="w-full max-w-md">
        <section class="bg-gray-800 text-white border border-gray-700 shadow-xl rounded-2xl p-8">

            <!-- Header -->
            <header class="text-center font-bold text-xl">
                {{ __('Register') }}
            </header>

            <form class="mt-6 space-y-4" method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name Field -->
                <div>
                    <label for="name" class="text-gray-300 text-sm font-semibold">Name:</label>
                    <input id="name" type="text"
                        class="w-full bg-gray-700 text-white border border-gray-600 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-500"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your name">
                    @error('name')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="text-gray-300 text-sm font-semibold">E-Mail Address:</label>
                    <input id="email" type="email"
                        class="w-full bg-gray-700 text-white border border-gray-600 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-500"
                        name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email">
                    @error('email')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="text-gray-300 text-sm font-semibold">Password:</label>
                    <input id="password" type="password"
                        class="w-full bg-gray-700 text-white border border-gray-600 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-500"
                        name="password" required autocomplete="new-password" placeholder="Enter your password">
                    @error('password')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password Field -->
                <div>
                    <label for="password-confirm" class="text-gray-300 text-sm font-semibold">Confirm Password:</label>
                    <input id="password-confirm" type="password"
                        class="w-full bg-gray-700 text-white border border-gray-600 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-500"
                        name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password">
                </div>

                <!-- Register Button (Same Color as Page Background) -->
                <button type="submit"
                    class="w-full font-bold py-3 rounded-lg shadow-lg transition-all text-gray-800"
                    style="background-color: #FEFAE0; hover:opacity-80;">
                    {{ __('Register') }}
                </button>

                <!-- Already Have an Account? -->
                <p class="text-gray-400 text-center text-sm mt-4">
                    {{ __('Already have an account?') }}
                    <a class="text-gray-200 hover:text-white hover:underline" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                </p>

            </form>

        </section>
    </div>
</main>
@endsection
