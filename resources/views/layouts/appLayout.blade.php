<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <!-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> -->

        <!-- bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <a href="/">
            <!-- <img src={images.banjarbilitas} alt="logo" /> -->
            </a>
        </div>
        <ul class="app__navbar-links">
            <li><a href="/cari-gawian">Cari Lowongan</a></li>
            <li><a href="#tips">Tips Karir</a></li>
            <li class='rounded-full button__masuk' data-bs-toggle="modal" data-bs-target="#addModal">Masuk</li>
            <li class='rounded-full button__daftar'><a href="/signup">Daftar</a></li>
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
    <div class="modal fade" id="addModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-lg">
        <form class="modal-content" action=""  method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
            <h5 class="modal-title" id="backDropModalTitle">Add Requsition</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="row g-2">
                <div class="col mb-0">
                <label for="plant" class="form-label">Plant</label>
                <input type="text" id="plant" class="form-control" placeholder="plant" name="plant">
                </div>
                <div class="col mb-0">
                <label for="pr_number" class="form-label">pr number</label>
                <input type="text" id="pr_number" class="form-control" placeholder="12345" name="pr_number">
                </div>
            </div>
            <div class="row g-2">
                <div class="col mb-0">
                <label for="pr_sap" class="form-label">pr sap</label>
                <input type="text" id="pr_sap" class="form-control" placeholder="12345" name="pr_sap">
                </div>
                <div class="col mb-0">
                <label for="request_date" class="form-label">request date</label>
                <input type="date" id="request_date" class="form-control" placeholder="DD / MM / YY" name="request_date">
                </div>
            </div>
            <div class="row g-2">
                <div class="col mb-0">
                <label for="pr_type" class="form-label">pr type</label>
                <input type="text" id="pr_type" class="form-control" placeholder="12345" name="pr_type">
                </div>
                <div class="col mb-0">
                <label for="header_text" class="form-label">header text</label>
                <input type="text" id="header_text" class="form-control" placeholder="request" name="header_text">
                </div>
            </div>
            <div class="row g-2">
                <div class="col mb-0">
                <label for="item" class="form-label">item</label>
                <input type="text" id="item" class="form-control" placeholder="hp" name="item">
                </div>
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
    </div>
    </body>
</html>
