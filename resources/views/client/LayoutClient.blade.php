<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('tilte')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/dist/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/dist/css/style.css') }}" rel="stylesheet">
</head>

<body cz-shortcut-listen="true">
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="{{ route('home') }}" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span
                            class="text-primary font-weight-bold border px-3 mr-1">E</span>HOME</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="{{route('searchProduct')}}" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="name" placeholder="Tìm kiếm sản phẩm">
                        <div class="input-group-append">
                            <button class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="{{ route('order') }}" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">
                        @if(session()->has('cart'))
                            {{count(session('cart'))}}
                        @else
0
                        @endif
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            {{-- <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Danh mục</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse {{request()->is('/') ? 'show' : 'position-absolute' }}             
                navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical" style=" {{request()->is('/') ? '' : 'width:calc(100% - 30px); z-index:1 ;background: white' }}">
                    <div class=" navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="{{route('category','Sofa')}}" class="nav-link" data-toggle="dropdown">Sofa <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Sofa da</a>
                                <a href="" class="dropdown-item">Sofa gỗ</a>
                                <a href="" class="dropdown-item">Sofa tân cổ điển</a>
                            </div>
                        </div>
                        <a href="{{route('category','tu-quan-ao')}}" class="nav-item nav-link">Tủ quần áo</a>
                        <a href="{{route('category','tu-giay-dep')}}" class="nav-item nav-link">Tủ giày dép</a>
                        <a href="{{route('category','ban-an')}}" class="nav-item nav-link">Bàn ăn</a>
                        <a href="{{route('category','tham')}}" class="nav-item nav-link">Thảm</a>
               
                    </div>
                </nav>
            </div> --}}
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span
                                class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ route('home') }}"
                                class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Trang chủ</a>
                            <a href="{{ route('shop', 'ghe-sofa') }}"
                                class="nav-item nav-link {{ request()->is('shop/ghe-sofa') ? 'active' : '' }}">Ghế
                                Sofa</a>
                            <a href="{{ route('shop', 'tu-quan-ao') }}"
                                class="nav-item nav-link {{ request()->is('shop/tu-quan-ao') ? 'active' : '' }}">Tủ Quần
                                áo</a>
                            <a href="{{ route('shop', 'tu-giay-dep') }}"
                                class="nav-item nav-link {{ request()->is('shop/tu-giay-dep') ? 'active' : '' }}">Tủ giày
                                dép</a>
                            <a href="{{ route('shop', 'ban-an') }}"
                                class="nav-item nav-link {{ request()->is('shop/ban-an') ? 'active' : '' }}">bàn ăn</a>
                            <a href="{{ route('shop', 'tham') }}"
                                class="nav-item nav-link {{ request()->is('shop/tham') ? 'active' : '' }}">Thảm</a>


                            {{-- <a href="detail.html" class="nav-item nav-link">Shop Detail</a> --}}
                            {{-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div> --}}
                            <a href="{{ route('contact') }}"
                                class="nav-item nav-link {{ request()->is('lien-he') ? 'active' : '' }}">Liên Hệ</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 profile-user" style="position:relative" >
                            @if(Auth::user())   
                            <a class="nav-item nav-link" >
                                
                                 <img width="50px" src="{{Auth::user()->google_id!=null || Auth::user()->facebook_id!=null ?
                                  asset(Auth::user()->avatar):asset('/images/users/user-defaul.jpg')  }}" alt="">

                                  {{Auth::user()->name}}        
                                </a>    
                                <ul class="profile">
                                    <li class="li-profile"><a href="">Thông tin</a></li>
                                    <li class="li-profile"><a href="{{route('checkOrder')}}">Đơn hàng</a></li>
                                    <li class="li-profile"><a href="{{route('getLout')}}">Đăng xuất</a></li>
                                </ul>


                            @else
                            <a href="{{ route('getLogin') }}" class="nav-item nav-link">Đăng nhập</a>
                            <a href="{{ route('getSignUp') }}" class="nav-item nav-link">Đăng ký</a>
                            @endif
                          
                        </div>
                    </div>
                </nav>
                {{-- start header --}}

                @yield('slice')
                {{-- end header --}}
            </div>


        </div>
    </div>
    @yield('header')
    {{-- end header --}}

    </div>


    <!-- Navbar End -->
    <div class="container-fluid">

        @yield('content')

    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dar   k mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="{{ route('home') }}" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span
                            class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>HOME </h1>
                </a>
             
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Số 255,D.Nguyễn Trãi,Thanh Xuân ,Hà nội</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>EHome@gmail.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i
                                    class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our
                                Shop</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i> Shop
                                Detail </a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i> Shopping
                                Cart </a>
                            <a class="text-dark mb-2" href="checkout.html"><i
                                    class="fa fa-angle-right mr-2"></i></a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact
                                Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i
                                    class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our
                                Shop</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop
                                Detail</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping
                                Cart</a>
                            <a class="text-dark mb-2" href="checkout.html"><i
                                    class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact
                                Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Your Name"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe
                                    Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">Your Site Name</a>. All Rights
                    Reserved. Designed
                    by
                    <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a><br>
                    Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top" style="display: none;"><i
            class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('/dist/lib/easing/easing.min.js') }} "></script>
    <script src="{{ asset('/dist/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <!-- Contact Javascript File -->
    <script src="{{ asset('/dist/mail/jqBootstrapValidation.min.js') }} "></script>
    <script src="{{ asset('/dist/mail/contact.js') }} "></script>

    <!-- Template Javascript -->
    <script src="{{ asset('/dist/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    @yield('script')
    @include('sweetalert::alert')
</html>
