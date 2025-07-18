@section('title')
    {{ $companyName ?? '' }}
@endsection

<style>
    .carousel-item {
        width: 100vw;
        height: 650px;
        background-size: cover;
        background-repeat: no-repeat;
        background-color: #000;
        background-position: center -5px;
    }

    .carousel h5 {
        font-size: 3rem;
    }

    /* Responsive adjustment for smaller devices */
    @media (max-width: 992px) {
        .carousel-item {
            height: 450px;
        }

        .carousel h5 {
            font-size: 2rem;
        }
    }

    @media (max-width: 576px) {
        .carousel-item {
            height: 300px;
        }

        .carousel h5 {
            font-size: 1.5rem;
			margin: unset !important;
			padding: unset !important;
        }
    }
</style>

<section id="slide" class="p-0">
    @php
        $images = [];
        for ($i = 1; $i <= 17; $i++) {
            $images[] = $i . '.jpg';
        }
    @endphp

    <div id="companyCarousel" class="carousel slide position-relative" data-bs-ride="carousel">
        <h5 class="position-absolute top-0 start-0 m-3 text-light px-3 py-1 rounded-2 z-1 fw-bold">
            {{ $companyName ?? '' }}
        </h5>

        <div class="carousel-inner">
            @foreach ($images as $index => $img)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"
                    style="background-image: url('{{ asset('images/slide/' . $img) }}');">
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#companyCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#companyCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

@section('js')
    <script>
        var myCarousel = document.querySelector('#companyCarousel');
        if (myCarousel) {
            new bootstrap.Carousel(myCarousel, {
                interval: 1500,
                ride: 'carousel'
            });
        }
    </script>
@endsection

