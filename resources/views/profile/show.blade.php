<x-app-layout>
    <div class="py-10">
        <div class="max-w-6xl mx-auto bg-white rounded-lg p-9 shadow-sm">
            <div class="flex flex-col lg:flex-row">
                <div class="flex lg:order-3 flex-col p-10 min-w-60">
                    <img src="{{ $user->getAvatarUrl() }}" alt="{{ $user->name }}"
                        class="rounded-full size-20 object-cover">
                    <span class="text-lg">{{ $user->name }}</span>
                    <span class="text-gray-500">26k followers</span>
                    <button class="rounded-xl mt-5 py-2 px-5 bg-green-800 text-white w-fit">Follow</button>
                </div>
                <div class="hidden lg:block lg:order-2 ml-10 border"></div>
                <div class="lg:flex-1 lg:order-1 min-w-60">
                    <h1 class="text-3xl mb-10">{{ $user->name }}</h1>
                    <div class="flex flex-col gap-10 rounded-lg">
                        <x-post.post-view :posts="$user->posts" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
