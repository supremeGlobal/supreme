@extends('frontend.layouts.app')

@section('content')
	{{-- slider --}}
	@php
		$companyName = 'A&A Auto Bricks Industries Ltd';
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

	{{-- mission --}}
	@include('frontend.partials.mission')

	{{-- vision --}}
	@include('frontend.partials.vision')   

    {{-- client --}}
	@include('frontend.partials.client')

    {{-- contact --}}
	@include('frontend.partials.contact')
@endsection