@php
    $categories = isset($categories) && is_iterable($categories) ? $categories : [];
    $posts = isset($posts) && is_iterable($posts) ? $posts : [];
@endphp

<x-app-layout>
    <div class="py-10">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border-2 border-gray-200 overflow-hidden sm:rounded-lg  mb-5">
                <div class="p-6 text-gray-900">
                    <ul
                        class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 justify-center">
                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-3 text-white bg-blue-600 rounded-lg active"
                                aria-current="page">All</a>
                        </li>
                        @foreach ($categories as $category)
                            @if (!empty($category->name))
                                <li class="me-2">
                                    <a href="#"
                                        class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">{{ $category->name }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="flex flex-col gap-10 rounded-lg">
                @foreach ($posts as $post)
                    <a href="#">
                        <div class="flex bg-white border-2 border-gray-200 sm:rounded-lg">
                            <div class="p-5 flex-1 justify-center  flex flex-col gap-2">
                                <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">
                                    {{ $post->title ?? '' }}
                                </h5>
                                <p class="font-normal text-gray-700 dark:text-gray-400">
                                    {{ Str::words($post->content ?? '', 50) }}</p>
                            </div>
                            <img class="rounded-r-lg w-56" src="{{ $post->image ?? '' }}" alt="Post image" />
                        </div>
                    </a>
                @endforeach

                {{ $posts->onEachSide(1)->links() }}
            </div>

        </div>

    </div>
</x-app-layout>
