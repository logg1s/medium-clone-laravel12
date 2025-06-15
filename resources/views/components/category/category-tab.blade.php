            <div class="bg-white border-2 border-gray-200 overflow-hidden sm:rounded-lg  mb-5">
                <div class="p-6 text-gray-900">
                    <ul
                        class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 justify-center">
                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-3 text-white bg-blue-600 rounded-lg active"
                                aria-current="page">All</a>
                        </li>
                        @foreach ($categories as $category)
                            <x-category.category-tab-item :name='$category->name' />
                        @endforeach
                    </ul>
                </div>
            </div>
