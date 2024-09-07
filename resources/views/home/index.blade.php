<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css"
    />
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
    <nav
      class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top py-3"
    >
      <div class="container">
        <a class="navbar-brand fw-bold" href="#"
          ><span class="primary">COMP</span>PANY</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="#">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropDdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                About
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="about.html">About Us</a></li>
                <li><a class="dropdown-item" href="team.html">Team</a></li>
                <li>
                  <a class="dropdown-item" href="testimonial.html"
                    >Testimonial</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="service.html">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="portofolio.html">Portoflio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="kontak.html">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- CAROUSEL -->
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="/assets/img/c1.jpg"
            class="d-block w-100 carousel-img"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>

        <div class="carousel-item">
          <img
            src="/assets/img/c2.jpg"
            class="d-block w-100 carousel-img"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p></p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum.
          </div>
        </div>

        <div class="carousel-item">
          <img
            src="/assets/img/c3.jpg"
            class="d-block w-100 carousel-img"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
      </div>

      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- END CAROUSEL -->

    <!-- ABOUT US -->
    <div class="about-use mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">ABOUT US</h2>
        </div>
        <div class="row mt-5">
          <div class="col-md-6" data-aos="fade-right">
            <h3 class="fw-bold about-us-title">
              Lorem ipsum dolor sit amet consectetur
            </h3>
            <p class="fw-bolder mt-4 about-us-subtitle">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Quibusdam nobis illo elligendi sint commodi
            </p>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Deserunt, minima non. Aliquid itaque quas libero totam
              consecquatur corporis quibusdam repellendus earum id atque cum
              veniam, delectus eum odio? Animi, voluptatum!
            </p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <i class="fa fa-check-double primary"></i>
                lorem ipsum dolor sit amet, consectetur adipisicing elit, Omnis,
                laboriosam?
              </li>
              <li class="list-group-item">
                <i class="fa fa-check-double primary"></i>
                lorem ipsum dolor sit amet, consectetur adipisicing elit, Omnis,
                laboriosam?
              </li>
              <li class="list-group-item">
                <i class="fa fa-check-double primary"></i>
                lorem ipsum dolor sit amet, consectetur adipisicing elit, Omnis,
                laboriosam?
              </li>
              <li class="list-group-item">
                <i class="fa fa-check-double primary"></i>
                lorem ipsum dolor sit amet, consectetur adipisicing elit, Omnis,
                laboriosam?
              </li>
            </ul>
            <p class="mt-2">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum at
              omnis animi ad ab, dolor aliquam. Corrupti accusantium id quo sed,
              facilis quisquam possimus consectetur amet unde laudantium eaque
              iusto?
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- END ABOUT US -->

    <!-- services -->
    <div class="services mt-5 bg-light py-5">
      <div class="container">
        <div class="title-container text-center">
          <h2 class="fw-bold">SERVICES</h2>
        </div>
        <p class="text-center mt-4">
          lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus,
          aliquam.
        </p>
        <div class="row mt-5">
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa fa-book fa-lg fa-3x"></i>
                  <div class="card-title fw-bolder mt-4">Lorem ipsum</div>
                  <p class="card-description mt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magni nam vero, dolorem iusto eum voluptatibus?
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa fa-book fa-lg fa-3x"></i>
                  <div class="card-title fw-bolder mt-4">Lorem ipsum</div>
                  <p class="card-description mt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magni nam vero, dolorem iusto eum voluptatibus?
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa fa-book fa-lg fa-3x"></i>
                  <div class="card-title fw-bolder mt-4">Lorem ipsum</div>
                  <p class="card-description mt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magni nam vero, dolorem iusto eum voluptatibus?
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa fa-book fa-lg fa-3x"></i>
                  <div class="card-title fw-bolder mt-4">Lorem ipsum</div>
                  <p class="card-description mt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magni nam vero, dolorem iusto eum voluptatibus?
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa fa-book fa-lg fa-3x"></i>
                  <div class="card-title fw-bolder mt-4">Lorem ipsum</div>
                  <p class="card-description mt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magni nam vero, dolorem iusto eum voluptatibus?
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa fa-book fa-lg fa-3x"></i>
                  <div class="card-title fw-bolder mt-4">Lorem ipsum</div>
                  <p class="card-description mt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magni nam vero, dolorem iusto eum voluptatibus?
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end services -->

    <!-- PORTOFOLIO US -->
    <div class="portofolio-us mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">PORTOFOLIO US</h2>
        </div>
        <div class="row mt-4 ">
          <div class="col-md-12 d-flex justify-content-center">
            <ul class="list-unstyled d-flex portofolio-filters">
              <li data-filter="*" class="py-2 px-4 filter-active text-white">ALL</li>
              <li data-filter=".filter-web" class="py-2 px-4">Web</li>
              <li data-filter=".filter-design" class="py-2 px-4">Design</li>
              <li data-filter=".filter-photo" class="py-2 px-4">Photography</li>

            </ul>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="masonry portofolio-container" data-aos="zoom-in-up">
              <div class="masonry-sizer"></div>
              <div class="masonry-item m-2 portofolio-item filter-web">
                <img src="/assets/img/p1.jpg" alt="" class="img-fluid"/>
              </div>
              <div class="masonry-item m-2 portofolio-item filter-design">
                <img src="/assets/img/p2.jpg" alt="" class="img-fluid"/>
              </div>
              <div class="masonry-item m-2 portofolio-item filter-design">
                <img src="/assets/img/p3.jpg" alt="" class="img-fluid"/>
              </div>
              <div class="masonry-item m-2 portofolio-item filter-web">
                <img src="/assets/img/p4.jpg" alt="" class="img-fluid"/>
              </div>
              <div class="masonry-item m-2 portofolio-item filter-design">
                <img src="/assets/img/p5.jpg" alt="" class="img-fluid"/>
              </div>
              <div class="masonry-item m-2 portofolio-item filter-photo">
                <img src="/assets/img/p6.jpg" alt="" class="img-fluid"/>
              </div>
              <div class="masonry-item m-2 portofolio-item filter-web">
                <img src="/assets/img/p7.jpg" alt="" class="img-fluid"/>
              </div>
              <div class="masonry-item m-2 portofolio-item filter-web">
                <img src="/assets/img/p8.jpg" alt="" class="img-fluid"/>
              </div>
              <div class="masonry-item m-2 portofolio-item filter-photo">
                <img src="/assets/img/p9.jpg" alt="" class="img-fluid"/>
              </div>
              <div class="masonry-item m-2 portofolio-item filter-web">
                <img src="/assets/img/p10.jpg" alt="" class="img-fluid"/>
              </div>
              <div class="masonry-item m-2 portofolio-item filter-design">
                <img src="/assets/img/p11.jpg" alt="" class="img-fluid"/>
              </div>
              <div class="masonry-item m-2 portofolio-item filter-design">
                <img src="/assets/img/p12.jpg" alt="" class="img-fluid"/>
              </div>
              <div class="masonry-item m-2 portofolio-item filter-design">
                <img src="/assets/img/p13.jpg" alt="" class="img-fluid"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END PORTOFOLIO US -->

    <!-- PORTOFOLIO US (KOSONG) -->
    <div class="portofolio-use mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">PORTOFOLIO US</h2>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="masonry">
              <div class="masonry-sizer"></div>
              <div class="masonry-item m-2">
                <img src="/assets/img/b1.jpg" alt="" class="img-fluid" />
              </div>
              <div class="masonry-item m-2">
                <img src="/assets/img/b2.jpg" alt="" class="img-fluid" />
              </div>
              <div class="masonry-item m-2">
                <img src="/assets/img/b3.jpg" alt="" class="img-fluid" />
              </div>
              <div class="masonry-item m-2">
                <img src="/assets/img/b4.jpg" alt="" class="img-fluid" />
              </div>
              <div class="masonry-item m-2">
                <img src="/assets/img/b5.jpg" alt="" class="img-fluid" />
              </div>
              <div class="masonry-item m-2">
                <img src="/assets/img/b6.jpg" alt="" class="img-fluid" />
              </div>
              <div class="masonry-item m-2">
                <img src="/assets/img/b7.jpg" alt="" class="img-fluid" />
              </div>
              <div class="masonry-item m-2">
                <img src="/assets/img/b8.jpg" alt="" class="img-fluid" />
              </div>
              <div class="masonry-item m-2">
                <img src="/assets/img/b9.jpg" alt="" class="img-fluid" />
              </div>
              <div class="masonry-item m-2">
                <img src="/assets/img/b10.jpg" alt="" class="img-fluid" />
              </div>
              <div class="masonry-item m-2">
                <img src="/assets/img/b11.jpg" alt="" class="img-fluid" />
              </div>
              <div class="masonry-item m-2">
                <img src="/assets/img/b12.jpg" alt="" class="img-fluid" />
              </div>
              <div class="masonry-item m-2">
                <img src="/assets/img/b13.jpg" alt="" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- PORTOFOLIO US (KOSONG) -->

    <!-- INI CLIENT ASLI -->
    <div class="clients mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">CLIENT</h2>
        </div>
        <div class="row mt-5">
          <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
            <img
              src="/assets/img/b1.svg"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
          <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
            <img
              src="/assets/img/b2.svg"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
          <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
            <img
              src="/assets/img/b3.svg"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
          <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
            <img
              src="/assets/img/b4.svg"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
          <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
            <img
              src="/assets/img/b5.svg"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
          <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
            <img
              src="/assets/img/b6.svg"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
          <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
            <img
              src="/assets/img/b7.svg"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
          <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
            <img
              src="/assets/img/b8.svg"
              class="img-fluid brand-image"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <!-- INI END CLIENT -->

    <!-- FOOTER -->
    <footer class="mt-5">
      <div class="footer-top bg-dark text-white p-5">
        <div class="footer mt-5 bg-dark text-white p-5">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-3">
                <h2 class="fw-bold">COMPANY</h2>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Repellat consequuntur mamgnam commodi volluptatem quas? Itaque
                  quo obcaecati perspiciatis quaerat ullam!
                </p>
                <strong>Phone</strong> : <span>+628819974611</span>
                <br />
                <strong>Email</strong> : <span>info@company.org</span>
              </div>
              <div class="col-md-2">
                <h2 class="fw-bold">Our Services</h2>
                <ul class="list-group list-unstyled">
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Web Development
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Web Design
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Online Marketing
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Graphic Designer
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Photography
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-2">
                <h2 class="fw-bold">Useful Links</h2>
                <ul class="list-group list-unstyled">
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Home
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      About Us
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Services
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Portofolio
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Contact
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-3">
                <h4 class="fw-bold">Join Our Newsletter</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="input-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="yourmail@example.com"
                  />
                  <button
                    class="btn btn-subscribe"
                    type="button"
                    id="inputGroupFileAddon04"
                  >
                    Subscribe
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-down bg-darker text-white px-5 py-3">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <div class="copyright">
                &copy; Copyright <strong>Company</strong> All Right Reserved
              </div>
              <div class="credits">Designed By Nanda Gusniar Pratama</div>
            </div>
            <div class="col-md-5">
              <div class="social-links bg-primary float-end">
                <a href="" class="mx-2">
                  <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-twitter fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-youtube fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-linkedin fa-2x"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

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
