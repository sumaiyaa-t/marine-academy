<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="author" content="Insuren"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Samak Technologies"/>
    <meta
        name="keywords"
        content="website, agency, business, consulting, corporate, finance, digital, marketing, multipurpose"
    />
    <title>Samak Technologies BD Ltd.</title>
    <link
        href="{{ asset('images/android-chrome-512x512.png') }}"
        rel="shortcut icon"
        type="image/png"
    />
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>
</head>

<body>


{{--------------------------------------------------------- public Navbar Extension --------------------------------------------------- --}}

<x-public-navbar></x-public-navbar>

{{--------------------------------------------------------- public Navbar Extension --------------------------------------------------- --}}


<!-- Home Slider Start -->
<section class="home_banner_02">
    <div class="home-carousel owl-theme owl-carousel">
        <div class="slide-item">
            <div class="image-layer" data-background="{{ asset('images/green-3.jpg') }}"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 content-column">
                        <div class="content-box">
                            <h1 class="home-carousel-title">
                                We Offer Innovative & Feasible Solutions
                            </h1>
                            <p class="home-carousel-text">
                                We offer solutions to Insurers, SMEs, Financial Institutions
                                and individuals to mitigate risks.
                            </p>
                            <div class="btn-box">
                                <a
                                    href="page-about.html"
                                    class="cs-btn-one btn-primary-color"
                                >Read More</a
                                ><br/><br/><br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-bottom-shape">
                <img src="{{ asset('images/objects/home-bottom-shape.png') }}" alt="Image"/>
            </div>
            <div class="shape shape-1" data-speed="0.02" data-revert="true">
                <img src="{{ asset('images/objects/4.png') }}" alt="Image"/>
            </div>
            <div class="shape shape-2" data-speed="0.04" data-revert="true">
                <img class="js-tilt" src="{{ asset('images/objects/5.png') }}" alt="Image"/>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" data-background="{{ asset('images/green.jpg') }}"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 content-column">
                        <div class="content-box">
                            <h1 class="home-carousel-title">
                                We Build Cloud Based Insurtech Platform
                            </h1>
                            <p class="home-carousel-text">
                                We built a cloud-based insurtech platform that connects
                                intermediaries and insurers in a digital ecosystem.
                            </p>
                            <div class="btn-box">
                                <a
                                    href="page-about.html"
                                    class="cs-btn-one btn-primary-color"
                                >Read More</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-bottom-shape">
                <img src="{{ asset('images/objects/home-bottom-shape.png') }}" alt="Image"/>
            </div>
            <div class="shape shape-1" data-speed="0.02" data-revert="true">
                <img src="{{ asset('images/objects/4.png') }}" alt="Image"/>
            </div>
            <div class="shape shape-2" data-speed="0.04" data-revert="true">
                <img class="js-tilt" src="{{ asset('images/objects/5.png') }}" alt="Image"/>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" data-background="images/green-2.jpg"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 content-column">
                        <div class="content-box">
                            <h1 class="home-carousel-title">
                                We Build Technology-led Ecosystem Platform
                            </h1>
                            <p class="home-carousel-text">
                                We build ecosystem through customer-centric solutions to
                                stimulate sustainable agriculture.
                            </p>
                            <div class="btn-box">
                                <a
                                    href="page-about.html"
                                    class="cs-btn-one btn-primary-color"
                                >Read More</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-bottom-shape">
                <img src="{{ asset('images/objects/home-bottom-shape.png') }}" alt="Image"/>
            </div>
            <div class="shape shape-1" data-speed="0.02" data-revert="true">
                <img src="{{ asset('images/objects/4.png') }}" alt="Image"/>
            </div>
            <div class="shape shape-2" data-speed="0.04" data-revert="true">
                <img class="js-tilt" src="{{ asset('images/objects/5.png') }}" alt="Image"/>
            </div>
        </div>
    </div>
</section>
<!-- Home Slider End -->
<!-- Features Section Start -->
<section
    class="features-section bg-silver pdt-110 pdb-80"
    data-background="images/bg/abs-bg8.png"
