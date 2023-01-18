@extends('layouts/appLayout')

@section('content')

<div>
    <div class="flex flex-col items-center pt-6 sm:justify-center sm:pt-0">
      <div class="create pb-8 my-32 w-full px-6 py-4 bg-gray-50 shadow-md sm:rounded-lg">
          <h2>Pencarian Lanjutan</h2>
          <form>
              <div class='form__gawian'>
                  <div class='gawian__kategori'>
                      <label
                          class="block text-sm font-medium text-gray-700 undefined"
                      >KATEGORI</label>
                      <div class="flex flex-col items-start">
                          <select class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                              <option value="#">Semua Kategori</option>
                          </select>
                      </div>
                      <label
                          class="block text-sm font-medium text-gray-700 undefined"
                      >SPESIFIKASI</label>
                      <div class="flex flex-col items-start">
                          <select class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                              <option value="#">Semua Spesifikasi Pekerjaan</option>
                          </select>
                      </div>
                  </div>
                  <div class='gawian__kategori'>
                      <label
                          class="block text-sm font-medium text-gray-700 undefined"
                      >LOKASI</label>
                      <div class="flex flex-col items-start">
                          <select class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                              <option value="#">Lokasi</option>
                          </select>
                      </div>
                      <label
                          class="block text-sm font-medium text-gray-700 undefined"
                      >PERUSAHAAN</label>
                      <div class="flex flex-col items-start">
                          <input type="text" class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                      </div>
                  </div>
              </div>
              <button>Cari</button>
          </form>
      </div>
    </div>
</div>
<!-- lowongan -->
<div class='app__work-portfolio pt-16'>
    <h2 style="color: #cc4a1f; text-align: center; font-size: 28px;">Lowongan Terbaru</h2> 
    <div class='app__profile-item product-card'>
        <a href='/detail'>
            <div class="slide-container">
                <div class="wrapper">
                    <div class="clash-card barbarian">
                        <div class="clash-card__image clash-card__image--barbarian overflow-hidden	bg-cover">
                            <img src="{{ asset('images/tip1.jpeg') }}" alt="barbarian" />
                        </div>
                    <div class="clash-card__unit-description" style="color: black; font-size: 20px; text-align: left; font-weight: normal;">
                        HIT
                    </div>
                    <div class="clash-card__unit-description" style="color: #cc4a1f; font-size: 28px; text-align: left; font-weight: bold;">
                        Programmer
                    </div>
                    <hr />
                    <div class="clash-card__unit-description" style="color: black; text-align: left; display: flex;">
                        <MdApartment /> 
                        IT dan Telekomunikasi
                    </div>
                    <div class="clash-card__unit-description" style="color: #cc4a1f; text-align: left; display: flex;">
                        <GiHumanTarget /> 
                        non
                    </div>
                    <div class="clash-card__unit-description" style="color: black; text-align: left; display: flex;">
                        <IoLocationSharp /> 
                        BanjarBaru
                    </div>

                    <div class="clash-card__unit-stats clash-card__unit-stats--barbarian">
                        <div>21 Januari 2023</div>
                    </div>
                    </div>
                </div> 
            </div>    
        </a>
    </div>
</div>

@endsection
