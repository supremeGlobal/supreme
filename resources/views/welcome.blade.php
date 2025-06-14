@extends('frontend.layouts.app')

@section('title')
	Supreme Family
@endsection

@section('content')
	{{-- slider --}}
	@include('frontend.partials.slider')	
	
	@php
		$company = [
			[
				'url' => '/global',
				'name' => 'Supreme Global',
				'image' => 'mainLogo.png',
			],
			[
				'url' => '/global',
				'name' => 'Supreme Tea Limited',
				'image' => 'logo3.png',
			],
			[
				'url' => '/global',
				'name' => 'A&A Auto Bricks Industries Ltd',
				'image' => 'logo2.png',
			],
			[
				'url' => '/global',
				'name' => 'Dar Kafaa Al-Alia',
				'image' => 'logo1.png',
			],
			[
				'url' => '/global',
				'name' => 'Supreme Agro',
				'image' => 'logo6.png',
			],
			[
				'url' => '/global',
				'name' => 'North Point Medical College & Hospital Ltd.',
				'image' => 'logo7.png',
			],
			// [
			// 	'name' => 'North Palace Hotel & Resort Ltd.',
			// 	'image' => 'logo8.png',
			// ],
			[
				'url' => '/global',
				'name' => 'Garden Inn Resort & Amusement',
				'image' => 'logo5.png',
			],
			[
				'url' => '/global',
				'name' => 'ALIF & Co.',
				'image' => 'logo4.png',
			],
		];
	@endphp
    <section id="projects">
        <div class="container-fluid">
            <h3 class="text-center">Group Entities</h3>
            <div class="row px-2">
                @foreach ($company as $img)
                    <div class="col-md-3 p-3 d-flex">
                        <div class="card hover-zoom w-100">
                            <a href="{{ $img['url'] }}">
                                <img src="{{ asset('images/logo/' . $img['image']) }}" class="card-img-top rounded" alt="Image {{ $img['name'] }}">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $img['name'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="mission" style="background: #dfe6e9; display: none !important;">
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
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Collaboration</h6>
                                <p class="text-muted mb-0">We believe in the power of teamwork, fostering partnerships that
                                    achieve more together.</p>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <div class="me-3 text-success fs-4">
                                <i class="bi bi-stars"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Excellence</h6>
                                <p class="text-muted mb-0">We strive for the highest standards in quality, performance, and
                                    results.</p>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <div class="me-3 text-info fs-4">
                                <i class="bi bi-globe2"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Sustainability</h6>
                                <p class="text-muted mb-0">We are committed to responsible practices that positively impact
                                    our communities and the planet.</p>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <div class="me-3 text-danger fs-4">
                                <i class="bi bi-clipboard-check-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Accountability</h6>
                                <p class="text-muted mb-0">We take ownership of our actions, delivering on our promises with
                                    reliability and care.</p>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <div class="me-3 text-warning fs-4">
                                <i class="bi bi-lightning-charge-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Agility</h6>
                                <p class="text-muted mb-0">We adapt quickly to change, staying flexible and responsive in a
                                    fast-moving world.</p>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <div class="me-3 text-secondary fs-4">
                                <i class="bi bi-people"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Diversity & Inclusion</h6>
                                <p class="text-muted mb-0">We celebrate differences and create a culture where everyone
                                    feels valued and heard.</p>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <div class="me-3 text-dark fs-4">
                                <i class="bi bi-book-half"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Continuous Learning</h6>
                                <p class="text-muted mb-0">We encourage growth through learning, curiosity, and professional
                                    development.</p>
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

    <section id="vision" style="background: #7ed6df; display: none !important;">
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
                        <li class="d-flex mb-4">
                            <div class="me-3 text-info fs-4">
                                <i class="bi bi-lightbulb-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Innovation Leadership</h6>
                                <p class="text-muted mb-0">To be recognized as a catalyst for groundbreaking ideas and
                                    transformative solutions.</p>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <div class="me-3 text-danger fs-4">
                                <i class="bi bi-bar-chart-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Sustainable Growth</h6>
                                <p class="text-muted mb-0">To achieve long-term success while making a positive impact on
                                    society and the environment.</p>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <div class="me-3 text-secondary fs-4">
                                <i class="bi bi-award-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Industry Recognition</h6>
                                <p class="text-muted mb-0">To earn respect and credibility as a benchmark of excellence in
                                    our field.</p>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <div class="me-3 text-dark fs-4">
                                <i class="bi bi-emoji-smile-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-semibold mb-1">Customer Delight</h6>
                                <p class="text-muted mb-0">To exceed expectations and create meaningful, lasting
                                    relationships with our clients.</p>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

	{{-- slider --}}
	@include('frontend.partials.projects')
@endsection
