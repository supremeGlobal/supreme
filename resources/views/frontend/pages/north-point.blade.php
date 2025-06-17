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
        $order = 35;
    @endphp
    @include('frontend.partials.default')

    {{-- mission --}}
    @php
        $heading = 'Our Mission';
        $slogan = '';
        $order = 36;
        $position = 'right';
    @endphp
    @include('frontend.partials.singleService')

    {{-- vision --}}
    @php
        $heading = 'Our Vision';
        $slogan = '';
        $order = 37;
        $position = 'left';
    @endphp
    @include('frontend.partials.singleService')

    {{-- Project Highlights --}}
	@php
        $heading = 'Project Highlights';
        $slogan = '';
        $order = 38;
        $position = 'right';
    @endphp
    @include('frontend.partials.singleService')

    {{-- Company owner information --}}
    @php
        $heading = 'Key Leadership';
        $order = 39;
    @endphp
    @include('frontend.partials.productService')

    {{-- Next three(3) part here --}}
	@php
        $heading = 'Position, Recognition, and Tomorrow';
        $order = 40;
    @endphp
    @include('frontend.partials.productService')

    {{-- client --}}
    @include('frontend.partials.client')

    {{-- contact --}}
    @include('frontend.partials.contact')
@endsection
