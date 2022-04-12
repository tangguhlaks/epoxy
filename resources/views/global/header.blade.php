<!-- ========== HEADER ========== -->
<header class="horizontal-header sticky-header" data-menutoggle="991">
    <div class="container">
      <!-- BRAND -->
      <div class="brand">
        <div class="logo">
          <a href="{{ url('/') }}">
                <h1 style="color: #EDCB90">Nata.</h1>
          </a>
        </div>
      </div>
      <!-- MOBILE MENU BUTTON -->
      <div id="toggle-menu-button" class="toggle-menu-button">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>
      <!-- MAIN MENU -->
      <nav id="main-menu" class="main-menu">
        <ul class="menu">
          <li class="menu-item dropdown {{ Request::segment(1) == "" ? "active" : "" }}">
            <a href="{{ url('/') }}">HOME</a>
          </li>
          <li class="menu-item dropdown {{ Request::segment(1) == "room" ? "active" : "" }}">
            <a href="{{ url('/room') }}">ROOMS</a>
          </li>
          @auth
          <li class="menu-item dropdown {{ Request::segment(1) == "mybook" ? "active" : "" }}">
            <a href="{{ url('/mybook') }}">MY BOOKS</a>
          </li>
          @endauth
          <li class="menu-item dropdown {{ Request::segment(1) == "gallery" ? "active" : "" }}">
            <a href="{{ url('gallery') }}">GALLERY</a>
          </li>
          <li class="menu-item {{ Request::segment(1) == "contact-us" ? "active" : "" }}">
            <a href="{{ url('contact-us') }}">CONTACT US</a>
          </li>
          <li class="menu-item menu-btn">
              @auth
              <a href="{{ url('/room') }}" class="btn">
                <i class="fa fa-calendar"></i>
                BOOK ONLINE</a>
              @endauth
              @guest
              <a data-toggle="modal" data-target="#loginModal" class="btn btn-book" style="color: white" class="btn">
                <i class="fa fa-calendar"></i>
                BOOK ONLINE</a>
              @endguest
          </li>
        </ul>
      </nav>
    </div>
  </header>
