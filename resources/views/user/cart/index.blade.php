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
    
       
    </header>
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="cart">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <table class="table table-cart table-mobile">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($cartProductsWithImage as $product)
                                    <tr>
                                        <td class="product-col">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="#">
                                                        <img src="{{ asset($product->image) }}" alt="Product image">
                                                    </a>
                                                </figure>

                                                <h3 class="product-title">
                                                    <a >{{ $product->name }}</a>
                                                </h3><!-- End .product-title -->
                                            </div><!-- End .product -->
                                        </td>
                                        <td class="price-col">{{ $product->price }}</td>
                                        <td class="quantity-col">
                                            <div class="cart-product-quantity">
                                                {{$product->cart_quantity }}
                                            </div><!-- End .cart-product-quantity -->
                                        </td>
                                        <td class="remove-col">
                                            <form action="{{ route('user.carts.destroy', $product->id) }}"method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-remove"
                                                    title="Remove Product"><i
                                                        class="icon-close"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <th>Total Price</th>
                                        <th>{{ $totalPrice }}$</th>
                                    </tr>  
                                    {{-- <tr>
                                        <td class="product-col">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="#">
                                                        <img src="assets/images/products/table/product-2.jpg" alt="Product image">
                                                    </a>
                                                </figure>

                                                <h3 class="product-title">
                                                    <a href="#">Blue utility pinafore denim dress</a>
                                                </h3><!-- End .product-title -->
                                            </div><!-- End .product -->
                                        </td>
                                        <td class="price-col">$76.00</td>
                                        <td class="quantity-col">
                                            <div class="cart-product-quantity">
                                                <input type="number" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                            </div><!-- End .cart-product-quantity -->                                 
                                        </td>
                                        <td class="total-col">$76.00</td>
                                        <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                                    </tr> --}}
                                </tbody>
                            </table><!-- End .table table-wishlist -->

                            <div class="cart-bottom">
                                <div class="cart-discount">
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control" required placeholder="coupon code">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
                                            </div><!-- .End .input-group-append -->
                                        </div><!-- End .input-group -->
                                    </form>
                                </div><!-- End .cart-discount -->

                                <a href="#" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i class="icon-refresh"></i></a>
                            </div><!-- End .cart-bottom -->
                        </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-3">
                            <div class="summary summary-cart">
                                <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                                <table class="table table-summary">
                                    <tbody>
                                        <tr class="summary-subtotal">
                                            <td>Subtotal:</td>
                                            <td>$160.00</td>
                                        </tr><!-- End .summary-subtotal -->
                                        <tr class="summary-shipping">
                                            <td>Shipping:</td>
                                            <td>&nbsp;</td>
                                        </tr>

                                        <tr class="summary-shipping-row">
                                            <td>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
                                                    <label class="custom-control-label" for="free-shipping">Free Shipping</label>
                                                </div><!-- End .custom-control -->
                                            </td>
                                            <td>$0.00</td>
                                        </tr><!-- End .summary-shipping-row -->

                                        <tr class="summary-shipping-row">
                                            <td>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="standart-shipping" name="shipping" class="custom-control-input">
                                                    <label class="custom-control-label" for="standart-shipping">Standart:</label>
                                                </div><!-- End .custom-control -->
                                            </td>
                                            <td>$10.00</td>
                                        </tr><!-- End .summary-shipping-row -->

                                        <tr class="summary-shipping-row">
                                            <td>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="express-shipping" name="shipping" class="custom-control-input">
                                                    <label class="custom-control-label" for="express-shipping">Express:</label>
                                                </div><!-- End .custom-control -->
                                            </td>
                                            <td>$20.00</td>
                                        </tr><!-- End .summary-shipping-row -->

                                        <tr class="summary-shipping-estimate">
                                            <td>Estimate for Your Country<br> <a href="dashboard.html">Change address</a></td>
                                            <td>&nbsp;</td>
                                        </tr><!-- End .summary-shipping-estimate -->

                                        <tr class="summary-total">
                                            <td>Total:</td>
                                            <td>$160.00</td>
                                        </tr><!-- End .summary-total -->
                                    </tbody>
                                </table><!-- End .table table-summary -->

                                <a href="checkout.html" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
                            </div><!-- End .summary -->

                            <a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cart -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

    <footer class="footer">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="widget widget-about">
                            <img src="{{ asset('assets/images/Capture.PNG') }}" class="footer-logo" alt="Footer Logo" width="105" height="25">
                            <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>

                            <div class="social-icons">
                                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>
                            </div><!-- End .soial-icons -->
                        </div><!-- End .widget about-widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="about.html">About Go Shop</a></li>
                                <li><a href="#">How to shop on Go Shop</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
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
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="#">Sign In</a></li>
                                <li><a href="cart.html">View Cart</a></li>
                                <li><a href="#">Help</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .footer-middle -->

        <div class="footer-bottom">
            <div class="container">
                <p class="footer-copyright">Copyright © 2019 Molla Store. All Rights Reserved.</p><!-- End .footer-copyright -->
                <figure class="footer-payments">
                    <img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
                </figure><!-- End .footer-payments -->
            </div><!-- End .container -->
        </div><!-- End .footer-bottom -->
    </footer><!-- End .footer -->
</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>
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
