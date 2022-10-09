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

        @foreach($sliders as $slider)

            <div class="slide-item">
                <div class="image-layer" data-background="{{ asset('storage/'.$slider->image) }}"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-xl-8 col-lg-12 col-md-12 content-column">
                            <div class="content-box">
                                <h1 class="home-carousel-title">
                                    {{ $slider->title_en }}
                                </h1>
                                <p class="home-carousel-text">
                                    {!!  $slider->content_en !!}
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

                {{--            <div class="home-bottom-shape">--}}
                {{--                <img src="{{ asset('images/objects/home-bottom-shape.png') }}" alt="Image"/>--}}
                {{--            </div>--}}
                {{--            <div class="shape shape-1" data-speed="0.02" data-revert="true">--}}
                {{--                <img src="{{ asset('images/objects/4.png') }}" alt="Image"/>--}}
                {{--            </div>--}}
                {{--            <div class="shape shape-2" data-speed="0.04" data-revert="true">--}}
                {{--                <img class="js-tilt" src="{{ asset('images/objects/5.png') }}" alt="Image"/>--}}
                {{--            </div>--}}
            </div>


        @endforeach


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

                @foreach($missions as $mission)

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="features-item">
                            <div class="features-inner">
                                <div class="features-shape">
                                    <img src="{{ asset('images/objects/6.png') }}" alt=""/>
                                </div>
                                <div class="features-count"></div>
                                <i class="features-icon webexflaticon flaticon-target-3"></i>
                                <h4 class="features-title">{{ $mission->title_en }}</h4>
                                <p class="features-description" style="text-align: justify">
                                    {!! $mission->content_en !!}
                                </p>
                            </div>
                        </div>
                    </div>

                @endforeach


                {{--                <div class="col-xl-4 col-lg-4 col-md-6">--}}
                {{--                    <div class="features-item">--}}
                {{--                        <div class="features-inner">--}}
                {{--                            <div class="features-shape">--}}
                {{--                                <img src="{{ asset('images/objects/6.png') }}" alt=""/>--}}
                {{--                            </div>--}}
                {{--                            <div class="features-count"></div>--}}
                {{--                            <i class="features-icon webexflaticon flaticon-handshake"></i>--}}
                {{--                            <h4 class="features-title">Our Vision</h4>--}}
                {{--                            <p class="features-description" style="text-align: justify">--}}
                {{--                                To build an end-to-end technology-led ecosystem through--}}
                {{--                                customer-centric solutions to stimulate sustainable--}}
                {{--                                agriculture.--}}
                {{--                            </p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="col"></div>

            </div>
        </div>
    </div>
</section>
<!-- Features Section End -->


{{--@foreach($platforms as $platform)--}}

{{--    <!-- About Section Start -->--}}
{{--    <section--}}
{{--        class="about-section anim-object pdt-110 pdb-115 pdb-lg-110"--}}
{{--        data-background="images/bg/abs-bg3.png"--}}
{{--    >--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12 col-lg-8 col-xl-6">--}}
{{--                    <div class="about-image-box-style2 dot-circle mrr-60 mrr-lg-0">--}}
{{--                        <img--}}
{{--                            class="about-image1 img-full js-tilt d-none d-md-block d-lg-block d-xl-block"--}}
{{--                            src=""--}}
{{--                            alt=""--}}
{{--                        />--}}
{{--                        <img--}}
{{--                            class="about-image2 img-full"--}}
{{--                            src="{{ asset('storage/'. $platform->image) }}"--}}
{{--                            alt=""--}}
{{--                        />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-12 col-lg-10 col-xl-6">--}}
{{--                    <h5 class="side-line-left text-primary-color mrb-10">--}}
{{--                        {{ $platform->title_en }}--}}
{{--                    </h5>--}}
{{--                    <h2 class="mrb-35"></h2>--}}
{{--                    <p class="mrb-35" style="text-align: justify">--}}
{{--                       {{ $platform->content_en }}--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- About Section End -->--}}

{{--@endforeach--}}

@foreach($platforms as $platform)

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
                    <h2 class="text-white mrb-25"> {{ $platform->title_en }}</h2>
                    <div class="row">
                        <div class="col-xl-9">
                            <p class="text-white mrb-35" style="text-align: justify">
                                {{ $platform->content_en }}
                            </p>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
                <div
                    class="col-md-6 col-lg-6 col-xl-5 wow fadeInUp"
                    data-wow-delay="200ms"
                    data-wow-duration="800ms"
                >
                    <div class="company-img">
                        <img src="{{ asset('storage/'. $platform->image) }}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endforeach


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


                @foreach($teams as $team)
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="team-block mrb-30">
                            <div class="team-upper-part">
                                <img class="img-full" src="{{ asset('storage/'.$team->image) }}" alt="">
                            </div>
                            <div class="team-bottom-part">
                                <h4 class="team-title"><a href="page-single-team.html">{{ $team->title_en }}</a></h4>
                                <h6 class="designation">{{ $team->position_en }}</h6>
                            </div>
                            <div class="team-bottom-part-hover">
                                <h4 class="team-title"><a href="page-single-team.html">{{ $team->title_en }}</a></h4>
                                <h6 class="designation">{{ $team->position_en }}</h6>
                                <ul class="social-list list-sm">
                                    {{--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    {{--                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

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

                @foreach($counters as $counter)
                    <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
                        <div class="funfact mrb-60">
                            <div class="funfact-icon">
                                <span class="webexflaticon flaticon-briefcase-1"></span>
                            </div>
                            <div class="funfact-details">
                                <h2 class="counter">{!! $counter->content_en !!}</h2>
                                <h5 class="title">{{ $counter->title_en }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


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

                    @foreach($partners as $partner)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="featured-icon-box mrb-10">
                                <div class="featured-icon">
                                    <i class="webexflaticon flaticon-employee-2"></i>
                                </div>
                                <div class="featured-content">
                                    <h4 class="featured-title">{{ $partner->title_en }}</h4>
                                    <p class="featured-desc" style="text-align: justify">
                                        {{ $partner->content_en }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <h3 class="mrb-35">Achievements</h3>

                    @foreach($achievements as $achievement)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="featured-icon-box mrb-10">
                                <div class="featured-icon">
                                    <i class="webexflaticon flaticon-employee-2"></i>
                                </div>
                                <div class="featured-content">
                                    <h4 class="featured-title">{{ $achievement->title_en }}</h4>
                                    <p class="featured-desc" style="text-align: justify">
                                        {{ $achievement->content_en }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{--                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">--}}
                    {{--                        <div class="featured-icon-box">--}}
                    {{--                            <div class="featured-icon">--}}
                    {{--                                <i class="webexflaticon flaticon-award"></i>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="featured-content">--}}
                    {{--                                <h4 class="featured-title">--}}
                    {{--                                    Blockchain Challenge Finalist--}}
                    {{--                                </h4>--}}
                    {{--                                <p class="featured-desc" style="text-align: justify">--}}
                    {{--                                    Proud to be selected to participate in the FT x Cardano--}}
                    {{--                                    Blockchain Challenge Finals.--}}
                    {{--                                </p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

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


{{--------------------------------------------------- Footer Component ------------------------------------------------ --}}

<x-footer></x-footer>

{{--------------------------------------------------- Footer Component ------------------------------------------------ --}}

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
