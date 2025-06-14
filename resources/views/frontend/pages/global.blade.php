@extends('frontend.layouts.app')

@section('content')

	{{-- slider --}}
	@php
		$companyName = 'Supreme Global';
	@endphp

	@include('frontend.partials.slider')

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

    <style>
        .container-fluid {
            padding: 0px 50px !important;
        }
    </style>

    <section tyle="background: #dfe6e9">
        <div class="container-fluid">
            <div class="text-center mb-5">
                <h2 class="fw-bold">About Us</h2>
                <p class="text-muted">Innovation | Sustainability | Excellence</p>
            </div>
            <div class="row mb-5 border shadow rounded-2 overflow-hidden">
                <div class="col-12 d-flex flex-column justify-content-start p-3 text-muted fs-5">
                    <p>{{ $global['aboutUs'] }}</p>
                    <p>{{ $global['aboutUs2'] }}</p>
                </div>
            </div>
        </div>
    </section>

    @php
        $global = [
            [
                'name' => 'Human Resource Management',
                'image' => 'logo1.png',
                'content' => $global['hrm'],
            ],
            [
                'name' => 'Manpower Recruitment',
                'image' => 'logo1.png',
                'content' => $global['recruitment'],
            ],
            [
                'name' => 'Travel & Hospitality',
                'image' => 'logo1.png',
                'content' => $global['travel'],
            ],
            [
                'name' => 'Medical Tourism',
                'image' => 'logo1.png',
                'content' => $global['medical'],
            ],
            [
                'name' => 'Consultancy Services',
                'image' => 'logo1.png',
                'content' => $global['consultancy'],
            ],
            [
                'name' => 'Construction Works',
                'image' => 'logo1.png',
                'content' => $global['construction'],
            ],
            [
                'name' => 'Operation & Maintenance and Contractual Manpower Supply',
                'image' => 'logo1.png',
                'content' => $global['operation'],
            ],
            [
                'name' => 'Why Choose Supreme Global?',
                'image' => 'logo1.png',
                'content' => $global['choose'],
            ],
        ];
    @endphp

    <section>
        <div class="container-fluid px-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Divisions</h2>
            </div>
            @foreach ($global as $index => $page)
                <div class="row mb-5 border shadow rounded-2 overflow-hidden {{ $index % 2 != 0 ? 'bg-cyan' : '' }} fs-5">
                    <div class="d-lg-flex w-100 align-items-stretch">
                        @if ($index % 2 == 0)
                            <!-- Even: Image Left -->
                            <div class="col-lg-4 p-0">
                                <div class="h-100">
                                    <img src="{{ asset('images/global/' . $index . '.jpg') }}" alt="{{ $page['name'] }}"
                                        class="w-100 h-100 object-fit-cover" />
                                </div>
                            </div>
                            <div class="col-lg-8 px-4 py-3 d-flex flex-column justify-content-start">
                                <h3 class="fw-bold">{{ $page['name'] }}</h3>
                                <p class="text-muted fs-5">{!! $page['content'] !!}</p>
                            </div>
                        @else
                            <!-- Odd: Image Right -->
                            <div class="col-lg-8 px-4 py-3 d-flex flex-column justify-content-start order-2 order-lg-1">
                                <h3 class="fw-bold">{{ $page['name'] }}</h3>
                                <p class="text-muted fs-5">{!! $page['content'] !!}</p>
                            </div>
                            <div class="col-lg-4 p-0 order-1 order-lg-2">
                                <div class="h-100">
                                    <img src="{{ asset('images/global/' . $index . '.jpg') }}" alt="{{ $page['name'] }}"
                                        class="w-100 h-100 object-fit-cover" />
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>

   	{{-- slider --}}
	@include('frontend.partials.projects')

    <section id="contact">
        <div class="container-fluid">
            <h2 class="fw-bold text-center">Contact Supreme Global</h2>
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
