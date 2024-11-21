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

    <title>Berita</title>
</head>

<body>
    <!-- NAVBAR -->
    @extends('layout.navbar')

    <!-- Breadcumbs -->
    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
                <h2>Berita</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>Berita</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- Daftar Berita -->
    <div class="teams bg-light py-5">
        <div class="container">
            <div class="title-container mb-4">
                <h2 class="text-center fw-bold">Berita Terbaru</h2>
                <p class="text-center mt-3">
                    Lihat berita terbaru dan informasi penting dari sekolah kami.
                </p>
            </div>

            <div class="row">
                @foreach ($beritas as $berita)
                    <div class="col-md-4 mb-4" data-aos="fade-up">
                        <div class="card h-100">
                            <img src="{{ Storage::url('images/' . $berita->gambar) }}" class="card-img-top"
                                alt="{{ $berita->judul }}" style="max-height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title font-bold">{{ $berita->judul }}</h5>
                                <p class="card-text">{{ Str::limit($berita->konten, 100) }}</p>
                                <a class="btn btn-primary mt-auto" href="{{ route('berita', $berita->id) }}">
                                    Read more →
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end daftar berita -->

    <!-- FOOTER -->
    @extends('layout.footer');
    <!-- END FOOTER -->

    <!-- Optional JavaScript -->
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos-master/dist/aos.js">
        < script src = "/assets/vendor/jquery/jquery-3.7.1.js" >
    </script>
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
