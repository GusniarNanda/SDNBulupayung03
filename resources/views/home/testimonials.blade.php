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
    @extends('layout.navbar');

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
    @extends('layout.footer');
    <!-- END FOOTER -->

    <!-- Optional JavaScript -->
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js">
        < script src = "/assets/vendor/jquery/jquery-3.7.1.js" >
    </>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/fontawesome/fontawesome-free-5.15.4-web/js/all.min.js"></script>
    <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
    <script src="/assets/vendor/aos/aos-master/dist/aos.js"></script>
    <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/js/app.js"></script>

    </script>
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
