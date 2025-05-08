<label for="keterangan" class="block text-gray-700 dark:text-gray-300">Keterangan</label>
<input type="text" id="keterangan" name="keterangan" value="{{ old('keterangan') }}"
    class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-md text-gray-900 dark:text-gray-900 dark:bg-white-600">
@error('keterangan')
    <span class="text-red-500 text-sm">{{ $message }}</span>
@enderror
