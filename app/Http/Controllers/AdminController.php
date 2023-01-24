<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        try {
            $lowongans = Lowongan::all();
            $data['lowongans'] = $lowongans;

            return view('adminPage', $data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function add_lowongan(Request $request){
        $fotoPerusahaan = $request->file('fotoPerusahaan')->store('post-images');
        $namaPerusahaan = $request->namaPerusahaan;
        $namaPekerjaan = $request->namaPekerjaan;
        $jenisDisabilitas = $request->jenisDisabilitas;
        $lokasiPerusahaan = $request->lokasiPerusahaan;
        $deadlineDate = $request->deadlineDate;
        $detailLowongan = json_encode($request->detailLowongan);
        $kreteriaUmum = json_encode($request->kreteriaUmum);
        $kreteriaKhusus = json_encode($request->kreteriaKhusus);
        $catatanLain = json_encode($request->catatanLain);
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
            'detailLowongan' => $detailLowongan,
            'kreteriaUmum' => $kreteriaUmum,
            'kreteriaKhusus' => $kreteriaKhusus,
            'catatanLain' => $catatanLain,
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

    public function delete_lowongan($id)
    {
        Lowongan::destroy($id);
        return redirect()->route('admin-page');
    }
}
