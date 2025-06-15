@extends('frontend.layouts.app')

@section('content')
	{{-- slider --}}
	@php
		$companyName = 'Supreme Global';
	@endphp

	@include('frontend.partials.slider')    

    {{-- about us --}}
	@php
		$topHeading = 'About Us';
		$slogan = 'Innovation | Sustainability | Excellence';
		$order = 1;
	@endphp
	@include('frontend.partials.default')

   	{{-- product  & service --}}
	@php
		$heading = 'Our Divisions';
		$order = 2;
	@endphp
	@include('frontend.partials.productService')

   	{{-- client --}}
	@include('frontend.partials.client')

    {{-- contact --}}
	@include('frontend.partials.contact')
@endsection
