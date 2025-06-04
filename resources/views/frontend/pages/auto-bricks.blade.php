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

    @php
        $bricks = [
            [
                'name' => 'Picket Bricks 3 Holo',
                'image' => 'logo1.png',
            ],
            [
                'name' => 'Special Bricks 3 Holo',
                'image' => 'logo2.png',
            ],
            [
                'name' => 'Regular Bricks 3 Holo',
                'image' => 'logo3.png',
            ],
            [
                'name' => 'Half Bricks 3 Holo',
                'image' => 'logo4.png',
            ]
        ];
    @endphp

    <section tyle="background: #dfe6e9">
        <div class="container-fluid px-5" style="padding: 0px 150px !important">
            <div class="text-center mb-5">
                <h2 class="fw-bold">About our auto bricks</h2>
                <p class="text-muted">What drives us every day.</p>
            </div>
			<style>
				.flex-column{
					background: ivory !important;
				}
			</style>
            @foreach ($bricks as $index => $product)
                <div class="row mb-5 border shadow rounded-2 overflow-hidden {{ $index % 2 != 0 ? 'bg-cyan' : '' }}">
                    @if ($index % 2 == 0)
                        <!-- Even: Image Left -->
                        <div class="col-12 col-lg-4 mb-4 mb-lg-0 p-0">
                            <img src="{{ asset('images/bricks/' . $product['image']) }}" alt="This is name"
                                class="w-100 h-100 object-fit-cover rounded-start"
                                style="height: 100%; max-height: 350px;" />
                        </div>
                        <div class="col-12 col-lg-8 d-flex flex-column justify-content-start p-4">
                            <h3 class="fw-bold">{{$product['name']}}</h3>
                            <p class="text-muted fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore natus
                                voluptate cumque voluptates... Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem maxime quis dignissimos. Quas modi, eos recusandae nisi doloremque id quibusdam repellat aliquid laudantium placeat. Repellat autem distinctio nostrum deserunt explicabo?</p>
                        </div>
                    @else
                        <!-- Odd: Image Right -->
                        <div class="col-12 col-lg-4 order-lg-2 mb-4 mb-lg-0 p-0">
                            <img src="{{ asset('images/bricks/' . $product['image']) }}" alt="This is name"
                                class="w-100 h-100 object-fit-cover rounded-end" style="height: 100%; max-height: 350px;" />
                        </div>
                        <div class="col-12 col-lg-8 order-lg-1 d-flex flex-column justify-content-start p-4">
                            <h3 class="fw-bold">{{$product['name']}}</h3>
                            <p class="text-muted fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore natus
                                voluptate cumque voluptates... Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem maxime quis dignissimos. Quas modi, eos recusandae nisi doloremque id quibusdam repellat aliquid laudantium placeat. Repellat autem distinctio nostrum deserunt explicabo?</p>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </section>

    <section id="client">
        <div class="container-fluid text-center px-5">
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

    <section id="contact">
        <div class="container-fluid">
            <h2 class="fw-bold text-center">Contact auto bricks</h2>
            <p class="text-muted text-center">Contact our customer care</p>
            <div class="row justify-content-around">
                <div class="col-md-4">
                    <div class="rounded-3 p-3 border text-bg-light">
                        <h5 class="pb-2">
                            <i class="fas fa-map-marker-alt fs-5 pe-2"></i>
                            Address
                        </h5>
                        <p>Tropical Mollah Tower, Level 13th, 15/1-5 Pragati Sarani, Middle Badda, Dhaka-1212, Bangladesh
                        </p>
                    </div>

                    <div class="rounded-3 p-3 border text-bg-light p-3 my-2">
                        <h5 class="pb-2">
                            <i class="fas fa-phone-alt fs-5 pe-2"></i>
                            Sales Team
                        </h5>
                        <p>
                            <strong>Land line: </strong> +880 123456789
                            <br>
                            <strong class="pt-4">Whatsapp: </strong> +880 123456789
                        </p>
                    </div>

                    <div class="rounded-3 p-3 border text-bg-light p-3">
                        <h5 class="pb-2">
                            <i class="fas fa-envelope fs-5 pe-2"></i>
                            Email
                        </h5>
                        <p>
                            sales@autobricks.com
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps?q=23.779395286290402,90.42576674365971&z=14&output=embed"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>	
@endsection