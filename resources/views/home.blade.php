@extends("layouts.app")

@section("title")
    Profile: {{ $user->username }}
@endsection

@section("content")
    <div class="flex justify-center">
        <div
            class="flex w-full flex-col items-center md:w-8/12 md:flex-row lg:w-1/2"
        >
            <div class="w-8/12 px-5 lg:w-1/2">
                <img
                    src="{{ asset("img/user.svg") }}"
                    alt="{{ $user->username }}"
                />
            </div>

            <div
                class="flex flex-col items-center px-5 py-10 md:w-8/12 md:items-start md:justify-center lg:w-1/2"
            >
                <p class="mb-5 text-2xl text-gray-700">
                    {{ $user->username }}
                </p>

                <div class="flex flex-col gap-3">
                    <p class="text-sm font-bold text-gray-800">
                        0
                        <span class="font-normal">Followers</span>
                    </p>

                    <p class="text-sm font-bold text-gray-800">
                        0
                        <span class="font-normal">Following</span>
                    </p>

                    <p class="text-sm font-bold text-gray-800">
                        0
                        <span class="font-normal">Posts</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
