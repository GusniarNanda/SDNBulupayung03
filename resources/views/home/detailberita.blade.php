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
                <h1 class="fw-bold mb-3">{{ $berita->judul }}</h1>
                <img src="{{ Storage::url('images/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                    class="img-fluid rounded mb-4" style="max-height: 450px; object-fit: cover;">
                <p class="text-muted">Published on: {{ $berita->created_at->format('d M Y') }}</p>
            </div>

            <!-- Content -->
            <div class="col-md-8 offset-md-2">
                <article class="mb-5">
                    <p class="text-dark" style="line-height: 1.8;">{{ $berita->konten }}</p>
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
    <footer>
        <div class="footer-top bg-dark text-white p-5">
            <div class="footer mt-5 bg-dark text-white p-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <h2 class="fw-bold">SDN 3 Bulupayung</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Repellat consequuntur mamgnam commodi volluptatem quas? Itaque
                                quo obcaecati harum ut maxime.
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h5 class="mb-4">Contact</h5>
                            <p><i class="fas fa-envelope me-3"></i> mail@company.com</p>
                            <p><i class="fas fa-phone me-3"></i> +6221 2002 2012</p>
                        </div>
                        <div class="col-md-3">
                            <h5 class="mb-4">Address</h5>
                            <p>
                                <i class="fas fa-home me-3"></i> Jl. Jendral Sudirman Kav. 52,
                                Jakarta Selatan
                            </p>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- Optional JavaScript -->
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS -->
    <script src="assets/vendor/aos/aos-master/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
        });
    </script>
</body>

</html>
