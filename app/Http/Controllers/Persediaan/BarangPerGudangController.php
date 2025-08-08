<?php

namespace App\Http\Controllers\Persediaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AktivaTetap;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class BarangPerGudangController extends Controller
{
    function BarangPerGudangList()
    {
        return view('persediaan.barangpergudang.barangpergudang');
    }
    function BarangPerGudangAddNew()
    {
        return view('persediaan.barangpergudang.addBarangperGudang');
    }

    
}
