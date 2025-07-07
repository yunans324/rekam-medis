@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card bg-gradient h-100" style="background-color: #6f42c1;">
                <div class="card-body text-white">
                    <h5 class="card-title">Total Pasien</h5>
                    <p class="card-text display-4">{{ $totalPasien }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-gradient h-100" style="background-color: #845ecc;">
                <div class="card-body text-white">
                    <h5 class="card-title">Pasien Hari Ini</h5>
                    <p class="card-text display-4">{{ $pasienHariIni }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-gradient h-100" style="background-color: #9670d5;">
                <div class="card-body text-white">
                    <h5 class="card-title">Info Praktik</h5>
                    <p class="card-text">{{ $infoPraktik ?: 'Belum diatur' }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Pasien Terbaru</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No. RM</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pasienTerbaru as $pasien)
                            <tr>
                                <td>{{ $pasien->no_rm }}</td>
                                <td>{{ $pasien->nama }}</td>
                                <td>{{ $pasien->tanggal_lahir->format('d/m/Y') }}</td>
                                <td>{{ $pasien->jenis_kelamin }}</td>
                                <td>
                                    <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-sm btn-warning">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data pasien</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Aksi Cepat</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('pasien.create') }}" class="btn btn-primary">
                            <i class="bi bi-person-plus"></i> Tambah Pasien Baru
                        </a>
                        <a href="{{ route('praktik.index') }}" class="btn btn-primary">
                            <i class="bi bi-gear"></i> Pengaturan Praktik
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