>
    <div
        class="section-title text-center wow fadeInUp"
        data-wow-delay="0ms"
        data-wow-duration="1500ms"
    >
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-lg-8 col-xl-6">
                    <!-- <div class="title-box-center">
                    <h5 class="sub-title sub-title-primary-color text-primary-color mrb-15">
                      Our Goals
                    </h5>
                    <h2></h2>
                  </div> -->
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="features-item">
                        <div class="features-inner">
                            <div class="features-shape">
                                <img src="{{ asset('images/objects/6.png') }}" alt=""/>
                            </div>
                            <div class="features-count"></div>
                            <i class="features-icon webexflaticon flaticon-target-3"></i>
                            <h4 class="features-title">Our Mission</h4>
                            <p class="features-description" style="text-align: justify">
                                To give dependable solutions while maintaining an unwavering
                                dedication to commitment and completing assigned work to an
                                uncompromising quality standard.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="features-item">
                        <div class="features-inner">
                            <div class="features-shape">
                                <img src="{{ asset('images/objects/6.png') }}" alt=""/>
                            </div>
                            <div class="features-count"></div>
                            <i class="features-icon webexflaticon flaticon-handshake"></i>
                            <h4 class="features-title">Our Vision</h4>
                            <p class="features-description" style="text-align: justify">
                                To build an end-to-end technology-led ecosystem through
                                customer-centric solutions to stimulate sustainable
                                agriculture.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col"></div>

            </div>
        </div>
    </div>
</section>
<!-- Features Section End -->
<!-- About Section Start -->
<section
    class="about-section anim-object pdt-110 pdb-115 pdb-lg-110"
    data-background="images/bg/abs-bg3.png"
>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-xl-6">
                <div class="about-image-box-style2 dot-circle mrr-60 mrr-lg-0">
                    <img
                        class="about-image1 img-full js-tilt d-none d-md-block d-lg-block d-xl-block"
                        src=""
                        alt=""
                    />
                    <img
                        class="about-image2 img-full"
                        src="{{ asset('images/agtech-featured-image.png') }}"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-md-12 col-lg-10 col-xl-6">
                <h5 class="side-line-left text-primary-color mrb-10">
                    About Our Company
                </h5>
                <h2 class="mrb-35"></h2>
                <p class="mrb-35" style="text-align: justify">
                    Inflexionpoint Technologies (BD) Ltd. offers 360°
                    technology-powered innovative and feasible solutions to Insurers,
                    SMEs, Financial Institutions and individuals to mitigate risks
                    that impact the agriculture value chain and the socio-economical
                    balance of the allied community. <br/><br/>
                    Through our comprehensive and robust digitalized solutions, we
                    work as a bridge to transform the accumulated effort towards
                    increasing access to finance, technology & information and
                    ensuring financial security to promote sustainable and resilient
                    agriculture. We built a cloud-based insurtech platform that
                    connects intermediaries and insurers in a digital ecosystem. It
                    provides technology to help the insurance sector arrange its
                    network, allowing insurance brokers to close deals faster and
                    insurers to distribute their products more efficiently.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->
<section
    class="pdt-110 pdb-90 pdb-md-110"
    data-background=""
    data-overlay-primary-color="94"
