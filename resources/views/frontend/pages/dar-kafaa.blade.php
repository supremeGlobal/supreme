@extends('frontend.layouts.app')

@section('content')
    {{-- slider --}}
    @php
        $companyName = 'Dar Kafaa Al-Alia';
    @endphp

    @include('frontend.partials.slider')

    {{-- about us --}}
    @php
        $topHeading = 'About Us';
        $slogan = 'Let’s Build a Better Future';
    @endphp
    @include('frontend.partials.default')

    {{-- Company owner information --}}
    @php
        $heading = '';
	@endphp
	@include('frontend.partials.managementTeam')
	

	{{-- mission/vision --}}
	@php
        $heading = '';
	@endphp
	@include('frontend.partials.productService')

	
    <div class="rounded-2 mx-5 p-2 border text-bg-light text-center">
        <strong class="fs-5 fst-italic">
            Dar Kafaa Al-Alia is committed to building a better future through integrity, innovation, and excellence in every project we undertake.
        </strong>
    </div>

    {{-- client --}}
    @include('frontend.partials.client')

    {{-- contact --}}
    @include('frontend.partials.contact')
@endsection
