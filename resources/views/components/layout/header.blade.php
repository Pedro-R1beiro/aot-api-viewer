<header class="fixed top-0 z-99 flex w-full justify-between items-center h-22 p-10 bg-zinc-950 text-white">
    <div class="flex items-center">
        <img class="h-18 mr-5" src="{{ asset('images/exploration-troop.png') }}" alt="">
        <h1 class="text-2xl">API AOT</h1>
    </div>
    <ul class="flex gap-10">
        <li class="p-2 hover:scale-110 text-base {{ Route::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
        <li class="p-2 hover:scale-110 text-base {{ Route::is('episodes') ? 'active' : '' }}"><a href="{{ route('episodes') }}">Episodes</a></li>
        <li class="p-2 hover:scale-110 text-base {{ Route::is('titans') ? 'active' : '' }}"><a href="{{ route('titans') }}">Titans</a></li>
        <li class="p-2 hover:scale-110 text-base {{ Route::is('characters') ? 'active' : '' }}"><a href="{{ route('characters') }}">Characters</a></li>
    </ul>
</header>
