<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Go Shop Ecommerce</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="192x192" href="{{ asset('assets/images/favicon_io/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicon_io/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/images/icons/safari-pinned-tab.svg') }}" color="#666666">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon_io/favicon.ico') }}">
    <meta name="apple-mobile-web-app-title" content="Go Shop Ecommerce">
    <meta name="application-name" content="Go Shop Ecommerce">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{ asset('assets/images/icons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css') }}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery.countdown.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skins/skin-demo-14.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demos/demo-14.css') }}">
@toastr_css
</head>
<div class="page-wrapper">

   <header class="header header-14">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
            </div><!-- End .header-left -->

            <div class="header-right">

                <ul class="top-menu">
                    <li>
                        <a href="#">Links</a>
                        <ul class="menus">
                            <li>
                                <div class="header-dropdown">
                                    <a href="#">USD</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">Eur</a></li>
                                            <li><a href="#">Usd</a></li>
                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div><!-- End .header-dropdown -->
                            </li>
                            <li class="login">
                                @auth
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown mr-3">
                                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <img src="{{ asset('images/users/'.auth()->user()->avatar) }}" width="40" height="40"
                                                    class="rounded-circle">
                                            </a>
                                            <div class="dropdown-menu mr-5 p-2" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="#" style="font-size: 14px">Edit Profile</a>
                                                <form action="{{ route('logout') }}" method="POST" style="font-size: 14px">
                                                    @csrf
                                                    <button class="dropdown-item" type="submit">Logout</button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                @else
                                    <a href="{{ route('login') }}">Sign in /</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Sign up</a>
                                    @endif
                                @endauth
                                {{-- <ul class="navbar-nav">
                                    <li class="nav-item dropdown mr-3">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <img src="{{ auth()->user()->avatar }}"
                                                width="40" height="40" class="rounded-circle">
                                        </a>
                                        <div class="dropdown-menu mr-5" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Edit Profile</a>
                                            <a class="dropdown-item" href="#">Log Out</a>
                                        </div>
                                    </li>
                                </ul> --}}
                                {{-- @guest
                                    <a href="{{ route('login') }}">Sign in /</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Sign up</a>
                                    @endif
                                @endguest --}}
                            </li>
                        </ul>
                    </li>
                </ul><!-- End .top-menu -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle">
        <div class="container-fluid">
            <div class="row">
                <div class="col-auto col-lg-3 col-xl-3 col-xxl-2">
                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="icon-bars"></i>
                    </button>
                    <a href="{{ url('/user') }}" class="logo" style="margin-top: 0">
                        <img src="{{ asset('assets/images/Capture.PNG') }}" alt="Molla Logo" width="150" height="40">
                    </a>
                </div><!-- End .col-xl-3 col-xxl-2 -->

                <div class="col col-lg-9 col-xl-9 col-xxl-10 header-middle-right">
                    <div class="row">
                        <div class="col-lg-8 col-xxl-4-5col d-none d-lg-block">
                            <div
                                class="header-search header-search-extended header-search-visible header-search-no-radius">
                                <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                                <form action="#" method="get">
                                    <div class="header-search-wrapper search-wrapper-wide">

                                        <div class="select-custom">
                                            <select id="cat" name="cat">
                                                <option value="">All Departments</option>
                                                <option value="1">Fashion</option>
                                                <option value="2">- Women</option>
                                                <option value="3">- Men</option>
                                                <option value="4">- Jewellery</option>
                                                <option value="5">- Kids Fashion</option>
                                                <option value="6">Electronics</option>
                                                <option value="7">- Smart TVs</option>
                                                <option value="8">- Cameras</option>
                                                <option value="9">- Games</option>
                                                <option value="10">Home &amp; Garden</option>
                                                <option value="11">Motors</option>
                                                <option value="12">- Cars and Trucks</option>
                                                <option value="15">- Boats</option>
                                                <option value="16">- Auto Tools &amp; Supplies</option>
                                            </select>
                                        </div><!-- End .select-custom -->
                                        <label for="q" class="sr-only">Search</label>
                                        <input type="search" class="form-control" name="q" id="q"
                                            placeholder="Search product ..." required>

                                        <button class="btn btn-primary" type="submit"><i
                                                class="icon-search"></i></button>
                                    </div><!-- End .header-search-wrapper -->
                                </form>
                            </div><!-- End .header-search -->
                        </div><!-- End .col-xxl-4-5col -->

                        <div class="col-lg-4 col-xxl-5col d-flex justify-content-end align-items-center">
                            <div class="header-dropdown-link">
                                <div class="dropdown compare-dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" data-display="static"
                                        title="Compare Products" aria-label="Compare Products">
                                        <i class="icon-random"></i>
                                        <span class="compare-txt">Compare</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="compare-products">
                                            <li class="compare-product">
                                                <a href="#" class="btn-remove" title="Remove Product"><i
                                                        class="icon-close"></i></a>
                                                <h4 class="compare-product-title"><a href="product.html">Blue
                                                        Night Dress</a></h4>
                                            </li>
                                            <li class="compare-product">
                                                <a href="#" class="btn-remove" title="Remove Product"><i
                                                        class="icon-close"></i></a>
                                                <h4 class="compare-product-title"><a href="product.html">White
                                                        Long Skirt</a></h4>
                                            </li>
                                        </ul>

                                        <div class="compare-actions">
                                            <a href="#" class="action-link">Clear All</a>
                                            <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i
                                                    class="icon-long-arrow-right"></i></a>
                                        </div>
                                    </div><!-- End .dropdown-menu -->
                                </div><!-- End .compare-dropdown -->

                                <a href="wishlist.html" class="wishlist-link">
                                    <i class="icon-heart-o"></i>
                                    <span class="wishlist-count">3</span>
                                    <span class="wishlist-txt">Wishlist</span>
                                </a>

                                {{-- <div class="dropdown cart-dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" data-display="static">
                                        <i class="icon-shopping-cart"></i>
                                        @guest
                                            <span class="cart-count">0</span>
                                        @endguest
                                        @auth
                                            <span class="cart-count">
                                                {{ App\Models\Cart::where('user_id', Auth::user()->id)->count() }}
                                            </span>
                                        @endauth

                                        <span class="cart-txt">Cart</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-cart-products">
                                            <div class="product">
                                                <div class="product-cart-details">
                                                    <h4 class="product-title">
                                                        <a href="product.html">Beige knitted elastic runner
                                                            shoes</a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty">1</span>
                                                        x $84.00
                                                    </span>
                                                </div><!-- End .product-cart-details -->

                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/cart/product-1.jpg"
                                                            alt="product">
                                                    </a>
                                                </figure>
                                                <a href="#" class="btn-remove" title="Remove Product"><i
                                                        class="icon-close"></i></a>
                                            </div><!-- End .product -->

                                            <div class="product">
                                                <div class="product-cart-details">
                                                    <h4 class="product-title">
                                                        <a href="product.html">Blue utility pinafore denim
                                                            dress</a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty">1</span>
                                                        x $76.00
                                                    </span>
                                                </div><!-- End .product-cart-details -->

                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/cart/product-2.jpg"
                                                            alt="product">
                                                    </a>
                                                </figure>
                                                <a href="#" class="btn-remove" title="Remove Product"><i
                                                        class="icon-close"></i></a>
                                            </div><!-- End .product -->
                                        </div><!-- End .cart-product -->

                                        <div class="dropdown-cart-total">
                                            <span>Total</span>

                                            <span class="cart-total-price">$160.00</span>
                                        </div><!-- End .dropdown-cart-total -->

                                        <div class="dropdown-cart-action">
                                            <a href="cart.html" class="btn btn-primary">View Cart</a>
                                            <a href="checkout.html"
                                                class="btn btn-outline-primary-2"><span>Checkout</span><i
                                                    class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .dropdown-cart-total -->
                                    </div><!-- End .dropdown-menu -->
                                </div><!-- End .cart-dropdown --> --}}
                                <div class="dropdown cart-dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" data-display="static">
                                        <i class="icon-shopping-cart"></i>
                                        @guest
                                            <span class="cart-count">0</span>
                                        @endguest
                                        @auth
                                            <span class="cart-count">

                                                {{ $totalQuantity }}

                                            </span>
                                        @endauth

                                        <span class="cart-txt">Cart</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-cart-products">
                                            @auth

                                            @forelse( $cartProductsWithImage as $product)
                                                <div class="product">
                                                    <div class="product-cart-details">
                                                        <h4 class="product-title">
                                                            <a href="product.html">{{ $product->name }}</a>
                                                        </h4>

                                                        <span class="cart-product-info">
                                                            <span
                                                                class="cart-product-qty">{{ $product->cart_quantity }}x </span>
                                                            {{ $product->price }}
                                                        </span>
                                                    </div><!-- End .product-cart-details -->
                                                        <figure class="product-image-container">
                                                            <a href="" class="product-image">
                                                                    <img src="{{ asset($product->image) }}" alt="product">
                                                            </a>
                                                        </figure>

                                                    {{-- <a href="#" class="btn-remove" title="Remove Product"><i
                                                    class="icon-close"></i></a> --}}
                                                    <form action="{{ route('user.carts.destroy', $product->id) }}"method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn-remove"
                                                            title="Remove Product"><i
                                                                class="icon-close"></i></button>
                                                    </form>
                                                </div><!-- End .product -->
                                            @empty
                                                No products in cart

                                            @endforelse
                                            {{-- <div class="product">
                                            <div class="product-cart-details">
                                                <h4 class="product-title">
                                                    <a href="product.html">Blue utility pinafore denim
                                                        dress</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $76.00
                                                </span>
                                            </div><!-- End .product-cart-details -->

                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="assets/images/products/cart/product-2.jpg"
                                                        alt="product">
                                                </a>
                                            </figure>
                                            <a href="#" class="btn-remove" title="Remove Product"><i
                                                    class="icon-close"></i></a>
                                        </div><!-- End .product --> --}}
                                        </div><!-- End .cart-product -->

                                        <div class="dropdown-cart-total">
                                            <span>Total</span>

                                            <span class="cart-total-price">{{ $totalPrice }}$</span>
                                        </div><!-- End .dropdown-cart-total -->

                                        <div class="dropdown-cart-action">
                                            <a href="{{ route('user.carts.index') }}" class="btn btn-primary">View Cart</a>
                                            <a href="checkout.html"
                                                class="btn btn-outline-primary-2"><span>Checkout</span><i
                                                    class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .dropdown-cart-total -->
                                        @endauth
                                    </div><!-- End .dropdown-menu -->
                                </div>
                            </div>
                        </div><!-- End .col-xxl-5col -->
                    </div><!-- End .row -->
                </div><!-- End .col-xl-9 col-xxl-10 -->
            </div><!-- End .row -->
        </div><!-- End .container-fluid -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-auto col-lg-3 col-xl-3 col-xxl-2 header-left">
                    <div class="dropdown category-dropdown is-on @yield('show')" data-visible="true">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" data-display="static" title="Browse Categories">
                            Browse Categories
                        </a>

                        <div class="dropdown-menu  @yield('show')">
                            <nav class="side-nav">
                                <ul class="menu-vertical sf-arrows">
                                    <li class="megamenu-container">
                                        <a class="sf-with-ul" href="#"><i
                                                class="icon-laptop"></i>All Categories</a>

                                        <div class="megamenu">
                                            <div class="row no-gutters">
                                                <div class="col-md-8">
                                                    <div class="menu-col">
                                                        <div class="row">

                                                            @forelse($categories as $category)
                                                            <div class="col-md-6">
                                                                <div class="menu-title">{{$category->name}}</div>
                                                                <!-- End .menu-title -->
                                                                <ul>
                                                                    @foreach($category->subcategories as $subcategory)
                                                                    <li><a href="{{route('user.subcategories.show',$subcategory->id)}}">{{$subcategory->name}}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </div><!-- End .col-md-6 -->
                                                            @empty
                                                            <div class="col-md-6">
                                                                <div class="menu-title">No Categories</div>
                                                                <!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#">No Subcategories</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-6 -->
                                                            @endforelse
                                                            {{-- @endauth --}}





                                                        </div><!-- End .row -->
                                                    </div><!-- End .menu-col -->
                                                </div><!-- End .col-md-8 -->

                                                <div class="col-md-4">
                                                    <div class="banner banner-overlay">
                                                        <a href="category.html" class="banner banner-menu">
                                                            <img src="assets/images/demos/demo-13/menu/banner-1.jpg"
                                                                alt="Banner">
                                                        </a>
                                                    </div><!-- End .banner banner-overlay -->
                                                </div><!-- End .col-md-4 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .megamenu -->
                                    {{-- </li>
                                    <li class="megamenu-container">
                                        <a class="sf-with-ul" href="#"><i class="icon-couch"></i>Furniture</a>

                                        <div class="megamenu">
                                            <div class="row no-gutters">
                                                <div class="col-md-8">
                                                    <div class="menu-col">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="menu-title">Bedroom</div>
                                                                <!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#">Beds, Frames & Bases</a>
                                                                    </li>
                                                                    <li><a href="#">Dressers</a></li>
                                                                    <li><a href="#">Nightstands</a></li>
                                                                    <li><a href="#">Kids' Beds & Headboards</a>
                                                                    </li>
                                                                    <li><a href="#">Armoires</a></li>
                                                                </ul>

                                                                <div class="menu-title">Living Room</div>
                                                                <!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#">Coffee Tables</a></li>
                                                                    <li><a href="#">Chairs</a></li>
                                                                    <li><a href="#">Tables</a></li>
                                                                    <li><a href="#">Futons & Sofa Beds</a></li>
                                                                    <li><a href="#">Cabinets & Chests</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-6 -->

                                                            <div class="col-md-6">
                                                                <div class="menu-title">Office</div>
                                                                <!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#">Office Chairs</a></li>
                                                                    <li><a href="#">Desks</a></li>
                                                                    <li><a href="#">Bookcases</a></li>
                                                                    <li><a href="#">File Cabinets</a></li>
                                                                    <li><a href="#">Breakroom Tables</a></li>
                                                                </ul>

                                                                <div class="menu-title">Kitchen & Dining
                                                                </div><!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#">Dining Sets</a></li>
                                                                    <li><a href="#">Kitchen Storage Cabinets</a>
                                                                    </li>
                                                                    <li><a href="#">Bakers Racks</a></li>
                                                                    <li><a href="#">Dining Chairs</a></li>
                                                                    <li><a href="#">Dining Room Tables</a></li>
                                                                    <li><a href="#">Bar Stools</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-6 -->
                                                        </div><!-- End .row -->
                                                    </div><!-- End .menu-col -->
                                                </div><!-- End .col-md-8 -->

                                                <div class="col-md-4">
                                                    <div class="banner banner-overlay">
                                                        <a href="category.html" class="banner banner-menu">
                                                            <img src="assets/images/demos/demo-13/menu/banner-2.jpg"
                                                                alt="Banner">
                                                        </a>
                                                    </div><!-- End .banner banner-overlay -->
                                                </div><!-- End .col-md-4 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .megamenu -->
                                    </li>
                                    <li class="megamenu-container">
                                        <a class="sf-with-ul" href="#"><i
                                                class="icon-concierge-bell"></i>Cooking</a>

                                        <div class="megamenu">
                                            <div class="menu-col">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="menu-title">Cookware</div>
                                                        <!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="#">Cookware Sets</a></li>
                                                            <li><a href="#">Pans, Griddles & Woks</a></li>
                                                            <li><a href="#">Pots</a></li>
                                                            <li><a href="#">Skillets & Grill Pans</a></li>
                                                            <li><a href="#">Kettles</a></li>
                                                            <li><a href="#">Soup & Stockpots</a></li>
                                                        </ul>
                                                    </div><!-- End .col-md-4 -->

                                                    <div class="col-md-4">
                                                        <div class="menu-title">Dinnerware & Tabletop</div>
                                                        <!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="#">Plates</a></li>
                                                            <li><a href="#">Cups & Mugs</a></li>
                                                            <li><a href="#">Trays & Platters</a></li>
                                                            <li><a href="#">Coffee & Tea Serving</a></li>
                                                            <li><a href="#">Salt & Pepper Shaker</a></li>
                                                        </ul>
                                                    </div><!-- End .col-md-4 -->

                                                    <div class="col-md-4">
                                                        <div class="menu-title">Cooking Appliances</div>
                                                        <!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="#">Microwaves</a></li>
                                                            <li><a href="#">Coffee Makers</a></li>
                                                            <li><a href="#">Mixers & Attachments</a></li>
                                                            <li><a href="#">Slow Cookers</a></li>
                                                            <li><a href="#">Air Fryers</a></li>
                                                            <li><a href="#">Toasters & Ovens</a></li>
                                                        </ul>
                                                    </div><!-- End .col-md-4 -->
                                                </div><!-- End .row -->

                                                <div class="row menu-banners">
                                                    <div class="col-md-4">
                                                        <div class="banner">
                                                            <a href="#">
                                                                <img src="assets/images/demos/demo-13/menu/1.jpg"
                                                                    alt="image">
                                                            </a>
                                                        </div><!-- End .banner -->
                                                    </div><!-- End .col-md-4 -->

                                                    <div class="col-md-4">
                                                        <div class="banner">
                                                            <a href="#">
                                                                <img src="assets/images/demos/demo-13/menu/2.jpg"
                                                                    alt="image">
                                                            </a>
                                                        </div><!-- End .banner -->
                                                    </div><!-- End .col-md-4 -->

                                                    <div class="col-md-4">
                                                        <div class="banner">
                                                            <a href="#">
                                                                <img src="assets/images/demos/demo-13/menu/3.jpg"
                                                                    alt="image">
                                                            </a>
                                                        </div><!-- End .banner -->
                                                    </div><!-- End .col-md-4 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .menu-col -->
                                        </div><!-- End .megamenu -->
                                    </li>
                                    <li class="megamenu-container">
                                        <a class="sf-with-ul" href="#"><i class="icon-tshirt"></i>Clothing</a>

                                        <div class="megamenu">
                                            <div class="row no-gutters">
                                                <div class="col-md-8">
                                                    <div class="menu-col">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="menu-title">Women</div>
                                                                <!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#"><strong>New
                                                                                Arrivals</strong></a></li>
                                                                    <li><a href="#"><strong>Best
                                                                                Sellers</strong></a></li>
                                                                    <li><a href="#"><strong>Trending</strong></a>
                                                                    </li>
                                                                    <li><a href="#">Clothing</a></li>
                                                                    <li><a href="#">Shoes</a></li>
                                                                    <li><a href="#">Bags</a></li>
                                                                    <li><a href="#">Accessories</a></li>
                                                                    <li><a href="#">Jewlery & Watches</a></li>
                                                                    <li><a href="#"><strong>Sale</strong></a>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- End .col-md-6 -->

                                                            <div class="col-md-6">
                                                                <div class="menu-title">Men</div>
                                                                <!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#"><strong>New
                                                                                Arrivals</strong></a></li>
                                                                    <li><a href="#"><strong>Best
                                                                                Sellers</strong></a></li>
                                                                    <li><a href="#"><strong>Trending</strong></a>
                                                                    </li>
                                                                    <li><a href="#">Clothing</a></li>
                                                                    <li><a href="#">Shoes</a></li>
                                                                    <li><a href="#">Bags</a></li>
                                                                    <li><a href="#">Accessories</a></li>
                                                                    <li><a href="#">Jewlery & Watches</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-6 -->
                                                        </div><!-- End .row -->
                                                    </div><!-- End .menu-col -->
                                                </div><!-- End .col-md-8 -->

                                                <div class="col-md-4">
                                                    <div class="banner banner-overlay">
                                                        <a href="category.html" class="banner banner-menu">
                                                            <img src="assets/images/demos/demo-13/menu/banner-3.jpg"
                                                                alt="Banner">
                                                        </a>
                                                    </div><!-- End .banner banner-overlay -->
                                                </div><!-- End .col-md-4 -->
                                            </div><!-- End .row -->

                                            <div class="menu-col menu-brands">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <a href="#" class="brand">
                                                            <img src="assets/images/brands/1.png" alt="Brand Name">
                                                        </a>
                                                    </div><!-- End .col-lg-2 -->

                                                    <div class="col-lg-2">
                                                        <a href="#" class="brand">
                                                            <img src="assets/images/brands/2.png" alt="Brand Name">
                                                        </a>
                                                    </div><!-- End .col-lg-2 -->

                                                    <div class="col-lg-2">
                                                        <a href="#" class="brand">
                                                            <img src="assets/images/brands/3.png" alt="Brand Name">
                                                        </a>
                                                    </div><!-- End .col-lg-2 -->

                                                    <div class="col-lg-2">
                                                        <a href="#" class="brand">
                                                            <img src="assets/images/brands/4.png" alt="Brand Name">
                                                        </a>
                                                    </div><!-- End .col-lg-2 -->

                                                    <div class="col-lg-2">
                                                        <a href="#" class="brand">
                                                            <img src="assets/images/brands/5.png" alt="Brand Name">
                                                        </a>
                                                    </div><!-- End .col-lg-2 -->

                                                    <div class="col-lg-2">
                                                        <a href="#" class="brand">
                                                            <img src="assets/images/brands/6.png" alt="Brand Name">
                                                        </a>
                                                    </div><!-- End .col-lg-2 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .menu-brands -->
                                        </div><!-- End .megamenu -->
                                    </li>
                                    <li><a href="#"><i class="icon-blender"></i>Home Appliances</a></li>
                                    <li><a href="#"><i class="icon-heartbeat"></i>Healthy & Beauty</a></li>
                                    <li><a href="#"><i class="icon-shoe-prints"></i>Shoes & Boots</a></li>
                                    <li><a href="#"><i class="icon-map-signs"></i>Travel & Outdoor</a></li>
                                    <li><a href="#"><i class="icon-mobile-alt"></i>Smart Phones</a></li>
                                    <li><a href="#"><i class="icon-tv"></i>TV & Audio</a></li>
                                    <li><a href="#"><i class="icon-shopping-bag"></i>Backpack & Bag</a></li>
                                    <li><a href="#"><i class="icon-music"></i>Musical Instruments</a></li>
                                    <li><a href="#"><i class="icon-gift"></i>Gift Ideas</a></li> --}}
                                    
                                    @foreach ($categories as $category )
                                    @foreach ($category->subcategories as $subcat)
                                    <li class="megamenu-container">
                                        @if($subcat->name=='Women' || $subcat->name=="Men" || $subcat->name=="Sunglasses" || $subcat->name=="Children" || $subcat->name=="Scarf" || $subcat->name=="Handmade")
                                        <a href="{{ route('user.subcategories.show', $subcat->id) }}"> <i class="icon-tshirt"></i>{{ $subcat->name }}</a>
                                        @endif
                                    </li>

                                    @endforeach

                                    @endforeach
                                </ul><!-- End .menu-vertical -->
                            </nav><!-- End .side-nav -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .category-dropdown -->
                </div><!-- End .col-xl-3 col-xxl-2 -->

                <div class="col col-lg-6 col-xl-6 col-xxl-8 header-center">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="megamenu-container active">
                                <a href="index.html" class="sf-with-ul">Home</a>

                                <div class="megamenu demo">
                                    <div class="menu-col">
                                        <div class="menu-title">Choose your demo</div>
                                        <!-- End .menu-title -->

                                        <div class="demo-list">
                                            <div class="demo-item">
                                                <a href="index-1.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/1.jpg);"></span>
                                                    <span class="demo-title">01 - furniture store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-2.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/2.jpg);"></span>
                                                    <span class="demo-title">02 - furniture store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-3.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/3.jpg);"></span>
                                                    <span class="demo-title">03 - electronic store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-4.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/4.jpg);"></span>
                                                    <span class="demo-title">04 - electronic store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-5.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/5.jpg);"></span>
                                                    <span class="demo-title">05 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-6.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/6.jpg);"></span>
                                                    <span class="demo-title">06 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-7.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/7.jpg);"></span>
                                                    <span class="demo-title">07 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-8.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/8.jpg);"></span>
                                                    <span class="demo-title">08 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-9.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/9.jpg);"></span>
                                                    <span class="demo-title">09 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-10.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/10.jpg);"></span>
                                                    <span class="demo-title">10 - shoes store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-11.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/11.jpg);"></span>
                                                    <span class="demo-title">11 - furniture simple
                                                        store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-12.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/12.jpg);"></span>
                                                    <span class="demo-title">12 - fashion simple
                                                        store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-13.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/13.jpg);"></span>
                                                    <span class="demo-title">13 - market</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-14.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/14.jpg);"></span>
                                                    <span class="demo-title">14 - market fullwidth</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-15.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/15.jpg);"></span>
                                                    <span class="demo-title">15 - lookbook 1</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-16.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/16.jpg);"></span>
                                                    <span class="demo-title">16 - lookbook 2</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-17.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/17.jpg);"></span>
                                                    <span class="demo-title">17 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-18.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/18.jpg);"></span>
                                                    <span class="demo-title">18 - fashion store (with
                                                        sidebar)</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-19.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/19.jpg);"></span>
                                                    <span class="demo-title">19 - games store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-20.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/20.jpg);"></span>
                                                    <span class="demo-title">20 - book store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-21.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/21.jpg);"></span>
                                                    <span class="demo-title">21 - sport store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-22.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/22.jpg);"></span>
                                                    <span class="demo-title">22 - tools store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-23.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/23.jpg);"></span>
                                                    <span class="demo-title">23 - fashion left navigation
                                                        store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-24.html">
                                                    <span class="demo-bg"
                                                        style="background-image: url(assets/images/menu/demos/24.jpg);"></span>
                                                    <span class="demo-title">24 - extreme sport
                                                        store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                        </div><!-- End .demo-list -->

                                        <div class="megamenu-action text-center">
                                            <a href="#" class="btn btn-outline-primary-2 view-all-demos"><span>View All
                                                    Demos</span><i class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .text-center -->
                                    </div><!-- End .menu-col -->
                                </div><!-- End .megamenu -->
                            </li>
                            <li>
                                <a href="category.html" class="sf-with-ul">Shop</a>

                                <div class="megamenu megamenu-md">
                                    <div class="row no-gutters">
                                        <div class="col-md-8">
                                            <div class="menu-col">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="menu-title">Shop with sidebar</div>
                                                        <!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="category-list.html">Shop List</a></li>
                                                            <li><a href="category-2cols.html">Shop Grid 2
                                                                    Columns</a></li>
                                                            <li><a href="category.html">Shop Grid 3 Columns</a>
                                                            </li>
                                                            <li><a href="category-4cols.html">Shop Grid 4
                                                                    Columns</a></li>
                                                            <li><a href="category-market.html"><span>Shop
                                                                        Market<span
                                                                            class="tip tip-new">New</span></span></a>
                                                            </li>
                                                        </ul>

                                                        <div class="menu-title">Shop no sidebar</div>
                                                        <!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="category-boxed.html"><span>Shop Boxed
                                                                        No Sidebar<span
                                                                            class="tip tip-hot">Hot</span></span></a>
                                                            </li>
                                                            <li><a href="category-fullwidth.html">Shop Fullwidth
                                                                    No Sidebar</a></li>
                                                        </ul>
                                                    </div><!-- End .col-md-6 -->

                                                    <div class="col-md-6">
                                                        <div class="menu-title">Product Category</div>
                                                        <!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="product-category-boxed.html">Product
                                                                    Category Boxed</a></li>
                                                            <li><a href="product-category-fullwidth.html"><span>Product
                                                                        Category Fullwidth<span
                                                                            class="tip tip-new">New</span></span></a>
                                                            </li>
                                                        </ul>
                                                        <div class="menu-title">Shop Pages</div>
                                                        <!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="dashboard.html">My Account</a></li>
                                                            <li><a href="#">Lookbook</a></li>
                                                        </ul>
                                                    </div><!-- End .col-md-6 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .menu-col -->
                                        </div><!-- End .col-md-8 -->

                                        <div class="col-md-4">
                                            <div class="banner banner-overlay">
                                                <a href="category.html" class="banner banner-menu">
                                                    <img src="assets/images/menu/banner-1.jpg" alt="Banner">

                                                    <div class="banner-content banner-content-top">
                                                        <div class="banner-title text-white">Last
                                                            <br>Chance<br><span><strong>Sale</strong></span>
                                                        </div><!-- End .banner-title -->
                                                    </div><!-- End .banner-content -->
                                                </a>
                                            </div><!-- End .banner banner-overlay -->
                                        </div><!-- End .col-md-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .megamenu megamenu-md -->
                            </li>
                            <li>
                                <a href="product.html" class="sf-with-ul">Product</a>

                                <div class="megamenu megamenu-sm">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <div class="menu-col">
                                                <div class="menu-title">Product Details</div>
                                                <!-- End .menu-title -->
                                                <ul>
                                                    <li><a href="product.html">Default</a></li>
                                                    <li><a href="product-centered.html">Centered</a></li>
                                                    <li><a href="product-extended.html"><span>Extended Info<span
                                                                    class="tip tip-new">New</span></span></a>
                                                    </li>
                                                    <li><a href="product-gallery.html">Gallery</a></li>
                                                    <li><a href="product-sticky.html">Sticky Info</a></li>
                                                    <li><a href="product-sidebar.html">Boxed With Sidebar</a>
                                                    </li>
                                                    <li><a href="product-fullwidth.html">Full Width</a></li>
                                                    <li><a href="product-masonry.html">Masonry Sticky Info</a>
                                                    </li>
                                                </ul>
                                            </div><!-- End .menu-col -->
                                        </div><!-- End .col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="banner banner-overlay">
                                                <a href="category.html">
                                                    <img src="assets/images/menu/banner-2.jpg" alt="Banner">

                                                    <div class="banner-content banner-content-bottom">
                                                        <div class="banner-title text-white">New
                                                            Trends<br><span><strong>spring 2019</strong></span>
                                                        </div><!-- End .banner-title -->
                                                    </div><!-- End .banner-content -->
                                                </a>
                                            </div><!-- End .banner -->
                                        </div><!-- End .col-md-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .megamenu megamenu-sm -->
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul">Pages</a>

                                <ul>
                                    <li>
                                        <a href="about.html" class="sf-with-ul">About</a>

                                        <ul>
                                            <li><a href="about.html">About 01</a></li>
                                            <li><a href="about-2.html">About 02</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html" class="sf-with-ul">Contact</a>

                                        <ul>
                                            <li><a href="contact.html">Contact 01</a></li>
                                            <li><a href="contact-2.html">Contact 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html" class="sf-with-ul">Blog</a>

                                <ul>
                                    <li><a href="blog.html">Classic</a></li>
                                    <li><a href="blog-listing.html">Listing</a></li>
                                    <li>
                                        <a href="#">Grid</a>
                                        <ul>
                                            <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                            <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                            <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                            <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Masonry</a>
                                        <ul>
                                            <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                            <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                            <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                            <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Mask</a>
                                        <ul>
                                            <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                            <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Single Post</a>
                                        <ul>
                                            <li><a href="single.html">Default with sidebar</a></li>
                                            <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                            <li><a href="single-fullwidth-sidebar.html">Fullwidth with
                                                    sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="elements-list.html" class="sf-with-ul">Elements</a>

                                <ul>
                                    <li><a href="elements-products.html">Products</a></li>
                                    <li><a href="elements-typography.html">Typography</a></li>
                                    <li><a href="elements-titles.html">Titles</a></li>
                                    <li><a href="elements-banners.html">Banners</a></li>
                                    <li><a href="elements-product-category.html">Product Category</a></li>
                                    <li><a href="elements-video-banners.html">Video Banners</a></li>
                                    <li><a href="elements-buttons.html">Buttons</a></li>
                                    <li><a href="elements-accordions.html">Accordions</a></li>
                                    <li><a href="elements-tabs.html">Tabs</a></li>
                                    <li><a href="elements-testimonials.html">Testimonials</a></li>
                                    <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                    <li><a href="elements-portfolio.html">Portfolio</a></li>
                                    <li><a href="elements-cta.html">Call to Action</a></li>
                                    <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                                </ul>
                            </li>
                        </ul><!-- End .menu -->
                    </nav><!-- End .main-nav -->
                </div><!-- End .col-xl-9 col-xxl-10 -->

                <div class="col col-lg-3 col-xl-3 col-xxl-2 header-right">
                    <i class="la la-lightbulb-o"></i>
                    <p>Clearance Up to 30% Off</span></p>
                </div>
            </div><!-- End .row -->
        </div><!-- End .container-fluid -->
    </div><!-- End .header-bottom -->

