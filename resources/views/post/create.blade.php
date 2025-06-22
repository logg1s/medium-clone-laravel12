<x-app-layout>
    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="bg-white shadown-sm sm:rounded-lg p-8 flex flex-col gap-5">
                    {{-- File --}}
                    <div>
                        <x-input-label for="image" :value="__('Image')" :isRequire=true />
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image"
                            :value="old('image')" accept="image/*" />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>


                    {{-- Title --}}
                    <div>
                        <x-input-label for="title" :value="__('Title')" :isRequire=true />
                        <x-text-input id="title" class="block mt-1 w-full" name="title" :value="old('title')"
                            autofocus />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    {{-- Content --}}
                    <div>
                        <x-input-label for="content" :value="__('Content')" :isRequire=true />
                        <x-textarea-input id="content" class="block mt-1 w-full" name="content" :value="old('content')"
                            rows="10" />
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>

                    {{-- Category --}}
                    <div>
                        <x-select-option id="category_id" keyInside="name" keyValue="id" label="Category"
                            name="category_id" :options="$categories" />
                    </div>

                    <div>
                        <x-primary-button>
                            Submit
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