>
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div
                    class="col-md-6 col-lg-6 col-xl-7 wow fadeInUp"
                    data-wow-delay="0ms"
                    data-wow-duration="800ms"
                >
                    <h5 class="side-line-left white text-white mrb-10">
                        What We Offer
                    </h5>
                    <h2 class="text-white mrb-25">Our Platforms</h2>
                    <div class="row">
                        <div class="col-xl-9">
                            <p class="text-white mrb-35" style="text-align: justify">
                                Catered solutions comprise a wide range of agricultural risk
                                mitigation products development and infrastructure building
                                support. Our expertise in building tech-based end-to-end
                                comprehensive solutions makes us different from others. We
                                are working on expanding our market in poultry and fisheries
                                sector as well.
                            </p>
                        </div>
                        <div class="col"></div>
                        {{--                        <div class="col-xl-6">--}}
                        {{--                            <ul class="order-list text-white mrb-lg-40">--}}
                        {{--                                <li>InsureCow</li>--}}
                        {{--                                <li>InsureCrop</li>--}}
                        {{--                                <li>Digitalized microservices</li>--}}
                        {{--                                <li>Capacity Building & Consultancy</li>--}}
                        {{--                                <li>Baseline Surveys & Proposal Writing</li>--}}
                        {{--                                <li>Digital Marketing</li>--}}
                        {{--                                <li>Market Development, PR services</li>--}}
                        {{--                            </ul>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
                <div
                    class="col-md-6 col-lg-6 col-xl-5 wow fadeInUp"
                    data-wow-delay="200ms"
                    data-wow-duration="800ms"
                >
                    <div class="company-img">
                        <img src="{{ asset('images/Capture.PNG') }}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Team Section Start -->
<section class="pdt-110 pdb-170 bg-no-repeat bg-cover bg-pos-ct anim-object" data-background="images/bg/abs-bg7.png">
    <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-lg-8 col-xl-6">
                    <div class="title-box-center">
                        <h6 class="sub-title line-top-center mrb-10">Our Team</h6>
                        <h2 class="title">Meet Our Expert Team Members</h2>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="team-block mrb-30">
                        <div class="team-upper-part">
                            <img class="img-full" src="{{ asset('images/team/team01.jpg') }}" alt="">
                        </div>
                        <div class="team-bottom-part">
                            <h4 class="team-title"><a href="page-single-team.html">Alica Bendor</a></h4>
                            <h6 class="designation">Engineer</h6>
                        </div>
                        <div class="team-bottom-part-hover">
                            <h4 class="team-title"><a href="page-single-team.html">Alica Bendor</a></h4>
                            <h6 class="designation">Engineer</h6>
                            <ul class="social-list list-sm">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                {{--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                {{--                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="team-block mrb-30">
                        <div class="team-upper-part">
                            <img class="img-full" src="{{ asset('images/team/team02.jpg') }}" alt="">
                        </div>
                        <div class="team-bottom-part">
                            <h4 class="team-title"><a href="page-single-team.html">Robert Brown</a></h4>
                            <h6 class="designation">Engineer</h6>
                        </div>
                        <div class="team-bottom-part-hover">
                            <h4 class="team-title"><a href="page-single-team.html">Robert Brown</a></h4>
                            <h6 class="designation">Engineer</h6>
                            <ul class="social-list list-sm">
                                {{--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                {{--                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="team-block mrb-30">
                        <div class="team-upper-part">
                            <img class="img-full" src="{{ asset('images/team/team03.jpg') }}" alt="">
                        </div>
                        <div class="team-bottom-part">
                            <h4 class="team-title"><a href="page-single-team.html">Monika Tylor</a></h4>
                            <h6 class="designation">Engineer</h6>
                        </div>
                        <div class="team-bottom-part-hover">
                            <h4 class="team-title"><a href="page-single-team.html">Monika Tylor</a></h4>
                            <h6 class="designation">Engineer</h6>
                            <ul class="social-list list-sm">
                                {{--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                {{--                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="team-block mrb-30">
                        <div class="team-upper-part">
                            <img class="img-full" src="{{ asset('images/team/team04.jpg') }}" alt="">
                        </div>
                        <div class="team-bottom-part">
                            <h4 class="team-title"><a href="page-single-team.html">Thomas Mark</a></h4>
                            <h6 class="designation">Engineer</h6>
                        </div>
                        <div class="team-bottom-part-hover">
                            <h4 class="team-title"><a href="page-single-team.html">Thomas Mark</a></h4>
                            <h6 class="designation">Engineer</h6>
                            <ul class="social-list list-sm">
                                {{--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                {{--                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->


<!-- Funfact Section Start -->
<section class="pdt-110 pdb-50 pdb-md-45" data-background="images/bg/banner2.jpg" data-overlay-dark="95">
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
                    <div class="funfact mrb-60">
                        <div class="funfact-icon">
                            <span class="webexflaticon flaticon-briefcase-1"></span>
                        </div>
                        <div class="funfact-details">
                            <h2 class="counter">1450</h2>
                            <h5 class="title">Projects Succeed</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                    <div class="funfact mrb-60">
                        <div class="funfact-icon">
                            <span class="webexflaticon flaticon-like-3"></span>
                        </div>
                        <div class="funfact-details">
                            <h2 class="counter">1864</h2>
                            <h5 class="title">Peoples Likes</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                    <div class="funfact mrb-60">
                        <div class="funfact-icon">
                            <span class="webexflaticon flaticon-trophy-1"></span>
                        </div>
                        <div class="funfact-details">
                            <h2 class="counter">1280</h2>
                            <h5 class="title">Awards Achieved</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="800ms">
                    <div class="funfact mrb-60">
                        <div class="funfact-icon">
                            <span class="webexflaticon flaticon-employee-2"></span>
                        </div>
                        <div class="funfact-details">
                            <h2 class="counter">678</h2>
                            <h5 class="title">Team Members</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Funfact Section End -->

<!-- <section
  class="about-section pdt-110 pdb-115 pdb-lg-110"
  data-background="images/bg/abs-bg4.png"
>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <h5 class="side-line-left text-primary-color mrb-10">News</h5>
        <h2 class="mrb-35"></h2>
        <div class="dot-circle mrr-60 mrr-lg-0">
          <img class="img-full" src="./images/prothomalonews.png" alt="" />
        </div>
      </div>
      <div class="col-md-12 col-lg-12 col-xl-12">
        <h2 class="mrb-35"></h2>
        <p class="mrb-35" style="text-align: justify">
          'InsureCow' won the 'Start Karo' competition organized on
          innovative concepts of technology and sustainable development. The
          startup won the award with its livestock insurance. <br /><br />
          The two-day competition was organized by the technology institute
          Entrepreneur Lab and Frederick Neumann Foundation in collaboration
          with Startup Bangladesh and EMK Center Bangladesh.
        </p>
        <a
          href="https://www.prothomalo.com/technology/19halxulgm"
          class="cs-btn-one btn-primary-color btn-md btn-block mrb-sm-60"
          >Read Full Article</a
        >
      </div>
    </div>
  </div>
</section> -->

<!-- Project Section Starts -->
{{--<section--}}
{{--    class="bg-silver-light bg-no-repeat bg-cover bg-pos-ct pdt-110 pdb-80"--}}
{{--    data-background="images/bg/abs-bg11.png"--}}
{{-->--}}
{{--    <div--}}
{{--        class="section-title mrb-55 wow fadeInUp"--}}
{{--        data-wow-delay="0ms"--}}
{{--        data-wow-duration="1500ms"--}}
{{--    >--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-end">--}}
{{--                <div class="col-xl-6 col-lg-6 col-md-12">--}}
{{--                    <div class="title-box-center">--}}
{{--                        <h6 class="sub-title line-top-center mrb-10">Projects</h6>--}}
{{--                        <h2 class="title mrb-15">Newly Launched Projects</h2>--}}
{{--                        <p class="mrb-0 mrb-md-30"></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="section-content">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6 col-lg-4 col-xl-4">--}}
{{--                    <div class="news-wrapper mrb-30 mrb-sm-40">--}}
{{--                        <div class="news-thumb">--}}
{{--                            <img--}}
{{--                                class="img-full d-block mx-auto mt-5"--}}
{{--                                src="{{ asset('images/insurecow.png') }}"--}}
{{--                                alt=""--}}
{{--                                style="height: 200px; width: 200px"--}}
{{--                            />--}}
{{--                        </div>--}}
{{--                        <div class="news-details">--}}
{{--                            <div class="news-description mb-20">--}}
{{--                                <h4 class="the-title mrb-15">--}}
{{--                                    <a href="https://insurecow.com/">InsureCow</a>--}}
{{--                                </h4>--}}
{{--                                <p class="excerpt mrb-25" style="text-align: justify">--}}
{{--                                    InsureCow is a cattle wellbeing monitoring and insurance--}}
{{--                                    platform that is playing a significant role in protecting--}}
{{--                                    and ensuring the asset value of large cattle for livestock--}}
{{--                                    farmers.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Project Section End -->

<section
    class="about-section anim-object pdt-110 pdb-110 pdb-lg-110"
    data-background="images/bg/abs-bg3.png"
>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-10 col-xl-6">
                <h5 class="side-line-left text-primary-color mrb-10">
                    Achievements & Partners
                </h5>
                <h3 class="mrb-35">Our Prominent Partners</h3>
                <div class="row no-gutters mrb-15">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="featured-icon-box mrb-10">
                            <div class="featured-icon">
                                <i class="webexflaticon flaticon-employee-2"></i>
                            </div>
                            <div class="featured-content">
                                <h4 class="featured-title">AWS</h4>
                                <p class="featured-desc" style="text-align: justify">
                                    Amazon Web Services, Inc. is a subsidiary of Amazon that
                                    provides on-demand cloud computing platforms and APIs to
                                    individuals and companies
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="featured-icon-box mrb-10">
                      <div class="featured-icon">
                        <i class="webexflaticon flaticon-employee-2"></i>
                      </div>
                      <div class="featured-content">
                        <h4 class="featured-title">Barikoi</h4>
                        <p class="featured-desc">Barikoi is location data provider in Bangladesh that aims to provide reliable
                          location data in the local context.</p>
                      </div>
                    </div>
                  </div> -->

                    <h3 class="mrb-35">Achievements</h3>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="featured-icon-box mrb-10">
                            <div class="featured-icon">
                                <i class="webexflaticon flaticon-award"></i>
                            </div>
                            <div class="featured-content">
                                <h4 class="featured-title">iDEA Project Grant winner</h4>
                                <p class="featured-desc" style="text-align: justify">
                                    iDEA creates an Accelerator and its accompanying
                                    ecosystem.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="featured-icon-box">
                            <div class="featured-icon">
                                <i class="webexflaticon flaticon-award"></i>
                            </div>
                            <div class="featured-content">
                                <h4 class="featured-title">
                                    Blockchain Challenge Finalist
                                </h4>
                                <p class="featured-desc" style="text-align: justify">
                                    Proud to be selected to participate in the FT x Cardano
                                    Blockchain Challenge Finals.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-inline d-md-flex align-items-center mt-40 mrb-lg-60">
                    <!-- <div class="signature mrr-30 mrb-sm-30">
                                  <img src="images/about/signature.png" alt="">
                              </div>
                              <a href="page-about.html" class="cs-btn-one btn-primary-color btn-md btn-block mrb-sm-60">Read More</a> -->
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-6">
                <div class="about-image-box-style3 dot-circle mrb-lg-110 mrb-sm-0">
                    <img
                        class="about-image1 img-full js-tilt d-none d-md-block d-lg-block d-xl-block"
                        src="{{ asset('images/AWS Header Graphic.webp') }}"
                        alt=""
                    />
                    <img
                        class="about-image2 img-full"
                        src="{{asset('images/blockchain.jpg')}}"
                        alt=""
                    />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Area Start -->
<footer class="footer anim-object2">
    <div
        class="footer-main-area bg-cover pdb-lg-60"
        data-background="images/footer-bg.png"
    >
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="row footer-border-bottom mrb-40 mrr-60 mrr-md-0">
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="">
                                <img
                                    src="{{ asset('images/inf-logo.png') }}"
                                    alt=""
                                    class="footer-image d-block mr-auto img-fluid"
                                />
                                <p class="text-white mrb-25"></p>
                                <!-- <ul class="social-list">
                                <li>
                                  <a href="https://www.facebook.com/inflexionpointbangladesh/"><i class="fab fa-facebook-f"></i></a>
                                </li>

                                <li>
                                  <a href="https://www.linkedin.com/company/inflexionpoint-technologies-bd-ltd/"><i
                                      class="fab fa-linkedin"></i></a>
                                </li>
                              </ul> -->
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="widget footer-widget">
                                <h5 class="widget-title text-white mrb-30">Contact Us</h5>
                                <ul class="footer-widget-list">
                                    <div class="footer-contact-info mrb-md-30">
                                        <div class="contact-info-icon">
                                            <i class="webexflaticon flaticon-email-1"></i>
                                        </div>
                                        <div class="contact-info-text">
                                            <h5 class="text-white">Email</h5>
                                            <p class="mrb-0">
                                                <a
                                                    class="text-light-gray"
                                                    href="mailto:info@samak.com"
                                                >info@samak.com</a
                                                >
                                            </p>
                                        </div>
                                    </div>
                                    <div class="footer-contact-info mrb-md-30 mt-5">
                                        <div class="contact-info-icon">
                                            <i class="webexflaticon flaticon-call"></i>
                                        </div>
                                        <div class="contact-info-text">
                                            <h5 class="text-white">Phone</h5>
                                            <p class="mrb-0">
                                                <a class="text-light-gray" href="+880255013401-3"
                                                >+880255013401-3</a
                                                >
                                            </p>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3 col-md-12">
                            <div class="widget footer-widget">
                                <h5 class="widget-title text-white mrb-30">Useful Links</h5>
                                <ul class="footer-widget-list">
                                    <li><a href="./index.html">Home</a></li>
                                    <li><a href="./page-about.html">Platforms</a></li>
                                    <li><a href="./contact-us.html">Objectives</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom-area">
        <div class="container pdt-30 pdb-30">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center">
                <span class="text-light-gray"
                >Copyright by
                  <a
                      class="text-primary-color2"
                      target="_blank"
                      href="#"
                  >
                    Samak</a
                  >
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved
                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->
<!-- BACK TO TOP SECTION -->
<div class="back-to-top bg-primary-color">
    <i class="fab fa-angle-up"></i>
</div>
<!-- Integrated important scripts here -->
<script src="{{ asset('js/jquery.v1.12.4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery-core-plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{asset('js/lightzoom.js')}}"></script>
<script type="text/javascript">
    jQuery(".lightzoom").lightzoom({
        speed: 400,
        viewTitle: true,
        isOverlayClickClosing: false,
        isWindowClickClosing: true,
        isEscClosing: true,
    });
</script>
</body>
</html>
