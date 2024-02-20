  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container d-flex justify-content-between align-items-center">
          <div class="logo d-flex gap-3 align-items-center">
              <a href="{{route('index')}}">
                  <img src="{{ asset('public/assets/img/favicon.png') }}" alt="" class="img-fluid"></a>
              <h1 class="text-light"><a href="{{ route('index') }}"><span>WorldCraft</span></a></h1>
          </div>
          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="{{ (isset($page) && $page == 'index') ? 'active' : '' }}" href="{{ route('index') }}">Home</a></li>
                  <li><a class="{{ (isset($page) && $page == 'about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                  <li><a class="{{ (isset($page) && $page == 'services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a></li>
                  <li><a class="{{ (isset($page) && $page == 'team') ? 'active' : '' }}" href="{{ route('team') }}">Team</a></li>
                  <li><a class="{{ (isset($page) && $page == 'blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a></li>
                  <li><a class="{{ (isset($page) && $page == 'contact') ? 'active' : '' }}" href="{{ route('contact_us') }}">Contact Us</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
      </div>
  </header>
