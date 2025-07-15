<section id="footer" style="color: #fff; background: #192733;" class="pb-0">
    <div class="container-fluid p-3 fs-5">
        <div class="row justify-content-between">
            <div class="col-12 col-md-4 footerContact mb-2 mb-md-0">
                <h3>Contract</h3>
                <ul class="ps-0 mb-0">
                    @if (!empty($companyInfo['contact_number']))
                        <li class="item mb-0">
                            <a href="tel:{{ $companyInfo['contact_number'] }}" class="text-white text-decoration-none">
                                <i class="fas fa-phone-alt me-2"></i>
                                {{ $companyInfo['contact_number'] }}
                            </a>
                        </li>
                    @endif

                    @if (!empty($companyInfo['info_email']))
                        <li class="item mb-0">
                            <a href="mailto:{{ $companyInfo['info_email'] }}" class="text-white text-decoration-none">
                                <i class="fas fa-envelope me-2"></i>
                                {{ $companyInfo['info_email'] }}
                            </a>
                        </li>
                    @endif

                    @if (!empty($companyInfo['sales_email']))
                        <li class="item mb-0">
                            <a href="mailto:{{ $companyInfo['sales_email'] }}" class="text-white text-decoration-none">
                                <i class="fas fa-envelope me-2"></i>
                                {{ $companyInfo['sales_email'] }}
                            </a>
                        </li>
                    @endif

                    @if (!empty($companyInfo['head_office_location_map']))
                        <li class="item mb-0">
                            <button class="btn btn-success w-100 w-md-50 rounded-1" data-bs-toggle="modal"
                                data-bs-target="#map">
                                <i class="fas fa-map-marker-alt me-1"></i>
                                Head office location
                            </button>
                        </li>
                    @endif
                </ul>
            </div>

            <div class="col-12 col-md-4 footerContact mb-2 mb-md-0">
                <h3>Address</h3>
                <ul class="ps-0 mb-0">
                    @if (!empty($companyInfo['head_office_location']))
                        <li class="item mb-3">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            <strong>Head office:</strong>
                            <div class="mt-2">
                                {{ $companyInfo['head_office_location'] }}
                            </div>
                        </li>
                    @endif

                    @if (!empty($companyInfo['send_email_us']))
                        <li class="item">
                            <button type="button" class="btn btn-primary w-100 w-md-50 rounded-1"
                                data-bs-toggle="modal" data-bs-target="#emailUs">
                                <i class="fas fa-envelope me-1"></i>
                                Send email us
                            </button>
                        </li>
                    @endif
                </ul>
            </div>
        </div>

        <hr class="mb-3 border-light">

        <div class="row justify-content-between align-items-center text-center text-md-start">
            <div class="col-12 col-md-6 mb-3 mb-md-0">
                <p class="mb-0">© Copyright {{ date('Y') }}. Supreme Global</p>
            </div>

            <div class="col-12 col-md-6">
                <ul
                    class="footerSocial list-inline d-flex justify-content-center justify-content-md-end flex-wrap gap-2 mb-0">
                    @php
                        $socials = ['facebook', 'instagram', 'linkedin', 'youtube', 'twitter', 'github'];
                    @endphp
                    @foreach ($socials as $social)
                        @if (!empty($companyInfo[$social]))
                            <li class="list-inline-item">
                                <a href="{{ $companyInfo[$social] }}" target="_blank"
                                    class="social-icon text-white text-decoration-none ">
                                    <i class="fa-brands fa-{{ $social }}"></i>
                                    <span class="label">{{ $social }}</span>
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>

<!-- ====================== Nav JS ====================== -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ticker = document.getElementById('newsTicker');
        const box = document.getElementById('tickerBox');
        const pauseIcon = document.getElementById('pauseIcon');
        const playIcon = document.getElementById('playIcon');
        const toggleBtn = document.getElementById('toggleTicker');

        let isPaused = false;
        let speed = 1; // pixels per frame, adjust for faster/slower scroll
        let pos = 0;

        // Clone ticker content to create infinite scroll effect
        const clone = ticker.cloneNode(true);
        clone.id = '';
        box.appendChild(clone);
        clone.style.left = `${ticker.scrollWidth}px`;

        function animateTicker() {
            if (!isPaused) {
                pos -= speed;
                if (Math.abs(pos) >= ticker.scrollWidth) {
                    pos = 0;
                }
                ticker.style.transform = `translateX(${pos}px)`;
                clone.style.transform = `translateX(${pos}px)`;
            }
            requestAnimationFrame(animateTicker);
        }

        // Toggle pause/play button functionality
        toggleBtn.addEventListener('click', () => {
            isPaused = !isPaused;
            pauseIcon.classList.toggle('d-none', isPaused);
            playIcon.classList.toggle('d-none', !isPaused);
        });

        // Pause on mouse enter, resume on mouse leave
        box.addEventListener('mouseenter', () => {
            isPaused = true;
            pauseIcon.classList.add('d-none');
            playIcon.classList.remove('d-none');
        });
        box.addEventListener('mouseleave', () => {
            isPaused = false;
            pauseIcon.classList.remove('d-none');
            playIcon.classList.add('d-none');
        });

        // Start animation immediately
        animateTicker();
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth'
                });
                target.blur();
            }
        });
    });

	// Navbar fixed
    document.addEventListener('DOMContentLoaded', function() {
        const mainNav = document.querySelector('.navbarMain');

        function toggleFixedClass() {
            if (window.scrollY > 48) {
                mainNav.classList.add('fixed');
            } else {
                mainNav.classList.remove('fixed');
            }
        }
        // Run once on page load
        toggleFixedClass();

        // Run on scroll
        window.addEventListener('scroll', toggleFixedClass);
    });
</script>
