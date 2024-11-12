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
                                
                                <li data-filter=".filter-{{ Str::slug($kategori) }}" class="py-2 px-4">{{ $kategori }}</li>
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
                        <div class="masonry-item m-2 portofolio-item filter-{{ Str::slug($portofolio->kategori)  }}">
                            <img src="{{ Storage::url('images/' . $portofolio->image) }}" alt="" class="img-fluid" />
                            
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
    <footer>
        <div class="footer-top bg-dark text-white p-5">
            <div class="footer mt-5 bg-dark text-white p-5">
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
