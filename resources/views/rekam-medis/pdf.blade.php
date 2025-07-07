<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Rekam Medis - {{ $rekamMedis->pasien->no_rm }}</title>
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
        .info-section {
            margin-bottom: 20px;
        }
        .info-section h4 {
            color: #1a8754;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table.info td {
            padding: 5px;
        }
        .content-section {
            margin-bottom: 20px;
        }
        .content-section h4 {
            color: #1a8754;
            margin-bottom: 5px;
        }
        .content-box {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 15px;
        }
        .footer {
            margin-top: 50px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>REKAM MEDIS PASIEN</h2>
        <p>{{ config('app.name') }}</p>
    </div>

    <div class="info-section">
        <h4>Data Pasien</h4>
        <table class="info">
            <tr>
                <td width="150">No. Rekam Medis</td>
                <td>: {{ $rekamMedis->pasien->no_rm }}</td>
            </tr>
            <tr>
                <td>Nama Pasien</td>
                <td>: {{ $rekamMedis->pasien->nama }}</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>: {{ $rekamMedis->pasien->tanggal_lahir->format('d/m/Y') }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: {{ $rekamMedis->pasien->jenis_kelamin }}</td>
            </tr>
        </table>
    </div>

    <div class="info-section">
        <h4>Data Pemeriksaan</h4>
        <table class="info">
            <tr>
                <td width="150">Tanggal Periksa</td>
                <td>: {{ $rekamMedis->tanggal_periksa->format('d/m/Y') }}</td>
            </tr>
        </table>
    </div>

    <div class="content-section">
        <h4>Keluhan</h4>
        <div class="content-box">
            {{ $rekamMedis->keluhan }}
        </div>

        <h4>Diagnosa</h4>
        <div class="content-box">
            {{ $rekamMedis->diagnosa }}
        </div>

        <h4>Tindakan</h4>
        <div class="content-box">
            {{ $rekamMedis->tindakan }}
        </div>

        <h4>Resep Obat</h4>
        <div class="content-box">
            {{ $rekamMedis->resep_obat }}
        </div>

        @if($rekamMedis->catatan)
        <h4>Catatan</h4>
        <div class="content-box">
            {{ $rekamMedis->catatan }}
        </div>
        @endif
    </div>

    <div class="footer">
        <p>Dicetak pada: {{ now()->format('d/m/Y H:i') }}</p>
    </div>
</body>
</html>
