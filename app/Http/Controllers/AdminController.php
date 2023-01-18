<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('adminPage');
    }

    public function add_lowongan(Request $request){
        $fotoPerusahaan = $request->fotoPerusahaan;
        $namaPerusahaan = $request->namaPerusahaan;
        $namaPekerjaan = $request->namaPekerjaan;
        $jenisDisabilitas = $request->jenisDisabilitas;
        $lokasiPerusahaan = $request->lokasiPerusahaan;
        $deadlineDate = $request->deadlineDate;
        $detailLowongan = $request->detailLowongan;
        $kreteriaUmum = $request->kreteriaUmum;
        $kreteriaKhusus = $request->kreteriaKhusus;
        $catatanLain = $request->catatanLain;
        $tentangPerusahaan = $request->tentangPerusahaan;
        $kategoriPekerjaan = $request->kategoriPekerjaan;
        $spesifikasiPekerjaan = $request->spesifikasiPekerjaan;

        $data = [
            'fotoPerusahaan' => $fotoPerusahaan,
            'namaPerusahaan' => $namaPerusahaan,
            'namaPekerjaan' => $namaPekerjaan,
            'jenisDisabilitas' => $jenisDisabilitas,
            'lokasiPerusahaan' => $lokasiPerusahaan,
            'deadlineDate' => $deadlineDate,
            'detailLowongan' => json_encode($detailLowongan),
            'kreteriaUmum' => json_encode($kreteriaUmum),
            'kreteriaKhusus' => json_encode($kreteriaKhusus),
            'catatanLain' => json_encode($catatanLain),
            'tentangPerusahaan' => $tentangPerusahaan,
            'kategoriPekerjaan' => $kategoriPekerjaan,
            'spesifikasiPekerjaan' => $spesifikasiPekerjaan
        ];

        try {
            Lowongan::create($data);

            return redirect()->route('admin-page')->with('success', 'data added successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('pages-home')->with('error', 'Error adding data: ' . $th->getMessage());
        }
        
    }
}
