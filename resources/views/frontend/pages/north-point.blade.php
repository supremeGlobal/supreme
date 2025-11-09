@extends('frontend.layouts.app')

@section('content')
    {{-- slider --}}
    @php
        $companyName = 'North Point Medical College and Hospital';
    @endphp
    @include('frontend.partials.slider')

    {{-- about us --}}
    @php
        $topHeading = 'About Us';
        $slogan = 'Bridging Nations, Healing Generations';
    @endphp
    @include('frontend.partials.default')


	{{-- mission/vision --}}
	@php 
		$heading = '';
	@endphp
	@include('frontend.partials.productService2')


	{{-- Company owner information --}}
    @php
        $heading = 'Key Leadership';
	@endphp
	@include('frontend.partials.managementTeam')


	{{-- Position, Recognition, and Tomorrow --}}
	@php 
		$heading = 'Position, Recognition, and Tomorrow';
		$skip = 3;
	@endphp
	@include('frontend.partials.productService3')
	

    {{-- client --}}
    @include('frontend.partials.client')

    {{-- contact --}}
    @include('frontend.partials.contact')
@endsection
