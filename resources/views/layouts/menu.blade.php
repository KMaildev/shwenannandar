<div class="header-area">
    <div class="header-bottom-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header position-relative">
                        <!-- brand logo -->
                        <div class="header__logo top-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo/logo-dark.webp') }}" width="160" height="48"
                                    class="img-fluid" alt="">
                            </a>
                        </div>

                        <div class="header-right flexible-image-slider-wrap">
                            <div class="header-right-inner" id="hidden-icon-wrapper">
                                <!-- Header Top Info -->
                                <div class="swiper-container header-top-info-slider-werap top-info-slider__container">
                                    <div class="swiper-wrapper header-top-info-inner default-color">
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-phone"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">0122 8899900</h6>
                                                    <div class="info-sub-title">Info@example.com</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-map-marker-alt"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">219 Amara Fort Apt. 394</h6>
                                                    <div class="info-sub-title">New York, NY 941</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-clock"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">8:00AM - 6:00PM</h6>
                                                    <div class="info-sub-title">Monday to Saturday</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-comment-alt-lines"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">Online 24/7</h6>
                                                    <div class="info-sub-title">+122 123 4567</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Header Social Networks -->
                                <div class="header-social-networks style-icons">
                                    <div class="inner">
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Twitter"
                                            href="https://twitter.com/" data-hover="Twitter" target="_blank">
                                            <i class="social-icon fab fa-twitter"></i>
                                        </a>
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Facebook"
                                            href="https://facebook.com/" data-hover="Facebook" target="_blank">
                                            <i class="social-icon fab fa-facebook-f"></i>
                                        </a>
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Instagram"
                                            href="https://instagram.com/" data-hover="Instagram" target="_blank">
                                            <i class="social-icon fab fa-instagram"></i>
                                        </a>
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Linkedin"
                                            href="https://linkedin.com/" data-hover="Linkedin" target="_blank">
                                            <i class="social-icon fab fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <!-- mobile menu -->
                            <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                            <!-- hidden icons menu -->
                            <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                <a href="javascript:void(0)">
                                    <i class="far fa-ellipsis-h-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom-wrap bg-theme-default d-md-block d-none header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-bottom-inner position-relative">
                            <div class="header-bottom-left-wrap">
                                <!-- navigation menu -->
                                <div class="header__navigation d-none d-xl-block">
                                    <nav class="navigation-menu navigation-menu--text_white">

                                        <ul>
                                            <li class="">
                                                <a href="{{ route('home') }}">
                                                    Home
                                                </a>
                                            </li>


                                            <li class="has-children has-children--multilevel-submenu">
                                                <a href="#">
                                                    About Of Our Company
                                                </a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a href="contact-us.html">
                                                            Company Overview
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact-us.html">
                                                            Directors' Message
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact-us.html">
                                                            Vision, Mission & Values
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact-us.html">
                                                            Our Teams
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact-us.html">
                                                            Our Organization Chart
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="has-children has-children--multilevel-submenu">
                                                <a href="#">
                                                    Sending Country
                                                </a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a href="contact-us.html">
                                                            Singapore
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="">
                                                <a href="{{ route('recruitment.index') }}">
                                                    Recruitment Process
                                                </a>
                                            </li>

                                            <li class="">
                                                <a href="{{ route('cv.index') }}">
                                                    Submit CV
                                                </a>
                                            </li>

                                            <li class="">
                                                <a href="{{ route('employer.index') }}">
                                                    Employer Form
                                                </a>
                                            </li>

                                            <li class="">
                                                <a href="{{ route('activities.index') }}">
                                                    Activities
                                                </a>
                                            </li>

                                            <li class="">
                                                <a href="{{ route('contact.index') }}">
                                                    Contact Us
                                                </a>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
