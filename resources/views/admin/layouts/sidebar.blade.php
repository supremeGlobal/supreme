<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{ ('/home') }}" class="brand-link">
            <img src="{{ asset('images/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow">
            <span class="brand-text fw-light">AdminLTE 4</span>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-users"></i>
                        <p>
                            User management
                            <i class="nav-arrow fa-solid fa-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-user-plus"></i>
                                <p>Add user</p>
                            </a>
                        </li>
                        <li class="nav-item"> 
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-list text-warning"></i>
                                <p>User list</p>
                            </a> 
                        </li>
                    </ul>
                </li>

                <li class="nav-item"> 
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
                
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item"> 
                    <a href="{{ url('auth') }}" class="nav-link {{ request()->is('auth*') ? 'active' : '' }}"> 
                        <i class="nav-icon fa-solid fa-arrow-right-to-bracket"></i>
                        <p>Login</p>
                    </a>
                </li>

                <li class="nav-header">LABELS</li>
                <li class="nav-item"> 
                    <a href="#" class="nav-link"> 
                        <i class="nav-icon fa-regular fa-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a> 
                </li>
                <li class="nav-item"> 
                    <a href="#" class="nav-link"> 
                        <i class="nav-icon fa-regular fa-circle text-warning"></i>
                        <p>Warning</p>
                    </a> 
                </li>
                <li class="nav-item"> 
                    <a href="#" class="nav-link"> 
                        <i class="nav-icon fa-regular fa-circle text-info"></i>
                        <p>Informational</p>
                    </a> 
                </li>
            </ul>
        </nav>
    </div>
</aside>
