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

    <title>Galeri</title>
</head>

<body>
    <!-- NAVBAR -->
    @extends('layout.navbar');
    <!-- END NAVBAR -->
    <!-- breadcumbs -->

    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
                <h2>Galeri</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>Galeri</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- teams -->
    <div class="teams bg-light py-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">Galeri Sekolah</h2>
                <p class="text-center mt-4">
                    Selamat datang di galeri sekolah kami! Di sini, Anda dapat menemukan momen-momen berharga yang
                    diabadikan selama tahun ajaran, mulai dari kegiatan belajar mengajar hingga acara spesial. Setiap
                    foto merefleksikan semangat dan kebersamaan di lingkungan sekolah kami. Mari kita lihat kenangan tak
                    terlupakan ini bersama!
                </p>
                <div class="row mt-4">
                    <div class="col-md-12 d-flex justify-content-center">
                        <ul class="list-unstyled d-flex portofolio-filters">
                            <li data-filter="*" class="py-2 px-4 filter-active text-white">ALL</li>
                            @foreach ($portofolios->pluck('kategori') as $kategori)
                                <li data-filter=".filter-{{ Str::slug($kategori->id) }}" class="py-2 px-4">
                                    {{ $kategori->nama }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="masonry portofolio-container" data-aos="zoom-in-up">
                        <div class="masonry-sizer"></div>
                        @foreach ($portofolios as $portofolio)
                            <div
                                class="masonry-item m-2 portofolio-item filter-{{ Str::slug($portofolio->kategori->id) }}">
                                <img src="{{ Storage::url('images/' . $portofolio->image) }}" alt=""
                                    class="img-fluid" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end teams -->

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
