<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use App\Models\Pasien;
use Illuminate\Http\Request;
use PDF;

class RekamMedisController extends Controller
{
    public function index()
    {
        $rekamMedis = RekamMedis::with('pasien')->latest()->get();
        return view('rekam-medis.index', compact('rekamMedis'));
    }

    public function create()
    {
        $pasien = Pasien::all();
        return view('rekam-medis.create', compact('pasien'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required|exists:pasiens,id',
            'tanggal_periksa' => 'required|date',
            'keluhan' => 'required',
            'diagnosa' => 'required',
            'tindakan' => 'required',
            'resep_obat' => 'required',
            'catatan' => 'nullable'
        ]);

        RekamMedis::create($request->all());
        return redirect()->route('rekam-medis.index')->with('success', 'Rekam medis berhasil ditambahkan');
    }

    public function show($id)
    {
        $rekamMedis = RekamMedis::with('pasien')->findOrFail($id);
        return view('rekam-medis.show', compact('rekamMedis'));
    }

    public function generatePDF($id)
    {
        $rekamMedis = RekamMedis::with('pasien')->findOrFail($id);
        $pdf = PDF::loadView('rekam-medis.pdf', compact('rekamMedis'));
        return $pdf->download('rekam-medis-'.$rekamMedis->pasien->no_rm.'.pdf');
    }

    public function generateLaporanPDF(Request $request)
    {
        $query = RekamMedis::with('pasien');
        
        // Filter by date range if provided
        if ($request->filled(['start_date', 'end_date'])) {
            $query->whereBetween('tanggal_periksa', [$request->start_date, $request->end_date]);
        }
        
        $rekamMedis = $query->latest()->get();
        $pdf = PDF::loadView('rekam-medis.laporan-pdf', compact('rekamMedis'));
        return $pdf->download('laporan-rekam-medis.pdf');
    }
}
