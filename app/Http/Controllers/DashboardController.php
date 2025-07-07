<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\PraktikMandiri;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPasien = Pasien::count();
        $pasienHariIni = Pasien::whereDate('created_at', Carbon::today())->count();
        $pasienTerbaru = Pasien::latest()->take(5)->get();
        $praktik = PraktikMandiri::first();
        $infoPraktik = $praktik ? $praktik->nama : null;

        return view('dashboard', compact(
            'totalPasien',
            'pasienHariIni',
            'pasienTerbaru',
            'infoPraktik'
        ));
    }
}
