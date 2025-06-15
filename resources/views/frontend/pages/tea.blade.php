@extends('frontend.layouts.app')

@section('content')   
	{{-- slider --}}
	@php
		$companyName = 'Supreme tea';
	@endphp

	@include('frontend.partials.slider')


	<h1>
		About our tea and product
	</h1>

	{{-- mission --}}
	@include('frontend.partials.mission')

	{{-- vision --}}
	@include('frontend.partials.vision')   

    {{-- client --}}
	@include('frontend.partials.client')

    {{-- contact --}}
	@include('frontend.partials.contact')
@endsection
