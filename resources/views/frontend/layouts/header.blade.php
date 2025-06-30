<!-- Top Info Bar -->
<nav class="navbar py-2 top fs-6 navbar-expand small py-2 top fs-6">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center w-100">
            <!-- Left Section -->
            <div class="mb-2 mb-md-0 text-center text-md-start">
                <i class="fas fa-clock me-2"></i>
				{{ $companyInfo['office_time'] ?? '' }}
            </div>

            <!-- Middle Section -->
            <div class="mb-2 mb-md-0 text-center">
                <i class="fas fa-phone-alt me-2"></i>
				{{ $companyInfo['contact_number'] ?? '' }}

                <span class="d-none d-md-inline mx-3">|</span>

                <i class="fas fa-envelope me-2"></i>
				{{ $companyInfo['company_email'] ?? '' }}
            </div>

            <!-- Right Section -->
            <div class="d-flex justify-content-center justify-content-md-end align-items-center">
                @guest
                    @if (Route::has('login'))
                        <a class="text-light ps-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#login"
                            href="#">
                            {{ __('Login') }}
                        </a>
                    @endif
                    @if (Route::has('register'))
                        <a class="d-none" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    @endif
                @else
                    <div class="dropdown ms-3">
                        <a id="navbarDropdown" class="dropdown-toggle text-light text-decoration-none" href="#"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                <div class="col-12 col-md-9 d-flex align-items-center p-0">
                    <div
                        class="news-ticker-wrapper d-flex align-items-center border border-primary bg-white w-100 overflow-hidden">
                        <div class="news-label bg-primary text-white px-3 py-2 flex-shrink-0 fs-6">
                            Latest News
                        </div>

                        <div class="news-ticker-box flex-grow-1">
                            <ul class="news-ticker d-flex mb-0 fs-6" id="newsTicker">
                                <li class="me-4">
                                    <a href="#" class="text-dark">
                                        We’re excited to share that our company is entering a new chapter focused on
                                        innovation, transparency, and sustainable growth.
                                    </a>
                                </li>
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
