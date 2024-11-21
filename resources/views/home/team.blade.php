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
    @extends('layout.navbar');

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
