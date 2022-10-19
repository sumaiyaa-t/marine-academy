<!-- Preloader Start -->
{{-- <section>
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="S" class="letters-loading"> S </span>

                    <span data-text-preloader="A" class="letters-loading"> A </span>

                    <span data-text-preloader="M" class="letters-loading"> M </span>

                    <span data-text-preloader="A" class="letters-loading"> A </span>

                    <span data-text-preloader="K" class="letters-loading"> K </span>

                    <!-- <span data-text-preloader="X" class="letters-loading"> X </span>

                    <span data-text-preloader="I" class="letters-loading"> I </span>
                    <span data-text-preloader="O" class="letters-loading"> O </span>
                    <span data-text-preloader="N" class="letters-loading"> N </span> -->
                </div>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
</section> --}}
<!-- Preloader End -->
<!-- header Start -->

<header class="header-style-two">
    <div class="header-wrapper">
        <div
            class="header-top-area bg-gradient-reverse-color d-none d-lg-block"
        >
            <div class="insuren-custom-container">
                <div class="row">
                    <div class="col-lg-6 header-top-left-part">
                <span class="address"
                ><i class="webexflaticon flaticon-call"></i>
                  {{ \App\Contact::first()->phone ?? 'No Info' }}</span
                >
                        <span class="phone"
                        ><i class="webexflaticon flaticon-send"></i
                            ><a href="{{ \App\Contact::first()->email ?? 'No Info' }}"
                            >{{ \App\Contact::first()->email ?? 'No Info' }}</a
                            ></span
                        >
                    </div>
                    <div class="col-lg-6 header-top-right-part text-end">
                        <ul class="social-links">
                            <li>
                                <a
                                    href="#"
                                ><i class="fab fa-linkedin-in"></i
                                    ></a>
                            </li>
                        </ul>
                        <div class="language">
                            <a class="language-btn" href="#"><i class="webexflaticon flaticon-internet"></i> English</a>
                            <ul class="language-dropdown">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Bangla</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-navigation-area two-layers-header">
            <div class="insuren-custom-container">
                <div class="row">
                    <div class="col-md-12">
                        {{--                        <a class="navbar-brand logo f-left mrt-10 mrt-md-0" href="#">--}}
                        <a class="navbar-brand logo f-left mrt-10 mrt-md-0" href="#">
                            <img id="logo-image" class="img-center" src="{{ asset('images/inf-logo.png') }}" alt=""
                                 style="width: 200px; height: 100px; margin-top: -30px">
                        </a>
                        <div class="mobile-menu-right"></div>
                        <div class="header-searchbox-style-two d-none d-xl-block">
                            <div
                                class="side-panel side-panel-trigger text-end d-none d-lg-block"
                            >
                                <span class="bar1"></span>
                                <span class="bar2"></span>
                                <span class="bar3"></span>
                            </div>
                        </div>
                        <div class="side-panel-content">
                            <div class="close-icon">
                                <button><i class="webex-icon-cross"></i></button>
                            </div>
                            <div class="side-panel-logo mrb-30">
                                <a href="index.html">
{{--                                    <img src="{{ asset('images/logo.jpeg') }}" alt=""/>--}}
                                </a>
                            </div>
                            <div class="side-info mrb-30">
                                <div class="side-panel-element mrb-25">
                                    <h4 class="mrb-10">Office Address</h4>
                                    <ul class="list-items">
                                        <li>
                          <span
                              class="fa fa-map-marker-alt mrr-10 text-primary-color"
                          ></span
                          >{{ \App\Contact::first()->address ?? 'No Info' }}
                                        </li>
                                        <li>
                          <span
                              class="fas fa-envelope mrr-10 text-primary-color"
                          ></span
                          ><a href="{{ \App\Contact::first()->email ?? 'No Info' }}"
                                            >{{ \App\Contact::first()->email ?? 'No Info' }}</a
                                            >
                                        </li>
                                        <li>
                          <span
                              class="fas fa-phone-alt mrr-10 text-primary-color"
                          ></span
                          ><a href="{{ \App\Contact::first()->phone ?? 'No Info' }}">{{ \App\Contact::first()->phone ?? 'No Info' }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu f-right">
                            <nav id="mobile-menu-right">
                                <ul>
                                    <li class="">
                                        <a href="{{ Illuminate\Support\Facades\URL::current() . "#home" }}">Home</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ Illuminate\Support\Facades\URL::current() . "#platform" }}">Features</a>
                                    </li>

                                    <li class="">
                                        <a href="{{ Illuminate\Support\Facades\URL::current() . "#service" }}">Services</a>
                                    </li>

                                    <li class="">
                                        <a href="{{ Illuminate\Support\Facades\URL::current() . "#ecosystem" }}">Courses</a>
                                    </li>

                                    <li class="">
                                        <a href="{{ Illuminate\Support\Facades\URL::current() . "#team" }}">Team</a>
                                    </li>

                                    <li><a href="{{ Illuminate\Support\Facades\URL::current() . "#contact" }}">Contact
                                            Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header End -->
