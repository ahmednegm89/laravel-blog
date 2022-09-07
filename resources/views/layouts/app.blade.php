<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 font-sans antialiased">
        <div>
            <!-- Page Heading -->
            <header class="bg-gray-800 py-6">
                <div class="container mx-auto flex justify-between items-center px-6">
                    <div>
                        <a href="{{url('/')}}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <nav class="space-x-4 text-gray-300 text-sm sm:text-base" >
                        <a href="/" class="hover:underline no-underline">Home</a>
                        <a href="/blog" class="hover:underline no-underline">Blog</a>
                        @guest
                        <a href="{{ route('login') }}" class="hover:underline no-underline">Log in</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="hover:underline no-underline">Register</a>
                        @endif
                        @else
                        <span style="cursor:pointer" >{{Auth::user()->name}}</span>
                        <form method="POST" action="{{ route('logout') }}" style="display: inline; cursor:pointer">
                            <a class="hover:underline no-underline" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                            @csrf
                        </form>
                        @endguest
                    </nav>
                </div>
            </header>

            <!-- Page Content -->

            <div>
                @yield('content')
            </div>
            <div>
                @include('layouts.footer')
            </div>
        </div>
    </body>
</html>
