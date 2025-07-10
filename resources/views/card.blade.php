@extends('components/layout/layout')

@section('content')
    <div class="w-full min-h-full flex flex-col relative">
        <div class="fixed max-lg:relative">
            <div class="relative group w-2xl max-xl:w-lg min-h-full max-lg:w-screen">
                <img class="w-full h-[calc(100vh-88px-72px)] brightness-50 object-cover blur-md"
                    src="{{ url('https://static.wikia.nocookie.net/shingekinokyojin/images/9/93/Armin_Arlelt_%28Anime%29_character_image.png') }}"
                    alt="">
                <img class="group-hover:w-md absolute left-[50%] top-[50%] transform translate-[-50%] rounded-lg w-sm transition-all duration-500 ease-in-out"
                    src="{{ url('https://static.wikia.nocookie.net/shingekinokyojin/images/9/93/Armin_Arlelt_%28Anime%29_character_image.png') }}"
                    alt="">
                <div class="p-5 bg-zinc-950 rounded-b-lg max-lg:block absolute top-0 left-[50%] transform translate-x-[-50%] hidden">
                    <h1 class="text-3xl text-zinc-400 text-nowrap">Armin Arlelt</h1>
                </div>
            </div>
        </div>
        <div class="w-full pl-[672px] max-xl:pl-[512px] max-lg:p-0">
            <div class="w-full flex flex-col items-center p-20 gap-7">
                <div class="p-5 bg-zinc-800 rounded-lg max-lg:hidden">
                    <h1 class="text-3xl text-zinc-400">Armin Arlelt</h1>
                </div>
                <div class="p-5 rounded-lg bg-zinc-950 text-zinc-300 w-full">
                    <h1 class="text-center text-2xl">Personal Information</h1>
                    <div class="w-full flex flex-wrap justify-around gap-4 mt-3">
                        <p>Height: 60 m (Colossal Titan form)</p>
                        <p>Height: 60 m (Colossal Titan form)</p>
                        <p>Height: 60 m (Colossal Titan form)</p>
                        <p>Height: 60 m (Colossal Titan form)</p>
                        <p>Height: 60 m (Colossal Titan form)</p>
                        <p>Height: 60 m (Colossal Titan form)</p>
                        <p>Height: 60 m (Colossal Titan form)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
