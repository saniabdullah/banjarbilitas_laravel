@extends('layouts/appLayout')

@section('content')
<div>
    <!-- form -->
    <div class="flex flex-col items-center pt-6 sm:justify-center sm:pt-0 margin__form_admin">
        <div class="create pb-8 my-32 w-full px-6 py-4 bg-gray-50 shadow-md sm:rounded-lg">
            <h2>Tambah Lowongan</h2>
            <form action="{{ route('admin-page-add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class='form__gawian__admin'>
                    <div class='gawian__kategori'>
                        <label
                                class="block text-sm font-medium text-gray-700 undefined"
                        >FOTO PERUSAHAAN</label>
                        <div class="flex flex-col items-start">
                            <input 
                                type="file" 
                                name="fotoPerusahaan"
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                            />
                        </div>
                        <label
                                class="block text-sm font-medium text-gray-700 undefined"
                        >NAMA PERUSAHAAN</label>
                        <div class="flex flex-col items-start">
                            <input 
                                type="text" 
                                name="namaPerusahaan"
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                            />
                        </div>
                        <label
                                class="block text-sm font-medium text-gray-700 undefined"
                        >NAMA PEKERJAAN</label>
                        <div class="flex flex-col items-start">
                            <input 
                                type="text" 
                                name="namaPekerjaan"
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  
                            />
                        </div>
                        <label
                                class="block text-sm font-medium text-gray-700 undefined"
                        >JENIS DISABILITAS</label>
                        <div class="flex flex-col items-start">
                            <input 
                                type="text" 
                                name="jenisDisabilitas"
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                            />
                        </div>
                        <label
                                class="block text-sm font-medium text-gray-700 undefined"
                        >LOKASI PERUSAHAAN</label>
                        <div class="flex flex-col items-start">
                            <select
                            name="lokasiPerusahaan"
                            class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            >
                                <option value="#">Pilih Lokasi Perusahaan</option>
                                <option value="Tanah Laut">Tanah Laut</option>
                                <option value="Kotabaru">Kotabaru</option>
                                <option value="Banjar">Banjar</option>
                                <option value="Barito Kuala">Barito Kuala</option>
                                <option value="Tapin">Tapin</option>
                                <option value="Hulu Sungai Selatan">Hulu Sungai Selatan</option>
                                <option value="Hulu Sungai Tengah">Hulu Sungai Tengah</option>
                                <option value="Hulu Sungai Utara">Hulu Sungai Utara</option>
                                <option value="Tanah Laut">Tanah Laut</option>
                                <option value="Tabalong">Tabalong</option>
                                <option value="Tanah Bumbu">Tanah Bumbu</option>
                                <option value="Balangan">Balangan</option>
                                <option value="Banjarmasin">Banjarmasin</option>
                                <option value="Banjarbaru">Banjarbaru</option>
                            </select>
                        </div>
                        <label
                                class="block text-sm font-medium text-gray-700 undefined"
                        >DEADLINE DATE</label>
                        <div class="flex flex-col items-start">
                            <input 
                                type="text" 
                                name="deadlineDate"
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                            />
                        </div>
                        <label
                                class="block text-sm font-medium text-gray-700 undefined"
                        >DETAIL LOWONGAN</label>
                        <div class="flex flex-col items-start">
                            <input 
                                type="text"
                                name="detailLowongan[]"
                                placeholder="1."
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  
                            />
                            <input 
                                type="text"
                                name="detailLowongan[]"
                                placeholder="2."
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  
                            />
                        </div>
                    </div>
                    <div class='gawian__kategori'>
                        <label
                                class="block text-sm font-medium text-gray-700 undefined"
                        >KRETERIA UMUM</label>
                        <div class="flex flex-col items-start">
                            <input 
                                type="text"
                                name="kreteriaUmum[]"
                                placeholder="1."
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"   
                            />
                            <input 
                                type="text"
                                name="kreteriaUmum[]"
                                placeholder="2."
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"   
                            />
                        </div>
                        <label
                                class="block text-sm font-medium text-gray-700 undefined"
                        >KRETERIA KHUSUS</label>
                        <div class="flex flex-col items-start">
                            <input 
                                type="text"
                                name="kreteriaKhusus[]"
                                placeholder="1."
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"   
                            />
                            <input 
                                type="text"
                                name="kreteriaKhusus[]"
                                placeholder="2."
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"   
                            />
                        </div>
                        <label
                                class="block text-sm font-medium text-gray-700 undefined"
                        >CATATAN LAIN</label>
                        <div class="flex flex-col items-start">
                            <input 
                                type="text"
                                name="catatanLain[]"
                                placeholder="1."
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"   
                            />
                            <input 
                                type="text"
                                name="catatanLain[]"
                                placeholder="2."
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"   
                            />
                        </div>
                        <label
                                class="block text-sm font-medium text-gray-700 undefined"
                        >TENTANG PERUSAHAAN</label>
                        <div class="flex flex-col items-start">
                            <input 
                                type="text" 
                                name="tentangPerusahaan"
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  
                            />
                        </div>
                        <label
                                class="block text-sm font-medium text-gray-700 undefined"
                        >KATEGORI PEKERJAAN</label>
                        <div class="flex flex-col items-start">
                            <select
                            name="kategoriPekerjaan"
                            class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            >
                                <option value="#">Pilih Kategori Pekerjaan</option>
                                <option value="Administrasi">Administrasi</option>
                                <option value="Desain dan Aksitektur">Desain dan Aksitektur</option>
                                <option value="Editing, Media dan Informasi">Editing, Media dan Informasi</option>
                                <option value="Elektronik">Elektronik</option>
                                <option value="Hotel dan Katering">Hotel dan Katering</option>
                                <option value="House Keeping">House Keeping</option>
                                <option value="IT dan Telekomunikasi">IT dan Telekomunikasi</option>
                                <option value="Keamanan dan Perlindungan Sipil">Keamanan dan Perlindungan Sipil</option>
                                <option value="Kesehatan dan Kecantikan">Kesehatan dan Kecantikan</option>
                                <option value="Keuangan dan Akutansi">Keuangan dan Akutansi</option>
                                <option value="Layanan Sipil">Layanan Sipil</option>
                                <option value="Legal">Legal</option>
                                <option value="Manajemen, Manajemen Eksekutif dan Strategis">Manajemen, Manajemen Eksekutif dan Strategis</option>
                                <option value="Palatihan / Instruksi">Palatihan / Instruksi</option>
                                <option value="Pelayanan Pelanggan">Pelayanan Pelanggan</option>
                                <option value="Pemasaran dan Perikanan">Pemasaran dan Perikanan</option>
                                <option value="Pemeliharaan">Pemeliharaan</option>
                                <option value="Penelitian, Pengembangan dan Ilmu Pengetahuan">Penelitian, Pengembangan dan Ilmu Pengetahuan</option>
                                <option value="Penjualan dan Perdagangan">Penjualan dan Perdagangan</option>
                                <option value="Perbankan, Asuransi dan Keuangan">Perbankan, Asuransi dan Keuangan</option>
                                <option value="Pertanian, Kehutanan, Laut dan Lingkungan">Pertanian, Kehutanan, Laut dan Lingkungan</option>
                                <option value="Produksi, Konstruksi dan Perdagangan">Produksi, Konstruksi dan Perdagangan</option>
                                <option value="Quality Control">Quality Control</option>
                                <option value="Seni, Budaya dan Hiburan">Seni, Budaya dan Hiburan</option>
                                <option value="Sosial">Sosial</option>
                                <option value="Sumber Daya Manusia">Pemeliharaan</option>
                                <option value="Teknik">Teknik</option>
                                <option value="Transportasi dan Logistik">Transportasi dan Logistik</option>
                            </select>
                        </div>
                        <label
                                class="block text-sm font-medium text-gray-700 undefined"
                        >SPESIFIKASI PEKERJAAN</label>
                        <div class="flex flex-col items-start">
                            <input 
                                type="text" 
                                name="spesifikasiPekerjaan"
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"                                
                            />
                        </div>
                    </div>
                </div>
                <button type="submit">TAMBAHKAN</button>
            </form>
        </div>
    </div>
    <!-- list data -->
    <h4 class="pt-5 breadcrumb-wrapper mb-4">List Data Lowongan</h4>

    <!-- Invoice List Table -->
    <div class="card p-2">
        <div class="card-datatable table-responsive">
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Perusahaan</th>
                    <th>Nama Pekerjaan</th>
                    <th>Jenis Disabilitas</th>
                    <th>Lokasi Perusahaan</th>
                    <th>Deadline Date</th>
                    <th>Detail Lowongan</th>
                    <th>Kreteria Umum</th>
                    <th>Kreteria Khusus</th>
                    <th>Catatan Lain</th>
                    <th>Tentang Perusahaan</th>
                    <th>Kategori Pekerjaan</th>
                    <th>Spesifikasi Pekerjaan</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lowongans as $lowongan)

                <!-- <img src="{{ asset('storage/' . $lowongan->fotoPerusahaan) }}" alt=""> -->
                <!-- mengubah json ke array -->
                @php
                    $details = $lowongan->detailLowongan;
                    $detailLowongans = json_decode($details, true);
                    
                    $umum = $lowongan->kreteriaUmum;
                    $kreteriaUmums = json_decode($umum, true);

                    $khusus = $lowongan->kreteriaKhusus;
                    $kreteriaKhususs = json_decode($khusus, true);

                    $catatan = $lowongan->catatanLain;
                    $catatanLains = json_decode($catatan, true);
                @endphp

                <!-- data table -->
                <tr class="">
                    <td>{{$lowongan->namaPerusahaan}}</td>
                    <td>{{$lowongan->namaPekerjaan}}</td>
                    <td>{{$lowongan->jenisDisabilitas}}</td>
                    <td>{{$lowongan->lokasiPerusahaan}}</td>
                    <td>{{$lowongan->deadlineDate}}</td>
                    <td>
                        @foreach ($detailLowongans as $detailLowongan)
                            - {{$detailLowongan}}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kreteriaUmums as $kreteriaUmum)
                            - {{$kreteriaUmum}}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kreteriaKhususs as $kreteriaKhusus)
                            - {{$kreteriaKhusus}}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($catatanLains as $catatanLain)
                            - {{$catatanLain}}
                        @endforeach
                    </td>
                    <td>{{$lowongan->tentangPerusahaan}}</td>
                    <td>{{$lowongan->kategoriPekerjaan}}</td>
                    <td>{{$lowongan->spesifikasiPekerjaan}}</td>
                    <td>
                        <div class="d-inline-block">
                            <!-- <button class="btn btn-sm btn-icon edit-record"><i class="bx bx-edit">edit</i></button> -->
                            <form action="{{ route('delete-lowongan', $lowongan->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-icon delete-record" type="submit"><i class="bi bi-trash3 text-danger"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
            </table>
            
        </div>
    </div>

</div>
@endsection