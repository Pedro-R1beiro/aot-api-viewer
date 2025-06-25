@php
    function getPage(string $url)
    {
        if (!$url) {
            return null;
        }

        $query = parse_url($url, PHP_URL_QUERY);
        parse_str($query, $params);

        return isset($params['page']) ? (int) rtrim($params['page'], '?') : null;
    }

    $nextPage = !empty($data['info']['next_page']) ? getPage($data['info']['next_page']) : null;
    $currentPage = !empty($nextPage) ? $nextPage - 1 : $data['info']['pages'];
    $prevPage = $currentPage > 1 ? $currentPage - 1 : null;
@endphp

<div class="flex gap-7 items-center">
    @if (!empty($prevPage))
        <a href="{{ request()->fullUrlWithQuery(['page' => $prevPage]) }}"
            class="bg-zinc-700 rounded-lg text-white w-15 h-15 relative cursor-pointer hover:scale-110 border-b-6 border-b-zinc-800">
            <i class="fa-solid fa-chevron-left text-3xl absolute top-[50%] left-[50%] transform translate-[-50%]"></i>
        </a>
    @else
        <button class="bg-zinc-700 opacity-50 rounded-lg text-white w-15 h-15 relative border-b-6 border-b-zinc-800">
            <i class="fa-solid fa-chevron-left text-3xl absolute top-[50%] left-[50%] transform translate-[-50%]"></i>
        </button>
    @endif

    <p class="text-zinc-400 text-2xl">{{ $currentPage }} / {{ $data['info']['pages'] }}</p>

    @if (!empty($nextPage))
        <a href="{{ request()->fullUrlWithQuery(['page' => $nextPage]) }}"
            class="bg-zinc-700 rounded-lg text-white w-15 h-15 relative cursor-pointer hover:scale-110 border-b-6 border-b-zinc-800">
            <i class="fa-solid fa-chevron-right text-3xl absolute top-[50%] left-[50%] transform translate-[-50%]"></i>
        </a>
    @else
        <button class="bg-zinc-700 opacity-50 rounded-lg text-white w-15 h-15 relative border-b-6 border-b-zinc-800">
            <i class="fa-solid fa-chevron-right text-3xl absolute top-[50%] left-[50%] transform translate-[-50%]"></i>
        </button>
    @endif
</div>