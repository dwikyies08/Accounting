<?php

namespace App\Models;

use App\Models\Akun;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MataUang extends Model
{
    //
    use HasFactory;

    protected $table = 'mata_uang';

    protected $fillable = [
        'nama',
        'kode',
        'nilai_tukar',
    ];

    public function scopeFilterByName($query, $nama)
    {
        return $query->when($nama, function ($q) use ($nama) {
            $q->where('nama', 'LIKE', '%' . $nama . '%');
        });
    }

    public function akun()
    {
        return $this->hasMany(Akun::class, 'mata_uang_id');
    }
}
