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
				'url' => '/supreme-tea',
				'name' => 'Supreme Tea Limited',
				'image' => 'logo3.png',
			],
			[
				'url' => '/auto-bricks',
				'name' => 'A&A Auto Bricks Industries Ltd',
				'image' => 'logo2.png',
			],
			[
				'url' => '/dar-kafaa',
				'name' => 'Dar Kafaa Al-Alia',
				'image' => 'logo1.png',
			],
			[
				'url' => '/supreme-agro',
				'name' => 'Supreme Agro',
				'image' => 'logo6.png',
			],
			[
				'url' => '/north-point',
				'name' => 'North Point Medical College & Hospital Ltd.',
				'image' => 'logo7.png',
			],
			// [
			// 	'name' => 'North Palace Hotel & Resort Ltd.',
			// 	'image' => 'logo8.png',
			// ],
			[
				'url' => '/garden-inn',
				'name' => 'Garden Inn Resort & Amusement',
				'image' => 'logo5.png',
			],
			[
				'url' => '/alif-co',
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
                    <div class="col-md-3 py-2 d-flex">
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

	{{-- Client --}}
	@include('frontend.partials.client')
@endsection
