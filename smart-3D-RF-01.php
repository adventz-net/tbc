<?php include ('includes/header.php'); ?>
  <body>

    <?php include ('includes/navbar.php'); ?>

    <section class="ins-banner-sec">
      <div class="ins-banner-cover">
        <div
          id="carouselBanner"
          class="carousel slide carousel-fade"
          data-bs-ride="carousel"
          data-bs-interval="3000"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                class="slider-web"
                src="images/ins-slider-01.jpg"
                alt="Banner"
              />
            </div>
          </div>
        </div>
        <div class="ins-banner-body">
          <div class="continer-xxl">
            <div class="ins-banner-content">
              <h5>Face Procedures</h5>
              <h1>Smart 3D RF </h1>
             
            </div>
          </div>
        </div>
      </div>
      <div class="banner-overlay">
        <div class="line-overlay"></div>
        <div class="line-overlay"></div>
        <div class="line-overlay"></div>
        <div class="line-overlay"></div>
        <div class="line-overlay"></div>
        <div class="line-overlay"></div>
        <div class="line-overlay"></div>
        <div class="line-overlay"></div>
      </div>
      <?php include ('includes/nav-sticky.php'); ?>
    </section>

    <main class="content-sec content-bg" data-aos="">
      <div class="container-xxl">
        <div class="row">
          <div class="col-12">
            <div
              class="page-hd"
              data-aos="fade-up"
              data-aos-delay="100"
              data-aos-duration="1500"
            >
              <h2>Smart 3D RF</h2>
              <div class="hd-line"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div
              class="service-item-cover"
              data-aos="fade-up"
              data-aos-delay="200"
              data-aos-duration="1500"
            >
              <figure>
                <div class="parallax-effect service-parallax">
                  <div class="layer" data-depth="0.4">
                    <div class="about-it-para about-para-01">
                      <img src="images/abt-pearl-01.png" alt="Image" />
                    </div>
                  </div>
                  <div class="layer" data-depth="0.3">
                    <div class="about-it-para about-para-02">
                      <img src="images/abt-pearl-02.png" alt="Image" />
                    </div>
                  </div>
                </div>
                <div class="service-it-img">
                  <div
                    id="carouselBanner"
                    class="carousel slide carousel-fade"
                    data-bs-ride="carousel"
                    data-bs-interval="3000"
                  >
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/smart-3d-rf.jpg" alt="Image" />
                      </div>
                      <div class="carousel-item" data-bs-interval="25000">
                        <video autoplay="" loop="" muted="" poster="images/overview-poster.jpg">
                          <source src="videos/3drf.mp4" type="video/mp4" />
                        </video>
                      </div>
                    </div>
                  </div>
                </div>
              </figure>
              <div class="service-it-body">
                <div class="service-it-con">
                  <div class="service-it-hd">
                    <h3>Smart 3D RF</h3>
                  </div>
                  <p>
                    A revolutionary nonsurgical cosmetic treatment that combines
                    two of the most effective anti-aging technologies on the
                    market: Radiofrequency energy and Microneedling.
                  </p>

                  <h4>Targets</h4>

                  <ul>
                    <li>Fine lines & wrinkles</li>
                    <li>Skin laxity</li>
                    <li>Uneven skin tone</li>
                    <li>Acne scars</li>
                    <li>Stretch marks</li>
                  </ul>

                  <p>
                    At Beauty code clinic, we are committed to bringing the
                    world’s most advanced skin rejuvenation and skin tightening
                    treatment.
                  </p>
                  <p>
                    Consult our team of experts to discover the best treatment
                    plan for your skin.
                  </p>
                  <a class="btn btn-schedule" href="javascript:;"
                    >Schedule an Appointment</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <?php include ('includes/footer.php'); ?>