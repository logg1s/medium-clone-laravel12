<x-app-layout>
    <div class="py-10">
        <div class="max-w-3xl mx-auto bg-white rounded-lg p-8 shadow-sm">
            <h1 class="text-2xl mb-3">{{ $post->title ?? '' }}</h1>
            <div class="flex gap-5 items-center">
                <img src="{{ $post->user->avatarUrl() }}" alt="{{ $post->user->name }}"
                    class="rounded-full object-cover size-9">
                <div class="flex flex-col">
                    <span>{{ $post->user->name }} &middot; <a href="#" class="text-green-600">Follow</a></span>
                    <span class="text-gray-500">
                        {{ $post->readTime() . ' ' . __('min read') }} &middot;
                        {{ $post->created_at->format('M d, Y') }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
