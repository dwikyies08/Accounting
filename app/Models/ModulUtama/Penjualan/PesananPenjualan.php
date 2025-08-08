<?php

namespace App\Models\ModulUtama\Penjualan;

<<<<<<< HEAD
use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Model;

class PesananPenjualan extends BaseModel
{
    protected $guarded = [];
    protected static function getNoPrefix(): string
    {
        return 'ORD';
    }

    protected static function getNoColumn(): string
    {
        return 'no_pesanan';
    }
=======
use Illuminate\Database\Eloquent\Model;

class PesananPenjualan extends Model
{
    //
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
}
