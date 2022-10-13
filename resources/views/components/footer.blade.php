<!-- Footer Area Start -->
<footer class="footer anim-object2">


    {{--  ------------------------------------------ Footer map image -------------------------------  --}}

    <div
        class="footer-main-area bg-cover pdb-lg-60"
        data-background=""
    >

        {{--  ------------------------------------------ Footer map image -------------------------------  --}}


        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="row footer-border-bottom mrb-40 mrr-60 mrr-md-0">
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="">
                                <img src="{{ asset('images/logo.jpeg') }}" alt="" class="mrb-25">
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
                                                    href="{{ \App\Contact::first()->email ?? 'No Info' }}"
                                                >{{ \App\Contact::first()->email ?? 'No Info' }}</a
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
                                                <a class="text-light-gray"
                                                   href="{{ \App\Contact::first()->phone ?? 'No Info' }}"
                                                >{{ \App\Contact::first()->phone ?? 'No Info' }}</a
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
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Platforms</a></li>
                                    <li><a href="#">Ecosystems</a></li>
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
                    Samak Technologies</a
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
