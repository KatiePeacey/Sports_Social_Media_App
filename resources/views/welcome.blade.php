@extends('layouts.welcomeLayout')

@section('content')

    <div class="bg-blue-800 p-9">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="text-center">
                <h1 class="text-balance text-5xl font-semibold tracking-tight text-white sm:text-7xl font-serif">Welcome</h1>
                <p class="mt-8 text-pretty text-lg font-medium text-gray-200 sm:text-xl/8"> The modern hockey management system to share stats and posts all in one place.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    @if (Route::has('login'))
                        <nav class="mt-10 flex items-center justify-center gap-x-6">
                            @auth
                            <a href="{{ url('/posts') }}"
                            class="rounded-md bg-gray-200 px-3.5 py-2.5 text-lg font-semibold text-black shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">
                            Noticeboard </a>
                           
                            @else
                                <a href="{{ route('login') }}"
                                class="rounded-md bg-gray-200 px-3.5 py-2.5 text-lg font-semibold text-black shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">
                                Log in </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                class="text- font-semibold text-gray-200 hover:text-black">
                                Register </a>
                            @endif
                            @endauth
                        </nav>
                    @endif
                </div>
            </div>
      </div>
    </div>
@endsection