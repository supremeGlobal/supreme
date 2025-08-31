<!-- ====================== CSS ====================== -->
<style>
    /* ✅ Top Navbar (office time, contact, auth) */
    .navbar.top {
        background-color: #21333e;
        padding: 0.25rem 0.5rem;
        position: relative;
        z-index: 5;
        width: 100%;
        transition: all 0.4s ease;
    }

    .navbar.top,
    .navbar.top i {
        font-size: 0.9rem;
        color: #c0c3d0 !important;
    }

    .navbar-nav .nav-item {
        margin: 0 5px;
    }

    .navbar-nav .nav-item a {
        padding: 3px 0;
    }

    .navbar.top.fixed {
        position: fixed;
        top: 0;
        left: 0;
        background: #21333e !important;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        z-index: 999;
    }

    /* ✅ Main Navbar (logo, nav links, news ticker) */
    .navbarMain {
        background-color: #f8f9fc;
        font-family: "Poppins", sans-serif;
        font-size: 15px;
        transition: all 0.4s ease;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        z-index: 998;
    }

    .navbarMain .navbar-nav .nav-link {
        color: #2c3e50;
        padding: 5px 18px;
        border-radius: 10px;
        font-size: 18px;
        font-weight: 500;
        transition: all 0.3s ease-in-out;
    }

    .navbarMain .navbar-nav .nav-link:hover,
    .navbarMain .navbar-nav .nav-link:focus,
    .navbarMain .navbar-nav .nav-item.active .nav-link {
        color: blue;
    }

    .navbarMain .dropdown-menu {
        border: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        font-size: 14px;
        border-radius: 10px;
        padding: 10px;
    }

    .navbarMain .dropdown-item {
        padding: 8px 20px;
        transition: background 0.3s;
        color: #2c3e50;
    }

    .navbarMain .dropdown-item:hover {
        background-color: #2b80d6;
        color: #fff;
    }

    .navbarMain.fixed {
        position: fixed;
        top: 0px;
        left: 0;
        right: 0;
        background: #ffffff !important;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        z-index: 998;
    }

    /* ✅ News Ticker */
    .news-ticker-wrapper {
        display: flex;
        align-items: center;
        border: 1px solid #0d6efd;
        background-color: #fff;
        width: 100%;
        overflow: hidden;
        min-width: 0;
        height: 40px;
    }

    .news-label {
        background-color: #0d6efd;
        color: #fff;
        padding: 0.5rem;
        font-size: 0.9rem;
        font-weight: bold;
        white-space: nowrap;
        flex-shrink: 0;
        height: 100%;
        display: flex;
        align-items: center;
    }

    .news-ticker-box {
        flex-grow: 1;
        overflow: hidden;
        position: relative;
        min-width: 0;
        height: 100%;
    }

    .news-ticker-track {
        display: flex;
        white-space: nowrap;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        align-items: center;
    }

    .news-ticker-track li {
        list-style: none;
        padding-right: 2rem;
        white-space: nowrap;
        flex-shrink: 0;
    }

    .news-ticker-track a {
        color: #000;
        text-decoration: none;
    }

    .ticker-controls {
        flex-shrink: 0;
        padding-left: 0.5rem;
        height: 100%;
        display: flex;
        align-items: center;
    }

    .navbar-toggler,
    .navbar-toggler:focus {
        box-shadow: unset !important;
        font-size: 16px;
    }

    @media (max-width: 768px) {
        .navbar.top {
            display: none !important;
        }

        .col-md-9,
        .col-md-3,
        .navbarMain .col-md-3 {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            padding: 0.5rem 0.5rem 0rem;
        }

        .first-news {
            display: none;
        }

        .first-news .news-label,
        .first-news .ticker-controls {
            display: none;
        }

        .news-ticker-wrapper {
            padding: 0;
            height: 30px;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin-top: -50px !important;
            margin-left: 40px !important;
            z-index: 999;
            display: flex;
            overflow: hidden;
            border: unset !important;
            background-color: whitesmoke !important;
        }

        .news-ticker-box {
            width: 100%;
        }

        .news-ticker-track {
            padding-right: 0;
        }

        .navbarMain .navbar-nav .nav-link {
            font-size: 14px !important;
            padding: 3px 0 !important;
        }

        .navbarMain .dropdown {
            width: 95% !important;
        }

        .navbarMain .dropdown-menu {
            font-size: 14px !important;
            padding-left: 1rem !important;
        }

        .navbarMain .dropdown-menu li a {
            padding-left: 1rem !important;
        }

        .navbarMain .nav-item {
            margin-bottom: 6px;
        }
    }

    @keyframes ticker-scroll {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }
