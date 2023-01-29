<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class CariLowonganController extends Controller
{
    public function index(){
        try {            
            $lowongans = Lowongan::latest();
            
            if(request('kategoriPekerjaan') && request('namaPekerjaan') && request('lokasiPerusahaan') && request('namaPerusahaan')){
                $lowongans->where('kategoriPekerjaan', 'like', '%' . request('kategoriPekerjaan') . '%')
                        ->where('lokasiPerusahaan', 'like', '%' . request('lokasiPerusahaan') . '%');
            } else if (request('kategoriPekerjaan')) {
                $lowongans->where('kategoriPekerjaan', 'like', '%' . request('kategoriPekerjaan') . '%');
            } else if (request('lokasiPerusahaan') && request('kategoriPekerjaan') == '') {
                $lowongans->where('lokasiPerusahaan', 'like', '%' . request('lokasiPerusahaan') . '%');
            } else if (request('namaPekerjaan')) {
                $lowongans->where('namaPekerjaan', 'like', '%' . request('namaPekerjaan') . '%');
            } else if (request('namaPerusahaan')) {
                $lowongans->where('namaPerusahaan', 'like', '%' . request('namaPerusahaan') . '%');
            }

            return view('cariLowonganPage', ["lowongans" => $lowongans->get()]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