</header>

 <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Products<span>Elements</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="elements-list.html">Elements</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">

                <div class="row">
                    @foreach ($productsWithImages as $product)
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="product text-center">
                                <figure class="product-media" style="background-color: #fff">
                                    @if($product->quantity > 0)
                                        <div class="product-label label-sale">
                                            <span>Sale</span>
                                        </div><!-- End .product-label -->
                                        @else
                                        <div class="product-label label-out">
                                            <span>Out of stock</span>
                                        </div><!-- End .product-label -->
                                    @endif
                                    <a href="{{ route('user.product.view',$product->id) }}">
                                        @foreach ($product->images as $image)
                                            @if ($image->primary == 1)
                                                <img style="width: 50%; margin-left: auto; margin-right: auto"
                                                    src="{{ asset($image->image) }}" alt="Product image"
                                                    class="product-image">
                                            @endif
                                        @endforeach
                                    </a>

                                    <div class="product-action">
                                        {{-- formmmmmmmmmmmm --}}
                                        {{-- <a href=" @if(Auth::check()){{ route('user.carts.store')}}@else{{ route('login') }}@endif"class="btn-product btn-cart"><span>add to cart</span></a> --}}
                                        @if(Auth :: check())
                                            <form action="{{ route('user.carts.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="quantity" value="1">
                                                <button type="submit" class="btn-product btn-cart"><span>add to cart</span></button>
                                            </form>
                                        @else
                                            <a href="{{ route('login') }}" class="btn-product btn-cart"><span>add to cart</span></a>
                                        @endif
                                        <a href="{{ route('user.product.view',$product->id) }}" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">
                                            @foreach ($subcategories as $subcategory)
                                                @if ($subcategory->id == $product->subcategory_id)
                                                    <span>{{ $subcategory->name }}</span>
                                                @endif
                                            @endforeach
                                        </a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="{{ route('user.product.view',$product->id) }}">{{ $product->name }}</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">{{ round($product->price, 2) }}$</span>
                                        <span
                                            class="old-price{{ $product->price }}</span>
                            </div><!-- End .product-price -->
                            <div class="
                                            product-size">
                                            <a href="#" class="disabled" title="Small">S</a>
                                            <a href="#" title="Medium">M</a>
                                            <a href="#" class="active" title="Large">L</a>
                                            <a href="#" title="Extra Large">XL</a>
                                    </div><!-- End .product-size -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-thumbs">
                                        @forelse($product->images as $image)
                                            @if ($image->primary == 0)
                                                <a href="{{ asset($image->image) }}" class="product-nav-item">
                                                    <img src="{{ asset($image->image) }}" alt="Product image">
                                                </a>
                                            @endif
                                        @empty
                                        @endforelse

                                        {{-- <a href="#" class="active">
                                    <img src="assets/images/products/elements/product-1-thumb.jpg" alt="product desc">
                                </a>
                                <a href="#">
                                    <img src="assets/images/products/elements/product-1-2-thumb.jpg" alt="product desc">
                                </a>

                                <a href="#">
                                    <img src="assets/images/products/elements/product-1-3-thumb.jpg" alt="product desc">
                                </a> --}}
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-lg-4 -->
                    @endforeach
                    {{-- <div class="col-6 col-md-4 col-lg-4">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/products/elements/product-2.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Men</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Vestibulum auctor</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $120.00
                            </div><!-- End .product-price -->
                            <div class="product-size">
                                <a href="#" class="disabled" title="Small">S</a>
                                <a href="#" title="Medium">M</a>
                                <a href="#" class="disabled" title="Large">L</a>
                                <a href="#" title="Extra Large">XL</a>
                            </div><!-- End .product-size -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-lg-4 -->

                <div class="col-6 col-md-4 product-1 col-lg-4">
                    <div class="product text-center">
                        <figure class="product-media">
                            <span class="product-label label-out">Out of Stock</span>
                            <a href="product.html">
                                <img src="assets/images/products/elements/product-4.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Accessories</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Nunc dignissim risus</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="out-price">$32.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 11 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-lg-4 --> --}}
                </div><!-- End .row -->

                <hr class="mt-1 mb-5">
</main>
<footer class="footer">
    <div class="cta cta-horizontal cta-horizontal-box bg-dark bg-image"
        style="background-image: url('assets/images/demos/demo-14/bg-1.jpg');">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-8 offset-xl-2">
                    <div class="row align-items-center">
                        <div class="col-lg-5 cta-txt">
                            <h3 class="cta-title text-primary">Join Our Newsletter</h3><!-- End .cta-title -->
                            <p class="cta-desc text-light">Subcribe to get information about products and
                                coupons</p><!-- End .cta-desc -->
                        </div><!-- End .col-lg-5 -->

                        <div class="col-lg-7">
                            <form action="#">
                                <div class="input-group">
                                    <input type="email" class="form-control"
                                        placeholder="Enter your Email Address" aria-label="Email Adress"
                                        required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">Subscribe</button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                        </div><!-- End .col-lg-7 -->
                    </div><!-- End .row -->
                </div><!-- End .col-xl-8 offset-2 -->
            </div><!-- End .row -->
        </div><!-- End .container-fluid -->
    </div><!-- End .cta -->
    <div class="footer-middle border-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="widget widget-about">
                        <img src="{{ asset('assets/images/Capture.PNG') }}" class="footer-logo"
                            alt="Footer Logo" width="200" height="70">
                        <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate
                            magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan
                            porttitor, facilisis luctus, metus. </p>

                        <div class="widget-about-info">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <span class="widget-about-title">Got Question? Call us 24/7</span>
                                    <a href="tel:123456789">+0123 456 789</a>
                                </div><!-- End .col-sm-6 -->
                                <div class="col-sm-6 col-md-8">
                                    <span class="widget-about-title">Payment Method</span>
                                    <figure class="footer-payments">
                                        <img src="assets/images/payments.png" alt="Payment methods" width="272"
                                            height="20">
                                    </figure><!-- End .footer-payments -->
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .widget-about-info -->
                    </div><!-- End .widget about-widget -->
                </div><!-- End .col-sm-12 col-lg-4 -->

                <div class="col-sm-4 col-lg-2">
                    <div class="widget">
                        <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="about.html">About Molla</a></li>
                            <li><a href="#">How to shop on Molla</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="login.html">Log in</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-4 col-lg-2 -->

                <div class="col-sm-4 col-lg-2">
                    <div class="widget">
                        <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back guarantee!</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-4 col-lg-2 -->

                <div class="col-sm-4 col-lg-2">
                    <div class="widget">
                        <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="#">Sign In</a></li>
                            <li><a href="cart.html">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-4 col-lg-2 -->

                <div class="col-sm-4 col-lg-2">
                    <div class="widget widget-newsletter">
                        <h4 class="widget-title">Sign Up to Newsletter</h4><!-- End .widget-title -->

                        <p>Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan.</p>

                        <form action="#">
                            <div class="input-group">
                                <input type="email" class="form-control"
                                    placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                <div class="input-group-append">
                                    <button class="btn btn-dark" type="submit"><i
                                            class="icon-long-arrow-right"></i></button>
                                </div><!-- .End .input-group-append -->
                            </div><!-- .End .input-group -->
                        </form>
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-4 col-lg-2 -->
            </div><!-- End .row -->
        </div><!-- End .container-fluid -->
    </div><!-- End .footer-middle -->

    <div class="footer-bottom">
        <div class="container-fluid">
            <p class="footer-copyright">Copyright © 2019 Molla Store. All Rights Reserved.</p>
            <!-- End .footer-copyright -->
            <div class="social-icons social-icons-color">
                <span class="social-label">Social Media</span>
                <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i
                        class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i
                        class="icon-twitter"></i></a>
                <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i
                        class="icon-instagram"></i></a>
                <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i
                        class="icon-youtube"></i></a>
                <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i
                        class="icon-pinterest"></i></a>
            </div><!-- End .soial-icons -->
        </div><!-- End .container-fluid -->
    </div><!-- End .footer-bottom -->
</footer><!-- End .footer -->
</div><!-- End .page-->
    <!-- End .header -->
 <!-- Plugins JS File -->
 <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
 <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('assets/js/jquery.hoverIntent.min.js') }}"></script>
 <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
 <script src="{{ asset('assets/js/superfish.min.js') }}"></script>
 <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('assets/js/bootstrap-input-spinner.js') }}"></script>
 {{-- <script src="assets/js/jquery.magnific-popup.min.js"></script> --}}
 <script src="{{ asset('assets/js/jquery.plugin.min.js') }}"></script>
 <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
 <!-- Main JS File -->
 <script src="{{ asset('assets/js/main.js') }}"></script>
 <script src="{{ asset('assets/js/demos/demo-14.js') }}"></script>
 @toastr_js
 @toastr_render

