<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mLokasi extends Model
{
    use HasFactory;
    protected $table = 'tb_lokasi';
    protected $fillable = [
        'kode_lokasi',
        'lokasi',
        'tipe',
        'alamat',
        'telp',
        'potongan',
    ];
}
