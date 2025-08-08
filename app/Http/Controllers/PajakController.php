<?php

namespace App\Http\Controllers;

use App\Models\Pajak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;

class PajakController extends Controller
{

    public function pajakList()
    {
        return view('pajak.listpajak');
    }

<<<<<<< HEAD
=======
    public function PajakAddNew()
    {
        return view('pajak.pajakaddnew');
    }
    
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama'                 => 'nullable|string|max:255',
            'kode_pajak'           => 'nullable|string|max:255',
            'nilai_persentase'     => 'nullable|string|max:255',
            'akun_pajak_penjualan' => 'nullable|string|max:255',
            'akun_pajak_pembelian' => 'nullable|string|max:255',
            'deskripsi'            => 'nullable|string|max:255',
        ]);

        DB::beginTransaction();
        try {
            $pajak = Pajak::findOrFail($id);
            $pajak->update($validated);
            
            DB::commit();
            sweetalert()->success('Updated record successfully :)');
            return redirect()->route('pajak/list/page');    
            
        } catch(\Exception $e) {
            DB::rollback();
            sweetalert()->error('Update record fail :)');
            \Log::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $pajak = Pajak::findOrFail($id);
        if (!$pajak) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
        return view('pajak.pajakedit', compact('pajak'));
    }

    public function saveRecordPajak(Request $request){
        $validated = $request->validate([
            'nama'                 => 'nullable|string|max:255',
            'kode_pajak'           => 'nullable|string|max:255',
            'nilai_persentase'     => 'nullable|string|max:255',
            'akun_pajak_penjualan' => 'nullable|string|max:255',
            'akun_pajak_pembelian' => 'nullable|string|max:255',
            'deskripsi'            => 'nullable|string|max:255',
        ]);

        //debug
        // DB::enableQueryLog();
        // MataUang::create($request->all());
        // dd(DB::getQueryLog());

        DB::beginTransaction();
        try {
            $pajak = new Pajak($validated);
            $pajak->save();
            
            DB::commit();
            sweetalert()->success('Create new Pajak successfully :)');
            return redirect()->route('pajak/list/page');    
            
        } catch(\Exception $e) {
            DB::rollback();
            sweetalert()->error('Tambah Data Gagal :)');
            return redirect()->back();
        }
    }

>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
    public function delete(Request $request)
    {
        try {
            $ids = $request->ids;
            Pajak::whereIn('id', $ids)->delete();
            sweetalert()->success('Data berhasil dihapus :)');
            return redirect()->route('pajak/list/page');    
            
        } catch(\Exception $e) {
            DB::rollback();
            sweetalert()->error('Data gagal dihapus :)');
            \Log::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function getPajak(Request $request)
    {
        $draw            = $request->get('draw');
        $start           = $request->get("start");
        $rowPerPage      = $request->get("length"); // total number of rows per page
        $columnIndex_arr = $request->get('order');
        $columnName_arr  = $request->get('columns');
        $order_arr       = $request->get('order');
        $namaFilter      = $request->get('nama');
<<<<<<< HEAD
        $pajakKodePajakFilter = $request->get('kode');
=======
        $pajakKodePajakFilter = $request->get('kode_pajak');
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a

        $columnIndex     = $columnIndex_arr[0]['column']; // Column index
        $columnName      = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc

        $pajak =  DB::table('pajak');
        $totalRecords = $pajak->count();

        if ($namaFilter) {
            $pajak->where('nama', 'like', '%' . $namaFilter . '%');
        }

        if ($pajakKodePajakFilter) {
<<<<<<< HEAD
            $pajak->where('kode', 'like', '%' . $pajakKodePajakFilter . '%');
=======
            $pajak->where('kode_pajak', 'like', '%' . $pajakKodePajakFilter . '%');
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
        }

        $totalRecordsWithFilter = $pajak->count();

<<<<<<< HEAD
        if($columnName != 'checkbox'){
            $pajak->orderBy($columnName, $columnSortOrder);
        }

        $records = $pajak
=======
        $records = $pajak
            ->orderBy($columnName, $columnSortOrder)
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
            ->skip($start)
            ->take($rowPerPage)
            ->get();
        $data_arr = [];

        foreach ($records as $key => $record) {
            $checkbox = '<input type="checkbox" class="pajak_checkbox" value="'.$record->id.'">';

            $data_arr[] = [
                "checkbox"         => $checkbox,
                "no"               => $start + $key + 1,
                "id"               => $record->id,
                "nama"             => $record->nama,
<<<<<<< HEAD
                "kode"             => $record->kode,
=======
                "kode_pajak"       => $record->kode_pajak,
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
                "deskripsi"        => $record->deskripsi,
                "nilai_persentase" => $record->nilai_persentase,
            ];
        }
        
        return response()->json([
            "draw"                 => intval($draw),
            "recordsTotal"         => $totalRecords,
            "recordsFiltered"      => $totalRecordsWithFilter,
            "data"                 => $data_arr
        ])->header('Content-Type', 'application/json');        
    }
}
