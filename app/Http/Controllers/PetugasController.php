<?php
namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{  
    public function index()
    {
        $petugas = Petugas::all();
        return view('petugas.index', compact('petugas'));
    }

    public function create()
    {
        return view('petugas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:petugas,email',
            'telepon' => 'required',
        ]);

        Petugas::create($request->all());
        return redirect()->route('petugas.index')->with('success', 'Petugas berhasil ditambahkan.');
    }

    public function show($id)
    {
        // Cari data petugas berdasarkan ID
        $petugas = Petugas::findOrFail($id);
        
        // Kirimkan ke view 'petugas.show'
        return view('petugas.show', compact('petugas'));
    }

    public function edit($id)
    {
        $petugas = Petugas::findOrFail($id);
        return view('petugas.edit', compact('petugas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'telepon' => 'required',
            'alamat' => 'required|string',
        ]);

        $petugas = Petugas::findOrFail($id);
        $petugas->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('petugas.index')->with('success', 'Petugas berhasil diperbarui.');
    }

    public function destroy(Petugas $petugas)
    {
        $petugas->delete();
        return redirect()->route('petugas.index')->with('success', 'Petugas berhasil dihapus.');
    }
}
