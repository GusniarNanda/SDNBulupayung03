<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="/assets/vendor/fontawesome/css/all.min.css" />
    <!-- AOS -->
    <link rel="stylesheet" href="assets/vendor/aos/aos-master/dist/aos.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="/assets/css/style.css" />

    <title>Visi Misi</title>
</head>

<body>
    <!-- NAVBAR -->
    @extends('layout.navbar');

    <!-- END NAVBAR -->
    <!-- breadcumbs -->

    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
                <h2>About</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>Visi Misi</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- about -->
    <div class="row mt-5">
        {{-- VISI --}}
        <div class="col-md-6" data-aos="fade-right">
            <h3 class="fw-bold about-us-title">
                SDN 3 BULUPAYUNG
            </h3>
            <p class="fw-bolder mt-4 about-us-subtitle">
                Terwujudnya siswa berbudi pekerti luhur, cerdas, berbudaya, terampil berkarya, dan berkarakter
                Pancasila
            </p>
        </div>
        {{-- MISI --}}
        <div class="col-md-6" data-aos="fade-left">
            <h3 class="fw-bold about-us-title">VISI</h3>
            <div>{!! $visimisi->visi !!}</div>
            <h3 class="fw-bold about-us-title">MISI</h3>
            <div>{!! $visimisi->misi !!}</div>
        </div>
        
    </div>
    <!-- end about -->





    <!-- FOOTER -->
    @extends('layout.footer');

    <!-- END FOOTER -->

    <!-- to top -->
    <a href="#" class="btn-to-top p-3">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- end to top -->

    <script src="/assets/vendor/jquery/jquery-3.7.1.js"></script>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/fontawesome/fontawesome-free-5.15.4-web/js/all.min.js"></script>
    <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
    <script src="/assets/vendor/aos/aos-master/dist/aos.js"></script>
    <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/js/app.js"></script>
</body>

</html>
