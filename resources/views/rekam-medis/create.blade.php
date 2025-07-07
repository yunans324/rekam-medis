@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Tambah Rekam Medis</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('rekam-medis.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="pasien_id" class="form-label">Pasien</label>
                                <select name="pasien_id" id="pasien_id" class="form-select @error('pasien_id') is-invalid @enderror" required>
                                    <option value="">Pilih Pasien</option>
                                    @foreach($pasien as $p)
                                        <option value="{{ $p->id }}">{{ $p->no_rm }} - {{ $p->nama }}</option>
                                    @endforeach
                                </select>
                                @error('pasien_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="tanggal_periksa" class="form-label">Tanggal Periksa</label>
                                <input type="date" class="form-control @error('tanggal_periksa') is-invalid @enderror" 
                                    id="tanggal_periksa" name="tanggal_periksa" value="{{ old('tanggal_periksa') }}" required>
                                @error('tanggal_periksa')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="keluhan" class="form-label">Keluhan</label>
                                <textarea class="form-control @error('keluhan') is-invalid @enderror" 
                                    id="keluhan" name="keluhan" rows="3" required>{{ old('keluhan') }}</textarea>
                                @error('keluhan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="diagnosa" class="form-label">Diagnosa</label>
                                <textarea class="form-control @error('diagnosa') is-invalid @enderror" 
                                    id="diagnosa" name="diagnosa" rows="3" required>{{ old('diagnosa') }}</textarea>
                                @error('diagnosa')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="tindakan" class="form-label">Tindakan</label>
                                <textarea class="form-control @error('tindakan') is-invalid @enderror" 
                                    id="tindakan" name="tindakan" rows="3" required>{{ old('tindakan') }}</textarea>
                                @error('tindakan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="resep_obat" class="form-label">Resep Obat</label>
                                <textarea class="form-control @error('resep_obat') is-invalid @enderror" 
                                    id="resep_obat" name="resep_obat" rows="3" required>{{ old('resep_obat') }}</textarea>
                                @error('resep_obat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="catatan" class="form-label">Catatan</label>
                                <textarea class="form-control @error('catatan') is-invalid @enderror" 
                                    id="catatan" name="catatan" rows="3">{{ old('catatan') }}</textarea>
                                @error('catatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="{{ route('rekam-medis.index') }}" class="btn btn-secondary me-2">Batal</a>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
