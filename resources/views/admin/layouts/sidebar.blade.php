<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{ url('admin/dashboard') }}" class="brand-link">
            {{-- <img src="{{ asset('images/supreme.png') }}" alt="Company logo" class="brand-image opacity-75 shadow text-bg-light"> --}}
            <span class="brand-text fw-light">Supreme Family</span>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
               
                <li class="nav-item d-none"> 
                    <a href="#" class="nav-link"> 
                        <i class="nav-icon fa-regular fa-bell"></i>
                        <p>
                            UI Elements
                            <i class="nav-arrow fa-solid fa-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> 
                            <a href="#" class="nav-link"> 
                                <i class="nav-icon fa-regular fa-circle text-danger"></i>
                                <p>General</p>
                            </a> 
                        </li>
                        <li class="nav-item"> 
                            <a href="#" class="nav-link"> 
                                <i class="nav-icon fa-regular fa-circle text-info"></i>
                                <p>Icons</p>
                            </a> 
                        </li>
                    </ul>
                </li>

                <li class="nav-header">Settings</li>
                <li class="nav-item">
					 <a href="{{ url('admin/company') }}" class="nav-link {{ request()->is('admin/company') ? 'active' : '' }}"> 
                        <i class="nav-icon fa-regular fa-circle text-danger"></i>
                        <p>Company list</p>
                    </a>
                </li>
				<li class="nav-item">
					 <a href="{{ url('admin/company-info') }}" class="nav-link {{ request()->is('admin/company-info*') ? 'active' : '' }}"> 
                        <i class="nav-icon fa-regular fa-circle text-info"></i>
                        <p>Company information</p>
                    </a>
                </li>
				<li class="nav-item">
					 <a href="{{ url('admin/client') }}" class="nav-link {{ request()->is('admin/client*') ? 'active' : '' }}"> 
                        <i class="nav-icon fa-regular fa-circle text-info"></i>
                        <p>Client list</p>
                    </a>
                </li>
				<li class="nav-item">
					<a href="{{ url('admin/news') }}" class="nav-link {{ request()->is('admin/news*') ? 'active' : '' }}"> 
                        <i class="nav-icon fa-regular fa-circle text-info"></i>
                        <p>Latest news</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
