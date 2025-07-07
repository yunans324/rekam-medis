@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Detail Rekam Medis</h5>
                    <a href="{{ route('rekam-medis.pdf', $rekamMedis->id) }}" class="btn btn-danger">
                        <i class="bi bi-file-pdf"></i> Download PDF
                    </a>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6>Informasi Pasien</h6>
                            <table class="table table-borderless">
                                <tr>
                                    <td width="150">No. RM</td>
                                    <td>: {{ $rekamMedis->pasien->no_rm }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>: {{ $rekamMedis->pasien->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>: {{ $rekamMedis->pasien->tanggal_lahir->format('d/m/Y') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h6>Informasi Pemeriksaan</h6>
                            <table class="table table-borderless">
                                <tr>
                                    <td width="150">Tanggal Periksa</td>
                                    <td>: {{ $rekamMedis->tanggal_periksa->format('d/m/Y') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h6>Keluhan</h6>
                            <p class="border rounded p-3">{{ $rekamMedis->keluhan }}</p>
                        </div>

                        <div class="col-md-12 mb-3">
                            <h6>Diagnosa</h6>
                            <p class="border rounded p-3">{{ $rekamMedis->diagnosa }}</p>
                        </div>

                        <div class="col-md-12 mb-3">
                            <h6>Tindakan</h6>
                            <p class="border rounded p-3">{{ $rekamMedis->tindakan }}</p>
                        </div>

                        <div class="col-md-12 mb-3">
                            <h6>Resep Obat</h6>
                            <p class="border rounded p-3">{{ $rekamMedis->resep_obat }}</p>
                        </div>

                        @if($rekamMedis->catatan)
                        <div class="col-md-12 mb-3">
                            <h6>Catatan</h6>
                            <p class="border rounded p-3">{{ $rekamMedis->catatan }}</p>
                        </div>
                        @endif
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="{{ route('rekam-medis.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
