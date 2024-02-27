<!DOCTYPE html>
<html class="overflow-x-hidden antialiased transition duration-500"
      lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DevStagram - @yield('title')</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
<header class="border-b bg-white p-5 shadow">
    <div class="container mx-auto flex items-center justify-between">
        <a href="{{ route('home') }}">
            <h1 class="text-3xl font-black">DevStagram</h1>
        </a>

        @auth()
            <nav class="flex items-center gap-2">
                <a class="text-sm font-bold text-gray-600" href="#">
                    Hello: <span class="font-normal">{{ auth()->user()->name }}</span>
                </a>

                <form action="{{ route("logout") }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-sm font-bold uppercase text-gray-600">
                        Logout
                    </button>
                </form>
            </nav>
        @endauth

        @guest()
            <nav class="flex items-center gap-2">
                <a class="text-sm font-bold uppercase text-gray-600" href="{{ route("login") }}">Login</a>
                <a class="text-sm font-bold uppercase text-gray-600" href="{{ route('signup') }}">Register</a>
            </nav>
        @endguest
    </div>
</header>

<main class="container mx-auto mt-10">
    <h2 class="mb-10 text-center text-3xl font-black">
        @yield('title')
    </h2>

    @yield('content')
</main>

<footer class="mt-10 p-5 text-center font-bold uppercase text-gray-600">
    DevStagram - Todos los derechos reservados {{ now()->year }}
</footer>
</body>

</html>
