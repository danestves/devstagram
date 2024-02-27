@extends("layouts.app")

@section("title")
    Home
@endsection

@section("content")
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-1/2 md:flex">
            <div class="md:w-8/12 lg:w-1/2 px-5">
                <img src="{{ asset("img/user.svg") }}" alt="{{ auth()->user()->username }}" />
            </div>

            <div class="md:w-8/12 lg:w-1/2 px-5">
                <p class="text-gray-700 text-2xl">{{ auth()->user()->username }}</p>
            </div>
        </div>
    </div>
@endsection
