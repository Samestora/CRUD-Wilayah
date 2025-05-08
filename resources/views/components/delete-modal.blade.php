<div x-data="{ showDeleteModal: false }" @keydown.escape="showDeleteModal = false">
    <div x-data="{ showDeleteModal: false }">
        <!-- Button to trigger the modal -->
        <button @click="showDeleteModal = true"
            class="{{ $fullWidth }} px-4 py-2 bg-red-600 text-white rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400 transition duration-300">
            Delete
        </button>

        <!-- Modal with confirmation -->
        <div x-show="showDeleteModal" x-cloak
            class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
            <div class="bg-white rounded-lg p-6 shadow-lg max-w-sm w-full dark:bg-gray-800">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">
                    Confirm Deletion
                </h2>
                <p class="text-gray-600 dark:text-gray-300 mb-6">
                    {{ $message }}
                </p>
                <div class="flex justify-end space-x-2">
                    <button @click="showDeleteModal = false"
                        class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400 dark:bg-gray-700 dark:text-white">
                        Cancel
                    </button>

                    <!-- Delete Form -->
                    <form action="{{ route($route, $id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                            Yes, Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
