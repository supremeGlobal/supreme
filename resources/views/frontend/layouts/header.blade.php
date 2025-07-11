<nav class="navbar py-2 top fs-6 small navbar-expand">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center w-100">

            <!-- Office Time -->
            <div class="mb-2 mb-md-0 text-center text-md-start w-100 w-md-auto office_time">
                <i class="fas fa-clock me-2"></i>
                {{ $companyInfo['office_time'] ?? '' }}
            </div>

            <!-- Contact & Email Section -->
            <div class="d-flex flex-column flex-md-row w-100 contact-mobile">
                <div class="contact-left">
                    <i class="fas fa-phone-alt me-1"></i>
                    {{ $companyInfo['contact_number'] ?? '' }}
                </div>

                <span class="d-md-inline mx-1">|</span>

                <div class="contact-right">
                    <i class="fas fa-envelope me-1"></i>
                    {{ $companyInfo['company_email'] ?? '' }}
                </div>
            </div>

            <!-- Auth Section -->
            <div
                class="d-flex justify-content-center justify-content-md-end align-items-center mt-2 mt-md-0 w-100 w-md-auto auth_section">
                @guest
                    @if (Route::has('login'))
                        <a class="text-light ps-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#login"
                            href="#">
                            {{ __('Login') }}
                        </a>
                    @endif
                @else
                    <div class="dropdown ms-3">
                        <a id="navbarDropdown" class="dropdown-toggle text-light text-decoration-none" href="#"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <a class="dropdown-item" href="{{ url('/admin/dashboard') }}">
                                Admin Dashboard
                            </a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</nav>

<!-- Main Navigation -->
<nav class="navbar navbar-expand-md navbar-light shadow-sm navbarMain py-0 my-0">
    <div class="container-fluid p-0 m-0">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="row w-100 align-items-center g-0">
                <!-- Left ticker col-md-9 always -->
                <div class="col-12 col-md-9 d-flex align-items-center">
                    <div class="news-ticker-wrapper d-flex align-items-center border border-primary bg-white w-100 overflow-hidden">
                        <div class="news-label bg-primary text-white p-1 flex-shrink-0 fs-6 fw-bold align-left">
                            Latest News:
                        </div>

                        <div class="news-ticker-box flex-grow-1">
                            <ul class="news-ticker d-flex mb-0 fs-6" id="newsTicker">
								@foreach ($news as $item)
									<li class="me-4">
										<a href="#" class="text-dark">
											 {{ strip_tags(preg_replace('/\s+/', ' ', $item->details)) }}
										</a>
									</li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="ticker-controls d-flex align-items-center px-2 flex-shrink-0">
                            <button id="toggleTicker" class="btn btn-sm p-0 bg-light border-0"
                                aria-label="Pause news ticker">
                                <i id="pauseIcon" class="fas fa-pause"></i>
                                <i id="playIcon" class="fas fa-play d-none"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Right nav col-md-3 always -->
                <div class="col-12 col-md-3 p-0">
                    <ul class="navbar-nav justify-content-center d-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Group Entities
                            </a>
                            <ul class="dropdown-menu rounded-0 py-0 fs-6" aria-labelledby="navbarDropdownMenuLink">
                                @foreach ($company as $item)
                                    <li>
                                        <a class="dropdown-item" href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
