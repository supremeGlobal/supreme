<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{ url('admin/dashboard') }}" class="brand-link">
            {{-- <img src="{{ asset('images/supreme.png') }}" alt="Company logo" class="brand-image opacity-75 shadow text-bg-light"> --}}
            <span class="brand-text fw-light">Supreme Global</span>
        </a>
    </div>
    @php
        $check = 'fa-check-circle';
    @endphp
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                @php
                    $companies = config('company_map');
                    $icons = [
                        'supreme-global' => 'fa-solid fa-building',
                        'supreme-tea' => 'fa-solid fa-circle-info',
                        'auto-bricks' => 'fa-solid fa-users',
                        'dar-kafaa-Al-Alia' => 'fa-solid fa-newspaper',
                        'supreme-agro' => 'fa-solid fa-camera',
                        'north-point-medical-college' => 'fa-solid fa-envelope',
                        'garden-inn-resort' => 'fa-solid fa-tree',
                        'alif-&-co' => 'fa-solid fa-store',
                    ];
                @endphp

                @foreach ($companies as $slug => $id)
                    <li class="nav-item {{ request()->is('admin/' . $slug . '*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/' . $slug . '*') ? 'active bg-secondary' : '' }}">
                            <i class="nav-icon {{ $icons[$slug] ?? 'fa-solid fa-circle' }}"></i>
                            <p>
                                {{ Str::title(str_replace('-', ' ', $slug)) }}
                                <i class="nav-arrow fa-solid fa-chevron-right"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('slider.index', $slug) }}"
                                    class="nav-link {{ request()->is('admin/' . $slug . '/slider') ? 'active' : '' }}">
                                    <i class="nav-icon fa-regular {{ request()->is('admin/' . $slug . '/slider') ? $check : 'fa-circle text-primary' }}"></i>
                                    <p>Slider image</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('about.index', $slug) }}"
                                    class="nav-link {{ request()->is('admin/' . $slug . '/about') ? 'active' : '' }}">
                                    <i class="nav-icon fa-regular {{ request()->is('admin/' . $slug . '/about') ? $check : 'fa-circle text-secondary' }}"></i>
                                    <p>About us</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('management.index', $slug) }}"
                                    class="nav-link {{ request()->is('admin/' . $slug . '/management-team') ? 'active' : '' }}">
                                    <i class="nav-icon fa-regular {{ request()->is('admin/' . $slug . '/management-team') ? $check : 'fa-circle text-success' }}"></i>
                                    <p>Management team</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('content.index', $slug) }}"
                                    class="nav-link {{ request()->is('admin/' . $slug . '/content') ? 'active' : '' }}">
                                    <i class="nav-icon fa-regular {{ request()->is('admin/' . $slug . '/content') ? $check : 'fa-circle text-info' }}"></i>
                                    <p>Our content</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('client.index', $slug) }}"
                                    class="nav-link {{ request()->is('admin/' . $slug . '/client') ? 'active' : '' }}">
                                    <i class="nav-icon fa-regular {{ request()->is('admin/' . $slug . '/client') ? $check : 'fa-circle text-warning' }}"></i>
                                    <p>My client</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endforeach

                <li class="nav-header fs-5">Settings</li>				
                <li class="nav-item">
					<a href="{{ route('company.index') }}" 
						class="nav-link {{ request()->routeIs('company.index') ? 'active' : '' }}">
						<i class="nav-icon fa-regular {{ request()->routeIs('company.index') ? $check : 'fa-circle text-primary' }}"></i>
						<p>Company list</p>
					</a>
                </li>
                <li class="nav-item">
					<a href="{{ route('company-info.index') }}"
						class="nav-link {{ request()->routeIs('company-info.index') ? 'active' : '' }}">
						<i class="nav-icon fa-regular {{ request()->routeIs('company-info.index') ? $check : 'fa-circle text-secondary' }}"></i>
						<p>Company's information</p>
					</a>
                </li>
                <li class="nav-item">
					<a href="{{ route('all-client.index') }}"
						class="nav-link {{ request()->routeIs('all-client.index') ? 'active' : '' }}">
						<i class="nav-icon fa-regular {{ request()->routeIs('all-client.index') ? $check : 'fa-circle text-success' }}"></i>
						<p>All Client list</p>
					</a>
                </li>
                <li class="nav-item">
					<a href="{{ route('news.index') }}"
						class="nav-link {{ request()->routeIs('news.index') ? 'active' : '' }}">
						<i class="nav-icon fa-regular {{ request()->routeIs('news.index') ? $check : 'fa-circle text-info' }}"></i>
						<p>Latest news</p>
					</a>
                </li>
                <li class="nav-item">
					<a href="{{ route('email-us.index') }}"
						class="nav-link {{ request()->routeIs('email-us.index') ? 'active' : '' }}">
						<i class="nav-icon fa-regular {{ request()->routeIs('email-us.index') ? $check : 'fa-circle text-warning' }}"></i>
						<p>Send email us</p>
					</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
