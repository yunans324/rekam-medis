<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pasien;

class RekamMedis extends Model
{
    protected $fillable = [
        'pasien_id',
        'tanggal_periksa',
        'keluhan',
        'diagnosa',
        'tindakan',
        'resep_obat',
        'catatan'
    ];

    protected $casts = [
        'tanggal_periksa' => 'date'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
