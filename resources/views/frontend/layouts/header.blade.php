<!-- Top Info Bar -->
<nav class="navbar navbar-expand small py-2 top">
    <div class="container d-flex justify-content-between">
        <div>
            <i class="fas fa-clock me-2"></i>Open Hours: Sat - Thu - 9:00 am - 6:00 pm
        </div>
        <div>
            <i class="fas fa-phone-alt me-2"></i>+880 1322846601
            <span class="mx-3">|</span>
            <i class="fas fa-envelope me-2"></i>supremeglobalbd@gmail.com
        </div>
        <div>
            <a href="#" class="text-dark"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-dark mx-4"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-dark"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</nav>

<!-- Main Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm navbarMain py-0 my-0">
    <div class="container py-0 my-0">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img style="background: azure !important; border-radius: 50%"
                src="https://supremeglobal.co/wp-content/uploads/2024/01/logo-5.png" width="50" height="50"
                loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left -->
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Pages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Contact us</a>
                </li>
            </ul>

            <!-- Right -->
            <ul class="navbar-nav ms-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>