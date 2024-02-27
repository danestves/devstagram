@extends("layouts.app")

@section("title")
    Profile: {{ $user->username }}
@endsection

@section("content")
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-1/2 flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:w-1/2 px-5">
                <img src="{{ asset("img/user.svg") }}" alt="{{ $user->username }}" />
            </div>

            <div class="md:w-8/12 lg:w-1/2 flex flex-col items-center md:justify-center md:items-start py-10 px-5">
                <p class="text-gray-700 text-2xl mb-5">{{ $user->username }}</p>

                <div class="flex flex-col gap-3">
                    <p class="text-gray-800 text-sm font-bold">
                        0
                        <span class="font-normal">Followers</span>
                    </p>

                    <p class="text-gray-800 text-sm font-bold">
                        0
                        <span class="font-normal">Following</span>
                    </p>

                    <p class="text-gray-800 text-sm font-bold">
                        0
                        <span class="font-normal">Posts</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
