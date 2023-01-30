<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class CariLowonganController extends Controller
{
    public function index(){

        $kategoriPekerjaan = request('kategoriPekerjaan');
        $lokasiPerusahaan = request('lokasiPerusahaan');
        $namaPekerjaan = request('namaPekerjaan');
        $namaPerusahaan = request('namaPerusahaan');

        try {            
            $lowongans = Lowongan::latest();
            
            if(!empty($kategoriPekerjaan) && !empty($lokasiPerusahaan) && !empty($namaPekerjaan)  && !empty($namaPerusahaan)){
                $lowongans->where('kategoriPekerjaan', 'like', '%' . $kategoriPekerjaan . '%')
                          ->where('lokasiPerusahaan', 'like', '%' . $lokasiPerusahaan . '%')
                          ->where('namaPekerjaan', 'like', '%' . $namaPekerjaan . '%')
                          ->where('namaPerusahaan', 'like', '%' . $namaPerusahaan . '%');
            } else if (!empty($kategoriPekerjaan)) {
                $lowongans->where('kategoriPekerjaan', 'like', '%' . $kategoriPekerjaan . '%');
            } else if (!empty($lokasiPerusahaan)) {
                $lowongans->where('lokasiPerusahaan', 'like', '%' . $lokasiPerusahaan . '%');
            } else if (!empty($namaPekerjaan)) {
                $lowongans->where('namaPekerjaan', 'like', '%' . $namaPekerjaan . '%');
            } else if (!empty($namaPerusahaan)) {
                $lowongans->where('namaPerusahaan', 'like', '%' . $namaPerusahaan . '%');
            }

            return view('cariLowonganPage', ["lowongans" => $lowongans->get()]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
