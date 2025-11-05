<style>
    #client .container-fluid {
        overflow: hidden;
        background: #f8f9fa;
        padding: 2rem 0;
    }

    #client .track {
        display: flex;
        gap: 2rem;
        align-items: center;
        width: max-content;
        will-change: transform;
    }

    .client {
        flex-shrink: 0;
        padding: 0.2rem !important;
        border: 1px solid #dee2e6 !important;
        border-radius: 0.25rem !important;
        transition: transform 0.3s ease;
    }

    .client:hover {
        transform: scale(1.03);
    }

    .client-box {
        width: 180px;
        height: 120px;
        border-radius: 10px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
    }

    .client-box img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        border-radius: 10px;
        transition: filter 0.3s ease, transform 0.3s ease;
    }

    .client-box img:hover {
        filter: grayscale(0%);
        transform: scale(1.1);
    }

    .fallback-logo {
        width: 100%;
        height: 100%;
        font-weight: 600;
        font-size: 16px;
        display: -webkit-box;
        align-items: center;
        justify-content: center;
        text-align: center;
        line-height: 1.5;
        padding: 5px;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

<section id="client">
    <div class="container-fluid text-center">
        <h2 class="fw-bold">Our Clients</h2>
        <p class="text-muted">Trusted by industry leaders</p>
        <div class="marquee">
            <div class="track" id="client-track">
                @foreach ($clients as $item)
                    <div class="client">
                        <div class="client-box">
                            <img src="{{ asset($item->image) }}" alt="{{ $item->name }}"
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
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const track = document.getElementById("client-track");
        const speed = 80; // pixels per second
        let lastTime = null;
        let pos = 0;

        function animate(time) {
            if (lastTime !== null) {
                const delta = (time - lastTime) / 1000; // seconds since last frame
                pos -= speed * delta; // move at constant px/sec
                track.style.transform = `translateX(${pos}px)`;

                // check if first element is fully outside left
                const first = track.children[0];
                const firstWidth = first.offsetWidth + 32; // width + gap (2rem ≈ 32px)
                if (pos <= -firstWidth) {
                    pos += firstWidth;
                    track.appendChild(first); // move smoothly to end
                    track.style.transform = `translateX(${pos}px)`;
                }
            }
            lastTime = time;
            requestAnimationFrame(animate);
        }

        requestAnimationFrame(animate);
    });
</script>