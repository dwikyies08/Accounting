<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Barang;
use App\Models\Penjual;
use App\Models\Pelanggan;
use App\Models\TipeBarang;
use Illuminate\Support\Str;
use App\Models\KategoriBarang;
use App\Models\TipePersediaan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
=======
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
<<<<<<< HEAD

    protected $auth;

    public function __construct()
    {
        $this->auth = Auth::id(); // Assign current user's ID at runtime
    }

    protected $segment;

    protected $editRoute;

    protected $route;

    protected $path;

    protected $model;

    protected $title;
    public function getRoutePrefix()
    {
        // Ambil nama model dari FQCN
        $modelName = class_basename($this->model); // contoh: "Terapis" atau "PaketPengobatan"

        // Tentukan apakah satu kata atau dua kata
        if (preg_match('/^[A-Z][a-z]+$/', $modelName)) {
            // Satu kata seperti "Terapis"
            $this->route = strtolower($modelName); // jadi "terapis"

            $this->path = strtolower($modelName);
        } else {
            // Lebih dari satu kata seperti "PaketPengobatan"
            $this->route = Str::snake($modelName); // jadi "paket_pengobatan"

            $this->path = Str::kebab($modelName);
        }

        // Simpan nama model dalam lowercase
        $this->model = $this->path;

        // Ambil segment kedua dari URL (misalnya: /admin/terapis -> "terapis")
        $this->segment = Request::segment(2);

        // Format segment jadi judul (misalnya "terapis" → "Terapis", "paket-pengobatan" → "Paket Pengobatan")
        $this->title = ucwords(str_replace('-', ' ', $this->segment));
    }
    protected $data = [];

    protected function NeededIndex()
    {
        $this->data['no'] = $this->model::generateNo();
        $this->data['pelanggans'] = Pelanggan::all()->map(fn($item) => [
            'id' => $item->id,
            'name' => $item->nama_pelanggan,
            'alamat' => $item->alamat_1,
            'telepon' => $item->no_telp
        ])->toArray();
        $this->data['penjuals'] = Penjual::all()->mapWithKeys(function ($item) {
            $nama = $item->nama_depan_penjual . " " . $item->nama_belakang_penjual;
            return [$item->id => $nama];
        })->toArray();
        $this->data['nama_barang'] = Barang::get();
        $this->data['tipe_barang'] = TipeBarang::get();
        $this->data['kategori_barang'] = KategoriBarang::get();
        $this->data['tipe_persediaan'] = TipePersediaan::get();
        $this->data['title'] = $this->path;
        $this->data['createRoute'] = route("penjualan.$this->path.create");
        $this->data['fetchRoute'] = route("penjualan.$this->path.fetch");
    }

    public function indexView(){
        $this->NeededIndex();
        return view("modulutama.penjualan.$this->path.data", $this->data);
    }
=======
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
}
