@extends('frontend.layouts.app')

@section('content')   
	{{-- slider --}}
	@php 
		$companyName = 'Supreme Tea';

		$office_location = $companyInfo['supreme_tea_location'];        
        $office_help_desk = $companyInfo['contact_number'];        
        $office_location_map = $companyInfo['supreme_tea_location_map'];
	@endphp
	@include('frontend.partials.slider')

	{{-- about us --}}
	@php
		$topHeading = 'About Us';
		$slogan = 'The Cup of Happiness';
		$order = 3;
	@endphp
	@include('frontend.partials.default')

	{{-- product  & service --}}
	@php 
		$heading = 'About Our Tea';
		$order = 4;
	@endphp
	@include('frontend.partials.productService')

    {{-- client --}}
	@include('frontend.partials.client')

    {{-- contact --}}
	@include('frontend.partials.contact')
@endsection
