@extends('layouts.app')

@section('title')
    Login on DevStagram
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="p-5 md:w-6/12">
            <img src="{{ asset('img/login.jpg') }}" alt="" />
        </div>

        <div class="bg-white p-6 rounded-lg shadow-xl md:w-1/3">
            <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-5" novalidate>
                @csrf

                @if(session("error"))
                    <p class="text-red-500 text-sm">{{ session("error") }}</p>
                @endif

                <div>
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>

                    <input id="email" name="email" type="email" inputmode="email" placeholder="Your email"
                           class="border p-3 w-full rounded-lg" value="{{ old('email') }}" />

                    @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>

                    <input id="password" name="password" type="password" placeholder="••••••••"
                           class="border p-3 w-full rounded-lg" />

                    @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="remember" class="flex items-center gap-2">
                        <input id="remember" name="remember" type="checkbox" />
                        <span class="text-gray-500 text-sm">Remember me</span>
                    </label>
                </div>

                <button type="submit"
                        class="bg-sky-600 hover:bg-sky-700 uppercase font-bold w-full p-3 transition-colors rounded-lg text-white">
                    Login
                </button>
            </form>
        </div>
    </div>
@endsection
