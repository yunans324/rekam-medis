<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Rekam Medis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h2 {
            margin: 0;
            color: #1a8754;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table.data {
            margin-top: 20px;
        }
        table.data th,
        table.data td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        table.data th {
            background-color: #f4f4f4;
        }
        .footer {
            margin-top: 30px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>LAPORAN REKAM MEDIS</h2>
        <p>{{ config('app.name') }}</p>
        <p>Periode: {{ request('start_date', '-') }} s/d {{ request('end_date', '-') }}</p>
    </div>

    <table class="data">
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
                    <td colspan="6" style="text-align: center;">Tidak ada data rekam medis</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="footer">
        <p>Total Data: {{ $rekamMedis->count() }}</p>
        <p>Dicetak pada: {{ now()->format('d/m/Y H:i') }}</p>
    </div>
</body>
</html>
