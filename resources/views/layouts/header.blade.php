
        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="patoi-responsive-nav">
                <div class="container">
                    <div class="patoi-responsive-menu">
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="patoi-nav">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"></a>
                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{ url('/') }}" class="nav-link @yield('active-home')">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/shop') }}" class="nav-link @yield('active-shop')">
                                        Shop
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/about-us') }}" class="nav-link @yield('active-about')">
                                        About Us
                                    </a>
                                </li>
                            </ul>
                            <div class="others-option">
                                <div class="d-flex align-items-center">
                                    <ul>
                                        <li>
                                            <select class="form-select">
                                                <option selected>English</option>
                                                <option value="1">Myanmar</option>
                                            </select>
                                        </li>
                                        {{-- <li>
                                            <div class="search-icon">
                                                <i class='bx bx-search'></i>
                                            </div>
                                        </li>
                                        <li><a href="profile-authentication.html"><i class='bx bx-user-circle'></i></a></li>
                                        <li><a href="cart.html"><i class='bx bx-cart'></i></a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-option">
                                <ul>
                                    <li>
                                        <select class="form-select">
                                            <option selected>English</option>
                                            <option value="1">Myanmar</option>
                                        </select>
                                    </li>
                                    {{-- <li>
                                        <div class="search-icon">
                                            <i class='bx bx-search'></i>
                                        </div>
                                    </li>
                                    <li><a href="profile-authentication.html"><i class='bx bx-user-circle'></i></a></li>
                                    <li><a href="cart.html"><i class='bx bx-cart'></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Search Overlay -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-close">
                        <span class="search-overlay-close-line"></span>
                        <span class="search-overlay-close-line"></span>
                    </div>
                    <div class="search-overlay-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Enter your keywords...">
                            <button type="submit"><i class='bx bx-search'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Overlay -->
