<section id="footer" style="color: #fff; background: #192733">
    <div class="container-fluid px-5 fs-5">
        <div class="row justify-content-between">
            <div class="col-12 col-md-4 footerContact">
                <h3>Contract</h3>
                <ul>
                    @if (!empty($companyInfo['contact_number']))
                        <li class="item">
                            <a href="tel:{{ $companyInfo['contact_number'] }}">
                                <i class="fas fa-phone-alt"></i>
                                {{ $companyInfo['contact_number'] }}
                            </a>
                        </li>
                    @endif

                    @if (!empty($companyInfo['info_email']))
                        <li class="item">
                            <a href="mailto:{{ $companyInfo['info_email'] ?? '' }}">
                                <i class="fas fa-envelope"></i>
                                {{ $companyInfo['info_email'] ?? '' }}
                            </a>
                        </li>
                    @endif

                    @if (!empty($companyInfo['sales_email']))
                        <li class="item">
                            <a href="mailto:{{ $companyInfo['sales_email'] ?? '' }}">
                                <i class="fas fa-envelope"></i>
                                {{ $companyInfo['sales_email'] ?? '' }}
                            </a>
                        </li>
                    @endif

                    @if (!empty($companyInfo['head_office_location_map']))
                        <li class="item">
                            <button class="btn btn-success col-md-6 rounded-1" data-bs-toggle="modal"
                                data-bs-target="#map">
                                <i class="fas fa-map-marker-alt"></i>
                                Head office location
                            </button>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="col-12 col-md-4 footerContact">
                <h3>Address</h3>
                <ul>
                    @if (!empty($companyInfo['head_office_location']))
                        <li class="item">
                            <i class="fas fa-map-marker-alt"></i>
                            <Strong>Head office:</Strong>
                            <div class="mt-2">
                                {{ $companyInfo['head_office_location'] ?? '' }}
                            </div>
                        </li>
                    @endif

                    @if (!empty($companyInfo['send_email_us']))
                        <li class="item">
                            <button type="button" class="btn btn-primary col-md-6 rounded-1" data-bs-toggle="modal"
                                data-bs-target="#emailUs">
                                <i class="fas fa-envelope"></i>
                                Send email us
                            </button>
                        </li>
                    @endif
                </ul>
            </div>
        </div>

        <hr>

        <div class="row justify-content-between">
            <div class="col-md-6">
                <p>© Copyright <?= date('Y') ?>. Supreme Global.</p>
            </div>

            <div class="col-md-6">
                <ul class="text-center footerSocial list-inline mb-0">
                    @php
                        $socials = ['facebook', 'instagram', 'linkedin', 'youtube', 'twitter', 'github'];
                    @endphp
                    @foreach ($socials as $social)
                        @if (!empty($companyInfo[$social]))
							<li class="list-inline-item">
								<a href="#" class="social-icon {{$social}}">
									<i class="fa-brands fa-{{$social}}"></i>
									<span class="label">{{$social}}</span>
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

<script>
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 100) {
            $(".navbarMain").addClass("fixed");
        } else {
            $(".navbarMain").removeClass("fixed");
        }
    });

    // Slide speed
    var myCarousel = document.querySelector('#mainCarousel');
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 1800, // 2 seconds
        ride: 'carousel'
    });

    document.addEventListener('DOMContentLoaded', () => {
        const ticker = document.getElementById('newsTicker');
        const toggleBtn = document.getElementById('toggleTicker');
        const pauseIcon = document.getElementById('pauseIcon');
        const playIcon = document.getElementById('playIcon');
        let isPaused = false;

        toggleBtn.addEventListener('click', () => {
            if (!isPaused) {
                ticker.classList.add('paused');
                pauseIcon.classList.add('d-none');
                playIcon.classList.remove('d-none');
            } else {
                ticker.classList.remove('paused');
                pauseIcon.classList.remove('d-none');
                playIcon.classList.add('d-none');
            }
            isPaused = !isPaused;
        });
    });

    // Remove href from url [localhost/page#footer]
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            const target = document.querySelector(targetId);

            if (target) {
                e.preventDefault(); // Prevent default anchor behavior (like updating URL)

                // Scroll smoothly without changing the URL
                target.scrollIntoView({
                    behavior: 'smooth'
                });

                // Optional: Remove focus outline
                target.blur();
            }
        });
    });
</script>
