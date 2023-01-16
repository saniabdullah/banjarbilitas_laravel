@extends('layouts/appLayout')

@section('content')

    <div>
        <article class='detail'>
            <div class="detail-banner">
                    <div class='detail-text-center'> 
                        <img src="{{ asset('images/tip1.jpeg') }}" alt="barbarian" class='img-center'/>
                        <h1>PROGRAMMER</h1>
                        <h3>IT dan Telekomunikasi</h3>
                        <h2>PT. HIT</h2>
                    </div>
            </div>

            <div class='flex sm:flex-row flex-col justify-evenly pt-10 detail-content'>
                <div class="basis-1/2 detail-content-left min-h-max">
                    <div>
                        <h1 class="text-2xl pt-4 pl-4 detail-title underline">DETAIL LOWONGAN</h1>
                        <div>
                            <ul class='pl-8 py-1'>
                                <li>- bikin website</li>
                                <li>- bikin aplikasi mobile</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <h1 class="text-2xl pt-4 pl-4 detail-title underline">KRETERIA UMUM</h1>
                        <div>
                            <ul class='pl-8 py-1'>
                                <li>- laki-laki</li>
                                <li>- Lulusan dibidang IT</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <h1 class="text-2xl pt-4 pl-4 detail-title underline">KRETERIA UMUM</h1>
                        <div>
                            <ul class='pl-8 py-1'>
                                <li>- html</li>
                                <li>- php</li>
                                <li>- javascript</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <h1 class="text-2xl pt-4 pl-4 detail-title underline">KRETERIA UMUM</h1>
                        <div>
                            <ul class='pl-8 py-1'>
                                <li>- berperilaku baik</li>
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
                        <p class='pl-4 py-4'>Perusahaan services</p>

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
