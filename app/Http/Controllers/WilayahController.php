<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function index(Request $request)
    {
        $wilayahs = Wilayah::paginate(10);
        return view('dashboard', compact('wilayahs'));
    }

    public function view(Wilayah $wilayah)
    {
        return view('wilayahs.view', compact('wilayah'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $query = Wilayah::query();

        if ($search) {
            $query->where('nama_wilayah', 'like', "%{$search}%");
        }

        $wilayahs = $query->paginate(10)->appends(['search' => $search]);

        return view('dashboard', compact('wilayahs', 'search'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_wilayah' => 'required|string|max:255',
            'kode_pos' => 'required|string|max:10',
            'keterangan' => 'nullable|string|max:255',
        ]);

        // Create Wilayah
        Wilayah::create([
            'nama_wilayah' => $request->nama_wilayah,
            'kode_pos' => $request->kode_pos,
            'keterangan' => $request->keterangan,
        ]);

        // Redirect with a success message
        return redirect()->route('dashboard')->with('success', 'Wilayah created successfully!');
    }

    public function edit($id)
    {
        $wilayah = Wilayah::findOrFail($id);

        return view('wilayahs.edit', compact('wilayah'));
    }

    public function update(Request $request, Wilayah $wilayah)
    {
        $validated = $request->validate([
            'nama_wilayah' => 'required|string|max:255',
            'kode_pos' => 'required|string|max:10',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $wilayah->update($validated);

        return redirect()->route('dashboard')->with('success', 'Wilayah updated successfully');
    }

    public function destroy(Wilayah $wilayah)
    {
        $wilayah->delete();

        return redirect()->route('dashboard')->with('success', 'Wilayah deleted successfully!');
    }

    public function create()
    {
        return view('wilayahs.create'); // Return the create view
    }
}
