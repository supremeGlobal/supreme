<section id="singleService">
    <div class="container-fluid px-3">
        <div class="text-center">
            <h2 class="fw-bold">{{ $heading ?? '' }}</h2>
            <p class="text-muted fw-bold">{{ $slogan ?? '' }}</p>
        </div>
        @foreach ($contents->where('order', $order)->values() as $index => $item)
            <div class="row border shadow rounded-2 overflow-hidden fs-5">
                <div class="d-lg-flex w-100 align-items-stretch px-0">
                    @if ($position == 'left')
                        <!-- Even: Image Left -->
                        <div class="col-lg-4 p-0 single">
							<img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}" class="w-100 h-100 object-fit-cover"/>
                        </div>
                        <div class="col-lg-8 px-4 py-3 d-flex flex-column justify-content-start">
                            <h3 class="fw-bold d-none">{{ $item['title'] }}</h3>
                            <p class="text-muted fs-5">{!! $item['details'] !!}</p>
                        </div>
                    @else
                        <!-- Odd: Image Right -->
                        <div class="col-lg-8 px-4 py-3 d-flex flex-column justify-content-start order-2 order-lg-1">
                            <h3 class="fw-bold d-none">{{ $item['title'] }}</h3>
                            <p class="text-muted fs-5">{!! $item['details'] !!}</p>
                        </div>
                        <div class="col-lg-4 p-0 order-1 order-lg-2" >
							<img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}" class="w-100 h-100 object-fit-cover"/>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</section>