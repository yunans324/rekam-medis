<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::paginate(10);
        return view('pasien.index', compact('pasiens'));
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required',
            'jenis_kunjungan' => 'required'
        ]);

        $lastPasien = Pasien::latest()->first();
        $newNumber = $lastPasien ? intval(substr($lastPasien->no_rm, 3)) + 1 : 1;
        $no_rm = 'RM-' . str_pad($newNumber, 4, '0', STR_PAD_LEFT);

        Pasien::create([
            'no_rm' => $no_rm,
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'jenis_kunjungan' => $request->jenis_kunjungan
        ]);

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil ditambahkan');
    }

    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', compact('pasien'));
    }

    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required',
            'jenis_kunjungan' => 'required'
        ]);

        $pasien->update($request->all());
        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil diperbarui');
    }

    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil dihapus');
    }
}
