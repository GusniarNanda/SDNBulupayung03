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

    <title>Guru</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><span class="primary">SDN 3</span> BULUPAYUNG</a>
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
                        <a class="nav-link fw-bolder dropdown-toggle active" href="#" id="navbarDropDdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Guru
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="about">Visi Misi</a></li>
                            <li><a class="dropdown-item active" href="team">Guru</a></li>
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
    <!-- breadcumbs -->

    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
                <h2>Guru</h2>
                <ol class="d-flex list-unstyled">
                    <li><a href="/" class="text-white">Home</a></li>
                    <li>About</li>
                    <li>Guru</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- teams -->
    <div class="teams bg-light mt-5 py-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">Guru</h2>
                <p class="text-center mt-4">
                    Guru-guru kami adalah tenaga pengajar berpengalaman yang berdedikasi untuk memberikan pendidikan
                    terbaik. Dengan keahlian di berbagai bidang, mereka siap membimbing dan menginspirasi siswa untuk
                    mencapai potensi maksimal mereka
                </p>
                <div class="row">
                    @foreach ($teams as $index => $team)
                        <div class="col-md-4 mb-4" data-aos="fade-up">
                            <div class="card" style="width: 100%;">
                                <img src="{{ Storage::url('images/' . $team->image) }}" class="card-img-top"
                                    alt="{{ $team->title }}" style="max-width: 100%; height: auto;">
                                <div class="card-body text-center">
                                    <h5 class="card-title font-bold">{{ $team->title }}</h5>
                                    <p class="card-text-muted">{{ $team->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
