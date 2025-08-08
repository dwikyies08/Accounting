<?php

namespace App\Models\ModulUtama\Penjualan;

<<<<<<< HEAD
use App\Models\User;
use App\Models\Base\BaseModel;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\ModulUtama\Penjualan\PenawaranPenjualanItem;
use App\Models\Pelanggan;
=======
use App\Models\Base\BaseModel;
use App\Models\User;
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a

class PenawaranPenjualan extends BaseModel
{
    protected $guarded = [];
    public function items()
    {
        return $this->hasMany(PenawaranPenjualanItem::class);
    }
<<<<<<< HEAD
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
=======

>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function getNoPrefix(): string
    {
        return 'PN';
    }

    protected static function getNoColumn(): string
    {
        return 'no_penawaran';
    }
<<<<<<< HEAD

    protected function tglPenawaran(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('m/d/Y'),
        );
    }
=======
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
}
