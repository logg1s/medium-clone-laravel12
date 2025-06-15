@php
    $categories = isset($categories) && is_iterable($categories) ? $categories : [];
    $posts = isset($posts) && is_iterable($posts) ? $posts : [];
@endphp

<x-app-layout>
    <div class="py-10">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <x-categoryTab :$categories />
            <div class="flex flex-col gap-10 rounded-lg">
                <x-postView :$posts />
            </div>
        </div>
    </div>
</x-app-layout>
