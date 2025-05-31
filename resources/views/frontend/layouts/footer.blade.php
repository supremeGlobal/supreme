
    <section id="footer" style="color: #fff; background: #192733">
        <div class="container-fluid px-5">
            <div class="row justify-content-between">
                <div class="col-md-6 footerContact">
                    <h4>Contract</h4>
                    <ul>
                        <li class="item">
                            <i class="fas fa-phone-alt"></i>
                            +880 1322846601
                        </li>
                        <li class="item">
                            <i class="fas fa-envelope"></i>
                            info@supremeglobalbd@gmail.com
                        </li>
						<li class="item">
                            <i class="fas fa-envelope"></i>
                            sales@supremeglobalbd@gmail.com
                        </li>
                        <li class="item">
                            <button class="btn btn-success btn-auto rounded-0" data-bs-toggle="modal"
                                data-bs-target="#map">
                                <i class="fas fa-map-marker-alt"></i>
                                Head office location
                            </button>

                            <button type="button" class="btn btn-primary btn-auto ms-2 rounded-0" data-bs-toggle="modal"
                                data-bs-target="#emailUs">
                                <i class="fas fa-envelope"></i>
                                Send email us
                            </button>
                        </li>
                    </ul>
                </div>
				 <div class="col-md-6 footerContact">
                    <h4>Address</h4>
                    <ul>                      
                        <li class="item">
                            <i class="fas fa-map-marker-alt"></i>
                            <Strong>Head office: </Strong>
                            Tropical Mollah Tower, Level 13th, 15/1-5 Pragati Sarani, Middle Badda, Dhaka-1212,
                            Bangladesh
                        </li>
                        <li class="item">
                            <i class="fas fa-map-marker-alt"></i>
                            <Strong>Saudi office: </Strong>
                            Tropical Mollah Tower, Level 13th, 15/1-5 Pragati Sarani, Middle Badda, Dhaka-1212,
                            Bangladesh
                        </li>
                        <li class="item">
                            <i class="fas fa-map-marker-alt"></i>
                            <Strong>Factory location: </Strong>
                            Tropical Mollah Tower, Level 13th, 15/1-5 Pragati Sarani, Middle Badda, Dhaka-1212,
                            Bangladesh
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="my-4">

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
</script>