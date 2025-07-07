@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Pasien</h5>
            <a href="{{ route('pasien.create') }}" class="btn btn-success">
                <i class="bi bi-plus"></i> Tambah Pasien
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No. RM</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Jenis Kunjungan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pasiens as $pasien)
                            <tr>
                                <td>{{ $pasien->no_rm }}</td>
                                <td>{{ $pasien->nama }}</td>
                                <td>{{ $pasien->tanggal_lahir->format('d/m/Y') }}</td>
                                <td>{{ $pasien->jenis_kelamin }}</td>
                                <td>{{ $pasien->alamat }}</td>
                                <td>{{ $pasien->jenis_kunjungan }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('pasien.edit', $pasien->id) }}" 
                                           class="btn btn-sm btn-warning">
                                            Edit
                                        </a>
                                        <form action="{{ route('pasien.destroy', $pasien->id) }}" 
                                              method="POST" 
                                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data pasien</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <div class="d-flex justify-content-center">
                {{ $pasiens->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
