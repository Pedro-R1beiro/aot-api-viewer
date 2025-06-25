<footer class="fixed bottom-0">
    <div class=" flex w-screen items-center bg-zinc-950 text-white h-18 relative">
        @if (Route::is('titans'))
            <img class="h-40 absolute right-20 bottom-[90%]" src="{{ asset('images/colossal-titan.png') }}" alt="">
        @endif
        <p class="pl-15">&copy; Dev Pedro Ribeiro</p>
    </div>
</footer>
