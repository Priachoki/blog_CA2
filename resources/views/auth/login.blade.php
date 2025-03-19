@extends('layouts.app')

@section('content')
<main class="flex items-center justify-center h-screen" style="background-color: #FEFAE0;">
    <div class="w-full max-w-md">
        <section class="bg-gray-800 text-white border border-gray-700 shadow-xl rounded-2xl p-8">

            <!-- Header -->
            <header class="text-center font-bold text-xl">
                {{ __('Login') }}
            </header>

            <form class="mt-6 space-y-4" method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Field -->
                <div>
                    <label for="email" class="text-gray-300 text-sm font-semibold">Email Address:</label>
                    <input id="email" type="email"
                        class="w-full bg-gray-700 text-white border border-gray-600 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-500"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                    @error('email')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="text-gray-300 text-sm font-semibold">Password:</label>
                    <input id="password" type="password"
                        class="w-full bg-gray-700 text-white border border-gray-600 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-500"
                        name="password" required placeholder="Enter your password">
                    @error('password')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <label class="inline-flex items-center text-gray-400 text-sm">
                        <input type="checkbox" name="remember" id="remember" class="form-checkbox accent-gray-500"
                            {{ old('remember') ? 'checked' : '' }}>
                        <span class="ml-2">Remember Me</span>
                    </label>

                    @if (Route::has('password.request'))
                    <a class="text-sm text-gray-300 hover:text-white hover:underline" href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                    @endif
                </div>

                <!-- Login Button (Same Color as Page Background) -->
                <button type="submit"
                    class="w-full font-bold py-3 rounded-lg shadow-lg transition-all text-gray-800"
                    style="background-color: #FEFAE0; hover:opacity-80;">
                    {{ __('Login') }}
                </button>

                <!-- Register Link -->
                @if (Route::has('register'))
                <p class="text-gray-400 text-center text-sm mt-4">
                    {{ __("Don't have an account?") }}
                    <a class="text-gray-200 hover:text-white hover:underline" href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>
                </p>
                @endif
            </form>

        </section>
    </div>
</main>
@endsection
