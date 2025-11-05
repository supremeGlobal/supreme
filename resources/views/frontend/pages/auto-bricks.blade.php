@extends('frontend.layouts.app')

@section('content')
	{{-- slider --}}
	@php
		$companyName = 'A&A Auto Bricks Industries Ltd';
	@endphp

	@include('frontend.partials.slider')

	{{-- about us --}}
	@php
		$topHeading = 'About Us';
		$slogan = 'Building the Future with A&A Auto Brick';
	@endphp
	@include('frontend.partials.default')

	{{-- mission --}}
	@php
		$heading = 'Our Mission';
		$slogan = '';
		$order = 6;
		$position = 'left';
	@endphp
	@include('frontend.partials.singleService')

	{{-- vision --}}
	@php
		$heading = 'Our Vision';
		$slogan = '';
		$order = 7;
		$position = 'right';
	@endphp
	@include('frontend.partials.singleService')

	{{-- Other part --}}
	@php
		$heading = 'Our Core Values';
		$slogan = '';
		$order = 8;
		$position = 'left';
	@endphp
	@include('frontend.partials.singleService')

	@php
		$topHeading = 'Introduction to Our Manufacturing Excellence';
		$slogan = '';
		$order = 9;
	@endphp
	@include('frontend.partials.default')

	@php
		$heading = '';
		$order = 10;
	@endphp
	@include('frontend.partials.productService')

	<div class="rounded-2 mx-5 p-2 border text-bg-light text-center">
		<strong class="fs-5">
			We invite you to experience the difference with A&A Auto Bricks Industries—where quality meets responsibility.
		</strong>
	</div>

    {{-- client --}}
	@include('frontend.partials.client')

    {{-- contact --}}
	@include('frontend.partials.contact')
@endsection