<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('adminPage');
    }
}
