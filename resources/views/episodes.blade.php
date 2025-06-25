@extends('components/layout/layout')

@section('content')
    <div class="flex flex-col w-[100%] items-center p-8 gap-10">
        <div>
            <div class="relative">
                <input class="bg-white rounded-lg h-10 w-lg max-lg:w-[calc(60vw)]" type="text" name="search" id="search">
                <i class="fa-solid fa-magnifying-glass absolute left-1.5 top-[50%] transform translate-y-[-50%]"></i>
            </div>
            <div class="mt-[1rem]">
                <div class="flex flex-col">
                    <label for="season" class="text-zinc-400">Season</label>
                    <select class="bg-white p-2 w-fit rounded-lg" name="season" id="season">
                        <option value="all">All</option>
                        <option value="S1">Season 1</option>
                        <option value="S2">Season 2</option>
                        <option value="S3">Season 3</option>
                        <option value="S4">Season 4</option>
                    </select>
                </div>
            </div>
        </div>
        {{-- <div class="flex flex-wrap justify-around gap-3.5 w-[80vw]">
            @foreach ($episodes['results'] as $episode)
                @php
                    $cleanUrlImg = Str::before($episode['img'], '/revision');
                @endphp

                <div class="bg-zinc-950 w-3xs p-5 rounded-lg text-zinc-400 hover:scale-105 relative pb-20 h-auto">
                    <a class="flex flex-col items-center gap-10" href="#">
                        <p class="absolute bg-zinc-950 p-3 rounded-lg top-0">{{ $episode['episode'] }}</p>
                        <img class="w-[100%] rounded-lg" src="{{ $cleanUrlImg }}" alt="">
                        <h1>{{ $episode['name'] }}</h1>
                        <button class="absolute bottom-[12px] active p-2 hover:scale-105 text-white">Check out more</button>
                    </a>
                </div>
            @endforeach
        </div> --}}
        <div>
            <button class="p-10 bg-zinc-700 rounded-lg text-white"><i class="fa-solid fa-chevron-left text-3xl  aspect-square"></i></button>
            <p></p>
            <button><i class="fa-solid fa-chevron-right text-3xl"></i></button>
        </div>
    </div>
@endsection
