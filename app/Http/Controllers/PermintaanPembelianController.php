<?php

namespace App\Http\Controllers;

use App\Models\PermintaanPembelian;
use App\Models\PermintaanPembelianDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD


class PermintaanPembelianController extends Controller
{

    public function tambahPermintaan()
    {
        $nama_barang = DB::table('barang')->get();
        $tipe_barang = DB::table('tipe_barang')->get();
=======
use Illuminate\Support\Facades\Validator;

class PermintaanPembelianController extends Controller
{
    public function tambahPermintaan(Request $request)
    {
        if ($request->ajax()) {
            $nama_barang = DB::table('barang');

            if ($request->no_barang) {
                $nama_barang->where('no_barang', 'like', '%' . $request->no_barang . '%');
            }

            if ($request->nama_barang) {
                $nama_barang->where('nama_barang', 'like', '%' . $request->nama_barang . '%');
            }

            if ($request->kategori_barang) {
                $nama_barang->where('kategori_barang', $request->kategori_barang);
            }
        
            if ($request->tipe_persediaan) {
                $nama_barang->where('tipe_persediaan', $request->tipe_persediaan);
            }

            if ($request->default_gudang) {
                $nama_barang->where('default_gudang', $request->default_gudang);
            }

            $result = $nama_barang->get();
            return response()->json($result);
        }

        $tipe_barang = DB::table('tipe_barang')->get();
        $barang = DB::table('barang')->get();
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
        $tipe_persediaan = DB::table('tipe_persediaan')->get();
        $kategori_barang = DB::table('kategori_barang')->get();
        $gudang = DB::table('gudang')->get();
        $departemen = DB::table('departemen')->get();
        $proyek = DB::table('proyek')->get();
        $pemasok = DB::table('pemasok')->get();
        $satuan = DB::table('satuan')->get();
        $mata_uang = DB::table('mata_uang')->orderBy('nama', 'asc')->get();
<<<<<<< HEAD
        $nama_akun = '';
=======
        $nama_akun = DB::table('akun')->orderBy('nama', 'asc')->get();
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
        $prefix = 'GMP';
        $latest = PermintaanPembelian::orderBy('no_permintaan', 'desc')->first();
        $nextID = $latest ? intval(substr($latest->no_permintaan, strlen($prefix))) + 1 : 1;
        $kodeBaru = $prefix . sprintf("%04d", $nextID);
<<<<<<< HEAD
        return view('pembelian/permintaan.tambahpermintaan', compact('nama_barang','tipe_barang', 'tipe_persediaan', 'kategori_barang', 'gudang', 'departemen', 'proyek', 'pemasok', 'satuan', 'mata_uang', 'kodeBaru', 'nama_akun'));
=======

        return view('pembelian/permintaan.tambahpermintaan', compact('barang','tipe_barang', 'tipe_persediaan', 'kategori_barang', 'gudang', 'departemen', 'proyek', 'pemasok', 'satuan', 'mata_uang', 'kodeBaru', 'nama_akun'));
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
    }

    public function simpanPermintaan(Request $request)
    {
        $rules = [
<<<<<<< HEAD
            'tgl_permintaan'            => 'nullable|string|max:255',
=======
            'tgl_permintaan'            => 'required|string|max:255',
            'disetujui_check'           => 'nullable|boolean',
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
            'deskripsi_permintaan'      => 'nullable|string|max:255',
            'tindak_lanjut_check'       => 'nullable|boolean',
            'urgent_check'              => 'nullable|boolean',
            'deskripsi_1'               => 'nullable|string|max:255',
            'catatan_pemeriksaan_check' => 'nullable|boolean',
<<<<<<< HEAD
            'deskripsi_2'               => 'nullable|string|max:255',
            // 'status_permintaan'      => 'nullable|string|max:255',
=======
            'disetujui_check'           => 'nullable|boolean',
            'deskripsi_2'               => 'nullable|string|max:255',
            'status_permintaan'         => 'nullable|string|max:255',
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
            'pengguna_permintaan'       => 'nullable|string|max:255',
            'no_barang.*'               => 'nullable|string|max:255',
            'deskripsi_barang.*'        => 'nullable|string|max:255',
            'kts_permintaan.*'          => 'nullable|string|max:255',
            'satuan.*'                  => 'nullable|string|max:255',
            'catatan.*'                 => 'nullable|string|max:255',
            'tgl_diminta.*'             => 'nullable|string|max:255',
            'kts_dipesan.*'             => 'nullable|string|max:255',
            'kts_diterima.*'            => 'nullable|string|max:255',
<<<<<<< HEAD
            'proyek'                    => 'nullable|string|max:255',
            'gudang'                    => 'nullable|string|max:255',
            'departemen'                => 'nullable|string|max:255',
        ];

        $validated = $request->validate($rules);
=======
            'proyek'                    => 'required|string|max:255',
            'gudang'                    => 'required|string|max:255',
            'departemen'                => 'required|string|max:255',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            sweetalert()->error('Validasi Gagal, Beberapa Input Wajib Belum Terisi!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a

        DB::beginTransaction();
        try {

<<<<<<< HEAD
            $jumlahBarang = count($request->no_barang);
            for ($i = 0; $i < $jumlahBarang; $i++){
                $permintaan = new PermintaanPembelian($validated);
                $permintaan->save();

=======
            $permintaan = new PermintaanPembelian($validator->validated());
            $permintaan->save();

            $jumlahBarang = count($request->no_barang);
            for ($i = 0; $i < $jumlahBarang; $i++){
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
                $detail = new PermintaanPembelianDetail();
                $detail->permintaan_pembelian_id = $permintaan->id;
                $detail->no_barang               = $request->no_barang[$i];
                $detail->deskripsi_barang        = $request->deskripsi_barang[$i];
                $detail->kts_permintaan          = $request->kts_permintaan[$i];
                $detail->satuan                  = $request->satuan[$i];
<<<<<<< HEAD
=======
                $detail->harga_satuan            = $request->harga_satuan[$i];
                $detail->jumlah_total_harga      = $request->jumlah_total_harga[$i];
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
                $detail->catatan                 = $request->catatan[$i];
                $detail->tgl_diminta             = $request->tgl_diminta[$i];
                $detail->kts_dipesan             = $request->kts_dipesan[$i];
                $detail->kts_diterima            = $request->kts_diterima[$i];
                $detail->save();
            }
<<<<<<< HEAD
            
            // $checkboxAktif = $request->nilai_permintaan_check == 1;
            // $kts_baru = (int) str_replace(['.', ',', ' '], '', $request->kts_baru);
            // $kts_saat_ini = (int) str_replace(['.', ',', ' '], '', $request->kts_saat_ini);

            // if ($checkboxAktif && $kts_baru <= $kts_saat_ini) {
            //     sweetalert()->warning('Jika checkbox aktif, Kuantitas Baru harus lebih besar dari Saldo Sekarang.');
            //     return back()->withInput();
            // }

            // if (!$checkboxAktif && $kts_baru >= $kts_saat_ini) {
            //     sweetalert()->warning('Jika checkbox tidak aktif, Kuantitas Baru harus lebih kecil dari Saldo Sekarang.');
            //     return back()->withInput();
            // }
            $detail->save();

            // Barang::where('no_barang', $request->no_barang)
            //         ->update([
            //             'kuantitas_saldo_awal' => $kts_baru,
            //             'total_saldo_awal' => str_replace(['Rp', '.', ' '], '', $request->nilai_baru),
            //             'departemen' => $request->departemen,
            //             'proyek' => $request->proyek,
            //             'default_gudang' => $request->gudang,
            //         ]);

=======
    
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
            DB::commit();
            sweetalert()->success('Create new Barang & Detail successfully :)');
            return redirect()->route('pembelian/permintaan/list/page');

        } catch (\Exception $e) {
            DB::rollback();
            sweetalert()->error('Tambah Data Gagal: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function editPermintaan($id)
    {
        $nama_barang = DB::table('barang')->get();
        $tipe_barang = DB::table('tipe_barang')->get();
        $tipe_persediaan = DB::table('tipe_persediaan')->get();
        $kategori_barang = DB::table('kategori_barang')->get();
        $gudang = DB::table('gudang')->get();
        $departemen = DB::table('departemen')->get();
        $proyek = DB::table('proyek')->get();
        $pemasok = DB::table('pemasok')->get();
        $satuan = DB::table('satuan')->get();
        $sub_barang = DB::table('barang')->get();
        $mata_uang = DB::table('mata_uang')->orderBy('nama', 'asc')->get();
        $nama_akun = DB::table('akun')->orderBy('nama', 'asc')->get();
        // $penyesuaianBarangEdit = DB::table('penyesuaian_barang')->where('no_penyesuaian',$no_penyesuaian)->first();
<<<<<<< HEAD
        $permintaanPembelian = PermintaanPembelian::with('detail')->findOrFail($id);
=======
        $permintaanPembelian = PermintaanPembelian::with(['detail', 'detail2'])->findOrFail($id);
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
        if (!$permintaanPembelian) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
        return view('pembelian/permintaan.ubahpermintaan', compact('permintaanPembelian','nama_barang','tipe_barang', 'tipe_persediaan', 'kategori_barang', 'gudang', 'departemen', 'proyek', 'pemasok', 'satuan', 'sub_barang', 'mata_uang', 'nama_akun'));
    }

    public function updatePermintaan(Request $request, $id)
    {
        $rules = [
<<<<<<< HEAD
            'tgl_permintaan'            => 'nullable|string|max:255',
=======
            'tgl_permintaan'            => 'required|string|max:255',
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
            'deskripsi_permintaan'      => 'nullable|string|max:255',
            'tindak_lanjut_check'       => 'nullable|boolean',
            'urgent_check'              => 'nullable|boolean',
            'deskripsi_1'               => 'nullable|string|max:255',
            'catatan_pemeriksaan_check' => 'nullable|boolean',
<<<<<<< HEAD
            'deskripsi_2'               => 'nullable|string|max:255',
            // 'status_permintaan'      => 'nullable|string|max:255',
=======
            'disetujui_check'           => 'nullable|boolean',
            'tutup_check_all'           => 'nullable|boolean',
            'deskripsi_2'               => 'nullable|string|max:255',
            'status_permintaan'         => 'nullable|string|max:255',
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
            'pengguna_permintaan'       => 'nullable|string|max:255',
            'no_barang.*'               => 'nullable|string|max:255',
            'deskripsi_barang.*'        => 'nullable|string|max:255',
            'kts_permintaan.*'          => 'nullable|string|max:255',
            'satuan.*'                  => 'nullable|string|max:255',
            'catatan.*'                 => 'nullable|string|max:255',
            'tgl_diminta.*'             => 'nullable|string|max:255',
            'kts_dipesan.*'             => 'nullable|string|max:255',
            'kts_diterima.*'            => 'nullable|string|max:255',
<<<<<<< HEAD
            'proyek'                    => 'nullable|string|max:255',
            'gudang'                    => 'nullable|string|max:255',
            'departemen'                => 'nullable|string|max:255',
=======
            'tutup_check_items.*'       => 'nullable|boolean',
            'proyek'                    => 'required|string|max:255',
            'gudang'                    => 'required|string|max:255',
            'departemen'                => 'required|string|max:255',
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
        ];

        $validated = $request->validate($rules);

        DB::beginTransaction();
        try {
            $permintaanPembelian = PermintaanPembelian::with('detail')->findOrFail($id);
            $permintaanPembelian->pengguna_permintaan = $request->pengguna_permintaan;
<<<<<<< HEAD
=======
            if ($request->disetujui_check && !$permintaanPembelian->no_persetujuan) {
                $permintaanPembelian->no_persetujuan = PermintaanPembelian::generateNoPersetujuan();
            }
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
            $permintaanPembelian->update($validated);

            PermintaanPembelianDetail::where('permintaan_pembelian_id', $permintaanPembelian->id)->delete();

            $jumlahBarang = count($request->no_barang);
            for ($i = 0; $i < $jumlahBarang; $i++){
<<<<<<< HEAD
                $detail = new PermintaanPembelianDetail();
                $detail->permintaan_pembelian_id = $permintaanPembelian->id;
=======
                $tutup_check_all = $request->tutup_check_all;

                $detail = new PermintaanPembelianDetail();
                $detail->permintaan_pembelian_id = $permintaanPembelian->id;
                $detail->tutup_check_all         = $tutup_check_all;
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
                $detail->no_barang               = $request->no_barang[$i];
                $detail->deskripsi_barang        = $request->deskripsi_barang[$i];
                $detail->kts_permintaan          = $request->kts_permintaan[$i];
                $detail->satuan                  = $request->satuan[$i];
<<<<<<< HEAD
=======
                $detail->harga_satuan            = $request->harga_satuan[$i];
                $detail->jumlah_total_harga      = $request->jumlah_total_harga[$i];
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
                $detail->catatan                 = $request->catatan[$i];
                $detail->tgl_diminta             = $request->tgl_diminta[$i];
                $detail->kts_dipesan             = $request->kts_dipesan[$i];
                $detail->kts_diterima            = $request->kts_diterima[$i];
<<<<<<< HEAD
=======
                $detail->tutup_check_items       = $request->tutup_check_items[$i];
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
                $detail->save();
            }
            
            DB::commit();
            sweetalert()->success('Updated record successfully :)');
            return redirect()->route('pembelian/permintaan/list/page');    
            
        } catch(\Exception $e) {
            DB::rollback();
            sweetalert()->error('Update record fail :)');
            \Log::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function hapusPermintaan(Request $request)
    {
        try {
            $ids = $request->ids;
            PermintaanPembelian::whereIn('id', $ids)->delete();
            sweetalert()->success('Data berhasil dihapus :)');
            return redirect()->route('pembelian/permintaan/list/page');    

        } catch(\Exception $e) {
            DB::rollback();
            sweetalert()->error('Data gagal dihapus :)');
            \Log::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function daftarPermintaan(Request $request)
    {
        $nama_barang = DB::table('barang')->get();
        $tipe_barang = DB::table('tipe_barang')->get();
        $tipe_persediaan = DB::table('tipe_persediaan')->get();
<<<<<<< HEAD
        $kategori_barang = DB::table('kategori_barang')->get();
        
        return view('pembelian/permintaan.datapermintaan', compact('nama_barang','tipe_barang', 'tipe_persediaan', 'kategori_barang'));
    }

=======
        $pengguna_permintaan = DB::table('permintaan_pembelian')
            ->select('pengguna_permintaan')
            ->distinct()
            ->get();

        return view('pembelian/permintaan.datapermintaan', compact('nama_barang','tipe_barang', 'tipe_persediaan','pengguna_permintaan'));
    }
    
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
    public function dataPermintaan(Request $request)
    {
        $draw            = $request->get('draw');
        $start           = $request->get("start");
<<<<<<< HEAD
        $rowPerPage      = $request->get("length"); // total number of rows per page
        $columnIndex_arr = $request->get('order');
        $columnName_arr  = $request->get('columns');
        $order_arr       = $request->get('order');
        $permintaanNoFilter  = $request->get('no_permintaan');
        $permintaanTanggalFilter  = $request->get('tgl_permintaan');

        $columnIndex     = $columnIndex_arr[0]['column']; // Column index
        $columnName      = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc

        $permintaan = DB::table('permintaan_pembelian')
        ->join('permintaan_pembelian_detail', 'permintaan_pembelian.id', '=', 'permintaan_pembelian_detail.permintaan_pembelian_id')
        ->select(
            'permintaan_pembelian.id',
            'permintaan_pembelian.no_permintaan',
            'permintaan_pembelian.tgl_permintaan',
            'permintaan_pembelian.deskripsi_permintaan',
            'permintaan_pembelian.pengguna_permintaan',
            'permintaan_pembelian.tindak_lanjut_check',
            'permintaan_pembelian.urgent_check',
            'permintaan_pembelian.catatan_pemeriksaan_check',
            'permintaan_pembelian_detail.no_barang',
            'permintaan_pembelian_detail.deskripsi_barang',
            'permintaan_pembelian_detail.kts_permintaan',
            'permintaan_pembelian_detail.satuan',
            'permintaan_pembelian_detail.catatan',
            'permintaan_pembelian_detail.tgl_diminta',
            'permintaan_pembelian_detail.kts_dipesan',
            'permintaan_pembelian_detail.kts_diterima',
            'permintaan_pembelian_detail.tutup_check_all',
            'permintaan_pembelian_detail.tutup_check_items',
        );
        $totalRecords = $permintaan->count();

        if ($permintaanNoFilter) {
            $permintaan->where('no_permintaan', 'like', '%' . $permintaanNoFilter . '%');
        }

        if ($permintaanTanggalFilter) {
            $permintaan->where('tgl_permintaan', $permintaanTanggalFilter);
        }
        
        if ($request->filled('tgl_mulai') && $request->filled('tgl_sampai')) {
            $permintaan->whereBetween('tgl_permintaan', [$request->tgl_mulai, $request->tgl_sampai]);
        } elseif ($request->filled('tgl_mulai')) {
            $permintaan->whereDate('tgl_permintaan', '>=', $request->tgl_mulai);
        } elseif ($request->filled('tgl_sampai')) {
            $permintaan->whereDate('tgl_permintaan', '<=', $request->tgl_sampai);
        }

        // if ($permintaanTipePersediaanFilter) {
        //     $permintaan->where('tipe_persediaan', $permintaanTipePersediaanFilter);
        // }

        // if ($permintaanTipeBarangFilter) {
        //     $permintaan->where('tipe_barang', $permintaanTipeBarangFilter);
        // }

        // if ($permintaanDihentikanFilter  !== null && $permintaanDihentikanFilter !== '') {
        //     $permintaan->where('dihentikan', $permintaanDihentikanFilter);
        // }

        $totalRecordsWithFilter = $permintaan->count();

        $records = $permintaan
            ->orderBy($columnName, $columnSortOrder)
            ->skip($start)
            ->take($rowPerPage)
            ->get();
        
        $data_arr = [];

        foreach ($records as $key => $record) {
            $checkbox = '<input type="checkbox" class="permintaan_checkbox" value="'.$record->id.'">';
        
=======
        $length          = $request->get("length");
        $columnIndex_arr = $request->get('order');
        $columnName_arr  = $request->get('columns');
        $order_arr       = $request->get('order');
        $permintaanPembelianNoFilter        = $request->get('no_permintaan');
        $permintaanPembelianDeskripsiFilter = $request->get('deskripsi_permintaan');
        $permintaanPembelianPenggunaFilter = $request->get('pengguna_permintaan');
        $permintaanPembelianCatatanPemeriksaanFilter = $request->get('catatan_pemeriksaan_check');
        $permintaanPembelianPersetujuanFilter = $request->get('disetujui_check');
        $permintaanPembelianUrgentFilter = $request->get('urgent_check');
        $permintaanPembelianRTindakLanjutFilter = $request->get('tindak_lanjut_check');
        $permintaanPembelianStatusFilter = $request->get('status_permintaan');


        $columnIndex     = $columnIndex_arr[0]['column'];
        $columnName      = $columnName_arr[$columnIndex]['data'];
        $columnSortOrder = $order_arr[0]['dir'];

        $query = DB::table('permintaan_pembelian');

        if ($permintaanPembelianNoFilter) {
            $query->where('no_permintaan', 'like', '%' . $permintaanPembelianNoFilter . '%');
        }

        if ($permintaanPembelianDeskripsiFilter) {
            $query->where('deskripsi_permintaan', 'like', '%' . $permintaanPembelianDeskripsiFilter . '%');
        }

        if ($permintaanPembelianPenggunaFilter) {
            $query->where('pengguna_permintaan', $permintaanPembelianPenggunaFilter);
        }

        if ($permintaanPembelianCatatanPemeriksaanFilter !== null && $permintaanPembelianCatatanPemeriksaanFilter !== '') {
            $query->where('catatan_pemeriksaan_check', $permintaanPembelianCatatanPemeriksaanFilter);
        }

        if ($permintaanPembelianPersetujuanFilter !== null && $permintaanPembelianPersetujuanFilter !== '') {
            $query->where('disetujui_check', $permintaanPembelianPersetujuanFilter);
        }

        if ($permintaanPembelianUrgentFilter !== null && $permintaanPembelianUrgentFilter !== '') {
            $query->where('urgent_check', $permintaanPembelianUrgentFilter);
        }

        if ($permintaanPembelianRTindakLanjutFilter !== null && $permintaanPembelianRTindakLanjutFilter !== '') {
            $query->where('tindak_lanjut_check', $permintaanPembelianRTindakLanjutFilter);
        }

        if ($permintaanPembelianStatusFilter) {
            $query->where('status_permintaan', $permintaanPembelianStatusFilter);
        }

        $totalRecordsWithFilter = $query->count();
        $totalRecords = DB::table('permintaan_pembelian')->count();

        $records = $query
            ->orderBy($columnName, $columnSortOrder)
            ->offset($start)
            ->limit($length)
            ->get();

        $data_arr = [];

        foreach ($records as $key => $record) {
            $detail = DB::table('permintaan_pembelian_detail')
                ->where('permintaan_pembelian_id', $record->id)
                ->first();

            $checkbox = '<input type="checkbox" class="permintaan_checkbox" value="'.$record->id.'">';

>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
            $data_arr[] = [
                "checkbox"                  => $checkbox,
                "no"                        => $start + $key + 1,
                "id"                        => $record->id,
                "no_permintaan"             => $record->no_permintaan,
<<<<<<< HEAD
=======
                "no_persetujuan"             => $record->no_persetujuan,
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
                "tgl_permintaan"            => $record->tgl_permintaan,
                "deskripsi_permintaan"      => $record->deskripsi_permintaan,
                "pengguna_permintaan"       => $record->pengguna_permintaan,
                "tindak_lanjut_check"       => $record->tindak_lanjut_check,
<<<<<<< HEAD
                "urgent_check"              => $record->urgent_check,
                "catatan_pemeriksaan_check" => $record->catatan_pemeriksaan_check,
            ];
        }        
        
        return response()->json([
            "draw"                 => intval($draw),
            "recordsTotal"         => $totalRecords,
            "recordsFiltered"      => $totalRecordsWithFilter,
            "data"                 => $data_arr
        ])->header('Content-Type', 'application/json');        
    }
=======
                "status_permintaan"         => $record->status_permintaan,
                "urgent_check"              => $record->urgent_check,
                "catatan_pemeriksaan_check" => $record->catatan_pemeriksaan_check,
                "disetujui_check"           => $record->disetujui_check,
                "deskripsi_barang"          => $detail->deskripsi_barang ?? null,
            ];
        }

        return response()->json([
            "draw"            => intval($draw),
            "recordsTotal"    => $totalRecords,
            "recordsFiltered" => $totalRecordsWithFilter,
            "data"            => $data_arr
        ])->header('Content-Type', 'application/json');
    }

>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
}
