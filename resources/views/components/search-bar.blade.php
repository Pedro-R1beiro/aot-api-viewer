<div class="flex flex-col items-center">
    <div class="relative max-lg:w-[90vw]">
        <input class="bg-white rounded-lg h-10 w-lg max-lg:w-[65%] pl-10" type="text" name="search" id="search" placeholder="Search by name">
        <i class="fa-solid fa-magnifying-glass absolute left-1.5 top-[50%] transform translate-y-[-50%]"></i>
        <button id="btnSearch" class="active p-2 text-white hover:scale-110 w-fit">Search</button>
    </div>
    <div class="mt-[1rem] flex justify-around flex-wrap gap-3">
        @include('components/selects')
    </div>
</div>