<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pajak extends Model
{
    use HasFactory;

    protected $table = 'pajak';
<<<<<<< HEAD
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'nama',
    //     'kode_pajak',
    //     'nilai_persentase',
    //     'akun_pajak_penjualan',
    //     'akun_pajak_pembelian',
    //     'deskripsi',
    // ];
    public function akun()
    {
        return $this->belongsTo(Akun::class);
    }
=======

    protected $fillable = [
        'nama',
        'kode_pajak',
        'nilai_persentase',
        'akun_pajak_penjualan',
        'akun_pajak_pembelian',
        'deskripsi',
    ];
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
}
