<style>
    .navbar.top {
        background-color: #21333e;
        padding: 0.25rem 0.5rem;
        height: auto;
        position: relative;
        z-index: 5;
        width: 100%;
        transition: all 0.4s ease;
    }

    .navbar.top,
    i {
        font-size: 0.9rem;
        font-weight: 400;
        color: #c0c3d0 !important;
    }

    /* Auth nav items spacing (login/register/user menu) */
    .navbar-nav .nav-item {
        margin: 0 5px;
    }

    .navbar-nav .nav-item a {
        padding: 3px 0;
    }

    /* Fixed top navbar effect on scroll */
    .navbar.fixed {
        position: fixed;
        top: 0;
        left: 0;
        background: #21333e !important;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        z-index: 999;
    }
</style>

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

<style>
    .news-ticker-wrapper {
        display: flex;
        align-items: center;
        border: 1px solid #0d6efd;
        background-color: #fff;
        width: 100%;
        overflow: hidden;
        min-width: 0;
    }

    .news-label {
        background-color: #0d6efd;
        color: #fff;
        padding: 0.5rem;
        font-size: 0.9rem;
        font-weight: bold;
        white-space: nowrap;
        flex-shrink: 0;
    }

    .news-ticker-box {
        flex-grow: 1;
        overflow: hidden;
        position: relative;
        min-width: 0;
    }

    .news-ticker-track {
        display: flex;
        white-space: nowrap;
        position: absolute;
        top: 0;
        left: 0;
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
        white-space: nowrap;
    }

    .ticker-controls {
        flex-shrink: 0;
        padding-left: 0.5rem;
    }

    @media (max-width: 768px) {
        .col-md-9 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .col-md-3 {
            flex: 0 0 100%;
            max-width: 100%;
            margin-top: 0.5rem;
        }

        .news-ticker-wrapper {
            flex-direction: column;
            align-items: flex-start;
        }

        .ticker-controls {
            align-self: flex-end;
        }
    }
</style>

<nav class="navbar navbar-expand-md navbar-light shadow-sm navbarMain py-0 my-0">
    <div class="container-fluid p-0 m-0">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="row w-100 align-items-center g-0">
                <!-- News Ticker (70%) -->
                <div class="col-12 col-md-9 d-flex align-items-center"
                    style="flex: 0 0 70%; max-width: 70%; min-width: 0;">
                    <div class="news-ticker-wrapper">
                        <div class="news-label">Latest News:</div>
                        <div class="news-ticker-box" id="tickerBox">
                            <ul class="news-ticker-track" id="newsTicker">
                                @foreach ($news as $item)
                                    <li>
                                        <a href="#">
                                            {{ strip_tags(preg_replace('/\s+/', ' ', $item->details)) }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="ticker-controls">
                            <button id="toggleTicker" class="btn btn-sm p-0 bg-light border-0" aria-label="Pause">
                                <i id="pauseIcon" class="fas fa-pause"></i>
                                <i id="playIcon" class="fas fa-play d-none"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Nav (30%) -->
                <div class="col-12 col-md-3 p-0" style="flex: 0 0 30%; max-width: 30%;">
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
                                    <li><a class="dropdown-item" href="{{ $item['url'] }}">{{ $item['name'] }}</a>
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

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ticker = document.getElementById('newsTicker');
            const box = document.getElementById('tickerBox');
            const pauseIcon = document.getElementById('pauseIcon');
            const playIcon = document.getElementById('playIcon');
            const toggleBtn = document.getElementById('toggleTicker');

            let isPaused = false;
            let speed = 1; // pixels per frame
            let pos = 0;

            // Clone the ticker for seamless loop
            const clone = ticker.cloneNode(true);
            box.appendChild(clone);
            clone.style.left = `${ticker.scrollWidth}px`;
            clone.id = '';

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

            toggleBtn.addEventListener('click', () => {
                isPaused = !isPaused;
                pauseIcon.classList.toggle('d-none', isPaused);
                playIcon.classList.toggle('d-none', !isPaused);
            });

            animateTicker();
        });
    </script>
@endsection
