<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Wilayah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('wilayahs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Nama Wilayah Field -->
                        <div class="mb-4">
                            @include('wilayahs.partials.create-nama-wilayah-form')
                        </div>

                        <!-- Kode Pos Field -->
                        <div class="mb-4">
                            @include('wilayahs.partials.create-kode-pos-wilayah-form')
                        </div>

                        <!-- Keterangan Field -->
                        <div class="mb-4">
                            @include('wilayahs.partials.create-keterangan-wilayah-form')
                        </div>

                        <button type="submit"
                            class="w-full py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
