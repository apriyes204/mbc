<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('Dashboard') }}" class="logo d-flex align-items-center">
        <img src="{{ url('backend/assets/img/mbc.png') }}" alt="logo">
        <span class="d-none d-lg-block">PT. MBC</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown">

          <a class="nav-link nav-profile dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ Auth::user()->foto === '' ? url('backend/assets/img/undraw_profile.svg') : Auth::user()->foto}}" alt="Profile" class="rounded-circle">
            <span class="ps-2 d-none d-lg-inline">{{ Auth::user()->name }}</span>
          </a><!-- End Profile Image Icon -->

          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">

            <li>
              <a class="dropdown-item d-md-flex align-items-center" href="{{route('profile.index')}}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form action="{{url('logout')}}" method="POST">
                @csrf
                <button class="btn dropdown-item d-flex align-items-center" type="submit">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </button>
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->