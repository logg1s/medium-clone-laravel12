<x-app-layout>
    <div class="py-10">
        <div class="max-w-3xl mx-auto bg-white rounded-lg p-9 shadow-sm">
            <h1 class="text-2xl mb-3">{{ $post->title ?? '' }}</h1>
            <div class="flex gap-5 items-center">
                <img src="{{ $post->user->getAvatarUrl() }}" alt="{{ $post->user->name }}"
                    class="rounded-full object-cover size-9">
                <div class="flex flex-col">
                    <span><a href="{{ route('public-profile.show', ['user' => $post->user->username]) }}">{{ $post->user->name }}</a> &middot; <a href="#"
                            class="text-green-600">Follow</a></span>
                    <span class="text-gray-500">
                        {{ $post->readTime() . ' ' . __('min read') }} &middot;
                        {{ $post->created_at->format('M d, Y') }}
                    </span>
                </div>
            </div>
            <div class="border-y p-2 my-5">
                <x-button-like />
            </div>
            <img src={{ $post->getImageUrl() }} class="mx-auto mb-5" />
            <div>{{ $post->content }}</div>
            <div class="rounded-3xl p-2 bg-gray-200 w-fit mt-5">{{ $post->category->name }}</div>
            <div class="border-y p-2 my-5">
                <x-button-like likeCount="5" />
            </div>
        </div>
    </div>
</x-app-layout>
