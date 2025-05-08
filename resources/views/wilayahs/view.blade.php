<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Wilayah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Back Button -->
                    <div class="mb-4">
                        <a href="{{ route('dashboard') }}"
                            class="inline-block px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
                            ← Back
                        </a>
                    </div>

                    <!-- Nama Wilayah Field -->
                    <div class="mb-4">
                        @include('wilayahs.partials.view-nama-wilayah-form')
                    </div>

                    <!-- Kode Pos Field -->
                    <div class="mb-4">
                        @include('wilayahs.partials.view-kode-pos-wilayah-form')
                    </div>

                    <!-- Keterangan Field -->
                    <div class="mb-4">
                        @include('wilayahs.partials.view-keterangan-wilayah-form')
                    </div>
                    <div class="px-4 py-2 flex space-x-2">
                        <div class="w-1/2">
                            <a href="{{ route('wilayahs.edit', $wilayah->id) }}"
                                class="block w-full text-center px-4 py-2 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 transition duration-300">
                                Edit
                            </a>
                        </div>
                        <div class="w-1/2">
                            <x-delete-modal route="wilayahs.destroy" :id="$wilayah->id"
                                message="Yakin ingin menghapus wilayah ini?" fullWidth="true" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
