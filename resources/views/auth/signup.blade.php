@extends('layouts.app')

@section('title')
    Sign up on DevStagram
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="p-5 md:w-6/12">
            <img src="{{ asset('img/signup.jpg') }}" alt="" />
        </div>

        <div class="bg-white p-6 rounded-lg shadow-xl md:w-1/3">
            <form action="{{ route('signup') }}" method="POST" class="flex flex-col gap-5" novalidate>
                @csrf

                <div>
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Name
                    </label>

                    <input id="name" name="name" type="text" placeholder="Your name"
                        class="border p-3 w-full rounded-lg" value="{{ old('name') }}" />

                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>

                    <input id="username" name="username" type="text" placeholder="Your username"
                        class="border p-3 w-full rounded-lg" value="{{ old('username') }}" />

                    @error('username')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

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
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Confirm password
                    </label>

                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="••••••••"
                        class="border p-3 w-full rounded-lg" />

                    @error('password_confirmation')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="bg-sky-600 hover:bg-sky-700 uppercase font-bold w-full p-3 transition-colors rounded-lg text-white">
                    Create account
                </button>
            </form>
        </div>
    </div>
@endsection
