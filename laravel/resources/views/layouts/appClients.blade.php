<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NS Laundry') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="c86cb3e3-7ffd-4f63-ad66-56400ca9432f";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600&display=swap');
        body{
            font-family: 'Space Grotesk', sans-serif;
        }
    </style>
    <div id="app">
        <div class="py-2 w-100" style="background-color: #00DBDE; background-image: linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%);"></div>
        <div class="container d-flex align-items-center justify-content-between px-5 py-4">
            <a class="navbar-brand fs-5" href="{{ url('/') }}">
                NS Laundry
            </a>
            <a class="navbar-brand fs-6 text-secondary" href="{{ url('/') }}">
                Cek Pesanan
            </a>
        </div>

        <div class="my-4 mt-5 container px-5">
            <section class="d-flex flex-column text-center mx-auto">
                <h5 class="fs-1 lh-base">Cek status laundry kamu <br> hanya dengan kode</h5>
                <p class="fs-6 lh-base">Dengan memasukkan kode anda <br> dapat menjangkau status laundry anda</p>
                <div class="border w-50 d-flex justify-content-between mx-auto mt-2">
                    <input type="text" placeholder="Masukkan kode disini" class="py-2 ps-4 w-100" style="border:none">
                    <button class="btn text-white bg-black">Cari</button>
                </div>
            </section>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
