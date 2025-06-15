@forelse ($posts as $post)
    <x-post.post-item :$post />
@empty
    <div class='text-center text-gray-600 text-xl p-5'>{{ __('No Posts Found') }}</div>
@endforelse

@if (count($posts) > 0)
    {{ $posts->onEachSide(1)->links() }}
@endif
