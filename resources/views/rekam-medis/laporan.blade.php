@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Laporan Rekam Medis</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('rekam-medis.laporan') }}" method="GET" class="mb-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Tanggal Mulai</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date" 
                                        value="{{ request('start_date') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">Tanggal Selesai</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date" 
                                        value="{{ request('end_date') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">&nbsp;</label>
                                    <div class="d-flex">
                                        <button type="submit" class="btn btn-primary me-2">
                                            <i class="bi bi-search"></i> Filter
                                        </button>
                                        @if(request()->hasAny(['start_date', 'end_date']))
                                            <a href="{{ route('rekam-medis.laporan') }}" class="btn btn-secondary">
                                                <i class="bi bi-x-circle"></i> Reset
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal</th>
                                    <th>No. RM</th>
                                    <th>Nama Pasien</th>
                                    <th>Diagnosa</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($rekamMedis as $index => $rm)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $rm->tanggal_periksa->format('d/m/Y') }}</td>
                                        <td>{{ $rm->pasien->no_rm }}</td>
                                        <td>{{ $rm->pasien->nama }}</td>
                                        <td>{{ Str::limit($rm->diagnosa, 50) }}</td>
                                        <td>{{ Str::limit($rm->tindakan, 50) }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Tidak ada data rekam medis</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if($rekamMedis->count() > 0)
                        <div class="mt-3">
                            <a href="{{ route('rekam-medis.laporan', ['start_date' => request('start_date'), 'end_date' => request('end_date')]) }}" 
                                class="btn btn-danger">
                                <i class="bi bi-file-pdf"></i> Download PDF
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
