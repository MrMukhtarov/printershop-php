@stack('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<header>
    <div class="header-area">
        <div class="header-mid header-sticky">
            <div class="container">
                <div class="menu-wrapper">

                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('front/assets/img/logo/logo.png') }}"
                                alt=""></a>
                    </div>

                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                @foreach ($navItems as $nav)
                                    <li><a href="index.html">{{ $nav->name }}</a></li>
                                @endforeach
                                <li><a href="#">{{ LaravelLocalization::getCurrentLocaleName() == 'English' ? 'Products' : 'Məhsullar' }}
                                        <i class="fas fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        @foreach ($categories as $cat)
                                            <li><a href="login.html">{{ $cat->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="header-right">
                        <ul class="align-items-center">
                            <li>
                                <div class="nav-search search-switch hearer_icon">
                                    <a id="search_1" href="javascript:void(0)">
                                        <span class="flaticon-search"></span>
                                    </a>
                                </div>
                            </li>
                            <li class="cart"><a href="cart.html"><span class="flaticon-shopping-cart"></span></a>
                            </li>
                            @if ($user)
                                <li> <span>{{ $user->name }}</span></li>
                                <li><a style="color: #333" href="{{route('client.logout')}}">
                                    <i class="fa-solid fa-right-from-bracket"></i></a></li>
                            @else
                                <li> <a href="{{ route('client.login') }}"><span class="flaticon-user"></span></a></li>
                            @endif
                        </ul>
                    </div>
                </div>

                <div class="search_input" id="search_input_box">
                    <form class="search-inner d-flex justify-content-between ">
                        <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                        <button type="submit" class="btn"></button>
                        <span class="ti-close" id="close_search" title="Close Search"></span>
                    </form>
                </div>

                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
        <div class="header-bottom text-center">
            @if (LaravelLocalization::getCurrentLocaleName() == 'English')
                <p>Sale Up To 50% Biggest Discounts. Hurry! Limited Perriod Offer <a href="#"
                        class="browse-btn">Shop Now</a></p>
            @else
                <p>Satışlarda 50%-ə qədər endirimlər. Tələsin! Məhdud vaxtlı təklif! <a href="#"
                        class="browse-btn">İndi alışveriş edin</a></p>
            @endif
        </div>
    </div>
</header>
