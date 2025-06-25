@extends('components.layout.layout')

@section('content')
    <img class="h-150 mr-12 max-lg:h-100" src="{{ asset('images/wall-titan.png') }}" alt="">
    <div class="flex flex-col items-center  ">
        <h1 class="titleApi text-8xl text-zinc-400 text-center max-lg:text-6xl">
            <span class="text-red-600">A</span>ttack<br>
            <span class="text-red-600">o</span>n<br>
            <span class="text-red-600">T</span>itan
        </h1>
    </div>
@endsection
