<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departemen;
use Illuminate\Support\Facades\DB;

class DepartemenController extends Controller
{

    public function departemenList()
    {
        return view('departemen.listdepartemen');
    }

    public function delete(Request $request)
    {
        try {
            $ids = $request->ids;
            Departemen::whereIn('id', $ids)->delete();
            sweetalert()->success('Data berhasil dihapus :)');
            return redirect()->route('departemen/list/page');    
            
        } catch(\Exception $e) {
            DB::rollback();
            sweetalert()->error('Data gagal dihapus :)');
            \Log::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function getDepartemen(Request $request)
    {
        $draw            = $request->get('draw');
        $start           = $request->get("start");
        $rowPerPage      = $request->get("length"); // total number of rows per page
        $columnIndex_arr = $request->get('order');
        $columnName_arr  = $request->get('columns');
        $order_arr       = $request->get('order');
        $namaFilter      = $request->get('nama_departemen');
        $departemenIdFilter  = $request->get('departemen_id');
        $departemenDihentikanFilter  = $request->get('dihentikan');

        $columnIndex     = $columnIndex_arr[0]['column']; // Column index
        $columnName      = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc

        $departemen =  DB::table('departemen');
        $totalRecords = $departemen->count();

        if ($namaFilter) {
            $departemen->where('nama_departemen', 'like', '%' . $namaFilter . '%');
        }

        if ($departemenIdFilter) {
            $departemen->where('departemen_id', 'like', '%' . $departemenIdFilter . '%');
        }

        if ($departemenDihentikanFilter  !== null && $departemenDihentikanFilter !== '') {
            $departemen->where('dihentikan', $departemenDihentikanFilter);
        }

        $totalRecordsWithFilter = $departemen->count();

        if($columnName != 'checkbox'){
            $departemen->orderBy($columnName, $columnSortOrder);
        }

        $records = $departemen
            ->skip($start)
            ->take($rowPerPage)
            ->get();
            
        $data_arr = [];

        foreach ($records as $key => $record) {
            $checkbox = '<input type="checkbox" class="departemen_checkbox" value="'.$record->id.'">';

            $data_arr[] = [
                "checkbox"        => $checkbox,
                "no"              => $start + $key + 1,
                "id"              => $record->id,
                "departemen_id"   => $record->departemen_id,
                "nama_departemen" => $record->nama_departemen,
                'nama_kontak'     => $record->nama_kontak,
                'deskripsi'       => $record->deskripsi,
                'tipe_departemen' => $record->tipe_departemen,
                'dihentikan'      => $record->dihentikan,
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
