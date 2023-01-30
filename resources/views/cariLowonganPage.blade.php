@extends('layouts/appLayout')

@section('content')

<div>
    <div class="flex flex-col items-center pt-6 sm:justify-center sm:pt-0">
      <div class="create pb-8 my-32 w-full px-6 py-4 bg-gray-50 shadow-md sm:rounded-lg">
          <h2>Pencarian Lanjutan</h2>
          <form action="/cari-lowongan">
              <div class='form__gawian'>
                  <div class='gawian__kategori'>
                      <label
                          class="block text-sm font-medium text-gray-700 undefined"
                      >KATEGORI</label>
                      <div class="flex flex-col items-start">
                          <select class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="kategoriPekerjaan">
                                <option value="">Pilih Kategori Pekerjaan</option>
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
                                <option value="Transportasi dan Logistik">Transportasi dan Logistik</option>                          </select>
                      </div>
                      <label
                          class="block text-sm font-medium text-gray-700 undefined"
                      >Nama Pekerjaan</label>
                      <div class="flex flex-col items-start">
                            <input 
                                type="text" 
                                name="namaPekerjaan"
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  
                            />
                      </div>
                  </div>
                  <div class='gawian__kategori'>
                      <label
                          class="block text-sm font-medium text-gray-700 undefined"
                      >LOKASI</label>
                      <div class="flex flex-col items-start">
                          <select name="lokasiPerusahaan" class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="">Pilih Lokasi Perusahaan</option>
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
                      >PERUSAHAAN</label>
                      <div class="flex flex-col items-start">
                          <input name="namaPerusahaan" type="text" class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                      </div>
                  </div>
              </div>
              <button type="submit">Cari</button>
          </form>
      </div>
    </div>
</div>
<!-- lowongan -->
<div class='app__work-portfolio pt-16'>
    <h2 style="color: #cc4a1f; text-align: center; font-size: 28px;">Lowongan</h2> 
    @foreach ($lowongans as $lowongan)
    <div class='app__profile-item product-card'>
        <a href="{{ route('detail-page', $lowongan->id) }}">
            <div class="slide-container">
                <div class="wrapper">
                    <div class="clash-card barbarian">
                        <div class="clash-card__image clash-card__image--barbarian overflow-hidden	bg-cover">
                            <img src="{{ asset('storage/' . $lowongan->fotoPerusahaan) }}" alt="barbarian" />
                        </div>
                    <div class="clash-card__unit-description" style="color: black; font-size: 20px; text-align: left; font-weight: normal;">
                        <i class="bi bi-buildings pr-5" style="width: 35px; height:30px;"></i>
                        {{ $lowongan->namaPerusahaan }}
                    </div>
                    <div class="clash-card__unit-description" style="color: #cc4a1f; font-size: 28px; text-align: left; font-weight: bold;">
                        {{ $lowongan->namaPekerjaan }}
                    </div>
                    <hr />
                    <div class="clash-card__unit-description" style="color: black; text-align: left; display: flex;">
                        <i class="bi bi-building" style="width: 35px; height:30px;"></i>
                        {{ $lowongan->kategoriPekerjaan }}
                    </div>
                    <div class="clash-card__unit-description" style="color: #cc4a1f; text-align: left; display: flex;">
                        <i class="bi bi-person" style="width: 35px; height:30px;"></i>
                        {{ $lowongan->jenisDisabilitas }}
                    </div>
                    <div class="clash-card__unit-description" style="color: black; text-align: left; display: flex;">
                        <i class="bi bi-geo-alt" style="width: 35px; height:30px;"></i>
                        {{ $lowongan->lokasiPerusahaan }}
                    </div>

                    <div class="clash-card__unit-stats clash-card__unit-stats--barbarian">
                        <div>{{ $lowongan->deadlineDate }}</div>
                    </div>
                    </div>
                </div> 
            </div>    
        </a>
    </div>
    @endforeach

    @if(count($lowongans) <= 0)
        <div class='text-center text-3xl py-5'>Maap tidak ada lowongan</div>
    @endif
</div>

@endsection
