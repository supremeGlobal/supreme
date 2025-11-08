<style>
    #productService .row {
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;   /* force equal height */
        min-height: 350px;      /* row never smaller */
    }

    /* both columns stretch equally */
    #productService .image-col,
    #productService .text-col {
        display: flex;
        flex-direction: column;
        min-height: 350px;
    }

    /* image fills its column */
    #productService .image-col img {
        width: 100%;
        height: 80%;
        object-fit: cover;
    }

    /* --- text styles --- */
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

    /* --- responsive rules --- */
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
            min-height: auto !important; /* reset for mobile */
        }

        #productService .image-col img {
            height: 300px; /* fixed smaller height on mobile */
        }
    }

    @media (max-width: 768px) {
        .product-text {
            font-size: 1rem;
        }

        .product-service h2 {
            font-size: 1.5rem;
        }

        .product-service h3 {
            font-size: 1.2rem;
        }

        .product-text p,
        .product-text li {
            font-size: 0.95rem;
        }

        #productService .image-col {
            order: 1 !important;
        }

        #productService .text-col {
            order: 2 !important;
        }
    }
</style>

<section id="productService" class="product-service py-3">
    <div class="container-fluid px-3">
        <div class="text-center mb-4">
            <h2 class="fw-bold">{{ $heading ?? '' }}</h2>
        </div>

        @foreach ($managements as $index => $item)
            <div class="row {{ !$loop->last ? 'mb-3' : '' }} border shadow rounded-2 overflow-hidden {{ $index % 2 != 0 ? 'bg-cyan' : '' }}">

                <!-- Image Column -->
                <div class="col-lg-4 p-0 image-col h-100 {{ $index % 2 != 0 ? 'order-lg-2' : '' }}">
                    <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" tyle="height: 400px !important;" />
                </div>

                <!-- Text Column -->
                <div class="col-lg-8 px-4 py-2 d-flex flex-column justify-content-start product-text text-col h-100 {{ $index % 2 != 0 ? 'order-lg-1' : '' }}">
                    <h3 class="fw-bold">{{ $item['title'] }}</h3>
                    {!! $item['details'] !!}
                </div>
            </div>
        @endforeach
    </div>
</section>