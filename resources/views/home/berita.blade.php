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
    <footer class="footer-top bg-dark text-white p-5 mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="fw-bold">SDN 3 Bulupayung</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat consequuntur mamgnam commodi
                        voluptatem quas? Itaque quo obcaecati harum ut maxime.</p>
                </div>
                <div class="col-md-3">
                    <h5>Contact</h5>
                    <p><i class="fas fa-envelope me-2"></i>mail@company.com</p>
                    <p><i class="fas fa-phone me-2"></i>+6221 2002 2012</p>
                </div>
                <div class="col-md-3">
                    <h5>Address</h5>
                    <p><i class="fas fa-home me-2"></i>Jl. Jendral Sudirman Kav. 52, Jakarta Selatan</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- Optional JavaScript -->
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos-master/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
        });
    </script>
</body>

</html>
