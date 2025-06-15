<section class="aboutUs">
    <div class="container-fluid px-5">
        <div class="text-center">
            <h2 class="fw-bold">{{$topHeading ?? ''}}</h2>
            <p class="text-muted fw-bold">{{ $slogan ?? '' }}</p>
        </div>
        <div class="row border shadow rounded-2 overflow-hidden">
            <div class="col-12 d-flex flex-column justify-content-start p-3 text-muted fs-5">
				@foreach ($contents->where('order', $order) as $item)
					<p>{!! $item->details !!}</p>
				@endforeach
            </div>
        </div>
    </div>
</section>


