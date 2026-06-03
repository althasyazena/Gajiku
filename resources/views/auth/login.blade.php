<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gajiku Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="bg-white min-h-screen flex items-center justify-center p-4">

    <div class="relative w-full max-w-3xl h-130 rounded-3xl shadow-2xl overflow-hidden bg-white">

    <!-- SIGN UP -->
    <div id="formSignUp"
        class="absolute inset-y-0 right-0 w-1/2 flex flex-col items-center justify-center gap-4 px-10 bg-white transition-opacity duration-300">

        <h1 class="font-syne text-2xl font-extrabold text-tertiary">Create Account</h1>

        <!-- SOCIAL -->
        <div class="flex gap-3">
            <button class="social-btn" type="button">
                <i class="ri-google-fill text-2xl text-secondary bg-primary px-1 py-1 rounded-lg"></i>
            </button>
            <button class="social-btn" type="button">
                <i class="ri-facebook-circle-fill text-2xl text-secondary bg-primary px-1 py-1 rounded-lg"></i>
            </button>
            <button class="social-btn" type="button">
                <i class="ri-github-fill text-2xl text-secondary bg-primary px-1 py-1 rounded-lg"></i>
            </button>
            <button class="social-btn" type="button">
                <i class="ri-linkedin-box-fill text-2xl text-secondary bg-primary px-1 py-1 rounded-lg"></i>
            </button>
        </div>

        <p class="text-xs text-neutral-400">Register with Email & Password</p>

        <input type="text"
            placeholder="Full Name"
            class="w-full bg-neutral-100 text-sm px-4 py-3 rounded-xl border border-transparent focus:outline-none focus:border-tertiary placeholder-neutral-400 transition-colors" />

        <input type="email"
            placeholder="Enter E-mail"
            class="w-full bg-neutral-100 text-sm px-4 py-3 rounded-xl border border-transparent focus:outline-none focus:border-tertiary placeholder-neutral-400 transition-colors" />

        <input type="password"
            placeholder="Enter Password"
            class="w-full bg-neutral-100 text-sm px-4 py-3 rounded-xl border border-transparent focus:outline-none focus:border-tertiary placeholder-neutral-400 transition-colors" />

        <button
            class="w-full bg-accent hover:bg-primary text-white font-syne font-bold text-xs tracking-widest uppercase py-3 rounded-xl transition-colors shadow-lg shadow-red-100 cursor-pointer">
            Sign Up
        </button>

    </div>

    <!-- SIGN IN -->
    <div id="formSignIn"
        class="absolute inset-y-0 left-0 w-1/2 flex flex-col items-center justify-center gap-4 px-10 bg-white transition-opacity duration-300">

        <h1 class="font-syne text-2xl font-extrabold text-tertiary">Sign In</h1>

        <!-- SOCIAL -->
        <div class="flex gap-3">
            <button class="social-btn" type="button">
                <i class="ri-google-fill text-2xl text-secondary bg-primary px-1 py-1 rounded-lg"></i>
            </button>
            <button class="social-btn" type="button">
                <i class="ri-facebook-circle-fill text-2xl text-secondary bg-primary px-1 py-1 rounded-lg"></i>
            </button>
            <button class="social-btn" type="button">
                <i class="ri-github-fill text-2xl text-secondary bg-primary px-1 py-1 rounded-lg"></i>
            </button>
            <button class="social-btn" type="button">
                <i class="ri-linkedin-box-fill text-2xl text-secondary bg-primary px-1 py-1 rounded-lg"></i>
            </button>
        </div>

        <p class="text-xs text-neutral-400">Sign in With Email & Password</p>

        <form method="POST" action="{{ route('login') }}" class="w-full flex flex-col gap-4">
            @csrf

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="username"
                placeholder="Enter E-mail"
                class="w-full bg-neutral-100 text-sm px-4 py-3 rounded-xl border border-transparent focus:outline-none focus:border-red-500 placeholder-neutral-400 transition-colors"
            >

            @error('email')
                <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror

            <input
                type="password"
                name="password"
                required
                autocomplete="current-password"
                placeholder="Enter Password"
                class="w-full bg-neutral-100 text-sm px-4 py-3 rounded-xl border border-transparent focus:outline-none focus:border-red-500 placeholder-neutral-400 transition-colors"
            >

            @error('password')
                <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror

            <label class="flex items-center gap-2 text-xs text-gray-500">
                <input type="checkbox" name="remember">
                Remember Me
            </label>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-xs text-black hover:text-tertiary">
                    Forget Password?
                </a>
            @endif

            <button
                type="submit"
                class="w-full bg-accent hover:bg-primary text-white font-syne font-bold text-xs tracking-widest uppercase py-3 rounded-xl transition-colors shadow-lg shadow-red-100 cursor-pointer">
                Sign In
            </button>
        </form>

    </div>

    <!-- RED PANEL -->
    <div id="redPanel"
        class="absolute inset-y-0 left-0 w-1/2 z-20 flex flex-col items-center justify-center text-center px-10 gap-5 rounded-3xl"
        style="background-color: var(--color-tertiary); transition: left 0.55s cubic-bezier(0.77,0,0.18,1), border-radius 0.55s;">

        <div id="panelLeft" class="flex flex-col items-center gap-4">
            <p class="text-white text-xs uppercase tracking-widest">Gajiku</p>
            <h2 class="font-syne text-white text-4xl font-extrabold">Let’s Get<br>You In!</h2>
            <p class="text-white text-sm">Already have an account?</p>
            <button onclick="goSignIn()"
                type="button"
                class="btn-outline w-full bg-secondary py-2 rounded-xl text-accent font-semibold hover:bg-accent hover:text-secondary transition-colors cursor-pointer">
                Sign In
            </button>
        </div>

        <div id="panelRight" class="hidden flex-col items-center gap-4">
            <p class="text-white text-xs uppercase tracking-widest">Gajiku</p>
            <h2 class="font-syne text-white text-4xl font-extrabold">Let’s Start<br>Something New!</h2>
            <button onclick="goSignUp()"
                type="button"
                class="btn-outline w-full bg-secondary py-2 rounded-xl text-accent font-semibold hover:bg-accent hover:text-secondary transition-colors cursor-pointer">
                Sign Up
            </button>
        </div>

    </div>

</div>

</body>
</html>