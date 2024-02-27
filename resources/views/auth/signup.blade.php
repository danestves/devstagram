@extends('layouts.app')

@section('title')
    Sign up on DevStagram
@endsection

@section('content')
    <div class="md:flex md:items-center md:justify-center md:gap-10">
        <div class="p-5 md:w-6/12">
            <img src="{{ asset('img/signup.jpg') }}" alt=""/>
        </div>

        <div class="rounded-lg bg-white p-6 shadow-xl md:w-1/3">
            <form action="{{ route('signup') }}" method="POST" class="flex flex-col gap-5" novalidate>
                @csrf

                <div>
                    <label for="name" class="mb-2 block font-bold uppercase text-gray-500">
                        Name
                    </label>

                    <input id="name" name="name" type="text" placeholder="Your name"
                           class="w-full rounded-lg border p-3" value="{{ old('name') }}"/>

                    @error('name')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="username" class="mb-2 block font-bold uppercase text-gray-500">
                        Username
                    </label>

                    <input id="username" name="username" type="text" placeholder="Your username"
                           class="w-full rounded-lg border p-3" value="{{ old('username') }}"/>

                    @error('username')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="mb-2 block font-bold uppercase text-gray-500">
                        Email
                    </label>

                    <input id="email" name="email" type="email" inputmode="email" placeholder="Your email"
                           class="w-full rounded-lg border p-3" value="{{ old('email') }}"/>

                    @error('email')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="mb-2 block font-bold uppercase text-gray-500">
                        Password
                    </label>

                    <input id="password" name="password" type="password" placeholder="••••••••"
                           class="w-full rounded-lg border p-3"/>

                    @error('password')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="mb-2 block font-bold uppercase text-gray-500">
                        Confirm password
                    </label>

                    <input id="password_confirmation" name="password_confirmation" type="password"
                           placeholder="••••••••"
                           class="w-full rounded-lg border p-3"/>

                    @error('password_confirmation')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="w-full rounded-lg bg-sky-600 p-3 font-bold uppercase text-white transition-colors hover:bg-sky-700">
                    Create account
                </button>
            </form>
        </div>
    </div>
@endsection
