<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="m-2 flex justify-end p-2">
                <a href="{{ route('admin.categories.index') }}"
                    class="rounded-lg bg-indigo-500 px-4 py-2 text-white hover:bg-indigo-700">
                    Category Index
                </a>
            </div>
            <div class="m-2 p-2">
                <div class="mt-10 w-1/2 space-y-8 divide-y divide-gray-200">
                    <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name"
                                    class="block w-full appearance-none rounded-md border border-gray-400 bg-white px-3 py-2 text-base leading-normal transition transition duration-150 duration-150 ease-in-out ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                            <div class="mt-1">
                                <input type="file" id="image" name="image"
                                    class="block w-full appearance-none rounded-md border border-gray-400 bg-white px-3 py-2 text-base leading-normal transition transition duration-150 duration-150 ease-in-out ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                        </div>
                        <div class="pt-5 sm:col-span-6">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <div class="mt-1">
                                <textarea id="description" rows="3" name="description"
                                    class="block w-full appearance-none rounded-md rounded-md border border-gray-300 border-gray-400 bg-white px-3 py-2 text-base leading-normal shadow-sm transition duration-150 ease-in-out focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                            </div>

                        </div>
                        <button type="submit"
                            class="mt-2 rounded-lg bg-indigo-500 px-4 py-2 text-white hover:bg-indigo-700">Store</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
