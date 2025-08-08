<?php

namespace App\Models\ModulUtama\Penjualan;

<<<<<<< HEAD
use App\Models\User;
use App\Models\Pelanggan;
use App\Models\Base\BaseModel;

class FakturPenagihan extends BaseModel
{
    protected $guarded = [];

    public function items()
    {
        return $this->hasMany(PenawaranPenjualanItem::class);
    }
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected static function getNoPrefix(): string
    {
        return 'FK';
    }

    protected static function getNoColumn(): string
    {
        return 'no_faktur';
    }

    // protected function tglPengiriman(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => Carbon::parse($value)->format('m/d/Y'),
    //     );
    // }
=======
use Illuminate\Database\Eloquent\Model;

class FakturPenagihan extends Model
{
    //
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
}
