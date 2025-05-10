@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0 m-0">
        @php
            $images = ['img1.jpg', 'img2.jpg', 'img3.jpg'];
        @endphp

        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($images as $index => $img)
                    <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="{{ $index }}"
                        @if ($index === 0) class="active" aria-current="true" @endif
                        aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>

            <div class="carousel-inner">
                @foreach ($images as $index => $img)
                    <div class="carousel-item @if ($index === 0) active @endif">
                        <img src="{{ asset('images/' . $img) }}" class="d-block w-100 carousel-image" data-mask="40"
                            alt="Image {{ $index + 1 }}">
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <section id="funfacts" class="section-2 odd counter funfacts d-none">
        <video class="full-image to-bottom grayscale" data-mask="70" playsinline="" autoplay="" muted=""
            loop="">
            <source src="{{ asset('images/videos/city2.mp4') }}" type="video/mp4">
        </video>
        <div class="container">
            <div class="row mb-md-5 text-center">
                <div class="col-12">
                    <span class="pre-title">What are we doing</span>
                    <h2><span class="featured"><span>Results</span></span> in Numbers</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-3 item">
                    <div data-percent="128" class="radial"><canvas width="70" height="70"></canvas>
                        <span>128</span>
                    </div>
                    <h4>Certifications</h4>
                </div>
                <div class="col-12 col-md-6 col-lg-3 item">
                    <div data-percent="230" class="radial"><canvas width="70" height="70"></canvas>
                        <span>230</span>
                    </div>
                    <h4>Employees</h4>
                </div>
                <div class="col-12 col-md-6 col-lg-3 item">
                    <div data-percent="517" class="radial"><canvas width="70" height="70"></canvas>
                        <span>517</span>
                    </div>
                    <h4>Customers</h4>
                </div>
                <div class="col-12 col-md-6 col-lg-3 item">
                    <div data-percent="94" class="radial"><canvas width="70" height="70"></canvas>
                        <span>94</span>
                    </div>
                    <h4>Countries Served</h4>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section-7 form contact">
        <h2 class="text-center">Send a message</h2>
        <div class="container">
            <div class="row g-3">
                <div class="col-12 col-md-8 pr-md-5 align-self-center text">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3>Get in <span class="featured"><span>Touch</span></span></h3>
                            <p>We will respond to your message as soon as possible.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 p-0">
                            <form action="php/form.php" id="nexgen-simple-form" class="nexgen-simple-form">
                                <input type="hidden" name="section" value="nexgen_form">

                                <input type="hidden" name="reCAPTCHA" data-key="6Lf-NwEVAAAAAPo_wwOYxFW18D9_EKvwxJxeyUx7"
                                    value="03AFcWeA5XVjRikq-BrtUY3IxEUl8jSbqJT4Wnrlajk1yfTBvLUowIxjd5SsdYmyommzd2yJcHlejjU5t_wRtnYRAhmZZrgFfVuf9vUSE7RZWWyvXvj3UZJ9MTISZppw27_4K25T0TRBIouPLYULwTbwsa3fmW6n5ioqHV6MriwvNbSzEwrgIyIGonNG_EqfKrB9eflRI_e-BAqyEoD0lrb3H0sCfreoNFnwKsYOQEZIAs642uDz4pQh8Ez9rWOllfZ9P20nPPaIEVstBMZf2R6GWSKWH_ZRpxScWpQFOfAP3rhPkxn-TpENE2UuJmJ6DJ3oVV38KOaS9zJp2ZoAa6pM5PHMCspkC3MvAHiPbFQNmCYqit0oYG-l7LDQIHQZW27w8AIcJLVpFw-56cdrwqb4Byd-86p8GGi4UsBMQI4pxe2THpKxsufsjrxq_01eU_SY_vrlEsPuO6TBZ2lATwdlbKa7LMzmp6mSOsGdp7mORLgoK3FIKVVpkaYJc7zN_IcOYhcaHXuJyimJiocIqFCydytETycSOGV6IUyYF-zgAuECdPK_8WOPjnV15a2OTfTCElhvOQiXEtzZMW_BFrlTJMaFIfnwcLhHrWgfNzC0IFsgYx4fvdLfsGw27P5yTW6KtGbXEmDTXQEAbyIMZhb1LOasuBKpTpI9vpL87sac4a37pX4Wm9XbmwoPZ_6bZTAWzuQ2IlWPgvKGjOpSUazbZfmf_rjUzoNxA7guO7baKuyOQA7Rs4zr8oZoGRZaahSOCHSYYlMktY2sdoa21D21nOaXT3LAI7fwLsXqAJYEwIZXon7-0O_77dMEz0Jr3yWF8JNMAsGifCOFXH0evd02SshgvybFQvPMRCLj2yaihjsBycBhQKaT-tDHwPdZ7Q3CgZqtaeQI9-FXbolKKtwonQrSAflJLgcCbT5IQn0Yg-n5hwHPGNCANMwQlWvC8LBaW_fO2iBqRe">

                                <div class="row form-group-margin">
                                    <div class="col-6 col-md-6 m-0 p-2 input-group">
                                        <input type="text" name="name" class="form-control field-name"
                                            placeholder="Name">
                                    </div>
                                    <div class="col-6 col-md-6 m-0 p-2 input-group">
                                        <input type="email" name="email" class="form-control field-email"
                                            placeholder="Email">
                                    </div>
                                    <div class="col-6 col-md-6 m-0 p-2 input-group">
                                        <input type="text" name="phone" class="form-control field-phone"
                                            placeholder="Phone">
                                    </div>
                                    <div class="col-6 col-md-6 m-0 p-2 input-group">
                                        <i class="icon-arrow-down mr-3"></i>
                                        <select name="info" class="form-control field-info">
                                            <option value="" selected="" disabled="">More Info</option>
                                            <option>Audit &amp; Assurance</option>
                                            <option>Financial Advisory</option>
                                            <option>Analytics and M&amp;A</option>
                                            <option>Middle Marketing</option>
                                            <option>Legal Consulting</option>
                                            <option>Regulatory Risk</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-12 m-0 p-2 input-group">
                                        <textarea name="message" class="form-control field-message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12 col-12 m-0 p-2 input-group">
                                        <span class="form-alert" style="display: none;"></span>
                                    </div>
                                    <div class="col-12 input-group m-0 p-2">
                                        <a class="btn primary-button">SEND</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        kkk
                                    </div>
                                    <div class="com-md-6">asasas</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="contacts">
                        <h4>Example Inc.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>Praesent diam lacus, dapibus sed imperdiet consectetur.</p>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-phone-alt mr-2"></i>
                                    +1 (305) 1234-5678
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-envelope mr-2"></i>
                                    hello@example.com
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                    Main Avenue, 987
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="mt-2 btn outline-button" data-toggle="modal"
                                    data-target="#map">VIEW MAP</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </section>
@endsection
