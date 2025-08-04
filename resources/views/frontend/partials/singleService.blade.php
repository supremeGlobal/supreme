<style>
    #singleService .content-row {
        min-height: 350px;
    }

    #singleService .d-lg-flex {
        display: flex;
        align-items: stretch;
        flex-wrap: wrap;
    }

    #singleService .img-container {
        display: flex;
    }

    #singleService .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>



<section id="singleService">
    <div class="container-fluid px-3">
        <div class="text-center">
            <h2 class="fw-bold">{{ $heading ?? '' }}</h2>
            <p class="text-muted fw-bold">{{ $slogan ?? '' }}</p>
        </div>
        @foreach ($contents->where('order', $order)->values() as $index => $item)
            <div class="row border shadow rounded-2 overflow-hidden fs-5 content-row mb-4">
                <div class="d-lg-flex w-100 align-items-stretch px-0">
                    @if ($position == 'left')
                        <!-- Image Left -->
                        <div class="col-lg-4 p-0 img-container">
                            <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}" />
                        </div>
                        <div class="col-lg-8 px-4 py-3 d-flex flex-column justify-content-start">
                            <h3 class="fw-bold d-none">{{ $item['title'] }}</h3>
                            <p class="text-muted fs-5">{!! $item['details'] !!}</p>
                        </div>
                    @else
                        <!-- Image Right -->
                        <div class="col-lg-8 px-4 py-3 d-flex flex-column justify-content-start order-2 order-lg-1">
                            <h3 class="fw-bold d-none">{{ $item['title'] }}</h3>
                            <p class="text-muted fs-5">{!! $item['details'] !!}</p>
                        </div>
                        <div class="col-lg-4 p-0 img-container order-1 order-lg-2">
                            <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}" />
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</section>
