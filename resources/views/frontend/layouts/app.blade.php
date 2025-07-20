<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		{{-- <meta http-equiv="refresh" content="6"> --}}

		<link rel="dns-prefetch" href="//fonts.bunny.net">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

		<title> @yield('title') </title>
		@include('frontend.layouts.head')
		@yield('css')
	</head>

	<body>
		@include('frontend.layouts.header')
	
		<main>
			@yield('content')
		</main>
		
		@extends('frontend.pages.common')

		@include('frontend.layouts.footer')
		@yield('js')
	</body>
</html>
