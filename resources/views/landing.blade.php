<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laundry XYZ') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Javascript -->
    <script defer src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script defer src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="">{{ config('app.name') }}</a>
            <ul class="d-flex list-unstyled">
    <li class="nav-item mx-2">
        <img src="{{asset('img/logo/1.jpeg')}}" alt="" class="logo-img">
    </li>
    <li class="nav-item mx-2">
        <img src="{{asset('img/logo/2.jpeg')}}" alt="" class="logo-img">
    </li>
    <li class="nav-item mx-2">
        <img src="{{asset('img/logo/3.jpeg')}}" alt="" class="logo-img">
    </li>
    <li class="nav-item mx-2">
        <img src="{{asset('img/logo/4.jpeg')}}" alt="" class="logo-img">
    </li>
</ul>

<style>
    .logo-img {
        width: 50px; 
        height: auto; 
    }
    .nav-item {
        margin-right: 10px; 
    }
</style>


<style>
    .logo-img {
        width: 50px; 
        height: auto; 
    }
</style>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-sm-3 mb-2 mb-sm-0">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @lang('landing.langtext')
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('id')}}">Indonesia</a>
                                <a class="dropdown-item" href="{{url('en')}}">English</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{url('login')}}">@lang('landing.loginOrRegister')</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-blue py-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-3 text-white mt-5 mb-2">@lang('landing.welcome')</h1>
                    <p class="lead mb-5 text-white-50">@lang('landing.tagline')</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{asset('img/landing/fotoo.jpg')}}" alt="" srcset="">
                </div>
            </div>
        </div>
    </header>

    <section class="p-5 text-center">
        <h3>@lang('landing.why')</h3>
    </section>

    <!-- Page Content -->
    <section class="kelebihan bg-blue text-white">
        <div class="container p-5">
            <div class="row">
            <style>
        .container {
            display: flex; 
            align-items: center; 
            margin: 20px; 
        }

        .text-content {
            flex: 1; 
        }

        .cloud-img {
            width: 250px; 
            height: auto; 
            border-radius: 50% 50% 50% 50% / 35% 35% 65% 65%; 
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); 
            margin-left: 20px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-content">
            <h4>Berbagai Pilihan Warna Yang Menarik dan Cantik</h4>
            <p>Dengan berbagai pilihan warna yang menarik dan cantik ini, Anda dapat dengan mudah menemukan warna yang sesuai dengan gaya dan preferensi Anda. 
                Apapun kebutuhan Anda, kami siap membantu Anda untuk tampil lebih menarik dengan pilihan warna yang tepat.</p>
        </div>
        <img class="cloud-img" src="{{asset('img/landing/download.jpg')}}" alt="Cloud Image">
    </div>
</body>
        </div>
    </section>

    <section class="kelebihan bg-blue text-white">
        <div class="container p-5">
            <div class="row">
            <style>
        .container {
            display: flex; 
            align-items: center; 
            margin-bottom: 20px; 
        }

        .text-content {
            flex: 1; 
            padding: 0 20px; 
        }

        .cloud-img {
            width: 250px; 
            height: auto; 
            border-radius: 50% 50% 50% 50% / 35% 35% 65% 65%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); 
            margin-right: 20px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-lg-6">
            <img class="cloud-img" src="{{asset('img/landing/Packaging .jpg')}}" alt="Packaging Image">
        </div>
        <div class="col-lg-6 text-content">
            <h4>Packaging yang Menarik dan Elegan </h4>
            <p>Kami menyediakan packaging yang dirancang dengan sangat baik, memastikan jilbab Anda tidak hanya terlindungi dengan sempurna, tetapi juga tampil menarik dan elegan. Setiap detail pada kemasan kami diperhatikan dengan seksama, mulai dari desain yang estetis hingga bahan berkualitas tinggi yang kami gunakan. 
                </p>
        </div>
    </div>
</body>
        </div>
    </section>

    <section class="kelebihan bg-blue text-white">
    <div class="container p-5">
            <div class="row">
            <style>
        .container {
            display: flex; 
            align-items: center; 
            margin: 20px; 
        }

        .text-content {
            flex: 1; 
        }

        .cloud-img {
            width: 250px; 
            height: auto; 
            border-radius: 50% 50% 50% 50% / 35% 35% 65% 65%; 
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); 
            margin-left: 20px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-content">
            <h4>Jilbab dengan Kualitas Bermutu Tinggi</h4>
            <p>Jilbab kami dibuat dengan kualitas bermutu tinggi, menggunakan bahan pilihan yang nyaman dan tahan lama. Setiap jilbab dirancang dengan teliti untuk memastikan ketepatan jahitan dan kesempurnaan detail, memberikan kenyamanan maksimal dan penampilan yang elegan. Warna-warna jilbab kami tidak mudah pudar, menjaga kecantikannya meski sering dicuci.</p>
        </div>
        <img class="cloud-img" src="{{asset('img/landing/Kualitas.jpg')}}" alt="Cloud Image">
    </div>
</body>
        </div>
    </section>

    <section class="text-center p-5">
        <h3>Jenis Jenis Hijab Yang Tersedia Di Toko Kami</h3>
    </section>

    <section class="bg-blue p-5 text-center">
        <div class="container">
            <div class="row flex-row flex-nowrap kategori">
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('img/landing/segiempat.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Jilbab Segi Empat</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('img/landing/Pasminaa.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Jilbab Pasmina</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('img/landing/bermotif.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Jilbab Bermotif</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('img/landing/Kerutkatun.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Jilbab Kerut Katun</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center p-5">
        <h3>Hubungi Toko Kami</h3>
    </section>

    <section class="text-white bg-blue">
        <div class="container p-5 text-center">
            <div class="row">
                <div class="col-md-6 mb-4 mb-sm-0">
                    <h5>Alamat</h5>
                    <p>Jalan Wanggu Permai, Lepo Lepo, Kendari</p>
                    <br>
                    <h5>Kontak</h5>
                    <p>laundrysyariah@gmail.com</p>
                    <p>(0361)123456</p>
                    <p>081299001212</p>
                </div>
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0551329606237!2d115.18456241433559!3d-8.59069798958535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2394d265755b3%3A0xb025730a3074e799!2sJl.%20Raya%20Lukluk%20-%20Sempidi%2C%20Lukluk%2C%20Kec.%20Mengwi%2C%20Kabupaten%20Badung%2C%20Bali!5e0!3m2!1sid!2sid!4v1589257661013!5m2!1sid!2sid"
                        width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-4 bg-dark">
        <div class="container">
            <p class="m-0 text-center  text-white">Copyright &copy; {{config('app.name')}} 2020</p>
        </div>
        <!-- /.container -->
    </footer>

</body>

</html>