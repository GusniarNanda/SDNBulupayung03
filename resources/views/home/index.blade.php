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
    <style>
        .carousel-item img {
            max-height: 400px;
            /* Ubah tinggi maksimum sesuai kebutuhan */
            width: 100%;
            /* Membuat gambar responsif */
            object-fit: contain;
            /* Gambar tidak akan terpotong */
        }
    </style>

    <title>Company</title>
</head>

<body>
    <!-- NAVBAR -->
    @extends('layout.navbar');
    <!-- END NAVBAR -->

    <!-- CAROUSEL -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($sliders as $index => $slider)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img src="{{ Storage::url('images/' . $slider->image) }}" class="d-block w-100"
                        alt="{{ $slider->title }}" style="max-width: 100%; height: auto;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $slider->title }}</h5>
                        <p>{{ $slider->description }}</p> <!-- Menggunakan <p> untuk deskripsi -->
                    </div>
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- END CAROUSEL -->

    <!-- ABOUT US -->
    <div class="about-us mt-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">Sekolah Kami</h2>
            </div>
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
        </div>
    </div>
    <!-- END ABOUT US -->

    <!-- services -->
    <div class="services mt-5 bg-light py-5">
        <div class="container">
            <div class="title-container text-center">
                <h2 class="fw-bold">PRESTASI</h2>
            </div>
            <p class="text-center mt-4">
                lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus,
                aliquam.
            </p>
            <div class="row mt-5">
                @foreach ($services as $service)
                    <div class="col-md-4">
                        <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
                            <img src="{{ Storage::url('images/' . $service->image) }}" class="card-img-top"
                                alt="{{ $service->title }}" style="max-width: 100%; height: auto;">
                            <div class="card-body">
                                <div class="card-icon">
                                    <i class="fa fa-book fa-lg fa-3x"></i>
                                    <div class="card-title fw-bolder mt-4">{{ $service->title }}</div>
                                    <p class="card-description mt-3">{{ $service->description }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end services -->

    <!-- PORTOFOLIO US -->
    <div class="portofolio-us mt-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">Galeri Sekolah</h2>
            </div>
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
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="masonry portofolio-container" data-aos="zoom-in-up">
                        <div class="masonry-sizer"></div>
                        @foreach ($portofolios as $portofolio)
                            <div class="masonry-item m-2 portofolio-item filter-{{ Str::slug($portofolio->kategori->id) }}">
                                <img src="{{ Storage::url('images/' . $portofolio->image) }}" alt=""
                                    class="img-fluid" />

                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END PORTOFOLIO US -->



    <!-- INI CLIENT ASLI -->
    <div class="clients mt-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">CLIENT</h2>
            </div>
            <div class="row mt-5">
                <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                    <img src="/assets/img/b1.svg" class="img-fluid brand-image" alt="" />
                </div>
                <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                    <img src="/assets/img/b2.svg" class="img-fluid brand-image" alt="" />
                </div>
                <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                    <img src="/assets/img/b3.svg" class="img-fluid brand-image" alt="" />
                </div>
                <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                    <img src="/assets/img/b4.svg" class="img-fluid brand-image" alt="" />
                </div>
                <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                    <img src="/assets/img/b5.svg" class="img-fluid brand-image" alt="" />
                </div>
                <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                    <img src="/assets/img/b6.svg" class="img-fluid brand-image" alt="" />
                </div>
                <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                    <img src="/assets/img/b7.svg" class="img-fluid brand-image" alt="" />
                </div>
                <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                    <img src="/assets/img/b8.svg" class="img-fluid brand-image" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- INI END CLIENT -->

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
