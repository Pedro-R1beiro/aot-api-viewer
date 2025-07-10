@extends('components/layout/layout')

@section('content')
    <div class="flex flex-col w-[100%] items-center p-8 max-md:p-4 gap-10">
        @include('components/search-bar')
        @if (isset($data['results']))
        <div class="flex flex-wrap justify-around gap-4.5 w-[80%] max-md:w-full">
            @foreach ($data['results'] as $episode)
                @php
                    $cleanUrlImg = isset($episode['img']) ? Str::before($episode['img'], '/revision') : asset('images/image.png');
                @endphp

                <div
                    class="group bg-zinc-950 w-3xs max-md:w-50 p-5 rounded-lg text-zinc-400 hover:scale-105 relative pb-20 h-auto transition duration-300 ease-in-out">
                    <a class="flex flex-col items-center gap-10" href="#">
                        <p
                            class="absolute bg-zinc-950 p-3 rounded-b-lg top-0 group-hover:bg-red-600 group-hover:top-[-6px] transition-all duration-500 ease-in-out">
                            {{ $episode['episode'] }}</p>
                        <img class="w-[90%] h-40 object-cover group-hover:w-[100%] rounded-lg transition-all duration-300 ease-in-out"
                            src="{{ $cleanUrlImg }}" alt="">
                        <h1>{{ $episode['name'] }}</h1>
                        <button
                            class="absolute bottom-[12px] active p-2 hover:scale-105 text-white transition duration-300 ease-in-out">Check
                            out more</button>
                    </a>
                </div>
            @endforeach
        </div>
        @else
            @include('components/no-result')
        @endif
        @php
            $data = $data;
            $type = 'episodes';
        @endphp
        @include('components/btns-prev-next')
    </div>
@endsection

@section('script')
    const search = document.getElementById('search');
    const season = document.getElementById('season');

    const btnSearch = document.getElementById('btnSearch');

    function searchParams() {
        window.location.href = "{{ url("/episodes") }}?name=" + search.value + "&season=" + season.value;
    }

    btnSearch.addEventListener('click', searchParams);
@endsection
