<?php

namespace App\Livewire\BukuBesar;

use App\Models\Akun;
use App\Models\BukuBesar\DetailPembayaranLainnya;
use App\Models\BukuBesar\PembayaranLainnya;
use App\Models\Dokumen;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Title;
use Livewire\Component;

class PembayaranLainnyaForm extends Component
{
    public $pembayaranId;
    public $no_pembayaran;
    public $tanggal;
	public $no_cek;
	public $rancangan = 'Pembayaran Lainnya';
	public $dibayar_dari_akun_id;
	public $dibayar_ke;
	public $nilai_tukar = 1;
	public $jumlah = 0;
	public $mata_uang_asing = false;
	public $urgent = false;
	public $tindak_lanjut;
	public $catatan_pemeriksaan;
	public $deskripsi;
    public $activeTab = 'detail';
    public $dokumens = [];
    public $dokumenIds = [];
    public $detail = [];
    public $detailIds = [];

    public function mount($id = null){
        if($id){
            $pembayaran = PembayaranLainnya::findOrFail($id);
            $this->pembayaranId = $pembayaran->id;
            $this->no_pembayaran = $pembayaran->no_pembayaran;
            $this->tanggal = $pembayaran->tanggal;
            $this->no_cek = $pembayaran->no_cek;
            $this->rancangan = $pembayaran->rancangan;
            $this->dibayar_dari_akun_id = $pembayaran->dibayar_dari_akun_id;
            $this->dibayar_ke = $pembayaran->dibayar_ke;
            $this->nilai_tukar = $pembayaran->nilai_tukar;
            $this->jumlah = $pembayaran->jumlah;
            $this->mata_uang_asing = $pembayaran->mata_uang_asing;
            $this->urgent = $pembayaran->urgent;
            $this->tindak_lanjut = $pembayaran->tindak_lanjut;
            $this->catatan_pemeriksaan = $pembayaran->catatan_pemeriksaan;
            $this->deskripsi = $pembayaran->deskripsi;
            foreach ($pembayaran->dokumen as $dok) {
                $this->dokumenIds[] = $dok->id;
                $this->dokumens[] = $dok->file_link;
            }
            foreach ($pembayaran->entries as $detail) {
                $this->detailIds[] = $detail->id;
                $this->addAkun($detail->akun_id, $detail);
            }
        }
    }

    public function save(){
        $data = $this->validate([
            'no_pembayaran'       => 'required|string|max:255|unique:pembayaran_lainnya,no_pembayaran,'.$this->pembayaranId,
            'tanggal'             => 'required|string|max:255',
            'no_cek'              => 'nullable',
            'rancangan'           => 'nullable|string',
            'dibayar_dari_akun_id'=> 'required',
            'dibayar_ke'          => 'nullable|string',
            'nilai_tukar'         => 'nullable|integer',
            'jumlah'              => 'nullable|integer',
            'mata_uang_asing'     => 'nullable|boolean',
            'urgent'              => 'nullable|boolean',
            'tindak_lanjut'       => 'nullable|string',
            'catatan_pemeriksaan' => 'nullable|string',
            'deskripsi'           => 'nullable|string',
        ]);

        if(count($this->detail) === 0){
            sweetalert()->error('Tambahkan setidaknya 1 akun!');
            return;
        }

        $jumlah = 0;
        foreach($this->detail as $detail){
            $jumlah += intval($detail['jumlah']);
        }

        $data['nilai'] = $jumlah;
        $data['user_id'] = auth()->id();

        DB::beginTransaction();
        try {
            $pembayaran = PembayaranLainnya::updateOrCreate(['id' => $this->pembayaranId], $data);
            foreach($this->detail as $i => $detail){
                DetailPembayaranLainnya::updateOrCreate(
                    ['id' => isset($this->detailIds[$i]) ? $this->detailIds[$i] : null],
                    [
                        'pembayaran_id' => $pembayaran->id,
                        'akun_id' => $detail['akun_id'],
                        'jumlah' => intval($detail['jumlah']),
                        'catatan' => $detail['catatan'],
                        'departemen_id' => $detail['departemen_id'] == '' ? null : $detail['departemen_id'],
                        'proyek_id' => $detail['proyek_id'] == '' ? null : $detail['proyek_id'],
                    ]
                );
            }
            //dokumen
            if(!isset($this->pembayaranId)){
                //tambah dokumen
                foreach($this->dokumens as $dok){
                    $this->newDokumen($pembayaran, $dok);
                }
            }else{
                foreach($this->dokumens as $i => $dok){
                    //kalo idnya masih: edit, kalo habis: tambah
                    if(isset($this->dokumenIds[$i])){
                        $dokumen = Dokumen::find($this->dokumenIds[$i]);
                        $dokumen->file_link = $dok;
                        $dokumen->save();
                    }else{
                        $this->newDokumen($pembayaran, $dok);
                    }
                }
            }
            DB::commit();
            
            sweetalert()->success((isset($this->pembayaranId) ? 'Edit' : 'Tambah') . ' Data Berhasil');
            return redirect()->route('pembayaranlainnya/list/page');    
            
        } catch(\Exception $e) {
            DB::rollback();
            sweetalert()->error((isset($this->pembayaranId) ? 'Edit' : 'Tambah') . ' Data Gagal: ' . $e->getMessage());
            return redirect()->back();
        }
    }

