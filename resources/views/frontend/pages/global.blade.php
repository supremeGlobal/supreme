@extends('frontend.layouts.app')

@section('content')
	{{-- slider --}}
	@php
		$companyName = 'Supreme Global';
	@endphp

	@include('frontend.partials.slider')    

    {{-- product  & service --}}
	@php
		$order = 1;
	@endphp
	@include('frontend.partials.aboutUs')

   	{{-- product  & service --}}
	@include('frontend.partials.productService')

   	{{-- client --}}
	@include('frontend.partials.client')

    {{-- contact --}}
	@include('frontend.partials.contact')
@endsection
