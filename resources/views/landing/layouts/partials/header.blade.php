<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Logis</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('home')}}">@lang('nav.home')</a></li>
          <li><a href="{{route('about')}}">@lang('nav.about')</a></li>
          <li><a href="{{route('services')}}">@lang('nav.services')</a></li>
          <li><a href="{{route('pricing')}}">@lang('nav.pricing')</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="{{route('contact')}}">Contact</a></li>
          <li><a href="{{ route('language', ['lang'=> 'pa']) }}" class="btn {{ app()->getLocale() == 'pa' ? "btn-primary" : null }}">Pashto</a></li>
          <li><a href="{{ route('language', ['lang'=> 'da']) }}" class="btn {{ app()->getLocale() == 'da' ? "btn-primary" : null}}">Dari</a></li>
          <li><a href="{{ route('language', ['lang'=> 'en']) }}" class="btn {{ app()->getLocale() == 'en' ? "btn-primary" : null}}">English</a></li>
        </ul>
      </nav>
      <!-- .navbar -->

    </div>
  </header><!-- End Header -->