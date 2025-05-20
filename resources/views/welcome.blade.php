@extends('layouts.app')

@section('content')
    <section id="slide" class="p-0">
        <div class="container-fluid p-0">
            @php
                $images = [
                    'pho1.jpg',
                    'pho2.jpg',
                    'pho3.jpg',
                    'pho4.jpg',
                    // 'pho5.jpg',
                    // 'pho6.jpg',
                    // 'pho7.jpg',
                    // 'pho8.jpg',
                ];
            @endphp

            <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach ($images as $index => $img)
                        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="{{ $index }}"
                            @if ($index === 0) class="active" aria-current="true" @endif aria-current="true"
                            aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>

                <!-- Carousel Items -->
                <div class="carousel-inner">
                    @foreach ($images as $index => $img)
                        <div class="carousel-item @if ($index === 0) active @endif"
                            style="background-image: url({{ asset('images/' . $img) }});">
                            <div class="carousel-caption text-center text-white">
                                <h5>Slide Title One</h5>
                                <p>This is a description for slide one. Customize this text as needed.</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    {{-- <style>
            #projects .w-100 {
                height: 220px;
                object-fit: cover;
            }

            .hover-zoom img {
                transition: transform 0.3s ease;
            }

            .hover-zoom img:hover {
                transform: scale(1.05);
            }
        </style>

        <section id="projects">
            <div class="container-fluid">
                <h3 class="text-center">Sister concern</h3>
                <div class="row justify-content-start">
                    @foreach ($images as $index => $img)
                        <div class="col-md-3 py-2 hover-zoom">
                            <a href="">
                                <img src="{{ asset('images/' . $img) }}" class="w-100 rounded" data-mask="40"
                                    alt="Image {{ $index + 1 }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section> --}}

    <style>
        #projects .card-img-top {
            height: 220px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .hover-zoom:hover .card-img-top {
            transform: scale(1.05);
        }

        .card {
            border: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            height: 100%;
        }

        .card:hover {
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
        }

        .card-body {
            padding: 1rem 0.5rem;
        }

        .card-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.3rem;
        }

        .card-text {
            font-size: 0.9rem;
            color: #555;
        }
    </style>

    <section id="projects">
        <div class="container-fluid">
            <h3 class="text-center mb-4">Sister Concerns</h3>
            <div class="row">
                @foreach ($images as $index => $img)
                    <div class="col-md-3 py-2 d-flex">
                        <div class="card hover-zoom w-100">
                            <a href="#">
                                <img src="{{ asset('images/' . $img) }}" class="card-img-top rounded" alt="Image {{ $index + 1 }}">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">Company {{ $index + 1 }}</h5>
                                <p class="card-text">A short description about this sister concern, highlighting its role or industry.</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <style>
    #projects .hover-zoom {
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        will-change: transform;
    }

    #projects .hover-zoom:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        z-index: 2;
        position: relative;
    }

    #projects .card {
        border: none;
        height: 100%;
        overflow: hidden;
        border-radius: 12px;
    }

    #projects .card-img-top {
        height: 220px;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    #projects .card-body {
        padding: 1rem 0.5rem;
    }

    #projects .card-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 0.3rem;
    }

    #projects .card-text {
        font-size: 0.9rem;
        color: #555;
    }
</style>

<section id="projects">
    <div class="container-fluid">
        <h3 class="text-center mb-4">Sister Concerns</h3>
        <div class="row">
            @foreach ($images as $index => $img)
                <div class="col-md-3 py-2 d-flex">
                    <div class="card hover-zoom w-100">
                        <a href="#">
                            <img src="{{ asset('images/' . $img) }}" class="card-img-top rounded" alt="Image {{ $index + 1 }}">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Company {{ $index + 1 }}</h5>
                            <p class="card-text">A short description about this sister concern, highlighting its role or industry.</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>




    <style>
    #projects .image-card {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        height: 220px;
        transition: transform 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .image-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .image-card:hover img {
        transform: scale(1.1);
    }

    .image-overlay {
        position: absolute;
        bottom: 0;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
        width: 100%;
        padding: 10px;
        color: #fff;
        transition: opacity 0.4s ease;
        opacity: 0;
    }

    .image-card:hover .image-overlay {
        opacity: 1;
    }

    .image-title {
        font-size: 1rem;
        font-weight: 600;
    }

    .image-desc {
        font-size: 0.85rem;
    }
</style>

