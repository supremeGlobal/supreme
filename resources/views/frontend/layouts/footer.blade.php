<style>
    /* Base footer styling */
    .footer-section {
        font-size: 1.25rem;
        /* ~fs-5 */
    }

    /* Mobile responsiveness */
    @media (max-width: 768px) {
        .footer-section {
            font-size: 0.95rem;
            /* Smaller font size on mobile */
        }

        .footer-section .container-fluid {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .footer-section h3 {
            font-size: 1.1rem;
        }

        .footer-section ul {
            padding-left: 0;
        }

        .footer-section .btn {
            font-size: 0.95rem;
            padding: 0.4rem 0.75rem;
        }

        .footer-section .footerSocial .social-icon i {
            font-size: 1rem;
        }

        .footer-section .footerSocial .label {
            display: none;
            /* hide label text on social icons in small screen */
        }

        .footer-section .text-md-start {
            text-align: center !important;
        }
    }
</style>

<section id="footer" style="color: #fff; background: #192733;" class="footer-section pb-0">
    <div class="container-fluid p-3">
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
        document.querySelectorAll('.news-ticker-wrapper').forEach(wrapper => {
            const ticker = wrapper.querySelector('.news-ticker-track');
            const box = wrapper.querySelector('.news-ticker-box');
            const pauseIcon = wrapper.querySelector('.pause-icon');
            const playIcon = wrapper.querySelector('.play-icon');
            const toggleBtn = wrapper.querySelector('.toggle-ticker');

            let isPaused = false;
            let speed = 1;
            let pos = 0;

            const clone = ticker.cloneNode(true);
            clone.classList.add('ticker-clone');
            box.appendChild(clone);
            clone.style.left = `${ticker.scrollWidth}px`;

            function animate() {
                if (!isPaused) {
                    pos -= speed;
                    if (Math.abs(pos) >= ticker.scrollWidth) {
                        pos = 0;
                    }
                    ticker.style.transform = `translateX(${pos}px)`;
                    clone.style.transform = `translateX(${pos}px)`;
                }
                requestAnimationFrame(animate);
            }

            toggleBtn.addEventListener('click', () => {
                isPaused = !isPaused;
                pauseIcon.classList.toggle('d-none', isPaused);
                playIcon.classList.toggle('d-none', !isPaused);
            });

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

            animate();
        });
    });

	// News show after click navbar-toggler
    document.addEventListener('DOMContentLoaded', function() {
		const collapseMenu = document.getElementById('navbarSupportedContent');
		const news1 = document.querySelector('.first-news');
		const news2 = document.querySelector('.second-news');
		const outerCol = news2.closest('.secondNews');		

		if(window.innerWidth <= 768) {
			outerCol.classList.remove('d-none');
		}

        collapseMenu.addEventListener('shown.bs.collapse', function() {
            news1.style.display = 'block';
            news2.style.display = 'none';
        });
		
        collapseMenu.addEventListener('hidden.bs.collapse', function() {
            news1.style.display = 'none';
            news2.style.display = 'block';
        });
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
