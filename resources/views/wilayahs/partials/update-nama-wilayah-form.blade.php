<label for="nama_wilayah" class="block text-gray-700 dark:text-gray-300">Nama
    Wilayah</label>
<input type="text" id="nama_wilayah" name="nama_wilayah" value="{{ old('nama_wilayah', $wilayah->nama_wilayah) }}"
    class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-md text-gray-900 dark:text-gray-900 dark:bg-white-600"
    required>
@error('nama_wilayah')
    <span class="text-red-500 text-sm">{{ $message }}</span>
@enderror
