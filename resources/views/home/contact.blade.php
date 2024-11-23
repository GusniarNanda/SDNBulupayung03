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

    <title>Company</title>
</head>

<body>
    <!-- NAVBAR -->
    @extends('layout.navbar');

    <!-- END NAVBAR -->
    <!-- breadcumbs -->

    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
                <h2>Contact</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>Contact</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- contact -->
    <div class="contact mb-5">
        <div class="maps">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2130.0153198567828!2d109.12663644240736!3d-7.594026765008337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6569730293375b%3A0x2d0040044fbb1de1!2sSD%20Negeri%20Bulupayung%2003!5e1!3m2!1sid!2sid!4v1731730646637!5m2!1sid!2sid"
                width="2000" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <!-- Location -->
                                    <div class="col-md-4">
                                        <div class="card h-100 border-0 clickable">
                                            <div class="card-body">
                                                <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                <h4 class="fw-bolder">Location</h4>
                                                <p class="ms-5">
                                                    JL. Tambangan, Rt. 2 Rw. 7, Pasanggiri Bulupayung Kesugihan, Kali
                                                    Cibito, Bulupayung, Kec. Kesugihan, Kabupaten Cilacap, Jawa Tengah
                                                    53272
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Email -->
                                    <div class="col-md-4">
                                        <a href="mailto:info@company.org" class="text-decoration-none">
                                            <div class="card h-100 border-0 clickable">
                                                <div class="card-body">
                                                    <i class="fa fa-envelope fa-2x primary float-start me-3"></i>
                                                    <h4 class="fw-bolder">Email</h4>
                                                    <p class="ms-5">info@company.org</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-md-4">
                                        <a href="tel:+6285722120447" class="text-decoration-none">
                                            <div class="card h-100 border-0 clickable">
                                                <div class="card-body">
                                                    <i class="fa fa-phone-alt fa-2x primary float-start me-3"></i>
                                                    <h4 class="fw-bolder">Phone</h4>
                                                    <p class="ms-5">+62 857 2212 0447</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <div class="vh-50"></div>

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
