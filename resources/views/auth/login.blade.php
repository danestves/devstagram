@extends("layouts.app")

@section("title")
    Login on DevStagram
@endsection

@section("content")
    <div class="md:flex md:items-center md:justify-center md:gap-10">
        <div class="p-5 md:w-6/12">
            <img src="{{ asset("img/login.jpg") }}" alt="" />
        </div>

        <div class="rounded-lg bg-white p-6 shadow-xl md:w-1/3">
            <form
                action="{{ route("login") }}"
                method="POST"
                class="flex flex-col gap-5"
                novalidate
            >
                @csrf

                @if (session("error"))
                    <p class="text-sm text-red-500">{{ session("error") }}</p>
                @endif

                <div>
                    <label
                        for="email"
                        class="mb-2 block font-bold uppercase text-gray-500"
                    >
                        Email
                    </label>

                    <input
                        id="email"
                        name="email"
                        type="email"
                        inputmode="email"
                        placeholder="Your email"
                        class="w-full rounded-lg border p-3"
                        value="{{ old("email") }}"
                    />

                    @error("email")
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label
                        for="password"
                        class="mb-2 block font-bold uppercase text-gray-500"
                    >
                        Password
                    </label>

                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="••••••••"
                        class="w-full rounded-lg border p-3"
                    />

                    @error("password")
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="remember" class="flex items-center gap-2">
                        <input id="remember" name="remember" type="checkbox" />
                        <span class="text-sm text-gray-500">Remember me</span>
                    </label>
                </div>

                <button
                    type="submit"
                    class="w-full rounded-lg bg-sky-600 p-3 font-bold uppercase text-white transition-colors hover:bg-sky-700"
                >
                    Login
                </button>
            </form>
        </div>
    </div>
@endsection
