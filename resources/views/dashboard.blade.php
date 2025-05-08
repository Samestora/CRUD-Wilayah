<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <x-search-bar action="{{ route('dashboard') }}" placeholder="Cari wilayah..." submit-label="Search"
                            reset-label="Reset" method='POST' />
                    </div>
                    <table class="table-auto w-full border-collapse border border-gray-200 dark:border-gray-700">
                        <thead>
                            <tr class="bg-gray-200 dark:bg-gray-700">
                                <th class="border px-4 py-2">No</th>
                                <th class="border px-4 py-2">Nama Wilayah</th>
                                <th class="border px-4 py-2">Kode Pos</th>
                                <th class="border px-4 py-2">Keterangan</th>
                                <th class="border px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wilayahs as $index => $wilayah)
                                <tr>
                                    <td class="border px-4 py-2">{{ $wilayahs->firstItem() + $index }}</td>
                                    <td class="border px-4 py-2">{{ $wilayah->nama_wilayah }}</td>
                                    <td class="border px-4 py-2">{{ $wilayah->kode_pos }}</td>
                                    <td class="border px-4 py-2">{{ $wilayah->keterangan }}</td>
                                    <td class="border px-4 py-2 flex space-x-2">
                                        <!-- View Button -->
                                        <a href="{{ route('wilayahs.view', $wilayah->id) }}">
                                            <button type="button"
                                                class="px-4 py-2 bg-orange-500 text-white rounded-lg shadow-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400 transition duration-300">
                                                View
                                            </button>
                                        </a>
                                        <!-- Edit Button -->
                                        <a href="{{ route('wilayahs.edit', $wilayah->id) }}">
                                            <button type="button"
                                                class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
                                                Edit
                                            </button>
                                        </a>
                                        <!-- Delete Button -->
                                        <x-delete-modal route="wilayahs.destroy" :id="$wilayah->id"
                                            message="Yakin ingin menghapus wilayah ini?" />
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination Links -->
                    <div class="mt-2">
                        {{ $wilayahs->links('pagination::tailwind') }}
                    </div>

                    <!-- Add New Wilayah Button -->
                    <div class="flex justify-center">
                        <a href="{{ route('wilayahs.create') }}">
                            <x-primary-button>
                                {{ __('+ Add New Wilayah') }}
                            </x-primary-button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
