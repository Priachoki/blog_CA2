@extends('layouts.app')

@section('content')
<style>
    /* Custom Login Button Styles */
    .login-button {
        background-color: #F4EBC1;
        color: #1F2937;
        font-size: 1.125rem;
        font-weight: 600;
        padding: 0.75rem;
        width: 100%;
        border: none;
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease;
        cursor: pointer;
    }

    .login-button:hover {
        background-color: #E6DFAF;
    }
</style>

<main class="min-h-screen flex items-center justify-center bg-[#FEFAE0] px-4 py-8">
    <div class="w-full max-w-5xl bg-white rounded-2xl shadow-xl overflow-hidden grid grid-cols-1 md:grid-cols-2">

        <!-- Left Side: Image -->
        <div class="h-full w-full">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBi3mMtCtyDkP2u-2sKZHNkqeO117HLs4kTQ&s"
                alt="Login Image"
                class="w-full h-full object-cover">
        </div>

        <!-- Right Side: Login Form -->
        <div class="bg-gray-800 text-white p-10 flex flex-col justify-center">
            <!-- Header -->
            <h2 class="text-3xl font-bold text-center mb-6">
                {{ __('Login') }}
            </h2>

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-300 mb-1">Email Address:</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500"
                        placeholder="Enter your email">
                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-300 mb-1">Password:</label>
                    <input id="password" type="password" name="password" required
                        class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500"
                        placeholder="Enter your password">
                    @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex justify-between items-center text-sm text-gray-400">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="remember" class="accent-gray-500">
                        <span class="ml-2">Remember Me</span>
                    </label>
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="hover:underline text-gray-300 hover:text-white">
                        Forgot Password?
                    </a>
                    @endif
                </div>

                <!-- Login Button -->
                <div>
                    <button type="submit" class="login-button">
                        Login
                    </button>
                </div>

                <!-- Register -->
                @if (Route::has('register'))
                <p class="text-center text-sm text-gray-400 mt-4">
                    {{ __("Don't have an account?") }}
                    <a href="{{ route('register') }}" class="hover:underline text-gray-200 hover:text-white">
                        {{ __('Register') }}
                    </a>
                </p>
                @endif
            </form>
        </div>

    </div>
</main>
@endsection
