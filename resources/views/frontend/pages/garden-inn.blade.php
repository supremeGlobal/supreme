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
    @endphp
    @include('frontend.partials.default')


	{{-- mission/vision --}}
	@php
        $heading = '';
	@endphp
	@include('frontend.partials.productService')


    {{-- client --}}
    @include('frontend.partials.client')

    {{-- contact --}}
    @include('frontend.partials.contact')
@endsection