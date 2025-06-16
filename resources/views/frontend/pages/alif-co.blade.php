@extends('frontend.layouts.app')

@section('content')
    {{-- slider --}}
    @php
        $companyName = 'ALIF & CO.';
    @endphp
    @include('frontend.partials.slider')

    {{-- about us --}}
    @php
        $topHeading = 'About Us';
        $slogan = 'Your Trusted Partner in Global Trading and Construction Solutions';
        $order = 29;
    @endphp
    @include('frontend.partials.default')

    {{-- Our Division --}}
    @php
        $heading = 'Our Trading Division';
        $order = 30;
    @endphp
    @include('frontend.partials.productService')


    {{-- Our Construction Division --}}
    @php
        $heading = 'Our Construction Division';
        $order = 31;
    @endphp
    @include('frontend.partials.productService')

    {{-- mission --}}
    @php
        $heading = 'Our Mission';
        $slogan = '';
        $order = 32;
        $position = 'left';
    @endphp
    @include('frontend.partials.singleService')

    {{-- vision --}}
    @php
        $heading = 'Our Vision';
        $slogan = '';
        $order = 33;
        $position = 'right';
    @endphp
    @include('frontend.partials.singleService')

    {{-- Why Choose us --}}
    @php
        $heading = 'Why Choose Alif & Co.?';
        $slogan = '';
        $order = 34;
        $position = 'left';
    @endphp
    @include('frontend.partials.singleService')

    {{-- client --}}
    @include('frontend.partials.client')

    {{-- contact --}}
    @include('frontend.partials.contact')
@endsection