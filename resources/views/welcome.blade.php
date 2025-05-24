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
                    'pho5.jpg',
                    'pho6.jpg',
                    'pho7.jpg',
                    'pho8.jpg',
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

    <section id="projects">
        <div class="container-fluid">
            <h3 class="text-center mb-4">Sister Concerns</h3>
            <div class="row">
                @php
                    $company = [
                        [
                            'name' => 'Dar Kafaa Al-Alai',
                            'image' => 'logo1.png'
                        ],
                        [
                            'name' => 'A&A Auto Bricks Industries Ltd',
                            'image' => 'logo2.png'
                        ],
                        [
                            'name' => 'Supreme Tea Limited',
                            'image' => 'logo3.png'
                        ],
                        [
                            'name' => 'ALIF & Co.',
                            'image' => 'logo4.png'
                        ],
                        [
                            'name' => 'Garden Inn Resort & Amusement',
                            'image' => 'logo5.png'
                        ],
                        [
                            'name' => 'SUPREME AGRO',
                            'image' => 'logo6.png'
                        ],
                        [
                            'name' => 'North Point Medical College & Hospital Ltd.',
                            'image' => 'logo7.png'
                        ],
                        [
                            'name' => 'North Palace Hotel & Resort Ltd.',
                            'image' => 'logo8.png'
                        ]
                    ];
                @endphp

                @foreach ($company as $img)
                    <div class="col-md-3 py-2 d-flex">
                        <div class="card hover-zoom w-100">
                            <a href="#">
                                <img src="{{ asset('images/logo/' .$img['image']) }}" class="card-img-top rounded" alt="Image {{ $img['name'] }}">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $img['name'] }}</h5>
                                <p class="card-text mt-0">A short description about this sister concern.</p>
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

    <section id="client">
        <div class="container-fluid text-center mb-5">
            <h2 class="fw-bold">Our Clients</h2>
            <p class="text-muted">Trusted by industry leaders</p>
            <div class="wrapper">
                @foreach ($company as $img)
                    <div class="client">
                        <img alt="Client Logo" src="{{ asset('images/logo/' . $img['image']) }}">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="footer" style="color: #fff; background: #192733">
        <div class="container-fluid px-5">
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <h4>Company Logo</h4>
                    <ul>
                        <li>
                            <img style="background: azure !important; border-radius: 50%"
                                src="https://supremeglobal.co/wp-content/uploads/2024/01/logo-5.png" width="100"
                                height="100" loading="lazy">
                        </li>
                        <li class="mt-2">
                            Supreme Global
                        </li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <h4>Quick Links</h4>
                    <ul>
                        <li>About</li>
                        <li>Work</li>
                        <li>Service</li>
                    </ul>
                </div>
                <div class="col-md-4 footerContact">
                    <h4>Contract</h4>
                    <ul>
                        <li class="item">
                            <i class="fas fa-phone-alt"></i>
                            +880 1322846601
                        </li>
                        <li class="item">
                            <i class="fas fa-envelope"></i>
                            supremeglobalbd@gmail.com
                        </li>
                        <li class="item">
                            <i class="fas fa-map-marker-alt"></i>
                            <Strong>Head office: </Strong>
                            Tropical Mollah Tower, Level 13th, 15/1-5 Pragati Sarani, Middle Badda, Dhaka-1212,
                            Bangladesh
                        </li>
                        <li class="item">
                            <i class="fas fa-map-marker-alt"></i>
                            <Strong>Saudi office: </Strong>
                            Tropical Mollah Tower, Level 13th, 15/1-5 Pragati Sarani, Middle Badda, Dhaka-1212,
                            Bangladesh
                        </li>
                        <li class="item">
                            <i class="fas fa-map-marker-alt"></i>
                            <Strong>Factory location: </Strong>
                            Tropical Mollah Tower, Level 13th, 15/1-5 Pragati Sarani, Middle Badda, Dhaka-1212,
                            Bangladesh
                        </li>
                        <li class="item">
                            <button class="btn btn-success btn-auto rounded-0" data-bs-toggle="modal"
                                data-bs-target="#map">
                                <i class="fas fa-map-marker-alt"></i>
                                Head office location
                            </button>

                            <button type="button" class="btn btn-primary btn-auto ms-2 rounded-0" data-bs-toggle="modal"
                                data-bs-target="#emailUs">
                                <i class="fas fa-envelope"></i>
                                Send email us
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="my-4">

            <div class="row justify-content-between">
                <div class="col-md-6">
                    <p>© Copyright <?= date('Y') ?>. Supreme Global.</p>
                </div>

                <div class="col-md-6">
                    <ul class="text-center footerSocial list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="#" class="social-icon facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                                <span class="label">Facebook</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon instagram">
                                <i class="fa-brands fa-instagram"></i>
                                <span class="label">Instagram</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon linkedin">
                                <i class="fa-brands fa-linkedin-in"></i>
                                <span class="label">LinkedIn</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon youtube">
                                <i class="fa-brands fa-youtube"></i>
                                <span class="label">YouTube</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon twitter">
                                <i class="fa-brands fa-twitter"></i>
                                <span class="label">Twitter</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon github">
                                <i class="fa-brands fa-github"></i>
                                <span class="label">GitHub</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Right Slide Modal -->
    <div class="modal fade" id="emailUs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Get in touch</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <strong>
                        We will respond to your message as soon as possible
                    </strong>
                    <form>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6 m-0 p-2">
                                    <input type="text" name="name" class="form-control field-name"
                                        placeholder="Name">
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
                                        <option value="">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-12 m-0 p-2">
                                    <textarea name="message" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </form>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">
                        <i class="fas fa-envelope pe-2"></i>
                        Send email
                    </button>
                </div>
            </div>
        </div>
    </div>

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
