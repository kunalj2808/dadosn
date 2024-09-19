<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="./assets/img/logo/logo-icon.png"
      type="image/x-icon"
    />
    <title>GQL - transport & logistics</title>
    <!-- font-awesome/6.2.1  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <!-- bootstrap@5.0.2  -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <!-- animate.css  -->
    <link rel="stylesheet" href="./css/animate.css" />
    <!-- custome css  -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- custome media query  -->
    <link rel="stylesheet" href="css/responsive.css" />
  </head>

  <body>
    <!-- navbar section start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img class="img-fluid" src="./assets/img/logo/logo3.png" alt="" />
          {{-- <img
            src="./assets/img/logo/logo-bg1.png"
            alt="GQL - transport & logistics"
            title="GQL - transport & logistics"
          /> --}}
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="about-us">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact-us">Contact</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="service.html">Services</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar section end -->
    <!-- banner section start -->
    <section class="banner">
      <div class="container py-5">
        <div class="banner-info py-5">
          <h1>About Us</h1>
          <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Library
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </section>

    <!-- banner section end -->
    <!-- service section start -->
    <div class="service-section py-5">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-4">
            <!-- single item start  -->
            <div
              class="card my-5 my-md-0 wow fadeInUp"
              style="visibility: visible; animation-name: fadeInUp"
            >
              <div class="card-icon">
                <i class="fa-solid fa-plane"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">SUPPLY CHAIN MNGT</h5>
                <p class="card-text mt-4">
                  Dadson logistic provides our client with<br>
                  customized and end to end logistic<br>
                   solutions and services
                </p>
              </div>
              <div class="img-box">
                <img
                  src="./assets/img/service/top-service-1.jpg"
                  class="card-img-bottom"
                  alt="..."
                />
              </div>
              <!-- single item end  -->
            </div>
          </div>
          <div class="col-md-4">
            <!-- single item start  -->

            <div
              class="card my-5 my-md-0 mt-md-5 wow fadeInUp"
              data-wow-delay="300ms"
              style="visibility: visible; animation-name: fadeInUp"
            >
              <div class="card-icon">
                <i class="fa-solid fa-ship"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title">ROAD TRANSPORT</h5>
                <p class="card-text mt-4">
                  through our fleet of over 1,000 trucks<br>
                  and trailers,we can deliver<br>
                   transporation across the country
                </p>
              </div>
              <div class="img-box">
                <img
                  src="./assets/img/service/top-service-2.jpg"
                  class="card-img-bottom"
                  alt="..."
                />
              </div>
            </div>
            <!-- single item end  -->
          </div>
          <div class="col-md-4">
            <!-- single item start  -->

            <div
              class="card my-5 my-md-0 wow fadeInUp"
              data-wow-delay="600ms"
              style="
                visibility: visible;
                animation-delay: 600ms;
                animation-name: fadeInUp;
              "
            >
              <div class="card-icon">
                <i class="fa-solid fa-truck"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title">WAREHOUSE STORAGE</h5>
                <p class="card-text mt-4">
                  we provide ware house services to client<br> as a standalone service as well as part of<br> our integrated logistic solutions.

                </p>
              </div>
              <div class="img-box">
                <img
                  src="./assets/img/service/top-service-3.jpg"
                  class="card-img-bottom"
                  alt="..."
                />
              </div>
            </div>
            <!-- single item end  -->
          </div>
        </div>
        <div class="services-text">
          <p class="text-center fw-bold">
            You can also find our
            <strong class="text-white"> Warehousing Solution </strong> to
            logistics around the world
          </p>
        </div>
      </div>
    </div>
    <!-- service section end -->
    <!-- about section start -->
    <section class="about-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-2">
            <div
              class="about-content wow fadeInRight animated"
              data-wow-delay="600ms"
              style="
                visibility: visible;
                animation-delay: 600ms;
                animation-name: fadeInRight;
              "
            >
              <div class="about-info p-5">
                <div class="sec-title">
                  <h3 class="sub-title">WELCOME TO GQL</h3>
                  <h2>Providing full range of transportation</h2>
                </div>

                <p class="mb-3">
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                  The point of using Lorem Ipsum is that it has a more-or-less
                  normal distribution
                </p>
                <blockquote class="blockquote mb-4">
                  <p>
                    You can simplifying your freight & logistics needs with a
                    personal approach on GQL company.
                  </p>
                </blockquote>

                <div class="row">
                  <div class="col-12 col-md-7">
                    <ul>
                      <li class="py-3">
                        <i class="fa-solid fa-user-shield"></i> Safety and
                        reliable service
                      </li>
                      <li>
                        <i class="fa-solid fa-calendar-days"></i> On - time
                        delivery service
                      </li>
                    </ul>
                  </div>
                  <div class="col-12 col-md-5">
                    <div class="youtube-btn">
                      <img src="./assets/img/about/about-3.jpg" alt="" />
                      <div class="wrapper">
                        <div class="video-main">
                          <div class="promo-video">
                            <div class="waves-block">
                              <div class="waves wave-1"></div>
                              <div class="waves wave-2"></div>
                              <div class="waves wave-3"></div>
                            </div>
                          </div>
                          <a
                            href="https://www.youtube.com/"
                            target="_blank"
                            class="video"
                            ><i class="fa fa-play"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="about-banner">
              <div
                class="about-expert-info text-white px-3 wow fadeInLeft animated"
                style="visibility: visible; animation-name: fadeInLeft"
              >
                <h2 class="fs-1">30</h2>
                <p class="fs-4">Years of work experience</p>
              </div>
              <div
                class="about-banner-img shadow d-none d-md-block wow fadeInRight animated"
                style="visibility: visible; animation-name: fadeInRight"
              >
                <img
                  class="img-fluid"
                  src="./assets/img/about/about-2.jpg"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about section end -->
    <!-- work section start -->
    <section class="work-area pt-5">
      <div class="container">
        <div class="sec-title text-center">
          <h3 class="sub-title">HOW WE WORK</h3>
          <h2>
            We aim to contribute well to
            <br />
            your company
          </h2>
        </div>

        <div class="row">
          <div class="col-md-3">
            <!-- single item start  -->
            <div
              class="work-block wow fadeInUp animated"
              style="visibility: visible; animation-name: fadeInUp"
            >
              <div class="work-card">
                <div class="work-card-body">
                  <div class="work-card-icon">
                    <i class="fa-solid fa-box"></i>
                  </div>
                  <h4>Replenishment and Picking</h4>
                  <p>
                    Dolores molestias excepturi occaecati cupiditated non
                    provident quas.
                  </p>
                </div>
                <a href="#" class="work-btn">
                  <span class="count">
                    <span>01</span>
                  </span>
                  <span class="work-btn-title">more detail</span>
                </a>
              </div>
            </div>
            <!-- single item end  -->
          </div>
          <div class="col-md-3">
            <!-- single item start  -->
            <div
              class="work-block wow fadeInUp animated"
              data-wow-delay="300ms"
              style="
                visibility: visible;
                animation-delay: 300ms;
                animation-name: fadeInUp;
              "
            >
              <div class="work-card">
                <div class="work-card-body">
                  <div class="work-card-icon">
                    <i class="fa-solid fa-box"></i>
                  </div>
                  <h4>Warehousing Operation</h4>
                  <p>
                    Dolores molestias excepturi occaecati cupiditated non
                    provident quas.
                  </p>
                </div>
                <a href="#" class="work-btn">
                  <span class="count">
                    <span>02</span>
                  </span>
                  <span class="work-btn-title">more detail</span>
                </a>
              </div>
            </div>
            <!-- single item end  -->
          </div>
          <div class="col-md-3">
            <!-- single item start  -->
            <div
              class="work-block wow fadeInUp animated"
              data-wow-delay="600ms"
              style="
                visibility: visible;
                animation-delay: 600ms;
                animation-name: fadeInUp;
              "
            >
              <div class="work-card">
                <div class="work-card-body">
                  <div class="work-card-icon">
                    <i class="fa-solid fa-box"></i>
                  </div>
                  <h4>Packaging and Distribution</h4>
                  <p>
                    Dolores molestias excepturi occaecati cupiditated non
                    provident quas.
                  </p>
                </div>
                <a href="#" class="work-btn">
                  <span class="count">
                    <span>03</span>
                  </span>
                  <span class="work-btn-title">more detail</span>
                </a>
              </div>
            </div>
            <!-- single item end  -->
          </div>
          <div class="col-md-3">
            <!-- single item start  -->
            <div
              class="work-block wow fadeInUp animated"
              data-wow-delay="900ms"
              style="
                visibility: visible;
                animation-delay: 900ms;
                animation-name: fadeInUp;
              "
            >
              <div class="work-card">
                <div class="work-card-body">
                  <div class="work-card-icon">
                    <i class="fa-solid fa-box"></i>
                  </div>
                  <h4>Transportation Process</h4>
                  <p>
                    Dolores molestias excepturi occaecati cupiditated non
                    provident quas.
                  </p>
                </div>
                <a href="#" class="work-btn">
                  <span class="count">
                    <span>04</span>
                  </span>
                  <span class="work-btn-title">more detail</span>
                </a>
              </div>
            </div>
            <!-- single item end  -->
          </div>
        </div>
      </div>
    </section>
    <!-- work section end -->
    <!-- fun fact section start -->
    <section class="fact-section py-5">
      <div class="bg-image"></div>
      <div class="sec-bg py-5">
        <div class="sec-title text-center mt-5">
          <h2 class="text-white fw-bold">
            Hundreds of customers
            <br />
            trust our company
          </h2>
          <button class="btn primary-btn mt-5">Get a free Quote</button>
        </div>
      </div>
      <div class="container fact-counter">
        <div class="row">
          <div class="col-12 col-md-4">
            <!-- single item start -->
            <div
              class="fact-card wow fadeInUp animated"
              style="visibility: visible; animation-name: fadeInUp"
            >
              <div class="fact-icon-card">
                <img src="./assets/icons/funfact-1.png" alt="" />
              </div>
              <div class="fact-card-body">
                <div class="cont-box">
                  <span id="counter">145</span>
                </div>
                <h4>Branches Across The World</h4>
              </div>
            </div>
            <!-- single item end -->
          </div>
          <div class="col-12 col-md-4">
            <!-- single item start -->
            <div
              class="fact-card wow fadeInUp animated"
              data-wow-delay="400ms"
              style="
                visibility: visible;
                animation-delay: 400ms;
                animation-name: fadeInUp;
              "
            >
              <div class="fact-icon-card">
                <img src="./assets/icons/funfact-2.png" alt="" />
              </div>
              <div class="fact-card-body">
                <div class="cont-box">
                  <span id="counter2">26</span><span>K</span>
                </div>
                <h4>Parcel Delivered by Riders</h4>
              </div>
            </div>
            <!-- single item end -->
          </div>
          <div class="col-12 col-md-4">
            <!-- single item start -->
            <div
              class="fact-card wow fadeInUp animated"
              data-wow-delay="800ms"
              style="
                visibility: visible;
                animation-delay: 800ms;
                animation-name: fadeInUp;
              "
            >
              <div class="fact-icon-card">
                <img src="./assets/icons/funfact-1.png" alt="" />
              </div>
              <div class="fact-card-body">
                <div class="cont-box">
                  <span id="counter3">78</span><span>K</span>
                </div>
                <h4>Tons of Products Transport</h4>
              </div>
            </div>
            <!-- single item end -->
          </div>
        </div>
      </div>
    </section>
    <!-- fun fact section end -->
    <!-- projects section start -->
    <section class="project-area py-5">
      <div class="sec-title text-center w-50 mx-auto my-5">
        <h3 class="sub-title">CHECK OUR WORK</h3>
        <h2 class="">Explore recent projects</h2>
      </div>
      <div class="container-fluid">
        <!-- Swiper -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <!-- single item start  -->
              <div class="project-block">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image">
                      <a
                        href="./assets/img/project/project-1.jpg"
                        class="lightbox-image"
                      >
                        <img src="./assets/img/project/project-1.jpg" alt="" />
                      </a>
                    </figure>
                  </div>
                  <div class="content-box">
                    <div class="inner">
                      <span class="title">Project 01</span>
                      <h4>
                        <a href="#">Shipment Monitoring</a>
                      </h4>
                      <a href="#" class="icon">
                        <i class="fa-solid fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single item end  -->
            </div>
            <div class="swiper-slide">
              <!-- single item start  -->
              <div class="project-block">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image">
                      <a
                        href="./assets/img/project/project-2.jpg"
                        class="lightbox-image"
                      >
                        <img src="./assets/img/project/project-2.jpg" alt="" />
                      </a>
                    </figure>
                  </div>
                  <div class="content-box">
                    <div class="inner">
                      <span class="title">Project 02</span>
                      <h4>
                        <a href="#">Shipment Monitoring</a>
                      </h4>
                      <a href="#" class="icon">
                        <i class="fa-solid fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single item end  -->
            </div>
            <div class="swiper-slide">
              <!-- single item start  -->
              <div class="project-block">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image">
                      <a
                        href="./assets/img/project/project-3.jpg"
                        class="lightbox-image"
                      >
                        <img src="./assets/img/project/project-3.jpg" alt="" />
                      </a>
                    </figure>
                  </div>
                  <div class="content-box">
                    <div class="inner">
                      <span class="title">Project 03</span>
                      <h4>
                        <a href="#">Shipment Monitoring</a>
                      </h4>
                      <a href="#" class="icon">
                        <i class="fa-solid fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single item end  -->
            </div>
            <div class="swiper-slide">
              <!-- single item start  -->
              <div class="project-block">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image">
                      <a
                        href="./assets/img/project/project-4.jpg"
                        class="lightbox-image"
                      >
                        <img src="./assets/img/project/project-4.jpg" alt="" />
                      </a>
                    </figure>
                  </div>
                  <div class="content-box">
                    <div class="inner">
                      <span class="title">Project 04</span>
                      <h4>
                        <a href="#">Shipment Monitoring</a>
                      </h4>
                      <a href="#" class="icon">
                        <i class="fa-solid fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single item end  -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- projects section end -->
    <!-- team Section start -->
    <!-- <section class="team-section py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3"> -->
            <!-- single card start  -->
            <!-- <div class="card">
              <img
                src="./assets/img/customer/Ripon.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Ripon Hossain Shuvo</h5>
                <h5 class="designation">Software Engineer</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <ul class="social-link">
                  <li>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                </ul>
              </div>
            </div> -->
            <!-- single card end  -->
          </div>
          <div class="col-md-3">
            <!-- single card start  -->
            <!-- <div class="card">
              <img
                src="./assets/img/customer/customer.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Ripon</h5>
                <h5 class="designation">CEO</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <ul class="social-link">
                  <li>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                </ul>
              </div>
            </div> -->
            
            <!-- single card end  -->
          <!-- </div> -->
          <!-- <div class="col-md-3"> -->
            <!-- single card start  -->
            <!-- <div class="card">
              <img
                src="./assets/img/customer/testi-thumb-1.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Hossain</h5>
                <h5 class="designation">Founder</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <ul class="social-link">
                  <li>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            single card end 
          </div>
          <div class="col-md-3">
            single card start 
            <div class="card">
              <img
                src="./assets/img/customer/testi-thumb-2.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Shuvo</h5>
                <h5 class="designation">ceo of sarkar group</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <ul class="social-link">
                  <li>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                </ul>
              </div>
            </div> -->
            <!-- single card end  -->
          </div>
        </div>
      </div>
    </section>
    <!-- team Section end -->

    <!-- footer Section start -->
    <footer>
      <div class="big-footer mt-5">
        <div class="container">
          <div class="row">
            <div class="col-md-4 p-3">
              <img
                class="img-fluid"
                src="./assets/img/logo/logo3.png"
                alt=""
              />
              <p>
                Desires to obtain pain of itself, because it is pain, but
                occasionally circumstances.
              </p>
              <form action="" method="post" class="footer-from">
                <div class="input-group mb-3">
                  <input
                    type="text"
                    class="form-control p-3"
                    placeholder="Email Address"
                    aria-label="Email Address"
                    aria-describedby="button-addon2"
                  />

                  <button
                    type="button"
                    id="button-addon2"
                    class="btn primary-btn"
                  >
                    Go
                  </button>
                </div>
              </form>
              <ul class="social-link">
                <li>
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </li>
              </ul>
            </div>
            <div class="col-md-3 offset-lg-1">
              <h5>Explore</h5>
              <ul class="user-link">
                <li>
                  <a href="#">About Company</a>
                </li>
                <li>
                  <a href="#">Pricing Plan</a>
                </li>
                <li>
                  <a href="#">Request a Quote</a>
                </li>
                <li>
                  <a href="#">Packaging</a>
                </li>
                <li>
                  <a href="#">Contact</a>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>Contact</h5>
              <ul class="contact-list">
                <li>
                  <i class="fa-solid fa-square-phone-flip"></i>
                  <strong>Phone</strong>
                  <a href="tel:+9999999999">+1 (350) 217-2291</a>
                </li>
                <li>
                  <i class="fa-solid fa-envelope"></i>
                  <strong>Email</strong>
                  <a href="example@gmail.com">Admin@thegql.com</a>
                </li>
                <li>
                  <i class="fa-solid fa-map-location"></i>
                  <strong>Address</strong>
                  <p>Stockton CA, 95219</p>
                </li>
                <li>
                  <i class="fa-solid fa-clock"></i>
                  <strong>Mon - Sat</strong>
                  <p>8.00am to 9.00pm (Sun: Closed)</p>
                </li>
              </ul>
            </div>
          </div>
          .
        </div>
      </div>
      <div class="footer-bottom text-center">
        <div class="container">
          <div class="copyright-text">
            <p>© Copyright 2024 by <a href="/">GQL</a></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer Section end -->
    <!-- scroll-to-top  -->
    <a href="" id="scroll-to-top"></a>

    <!-- jQuery js  -->
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <!-- bootstrap@5.0.2 js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- gotop js  -->
    <script src="js/illbeback.min.js"></script>
    <script src="js/countMe.min.js"></script>
    <!-- custome js  -->
    <script src="js/apps.js"></script>
  </body>
</html>
