@section('title')
    {{ $companyName ?? '' }}
@endsection
<style>
   .carousel-item {
    height: 600px;
    background-size: cover;
    /* background-position: top center;  */
	/* Changed from center to top center */
    background-repeat: no-repeat;
    background-color: #000;
    /* width: 100vw; */
}

    .carousel h5 {
        font-size: 3rem;
    }
</style>

<section id="slide" class="p-0">
    @php
        $images = ['pho1.jpg', 'pho2.jpg', 'pho3.jpg', 'pho4.jpg', 'pho5.jpg', 'pho6.jpg', 'pho7.jpg', 'pho8.jpg'];
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
