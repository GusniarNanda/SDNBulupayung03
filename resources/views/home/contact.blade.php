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
    <link rel="stylesheet" href="/assets/vendor/aos/aos-master/dist/aos.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="/assets/css/style.css" />

    <title>Contact - Company</title>
</head>

<body>
    <!-- NAVBAR -->
    @extends('layout.navbar')

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
        <!-- Google Maps -->
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3664.3703164680437!2d109.12810761941205!3d-7.593686882381877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6569730293375b%3A0x2d0040044fbb1de1!2sSD%20Negeri%20Bulupayung%2003!5e1!3m2!1sid!2sid!4v1733128792409!5m2!1sid!2sid" width="2000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container mt-5">
            <div class="row">
                <!-- Location -->
                <div class="col-md-4 mb-4">
                    <div class="card border shadow-sm">
                        <div class="card-body text-center">
                            <i class="fa fa-map-marker-alt fa-2x text-success mb-3"></i>
                            <h5 class="card-title fw-bold">Alamat</h5>
                            <p class="card-text">
                                {{ $contact->alamat ?? 'Alamat tidak tersedia' }}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Email -->
                <div class="col-md-4 mb-4">
                    <a href="mailto:{{ $contact->email ?? '#' }}" class="text-decoration-none">
                        <div class="card border shadow-sm">
                            <div class="card-body text-center">
                                <i class="fa fa-envelope fa-2x text-success mb-3"></i>
                                <h5 class="card-title fw-bold">Email</h5>
                                <p class="card-text">{{ $contact->email ?? 'Email tidak tersedia' }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Phone -->
                <div class="col-md-4 mb-4">
                    <a href="tel:{{ $contact->telepon ?? '#' }}" class="text-decoration-none">
                        <div class="card border shadow-sm">
                            <div class="card-body text-center">
                                <i class="fa fa-phone-alt fa-2x text-success mb-3"></i>
                                <h5 class="card-title fw-bold">Telepon</h5>
                                <p class="card-text">{{ $contact->telepon ?? 'Telepon tidak tersedia' }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!-- Footer -->
    @extends('layout.footer')

    <!-- to top -->
    <a href="#" class="btn-to-top p-3">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- end to top -->

    <!-- Scripts -->
    <script src="/assets/vendor/jquery/jquery-3.7.1.js"></script>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/fontawesome/fontawesome-free-5.15.4-web/js/all.min.js"></script>
    <script src="/assets/vendor/masonry/masonry.pkgd.min.js"></script>
    <script src="/assets/vendor/aos/aos-master/dist/aos.js"></script>
    <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/js/app.js"></script>
</body>

</html>
