@extends('layouts/appLayout')

@section('content')

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

    <div>
        <article class='detail'>
            <div class="detail-banner">
                    <div class='detail-text-center'> 
                        <img src="{{ asset('storage/' . $lowongan->fotoPerusahaan) }}" alt="barbarian" class='img-center'/>
                        <h1>{{$lowongan->namaPekerjaan}}</h1>
                        <h3>{{$lowongan->kategoriPekerjaan}}</h3>
                        <h2>{{$lowongan->namaPerusahaan}}</h2>
                    </div>
            </div>

            <div class='flex sm:flex-row flex-col justify-evenly pt-10 detail-content'>
                <div class="basis-1/2 detail-content-left min-h-max">
                    <div>
                        <h1 class="text-2xl pt-4 pl-4 detail-title underline">DETAIL LOWONGAN</h1>
                        <div>
                            <ul class='pl-8 py-1'>
                            @foreach ($detailLowongans as $detailLowongan)
                                <li>- {{$detailLowongan}}</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>

                    <div>
                        <h1 class="text-2xl pt-4 pl-4 detail-title underline">KRETERIA UMUM</h1>
                        <div>
                            <ul class='pl-8 py-1'>
                            @foreach ($kreteriaUmums as $kreteriaUmum)
                                <li>- {{$kreteriaUmum}}</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>

                    <div>
                        <h1 class="text-2xl pt-4 pl-4 detail-title underline">KRETERIA KHUSUS</h1>
                        <div>
                            <ul class='pl-8 py-1'>
                            @foreach ($kreteriaKhususs as $kreteriaKhusus)
                                <li>- {{$kreteriaKhusus}}</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>

                    <div>
                        <h1 class="text-2xl pt-4 pl-4 detail-title underline">CATATAN LAIN</h1>
                        <div>
                            <ul class='pl-8 py-1'>
                            @foreach ($catatanLains as $catatanLain)
                                <li>- {{$catatanLain}}</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class='py-8 m-auto px-4 text-center'>
                        <button type="button">Kirim Lamaran</button>
                    </div>
                </div>          
                <div class="basis-1/4">
                    <div class='detail-banner-right'>
                        <h1 class='text-2xl pt-4 pl-4 detail-title underline uppercase'>Tentang Perusahaan</h1>
                        <p class='pl-4 py-4'>{{$lowongan->tentangPerusahaan}}</p>

                        <div class='py-8 m-auto px-4 text-center'>
                            <button type="button">Detail Perusahaan</button>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <div>

        </div>
    </div>

@endsection
