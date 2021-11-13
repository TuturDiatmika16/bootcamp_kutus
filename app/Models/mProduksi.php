<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mProduksi extends Model
{
    use HasFactory;
    protected $table = 'tb_produksi';
    protected $guarded = [];

    protected $fillable = [
        'urutan',
        'id_lokasi',
        'kode_produksi',
        'tgl_mulai_produksi',
        'tgl_selesai_produksi',
        'catatan',
        'status',
        'status_finish_date',
        'publish',
        'publish_date',
        'finish',
    ];

    public function pejualan()
    {
        return $this->belongsTo(mPenjualan::class);
    }
    public function produk()
    {
        return $this->belongsTo(mProduk::class);
    }
    public function lokasi()
    {
        return $this->belongsTo(mLokasi::class, 'id_lokasi', 'id');
    }
    public function stok_produk()
    {
        return $this->belongsTo(mStokProduk::class);
    }
}
