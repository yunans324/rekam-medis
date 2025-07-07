@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Data Praktik Mandiri</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('praktik.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Praktik</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                id="nama" name="nama" value="{{ old('nama', $praktik->nama ?? '') }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" 
                                id="alamat" name="alamat" rows="3" required>{{ old('alamat', $praktik->alamat ?? '') }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="dokter_penanggung_jawab" class="form-label">Dokter Penanggung Jawab</label>
                            <input type="text" class="form-control @error('dokter_penanggung_jawab') is-invalid @enderror" 
                                id="dokter_penanggung_jawab" name="dokter_penanggung_jawab" 
                                value="{{ old('dokter_penanggung_jawab', $praktik->dokter_penanggung_jawab ?? '') }}" required>
                            @error('dokter_penanggung_jawab')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="no_penanggung_jawab" class="form-label">No. Penanggung Jawab</label>
                            <input type="text" class="form-control @error('no_penanggung_jawab') is-invalid @enderror" 
                                id="no_penanggung_jawab" name="no_penanggung_jawab" 
                                value="{{ old('no_penanggung_jawab', $praktik->no_penanggung_jawab ?? '') }}" required>
                            @error('no_penanggung_jawab')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" 
                                id="username" name="username" value="{{ old('username', $praktik->username ?? '') }}" required>
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password (Kosongkan jika tidak ingin mengubah)</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                id="password" name="password">
                            @error('password')
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
