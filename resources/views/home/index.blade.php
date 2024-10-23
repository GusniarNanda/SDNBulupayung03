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
    max-height: 400px; /* Ubah tinggi maksimum sesuai kebutuhan */
    width: 100%; /* Membuat gambar responsif */
    object-fit: contain; /* Gambar tidak akan terpotong */
}

    </style>

    <title>Company</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><span class="primary">SDN 3</span> Bulupayung</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="/">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropDdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="about">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="team">Guru</a></li>
                            <li>
                                <a class="dropdown-item" href="testimonial">Sarpras</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="services">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="portofolio">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

   <!-- CAROUSEL -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($sliders as $index => $slider)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img src="{{ Storage::url('images/' . $slider->image) }}" class="d-block w-100" alt="{{ $slider->title }}" style="max-width: 100%; height: auto;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $slider->title }}</h5>
                    <p>{{ $slider->description }}</p> <!-- Menggunakan <p> untuk deskripsi -->
                </div>
            </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

    <!-- END CAROUSEL -->

    <!-- ABOUT US -->
    <div class="about-use mt-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">Sekolah Kami</h2>
            </div>
            <div class="row mt-5">
                <div class="col-md-6" data-aos="fade-right">
                    <h3 class="fw-bold about-us-title">
                        SDN 3 BULUPAYUNG
                    </h3>
                    <p class="fw-bolder mt-4 about-us-subtitle">
                        Terwujudnya siswa berbudi pekerti luhur, cerdas, berbudaya, terampil berkarya, dan berkarakter
                        Pancasila
                    </p>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <p>
                        SDN 3 Bulupayung berkomitmen untuk membentuk siswa yang berkarakter, cerdas, dan siap menghadapi
                        tantangan masa depan.
                        Melalui pendekatan pendidikan yang holistik, kami berusaha mengembangkan potensi siswa secara
                        akademik, emosional, dan sosial.
                        Untuk mencapai tujuan tersebut, kami menjalankan misi sebagai berikut:
                    </p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="fa fa-check-double primary"></i>
                            1. Mendidik siswa agar beriman dan bertakwa kepada Tuhan Yang Maha Esa.
                        </li>
                        <li class="list-group-item">
                            <i class="fa fa-check-double primary"></i>
                            2. Menciptakan lingkungan belajar yang kondusif dan menyenangkan.
                        </li>
                        <li class="list-group-item">
                            <i class="fa fa-check-double primary"></i>
                            3. Menumbuhkan rasa cinta nasionalisme yang kuat.
                        </li>
                        <li class="list-group-item">
                            <i class="fa fa-check-double primary"></i>
                            4. Mengembangkan potensi siswa dalam berbagai bidang, baik akademik maupun non-akademik,
                            agar mampu bersaing di era globalisasi.


                        </li>
                    </ul>
                    <p class="mt-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum at
                        omnis animi ad ab, dolor aliquam. Corrupti accusantium id quo sed,
                        facilis quisquam possimus consectetur amet unde laudantium eaque
                        iusto?
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END ABOUT US -->

    <!-- services -->
    <div class="services mt-5 bg-light py-5">
        <div class="container">
            <div class="title-container text-center">
                <h2 class="fw-bold">SERVICES</h2>
            </div>
            <p class="text-center mt-4">
                lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus,
                aliquam.
            </p>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa fa-book fa-lg fa-3x"></i>
                                <div class="card-title fw-bolder mt-4">Lorem ipsum</div>
                                <p class="card-description mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Magni nam vero, dolorem iusto eum voluptatibus?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa fa-book fa-lg fa-3x"></i>
                                <div class="card-title fw-bolder mt-4">Lorem ipsum</div>
                                <p class="card-description mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Magni nam vero, dolorem iusto eum voluptatibus?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa fa-book fa-lg fa-3x"></i>
                                <div class="card-title fw-bolder mt-4">Lorem ipsum</div>
                                <p class="card-description mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Magni nam vero, dolorem iusto eum voluptatibus?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa fa-book fa-lg fa-3x"></i>
                                <div class="card-title fw-bolder mt-4">Lorem ipsum</div>
                                <p class="card-description mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Magni nam vero, dolorem iusto eum voluptatibus?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa fa-book fa-lg fa-3x"></i>
                                <div class="card-title fw-bolder mt-4">Lorem ipsum</div>
                                <p class="card-description mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Magni nam vero, dolorem iusto eum voluptatibus?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa fa-book fa-lg fa-3x"></i>
                                <div class="card-title fw-bolder mt-4">Lorem ipsum</div>
                                <p class="card-description mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Magni nam vero, dolorem iusto eum voluptatibus?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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
            <div class="row mt-4 ">
                <div class="col-md-12 d-flex justify-content-center">
                    <ul class="list-unstyled d-flex portofolio-filters">
                        <li data-filter="*" class="py-2 px-4 filter-active text-white">ALL</li>
                        <li data-filter=".filter-web" class="py-2 px-4">Web</li>
                        <li data-filter=".filter-design" class="py-2 px-4">Design</li>
                        <li data-filter=".filter-photo" class="py-2 px-4">Photography</li>

                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="masonry portofolio-container" data-aos="zoom-in-up">
                        <div class="masonry-sizer"></div>
                        <div class="masonry-item m-2 portofolio-item filter-web">
                            <img src="/assets/img/p1.jpg" alt="" class="img-fluid" />
                        </div>
                        <div class="masonry-item m-2 portofolio-item filter-design">
                            <img src="/assets/img/p2.jpg" alt="" class="img-fluid" />
                        </div>
                        <div class="masonry-item m-2 portofolio-item filter-design">
                            <img src="/assets/img/p3.jpg" alt="" class="img-fluid" />
                        </div>
                        <div class="masonry-item m-2 portofolio-item filter-web">
                            <img src="/assets/img/p4.jpg" alt="" class="img-fluid" />
                        </div>
                        <div class="masonry-item m-2 portofolio-item filter-design">
                            <img src="/assets/img/p5.jpg" alt="" class="img-fluid" />
                        </div>
                        <div class="masonry-item m-2 portofolio-item filter-photo">
                            <img src="/assets/img/p6.jpg" alt="" class="img-fluid" />
                        </div>
                        <div class="masonry-item m-2 portofolio-item filter-web">
                            <img src="/assets/img/p7.jpg" alt="" class="img-fluid" />
                        </div>
                        <div class="masonry-item m-2 portofolio-item filter-web">
                            <img src="/assets/img/p8.jpg" alt="" class="img-fluid" />
                        </div>
                        <div class="masonry-item m-2 portofolio-item filter-photo">
                            <img src="/assets/img/p9.jpg" alt="" class="img-fluid" />
                        </div>
                        <div class="masonry-item m-2 portofolio-item filter-web">
                            <img src="/assets/img/p10.jpg" alt="" class="img-fluid" />
                        </div>
                        <div class="masonry-item m-2 portofolio-item filter-design">
                            <img src="/assets/img/p11.jpg" alt="" class="img-fluid" />
                        </div>
                        <div class="masonry-item m-2 portofolio-item filter-design">
                            <img src="/assets/img/p12.jpg" alt="" class="img-fluid" />
                        </div>
                        <div class="masonry-item m-2 portofolio-item filter-design">
                            <img src="/assets/img/p13.jpg" alt="" class="img-fluid" />
                        </div>
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
    <footer class="mt-3">
        <div class="footer-top bg-dark text-white p-3">
            <div class="footer mt-3 bg-dark text-white p-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <h2 class="fw-bold">COMPANY</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Repellat consequuntur mamgnam commodi volluptatem quas? Itaque
                                quo obcaecati perspiciatis quaerat ullam!
                            </p>
                            <strong>Phone</strong> : <span>+628819974611</span>
                            <br />
                            <strong>Email</strong> : <span>info@company.org</span>
                        </div>
                        <div class="col-md-2">
                            <h2 class="fw-bold">Our Services</h2>
                            <ul class="list-group list-unstyled">
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Web Development
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Web Design
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Online Marketing
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Graphic Designer
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Photography
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <h2 class="fw-bold">Useful Links</h2>
                            <ul class="list-group list-unstyled">
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        About Us
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Services
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Portofolio
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4 class="fw-bold">Join Our Newsletter</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="yourmail@example.com" />
                                <button class="btn btn-subscribe" type="button" id="inputGroupFileAddon04">
                                    Subscribe
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-down bg-darker text-white px-5 py-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="copyright">
                            &copy; Copyright <strong>Company</strong> All Right Reserved
                        </div>
                        <div class="credits">Designed By Nanda Gusniar Pratama</div>
                    </div>
                    <div class="col-md-5">
                        <div class="social-links bg-primary float-end">
                            <a href="" class="mx-2">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-youtube fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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
