<?php
session_start(); // Pastikan sesi dimulai untuk akses ke $_SESSION
$current_page = basename($_SERVER['PHP_SELF'], '.php'); // Mendapatkan nama file saat ini
?>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top py-3">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#"><span class="primary">SDN 3</span> Bulupayung</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link fw-bolder <?= $current_page == 'index' ? 'active text-success' : '' ?>"
                        href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= in_array($current_page, ['about', 'team', 'testimonial']) ? 'text-success' : '' ?>"
                        href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item <?= $current_page == 'about' ? 'text-success' : '' ?>"
                                href="about">Visi Misi</a></li>
                        <li><a class="dropdown-item <?= $current_page == 'team' ? 'text-success' : '' ?>"
                                href="team">Guru</a></li>
                        <li><a class="dropdown-item <?= $current_page == 'testimonial' ? 'text-success' : '' ?>"
                                href="testimonial">Sarpras</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder <?= $current_page == 'services' ? 'active text-success' : '' ?>"
                        href="{{ url('services') }}">Prestasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder <?= $current_page == 'portofolio' ? 'active text-success' : '' ?>"
                        href="{{ url('portofolio') }}">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder <?= $current_page == 'berita' ? 'active text-success' : '' ?>"
                        href="berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bolder <?= $current_page == 'contact' ? 'active text-success' : '' ?>"
                        href="contact">Kontak</a>
                </li>

                <?php if (!Auth::user()): ?>



                <li class="nav-item">
                    <a class="nav-link fw-bolder <?= $current_page == 'login' ? 'active text-success' : '' ?>"
                        href="login">Login</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
