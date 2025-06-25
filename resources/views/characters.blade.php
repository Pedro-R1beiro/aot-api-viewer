@extends('components/layout/layout')

@section('content')
    <div class="flex flex-col w-[100%] items-center p-8 gap-10">
        @include('components/search-bar')
        @if (isset($data['results']))
            <div class="flex flex-wrap justify-around gap-4.5 w-[80vw]">
                @foreach ($data['results'] as $character)
                    @php
                        $cleanUrlImg = isset($character['img'])
                            ? Str::before($character['img'], '/revision')
                            : asset('images/image.png');
                    @endphp

                    <div
                        class="group bg-zinc-950 w-3xs max-md:w-xs p-5 rounded-lg text-zinc-400 hover:scale-105 relative pb-20 h-auto transition duration-300 ease-in-out">
                        <a class="flex flex-col items-center gap-10" href="#">
                            @php
                                switch ($character['status']) {
                                    case 'Alive':
                                        $colorStatus = 'bg-green-950';
                                        break;
                                    case 'Deceased':
                                        $colorStatus = 'bg-red-950';
                                        break;
                                    default:
                                        $colorStatus = 'bg-zinc-950';
                                        break;
                                }
                            @endphp
                            <p
                                class="absolute {{ $colorStatus }} p-3 rounded-b-lg top-0 group-hover:opacity-90 group-hover:top-[-6px] transition-all duration-500 ease-in-out">
                                {{ $character['status'] }}</p>
                            <img class="w-[90%] h-40 object-cover group-hover:w-[100%] rounded-lg transition-all duration-300 ease-in-out"
                                src="{{ $cleanUrlImg }}" alt="">
                            <h1>{{ $character['name'] }}</h1>
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
            $type = 'characters';
        @endphp
        @include('components/btns-prev-next')
    </div>
@endsection

@section('script')
    const search = document.getElementById('search');
    const gender = document.getElementById('gender');
    const status = document.getElementById('status');
    const occupation = document.getElementById('occupation');

    const btnSearch = document.getElementById('btnSearch');

    function searchParams() {
    window.location.href = "{{ url('/characters') }}?name=" + search.value + "&gender=" + gender.value + "&status=" +
    status.value + "&occupation=" + occupation.value;
    }

    btnSearch.addEventListener('click', searchParams);
@endsection
