<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CariLowonganController extends Controller
{
    public function index(){
        return view('cariLowonganPage');
    }
}
