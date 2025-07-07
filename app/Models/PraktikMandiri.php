<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PraktikMandiri extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'dokter_penanggung_jawab',
        'no_penanggung_jawab',
        'username',
        'password'
    ];

    protected $hidden = [
        'password'
    ];
}
