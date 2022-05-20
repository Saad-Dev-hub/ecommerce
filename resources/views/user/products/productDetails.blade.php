{{-- {{ dd($product) }} --}}
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

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/plugins/nouislider/nouislider.css') }}">
</head>


<body>
    <header class="header header-14">
        <div class="header-top">
            <div class="container-fluid">
                <div class="header-left">
                    <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
                </div><!-- End .header-left -->

                <div class="header-right">

                    <ul class="top-menu">
                        <li>
                            <a href="#">Links</a>
                            <ul class="menus">

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


    </header>><!-- End .header -->

    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container d-flex align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>

                <nav class="product-pager ml-auto" aria-label="Product">
                    <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous" tabindex="-1">
                        <i class="icon-angle-left"></i>
                        <span>Prev</span>
                    </a>

                    <a class="product-pager-link product-pager-next" href="#" aria-label="Next" tabindex="-1">
                        <span>Next</span>
                        <i class="icon-angle-right"></i>
                    </a>
                </nav><!-- End .pager-nav -->
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="product-details-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery product-gallery-vertical">
                                <div class="row">
                                    <figure class="product-main-image">
                                        @foreach($images as $image)
                                        @if( $image->primary == 1)
                                        <img id="product-zoom" src="{{ asset($image->image) }}"
                                        data-zoom-image="{{ asset($image->image) }}" alt="product image">

                                        <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                            <i class="icon-arrows"></i>
                                        </a>
                                        @endif
                                        @endforeach
                                    </figure><!-- End .product-main-image -->

                                    <div id="product-zoom-gallery" class="product-image-gallery">
                                        {{-- Remove Secondary Images --}}
                                        {{-- @foreach($images as $image)
                                        @if( $image->primary == 1)
                                        <a class="product-gallery-item active" href="#" data-image="{{ asset($image->image) }}" data-zoom-image="{{ asset($image->image) }}">
                                            <img src="{{ asset($image->image) }}" alt="Main Image">
                                        </a>
                                        @else
                                        <a class="product-gallery-item" href="#" data-image="{{ asset($image->image) }}" data-zoom-image="{{ asset($image->image) }}">
                                            <img src=" {{ asset($image->image) }}" alt="Other Image">
                                        </a>
                                        @endif
                                        @endforeach --}}
                                    </div><!-- End .product-image-gallery -->
                                </div><!-- End .row -->
                            </div><!-- End .product-gallery -->
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                            <div class="product-details">
                                <h1 class="product-title">
                                 {{ $prod->name }}
                                </h1><!-- End .product-title -->

                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews )</a>
                                </div><!-- End .rating-container -->

                                <div class="product-price">
                                    <span class="price">${{ $prod->price }}</span>
                                </div><!-- End .product-price -->

                                <div class="product-content">
                                    <p>
                                        {{ $prod->description }}
                                    </p>
                                </div><!-- End .product-content -->


                                <form action="{{ route('user.carts.store') }}" method="POST">
                                    @csrf
                                <div class="details-filter-row details-row-size">
                                    <label for="qty">Qty:</label>
                                    <div class="product-details-quantity">
                                        <input type="hidden" name="product_id" value="{{ $prod->id }}">
                                        <input type="number" id="qty" name="quantity" class="form-control" value="1"  step="1" data-decimals="0" required>
                                    </div><!-- End .product-details-quantity -->
                                </div><!-- End .details-filter-row -->
                                <div class="product-details-action">
                                    <button type="submit" class="btn-product btn-cart">Add to Cart</button>
                                </div>
                                </form>
                               <!-- End .product-details-action -->

                                <div class="product-details-footer">
                                    <div class="product-cat">
                                        <span>Category:</span>
                                        <a href="#">{{ $categoryName }}</a>

                                    </div><!-- End .product-cat -->


                                </div><!-- End .product-details-footer -->
                            </div><!-- End .product-details -->
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .product-details-top -->

                {{-- <div class="product-details-tab">
                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping & Returns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (2)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                            <div class="product-desc-content">
                                <h3>Product Information</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                                <ul>
                                    <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>
                                    <li>Vivamus finibus vel mauris ut vehicula.</li>
                                    <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>
                                </ul>

                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                            <div class="product-desc-content">
                                <h3>Information</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>

                                <h3>Fabric & care</h3>
                                <ul>
                                    <li>Faux suede fabric</li>
                                    <li>Gold tone metal hoop handles.</li>
                                    <li>RI branding</li>
                                    <li>Snake print trim interior </li>
                                    <li>Adjustable cross body strap</li>
                                    <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>
                                </ul>

                                <h3>Size</h3>
                                <p>one size</p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                            <div class="product-desc-content">
                                <h3>Delivery & returns</h3>
                                <p>We deliver to over 100 countries around the world. For full details of the delivery options we offer, please view our <a href="#">Delivery information</a><br>
                                We hope you’ll love every purchase, but if you ever need to return an item you can do so within a month of receipt. For full details of how to make a return, please view our <a href="#">Returns information</a></p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                            <div class="reviews">
                                <h3>Reviews (2)</h3>
                                <div class="review">
                                    <div class="row no-gutters">
                                        <div class="col-auto">
                                            <h4><a href="#">Samanta J.</a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->
                                            <span class="review-date">6 days ago</span>
                                        </div><!-- End .col -->
                                        <div class="col">
                                            <h4>Good, perfect size</h4>

                                            <div class="review-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum dolores assumenda asperiores facilis porro reprehenderit animi culpa atque blanditiis commodi perspiciatis doloremque, possimus, explicabo, autem fugit beatae quae voluptas!</p>
                                            </div><!-- End .review-content -->

                                            <div class="review-action">
                                                <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                                <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                            </div><!-- End .review-action -->
                                        </div><!-- End .col-auto -->
                                    </div><!-- End .row -->
                                </div><!-- End .review -->

                                <div class="review">
                                    <div class="row no-gutters">
                                        <div class="col-auto">
                                            <h4><a href="#">John Doe</a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->
                                            <span class="review-date">5 days ago</span>
                                        </div><!-- End .col -->
                                        <div class="col">
                                            <h4>Very good</h4>

                                            <div class="review-content">
                                                <p>Sed, molestias, tempore? Ex dolor esse iure hic veniam laborum blanditiis laudantium iste amet. Cum non voluptate eos enim, ab cumque nam, modi, quas iure illum repellendus, blanditiis perspiciatis beatae!</p>
                                            </div><!-- End .review-content -->

                                            <div class="review-action">
                                                <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                                                <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                            </div><!-- End .review-action -->
                                        </div><!-- End .col-auto -->
                                    </div><!-- End .row -->
                                </div><!-- End .review -->
                            </div><!-- End .reviews -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-details-tab --> --}}

                <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->

                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":1
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":4,
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
                    @foreach( $youMayAlsoLike as $product )
                    <div class="product product-7 text-center">
                        <figure class="product-media" >
                            <span class="product-label label-new">New</span>
                            @foreach( $product->images as $image )
                            <a href="{{ route('user.product.view',$product->id) }}">
                              @if( $image->primary == 1)
                                <img src="{{ asset($image->image) }}" alt="Product image" class="product-image">
                                @endif
                            </a>
                            @endforeach

                            <div class="product-action-vertical">
                                <a href="{{ route('user.product.view',$product->id) }}" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>


                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="{{ route('user.carts.store') }}" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">{{ $categoryName }}</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">{{ $product->name }}</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                {{ $product->price }}
                            </div><!-- End .product-price -->

                            <div class="product-nav product-nav-thumbs">
                                @foreach( $product->images as $image )
                                @if( $image->primary == 1)
                                <a href="#" class="active">
                                    <img src="{{ asset($image->image) }}" alt="product desc">
                                </a>
                                @else
                                <a href="#">
                                    <img src="{{ asset($image->image) }}" alt="product desc">
                                </a>
                                @endif
                                @endforeach
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                    @endforeach


                    {{-- <div class="product product-7 text-center">
                        <figure class="product-media">
                            <span class="product-label label-out">Out of Stock</span>
                            <a href="product.html">
                                <img src="assets/images/products/product-6.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Jackets</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Khaki utility boiler jumpsuit</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="out-price">$120.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <span class="product-label label-top">Top</span>
                            <a href="product.html">
                                <img src="assets/images/products/product-11.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Shoes</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Light brown studded Wide fit wedges</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $110.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 1 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-thumbs">
                                <a href="#" class="active">
                                    <img src="assets/images/products/product-11-thumb.jpg" alt="product desc">
                                </a>
                                <a href="#">
                                    <img src="assets/images/products/product-11-2-thumb.jpg" alt="product desc">
                                </a>

                                <a href="#">
                                    <img src="assets/images/products/product-11-3-thumb.jpg" alt="product desc">
                                </a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/products/product-10.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Jumpers</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Yellow button front tea top</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $56.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 0 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/products/product-7.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Jeans</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Blue utility pinafore denim dress</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $76.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product --> --}}
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

    <footer class="footer">
</body>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.hoverIntent.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/superfish.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-input-spinner.js') }}"></script>
<script src="{{ asset('assets/js/jquery.elevateZoom.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-input-spinner.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>


<!-- molla/product.html  22 Nov 2019 09:55:05 GMT -->
</html>
