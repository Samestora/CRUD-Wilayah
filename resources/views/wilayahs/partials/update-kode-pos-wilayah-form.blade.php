 <label for="kode_pos" class="block text-gray-700 dark:text-gray-300">Kode Pos</label>
 <input type="text" id="kode_pos" name="kode_pos" value="{{ old('kode_pos', $wilayah->kode_pos) }}"
     class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-md text-gray-900 dark:text-gray-900 dark:bg-white-600"
     required>
 @error('kode_pos')
     <span class="text-red-500 text-sm">{{ $message }}</span>
 @enderror
