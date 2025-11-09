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

	
	{{-- mission/vision --}}
	@php 
		$heading = '';
	@endphp
	@include('frontend.partials.productService2')


	@php
		$topHeading = 'Introduction to Our Manufacturing Excellence';
		$slogan = '';		
	@endphp
	@include('frontend.partials.default2')

	@php 
		$heading = '';
		$skip = 4;
	@endphp
	@include('frontend.partials.productService3')

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