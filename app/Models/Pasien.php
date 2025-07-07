<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_rm',
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'jenis_kunjungan'
    ];

    protected $casts = [
        'tanggal_lahir' => 'date'
    ];
}
