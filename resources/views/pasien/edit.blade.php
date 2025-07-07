@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Data Pasien</h5>
                    <a href="{{ route('pasien.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label class="form-label">No. RM</label>
                            <input type="text" class="form-control" value="{{ $pasien->no_rm }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Pasien</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                id="nama" name="nama" value="{{ old('nama', $pasien->nama) }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" 
                                id="tanggal_lahir" name="tanggal_lahir" 
                                value="{{ old('tanggal_lahir', $pasien->tanggal_lahir->format('Y-m-d')) }}" required>
                            @error('tanggal_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select @error('jenis_kelamin') is-invalid @enderror" 
                                id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki" {{ (old('jenis_kelamin', $pasien->jenis_kelamin) == 'Laki-laki') ? 'selected' : '' }}>
                                    Laki-laki
                                </option>
                                <option value="Perempuan" {{ (old('jenis_kelamin', $pasien->jenis_kelamin) == 'Perempuan') ? 'selected' : '' }}>
                                    Perempuan
                                </option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" 
                                id="alamat" name="alamat" rows="3" required>{{ old('alamat', $pasien->alamat) }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kunjungan" class="form-label">Jenis Kunjungan</label>
                            <input type="text" class="form-control @error('jenis_kunjungan') is-invalid @enderror" 
                                id="jenis_kunjungan" name="jenis_kunjungan" 
                                value="{{ old('jenis_kunjungan', $pasien->jenis_kunjungan) }}" required>
                            @error('jenis_kunjungan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
