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

    <title>Sarana & Prasarana</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><span class="primary">SDN 3 </span>BULUPAYUNG</a>
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
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="about">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="team">Guru</a></li>
                            <li>
                                <a class="dropdown-item active" href="testimonial">Sarana & Prasarana</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="services">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="portofolio">Portofolio</a>
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
                <h2>Sarana & Prasarana</h2>
                <ol class="d-flex list-unstyled">
                    <li><a href="/" class="text-white">Home</a></li>
                    <li>About</li>
                    <li>Sarana & Prasarana</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- Sarana & Prasarana -->
    <div class="teams bg-light py-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">Sarana & Prasarana</h2>
                <p class="text-center mt-4">
                    SDN 3 Bulupayung memiliki beragam sarana dan prasarana yang mendukung proses pembelajaran dan
                    kegiatan sekolah lainnya.
                </p>
                <div class="row">
                    @foreach ($testimonials as $index => $testimonial)
                        <div class="col-md-4 mb-4" data-aos="fade-up">
                            <div class="card" style="width: 100%;">
                                <img src="{{ Storage::url('images/' . $testimonial->image) }}" class="card-img-top"
                                    alt="{{ $testimonial->title }}" style="max-width: 100%; height: auto;">
                                <div class="card-body text-center">
                                    <h5 class="card-title font-bold">{{ $testimonial->title }}</h5>
                                    <p class="card-text-muted">{{ $testimonial->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- end Sarana & Prasarana -->

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
                                Repellat consequuntur mamgnam commodi voluptatem quas? Itaque
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
                                    <a href="/" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="/about" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        About Us
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="/facilities" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Sarana & Prasarana
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="/contact" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h2 class="fw-bold">Join Our Newsletter</h2>
                            <form action="" class="mt-4">
                                <input type="text" class="form-control" placeholder="Email" />
                                <button class="btn btn-primary mt-4">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <!-- END FOOTER -->

    <!-- Optional JavaScript -->
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS -->
    <script src="/assets/vendor/aos/aos-master/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>
    <!-- custom javascript -->
    <script src="/assets/js/app.js"></script>
</body>

</html>
