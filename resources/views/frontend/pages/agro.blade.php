@extends('frontend.layouts.app')

@section('content')
    {{-- slider --}}
    @php
        $companyName = 'Supreme Agro';
    @endphp

    @include('frontend.partials.slider')

    {{-- about us --}}
    @php
        $topHeading = 'About Us';
        $slogan = 'Nurturing Nature. Sustaining Lives.';
        $order = 17;
    @endphp
    @include('frontend.partials.default')

	{{-- mission --}}
	@php
		$heading = 'Our Mission';
		$slogan = '';
		$order = 18;
		$position = 'left';
	@endphp
	@include('frontend.partials.singleService')

	{{-- vision --}}
	@php
		$heading = 'Our Vision';
		$slogan = '';
		$order = 19;
		$position = 'right';
	@endphp
	@include('frontend.partials.singleService')

    {{-- Other information --}}
    @php
        $heading = 'Our Core Activities';
        $order = 20;
    @endphp
    @include('frontend.partials.productService')    
	
    @php
        $heading = 'Sustainability & Social Responsibility';
        $slogan = '';
        $order = 21;
        $position = 'left';
    @endphp
    @include('frontend.partials.singleService')
	
    @php
        $heading = 'Why Choose Supreme Agro?';
        $slogan = '';
        $order = 22;
        $position = 'right';
    @endphp
    @include('frontend.partials.singleService')

    {{-- client --}}
    @include('frontend.partials.client')

    {{-- contact --}}
    @include('frontend.partials.contact')
@endsection