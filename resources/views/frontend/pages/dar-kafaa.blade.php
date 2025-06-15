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
        $order = 11;
    @endphp
    @include('frontend.partials.default')

    {{-- Company owner information --}}
    @php
        $heading = '';
        $order = 12;
    @endphp
    @include('frontend.partials.productService')

    {{-- mission --}}
    @php
        $heading = 'Our Mission';
        $slogan = '';
        $order = 13;
        $position = 'left';
    @endphp
    @include('frontend.partials.singleService')

    {{-- vision --}}
    @php
        $heading = 'Our Vision';
        $slogan = '';
        $order = 14;
        $position = 'right';
    @endphp
    @include('frontend.partials.singleService')

    {{-- Our Services --}}
    @php
        $heading = 'Our Services';
        $slogan = '';
        $order = 15;
        $position = 'left';
    @endphp
    @include('frontend.partials.singleService')

	{{-- Our Services --}}
    @php
        $heading = 'Our Projects';
        $slogan = '';
        $order = 16;
        $position = 'right';
    @endphp
    @include('frontend.partials.singleService')
	
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
