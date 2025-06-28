<section id="client">
    <div class="container-fluid text-center">
        <h2 class="fw-bold">Our Clients</h2>
        <p class="text-muted">Trusted by industry leaders</p>
        <div class="wrapper">
            @foreach ($client as $item)
                <div class="client">
                    <div class="client-box">
                        <img src="{{ asset($item->image) }}"
                             alt="{{ $item->name }}"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                             loading="lazy">
                        <div class="fallback-logo" style="display: none;">
                            {{ $item->name }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>