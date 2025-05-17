@extends('layouts.app')

@section('content')
    <section id="slide" class="p-0">
        <div class="container-fluid p-0">
            @php
                $images = ['img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg'];
            @endphp

            <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach ($images as $index => $img)
                        <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="{{ $index }}"
                            @if ($index === 0) class="active" aria-current="true" @endif
                            aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>

                <div class="carousel-inner">
                    @foreach ($images as $index => $img)
                        <div class="carousel-item @if ($index === 0) active @endif">
                            <img src="{{ asset('images/' . $img) }}" class="d-block w-100 carousel-image" data-mask="40"
                                alt="Image {{ $index + 1 }}">
                        </div>
                    @endforeach
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container-fluid">
            <h3 class="text-center">Event blog</h3>
            <ul class="nav nav-pills mb-3 text-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-tab" data-bs-toggle="pill" data-bs-target="#all"
                        type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="social-tab" data-bs-toggle="pill" data-bs-target="#social" type="button"
                        role="tab" aria-controls="social" aria-selected="false">Social</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="event-tab" data-bs-toggle="pill" data-bs-target="#event" type="button"
                        role="tab" aria-controls="event" aria-selected="false">Event</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab"
                    tabindex="0">
                    <div class="row">
                        @foreach ($images as $index => $img)
                            <div class="col-md-3 py-2">
                                <img src="{{ asset('images/' . $img) }}" class="w-100 rounded" data-mask="40"
                                    alt="Image {{ $index + 1 }}">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab" tabindex="0">
                    <div class="row">
                        @foreach ($images as $index => $img)
                            <div class="col-md-3 py-2">
                                <img src="{{ asset('images/' . $img) }}" class="w-100 rounded" data-mask="40"
                                    alt="Image {{ $index + 1 }}">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="event" role="tabpanel" aria-labelledby="event-tab" tabindex="0">
                    <div class="row">
                        @foreach ($images as $index => $img)
                            <div class="col-md-3 py-2">
                                <img src="{{ asset('images/' . $img) }}" class="w-100 rounded" data-mask="40"
                                    alt="Image {{ $index + 1 }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="funfacts" class="section-2 odd counter funfacts">
        <video class="full-image to-bottom grayscale" data-mask="70" playsinline="" autoplay="" muted=""
            loop="">
            <source src="{{ asset('images/videos/city2.mp4') }}" type="video/mp4">
        </video>
        <div class="container">
            <div class="row mb-md-5 text-center">
                <div class="col-12">
                    <span class="pre-title">What are we doing</span>
                    <h2><span class="featured"><span>Results</span></span> in Numbers</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-3 item">
                    <div data-percent="128" class="radial"><canvas width="70" height="70"></canvas>
                        <span>128</span>
                    </div>
                    <h4>Certifications</h4>
                </div>
                <div class="col-12 col-md-6 col-lg-3 item">
                    <div data-percent="230" class="radial"><canvas width="70" height="70"></canvas>
                        <span>230</span>
                    </div>
                    <h4>Employees</h4>
                </div>
                <div class="col-12 col-md-6 col-lg-3 item">
                    <div data-percent="517" class="radial"><canvas width="70" height="70"></canvas>
                        <span>517</span>
                    </div>
                    <h4>Customers</h4>
                </div>
                <div class="col-12 col-md-6 col-lg-3 item">
                    <div data-percent="94" class="radial"><canvas width="70" height="70"></canvas>
                        <span>94</span>
                    </div>
                    <h4>Countries Served</h4>
                </div>
            </div>
        </div>
    </section>

    <section id="mission" style="background: #dfe6e9">
        <div class="container-fluid">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Mission</h2>
                <p class="text-muted">What drives us every day.</p>
            </div>
            <div class="row align-items-center px-5">
                <div class="col-md-7">
                    <ul class="list-unstyled">
                        <li class="d-flex mb-4">
                            <div class="me-3 text-primary fs-4">
                                <i class="bi bi-check-circle-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Customer-Centric Approach</h6>
                                <p class="text-muted mb-0">We prioritize our clients’ needs and deliver tailored solutions
                                    that drive success.</p>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <div class="me-3 text-success fs-4">
                                <i class="bi bi-lightbulb-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Innovation</h6>
                                <p class="text-muted mb-0">We embrace creativity and technology to solve modern challenges.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <div class="me-3 text-warning fs-4">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Integrity</h6>
                                <p class="text-muted mb-0">We operate with honesty, transparency, and ethical principles in
                                    everything we do.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 text-center bg">
                    <img src="{{ asset('images/img1.jpg') }}" class="img-fluid rounded shadow" alt="Our Mission Image">
                </div>
            </div>
        </div>
    </section>

    <section id="vision" style="background: #7ed6df">
        <div class="container-fluid">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Vision</h2>
                <p class="text-muted">Where we're going and what we aim to become.</p>
            </div>
            <div class="row align-items-center px-5">
                <div class="col-md-5 text-center">
                    <img src="{{ asset('images/img2.jpg') }}" class="img-fluid rounded shadow" alt="Our Vision Image">
                </div>
                <div class="col-md-7">
                    <ul class="list-unstyled">
                        <li class="d-flex mb-4">
                            <div class="me-3 text-primary fs-4">
                                <i class="bi bi-globe-americas"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Global Impact</h6>
                                <p class="text-muted mb-0">To become a global leader known for innovation, quality, and
                                    trust.</p>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <div class="me-3 text-success fs-4">
                                <i class="bi bi-speedometer2"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Excellence-Driven Growth</h6>
                                <p class="text-muted mb-0">We envision a future driven by performance, creativity, and
                                    excellence.</p>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <div class="me-3 text-warning fs-4">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Empowered Teams</h6>
                                <p class="text-muted mb-0">To build a culture where every team member is inspired to
                                    innovate and lead.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <style>
        @media all {
          

            .columns:last-child:not(:first-child) {
                float: left;
            }

            h2 {
                margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
            }

            h2 {
                margin: 0;
                padding: 0;
            }

            h2 {
                font-family: 'Noto Sans', sans-serif;
                font-weight: 300;
                font-style: normal;
                color: inherit;
                text-rendering: optimizeLegibility;
                margin-top: 0;
                margin-bottom: .5rem;
                line-height: 1.4;
            }

            h2 {
                font-size: 1.25rem;
            }
        }

        @media screen and (min-width: 40em) {
            h2 {
                font-size: 2.1875rem;
            }
        }

        @media all {
            h2 {
                font-family: '.';
                color: #39454b;
            }

            h2 {
                color: #39454b;
            }

            h2 {
                margin-bottom: 20px;
                line-height: 1.15;
            }

            .partunderline {
                margin-top: 30px;
            }

            .partunderline {
                position: relative;
                margin-bottom: 30px;
            }
        }

        .partunderline {
            padding-right: 4em;
        }

        @media all {
            .click-follow {
                cursor: pointer;
            }

            .box-panels .box-panel-inner {
                width: 50%;
                float: left;
                position: relative;
                cursor: pointer;
            }

            span {
                margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
            }

            span {
                font-family: 'Noto Sans', sans-serif;
                color: #435464;
            }

            .partunderline span.firstword {
                position: relative;
                font-size: inherit !important;
                color: #39454b !important;
                font-family: '.';
            }

            .partunderline span.firstword::after {
                content: '';
                width: 100%;
                height: 1px;
                background: #39454b;
                position: absolute;
                bottom: -12px;
                left: 0;
            }

            .box-panels .box-panel {
                position: relative;
                width: 50%;
                float: left;
            }

            .box-panels .left-box-arrow {
                transition: left .3s;
                width: 0;
                height: 0;
                border-top: 30px solid transparent;
                border-bottom: 30px solid transparent;
                border-right: 30px solid #fff;
                position: absolute;
                left: 50%;
                top: 50%;
                margin-top: -30px;
                margin-left: -15px;
                z-index: 1;
            }

            .box-panels .box-panel-inner:hover .left-box-arrow {
                left: 49%;
            }

            .box-panels .right-box-arrow {
                transition: left .3s;
                width: 0;
                height: 0;
                border-top: 30px solid transparent;
                border-bottom: 30px solid transparent;
                border-left: 30px solid #fff;
                position: absolute;
                left: 50%;
                top: 50%;
                margin-top: -30px;
                margin-left: -15px;
                z-index: 1;
            }

            .box-panels .box-panel-inner:hover .right-box-arrow {
                left: 51%;
            }

            .box-panels .box-panel .box-panel-image {
                position: relative;
            }

            .box-panel-content {
                color: #435464;
            }

            .box-panels .box-panel .box-panel-content {
                overflow: hidden;
                padding: 35px 30px 30px;
                z-index: 10;
            }

            img {
                margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
            }

            img {
                border: 0;
            }

            img {
                max-width: 100%;
                height: auto;
                -ms-interpolation-mode: bicubic;
                display: inline-block;
                vertical-align: middle;
            }

            .box-panels .box-panel .box-panel-image img {
                width: 100%;
            }

            .box-panels .box-panel .box-panel-image .box-title-overlay {
                transition: opacity .2s;
                position: absolute;
                background: rgba(51, 76, 94, .5);
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                text-align: center;
                padding-top: 31%;
            }

            .box-panels .box-panel-inner:hover .box-title-overlay {
                opacity: .9;
            }

            p {
                margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
            }

            p {
                margin: 0;
                padding: 0;
            }

            p {
                font-size: inherit;
                line-height: 1.6;
                margin-bottom: 1rem;
                text-rendering: optimizeLegibility;
            }

            p {
                font-family: 'Noto Sans', sans-serif;
                color: #435464;
            }

            p {
                font-weight: 300;
                font-size: 1rem;
            }

            .box-panel-content p {
                color: #415161;
                -webkit-font-smoothing: antialiased;
                line-height: 25px;
            }

            .box-panels .box-panel .box-panel-content .box-panel-text {
                font-size: 1rem;
                font-weight: 300;
                line-height: 1.5rem;
            }

            a {
                margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
            }

            a {
                background-color: transparent;
            }

            a {
                color: #ff0041;
                text-decoration: none;
                line-height: inherit;
                cursor: pointer;
            }

            a {
                font-family: 'Noto Sans', sans-serif;
                color: #435464;
            }

            a {
                font-weight: 400;
                color: #ff0041;
                -webkit-transition: all .3s;
                transition: all .3s;
            }

            .btn-hollow-red {
                transition: all .3s;
                text-transform: uppercase;
                border: #39454b 1px solid;
                color: #39454b !important;
                font-weight: 300;
                padding: 6px 9px;
                font-size: 1.1rem;
            }

            a:active,
            a:hover {
                outline: 0;
            }

            a:hover {
                color: #cd0000;
                text-decoration: none !important;
            }

            .btn-hollow-red:hover {
                color: #fff !important;
                background: #ff0041;
                border: 1px solid #ff0041;
            }

            .click-follow:hover .btn-hollow-red {
                color: #fff !important;
            }

            .box-panels .box-panel-inner:hover .btn-hollow-red {
                color: #fff !important;
                background: #ff0041;
            }

            .box-panel-inner.click-follow:hover .btn-hollow-red {
                border: 1px solid #ff0041;
            }

            .click-follow-booknow:hover .btn-hollow-red,
            .click-follow:hover .btn-hollow-red {
                color: #fff !important;
            }

            .box-panels .box-panel .box-panel-image .box-title-overlay .box-panel-title {
                font-size: 2.7rem;
                color: #fff;
                line-height: 4rem;
            }

            .box-panel .box-panel-image .box-title-overlay .box-panel-title {
                margin-top: 5px;
                font-size: 4rem;
                color: #fff;
                line-height: 4rem;
            }

            .box-panels .box-panel .box-panel-image .box-title-overlay .box-panel-subtitle {
                display: block;
                font-size: 1.6rem;
                color: #fff;
                line-height: 2rem;
            }

            .box-panel .box-panel-image .box-title-overlay .box-panel-subtitle {
                display: block;
                margin-top: 5px;
                font-size: 2rem;
                color: #fff;
                line-height: 2rem;
            }
        }
    </style>

    <div class="box-panels full-width show-for-medium snipcss-geIEy">
        <div class="row area_wrapper">
            <div class="columns small-24 text-center">
                <h2 class="partunderline">Why business with us</h2>
            </div>
            <div class="columns small-24">
                <div class="box-panel-inner click-follow">
                    <div class="box-panel ">
                        <div class="box-panel-image"><img
                                src="https://www.airarabia.com/sites/airarabia/files/Hubs_400x400px_2_0.jpg"
                                class=" ls-is-cached lazyloaded" alt="Image">
                            <div class="box-title-overlay"><span class="box-panel-title style-aCZo7" dir="LTR"
                                    id="style-aCZo7">06</span><span class="box-panel-subtitle style-8L273"
                                    id="style-8L273">HUBS</span></div>
                        </div>
                    </div>
                    <div class="left-box-arrow"></div>
                    <div class="box-panel ">
                        <div class="box-panel-content">
                            <p class="box-panel-text">We operate from Morocco, Egypt, Pakistan and Sharjah, Abu Dhabi, and
                                RAK in the UAE</p><a class="btn-hollow-red" href="/our-hubs">Find out more</a>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                </div>
                <div class="box-panel-inner click-follow">
                    <div class="box-panel ">
                        <div class="box-panel-image"><img
                                src="https://www.airarabia.com/sites/airarabia/files/aircrafts-new_5.jpg"
                                class=" ls-is-cached lazyloaded" alt="Image">
                            <div class="box-title-overlay"><span class="box-panel-title style-3EEkV" dir="LTR"
                                    id="style-3EEkV">83</span><span class="box-panel-subtitle style-rZNd7"
                                    id="style-rZNd7">AIRCRAFT</span></div>
                        </div>
                    </div>
                    <div class="left-box-arrow"></div>
                    <div class="box-panel ">
                        <div class="box-panel-content">
                            <p class="box-panel-text">We operate a total fleet of 74 Airbus A320 and 9 A321 Neo LR
                                Aircrafts. All aircraft cabin interiors are fitted with world-class comfort seats, offering
                                one of the most spacious economy cabin seat pitch.</p><a class="btn-hollow-red"
                                href="/fleet">Find out more</a>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                </div>
                <div class="box-panel-inner click-follow">
                    <div class="box-panel ">
                        <div class="box-panel-content">
                            <p class="box-panel-text">We offer comfort, reliability and value for money air travel across
                                our network in 50 countries. Our priority is to provide best possible connections to our
                                passengers at suitable timings</p><a class="btn-hollow-red"
                                href="/flights-to-countries">Find out more</a>
                        </div>
                    </div>
                    <div class="right-box-arrow"></div>
                    <div class="box-panel ">
                        <div class="box-panel-image"><img
                                src="https://www.airarabia.com/sites/airarabia/files/Routes_400x400px_1_0.jpg"
                                class=" ls-is-cached lazyloaded" alt="Image">
                            <div class="box-title-overlay"><span class="box-panel-title style-V6zzw" dir="LTR"
                                    id="style-V6zzw">50+</span><span class="box-panel-subtitle style-BUyhO"
                                    id="style-BUyhO">COUNTRIES</span></div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                </div>
                <div class="box-panel-inner click-follow">
                    <div class="box-panel ">
                        <div class="box-panel-content">
                            <p class="box-panel-text">We fly you to over 200 routes spread across the Middle East, North
                                Africa, Asia and Europe. </p><a class="btn-hollow-red" href="/destinations">Find out
                                more</a>
                        </div>
                    </div>
                    <div class="right-box-arrow"></div>
                    <div class="box-panel ">
                        <div class="box-panel-image"><img
                                src="https://www.airarabia.com/sites/airarabia/files/Destinations_400x400px_1_0.jpg"
                                class=" ls-is-cached lazyloaded" alt="Image">
                            <div class="box-title-overlay"><span class="box-panel-title style-cMYw9" dir="LTR"
                                    id="style-cMYw9">200+</span><span class="box-panel-subtitle style-OvTIq"
                                    id="style-OvTIq">ROUTES</span></div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
    </div>

    <section id="contact" style="background: whitesmoke;">
        <div class="container-fluid">
            <div class="text-center pb-2 mb-4">
                <h2 class="fw-bold">Send a message</h2>
            </div>
            <div class="row align-items-center px-5">
                <div class="col-md-6">
                    <h3 class="text-muted">Get in touch</h3>
                    <p class="text-muted">We will respond to your message as soon as possible.</p>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6 m-0 p-2">
                                <input type="text" name="name" class="form-control field-name" placeholder="Name">
                            </div>
                            <div class="col-md-6 m-0 p-2">
                                <input type="email" name="email" class="form-control field-email"
                                    placeholder="Email">
                            </div>
                            <div class="col-md-6 m-0 p-2">
                                <input type="text" name="phone" class="form-control field-phone"
                                    placeholder="Phone">
                            </div>
                            <div class="col-md-6 m-0 p-2">
                                <i class="icon-arrow-down mr-3"></i>
                                <select name="info" class="form-control field-info">
                                    <option value="" selected="" disabled="">More Info</option>
                                    <option>Audit &amp; Assurance</option>
                                    <option>Financial Advisory</option>
                                    <option>Analytics and M&amp;A</option>
                                    <option>Middle Marketing</option>
                                    <option>Legal Consulting</option>
                                    <option>Regulatory Risk</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="col-md-12 m-0 p-2">
                                <textarea name="message" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="d-grid gap-2 col-md-12 mx-auto px-2">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-envelope pe-2 fs-5"></i>
                                    Send email
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 ps-5">
                    <h3 class="text-muted">Supreme Global</h3>
                    <p class="text-muted">Company's contact information</p>

                    <div class="contacts">
                        <ul class="info">
                            <li class="item">
                                <i class="fas fa-phone-alt"></i>
                                +880 1322846601
                            </li>
                            <li class="item py-4">
                                <i class="fas fa-envelope"></i>
                                supremeglobalbd@gmail.com
                            </li>
                            <li class="item">
                                <i class="fas fa-map-marker-alt"></i>
                                Tropical Mollah Tower, Level 13th, 15/1-5 Pragati Sarani, Middle Badda, Dhaka-1212,
                                Bangladesh
                            </li>
                            <li class="item">
                                <a href="#" class="btn btn-success col-md-4 mt-5" data-bs-toggle="modal"
                                    data-bs-target="#map">View map</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Right Slide Modal -->
    <div class="modal fade" id="map" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-slide-right">
            <div class="modal-content h-100">

                <!-- Close Button (Top Right) -->
                <div class="modal-header border-0 justify-content-end">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                        Back <i class="fas fa-arrow-right ms-1"></i>
                    </button>
                </div>

                <!-- Fullscreen Map -->
                <div class="modal-body p-0 h-100">
                    <iframe src="https://www.google.com/maps?q=23.779395286290402,90.42576674365971&z=17&output=embed"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
