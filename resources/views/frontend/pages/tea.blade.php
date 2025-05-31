@extends('frontend.layouts.app')

@section('content')
    <section id="slide" class="p-0">
        <div class="container-fluid p-0">
            @php
                $images = [
                    'pho1.jpg',
                    'pho2.jpg',
                    // 'pho3.jpg',
                    // 'pho4.jpg',
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

    @php
        $company = [
            [
                'name' => 'Dar Kafaa Al-Alai',
                'image' => 'logo1.png',
            ],
            [
                'name' => 'A&A Auto Bricks Industries Ltd',
                'image' => 'logo2.png',
            ],
            [
                'name' => 'Supreme Tea Limited',
                'image' => 'logo3.png',
            ],
            [
                'name' => 'ALIF & Co.',
                'image' => 'logo4.png',
            ],
            [
                'name' => 'Garden Inn Resort & Amusement',
                'image' => 'logo5.png',
            ],
            [
                'name' => 'SUPREME AGRO',
                'image' => 'logo6.png',
            ],
            [
                'name' => 'North Point Medical College & Hospital Ltd.',
                'image' => 'logo7.png',
            ],
            [
                'name' => 'North Palace Hotel & Resort Ltd.',
                'image' => 'logo8.png',
            ],
        ];
    @endphp

    <section id="mission" tyle="background: #dfe6e9">
        <div class="container-fluid">
            <div class="text-center mb-5">
                <h2 class="fw-bold">About our tea</h2>
                <p class="text-muted">What drives us every day.</p>
            </div>
            <div class="row align-items-center border">
                <div class="col-md-7 p-4">
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
                <div class="col-md-5 px-4 text-center">
                    <img src="{{ asset('images/tea/1.png') }}" class="img-fluid shadow rounded-circle" 
                        alt="Our Mission Image" style="height: 400px;">
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid px-4 py-5">
        @foreach ($images as $index => $product)
            <div class="row mb-5 p-4 shadow rounded-4 {{ $index % 2 != 0 ? 'bg-light' : '' }}">
                @if ($index % 2 == 0)
                    <!-- Even: Image Left -->
                    <div class="col-12 col-lg-4 mb-4 mb-lg-0 d-flex justify-content-center">
                        <div class="ratio ratio-1x1 rounded-circle overflow-hidden" style="max-width: 300px;">
                            <img src="{{ asset('images/tea/1.png') }}" alt="This is name"
                                class="w-100 h-100 object-fit-cover rounded-circle shadow" />
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 d-flex flex-column justify-content-start">
                        <h3 class="fw-bold">Green tea</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore natus voluptate cumque voluptates, totam veritatis doloremque nostrum amet dolorum maxime maiores sit, dolorem provident alias adipisci dignissimos animi laudantium similique?</p>
                        {{-- <p class="h5 text-primary mt-2">৳ {{ number_format(120.50, 2) }}</p> --}}
                        {{-- <a href="#" class="btn btn-primary mt-3 align-self-start">Buy Now</a> --}}
                    </div>
                @else
                    <!-- Odd: Image Right -->
                    <div class="col-12 col-lg-4 order-lg-2 mb-4 mb-lg-0 d-flex justify-content-center">
                        <div class="ratio ratio-1x1 rounded-circle overflow-hidden" style="max-width: 300px;">
                            <img src="{{ asset('images/tea/1.png') }}" alt="This is name"
                                class="w-100 h-100 object-fit-cover rounded-circle shadow" />
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 order-lg-1 d-flex flex-column justify-content-start">
                        <h3 class="fw-bold">Black tea</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore natus voluptate cumque voluptates, totam veritatis doloremque nostrum amet dolorum maxime maiores sit, dolorem provident alias adipisci dignissimos animi laudantium similique?</p>
                        {{-- <p class="h5 text-primary mt-2">৳ {{ number_format(120.50, 2) }}</p> --}}
                        {{-- <a href="#" class="btn btn-primary mt-3 align-self-start">Buy Now</a> --}}
                    </div>
                @endif
            </div>
        @endforeach
    </div>

	<div class="container-fluid px-4">
        {{-- <h2 class="text-center mb-5 fw-bold">Our Products</h2> --}}
        @foreach ($images as $index => $product)
            <div class="row mb-5 p-4 shadow rounded-4 {{ $index % 2 != 0 ? 'bg-light' : '' }}">
                @if ($index % 2 == 0)
                    <!-- Even: Image Left -->
                    <div class="col-12 col-lg-4 mb-4 mb-lg-0 d-flex justify-content-center">
                        <div class="rounded overflow-hidden" style="width: 100%; height: 300px;">
                            <img src="{{ asset('images/tea/1.png') }}" alt="This is name"
                                class="w-100 h-100 object-fit-cover rounded shadow" />
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 d-flex flex-column justify-content-start">
                        <h3 class="fw-bold">White tea</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore natus voluptate cumque voluptates, totam veritatis doloremque nostrum amet dolorum maxime maiores sit, dolorem provident alias adipisci dignissimos animi laudantium similique?</p>
                        {{-- <p class="h5 text-primary mt-2">৳ {{ number_format(120.50, 2) }}</p> --}}
                        {{-- <a href="#" class="btn btn-primary mt-3 align-self-start">Buy Now</a> --}}
                    </div>
                @else
                    <!-- Odd: Image Right -->
                    <div class="col-12 col-lg-4 order-lg-2 mb-4 mb-lg-0 d-flex justify-content-center">
                        <div class="rounded overflow-hidden" style="width: 100%; height: 300px;">
                            <img src="{{ asset('images/tea/1.png') }}" alt="This is name"
                                class="w-100 h-100 object-fit-cover rounded shadow" />
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 order-lg-1 d-flex flex-column justify-content-start">
                        <h3 class="fw-bold">Green tea</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore natus voluptate cumque voluptates, totam veritatis doloremque nostrum amet dolorum maxime maiores sit, dolorem provident alias adipisci dignissimos animi laudantium similique?</p>
                        {{-- <p class="h5 text-primary mt-2">৳ {{ number_format(120.50, 2) }}</p> --}}
                        {{-- <a href="#" class="btn btn-primary mt-3 align-self-start">Buy Now</a> --}}
                    </div>
                @endif
            </div>
        @endforeach
    </div>

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

    <!-- Right Slide Modal -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h4 class="modal-title" id="exampleModalLabel">Login</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-2">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="my-1 d-grid col-md-12">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link d-none" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between d-none">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">
                        <i class="fas fa-envelope pe-2"></i>
                        Send email
                    </button>
                </div>
            </div>
        </div>
    </div>

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
