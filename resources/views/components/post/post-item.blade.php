<a href="#">
    <div class="flex bg-white border-2 border-gray-200 sm:rounded-lg">
        <div class="p-5 flex-1 justify-center  flex flex-col gap-2">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">
                {{ $post->title ?? '' }}
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{ Str::words($post->content ?? '', 50) }}</p>
        </div>
        <img class="rounded-r-lg w-56" src={{ $post->image ?? '' }} alt="Post image" />
    </div>
</a>
