<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    use HasFactory;

    protected $table = 'cluster';

    protected $fillable = [
        'nama_cluster',
<<<<<<< HEAD
        'no_hp',
        'luas_tanah',
        'total_unit',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'alamat_cluster',
    ];

    public function dataLahans()
    {
        return $this->hasMany(DataLahan::class);
    }
=======
        'no_hp'       ,
        'luas_tanah'  ,
        'total_unit'  ,
        'provinsi'    ,
        'kota'        ,
        'kecamatan'   ,
        'kelurahan'   ,
        'alamat_cluster',
    ];
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
}
