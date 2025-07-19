<style>
    .aboutUs {
        background-color: #f8f9fa;
    }

    .about-text {
        font-size: 1.25rem;
        /* base size for normal devices */
    }

    @media (max-width: 576px) {
        .about-text p {
            font-size: 0.95rem;
            text-align: justify;
        }

        .aboutUs h2 {
            font-size: 1.5rem;
        }

        .aboutUs .slogan {
            font-size: 0.9rem;
            text-align: center;
        }
    }

    @media (min-width: 577px) and (max-width: 768px) {
        .about-text {
            font-size: 1rem;
        }

        .aboutUs h2 {
            font-size: 2rem;
        }

        .aboutUs p {
            font-size: 1rem;
        }
    }
</style>

<section class="aboutUs py-3">
    <div class="container-fluid px-3">
        <div class="text-center">
            <h2 class="fw-bold">{{ $topHeading ?? '' }}</h2>
            <p class="text-muted fw-semibold fs-6 fs-md-5 slogan">{{ $slogan ?? '' }}</p>
        </div>
        <div class="row border shadow rounded-2 overflow-hidden">
            <div class="col-12 p-2 about-text">
                @foreach ($contents->where('order', $order) as $item)
                    <p class="mb-3">{!! $item->details !!}</p>
                @endforeach
            </div>
        </div>
    </div>
</section>
