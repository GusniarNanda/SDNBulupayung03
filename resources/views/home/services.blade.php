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

    <title>Prestasi</title>
</head>

<body>
    <!-- NAVBAR -->
    @extends('layout.navbar');

    <!-- END NAVBAR -->

    <!-- breadcumbs -->
    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
                <h2>Prestasi</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>Prestasi</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- Prestasi -->
    <div class="teams bg-light py-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">PRESTASI</h2>
                <p class="text-center mt-4">
                    Kami bangga atas berbagai prestasi yang telah kami raih sepanjang perjalanan kami. Berikut adalah
                    beberapa penghargaan dan pencapaian yang telah diraih.
                </p>
                <div class="row">
                    @foreach ($services as $index => $service)
                        <div class="col-md-3 mb-3" data-aos="fade-up">
                            <div class="card" style="width: 100%;">
                                <img src="{{ Storage::url('images/' . $service->image) }}" class="card-img-top"
                                    alt="{{ $service->title }}" style="max-width: 100%; height: auto;">
                                <div class="card-body text-center">
                                    <h5 class="card-title font-bold">{{ $service->title }}</h5>
                                    <p class="card-text-muted">{{ $service->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- end prestasi -->

    <!-- features -->
    <div class="features mt-5 py-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">KEUNGGULAN</h2>
            </div>
            <p class="text-center mt-4">Kami memiliki berbagai keunggulan yang mendukung pencapaian prestasi kami,
                mulai dari inovasi hingga profesionalisme dalam melayani pelanggan.</p>
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="card border-0 p-4 mt-3 shadow-sm" data-aos="zoom-in">
                        <div class="card-body d-flex justify-content-around">
                            <i class="fa fa-lightbulb fa-lg fa-2x"></i>
                            <h2 class="fs-5">Inovatif</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 p-4 mt-3 shadow-sm" data-aos="zoom-in">
                        <div class="card-body d-flex justify-content-around">
                            <i class="fa fa-users fa-lg fa-2x"></i>
                            <h2 class="fs-5">Kolaboratif</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 p-4 mt-3 shadow-sm" data-aos="zoom-in">
                        <div class="card-body d-flex justify-content-around">
                            <i class="fa fa-heart fa-lg fa-2x"></i>
                            <h2 class="fs-5">Empati</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 p-4 mt-3 shadow-sm" data-aos="zoom-in">
                        <div class="card-body d-flex justify-content-around">
                            <i class="fa fa-award fa-lg fa-2x"></i>
                            <h2 class="fs-5">Profesional</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end features -->

    <!-- FOOTER -->
    @extends('layout.footer')
    <!-- END FOOTER -->

    <!-- Optional JavaScript -->
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS -->
    <script src="assets/vendor/aos/aos-master/dist/aos.js">
        < script src = "/assets/vendor/jquery/jquery-3.7.1.js" >
    </>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/fontawesome/fontawesome-free-5.15.4-web/js/all.min.js"></script>
    <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
    <script src="/assets/vendor/aos/aos-master/dist/aos.js"></script>
    <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/js/app.js"></script>
    </script>
    <script>
        AOS.init({
            duration: 1200,
        });
    </script>
</body>

</html>
