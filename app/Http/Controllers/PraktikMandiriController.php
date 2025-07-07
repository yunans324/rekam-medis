<?php

namespace App\Http\Controllers;

use App\Models\PraktikMandiri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PraktikMandiriController extends Controller
{
    public function index()
    {
        $praktik = PraktikMandiri::first();
        return view('praktik.index', compact('praktik'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'dokter_penanggung_jawab' => 'required',
            'no_penanggung_jawab' => 'required',
            'username' => 'required',
            'password' => 'nullable',
        ]);

        $praktik = PraktikMandiri::first();
        
        if (!$praktik) {
            $praktik = new PraktikMandiri();
        }

        $praktik->nama = $request->nama;
        $praktik->alamat = $request->alamat;
        $praktik->dokter_penanggung_jawab = $request->dokter_penanggung_jawab;
        $praktik->no_penanggung_jawab = $request->no_penanggung_jawab;
        $praktik->username = $request->username;
        
        if ($request->filled('password')) {
            $praktik->password = Hash::make($request->password);
        }

        $praktik->save();

        return redirect()->route('praktik.index')->with('success', 'Data praktik berhasil diperbarui');
    }
}
