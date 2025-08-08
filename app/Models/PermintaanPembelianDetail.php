<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanPembelianDetail extends Model
{
    use HasFactory;
    protected $table = 'permintaan_pembelian_detail';
    protected $fillable = [
        'permintaan_pembelian_id',
        'no_barang',
        'deskripsi_barang',
        'kts_permintaan',
        'satuan',
        'catatan',
        'tgl_diminta',
<<<<<<< HEAD
=======
        'harga_satuan',
        'jumlah_total_harga',
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
        'kts_dipesan',
        'kts_diterima',
        'tutup_check_all',
        'tutup_check_items',
    ];

    public function rincian()
    {
        return $this->belongsTo(PermintaanPembelian::class);
    }
}
