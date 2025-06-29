<section id="footer" style="color: #fff; background: #192733">
    <div class="container-fluid px-5 fs-5">
        <div class="row justify-content-between">
            <div class="col-12 col-md-4 footerContact">
                <h3>Contract</h3>
                <ul>
                    <li class="item">
                        <a href="tel:+8801322846601">
                            <i class="fas fa-phone-alt"></i>
                            +880 1322846601
                        </a>
                    </li>
                    <li class="item">
                        <a href="mailto:info@supremeglobalbd@gmail.com">
                            <i class="fas fa-envelope"></i>
                            info@supremeglobalbd.com
                        </a>
                    </li>
                    <li class="item">
                        <a href="mailto:sales@supremeglobalbd@gmail.com">
                            <i class="fas fa-envelope"></i>
                            sales@supremeglobalbd.com
                        </a>
                    </li>
                    <li class="item">
                        <button class="btn btn-success col-md-6 rounded-1" data-bs-toggle="modal" data-bs-target="#map">
                            <i class="fas fa-map-marker-alt"></i>
                            Head office location
                        </button>                        
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-4 footerContact">
                <h3>Address</h3>
                <ul>
                    <li class="item">
                        <i class="fas fa-map-marker-alt"></i>
                        <Strong>Head office: </Strong>
						<div class="ps-4 pt-1">
							<p>Tropical Mollah Tower, Level 13th, 15/1-5 Pragati Sarani,</p>
							<p>Middle Badda, Dhaka-1212, Bangladesh</p>
						</div>
                    </li>
					<li class="item">
						<button type="button" class="btn btn-primary col-md-6 ms-2 rounded-1" data-bs-toggle="modal"
                            data-bs-target="#emailUs">
                            <i class="fas fa-envelope"></i>
                            Send email us
                        </button>
					</li>
                    {{-- <li class="item">
                        <i class="fas fa-map-marker-alt"></i>
                        <Strong>Saudi office: </Strong>
                        Abdul Rahman Al-Khuzai 5005, Al Marwah Jeddah, Saudi Arabia, 23545
                    </li>
                    <li class="item d-none">
                        <i class="fas fa-map-marker-alt"></i>
                        <Strong>Factory location: </Strong>
                        A&A Auto Bricks Industries Ltd Kamatpara, Sakoa, Boda, Panchagarh, Bangladesh
                    </li> --}}
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
                    <li class="list-inline-item">
                        <a href="#" class="social-icon facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                            <span class="label">Facebook</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="social-icon instagram">
                            <i class="fa-brands fa-instagram"></i>
                            <span class="label">Instagram</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="social-icon linkedin">
                            <i class="fa-brands fa-linkedin-in"></i>
                            <span class="label">LinkedIn</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="social-icon youtube">
                            <i class="fa-brands fa-youtube"></i>
                            <span class="label">YouTube</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="social-icon twitter">
                            <i class="fa-brands fa-twitter"></i>
                            <span class="label">Twitter</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="social-icon github">
                            <i class="fa-brands fa-github"></i>
                            <span class="label">GitHub</span>
                        </a>
                    </li>
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
        anchor.addEventListener('click', function (e) {
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