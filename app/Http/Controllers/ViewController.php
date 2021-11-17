<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    //nama function bebas
    function showETS() {
        //source untuk data / proses bisnis yg di olah
        return view('ets') ;
    }
    function showForm() {
        //source untuk data / proses bisnis yg di olah
        return view('form') ;
    }
    function showphp() {
        //source untuk data / proses bisnis yg di olah
        return view('hasil') ;
    }
}
