<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        try {
            $lowongans = Lowongan::paginate(5);
            $data['lowongans'] = $lowongans;

            return view('homePage', $data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function detail($id){
        
        $lowongan = Lowongan::find($id);

        if (!$lowongan) {
            abort(404);
        }

        $data['lowongan'] = $lowongan;

        return view('detailPage', $data);
    }
}
