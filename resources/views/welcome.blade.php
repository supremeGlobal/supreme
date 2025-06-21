@extends('frontend.layouts.app')

@section('title')
	Supreme Family
@endsection

@section('content')
	{{-- slider --}}
	@include('frontend.partials.slider')	
	
    <section id="projects">
        <div class="container-fluid">
            <h3 class="text-center">Group Entities</h3>
            <div class="row px-2">
                @foreach($company as $item)
                    <div class="col-md-3 py-2 d-flex">
                        <div class="card hover-zoom w-100">
                            <a href="{{ $item['url'] }}">
                                <img src="{{ asset($item['image']) }}" class="card-img-top rounded" alt="Image {{ $item['name'] }}">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $item['name'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

	{{-- Client --}}
	@include('frontend.partials.client')
@endsection
