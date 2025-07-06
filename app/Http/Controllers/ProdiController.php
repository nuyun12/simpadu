<?php

namespace App\Http\Controllers;

use view;
use App\Models\Prodi;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = ['nama' => 'nuyun', 'foto' => 'avatar.png'];
        $prodi = Prodi::all();
        return view('prodi.index', compact('prodi', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $request->validate([
            'kaprodi' => 'required',
            'jurusan' => 'required',
        ]);

        prodi::create([
            'kaprodi' => $kaprodi->kaprodi,
            'jurusan' => $jurusan->jurusan,
        ]);

        $data = ['nama' => "nuyun", 'foto' =>  'avatar.png'];
        return view('prodi.create', compact('data'));

        $allprodi = Prodi::all();
        return view('prodi.edit', compact('data', 'prodi', 'listprodi', 'allProdi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'nama' => 'required|max:100',
            'kaprodi' => 'required|max:100',
            'jurusan' => 'required|max:100',
            'foto' => 'required|image|file|max:2048',
        ], [
            'nama.required' => 'Nama Prodi wajib diisi',
            'kaprodi.required' => 'Kaprodi wajib diisi',
            'jurusan.required' => 'Jurusan wajib diisi',
            'foto.image' => 'File harus berupa gambar',
        ]);
        if ($request->file('foto')) {
            $validateData['foto'] = $request->file('foto')->store('image');
        }
        Prodi::create($validateData);
        return redirect('/prodi')->with('success', 'Data prodi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = ['nama' => "nuyun", 'foto' => 'avatar.png'];
        $prodi = Prodi::find($id);
        $listjurusan = ['Administrasi Bisnis', 'Teknik Sipil dan Kebumian'];
        $listprodi = ['Sistem Informasi', 'Teknik Pertambangan', 'Bisnis Digital'];
        return view('prodi.edit', compact('data', 'prodi', 'listjurusan', 'listprodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validateData = $request->validate([
            'nama' => 'required|max:100',
            'kaprodi' => 'required|max:100',
            'jurusan' => 'required|max:100',
        ]);

        $prodi = Prodi::find($id);
        $prodi->nama = $request->nama;
        $prodi->jurusan = $request->jurusan;
        $prodi->kaprodi = $request->kaprodi;
        $prodi->save();
        return redirect('/prodi')->with('success', 'Data prodi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $prodi = Prodi::find($id);

        return redirect('/prodi')->with('success', 'Data prodi berhasil dihapus');
    }
}
