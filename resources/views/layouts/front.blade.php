<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>{!! $title !!}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="/assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="i/assets/mg/apple-touch-icon-144x144-precomposed.png">
	
    <!-- GOOGLE WEB FONT -->
   	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" as="fetch" crossorigin="anonymous">
    <script>
    !function(e,n,t){"use strict";var o="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap",r="__3perf_googleFonts_c2536";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage);
    </script>


    <!-- BASE CSS -->
    <link href="/assets/css/bootstrap.custom.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/toastr.min.css" rel="stylesheet">

    @yield('page-styles')
</head>

<body>
	
	<div id="page">
        <header class="version_1">
            <div class="layer"></div>
            <div class="main_header">
                <div class="container">
                    <div class="row small-gutters">
                        <div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
                            <div id="logo">
                                <a href="/"><img src="/assets/img/logo.svg" alt="" width="100" height="35"></a>
                            </div>
                        </div>
                        <nav class="col-xl-6 col-lg-7">
                            <a class="open_close" href="javascript:void(0);">
                                <div class="hamburger hamburger--spin">
                                    <div class="hamburger-box">
                                        <div class="hamburger-inner"></div>
                                    </div>
                                </div>
                            </a>
                            <!-- Mobile menu button -->
                            <div class="main-menu">
                                <div id="header_menu">
                                    <a href="/"><img src="/assets/img/logo_black.svg" alt="" width="100" height="35"></a>
                                    <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                                </div>
                                <ul>
                                    <li class="submenu">
                                        <a href="javascript:void(0);" class="show-submenu">Home</a>
                                        <ul>
                                            <li><a href="index.html">Slider</a></li>
                                            <li><a href="index-2.html">Video Background</a></li>
                                            <li><a href="index-3.html">Vertical Slider</a></li>
                                            <li><a href="index-4.html">GDPR Cookie Bar</a></li>
                                        </ul>
                                    </li>
                                    <li class="megamenu submenu">
                                        <a href="javascript:void(0);" class="show-submenu-mega">Pages</a>
                                        <div class="menu-wrapper">
                                            <div class="row small-gutters">
                                                <div class="col-lg-3">
                                                    <h3>Listing grid</h3>
                                                    <ul>
                                                        <li><a href="listing-grid-1-full.html">Grid Full Width</a></li>
                                                        <li><a href="listing-grid-2-full.html">Grid Full Width 2</a></li>
                                                        <li><a href="listing-grid-3.html">Grid Boxed</a></li>
                                                        <li><a href="listing-grid-4-sidebar-left.html">Grid Sidebar Left</a></li>
                                                        <li><a href="listing-grid-5-sidebar-right.html">Grid Sidebar Right</a></li>
                                                        <li><a href="listing-grid-6-sidebar-left.html">Grid Sidebar Left 2</a></li>
                                                        <li><a href="listing-grid-7-sidebar-right.html">Grid Sidebar Right 2</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <h3>Listing row &amp; Product</h3>
                                                    <ul>
                                                        <li><a href="listing-row-1-sidebar-left.html">Row Sidebar Left</a></li>
                                                        <li><a href="listing-row-2-sidebar-right.html">Row Sidebar Right</a></li>
                                                        <li><a href="listing-row-3-sidebar-left.html">Row Sidebar Left 2</a></li>
                                                        <li><a href="listing-row-4-sidebar-extended.html">Row Sidebar Extended</a></li>
                                                        <li><a href="product-detail-1.html">Product Large Image</a></li>
                                                        <li><a href="product-detail-2.html">Product Carousel</a></li>
                                                        <li><a href="product-detail-3.html">Product Sticky Info</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <h3>Other pages</h3>
                                                    <ul>
                                                        <li><a href="cart.html">Cart Page</a></li>
                                                        <li><a href="checkout.html">Check Out Page</a></li>
                                                        <li><a href="confirm.html">Confirm Purchase Page</a></li>
                                                        <li><a href="account.html">Create Account Page</a></li>
                                                        <li><a href="track-order.html">Track Order</a></li>
                                                        <li><a href="help.html">Help Page</a></li>
                                                        <li><a href="help-2.html">Help Page 2</a></li>
                                                        <li><a href="leave-review.html">Leave a Review</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                                    <div class="banner_menu">
                                                        <a href="#0">
                                                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/assets/img/banner_menu.jpg" width="400" height="550" alt="" class="img-fluid lazy">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                        <!-- /menu-wrapper -->
                                    </li>
                                    <li class="submenu">
                                        <a href="javascript:void(0);" class="show-submenu">Extra Pages</a>
                                        <ul>
                                            <li><a href="header-2.html">Header Style 2</a></li>
                                            <li><a href="header-3.html">Header Style 3</a></li>
                                            <li><a href="header-4.html">Header Style 4</a></li>
                                            <li><a href="header-5.html">Header Style 5</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="sign-in-modal.html">Sign In Modal</a></li>
                                            <li><a href="contacts.html">Contact Us</a></li>
                                            <li><a href="about.html">About 1</a></li>
                                            <li><a href="about-2.html">About 2</a></li>
                                            <li><a href="modal-advertise.html">Modal Advertise</a></li>
                                            <li><a href="modal-newsletter.html">Modal Newsletter</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('shop') }}">Shop</a></li>
                                    <li><a href="{{ route('shop') }}">Blog</a></li>
                                </ul>
                            </div>
                            <!--/main-menu -->
                        </nav>
                        <div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-right">
                            <a class="phone_top" href="tel://9438843343"><strong><span>Need Help?</span>+94 423-23-221</strong></a>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <!-- /main_header -->

            <div class="main_nav Sticky">
                <div class="container">
                    <div class="row small-gutters">
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <nav class="categories">
                                <ul class="clearfix">
                                    <li>
                                        <span>
                                            <a href="#">
                                                <span class="hamburger hamburger--spin">
                                                    <span class="hamburger-box">
                                                        <span class="hamburger-inner"></span>
                                                    </span>
                                                </span>
                                                Categories
                                            </a>
                                        </span>
                                        <div id="menu">
                                            <ul>
                                                <li><span><a href="#0">Collections</a></span>
                                                    <ul>
                                                        <li><a href="listing-grid-1-full.html">Trending</a></li>
                                                        <li><a href="listing-grid-2-full.html">Life style</a></li>
                                                        <li><a href="listing-grid-3.html">Running</a></li>
                                                        <li><a href="listing-grid-4-sidebar-left.html">Training</a></li>
                                                        <li><a href="listing-grid-5-sidebar-right.html">View all Collections</a></li>
                                                    </ul>
                                                </li>
                                                <li><span><a href="#">Men</a></span>
                                                    <ul>
                                                        <li><a href="listing-grid-6-sidebar-left.html">Offers</a></li>
                                                        <li><a href="listing-grid-7-sidebar-right.html">Shoes</a></li>
                                                        <li><a href="listing-row-1-sidebar-left.html">Clothing</a></li>
                                                        <li><a href="listing-row-3-sidebar-left.html">Accessories</a></li>
                                                        <li><a href="listing-row-4-sidebar-extended.html">Equipment</a></li>
                                                    </ul>
                                                </li>
                                                <li><span><a href="#">Women</a></span>
                                                    <ul>
                                                        <li><a href="listing-grid-1-full.html">Best Sellers</a></li>
                                                        <li><a href="listing-grid-2-full.html">Clothing</a></li>
                                                        <li><a href="listing-grid-3.html">Accessories</a></li>
                                                        <li><a href="listing-grid-4-sidebar-left.html">Shoes</a></li>
                                                    </ul>
                                                </li>
                                                <li><span><a href="#">Boys</a></span>
                                                    <ul>
                                                        <li><a href="listing-grid-6-sidebar-left.html">Easy On Shoes</a></li>
                                                        <li><a href="listing-grid-7-sidebar-right.html">Clothing</a></li>
                                                        <li><a href="listing-row-3-sidebar-left.html">Must Have</a></li>
                                                        <li><a href="listing-row-4-sidebar-extended.html">All Boys</a></li>
                                                    </ul>
                                                </li>
                                                <li><span><a href="#">Girls</a></span>
                                                    <ul>
                                                        <li><a href="listing-grid-1-full.html">New Releases</a></li>
                                                        <li><a href="listing-grid-2-full.html">Clothing</a></li>
                                                        <li><a href="listing-grid-3.html">Sale</a></li>
                                                        <li><a href="listing-grid-4-sidebar-left.html">Best Sellers</a></li>
                                                    </ul>
                                                </li>
                                                <li><span><a href="#">Customize</a></span>
                                                    <ul>
                                                        <li><a href="listing-row-1-sidebar-left.html">For Men</a></li>
                                                        <li><a href="listing-row-2-sidebar-right.html">For Women</a></li>
                                                        <li><a href="listing-row-4-sidebar-extended.html">For Boys</a></li>
                                                        <li><a href="listing-grid-1-full.html">For Girls</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
                            <div class="custom-search-input">
                                <input type="text" placeholder="Search over 10.000 products">
                                <button type="submit"><i class="header-icon_search_custom"></i></button>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-2 col-md-3">
                            <ul class="top_tools">
                                <li>
                                    <div class="dropdown dropdown-cart">
                                        <a href="cart.html" class="cart_bt"><strong>{{ Cart::content()->count() }}</strong></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                @foreach(Cart::content() as $product)

                                                <li>
                                                    <a href="{{ route('product.single', ['product' => $product->model->slug]) }}">
                                                        <figure>
                                                            <img 
                                                            src="/assets/img/products/product_placeholder_square_small.jpg" 
                                                            data-src="{{ $product->model->image }}" 
                                                            alt="" width="50" height="50" class="lazy">
                                                        </figure>

                                                        <strong>
                                                            <span>{{ $product->name }}</span>
                                                            ${{ $product->price }}.00
                                                            x
                                                            {{$product->qty}}
                                                            =
                                                            {{ $product->total() }}
                                                        </strong>
                                                        
                                                    </a>
                                                    <a href="{{ route('cart.delete', ['id' => $product->rowId]) }}" class="action"><i class="ti-trash"></i></a>
                                                </li>

                                                @endforeach
                                                
                                            </ul>
                                            <div class="total_drop">
                                                <div class="clearfix"><strong>Total</strong><span>${{ Cart::total() }}</span></div>
                                                <a href="{{ route('cart') }}" class="btn_1 outline">View Cart</a>
                                                <a href="{{ route('checkout') }}" class="btn_1">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /dropdown-cart-->
                                </li>
                                <li>
                                    <a href="#0" class="wishlist"><span>Wishlist</span></a>
                                </li>
                                <li>
                                    <div class="dropdown dropdown-access">
                                        <a href="account.html" class="access_link"><span>Account</span></a>
                                        <div class="dropdown-menu">
                                            @guest

                                            <a href="{{ route('login') }}" class="btn_1">Sign In</a>
                                            <hr class="m-2"/>
                                            <a href="{{ route('register') }}" class="btn_1">Sign Up</a>

                                            @else

                                            <a href="{{ route('account') }}" class="btn_1">Account</a>

                                            @endguest
                                            <ul>
                                                <li>
                                                    <a href="track-order.html"><i class="ti-truck"></i>Track your Order</a>
                                                </li>
                                                <li>
                                                    <a href="account.html"><i class="ti-package"></i>My Orders</a>
                                                </li>
                                                <li>
                                                    <a href="account.html"><i class="ti-user"></i>My Profile</a>
                                                </li>
                                                <li>
                                                    <a href="help.html"><i class="ti-help-alt"></i>Help and Faq</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /dropdown-access-->
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btn_search_mob"><span>Search</span></a>
                                </li>
                                <li>
                                    <a href="#menu" class="btn_cat_mob">
                                        <div class="hamburger hamburger--spin" id="hamburger">
                                            <div class="hamburger-box">
                                                <div class="hamburger-inner"></div>
                                            </div>
                                        </div>
                                        Categories
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <div class="search_mob_wp">
                    <input type="text" class="form-control" placeholder="Search over 10.000 products">
                    <input type="submit" class="btn_1 full-width" value="Search">
                </div>
                <!-- /search_mobile -->
            </div>
            <!-- /main_nav -->
        </header>
            
        @yield('page-content')
            
        <footer class="revealed">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <h3 data-target="#collapse_1">Quick Links</h3>
                        <div class="collapse dont-collapse-sm links" id="collapse_1">
                            <ul>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="help.html">Faq</a></li>
                                <li><a href="help.html">Help</a></li>
                                <li><a href="account.html">My account</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 data-target="#collapse_2">Categories</h3>
                        <div class="collapse dont-collapse-sm links" id="collapse_2">
                            <ul>
                                <li><a href="listing-grid-1-full.html">Clothes</a></li>
                                <li><a href="listing-grid-2-full.html">Electronics</a></li>
                                <li><a href="listing-grid-1-full.html">Furniture</a></li>
                                <li><a href="listing-grid-3.html">Glasses</a></li>
                                <li><a href="listing-grid-1-full.html">Shoes</a></li>
                                <li><a href="listing-grid-1-full.html">Watches</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                            <h3 data-target="#collapse_3">Contacts</h3>
                        <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                            <ul>
                                <li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
                                <li><i class="ti-headphone-alt"></i>+94 423-23-221</li>
                                <li><i class="ti-email"></i><a href="#0">info@allaia.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                            <h3 data-target="#collapse_4">Keep in touch</h3>
                        <div class="collapse dont-collapse-sm" id="collapse_4">
                            <div id="newsletter">
                                <div class="form-group">
                                    <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                    <button type="submit" id="submit-newsletter"><i class="ti-angle-double-right"></i></button>
                                </div>
                            </div>
                            <div class="follow_us">
                                <h5>Follow Us</h5>
                                <ul>
                                    <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/assets/img/twitter_icon.svg" alt="" class="lazy"></a></li>
                                    <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/assets/img/facebook_icon.svg" alt="" class="lazy"></a></li>
                                    <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/assets/img/instagram_icon.svg" alt="" class="lazy"></a></li>
                                    <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/assets/img/youtube_icon.svg" alt="" class="lazy"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <hr>
                <div class="row add_bottom_25">
                    <div class="col-lg-6">
                        <ul class="footer-selector clearfix">
                            <li>
                                <div class="styled-select lang-selector">
                                    <select>
                                        <option value="English" selected>English</option>
                                        <option value="French">French</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="Russian">Russian</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="styled-select currency-selector">
                                    <select>
                                        <option value="US Dollars" selected>US Dollars</option>
                                        <option value="Euro">Euro</option>
                                    </select>
                                </div>
                            </li>
                            <li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/assets/img/cards_all.svg" alt="" width="198" height="30" class="lazy"></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="additional_links">
                            <li><a href="#0">Terms and conditions</a></li>
                            <li><a href="#0">Privacy</a></li>
                            <li><span>© 2020 Allaia</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
	</div>
	
	<div id="toTop"></div>
	
    <script src="/assets/js/common_scripts.min.js"></script>
    <script src="/assets/js/toastr.min.js"></script>

    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @elseif(Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @elseif(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif
    </script>

    <script src="/assets/js/main.js"></script>
	
    @yield('page-scripts')


</body>
</html>