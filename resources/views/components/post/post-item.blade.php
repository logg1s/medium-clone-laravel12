    <div class="flex bg-white border-2 border-gray-200 sm:rounded-lg">
        <a href="#" class="p-5 flex-1 justify-center flex flex-col gap-2">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">
                {{ $post->title ?? '' }}
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{ Str::words($post->content ?? '', 50) }}</p>
        </a>
        @if (!empty($post->image) && Storage::disk('public')->exists($post->image))
            <a href={{ Storage::url($post->image) }}>
                <img class="rounded-r-lg w-56 h-56 object-cover" src={{ Storage::url($post->image) }} alt="Post image" />
            </a>
        @endif
    </div>