</style>

<!-- ====================== Top Navbar ====================== -->
<nav class="navbar py-2 top fs-6 small navbar-expand">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center w-100">
            <div class="text-light mb-2 mb-md-0 w-100 text-center text-md-start">
                <i class="fas fa-clock me-2"></i> {{ $companyInfo['office_time'] ?? '' }}
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-center w-100 text-light text-center">
                <div><i class="fas fa-phone-alt me-1"></i> {{ $companyInfo['contact_number'] ?? '' }}</div>
                <span class="mx-2 d-none d-md-inline">|</span>
                <div><i class="fas fa-envelope me-1"></i> {{ $companyInfo['company_email'] ?? '' }}</div>
            </div>

            <div class="d-flex justify-content-center justify-content-md-end mt-2 mt-md-0 w-100">
                @guest
                    @if (Route::has('login'))
                        <a class="text-light ps-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#login"
                            href="#">Login</a>
                    @endif
                @else
                    <div class="dropdown ms-3">
                        <a id="navbarDropdown" class="dropdown-toggle text-light text-decoration-none" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <a class="dropdown-item" href="{{ url('/admin/dashboard') }}">
                                Admin Dashboard
                            </a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</nav>

<!-- ====================== Main Navbar + News Ticker ====================== -->
<nav class="navbar navbar-expand-md navbar-light shadow-sm navbarMain py-0 my-0">
    <div class="container-fluid p-0 m-0">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="row w-100 align-items-center g-0">
                <div class="col-12 col-md-9 d-flex align-items-center" style="flex: 0 0 70%; max-width: 70%;">
                    <div class="news-ticker-wrapper first-news">
                        <div class="news-label">Latest News:</div>
                        <div class="news-ticker-box">
                            <ul class="news-ticker-track">
                                @foreach ($news as $item)
                                    <li>
                                        <a
                                            href="#">{{ strip_tags(preg_replace('/\s+/', ' ', $item->details)) }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="ticker-controls">
                            <button class="toggle-ticker btn btn-sm p-0 bg-light border-0" aria-label="Pause">
                                <i class="pause-icon fas fa-pause"></i>
                                <i class="play-icon fas fa-play d-none"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Main Menu -->
                <div class="col-12 col-md-3 p-0" style="flex: 0 0 30%; max-width: 30%;">
                    <ul class="navbar-nav justify-content-center d-flex">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-bs-toggle="dropdown">
                                Group Entities
                            </a>
                            <ul class="dropdown-menu rounded-0 py-2 fs-6" aria-labelledby="navbarDropdownMenuLink">
                                @foreach ($company as $item)
									@php
										$slug = Str::slug($item['url']);
									@endphp
                                    <li>
                                        <a class="dropdown-item px-2 rounded {{ request()->is($slug) ? 'active text-light' : '' }}" href="{{ url($slug) }}">
                                            {{ $item['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#footer">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-9 d-flex align-items-center secondNews d-none" style="flex: 0 0 70%; max-width: 70%;">
            <div class="news-ticker-wrapper second-news">
                <div class="news-ticker-box">
                    <ul class="news-ticker-track">
                        @foreach ($news as $item)
                            <li>
                                <a href="#">{{ strip_tags(preg_replace('/\s+/', ' ', $item->details)) }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="ticker-controls d-none">
                    <button class="toggle-ticker btn btn-sm p-0 bg-light border-0" aria-label="Pause">
                        <i class="pause-icon fas fa-pause"></i>
                        <i class="play-icon fas fa-play d-none"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
