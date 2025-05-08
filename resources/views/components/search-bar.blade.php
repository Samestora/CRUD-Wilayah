<div>
    <form action="{{ $action }}" method="{{ $method === 'GET' ? 'GET' : 'POST' }}"
        class="flex items-center gap-2 mb-4">
        @if ($method !== 'GET')
            @csrf
            @method($method)
        @endif

        <input type="text" name="search" value="{{ request('search') }}" placeholder="{{ $placeholder }}"
            class="flex-grow w-96 px-4 py-2 border border-gray-300 rounded-md text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-400 transition dark:text-gray-900 dark:bg-white">

        <button type="submit"
            class="px-5 py-2 bg-blue-500 text-white rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
            {{ $submitLabel }}
        </button>

        <a href="{{ $action }}"
            class="px-5 py-2 bg-gray-500 text-white rounded-md shadow hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400 transition duration-300">
            {{ $resetLabel }}
        </a>
    </form>
</div>
