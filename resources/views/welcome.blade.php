@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0 m-0">
        @php
            $images = ['img1.jpg', 'img2.jpg', 'img3.jpg'];
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
                            <div class="col-md-4">
                                <img src="{{ asset('images/' . $img) }}" class="w-100 rounded" data-mask="40"
                                    alt="Image {{ $index + 1 }}">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab" tabindex="0">
                    <div class="row">
                        @foreach ($images as $index => $img)
                            <div class="col-md-4">
                                <img src="{{ asset('images/' . $img) }}" class="w-100 rounded" data-mask="40"
                                    alt="Image {{ $index + 1 }}">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="event" role="tabpanel" aria-labelledby="event-tab" tabindex="0">
                    <div class="row">
                        @foreach ($images as $index => $img)
                            <div class="col-md-4">
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

    <section class="py-5 bg-cyan" style="background: whitesmoke">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Mission</h2>
                <p class="text-muted">What drives us every day.</p>
            </div>
            <div class="row align-items-center">

                <!-- Left: Key Points -->
                <div class="col-md-6">
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

                <!-- Right: Image -->
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/img1.jpg') }}" class="img-fluid rounded shadow" alt="Our Mission Image">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light" style="background: mintcream">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Vision</h2>
                <p class="text-muted">Where we’re going and what we aim to become.</p>
            </div>
            <div class="row align-items-center">

                <!-- Left: Image -->
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/img2.jpg') }}" class="img-fluid rounded shadow"
                        alt="Our Vision Image">
                </div>

                <!-- Right: Key Points -->
                <div class="col-md-6">
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


    <section id="contact" class="section-7 form contact">
        <h2 class="text-center">Send a message</h2>
        <div class="container-fluid p-4">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <h3>Get in <span class="featured"><span>Touch</span></span></h3>
                        <p>We will respond to your message as soon as possible.</p>
                    </div>
                    <form action="php/form.php" id="nexgen-simple-form" class="nexgen-simple-form">
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
                                <button class="btn btn-primary rounded-0" type="button"> <i
                                        class="fas fa-envelope pe-2 fs-5"></i> Send email</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="contacts px-4">
                        <h4>Example Inc.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>Praesent diam lacus, dapibus sed imperdiet consectetur.</p>
                        <ul class="info ps-0">
                            <li class="item">
                                <i class="fas fa-phone-alt me-3"></i>
                                +880 1322846601
                            </li>
                            <li class="item">
                                <i class="fas fa-envelope me-3"></i>
                                supremeglobalbd@gmail.com
                            </li>
                            <li class="item">
                                <i class="fas fa-map-marker-alt me-3"></i>
                                Tropical Mollah Tower, Level 13th, 15/1-5 Pragati Sarani, Middle Badda, Dhaka-1212,
                                Bangladesh
                            </li>
                            <li class="item">
                                <a href="#" class="mt-2 btn btn-success" data-bs-toggle="modal"
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
