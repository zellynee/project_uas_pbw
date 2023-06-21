<?php

namespace App\Http\Controllers;

use App\tbl_468;
use Illuminate\Http\Request;
use\App\Tbl_462;

class PageController extends Controller
{
    public function formsatu (){
        return view ('formsatu');
    }

    public function simpan (Request $request){
        $custom = $request->input('customRadio');

        return "Jurusan = ".$custom;
    }

    public function formdua (){
        return view ('formdua');
    }

    public function ceksimpan (Request $request){
        $satu= $request->input('satu');
        $dua = $request->input('dua');
        $tiga = $request->input('tiga');

        return "Hoby = ".$satu." ".$dua." ".$tiga;
    }
    
    public function desc (){
        $satu = tbl_468::orderBy('id','desc')->get();

        return view ('welcome', ['welcome'=> $satu]);
    }
    
    public function tambahan(){
        return view ('tambahan');
    }
}
