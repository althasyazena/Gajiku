<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
</head>

<body class="bg-white min-h-screen flex flex-col items-center justify-center px-8 py-16 font-poppins">

<section class="w-full max-w-5xl flex flex-col gap-14">

    <div class="flex flex-wrap items-center justify-between gap-6">
        <img src="{{ asset('assets/Element_1.png') }}" class="h-48 w-auto object-contain animate-pop-in" style="animation-delay:0s">
        <img src="{{ asset('assets/Element_2.png') }}" class="h-48 w-auto object-contain animate-pop-in" style="animation-delay:0s">
        <img src="{{ asset('assets/Element_3.png') }}" class="h-48 w-auto object-contain animate-pop-in" style="animation-delay:0s">
        <img src="{{ asset('assets/Element_4.png') }}" class="h-48 w-auto object-contain animate-pop-in" style="animation-delay:0s">
    </div>

    <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between gap-8">

        <div class="opacity-0 animate-fade-up" style="animation-delay:0.35s">
            <p class="text-4xl font-medium text-tertiary mb-1">
                Let's Start
            </p>

            <h1 class="text-7xl font-extrabold text-primary leading-none">
                Something New!
            </h1>
        </div>

        <div class="flex flex-row gap-3 opacity-0 animate-fade-up" style="animation-delay:0.48s">

            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}"
                       class="bg-secondary px-4 py-2 rounded-xl text-accent font-semibold">
                        Dashboard
                    </a>
                @else

                    <a href="{{ route('login') }}"
                       class="bg-secondary px-4 py-2 rounded-xl text-accent font-semibold hover:bg-accent hover:text-secondary transition duration-300 cursor-pointer">
                        Login
                    </a>

                    <a href="{{ route('login') }}"
                       class="bg-secondary px-4 py-2 rounded-xl text-accent font-semibold hover:bg-accent hover:text-secondary transition duration-300 cursor-pointer">
                        Register
                    </a>

                @endauth
            @endif

        </div>

    </div>

</section>

</body>
</html>