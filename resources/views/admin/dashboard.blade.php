@extends('admin.layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid pt-4">
		@php
			$colors = [
				'text-bg-primary',
				'text-bg-secondary',
				'text-bg-success',
				'text-bg-info',
				'text-bg-warning',
				'text-bg-danger',
				'text-bg-light',
				'text-bg-dark',
			];

			$icon = [
				'fa-solid fa-building',
				'fa-solid fa-circle-info',
				'fa-solid fa-users',
				'fa-solid fa-newspaper',
				// 'fa-solid fa-camera',
				'fa-solid fa-envelope',
			];
		@endphp

		<h3 class="mb-3">Supreme global</h3>

        <div class="row">
            @foreach ($types as $key => $item)
                <div class="col-lg-3 col-6">
                    <a href="{{ $item['link'] }}" class="text-decoration-none">
                        <div class="small-box {{ $colors[$key % count($colors)] }} p-2">
                            <div class="inner">
                                <h3>{{ $item['value'] ?? 0 }}</h3>
                                <h4>{{ $item['title'] }}</h4>
                            </div>
                            <i class="{{ $icon[$key] }} small-box-icon"></i>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
