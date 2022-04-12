<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <br>
    <div class="pcoded-inner-navbar main-menu">
        {{-- <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div> --}}
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ Request::segment(1) == "dashboard" ? "active":"" }}">
                <a href="{{ url('dashboard') }}">
                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Data</div>
            <li class="{{ Request::segment(1) == "admin-user" ? "active":"" }}">
                <a href="{{ url('admin-user') }}">
                    <span class="pcoded-micon"><i class="ti-user"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">User</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ (Request::segment(1) == "admin-room" ||Request::segment(1) == "add-room") ? "active":"" }}">
                <a href="{{ url('admin-room') }}">
                    <span class="pcoded-micon"><i class="ti-folder"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Room</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::segment(1) == "admin-payment" ? "active":"" }}">
                <a href="{{ url('admin-payment') }}">
                    <span class="pcoded-micon"><i class="ti-bookmark-alt"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Books</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::segment(1) == "admin-message" ? "active":"" }}">
                <a href="{{ url('admin-message') }}">
                    <span class="pcoded-micon"><i class="ti-comment"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Message</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Setting Layout</div>
            <li class="{{ Request::segment(1) == "slider" ? "active":"" }}">
                <a href="{{ url('slider') }}">
                    <span class="pcoded-micon"><i class="ti-layout-slider-alt"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Slider</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::segment(1) == "about" ? "active":"" }}">
                <a href="{{ url('about') }}">
                    <span class="pcoded-micon"><i class="ti-layout-media-overlay-alt-2"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">About</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::segment(1) == "service" ? "active":"" }}">
                <a href="{{ url('service') }}">
                    <span class="pcoded-micon"><i class="ti-layout-list-post"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Services</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::segment(1) == "admin-gallery" ? "active":"" }}">
                <a href="{{ url('admin-gallery') }}">
                    <span class="pcoded-micon"><i class="ti-gallery"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Gallery</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::segment(1) == "rating" ? "active":"" }}">
                <a href="{{ url('rating') }}">
                    <span class="pcoded-micon"><i class="ti-star"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Rating</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>
