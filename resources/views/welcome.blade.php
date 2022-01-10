@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    {{--
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    --}}

    <div class="p-4 max-w-6xl mx-auto sm:px-6 lg:px-8 text-center">
        <h1 class="text-center">Create Your Custom Furby Friend</h1>
        <p class="mssg">{{ session('mssg') }}</p>
        <img class="homeimage mt-5" src="/img/furby-boom.png" alt="Boom Era Furby"/>
    </div>
</div>
@endsection
