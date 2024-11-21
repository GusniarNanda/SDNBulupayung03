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
    @extends('layout.navbar');
    <!-- END NAVBAR -->

    <!-- breadcumbs -->
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

    <!-- Prestasi -->
    <div class="container my-5">
        <div class="row">
            <!-- Image and Title -->
            <div class="col-12 text-center mb-4">
                <a href="/berita" class="text-primary btn-link">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                <h1 class="fw-bold mb-3">{{ $berita->judul }}</h1>
                <img src="{{ Storage::url('images/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                    class="img-fluid rounded mb-4" style="max-height: 450px; object-fit: cover;">
                <p class="text-muted">Published on: {{ $berita->created_at->format('d M Y') }}</p>
            </div>

            <!-- Content -->
            <div class="col-md-8 offset-md-2">
                <article class="mb-5">
                    <p class="text-dark" style="line-height: 1.8;">{!! $berita->konten !!}</p>
                </article>

                <!-- Share buttons -->
                <div class="d-flex justify-content-center mb-5">
                    <a href="#" class="btn btn-outline-primary me-2"><i class="fab fa-facebook-f"></i> Share</a>
                    <a href="#" class="btn btn-outline-info me-2"><i class="fab fa-twitter"></i> Tweet</a>
                    <a href="#" class="btn btn-outline-success"><i class="fab fa-whatsapp"></i> Share</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end prestasi -->

    <!-- features -->

    <!-- end features -->

    <!-- FOOTER -->
    @extends('layout.footer');
    <!-- END FOOTER -->

    <!-- Optional JavaScript -->
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/fontawesome/fontawesome-free-5.15.4-web/js/all.min.js"></script>

    <!-- AOS -->
    <script src="assets/vendor/aos/aos-master/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
        });
    </script>
</body>

</html>
