@section('title')
    {{ $companyName ?? '' }}
@endsection
<style>
    .carousel-caption.top-left {
        position: absolute;
        top: 10px;
        left: 15px;
        text-align: left;
        background: unset !important;
        padding: 5px 10px;
        border: unset !important;
        border-radius: unset !important;
        backdrop-filter: unset !important;
        background: unset !important;
        backdrop-filter: unset !important;
    }

    /* .carousel-item {
        position: relative;
        height: 400px;
    }

    .carousel-item {
        height: 400px;
    } */

    .carousel h5 {
        font-weight: bold;
        font-size: 3rem;
    }

.carousel-item {
        position: relative;
        height: 400px;
        overflow: hidden;
    }

    .carousel-item img {
        width: 100%;
        height: calc(100% + 50px);   /* Make image taller to allow for crop */
        object-fit: cover;
        object-position: top;
        display: block;
        transform: translateY(-50px); /* Crop top 50px */
    }
</style>
<section id="slide" class="p-0">
    <div class="container-fluid p-0">
        @php
            $images = ['pho1.jpg', 'pho2.jpg', 'pho3.jpg', 'pho4.jpg', 'pho5.jpg', 'pho6.jpg', 'pho7.jpg', 'pho8.jpg'];
        @endphp

        <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($images as $index => $img)
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="{{ $index }}"
                        @if ($index === 0) class="active" aria-current="true" @endif aria-current="true"
                        aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>

            <div id="companyCarousel" class="carousel slide position-relative" data-bs-ride="carousel">
                <h5 class="position-absolute top-0 start-0 m-3 text-light px-3 py-1 rounded-2 z-1">
                    {{ $companyName ?? '' }}
                </h5>

                 <div class="carousel-inner">
        @foreach ($images as $index => $img)
            <div class="carousel-item @if ($index === 0) active @endif">
                <img src="{{ asset('images/' . $img) }}" alt="Company Image">
            </div>
        @endforeach
    </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