<section id="projects">
    <div class="container-fluid">
        <h3 class="text-center mb-4">Sister Concerns</h3>
        <div class="row">
            @foreach ($images as $index => $img)
                <div class="col-md-3 py-2">
                    <div class="image-card">
                        <img src="{{ asset('images/' . $img) }}" alt="Image {{ $index + 1 }}">
                        <div class="image-overlay text-center">
                            <div class="image-title">Company {{ $index + 1 }}</div>
                            <div class="image-desc">Short description or category here.</div>
                        </div>
                    </div>
                </div>
            @endforeach
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
                                <p class="text-muted mb-0">We prioritize our clients’ needs and deliver tailored
                                    solutions
                                    that drive success.</p>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <div class="me-3 text-success fs-4">
                                <i class="bi bi-lightbulb-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Innovation</h6>
                                <p class="text-muted mb-0">We embrace creativity and technology to solve modern
                                    challenges.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <div class="me-3 text-warning fs-4">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Integrity</h6>
                                <p class="text-muted mb-0">We operate with honesty, transparency, and ethical
                                    principles in
                                    everything we do.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 text-center bg">
                    <img src="{{ asset('images/mission.jpg') }}" class="img-fluid rounded shadow" alt="Our Mission Image">
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
                    <img src="{{ asset('images/vision.jpg') }}" class="img-fluid rounded shadow" alt="Our Vision Image">
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
        .wrapper {
            display: flex;
            margin: 0 auto;
            overflow: hidden;
            padding: 2.5rem;
            background: #ddd;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .client {
            animation: animate 25s alternate linear infinite;
        }

        .container:hover .client {
            animation-play-state: paused;
        }

        @keyframes animate {
            0% {
                transform: translate3d(0, 0, 0);
            }

            100% {
                transform: translate3d(-1100px, 0, 0);
            }
        }

        @media (max-width:767px) {
            .slider-area h2 {
                font-size: 30px;
            }

            .wrapper {
                width: 95%;
                border-radius: 0;
                padding: 0;
            }
        }
    </style>

    <section id="client" style="background: #9bafb0">
        <div class="container-fluid">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Clients</h2>
            </div>
            <div class="wrapper">
                <div class="client"><img alt="" src="{{ asset('images/img1.jpg') }}"></div>
                <div class="client"><img alt="" src="{{ asset('images/img2.jpg') }}"></div>
                <div class="client"><img alt="" src="{{ asset('images/img3.jpg') }}"></div>
                <div class="client"><img alt="" src="{{ asset('images/img4.jpg') }}"></div>
                <div class="client"><img alt="" src="{{ asset('images/img5.jpg') }}"></div>
            </div>
        </div>
    </section>

    <section id="contact" style="background: rgb(238, 218, 218);">
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
                            <div class="d-grid gap-2 col-md-12 mx-auto px-2 mt-2">
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

    <style>
        :root {
            --cl-anchor-font-weight: var(--cl-font-weight-p-link);
        }

        :root {
            --cl-text-font-size: var(--cl-font-size-p-medium);
            --cl-text-font-weight: var(--cl-font-weight-p-medium);
            --cl-text-line-height: var(--cl-line-height-p-medium);
            --cl-text-letter-spacing: var(--cl-letter-spacing-p-medium, normal);
        }

        :root {
            --cl-text-font-size: var(--cl-font-size-p-medium);
            --cl-text-font-weight: var(--cl-font-weight-p-medium);
            --cl-text-line-height: var(--cl-line-height-p-medium);
            --cl-text-letter-spacing: var(--cl-letter-spacing-p-medium, normal);
        }

        :root {
            --light-theme-hubspot-brand-01: #ff5c35;
            --dark-theme-hubspot-brand-01: #ff5c35;
            --light-theme-text-placeholder-01: #516f90;
            --dark-theme-text-placeholder-01: #99afc4;
            --dark-theme-text-01: #fff;
            --light-theme-text-01: #213343;
            --dark-theme-text-02: #b6c7d6;
            --light-theme-text-02: #2e475d;
            --dark-theme-text-brand-01: #ff5c35;
            --light-theme-text-brand-01: #ff5c35;
            --light-theme-text-on-color-01: #fff;
            --dark-theme-text-on-color-01: #192733;
            --light-theme-link-01: #0068b1;
            --dark-theme-link-01: #5fa3d4;
            --light-theme-link-02: #213343;
            --dark-theme-link-02: #fff;
            --light-theme-icon-01: #213343;
            --dark-theme-icon-01: #fff;
            --light-theme-icon-02: #516f90;
            --dark-theme-icon-02: #b6c7d6;
            --light-theme-icon-on-color-01: #fff;
            --dark-theme-icon-on-color-01: #192733;
            --light-theme-background-01: #fff;
            --dark-theme-background-01: #192733;
            --light-theme-background-02: #f6f9fc;
            --dark-theme-background-02: #213343;
            --light-theme-background-03: #fef4ea;
            --dark-theme-background-03: #213343;
            --light-theme-background-footer-01: #192733;
            --dark-theme-background-footer-01: #192733;
            --light-theme-container-01: #fff;
            --dark-theme-container-01: #192733;
            --light-theme-container-02: #f6f9fc;
            --dark-theme-container-02: #213343;
            --light-theme-container-03: #eaf0f6;
            --dark-theme-container-03: #2e475d;
            --light-theme-container-inverse-01: #192733;
            --dark-theme-container-inverse-01: #fff;
            --dark-theme-border-highlight-01: #fff;
            --light-theme-border-highlight-01: #0068b1;
            --light-theme-border-01: #192733;
            --dark-theme-border-01: #fff;
            --light-theme-border-02: #7691ad;
            --dark-theme-border-02: #7691ad;
            --light-theme-border-03: #dbe4ed;
            --dark-theme-border-03: #3e5974;
            --light-theme-border-brand-01: #ff5c35;
            --dark-theme-border-brand-01: #ff5c35;
            --dark-theme-divider-01: #3e5974;
            --light-theme-divider-01: #dbe4ed;
            --light-theme-error-01: #cf2738;
            --dark-theme-error-01: #f7818c;
            --dark-theme-beta-01: #8589e0;
            --light-theme-beta-01: #5c62d6;
            --dark-theme-success-01: #4fb06d;
            --light-theme-success-01: #1f7d3d;
            --light-theme-free-01: #0b8f8f;
            --dark-theme-free-01: #0fbfbf;
            --light-theme-free-background-01: #b7ecec;
            --light-theme-beta-background-01: #ced0f3;
            --dark-theme-pressed-inverse-01: #99afc4;
            --light-theme-pressed-inverse-01: #3e5974;
            --light-theme-pressed-01: #b6c7d6;
            --dark-theme-pressed-01: #3e5974;
            --light-theme-hover-link-01: #005fa3;
            --light-theme-pressed-02: #b6c7d6;
            --dark-theme-hover-link-01: #88bde3;
            --dark-theme-pressed-02: #3e5974;
            --light-theme-hover-link-02: #2e475d;
            --light-theme-pressed-03: #99afc4;
            --dark-theme-hover-link-02: #b6c7d6;
            --dark-theme-pressed-03: #516f90;
            --light-theme-hover-inverse-01: #2e475d;
            --dark-theme-hover-inverse-01: #b6c7d6;
            --light-theme-hover-01: #eaf0f6;
            --light-theme-pressed-brand-01: #b3361d;
            --dark-theme-hover-01: #2e475d;
            --dark-theme-pressed-brand-01: #b3361d;
            --light-theme-pressed-link-01: #005896;
            --light-theme-hover-02: #eaf0f6;
            --dark-theme-hover-02: #2e475d;
            --dark-theme-pressed-link-01: #9ec8e6;
            --light-theme-pressed-link-02: #516f90;
            --light-theme-hover-03: #b6c7d6;
            --dark-theme-hover-03: #3e5974;
            --dark-theme-pressed-link-02: #99afc4;
            --light-theme-hover-brand-01: #e04826;
            --dark-theme-hover-brand-01: #e04826;
            --light-theme-disabled-01: #99afc4;
            --dark-theme-disabled-01: #607d9c;
            --light-theme-disabled-02: #eaf0f6;
            --dark-theme-disabled-02: #2e475d;
            --light-theme-disabled-03: #dbe4ed;
            --dark-theme-disabled-03: #3e5974;
            --light-theme-focus-01: #0068b1;
            --dark-theme-focus-01: #5fa3d4;
        }

        :root {
            --light-theme-accent-fill-01: #eaf0f6;
            --light-theme-accent-fill-02: #ffdbc1;
            --light-theme-accent-fill-03: #ffd9dd;
            --light-theme-accent-fill-04: #daf2e2;
            --light-theme-accent-fill-05: #ffebc9;
            --light-theme-accent-fill-06: #e1e2fa;
            --light-theme-accent-fill-07: #cef2f2;
            --light-theme-accent-fill-08: #fadcf2;
            --light-theme-accent-decoration-01: #607d9c;
            --light-theme-accent-decoration-02: #ff8933;
            --light-theme-accent-decoration-03: #ed2d40;
            --light-theme-accent-decoration-04: #2a8c49;
            --light-theme-accent-decoration-05: #ffbc4b;
            --light-theme-accent-decoration-06: #5c62d6;
            --light-theme-accent-decoration-07: #0fbfbf;
            --light-theme-accent-decoration-08: #bd138d;
            --light-theme-background-01: #fff;
            --light-theme-background-02: #f6f9fc;
            --light-theme-background-03: #fef4ea;
            --light-theme-background-accent-01: #b7ecec;
            --light-theme-background-accent-02: #ff8933;
            --light-theme-background-footer-01: #192733;
            --light-theme-badge-brand-fill-01: #ffebe6;
            --light-theme-beta-01: #5c62d6;
            --light-theme-beta-background-01: #ced0f3;
            --light-theme-border-01: #192733;
            --light-theme-border-02: #7691ad;
            --light-theme-border-03: #dbe4ed;
            --light-theme-border-brand-01: #ff5c35;
            --light-theme-border-highlight-01: #0068b1;
            --light-theme-button-primary-fill-idle: #ff5c35;
            --light-theme-button-primary-fill-hover: #e04826;
            --light-theme-button-primary-fill-pressed: #b3361d;
            --light-theme-button-secondary-border: #ff5c35;
            --light-theme-button-secondary-fill-idle: #fff;
            --light-theme-button-secondary-fill-hover: #ffebe6;
            --light-theme-button-secondary-fill-pressed: #ffcec2;
            --light-theme-button-tertiary-fill-idle: #192733;
            --light-theme-button-tertiary-fill-hover: #2e475d;
            --light-theme-button-tertiary-fill-pressed: #3e5974;
            --light-theme-container-01: #fff;
            --light-theme-container-02: #f6f9fc;
            --light-theme-container-03: #eaf0f6;
            --light-theme-container-inverse-01: #192733;
            --light-theme-disabled-01: #99afc4;
            --light-theme-disabled-02: #eaf0f6;
            --light-theme-disabled-03: #dbe4ed;
            --light-theme-divider-01: #dbe4ed;
            --light-theme-error-01: #cf2738;
            --light-theme-error-background-01: #ffd9dd;
            --light-theme-focus-01: #0068b1;
            --light-theme-free-01: #0b8484;
            --light-theme-free-background-01: #b7ecec;
            --light-theme-hover-01: #eaf0f6;
            --light-theme-hover-02: #eaf0f6;
            --light-theme-hover-03: #b6c7d6;
            --light-theme-hover-brand-01: #e04826;
            --light-theme-hover-inverse-01: #2e475d;
            --light-theme-hover-link-01: #005fa3;
            --light-theme-hover-link-02: #2e475d;
            --light-theme-hubspot-brand-01: #ff5c35;
            --light-theme-icon-01: #213343;
            --light-theme-icon-02: #516f90;
            --light-theme-icon-on-color-01: #fff;
            --light-theme-link-01: #0068b1;
            --light-theme-link-02: #213343;
            --light-theme-loading-primary-fill-active: #ff5c35;
            --light-theme-loading-primary-fill-inactive: #ffcec2;
            --light-theme-loading-secondary-fill-active: #192733;
            --light-theme-loading-secondary-fill-inactive: #7691ad;
            --light-theme-number-fill-active: #ff5c35;
            --light-theme-number-fill-inactive: #ffcec2;
            --light-theme-number-fill-statistic: #ff5c35;
            --light-theme-overlay-01: rgba(33, 51, 67, .804);
            --light-theme-play-button-fill-idle: #ff5c35;
            --light-theme-play-button-fill-hover: #e04826;
            --light-theme-play-button-fill-pressed: #b3361d;
            --light-theme-pressed-01: #b6c7d6;
            --light-theme-pressed-02: #b6c7d6;
            --light-theme-pressed-03: #99afc4;
            --light-theme-pressed-brand-01: #b3361d;
            --light-theme-pressed-inverse-01: #3e5974;
            --light-theme-pressed-link-01: #005896;
            --light-theme-pressed-link-02: #516f90;
            --light-theme-success-01: #1f7d3d;
            --light-theme-success-background-01: #daf2e2;
            --light-theme-text-01: #213343;
            --light-theme-text-02: #2e475d;
            --light-theme-text-brand-01: #ff5c35;
            --light-theme-text-link-underline-01: currentColor;
            --light-theme-text-on-color-01: #fff;
            --light-theme-text-placeholder-01: #516f90;
            --dark-theme-accent-fill-01: #192733;
            --dark-theme-accent-fill-02: #733000;
            --dark-theme-accent-fill-03: #821923;
            --dark-theme-accent-fill-04: #104d23;
            --dark-theme-accent-fill-05: #663a00;
            --dark-theme-accent-fill-06: #34388c;
            --dark-theme-accent-fill-07: #054d4d;
            --dark-theme-accent-fill-08: #850d63;
            --dark-theme-accent-decoration-01: #607d9c;
            --dark-theme-accent-decoration-02: #ff8933;
            --dark-theme-accent-decoration-03: #ed2d40;
            --dark-theme-accent-decoration-04: #2a8c49;
            --dark-theme-accent-decoration-05: #ffbc4b;
            --dark-theme-accent-decoration-06: #5c62d6;
            --dark-theme-accent-decoration-07: #0fbfbf;
            --dark-theme-accent-decoration-08: #bd138d;
            --dark-theme-background-01: #192733;
            --dark-theme-background-02: #213343;
            --dark-theme-background-03: #213343;
            --dark-theme-background-accent-01: #2e475d;
            --dark-theme-background-accent-02: #5c62d6;
            --dark-theme-background-footer-01: #192733;
            --dark-theme-badge-brand-fill-01: #213343;
            --dark-theme-beta-01: #8589e0;
            --dark-theme-beta-background-01: #213343;
            --dark-theme-border-01: #fff;
            --dark-theme-border-02: #7691ad;
            --dark-theme-border-03: #3e5974;
            --dark-theme-border-brand-01: #ff5c35;
            --dark-theme-border-highlight-01: #fff;
            --dark-theme-button-primary-fill-idle: #fff;
            --dark-theme-button-primary-fill-hover: #b6c7d6;
            --dark-theme-button-primary-fill-pressed: #99afc4;
            --dark-theme-button-secondary-border: #fff;
            --dark-theme-button-secondary-fill-idle: #192733;
            --dark-theme-button-secondary-fill-hover: #2e475d;
            --dark-theme-button-secondary-fill-pressed: #3e5974;
            --dark-theme-button-tertiary-fill-idle: #fff;
            --dark-theme-button-tertiary-fill-hover: #b6c7d6;
            --dark-theme-button-tertiary-fill-pressed: #99afc4;
            --dark-theme-container-01: #192733;
            --dark-theme-container-02: #213343;
            --dark-theme-container-03: #2e475d;
            --dark-theme-container-inverse-01: #fff;
            --dark-theme-disabled-01: #607d9c;
            --dark-theme-disabled-02: #2e475d;
            --dark-theme-disabled-03: #3e5974;
            --dark-theme-divider-01: #3e5974;
            --dark-theme-error-01: #f7818c;
            --dark-theme-error-background-01: #213343;
            --dark-theme-focus-01: #5fa3d4;
            --dark-theme-free-01: #0fbfbf;
            --dark-theme-free-background-01: #213343;
            --dark-theme-hover-01: #2e475d;
            --dark-theme-hover-02: #2e475d;
            --dark-theme-hover-03: #3e5974;
            --dark-theme-hover-brand-01: #e04826;
            --dark-theme-hover-inverse-01: #b6c7d6;
            --dark-theme-hover-link-01: #88bde3;
            --dark-theme-hover-link-02: #b6c7d6;
            --dark-theme-hubspot-brand-01: #ff5c35;
            --dark-theme-icon-01: #fff;
            --dark-theme-icon-02: #b6c7d6;
            --dark-theme-icon-on-color-01: #192733;
            --dark-theme-link-01: #5fa3d4;
            --dark-theme-link-02: #fff;
            --dark-theme-loading-primary-fill-active: #ff5c35;
            --dark-theme-loading-primary-fill-inactive: #ffcec2;
            --dark-theme-loading-secondary-fill-active: #fff;
            --dark-theme-loading-secondary-fill-inactive: #7691ad;
            --dark-theme-number-fill-active: #ff5c35;
            --dark-theme-number-fill-inactive: #ffcec2;
            --dark-theme-number-fill-statistic: #ffa994;
            --dark-theme-overlay-01: rgba(33, 51, 67, .804);
            --dark-theme-play-button-fill-idle: #ff5c35;
            --dark-theme-play-button-fill-hover: #e04826;
            --dark-theme-play-button-fill-pressed: #b3361d;
            --dark-theme-pressed-01: #3e5974;
            --dark-theme-pressed-02: #3e5974;
            --dark-theme-pressed-03: #516f90;
            --dark-theme-pressed-brand-01: #b3361d;
            --dark-theme-pressed-inverse-01: #99afc4;
            --dark-theme-pressed-link-01: #9ec8e6;
            --dark-theme-pressed-link-02: #99afc4;
            --dark-theme-success-01: #4fb06d;
            --dark-theme-success-background-01: #213343;
            --dark-theme-text-01: #fff;
            --dark-theme-text-02: #b6c7d6;
            --dark-theme-text-brand-01: #ff5c35;
            --dark-theme-text-link-underline-01: currentColor;
            --dark-theme-text-on-color-01: #192733;
            --dark-theme-text-placeholder-01: #99afc4;
            --cl-font-family: "Lexend Deca", sans-serif;
            --cl-font-family-heading: var(--cl-font-family);
            --cl-font-size-small: 0.875rem;
            --cl-font-size-medium: 1rem;
            --cl-font-size-large: 1.125rem;
            --cl-font-size-micro: 0.75rem;
            --cl-font-size-h2: 1.625rem;
            --cl-font-size-h4: 1.375rem;
            --cl-font-size-input-label: var(--cl-font-size-small);
            --cl-font-size-microcopy: var(--cl-font-size-micro);
            --cl-font-size-microheading: var(--cl-font-size-small);
            --cl-font-size-p-large: var(--cl-font-size-large);
            --cl-font-size-p-medium: var(--cl-font-size-medium);
            --cl-font-size-p-small: var(--cl-font-size-small);
            --cl-font-weight-light: 300;
            --cl-font-weight-medium: 500;
            --cl-font-weight-demi-bold: 600;
            --cl-font-weight-blockquote: var(--cl-font-weight-light);
            --cl-font-weight-display-01: var(--cl-font-weight-medium);
            --cl-font-weight-display-01-small: var(--cl-font-weight-medium);
            --cl-font-weight-display-02: var(--cl-font-weight-medium);
            --cl-font-weight-display-02-small: var(--cl-font-weight-medium);
            --cl-font-weight-display-03: var(--cl-font-weight-medium);
            --cl-font-weight-display-03-small: var(--cl-font-weight-medium);
            --cl-font-weight-h1: var(--cl-font-weight-demi-bold);
            --cl-font-weight-h1-small: var(--cl-font-weight-demi-bold);
            --cl-font-weight-h2: var(--cl-font-weight-demi-bold);
            --cl-font-weight-h2-small: var(--cl-font-weight-demi-bold);
            --cl-font-weight-h3: var(--cl-font-weight-medium);
            --cl-font-weight-h4: var(--cl-font-weight-medium);
            --cl-font-weight-h5: var(--cl-font-weight-demi-bold);
            --cl-font-weight-h6: var(--cl-font-weight-medium);
            --cl-font-weight-input-label: var(--cl-font-weight-medium);
            --cl-font-weight-microcopy: var(--cl-font-weight-medium);
            --cl-font-weight-microheading: var(--cl-font-weight-demi-bold);
            --cl-font-weight-p-large: var(--cl-font-weight-light);
            --cl-font-weight-p-medium: var(--cl-font-weight-light);
            --cl-font-weight-p-small: var(--cl-font-weight-light);
            --cl-font-weight-p-link: var(--cl-font-weight-medium);
            --cl-line-height-small: 1.57142857;
            --cl-line-height-medium: 1.75;
            --cl-line-height-large: 1.77777778;
            --cl-line-height-h2: 1.38;
            --cl-line-height-h4: 1.45454545;
            --cl-line-height-input-label: var(--cl-line-height-small);
            --cl-line-height-microcopy: 1.66666667;
            --cl-line-height-p-large: var(--cl-line-height-large);
            --cl-line-height-p-medium: var(--cl-line-height-medium);
            --cl-line-height-p-small: var(--cl-line-height-small);
            --cl-text-margin-medium: 1rem;
            --cl-text-margin-small: 0.5rem;
        }

        [data-cl-theme] {
            --cl-anchor-color: var(--cl-color-link-01);
            --cl-anchor-hover-color: var(--cl-color-hover-link-01);
            --cl-anchor-pressed-color: var(--cl-color-pressed-link-01);
            --cl-text-color: var(--cl-color-text-01);
        }

        [data-cl-theme] {
            color: var(--cl-text-color);
        }

        [data-cl-background] {
            background: var(--cl-background, var(--cl-color-background-01));
        }

        [data-cl-background="background-footer-01"] {
            --cl-background: var(--cl-color-background-footer-01);
        }

        .hsg-footer {
            padding: 0 0 2rem;
            transition: all .3s ease;
        }

        @media (width >=900px) {
            .hsg-footer {
                padding: 3rem 2rem;
            }
        }

        [data-cl-background] {
            background: var(--cl-background, var(--cl-color-background-01));
        }

        :root [data-cl-theme="dark"] {
            --cl-color-accent-fill-01: var(--dark-theme-accent-fill-01);
            --cl-color-accent-fill-02: var(--dark-theme-accent-fill-02);
            --cl-color-accent-fill-03: var(--dark-theme-accent-fill-03);
            --cl-color-accent-fill-04: var(--dark-theme-accent-fill-04);
            --cl-color-accent-fill-05: var(--dark-theme-accent-fill-05);
            --cl-color-accent-fill-06: var(--dark-theme-accent-fill-06);
            --cl-color-accent-fill-07: var(--dark-theme-accent-fill-07);
            --cl-color-accent-fill-08: var(--dark-theme-accent-fill-08);
            --cl-color-accent-decoration-01: var(--dark-theme-accent-decoration-01);
            --cl-color-accent-decoration-02: var(--dark-theme-accent-decoration-02);
            --cl-color-accent-decoration-03: var(--dark-theme-accent-decoration-03);
            --cl-color-accent-decoration-04: var(--dark-theme-accent-decoration-04);
            --cl-color-accent-decoration-05: var(--dark-theme-accent-decoration-05);
            --cl-color-accent-decoration-06: var(--dark-theme-accent-decoration-06);
            --cl-color-accent-decoration-07: var(--dark-theme-accent-decoration-07);
            --cl-color-accent-decoration-08: var(--dark-theme-accent-decoration-08);
            --cl-color-background-01: var(--dark-theme-background-01);
            --cl-color-background-02: var(--dark-theme-background-02);
            --cl-color-background-03: var(--dark-theme-background-03);
            --cl-color-background-accent-01: var(--dark-theme-background-accent-01);
            --cl-color-background-accent-02: var(--dark-theme-background-accent-02);
            --cl-color-background-footer-01: var(--dark-theme-background-footer-01);
            --cl-color-badge-brand-fill-01: var(--dark-theme-badge-brand-fill-01);
            --cl-color-beta-01: var(--dark-theme-beta-01);
            --cl-color-beta-background-01: var(--dark-theme-beta-background-01);
            --cl-color-border-01: var(--dark-theme-border-01);
            --cl-color-border-02: var(--dark-theme-border-02);
            --cl-color-border-03: var(--dark-theme-border-03);
            --cl-color-border-brand-01: var(--dark-theme-border-brand-01);
            --cl-color-border-highlight-01: var(--dark-theme-border-highlight-01);
            --cl-color-button-primary-fill-idle: var(--dark-theme-button-primary-fill-idle);
            --cl-color-button-primary-fill-hover: var(--dark-theme-button-primary-fill-hover);
            --cl-color-button-primary-fill-pressed: var(--dark-theme-button-primary-fill-pressed);
            --cl-color-button-secondary-border: var(--dark-theme-button-secondary-border);
            --cl-color-button-secondary-fill-idle: var(--dark-theme-button-secondary-fill-idle);
            --cl-color-button-secondary-fill-hover: var(--dark-theme-button-secondary-fill-hover);
            --cl-color-button-secondary-fill-pressed: var(--dark-theme-button-secondary-fill-pressed);
            --cl-color-button-tertiary-fill-idle: var(--dark-theme-button-tertiary-fill-idle);
            --cl-color-button-tertiary-fill-hover: var(--dark-theme-button-tertiary-fill-hover);
            --cl-color-button-tertiary-fill-pressed: var(--dark-theme-button-tertiary-fill-pressed);
            --cl-color-container-01: var(--dark-theme-container-01);
            --cl-color-container-02: var(--dark-theme-container-02);
            --cl-color-container-03: var(--dark-theme-container-03);
            --cl-color-container-inverse-01: var(--dark-theme-container-inverse-01);
            --cl-color-disabled-01: var(--dark-theme-disabled-01);
            --cl-color-disabled-02: var(--dark-theme-disabled-02);
            --cl-color-disabled-03: var(--dark-theme-disabled-03);
            --cl-color-divider-01: var(--dark-theme-divider-01);
            --cl-color-error-01: var(--dark-theme-error-01);
            --cl-color-error-background-01: var(--dark-theme-error-background-01);
            --cl-color-focus-01: var(--dark-theme-focus-01);
            --cl-color-free-01: var(--dark-theme-free-01);
            --cl-color-free-background-01: var(--dark-theme-free-background-01);
            --cl-color-hover-01: var(--dark-theme-hover-01);
            --cl-color-hover-02: var(--dark-theme-hover-02);
            --cl-color-hover-03: var(--dark-theme-hover-03);
            --cl-color-hover-brand-01: var(--dark-theme-hover-brand-01);
            --cl-color-hover-inverse-01: var(--dark-theme-hover-inverse-01);
            --cl-color-hover-link-01: var(--dark-theme-hover-link-01);
            --cl-color-hover-link-02: var(--dark-theme-hover-link-02);
            --cl-color-hubspot-brand-01: var(--dark-theme-hubspot-brand-01);
            --cl-color-icon-01: var(--dark-theme-icon-01);
            --cl-color-icon-02: var(--dark-theme-icon-02);
            --cl-color-icon-on-color-01: var(--dark-theme-icon-on-color-01);
            --cl-color-link-01: var(--dark-theme-link-01);
            --cl-color-link-02: var(--dark-theme-link-02);
            --cl-color-loading-primary-fill-active: var(--dark-theme-loading-primary-fill-active);
            --cl-color-loading-primary-fill-inactive: var(--dark-theme-loading-primary-fill-inactive);
            --cl-color-loading-secondary-fill-active: var(--dark-theme-loading-secondary-fill-active);
            --cl-color-loading-secondary-fill-inactive: var(--dark-theme-loading-secondary-fill-inactive);
            --cl-color-number-fill-active: var(--dark-theme-number-fill-active);
            --cl-color-number-fill-inactive: var(--dark-theme-number-fill-inactive);
            --cl-color-number-fill-statistic: var(--dark-theme-number-fill-statistic);
            --cl-color-overlay-01: var(--dark-theme-overlay-01);
            --cl-color-play-button-fill-idle: var(--dark-theme-play-button-fill-idle);
            --cl-color-play-button-fill-hover: var(--dark-theme-play-button-fill-hover);
            --cl-color-play-button-fill-pressed: var(--dark-theme-play-button-fill-pressed);
            --cl-color-pressed-01: var(--dark-theme-pressed-01);
            --cl-color-pressed-02: var(--dark-theme-pressed-02);
            --cl-color-pressed-03: var(--dark-theme-pressed-03);
            --cl-color-pressed-brand-01: var(--dark-theme-pressed-brand-01);
            --cl-color-pressed-inverse-01: var(--dark-theme-pressed-inverse-01);
            --cl-color-pressed-link-01: var(--dark-theme-pressed-link-01);
            --cl-color-pressed-link-02: var(--dark-theme-pressed-link-02);
            --cl-color-success-01: var(--dark-theme-success-01);
            --cl-color-success-background-01: var(--dark-theme-success-background-01);
            --cl-color-text-01: var(--dark-theme-text-01);
            --cl-color-text-02: var(--dark-theme-text-02);
            --cl-color-text-brand-01: var(--dark-theme-text-brand-01);
            --cl-color-text-link-underline-01: var(--dark-theme-text-link-underline-01);
            --cl-color-text-on-color-01: var(--dark-theme-text-on-color-01);
            --cl-color-text-placeholder-01: var(--dark-theme-text-placeholder-01);
        }

        *,
        :before,
        :after {
            box-sizing: border-box;
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
        }

        .hsg-footer__layout {
            box-sizing: content-box;
            margin-left: auto;
            margin-right: auto;
            max-width: 1080px;
            padding: 0;
        }

        .hsg-footer__contact-links {
            box-sizing: content-box;
            margin-left: auto;
            margin-right: auto;
            max-width: 1080px;
            padding: 0 1rem;
            position: relative;
            text-align: center;
        }

        @media (width >=900px) {
            .hsg-footer__contact-links {
                padding: 0;
            }
        }

        .hsg-footer__contact-links:after,
        .hsg-footer__contact-links:before {
            border: 0;
            width: 30%;
        }

        @media (width >=900px) {

            .hsg-footer__contact-links:after,
            .hsg-footer__contact-links:before {
                border-top: 1px solid var(--cl-color-border-02);
                content: "";
                position: absolute;
                top: 50%;
                width: 33%;
            }

            .hsg-footer__contact-links:before {
                right: 0;
            }

            .hsg-footer__contact-links.social-cl:after,
            .hsg-footer__contact-links.social-cl:before {
                width: 29%;
            }

            .hsg-footer__contact-links:after {
                left: 0;
            }
        }

        .hsg-footer__bottom {
            display: flex;
            flex-direction: column;
            padding: 2rem 2rem 0;
            width: 100%;
        }

        @media (width >=900px) {
            .hsg-footer__bottom {
                align-items: center;
                justify-content: center;
                padding: 1rem 0 0;
            }
        }

        .hsg-footer__nav-utilities {
            display: none;
        }

        .hsg-footer__nav {
            flex-direction: column;
        }

        @media (width >=900px) {
            .hsg-footer__nav {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                margin-bottom: 1.65em;
                width: 100%;
            }
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        ul {
            margin: 0;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        .hsg-footer__social {
            margin-top: 1em;
            position: relative;
            width: 100%;
        }

        @media (width >=900px) {
            .hsg-footer__social {
                align-items: center;
                display: flex;
                flex-direction: row;
                justify-content: center;
            }
        }

        .hsg-footer__contact-links.social-cl .hsg-footer__social {
            display: flex;
            justify-content: center;
        }

        .hsg-footer__apps {
            display: flex;
            justify-content: center;
            margin-bottom: 1rem;
        }

        @media (width >=900px) {
            .hsg-footer__apps {
                display: none;
            }
        }

        .hsg-footer__logo {
            align-items: center;
            display: flex;
            flex-direction: column;
            margin-top: 2rem;
        }

        @media (width >=900px) {
            .hsg-footer__logo {
                align-items: center;
                display: flex;
                flex-direction: column;
                margin-top: 0;
                order: 0;
            }
        }

        .hsg-footer__copyright {
            position: relative;
            text-align: center;
        }

        .-dark {
            --cl-anchor-text-decoration: underline;
            --cl-anchor-color-dark: var(--dark-theme-link-01);
            --cl-anchor-hover-color-dark: var(--dark-theme-hover-link-01);
        }

        .-dark {
            --cl-anchor-color: var(--cl-color-link-01);
            --cl-anchor-hover-color: var(--cl-color-hover-link-01);
            --cl-anchor-pressed-color: var(--cl-color-pressed-link-01);
            --cl-text-color: var(--cl-color-text-01);
        }

        :root .-dark {
            --cl-color-accent-fill-01: var(--dark-theme-accent-fill-01);
            --cl-color-accent-fill-02: var(--dark-theme-accent-fill-02);
            --cl-color-accent-fill-03: var(--dark-theme-accent-fill-03);
            --cl-color-accent-fill-04: var(--dark-theme-accent-fill-04);
            --cl-color-accent-fill-05: var(--dark-theme-accent-fill-05);
            --cl-color-accent-fill-06: var(--dark-theme-accent-fill-06);
            --cl-color-accent-fill-07: var(--dark-theme-accent-fill-07);
            --cl-color-accent-fill-08: var(--dark-theme-accent-fill-08);
            --cl-color-accent-decoration-01: var(--dark-theme-accent-decoration-01);
            --cl-color-accent-decoration-02: var(--dark-theme-accent-decoration-02);
            --cl-color-accent-decoration-03: var(--dark-theme-accent-decoration-03);
            --cl-color-accent-decoration-04: var(--dark-theme-accent-decoration-04);
            --cl-color-accent-decoration-05: var(--dark-theme-accent-decoration-05);
            --cl-color-accent-decoration-06: var(--dark-theme-accent-decoration-06);
            --cl-color-accent-decoration-07: var(--dark-theme-accent-decoration-07);
            --cl-color-accent-decoration-08: var(--dark-theme-accent-decoration-08);
            --cl-color-background-01: var(--dark-theme-background-01);
            --cl-color-background-02: var(--dark-theme-background-02);
            --cl-color-background-03: var(--dark-theme-background-03);
            --cl-color-background-accent-01: var(--dark-theme-background-accent-01);
            --cl-color-background-accent-02: var(--dark-theme-background-accent-02);
            --cl-color-background-footer-01: var(--dark-theme-background-footer-01);
            --cl-color-badge-brand-fill-01: var(--dark-theme-badge-brand-fill-01);
            --cl-color-beta-01: var(--dark-theme-beta-01);
            --cl-color-beta-background-01: var(--dark-theme-beta-background-01);
            --cl-color-border-01: var(--dark-theme-border-01);
            --cl-color-border-02: var(--dark-theme-border-02);
            --cl-color-border-03: var(--dark-theme-border-03);
            --cl-color-border-brand-01: var(--dark-theme-border-brand-01);
            --cl-color-border-highlight-01: var(--dark-theme-border-highlight-01);
            --cl-color-button-primary-fill-idle: var(--dark-theme-button-primary-fill-idle);
            --cl-color-button-primary-fill-hover: var(--dark-theme-button-primary-fill-hover);
            --cl-color-button-primary-fill-pressed: var(--dark-theme-button-primary-fill-pressed);
            --cl-color-button-secondary-border: var(--dark-theme-button-secondary-border);
            --cl-color-button-secondary-fill-idle: var(--dark-theme-button-secondary-fill-idle);
            --cl-color-button-secondary-fill-hover: var(--dark-theme-button-secondary-fill-hover);
            --cl-color-button-secondary-fill-pressed: var(--dark-theme-button-secondary-fill-pressed);
            --cl-color-button-tertiary-fill-idle: var(--dark-theme-button-tertiary-fill-idle);
            --cl-color-button-tertiary-fill-hover: var(--dark-theme-button-tertiary-fill-hover);
            --cl-color-button-tertiary-fill-pressed: var(--dark-theme-button-tertiary-fill-pressed);
            --cl-color-container-01: var(--dark-theme-container-01);
            --cl-color-container-02: var(--dark-theme-container-02);
            --cl-color-container-03: var(--dark-theme-container-03);
            --cl-color-container-inverse-01: var(--dark-theme-container-inverse-01);
            --cl-color-disabled-01: var(--dark-theme-disabled-01);
            --cl-color-disabled-02: var(--dark-theme-disabled-02);
            --cl-color-disabled-03: var(--dark-theme-disabled-03);
            --cl-color-divider-01: var(--dark-theme-divider-01);
            --cl-color-error-01: var(--dark-theme-error-01);
            --cl-color-error-background-01: var(--dark-theme-error-background-01);
            --cl-color-focus-01: var(--dark-theme-focus-01);
            --cl-color-free-01: var(--dark-theme-free-01);
            --cl-color-free-background-01: var(--dark-theme-free-background-01);
            --cl-color-hover-01: var(--dark-theme-hover-01);
            --cl-color-hover-02: var(--dark-theme-hover-02);
            --cl-color-hover-03: var(--dark-theme-hover-03);
            --cl-color-hover-brand-01: var(--dark-theme-hover-brand-01);
            --cl-color-hover-inverse-01: var(--dark-theme-hover-inverse-01);
            --cl-color-hover-link-01: var(--dark-theme-hover-link-01);
            --cl-color-hover-link-02: var(--dark-theme-hover-link-02);
            --cl-color-hubspot-brand-01: var(--dark-theme-hubspot-brand-01);
            --cl-color-icon-01: var(--dark-theme-icon-01);
            --cl-color-icon-02: var(--dark-theme-icon-02);
            --cl-color-icon-on-color-01: var(--dark-theme-icon-on-color-01);
            --cl-color-link-01: var(--dark-theme-link-01);
            --cl-color-link-02: var(--dark-theme-link-02);
            --cl-color-loading-primary-fill-active: var(--dark-theme-loading-primary-fill-active);
            --cl-color-loading-primary-fill-inactive: var(--dark-theme-loading-primary-fill-inactive);
            --cl-color-loading-secondary-fill-active: var(--dark-theme-loading-secondary-fill-active);
            --cl-color-loading-secondary-fill-inactive: var(--dark-theme-loading-secondary-fill-inactive);
            --cl-color-number-fill-active: var(--dark-theme-number-fill-active);
            --cl-color-number-fill-inactive: var(--dark-theme-number-fill-inactive);
            --cl-color-number-fill-statistic: var(--dark-theme-number-fill-statistic);
            --cl-color-overlay-01: var(--dark-theme-overlay-01);
            --cl-color-play-button-fill-idle: var(--dark-theme-play-button-fill-idle);
            --cl-color-play-button-fill-hover: var(--dark-theme-play-button-fill-hover);
            --cl-color-play-button-fill-pressed: var(--dark-theme-play-button-fill-pressed);
            --cl-color-pressed-01: var(--dark-theme-pressed-01);
            --cl-color-pressed-02: var(--dark-theme-pressed-02);
            --cl-color-pressed-03: var(--dark-theme-pressed-03);
            --cl-color-pressed-brand-01: var(--dark-theme-pressed-brand-01);
            --cl-color-pressed-inverse-01: var(--dark-theme-pressed-inverse-01);
            --cl-color-pressed-link-01: var(--dark-theme-pressed-link-01);
            --cl-color-pressed-link-02: var(--dark-theme-pressed-link-02);
            --cl-color-success-01: var(--dark-theme-success-01);
            --cl-color-success-background-01: var(--dark-theme-success-background-01);
            --cl-color-text-01: var(--dark-theme-text-01);
            --cl-color-text-02: var(--dark-theme-text-02);
            --cl-color-text-brand-01: var(--dark-theme-text-brand-01);
            --cl-color-text-link-underline-01: var(--dark-theme-text-link-underline-01);
            --cl-color-text-on-color-01: var(--dark-theme-text-on-color-01);
            --cl-color-text-placeholder-01: var(--dark-theme-text-placeholder-01);
        }

        button {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button {
            overflow: visible;
        }

        button {
            text-transform: none;
        }

        button {
            appearance: button;
        }

        button {
            font-family: inherit;
        }

        .hsg-footer__nav-left {
            display: flex;
        }

        @media (width >=900px) {
            .hsg-footer__nav-left {
                flex-direction: row;
            }
        }

        .hsg-footer__nav-left {
            border-right: 0;
            width: 100%;
        }

        @media (width >=900px) {
            .hsg-footer__nav-left {
                border-right: 1px solid var(--cl-color-border-02);
                width: 40%;
            }
        }

        .hsg-footer__nav-right {
            display: flex;
        }

        @media (width >=900px) {
            .hsg-footer__nav-right {
                flex-direction: row;
            }
        }

        .hsg-footer__nav-right {
            flex-direction: column;
        }

        @media (width >=900px) {
            .hsg-footer__nav-right {
                flex: 1 0 30%;
                flex-direction: row;
                justify-content: space-between;
                margin-left: 3.25rem;
            }
        }

        .hsg-footer__social li {
            display: inline-block;
            margin: 0 .25em;
        }

        @media (width >=900px) {
            .hsg-footer__social li {
                margin: 0 1em;
            }
        }

        a {
            background-color: rgba(0, 0, 0, 0);
        }

        a {
            color: var(--cl-anchor-color, var(--cl-color-link-01));
            font-weight: var(--cl-anchor-font-weight, var(--cl-font-weight-medium));
            text-decoration-line: var(--cl-anchor-text-decoration, underline);
        }

        a {
            background-color: transparent;
        }

        a {
            color: var(--cl-anchor-color, var(--cl-color-link-01));
            font-weight: var(--cl-anchor-font-weight, var(--cl-font-weight-medium));
            text-decoration-line: var(--cl-anchor-text-decoration, underline);
        }

        .hsg-footer__app {
            display: flex;
            height: auto;
            max-width: 8.5rem;
        }

        .hsg-footer__app:first-child {
            margin-right: 1rem;
        }

        .hsg-footer a:not([class*="cl-button"]) {
            color: var(--cl-color-text-02);
        }

        a:hover {
            color: var(--cl-anchor-hover-color, var(--cl-color-hover-link-01));
        }

        a:hover {
            color: var(--cl-anchor-hover-color, var(--cl-color-hover-link-01));
        }

        @media (width >=900px) {
            .hsg-footer a:not([class*="cl-button"]):hover {
                color: var(--cl-color-hover-link-01);
            }
        }

        p {
            font-size: var(--cl-text-font-size);
            font-weight: var(--cl-text-font-weight);
            line-height: var(--cl-text-line-height);
            letter-spacing: var(--cl-text-letter-spacing, normal);
        }

        p {
            margin-block: var(--cl-text-margin-medium);
        }

        p {
            font-size: var(--cl-text-font-size);
            font-weight: var(--cl-text-font-weight);
            letter-spacing: var(--cl-text-letter-spacing, normal);
            line-height: var(--cl-text-line-height);
        }

        .hsg-footer__logo p {
            --cl-anchor-font-weight: 600;
            font-size: var(--cl-font-size-microcopy);
            font-weight: var(--cl-font-weight-microcopy);
            letter-spacing: var(--cl-letter-spacing-microcopy, normal);
            line-height: var(--cl-line-height-microcopy);
        }

        .hsg-footer__logo p {
            color: var(--cl-color-text-02);
        }

        @media (width >=900px) {
            .hsg-footer__logo p {
                margin-bottom: 0;
            }
        }

        .hsg-footer__copyright ul {
            position: relative;
            text-align: center;
        }

        :where(.cl-icon) {
            height: 2rem;
            width: 2rem;
            fill: currentColor;
        }

        .visually-hidden:not(:focus, :active) {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            white-space: nowrap;
            width: 1px;
        }

        .visually-hidden:not(:focus, :active) {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            white-space: nowrap;
            width: 1px;
        }

        .hsg-footer__nav-column {
            border-bottom: 1px solid var(--cl-color-border-02);
            flex: 1;
            padding: .45rem 0;
            position: relative;
            transition: all .3s ease;
        }

        @media (width >=900px) {
            .hsg-footer__nav-column {
                border-bottom: 0;
                margin-bottom: 0;
                text-align: left;
            }
        }

        .hsg-footer__nav-column-left {
            display: flex;
            flex: 1 0 17%;
            flex-direction: column;
            flex-wrap: wrap;
        }

        .hsg-footer__nav-column:first-child {
            padding-left: 0;
        }

        .hsg-footer__nav-column:last-child {
            padding-right: 0;
        }

        .hsg-footer__nav-full {
            display: flex;
            flex-direction: column;
        }

        .hsg-footer__nav-full {
            flex: 1;
        }

        .hsg-footer__nav-split {
            display: flex;
            flex-direction: column;
        }

        .hsg-footer__nav-split {
            flex: 1;
        }

        .hsg-footer__social li a {
            display: block;
            padding: .45rem;
            text-decoration: none;
        }

        @media (width >=900px) {
            .hsg-footer__social li a {
                padding: .75rem 0;
            }
        }

        img {
            max-width: 100%;
            height: auto;
        }

        img {
            height: auto;
            max-width: 100%;
        }

        .hsg-footer__logo img {
            display: block;
            margin: 0 auto;
            max-width: 100px;
        }

        @media (width >=900px) {
            .hsg-footer__logo img {
                margin: 0;
            }
        }

        .hsg-footer__copyright li {
            display: inline-block;
        }

        .hsg-footer__copyright ul>li {
            position: relative;
        }

        .hsg-footer__copyright ul>li::after {
            color: var(--cl-color-border-02);
            content: "|";
            display: inline-block;
            font-size: .75em;
            position: absolute;
            right: -.25em;
            top: 15%;
        }

        .hsg-footer__copyright ul>li:last-of-type::after {
            content: "";
        }

        h2 {
            --cl-anchor-font-weight: inherit;
            font-family: var(--cl-font-family-heading, inherit);
            font-size: var(--cl-font-size-h2);
            font-weight: var(--cl-font-weight-h2);
            line-height: var(--cl-line-height-h2);
            letter-spacing: var(--cl-letter-spacing-h2, normal);
        }

        h2 {
            margin-block: var(--cl-text-margin-small);
        }

        h2 {
            --cl-anchor-font-weight: inherit;
            font-family: var(--cl-font-family-heading, inherit);
            font-size: var(--cl-font-size-h2);
            font-weight: var(--cl-font-weight-h2);
            letter-spacing: var(--cl-letter-spacing-h2, normal);
            line-height: var(--cl-line-height-h2);
        }

        .hsg-footer__nav-heading {
            font-family: var(--cl-font-family, inherit);
            font-size: var(--cl-font-size-h4);
            font-weight: var(--cl-font-weight-h4);
            letter-spacing: var(--cl-letter-spacing-h4, normal);
            line-height: var(--cl-line-height-h4);
        }

        .hsg-footer__nav-heading {
            line-height: 1.6;
            margin: 0;
        }

        .hsg-footer__nav-column>ul {
            display: none;
            flex-direction: column;
            transition: all .3s ease;
        }

        @media (width >=900px) {
            .hsg-footer__nav-column>ul {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                margin-left: 0;
            }
        }

        .hsg-footer__nav-column-left>ul {
            column-count: 1;
        }

        @media (width >=900px) {
            .hsg-footer__nav-column-left>ul {
                column-count: 2;
                display: inline-block;
            }

            .hsg-footer__nav-split>section {
                margin-bottom: 1rem;
            }
        }

        .hsg-footer__social li a .cl-icon {
            height: 23px;
            width: 26px;
        }

        .hsg-footer__social li a span {
            height: 1px;
            left: -10000px;
            overflow: hidden;
            position: absolute;
            top: auto;
            width: 1px;
        }

        .hsg-footer__copyright li a {
            display: block;
            padding: .5rem 1rem;
        }

        .hsg-footer__copyright a,
        .hsg-footer__copyright a:not([class*="cta"]) {
            color: var(--cl-color-text-01);
            font-size: .875rem;
            font-weight: var(--cl-font-weight-demi-bold);
            text-decoration: underline;
        }

        .hsg-footer__nav-toggle {
            align-items: center;
            background: none;
            border: 0;
            color: inherit;
            cursor: pointer;
            display: flex;
            font-size: 1rem;
            font-weight: var(--cl-font-weight-demi-bold);
            justify-content: space-between;
            padding: .5rem 1rem;
            width: 100%;
        }

        @media (width >=900px) {
            .hsg-footer__nav-toggle {
                font-size: .875rem;
                padding: 0 0 1rem;
            }
        }

        .hsg-footer__nav-toggle[aria-expanded="true"] {
            pointer-events: none;
        }

        .hsg-footer__nav-item {
            flex: 1 1 45%;
            margin-right: 1em;
        }

        .hsg-footer__nav-item {
            border-top: 1px solid var(--cl-color-border-03);
        }

        @media (width >=900px) {
            .hsg-footer__nav-item {
                border-top: 0;
            }

            .hsg-footer__nav-split>section>ul {
                flex-direction: column;
            }
        }

        .hsg-footer__social li a .cl-icon use {
            fill: var(--cl-color-text-02);
        }

        .hsg-footer__nav-toggle svg.cl-icon {
            height: 1.5rem;
            width: 1.5rem;
            fill: currentColor;
        }

        @media (width >=900px) {
            .hsg-footer__nav-toggle svg.cl-icon {
                display: none;
            }
        }

        .hsg-footer__nav-item a {
            display: block;
            font-size: 16px;
            font-weight: var(--cl-font-weight-demi-bold);
            line-height: 2.4;
            text-decoration: none;
        }

        .hsg-footer__nav-item a {
            width: 100%;
        }

        .hsg-footer__nav-item>a {
            padding: 1rem 0;
        }

        @media (width >=900px) {
            .hsg-footer__nav-item>a {
                padding: .125rem 0;
            }

            .hsg-footer__nav-item a:not([class*="cl-button"]):hover {
                color: var(--cl-color-hover-link-01);
                font-weight: var(--cl-font-weight-demi-bold);
                text-decoration: underline;
            }
        }

        .hsg-footer__nav-item>svg.cl-icon {
            display: none;
        }

        .hsg-footer__nav-split .hsg-footer__nav-item {
            margin-right: 0;
        }
    </style>

    <footer class="hsg-footer snipcss-2MU8v" data-cl-theme="dark" data-cl-background="background-footer-01">
        <div class="hsg-footer__layout">
            <div class="hsg-footer__nav-utilities" id="back-link">
                <div class="hsg-footer__nav-utilities-home -dark">
                    <svg class="cl-icon" aria-hidden="true">
                        <use href="#cl-icon-previous"></use>
                    </svg>
                    <span class="hsg-footer__nav-utilities-home-text">Back</span>
                </div>
                <button class="hsg-footer__nav-utilities-close" role="presentation">
                    <svg class="cl-icon">
                        <use href="#cl-icon-close"></use>
                    </svg>
                    <span class="visually-hidden">Close</span>
                </button>
            </div>
            <nav class="hsg-footer__nav">
                <div class="hsg-footer__nav-left">
                    <section class="hsg-footer__nav-column hsg-footer__nav-column-left">
                        <h5 class="sg-footer__nav-heading text-light">
                            <span>Popular Features</span>
                        </h5>
                        <ul>
                            <li class="hsg-footer__nav-item" data-order="1">
                                <a class="ga_nav_link footer"
                                    href="https://www.hubspot.com/products?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=footer&amp;hubs_post=blog.hubspot.com/website/website-footer&amp;hubs_post-cta=footer"
                                    data-order="1" data-ga_nav_type="footer_nav"
                                    data-ga_nav_tree_text="Popular Features > All Products and Features"> All Products
                                    and
                                    Features </a>
                                <svg class="cl-icon">
                                    <use href="#cl-icon-right"></use>
                                </svg>
                                <span class="visually-hidden">All Products and Features</span>
                            </li>
                            <li class="hsg-footer__nav-item" data-order="2">
                                <a class="ga_nav_link "
                                    href="https://www.hubspot.com/products/sales/schedule-meeting?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=Free%20Meeting%20Scheduler%20App&amp;hubs_post=blog.hubspot.com/website/website-footer&amp;hubs_post-cta=Free%20Meeting%20Scheduler%20App"
                                    data-order="2" data-ga_nav_type="footer_nav"
                                    data-ga_nav_tree_text="Popular Features > Free Meeting Scheduler App"> Free Meeting
                                    Scheduler App </a>
                                <svg class="cl-icon">
                                    <use href="#cl-icon-right"></use>
                                </svg>
                                <span class="visually-hidden">Free Meeting Scheduler App</span>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="hsg-footer__nav-right">
                    <div class="hsg-footer__nav-full">
                        <section class="hsg-footer__nav-column ">
                            <h2 class="hsg-footer__nav-heading">
                                <button class="hsg-footer__nav-toggle" tabindex="-1" aria-disabled="true"
                                    aria-expanded="true">
                                    <span>Free Tools</span>
                                    <svg class="cl-icon">
                                        <use href="#cl-icon-right"></use>
                                    </svg>
                                </button>
                            </h2>
                            <ul>
                                <li class="hsg-footer__nav-item" data-order="1">
                                    <a class="ga_nav_link "
                                        href="https://www.hubspot.com/free-business-tools?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=See%20All%20Free%20Business%20Tools&amp;hubs_post=blog.hubspot.com/website/website-footer&amp;hubs_post-cta=See%20All%20Free%20Business%20Tools"
                                        data-order="1" data-ga_nav_type="footer_nav"
                                        data-ga_nav_tree_text="Free Tools > See All Free Business Tools"> See All Free
                                        Business Tools </a>
                                    <svg class="cl-icon">
                                        <use href="#cl-icon-right"></use>
                                    </svg>
                                    <span class="visually-hidden">See All Free Business Tools</span>
                                </li>
                                <li class="hsg-footer__nav-item" data-order="2">
                                    <a class="ga_nav_link "
                                        href="https://www.hubspot.com/ai-search-grader?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=AI%20Search%20Grader&amp;hubs_post=blog.hubspot.com/website/website-footer&amp;hubs_post-cta=AI%20Search%20Grader"
                                        data-order="2" data-ga_nav_type="footer_nav"
                                        data-ga_nav_tree_text="Free Tools > AI Search Grader"> AI Search Grader </a>
                                    <svg class="cl-icon">
                                        <use href="#cl-icon-right"></use>
                                    </svg>
                                    <span class="visually-hidden">AI Search Grader</span>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div class="hsg-footer__nav-full">
                        <section class="hsg-footer__nav-column ">
                            <h2 class="hsg-footer__nav-heading">
                                <button class="hsg-footer__nav-toggle" tabindex="-1" aria-disabled="true"
                                    aria-expanded="true">
                                    <span>Company</span>
                                    <svg class="cl-icon">
                                        <use href="#cl-icon-right"></use>
                                    </svg>
                                </button>
                            </h2>
                            <ul>
                                <li class="hsg-footer__nav-item" data-order="1">
                                    <a class="ga_nav_link "
                                        href="https://www.hubspot.com/our-story?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=About%20Us&amp;hubs_post=blog.hubspot.com/website/website-footer&amp;hubs_post-cta=About%20Us"
                                        data-order="1" data-ga_nav_type="footer_nav"
                                        data-ga_nav_tree_text="Company > About Us"> About Us </a>
                                    <svg class="cl-icon">
                                        <use href="#cl-icon-right"></use>
                                    </svg>
                                    <span class="visually-hidden">About Us</span>
                                </li>
                                <li class="hsg-footer__nav-item" data-order="2">
                                    <a class="ga_nav_link "
                                        href="https://www.hubspot.com/careers?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=Careers&amp;hubs_post=blog.hubspot.com/website/website-footer&amp;hubs_post-cta=Careers"
                                        data-order="2" data-ga_nav_type="footer_nav"
                                        data-ga_nav_tree_text="Company > Careers"> Careers </a>
                                    <svg class="cl-icon">
                                        <use href="#cl-icon-right"></use>
                                    </svg>
                                    <span class="visually-hidden">Careers</span>
                                </li>
                                <li class="hsg-footer__nav-item" data-order="3">
                                    <a class="ga_nav_link "
                                        href="https://www.hubspot.com/company/management?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=Management%20Team&amp;hubs_post=blog.hubspot.com/website/website-footer&amp;hubs_post-cta=Management%20Team"
                                        data-order="3" data-ga_nav_type="footer_nav"
                                        data-ga_nav_tree_text="Company > Management Team"> Management Team </a>
                                    <svg class="cl-icon">
                                        <use href="#cl-icon-right"></use>
                                    </svg>
                                    <span class="visually-hidden">Management Team</span>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div class="hsg-footer__nav-split">
                        <section class="hsg-footer__nav-column ">
                            <h2 class="hsg-footer__nav-heading">
                                <button class="hsg-footer__nav-toggle" tabindex="-1" aria-disabled="true"
                                    aria-expanded="true">
                                    <span>Customers</span>
                                    <svg class="cl-icon">
                                        <use href="#cl-icon-right"></use>
                                    </svg>
                                </button>
                            </h2>
                            <ul>
                                <li class="hsg-footer__nav-item" data-order="1">
                                    <a class="ga_nav_link "
                                        href="https://help.hubspot.com/?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=Customer%20Support"
                                        data-order="1" data-ga_nav_type="footer_nav"
                                        data-ga_nav_tree_text="Customers > Customer Support"> Customer Support </a>
                                    <svg class="cl-icon">
                                        <use href="#cl-icon-right"></use>
                                    </svg>
                                    <span class="visually-hidden">Customer Support</span>
                                </li>
                                <li class="hsg-footer__nav-item" data-order="2">
                                    <a class="ga_nav_link "
                                        href="https://www.hubspot.com/hubspot-user-groups?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=Join%20a%20Local%20User%20Group&amp;hubs_post=blog.hubspot.com/website/website-footer&amp;hubs_post-cta=Join%20a%20Local%20User%20Group"
                                        data-order="2" data-ga_nav_type="footer_nav"
                                        data-ga_nav_tree_text="Customers > Join a Local User Group"> Join a Local User
                                        Group </a>
                                    <svg class="cl-icon">
                                        <use href="#cl-icon-right"></use>
                                    </svg>
                                    <span class="visually-hidden">Join a Local User Group</span>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </nav>
        </div>
        <section class="hsg-footer__contact-links social-cl">
            <ul class="hsg-footer__social">
                <li class="">
                    <a href="" target="_blank" class="ga_nav_link hstc_facebook " data-order="1"
                        data-ga_nav_type="footer_nav" data-ga_nav_tree_text="Facebook">
                        <i class="fa-brands fa-facebook fs-3"></i>
                        <span class="hidden-social text-bg-info">Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/hubspot/?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=hstc_instagram"
                        target="_blank" class="ga_nav_link hstc_instagram" data-order="2" data-ga_nav_type="footer_nav"
                        data-ga_nav_tree_text="Instagram">
                        <i class="fa-brands fa-instagram fs-3"></i>
                        <span class="hidden-social">Instagram</span>
                    </a>
                </li>
                <li>
                    <a href="https://youtube.com/user/HubSpot?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=hstc_youtube"
                        target="_blank" class="ga_nav_link hstc_youtube" data-order="3" data-ga_nav_type="footer_nav"
                        data-ga_nav_tree_text="Youtube">
                        <i class="fa-brands fa-youtube fs-3"></i>
                    </a>
                </li>
                <li>
                    <a href="https://x.com/HubSpot?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=hstc_twitter"
                        target="_blank" class="ga_nav_link hstc_twitter" data-order="4" data-ga_nav_type="footer_nav"
                        data-ga_nav_tree_text="Twitter">
                        <i class="fa-brands fa-twitter fs-3"></i>

                        <span class="hidden-social">Twitter</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/hubspot?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=hstc_linkedin"
                        target="_blank" class="ga_nav_link hstc_linkedin" data-order="5" data-ga_nav_type="footer_nav"
                        data-ga_nav_tree_text="Linkedin">
                        <i class="fa-brands fa-linkedin fs-3"></i>

                        <span class="hidden-social">Linkedin</span>
                    </a>
                </li>
                <li>
                    <a href="https://medium.com/@HubSpot?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=hstc_medium"
                        target="_blank" class="ga_nav_link hstc_medium" data-order="6" data-ga_nav_type="footer_nav"
                        data-ga_nav_tree_text="Medium">
                        <i class="fa-brands fa-medium fs-3"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.tiktok.com/@hubspot?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=hstc_medium"
                        target="_blank" class="ga_nav_link hstc_medium" data-order="7" data-ga_nav_type="footer_nav"
                        data-ga_nav_tree_text="Tiktok">
                        <i class="fa-brands fa-google-plus-g fs-3"></i>
                    </a>
                </li>
            </ul>
        </section>
        <section class="hsg-footer__bottom">
            <div class="hsg-footer__apps"><a class="ga_nav_link hsg-footer__app"
                    href="https://apps.apple.com/us/app/hubspot/id1107711722?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=hsg-footer__app"
                    data-ga_nav_type="footer_nav" data-ga_nav_tree_text="Download on the App Store">
                    <img class="en-homepage-mobile-footer-apple"
                        src="https://53.fs1.hubspotusercontent-na1.net/hub/53/hubfs/app%20store%20high%20res.png?width=136&amp;height=45&amp;name=app%20store%20high%20res.png"
                        alt="Download on the App Store" width="136" height="45" loading="lazy">
                </a><a class="ga_nav_link hsg-footer__app"
                    href="https://play.google.com/store/apps/details?id=com.hubspot.android&amp;hl=en_US&amp;hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=hsg-footer__app&amp;__hstc=20629287.b771227f43b6978ea5e1f5721dbf4d24.1747545225732.1747545225732.1747545225732.1&amp;__hssc=20629287.2.1747545225732&amp;__hsfp=241735827"
                    data-ga_nav_type="footer_nav" data-ga_nav_tree_text="Get it on Google Play">
                    <img class="en-homepage-mobile-footer-google"
                        src="https://53.fs1.hubspotusercontent-na1.net/hub/53/hubfs/google%20play%20high%20res.png?width=136&amp;height=45&amp;name=google%20play%20high%20res.png"
                        alt="Get it on Google Play" width="136" height="45" loading="lazy">
                </a></div>
            <div class="hsg-footer__logo">
                <a href=""" aria-label="HubSpot" class="global-nav-logo-wrapper ga_nav_link "
                    data-ga_nav_type="footer_nav" data-ga_nav_tree_text="HubSpot Logo">
                    <img class="" alt="HubSpot" style="background: azure !important;"
                        src="https://supremeglobal.co/wp-content/uploads/2024/01/logo-5.png" width="80"
                        height="30" loading="lazy">
                </a>
                <p>Copyright © 2025 Supreme Global.</p>
            </div>
            <div class="hsg-footer__copyright">
                <ul>
                    <li><a href="https://legal.hubspot.com/legal-stuff?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=Legal%20Stuff"
                            class="ga_nav_link" data-ga_nav_type="footer_nav" data-ga_nav_tree_text="Legal Stuff">Legal
                            Stuff</a></li>
                    <li><a href="https://legal.hubspot.com/privacy-policy?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=Privacy%20Policy"
                            class="ga_nav_link" data-ga_nav_type="footer_nav"
                            data-ga_nav_tree_text="Privacy Policy">Privacy Policy</a></li>
                    <li><a href="https://legal.hubspot.com/security?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=Security"
                            class="ga_nav_link" data-ga_nav_type="footer_nav"
                            data-ga_nav_tree_text="Security">Security</a></li>
                    <li><a href="https://legal.hubspot.com/website-accessibility?hubs_content=blog.hubspot.com/website/website-footer&amp;hubs_content-cta=Website%20Accessibility"
                            class="ga_nav_link" data-ga_nav_type="footer_nav"
                            data-ga_nav_tree_text="Website Accessibility">Website Accessibility</a></li>
                    <li class="hs-footer-cookie-settings" data-test-id="footer-settings-btn">
                        <a href="" role="button">Manage Cookies</a>
                    </li>
                </ul>
            </div>
        </section>
    </footer>

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
