@extends('layouts/appLayout')

@section('content')


    <!-- Pengecekkan Error -->

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    @error('nama_depan')
        <div class="alert alert-danger text-center">
            <span class="text-2xl">GAGAL!!</span> <br> {{ $message }}
        </div>
    @enderror

    @error('nama_belakang')
        <div class="alert alert-danger text-center">
            <span class="text-2xl">GAGAL!!</span> <br> {{ $message }}
        </div>
    @enderror

    @error('email')
        <div class="alert alert-danger text-center">
            <span class="text-2xl">GAGAL!!</span> <br> {{ $message }}
        </div>
    @enderror

    @error('password')
        <div class="alert alert-danger text-center">
            <span class="text-2xl">GAGAL!!</span> <br> {{ $message }}
        </div>
    @enderror

    @error('jenis_kelamin')
        <div class="alert alert-danger text-center">
            <span class="text-2xl">GAGAL!!</span> <br> {{ $message }}
        </div>
    @enderror

    @error('tanggal_lahir')
        <div class="alert alert-danger text-center">
            <span class="text-2xl">GAGAL!!</span> <br> {{ $message }}
        </div>
    @enderror


    <!-- banner -->
    <div class="banner-container bg-slate-100">
        <div class='banner-text-center'>
            <h1>Cari Gawian Sesuai Keunikan Pian</h1>
            <h3>Apapun tentang pian, selalu ada peluang di sini.</h3>
            <div class='button-search'>
            <a href='/cari-lowongan'>
                <button type="button" class="button-red">Cari Gawian</button>
            </a>
            </div>
        </div>
    </div>
    
    <!-- lowongan -->
    <div class='app__work-portfolio pt-16'>
        <h2 style="color: #cc4a1f; text-align: center; font-size: 28px;">Lowongan Terbaru</h2> 
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
    </div>
    <div class="mx-auto d-flex pagination pb-5 pt-3">
        {{ $lowongans->links() }}
    </div>
    <!-- profil -->
    <article class='profile'>
        <picture class='profile__img'>
            <img src="{{ asset('images/banjarbilitas1.png') }}"/>
        </picture>

        <div class="profile__content">
        <div class='profile__header'>
            <h1>Buat <span class="text-white">PROFIL BANJARBILITAS</span> dan raih peluangmu!</h1>      
        </div>  
        <div>
            <div class='profile__p pb-8'><i class="bi bi-envelope-at pr-4" style="width: 35px; height:35px;"></i>Selalu di depan dengan peluang kerja baru yang dikirim lewat email setiap hari</div>
            <div class='profile__p'><i class="bi bi-send pr-4" style="width: 35px; height:35px;"></i>Melamar cepat dengan aplikasi lamaran yang sudah di lengkapi lebih dulu</div>
            <div class='profile__p'><i class="bi bi-telephone pr-4" style="width: 35px; height:35px;"></i>Mudah di hubungi oleh penyedia kerja dan peluang yang sesuai kualifikasi kamu</div>
            <div class='button-search lg:pt-12'>
            <button type="button" >Ayo!</button>
            </div>
        </div>        
        </div>
    </article>
    <!-- tips -->

    @php
    $tips = [
        [ "id" => "1", "title" => "BEKAL YANG HARUS DIBAWA SEBELUM KE JOB FAIR", "img" => "{{ asset('images/tip1.jpeg') }}" ],
        [ "id" => "2", "title" => "BEKAL YANG HARUS DIBAWA SEBELUM KE JOB FAIR", "img" => "{{ asset('images/tip1.jpeg') }}" ],
        [ "id" => "3", "title" => "BEKAL YANG HARUS DIBAWA SEBELUM KE JOB FAIR", "img" => "{{ asset('images/tip1.jpeg') }}" ],

    ];
    @endphp

    <div class='maylike-products-wrapper pt-16' id='tips'>
        <h2>Tips Karir</h2>
        <div class='marquee'>
            <div class='maylike-products-container track'>
            @foreach ($tips as $tip)
                <div class='app__profile-item product-card'>
                    <div class="slide-container">
                        <div class="wrapper">
                            <div class="clash-card__tip barbarian">
                                <div class="clash-card__image clash-card__image--barbarian">
                                    <img src="{{ asset('images/tip1.jpeg') }}" alt="barbarian"/>
                                </div>
                                <div class="clash-card__unit-description">
                                    {{$tip['title']}}
                                </div>
                                <div class="clash-card__unit-stats clash-card__unit-stats--barbarian">
                                <div>Baca Selengkapnya</div>
                                </div>
                            </div>
                        </div> 
                    </div>    
                </div>
            @endforeach
            </div>
        </div>
    </div>


@endsection