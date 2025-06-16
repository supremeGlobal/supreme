@extends('frontend.layouts.app')

@section('content')
    {{-- slider --}}
    @php
        $companyName = 'Garden Inn Resort and Amusement';
    @endphp
    @include('frontend.partials.slider')

    {{-- about us --}}
    @php
        $topHeading = 'About Us';
        $slogan = 'Where Comfort Meets Adventure';
        $order = 23;
    @endphp
    @include('frontend.partials.default')

	{{-- mission --}}
	@php
		$heading = 'Our Mission';
		$slogan = '';
		$order = 24;
		$position = 'left';
	@endphp
	@include('frontend.partials.singleService')

	{{-- vision --}}
	@php
		$heading = 'Our Vision';
		$slogan = '';
		$order = 25;
		$position = 'right';
	@endphp
	@include('frontend.partials.singleService')

    {{-- Other information --}}
    @php
        $heading = 'What We Offer';
        $order = 26;
    @endphp
    @include('frontend.partials.productService')
	
    @php
        $heading = 'Why Choose Garden Inn Resort and Amusement?';
        $slogan = '';
        $order = 27;
        $position = 'left';
    @endphp
    @include('frontend.partials.singleService')
	
    @php
        $heading = 'Book Your Experience';
        $slogan = '';
        $order = 28;
        $position = 'right';
    @endphp
    @include('frontend.partials.singleService')

    {{-- client --}}
    @include('frontend.partials.client')

    {{-- contact --}}
    @include('frontend.partials.contact')
@endsection