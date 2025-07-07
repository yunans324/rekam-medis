@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Rekam Medis</h2>
        <div>
            <button type="button" class="btn btn-danger me-2" data-bs-toggle="modal" data-bs-target="#filterModal">
                <i class="bi bi-file-pdf"></i> Download Laporan
            </button>
            <a href="{{ route('rekam-medis.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Tambah Rekam Medis
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No. RM</th>
                            <th>Nama Pasien</th>
                            <th>Tanggal Periksa</th>
                            <th>Diagnosa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($rekamMedis as $rm)
                            <tr>
                                <td>{{ $rm->pasien->no_rm }}</td>
                                <td>{{ $rm->pasien->nama }}</td>
                                <td>{{ $rm->tanggal_periksa->format('d/m/Y') }}</td>
                                <td>{{ Str::limit($rm->diagnosa, 50) }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('rekam-medis.show', $rm->id) }}" class="btn btn-sm btn-info">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('rekam-medis.pdf', $rm->id) }}" class="btn btn-sm btn-danger">
                                            <i class="bi bi-file-pdf"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data rekam medis</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Filter Modal -->
<div class="modal fade" id="filterModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Download Laporan Rekam Medis</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('rekam-medis.laporan') }}" method="GET">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="form-label">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Download PDF</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
