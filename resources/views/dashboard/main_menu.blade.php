<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Vuesax</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="index.html"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                <ul class="menu-content">
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                    </li>
                    <li ><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">eCommerce</span></a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span>Administracion</span>                
            </li>
            <li @yield('usuarios') class=" nav-item"><a href="{{ route('usuarios') }}"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Email">Usuarios</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">Item</span></a>
                <ul class="menu-content">
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Sub item</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Sub item</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Sub item</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>