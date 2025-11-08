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