@extends('components.layout.layout')

@section('content')
<div class="min-h-[calc(100vh-88px-72px)] w-screen flex items-center justify-center">

    <img class="h-150 mr-12 max-lg:h-100" src="{{ asset('images/wall-titan.png') }}" alt="">
    <div class="flex flex-col items-center  ">
        <h1 class="titleApi text-8xl text-zinc-400 text-center max-lg:text-6xl">
            <span class="text-red-600">A</span>ttack<br>
            <span class="text-red-600">o</span>n<br>
            <span class="text-red-600">T</span>itan
        </h1>
    </div>
</div>
@endsection
