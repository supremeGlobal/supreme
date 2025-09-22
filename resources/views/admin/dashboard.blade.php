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
				'fa-solid fa-camera',
				'fa-solid fa-circle-info',
				'fa-solid fa-building',
				'fa-solid fa-newspaper',
				'fa-solid fa-envelope',
				'fa-solid fa-users',
			];
		@endphp

		{{-- Company-wise stats --}}
		@foreach ($companies as $company)
			<h3 class="mb-2">{{ $company['name'] }}</h3>
			<div class="row mb-1">
				@foreach ($company['types'] as $key => $item)
					<div class="col-lg-3 col-6">
						<a href="{{ $item['link'] }}" class="text-decoration-none">
							<div class="small-box {{ $colors[$key % count($colors)] }} p-2">
								<div class="inner">
									<h3>{{ $item['value'] ?? 0 }}</h3>
									<h4>{{ $item['title'] }}</h4>
								</div>
								<i class="{{ $icon[$key % count($icon)] }} small-box-icon"></i>
							</div>
						</a>
					</div>
				@endforeach
			</div>
		@endforeach

		<h3 class="mb-3">Other setting info</h3>
        <div class="row">
            @foreach ($settings as $key => $item)
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