</body>
</html>






















    {{-- <footer class="footer">
        <div class="cta cta-horizontal cta-horizontal-box bg-dark bg-image"
            style="background-image: url('assets/images/demos/demo-14/bg-1.jpg');">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="row align-items-center">
                            <div class="col-lg-5 cta-txt">
                                <h3 class="cta-title text-primary">Join Our Newsletter</h3><!-- End .cta-title -->
                                <p class="cta-desc text-light">Subcribe to get information about products and
                                    coupons</p><!-- End .cta-desc -->
                            </div><!-- End .col-lg-5 -->

                            <div class="col-lg-7">
                                <form action="#">
                                    <div class="input-group">
                                        <input type="email" class="form-control"
                                            placeholder="Enter your Email Address" aria-label="Email Adress"
                                            required>
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">Subscribe</button>
                                        </div><!-- .End .input-group-append -->
                                    </div><!-- .End .input-group -->
                                </form>
                            </div><!-- End .col-lg-7 -->
                        </div><!-- End .row -->
                    </div><!-- End .col-xl-8 offset-2 -->
                </div><!-- End .row -->
            </div><!-- End .container-fluid -->
        </div><!-- End .cta -->
        <div class="footer-middle border-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-lg-4">
                        <div class="widget widget-about">
                            <img src="assets/images/demos/demo-14/logo-footer.png" class="footer-logo"
                                alt="Footer Logo" width="105" height="25">
                            <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate
                                magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan
                                porttitor, facilisis luctus, metus. </p>

                            <div class="widget-about-info">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <span class="widget-about-title">Got Question? Call us 24/7</span>
                                        <a href="tel:123456789">+0123 456 789</a>
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6 col-md-8">
                                        <span class="widget-about-title">Payment Method</span>
                                        <figure class="footer-payments">
                                            <img src="assets/images/payments.png" alt="Payment methods" width="272"
                                                height="20">
                                        </figure><!-- End .footer-payments -->
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .widget-about-info -->
                        </div><!-- End .widget about-widget -->
                    </div><!-- End .col-sm-12 col-lg-4 -->

                    <div class="col-sm-4 col-lg-2">
                        <div class="widget">
                            <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="about.html">About Molla</a></li>
                                <li><a href="#">How to shop on Molla</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="login.html">Log in</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-4 col-lg-2 -->

                    <div class="col-sm-4 col-lg-2">
                        <div class="widget">
                            <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Money-back guarantee!</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Terms and conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-4 col-lg-2 -->

                    <div class="col-sm-4 col-lg-2">
                        <div class="widget">
                            <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="#">Sign In</a></li>
                                <li><a href="cart.html">View Cart</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-4 col-lg-2 -->

                    <div class="col-sm-4 col-lg-2">
                        <div class="widget widget-newsletter">
                            <h4 class="widget-title">Sign Up to Newsletter</h4><!-- End .widget-title -->

                            <p>Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan.</p>

                            <form action="#">
                                <div class="input-group">
                                    <input type="email" class="form-control"
                                        placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-dark" type="submit"><i
                                                class="icon-long-arrow-right"></i></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-4 col-lg-2 -->
                </div><!-- End .row -->
            </div><!-- End .container-fluid -->
        </div><!-- End .footer-middle -->

        <div class="footer-bottom">
            <div class="container-fluid">
                <p class="footer-copyright">Copyright © 2019 Molla Store. All Rights Reserved.</p>
                <!-- End .footer-copyright -->
                <div class="social-icons social-icons-color">
                    <span class="social-label">Social Media</span>
                    <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i
                            class="icon-facebook-f"></i></a>
                    <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i
                            class="icon-twitter"></i></a>
                    <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i
                            class="icon-instagram"></i></a>
                    <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i
                            class="icon-youtube"></i></a>
                    <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i
                            class="icon-pinterest"></i></a>
                </div><!-- End .soial-icons -->
            </div><!-- End .container-fluid -->
        </div><!-- End .footer-bottom -->
    </footer>< --}}

     @toastr_render
     @toastr_js
