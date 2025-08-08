<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    use HasFactory;

    protected $table = 'penjual';

<<<<<<< HEAD
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'nama_depan_penjual'    ,
    //     'nama_belakang_penjual' ,
    //     'jabatan'               ,
    //     'dihentikan'            ,
    //     'no_kantor_1_penjual'   ,
    //     'no_kantor_2_penjual'   ,
    //     'no_ekstensi_1_penjual' ,
    //     'no_ekstensi_2_penjual' ,
    //     'no_hp_penjual'         ,
    //     'no_telp_penjual'       ,
    //     'no_fax_penjual'        ,
    //     'pager_penjual'         ,
    //     'email_penjual'         ,
    //     'memo'                  ,
    //     'fileupload_1'          ,
    // ];

    public function dokumen()
    {
        return $this->morphMany(Dokumen::class, 'dokumenable');
    }
=======
    protected $fillable = [
        'nama_depan_penjual'    ,
        'nama_belakang_penjual' ,
        'jabatan'               ,
        'dihentikan'            ,
        'no_kantor_1_penjual'   ,
        'no_kantor_2_penjual'   ,
        'no_ekstensi_1_penjual' ,
        'no_ekstensi_2_penjual' ,
        'no_hp_penjual'         ,
        'no_telp_penjual'       ,
        'no_fax_penjual'        ,
        'pager_penjual'         ,
        'email_penjual'         ,
        'memo'                  ,
        'fileupload_1'          ,
    ];
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
}