    protected function newDokumen($parent, $link){
        if($link != ''){
            $dokumen = new Dokumen();
            $dokumen->file_link = $link;
            $parent->dokumen()->save($dokumen);
        }
    }

    public function addField(){
        if(count($this->dokumens) < 7){
            $this->dokumens[] = '';
            $this->activeTab = 'dokumen';
        }else{
            sweetalert()->error('Dokumen maksimal 7 field!');
        }
    }
    public function hapusDokumen($index){
        array_splice($this->dokumens, $index , 1);

        if(isset($this->dokumenIds[$index])){
            $dokumenId = $this->dokumenIds[$index];
            Dokumen::destroy($dokumenId);
            array_splice($this->dokumenIds, $index , 1);
        }
    }

    public function refreshKode(){
        if(!isset($this->pembayaranId)){
            $prefix = 'GMP-';
            $latest = PembayaranLainnya::orderBy('no_pembayaran', 'desc')->first();
            $nextID = $latest ? intval(substr($latest->no_pembayaran, strlen($prefix))) + 1 : 1;
            $this->no_pembayaran = $prefix . sprintf("%04d", $nextID);
        }
    }

    public function addAkun($id, $data = null){
        $this->detail[] = [
            'akun_id' => $id,
            'akun' => Akun::find($id),
            'jumlah' => $data ? intval($data->jumlah) : '',
            'catatan' => $data ? $data->catatan : '',
            'departemen_id' => $data ? $data->departemen_id : '',
            'proyek_id' => $data ? $data->proyek_id : '',
        ];
    }
    public function hapusDetail($index){
        array_splice($this->detail, $index, 1);

        if(isset($this->detailIds[$index])){
            $detailId = $this->detailIds[$index];
            DetailPembayaranLainnya::destroy($detailId);
            array_splice($this->detailIds, $index, 1);
        }
    }

    #[Title('Pembayaran Lainnya')]
    public function render() {
        $this->refreshKode();
        if(count($this->dokumens) < 1){
            $this->dokumens[] = '';
        }
        $departemen = DB::table('departemen')->get(['id', 'nama_departemen']);
        $proyek = DB::table('proyek')->get(['id', 'nama_proyek']);
        $akun = DB::table('akun')->where('tipe_id', '=', 1)->get(['id', 'nama_akun_indonesia']);

        return view('bukubesar.pembayaranlainnya.form', compact('departemen', 'proyek', 'akun'));
    }
}
