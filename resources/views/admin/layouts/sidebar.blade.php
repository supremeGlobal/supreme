<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{ url('admin/dashboard') }}" class="brand-link">
            {{-- <img src="{{ asset('images/supreme.png') }}" alt="Company logo" class="brand-image opacity-75 shadow text-bg-light"> --}}
            <span class="brand-text fw-light">Supreme Family</span>
        </a>
    </div>
	@php
		$check = 'fa-check-circle';
	@endphp
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item {{ request()->is('admin/supreme-global*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/supreme-global*') ? 'active bg-secondary' : '' }}">
                        <i class="nav-icon fa-regular fa-bell"></i>
                        <p>
                            Supreme Global
                            <i class="nav-arrow fa-solid fa-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/supreme-global/slider') }}"
                                class="nav-link {{ request()->is('admin/supreme-global/slider') ? 'active' : '' }}">
                                <i class="nav-icon fa-regular {{ request()->is('admin/supreme-global/slider') ? $check : 'fa-circle text-danger' }}"></i>
                                <p>Slider image</p>
                            </a>
                        </li>

						<li class="nav-item">
                            <a href="{{ url('admin/supreme-global/about') }}"
                                class="nav-link {{ request()->is('admin/supreme-global/about') ? 'active' : '' }}">
                                <i class="nav-icon fa-regular {{ request()->is('admin/supreme-global/about') ? $check : 'fa-circle text-danger' }}"></i>
                                <p>About us</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/supreme-global/division') }}"
                                class="nav-link {{ request()->is('admin/supreme-global/division') ? 'active' : '' }}">
								<i class="nav-icon fa-regular {{ request()->is('admin/supreme-global/division') ? $check : 'fa-circle text-info' }}"></i>
                                <p>Our division</p>
                            </a>
                        </li>
						<li class="nav-item">
                            <a href="{{ url('admin/supreme-global/client') }}"
                                class="nav-link {{ request()->is('admin/supreme-global/client') ? 'active' : '' }}">
								<i class="nav-icon fa-regular {{ request()->is('admin/supreme-global/client') ? $check : 'fa-circle text-warning' }}"></i>
                                <p>My client</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header fs-5">Settings</li>
                <li class="nav-item">
                    <a href="{{ url('admin/company') }}"
                        class="nav-link {{ request()->is('admin/company') ? 'active' : '' }}">
                        <i class="nav-icon fa-regular {{ request()->is('admin/company') ? $check : 'fa-circle text-danger' }}"></i>
                        <p>Company list</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/company-info') }}"
                        class="nav-link {{ request()->is('admin/company-info*') ? 'active' : '' }}">
                        <i class="nav-icon fa-regular {{ request()->is('admin/company-info') ? $check : 'fa-circle text-info' }}"></i>
                        <p>Company information</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/client') }}"
                        class="nav-link {{ request()->is('admin/client*') ? 'active' : '' }}">
                        <i class="nav-icon fa-regular {{ request()->is('admin/client') ? $check : 'fa-circle text-secondary' }}"></i>
                        <p>Client list</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/news') }}"
                        class="nav-link {{ request()->is('admin/news*') ? 'active' : '' }}">
                        <i class="nav-icon fa-regular {{ request()->is('admin/news') ? $check : 'fa-circle text-success' }}"></i>
                        <p>Latest news</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
