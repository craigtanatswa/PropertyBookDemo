@extends('layouts.master')

@section('content')
<body class="portfolio-page">

  
    <main class="main">
  
      <!-- Page Title -->
      <div class="page-title light-background">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
              <h1 class="page-title-heading">Portfolio</h1>
              <nav aria-label="breadcrumb">
                <ol class="custom-breadcrumb breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active current" aria-current="page">Portfolio</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div><!-- End Page Title -->
  
      <!-- Portfolio Section -->
      <section id="portfolio" class="portfolio section">
  
        <div class="container">
  
          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
  
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Card</li>
              <li data-filter=".filter-branding">Web</li>
            </ul><!-- End Portfolio Filters -->
  
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 1</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 1</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 2</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 2</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
            </div><!-- End Portfolio Container -->
  
          </div>
  
        </div>
  
      </section><!-- /Portfolio Section -->
  
      <!-- Testimonials Section -->
      <section id="testimonials" class="testimonials section">
  
        <div class="container" data-aos="fade-up">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    },
                    "breakpoints": {
                      "320": {
                        "slidesPerView": 1,
                        "spaceBetween": 40
                      },
                      "1200": {
                        "slidesPerView": 1,
                        "spaceBetween": 1
                      }
                    }
                  }
                </script>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="testimonial mx-auto">
                      <figure class="img-wrap">
                        <img src="assets/img/testimonials/testimonials-1.jpg" alt="Image" class="img-fluid">
                      </figure>
                      <h3 class="name">Adam Aderson</h3>
                      <blockquote>
                        <p>
                          “There live the blind texts. Separated they live in
                          Bookmarksgrove right at the coast of the Semantics, a large
                          language ocean.”
                        </p>
                      </blockquote>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonial mx-auto">
                      <figure class="img-wrap">
                        <img src="assets/img/testimonials/testimonials-2.jpg" alt="Image" class="img-fluid">
                      </figure>
                      <h3 class="name">Lukas Devlin</h3>
                      <blockquote>
                        <p>
                          “There live the blind texts. Separated they live in
                          Bookmarksgrove right at the coast of the Semantics, a large
                          language ocean.”
                        </p>
                      </blockquote>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonial mx-auto">
                      <figure class="img-wrap">
                        <img src="assets/img/testimonials/testimonials-3.jpg" alt="Image" class="img-fluid">
                      </figure>
                      <h3 class="name">Kayla Bryant</h3>
                      <blockquote>
                        <p>
                          “There live the blind texts. Separated they live in
                          Bookmarksgrove right at the coast of the Semantics, a large
                          language ocean.”
                        </p>
                      </blockquote>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- /Testimonials Section -->
  
    </main>
  
    <footer id="footer" class="footer light-background">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
            <div class="widget">
              <h3 class="widget-heading">About Us</h3>
              <p class="mb-4">
                There live the blind texts. Separated they live in Bookmarksgrove
                right at the coast of the Semantics, a large language ocean.
              </p>
              <p class="mb-0">
                <a href="#" class="btn-learn-more">Learn more</a>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ps-lg-5 mb-3 mb-md-0">
            <div class="widget">
              <h3 class="widget-heading">Navigation</h3>
              <ul class="list-unstyled float-start me-5">
                <li><a href="#">Overview</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Find Buyers</a></li>
              </ul>
              <ul class="list-unstyled float-start">
                <li><a href="#">Overview</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 pl-lg-5">
            <div class="widget">
              <h3 class="widget-heading">Recent Posts</h3>
              <ul class="list-unstyled footer-blog-entry">
                <li>
                  <span class="d-block date">May 3, 2020</span>
                  <a href="#">There live the Blind Texts</a>
                </li>
                <li>
                  <span class="d-block date">May 3, 2020</span>
                  <a href="#">Separated they live in Bookmarksgrove right</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 pl-lg-5">
            <div class="widget">
              <h3 class="widget-heading">Connect</h3>
              <ul class="list-unstyled social-icons light mb-3">
                <li>
                  <a href="#"><span class="bi bi-facebook"></span></a>
                </li>
                <li>
                  <a href="#"><span class="bi bi-twitter-x"></span></a>
                </li>
                <li>
                  <a href="#"><span class="bi bi-linkedin"></span></a>
                </li>
                <li>
                  <a href="#"><span class="bi bi-google"></span></a>
                </li>
                <li>
                  <a href="#"><span class="bi bi-google-play"></span></a>
                </li>
              </ul>
            </div>
  
            <div class="widget">
              <div class="footer-subscribe">
                <h3 class="widget-heading">Subscribe</h3>
                <form action="forms/newsletter.php" method="post" class="php-email-form">
                  <input type="text" class="form-control" placeholder="Enter your email">
  
                  <button type="submit" class="btn btn-link">
                    <span class="bi bi-arrow-right"></span>
                  </button>
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Your subscription request has been sent. Thank you!
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
  
        <div class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between">
          <p>© <span>Copyright</span> <strong class="px-1 sitename">Active.</strong> <span>All Rights Reserved</span></p>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </footer>
  

  
  </body>
@endsection


@section('scripts')

    
@endsection