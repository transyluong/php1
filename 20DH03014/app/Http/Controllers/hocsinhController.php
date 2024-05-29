<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hocsinhModel;
class hocsinhController extends Controller
{
    function gethocsinhs(){
        $hocsinhs = hocsinhModel::all();
        return view('hienthihocsinh',['hocsinhs'=>$hocsinhs]);
    }

    function gethocsinhsbyGender(Request $request){
        $gender = $request -> input('selectGender');
        $hocsinhs = hocsinhModel::where('Gender',$gender)->get();
        return view('timkiemtheoGender',['he' => $hocsinhs]);
    }
}
?>
