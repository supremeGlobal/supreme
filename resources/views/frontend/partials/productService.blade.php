<style>
    .product-service {
        background-color: #f8f9fa;
    }

    .product-text {
        font-size: 1.25rem;
    }

    .product-text p {
        margin-bottom: 1rem;
        line-height: 1.5;
        text-align: justify;
    }

    .product-text ul {
        padding-left: 1.25rem;
        margin-bottom: 1rem;
    }

    .product-text li {
        margin-bottom: 0.5rem;
        line-height: 1.2;
        text-align: justify;
    }

    #productService img {
        width: 100%;
        object-fit: cover;
        aspect-ratio: 10 / 9;
        height: 400px !important;
    }

    @media (max-width: 576px) {
        .product-text {
            font-size: 1rem;
        }

        .product-text p,
        .product-text li {
            font-size: 0.95rem;
        }

        .product-service h2 {
            font-size: 1.5rem;
        }

        .product-service h3 {
            font-size: 1.2rem;
        }

        #productService .row {
            flex-direction: column !important;
        }

        #productService .col-lg-4,
        #productService .col-lg-8 {
            width: 100% !important;
            flex: 0 0 100% !important;
            order: unset !important;
        }

        #productService img {
            height: auto;
            max-height: 250px;
        }
    }

    @media (min-width: 577px) and (max-width: 768px) {
        .product-text {
            font-size: 1.1rem;
        }

        .product-service h2 {
            font-size: 2rem;
        }

        .product-service h3 {
            font-size: 1.4rem;
        }

        .product-text p,
        .product-text li {
            font-size: 1rem;
        }

        #productService img {
            max-height: 300px;
        }
    }
</style>

<section id="productService" class="product-service py-3">
    <div class="container-fluid px-3">
        <div class="text-center mb-4">
            <h2 class="fw-bold">{{ $heading ?? '' }}</h2>
        </div>

        @foreach ($contents->where('order', $order)->values() as $index => $item)
            <div
                class="row align-items-stretch {{ !$loop->last ? 'mb-3' : '' }} border shadow rounded-2 overflow-hidden {{ $index % 2 != 0 ? 'bg-cyan' : '' }}">
                @if ($index % 2 == 0)
                    <div class="col-lg-4 p-0">
                        <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}"
                            class="w-100 h-100 object-fit-cover" />
                    </div>
                    <div class="col-lg-8 px-4 py-2 d-flex flex-column justify-content-start product-text">
                        <h3 class="fw-bold">{{ $item['title'] }}</h3>
                        {!! $item['details'] !!}
                    </div>
                @else
                    <div
                        class="col-lg-8 px-4 py-2 d-flex flex-column justify-content-start product-text order-2 order-lg-1">
                        <h3 class="fw-bold">{{ $item['title'] }}</h3>
                        {!! $item['details'] !!}
                    </div>
                    <div class="col-lg-4 p-0 order-1 order-lg-2">
                        <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}"
                            class="w-100 h-100 object-fit-cover w-100 h-100 object-fit-cover" />
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</section>