<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;

    protected $table = 'proyek';
<<<<<<< HEAD
    protected $guarded = ['id'];

    // protected $fillable = [
    //     'proyek_id',
    //     'nama_proyek',
    //     'nama_kontak',
    //     'tanggal_from',
    //     'tanggal_to',
    //     'persentase_komplet',
    //     'persentase_komplet_check',
    //     'deskripsi',
    //     'dihentikan',
    // ];
=======

    protected $fillable = [
        'proyek_id'                ,
        'nama_proyek'              ,
        'nama_kontak'              ,
        'tanggal_from'             ,
        'tanggal_to'               ,
        'persentase_komplet'       ,
        'persentase_komplet_check' ,
        'deskripsi'                ,
        'dihentikan'               ,
    ];
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a

    // /** generate id */
    // protected static function boot()
    // {
    //     parent::boot();

    //     self::creating(function ($model) {
    //         $latestUser = self::orderBy('proyek_id', 'desc')->first();
    //         $prefix = 'GMPC-';
    //         $nextID = $latestUser ? intval(substr($latestUser->proyek_id, strlen($prefix))) : 1;
    //         $model->proyek_id = $prefix . sprintf("%04d", $nextID);
    //         while (self::where('proyek_id', $model->proyek_id)->exists()) {
    //             $nextID++;
    //             $model->proyek_id = $prefix . sprintf("%04d", $nextID);
    //         }
    //     });
    // }
<<<<<<< HEAD

    public function journalEntries()
    {
        return $this->hasMany(JurnalEntri::class);
    }

    public function rincianAkun()
    {
        return $this->hasMany(PembiayaanRincianAkun::class);
    }
=======
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
}
