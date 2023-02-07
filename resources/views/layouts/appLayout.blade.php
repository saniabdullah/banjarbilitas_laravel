<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <!-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> -->

        <!-- bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])

    </head>
    <body>

    <!-- navbar -->
    <nav class="app__navbar m-0 bg-slate-100">
        <div class="app__navbar-logo">
            <a href="/home">
            <img src="{{ asset('images/banjarbilitas1.png') }}" alt="logo" /> 
            </a>
        </div>
        <ul class="app__navbar-links">
            <li><a href="/cari-lowongan">Cari Lowongan</a></li>
            <li><a href="#tips">Tips Karir</a></li>
            @auth
                <li><a href="/profile">Welcome, {{ auth()->user()->nama_depan }}</a></li>
            @else
                <li class='rounded-full button__masuk' data-bs-toggle="modal" data-bs-target="#loginModal">Masuk</li>
                <li class='rounded-full button__daftar' data-bs-toggle="modal" data-bs-target="#registerModal">Daftar</li>
            @endauth
        </ul>
    </nav>

    <div class="App">
        <div class="main-container">
        <!-- content -->
        @yield('content')
        </div>
        <!-- footer -->
        <div class='footer-container'>
            <p>2022 Banjarbilitas All rights reserverd</p>
            <p class="icons">
                <!-- <i class="bi bi-facebook"></i> -->
                <i class="bi bi-instagram"></i>
            </p>
        </div>
    </div>

    <!-- modal login -->
    <div class="modal fade " id="loginModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-md modal-dialog-centered">
        <form class="modal-content" action="{{ route('login') }}"  method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
            <h5 class="modal-title text-center text-lg" id="backDropModalTitle">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="banjarbilitas@gmail.com" name="email" required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row g-2 pt-3">
                    <div class="col mb-0">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="*******" name="password" required value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex justify-center modal-footer">
                <button type="button" class="w-48 rounded-md border border-transparent bg-red-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="w-48 rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Login
                </button>
            </div>
        </form>
        </div>
    </div>


    <!-- modal register -->
    <div class="modal fade " id="registerModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
        <form class="modal-content" action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title text-center text-lg" id="backDropModalTitle">Register</h5>
            </div>
            <div class="modal-body">
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="nama_depan" class="form-label">Nama Depan</label>
                        <input type="text" id="nama_depan" class="form-control @error('nama_depan') is-invalid @enderror" placeholder="" name="nama_depan" required value="{{ old('nama_depan') }}">
                        @error('nama_depan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col mb-0">
                        <label for="nama_belakang" class="form-label">Nama Belakang</label>
                        <input type="text" id="nama_belakang" class="form-control @error('nama_belakang') is-invalid @enderror" placeholder="" name="nama_belakang" required value="{{ old('nama_belakang') }}">
                        @error('nama_belakang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row g-2 pt-3">
                    <div class="col mb-0">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="banjarbilitas@gmail.com" name="email" required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col mb-0">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="*******" name="password" required value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row g-2 pt-3">
                    <div class="col mb-0">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" required value="{{ old('jenis_kelamin') }}">
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="col mb-0">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" required value="{{ old('tanggal_lahir') }}">
                        @error('tanggal_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer flex justify-center">
                <button type="button" class="w-48 rounded-md border border-transparent bg-red-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="w-48 rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Daftar
                </button>
            </div>
        </form>


        </div>
    </div>


    </body>
</html>


