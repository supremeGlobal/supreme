<section id="client">
    <div class="container-fluid text-center">
        <h2 class="fw-bold">Our Clients</h2>
        <p class="text-muted">Trusted by industry leaders</p>
        <div class="wrapper">
            @foreach ($company as $img)
                <div class="client">
                    <img alt="Client Logo" src="{{ asset($img['image']) }}">
                </div>
            @endforeach
        </div>
    </div>
</section>