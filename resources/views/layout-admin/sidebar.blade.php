<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start full-background bg-slate-900" id="sidenav-main">
    <div class="sidenav-header">
        <img width="70" height="auto" src="/img/logo/magis.png">
    </div>
    <div class="px-4  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  @yield('highlight')" href="/dashboard">
            <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
              <svg width="30px" height="30px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>dashboard</title>
                <g id="dashboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="template" transform="translate(12.000000, 12.000000)" fill="#000000" fill-rule="nonzero">
                    <path class="icon" d="M0,1.71428571 C0,0.76752 0.76752,0 1.71428571,0 L22.2857143,0 C23.2325143,0 24,0.76752 24,1.71428571 L24,5.14285714 C24,6.08962286 23.2325143,6.85714286 22.2857143,6.85714286 L1.71428571,6.85714286 C0.76752,6.85714286 0,6.08962286 0,5.14285714 L0,1.71428571 Z" id="Path"></path>
                    <path class="icon" d="M0,12 C0,11.0532171 0.76752,10.2857143 1.71428571,10.2857143 L12,10.2857143 C12.9468,10.2857143 13.7142857,11.0532171 13.7142857,12 L13.7142857,22.2857143 C13.7142857,23.2325143 12.9468,24 12,24 L1.71428571,24 C0.76752,24 0,23.2325143 0,22.2857143 L0,12 Z" id="Path"></path>
                    <path class="icon" d="M18.8571429,10.2857143 C17.9103429,10.2857143 17.1428571,11.0532171 17.1428571,12 L17.1428571,22.2857143 C17.1428571,23.2325143 17.9103429,24 18.8571429,24 L22.2857143,24 C23.2325143,24 24,23.2325143 24,22.2857143 L24,12 C24,11.0532171 23.2325143,10.2857143 22.2857143,10.2857143 L18.8571429,10.2857143 Z" id="Path"></path>
                  </g>
                </g>
              </svg>
            </div>
            <span class="text-white nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        
        <li class="nav-item">
          <div class="d-flex align-items-center nav-link">
            <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
              <svg width="30px" height="30px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>table</title>
                <g id="table" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="view-grid" transform="translate(12.000000, 12.000000)" fill="#000000" fill-rule="nonzero">
                    <path class="icon" d="M3.42857143,0 C1.53502286,0 0,1.53502286 0,3.42857143 L0,6.85714286 C0,8.75069143 1.53502286,10.2857143 3.42857143,10.2857143 L6.85714286,10.2857143 C8.75069143,10.2857143 10.2857143,8.75069143 10.2857143,6.85714286 L10.2857143,3.42857143 C10.2857143,1.53502286 8.75069143,0 6.85714286,0 L3.42857143,0 Z" id="Path"></path>
                    <path class="color-background" d="M3.42857143,13.7142857 C1.53502286,13.7142857 0,15.2492571 0,17.1428571 L0,20.5714286 C0,22.4650286 1.53502286,24 3.42857143,24 L6.85714286,24 C8.75069143,24 10.2857143,22.4650286 10.2857143,20.5714286 L10.2857143,17.1428571 C10.2857143,15.2492571 8.75069143,13.7142857 6.85714286,13.7142857 L3.42857143,13.7142857 Z" id="Path"></path>
                    <path class="color-background" d="M13.7142857,3.42857143 C13.7142857,1.53502286 15.2492571,0 17.1428571,0 L20.5714286,0 C22.4650286,0 24,1.53502286 24,3.42857143 L24,6.85714286 C24,8.75069143 22.4650286,10.2857143 20.5714286,10.2857143 L17.1428571,10.2857143 C15.2492571,10.2857143 13.7142857,8.75069143 13.7142857,6.85714286 L13.7142857,3.42857143 Z" id="Path"></path>
                    <path class="icon" d="M13.7142857,17.1428571 C13.7142857,15.2492571 15.2492571,13.7142857 17.1428571,13.7142857 L20.5714286,13.7142857 C22.4650286,13.7142857 24,15.2492571 24,17.1428571 L24,20.5714286 C24,22.4650286 22.4650286,24 20.5714286,24 L17.1428571,24 C15.2492571,24 13.7142857,22.4650286 13.7142857,20.5714286 L13.7142857,17.1428571 Z" id="Path"></path>
                  </g>
                </g>
              </svg>
            </div>
            <a>
            <span class="text-white nav-link-text ms-1" >Geopark</span>
          </a>
        </li>
        <li class="nav-item border-start my-0 pt-2">
          <a class="nav-link position-relative ms-0 ps-2 py-2 @yield('highlight2')" href="/geoheritage" >
            <span class="text-white nav-link-text ms-1">Data Geoheritage</span>
          </a>
        </li>
        <li class="nav-item border-start my-0 pt-2">
          <a class="nav-link position-relative ms-0 ps-2 py-2 @yield('highlight3')" href="/geodiversity" >
            <span class="text-white nav-link-text ms-1">Data Geodiversity</span>
          </a>
        </li>
        <li class="nav-item border-start my-0 pt-2">
          <a class="nav-link position-relative ms-0 ps-2 py-2 @yield('highlight4')" href="/biodiversity">
            <span class="text-white nav-link-text ms-1">Data Biodiversity</span>
          </a>
        </li>
        <li class="nav-item border-start my-0 pt-2">
          <a class="nav-link position-relative ms-0 ps-2 py-2 @yield('highlight5') " href="/culturaldiversity">
            <span class="text-white nav-link-text ms-1">Data Cultural Diversity</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <a class="nav-link  @yield('highlight6')" href="/event">
            <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
              <svg width="30px" height="30px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Event</title>
                <g id="wallet" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="credit-card" transform="translate(12.000000, 15.000000)" fill="#FFFFFF">
                    <path class="color-background" d="M3,0 C1.343145,0 0,1.343145 0,3 L0,4.5 L24,4.5 L24,3 C24,1.343145 22.6569,0 21,0 L3,0 Z" id="Path" fill-rule="nonzero"></path>
                    <path class="icon" d="M24,7.5 L0,7.5 L0,15 C0,16.6569 1.343145,18 3,18 L21,18 C22.6569,18 24,16.6569 24,15 L24,7.5 Z M3,13.5 C3,12.67155 3.67158,12 4.5,12 L6,12 C6.82842,12 7.5,12.67155 7.5,13.5 C7.5,14.32845 6.82842,15 6,15 L4.5,15 C3.67158,15 3,14.32845 3,13.5 Z M10.5,12 C9.67158,12 9,12.67155 9,13.5 C9,14.32845 9.67158,15 10.5,15 L12,15 C12.82845,15 13.5,14.32845 13.5,13.5 C13.5,12.67155 12.82845,12 12,12 L10.5,12 Z" id="Shape"></path>
                  </g>
                </g>
              </svg>
            </div>
            <span class="text-white nav-link-text ms-1 ">Kegiatan</span>
          </a>
        </li>
        <li class="nav-item mt-2">
        <a class="nav-link  @yield('highlight7')" href="/kritik">
        <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="ms-0" viewBox="0 0 24 24" fill="#FFFFFF" class="w-6 h-6">
              <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
            </svg>
            </div>
            <span class="text-white nav-link-text ms-1">Kritik dan Saran</span>
            </a>
        </li>
        <li class="nav-item mt-0">
        <div class="d-flex align-items-center nav-link">
        <svg width="16" height="16" class="ms-2" viewBox="0 0 92 92" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M67.5185 0H55.6542C41.0521 0 31.9258 9.12633 31.9258 23.7285V42.2093H60.4456C62.3165 42.2093 63.8679 43.7608 63.8679 45.6317C63.8679 47.5026 62.3165 49.054 60.4456 49.054H31.9258V67.5348C31.9258 82.137 41.0521 91.2633 55.6542 91.2633H67.4728C82.075 91.2633 91.2013 82.137 91.2013 67.5348V23.7285C91.2469 9.12633 82.1206 0 67.5185 0Z" fill="#FFFFFF"/>
        <path d="M11.6703 42.2086L21.116 32.763C21.8005 32.0786 22.1199 31.2116 22.1199 30.3446C22.1199 29.4776 21.8005 28.5649 21.116 27.9261C19.7927 26.6028 17.6024 26.6028 16.2791 27.9261L0.992489 43.2125C-0.330829 44.5358 -0.330829 46.7261 0.992489 48.0495L16.2791 63.3361C17.6024 64.6594 19.7927 64.6594 21.116 63.3361C22.4394 62.0127 22.4394 59.8224 21.116 58.4991L11.6703 49.0534H31.9307V42.2086H11.6703Z" fill="#FFFFFF"/>
        </svg>
        <a class="nav-link  @yield('highlight8')"  href="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
            <span class="text-white font-weight-normal text-md ms-2 nav-link-text ">Logout</span>
            </a>
            </div>
        </li>

        
    </div>
  </aside>