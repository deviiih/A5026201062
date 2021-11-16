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
}
