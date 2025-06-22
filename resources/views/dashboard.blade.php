@php
    $categories ??= collect([]);
    $posts ??= collect([]);
@endphp

<x-app-layout>
    <div class="py-10">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            @if ($categories->isNotEmpty())
                <x-category.category-tab :$categories />
            @endif
            <div class="flex flex-col gap-10 rounded-lg">
                <x-post.post-view :$posts />
            </div>
        </div>
    </div>
</x-app-layout>
