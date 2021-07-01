<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home-4 || Plantmore</title>
	<meta name="description" content="">
	<meta name="robots" content="noindex, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex, follow" />
	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!--All Css Here-->
    
    <!-- Bootstrap CSS-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<!-- Linearicon CSS-->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/linearicons.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">

	<!-- Animate CSS-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
	<!-- Owl Carousel CSS-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
	<!-- Slick CSS-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/slick.css">
	<!-- Meanmenu CSS-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/meanmenu.min.css">
	<!-- Easyzoom CSS-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/easyzoom.css">
	<!-- Venobox CSS-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/venobox.css">
	<!-- Jquery Ui CSS-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery-ui.css">
	<!-- Nice Select CSS-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/nice-select.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
	<!-- Modernizr Js -->
	<script src="<?=base_url()?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<div class="wrapper">
		<!--Header Area Start-->
		<header>
		    <div class="header-container">
                <!--Header Top Area Start-->
                <div class="header-top-area black-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-5">
                                <!--Header Top Left Start-->
                                <div class="header-top-left">
                                    <div class="header-top-language-currency">
                                        <div class="switcher">
                                            <div class="language">
                                                <span class="switcher-title">Language: </span>
                                                <div class="switcher-menu">
                                                    <ul>
                                                        <li><a href="#">English</a>
                                                            <ul class="switcher-dropdown">
                                                                <li><a href="#">German</a></li>
                                                                <li><a href="#">French</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="currency">
                                                <span class="switcher-title">Currency: </span>
                                                <div class="switcher-menu">
                                                    <ul>
                                                        <li><a href="#">$ USD</a>
                                                            <ul class="switcher-dropdown">
                                                                <li><a href="#">€ EUR</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Header Top Left End-->
                            </div>
                            <div class="col-lg-6 col-md-7">
                                <!--Header Top Right Start-->
                                <div class="header-top-right">
                                    <ul class="menu-top-menu text-md-right">
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="cart.html">Shopping cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login-register.html">Log In</a></li>
                                    </ul>
                                </div>
                                <!--Header Top Right End-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--Header Top Area End-->
                <!--Header Middle Area Start-->
                <div class="header-middle-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4">
                                <!--Header Logo Start-->
                                <div class="header-logo">
                                    <a href="index.html"><img src="<?=base_url()?>assets/img/logo/logo.png" alt=""></a>
                                </div>
                                <!--Header Logo End-->
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <!--Header Phone Start-->
                                <div class="header-phone">
                                    <div class="icon">
                                        <i class="fa fa-mobile"></i>
                                    </div>
                                    <p>Phone: <br>(+68) 123 456 7890</p>
                                </div>
                                <!--Header Phone End-->
                            </div>
                            <div class="col-xl-5 col-lg-3 col-md-10 order-md-4 order-lg-3">
                                <!--Header Search Area-->
                                <div class="header-search-area">
                                    <form action="#">
                                        <div class="form-input">
                                            <input name="search" id="search" placeholder="" value="Search..." onblur="if(this.value==''){this.value='Search...'}" onfocus="if(this.value=='Search...'){this.value=''}" type="text">
                                            <button type="submit" class="header-search-btn"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <!--Header Search Area-->
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 order-md-3 order-lg-4">
                                <div class="mini-cart">
                                    <a href="#">
                                        <span class="cart-icon">
                                           <span class="cart-quantity">2</span>
                                        </span>
                                        <span class="cart-title">Your cart <br><strong>$190.00</strong></span> 
                                    </a>
                                   <!--Cart Dropdown Start-->
                                  <div class="cart-dropdown">
                                      <ul>
                                          <li class="single-cart-item">
                                              <div class="cart-img">
                                                  <a href="single-product.html"><img src="<?=base_url()?>assets/img/cart/cart1.jpg" alt=""></a>
                                              </div>
                                              <div class="cart-content">
                                                  <h5 class="product-name"><a href="single-product.html">Odio tortor consequat</a></h5>
                                                  <span class="cart-price">1 × $90.00</span>
                                              </div>
                                              <div class="cart-remove">
                                                  <a title="Remove" href="#"><i class="fa fa-times"></i></a>
                                              </div>
                                          </li>
                                          <li class="single-cart-item">
                                              <div class="cart-img">
                                                  <a href="single-product.html"><img src="<?=base_url()?>assets/img/cart/cart2.jpg" alt=""></a>
                                              </div>
                                              <div class="cart-content">
                                                  <h5 class="product-name"><a href="single-product.html">Auctor sem</a></h5>
                                                  <span class="cart-price">1 × $100.00</span>
                                              </div>
                                              <div class="cart-remove">
                                                  <a title="Remove" href="#"><i class="fa fa-times"></i></a>
                                              </div>
                                          </li>
                                       </ul> 
                                      <p class="cart-subtotal"><strong>Subtotal:</strong> <span class="float-right">$190.00</span></p> 
                                      <p class="cart-btn">
                                          <a href="cart.html">View cart</a>
                                          <a href="checkout.html">Checkout</a>
                                      </p>
                                  </div>
                                   <!--Cart Dropdown End--> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Header Middle Area End-->
                <!--Header Bottom Area Start-->
                <div class="header-bottom-area header-sticky">
                    <div class="header-boxshadow">
                        <div class="container header-inner">
                            <div class="row">
                                <div class="col-12">
                                   <!--Logo Sticky Start-->
                                   <div class="logo-sticky">
                                     <a href="index.html"><img src="<?=base_url()?>assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                   <!--Logo Sticky End-->
                                   <!--Main Menu Area Start-->
                                    <div class="header-menu text-center">
                                        <nav>
                                            <ul class="main-menu">
                                                <li><a href="index-0.html">home</a>
                                                </li>
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog.html">Pages</a>
                                                <!--Dropdown Menu Start-->
                                                <ul class="dropdown">
                                                    <li><a href="single-product.html">Single Product</a></li>
                                                    <li><a href="single-product-variable.html">Single Product Variable</a></li>
                                                    <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-list.html">Shop List View</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                    <li><a href="cart.html">Shopping Cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="compare.html">Compare</a></li>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="login-register.html">Log In</a></li>
                                                </ul>
                                                <!--Dropdown Menu End-->
                                            </li>
                                                <li><a href="#">Features</a>
                                                    <!--Mega Menu Start-->
                                                    <ul class="mega-menu">
                                                        <li><a href="#" class="item-link">Pages</a>
                                                            <ul>
                                                                <li><a href="about.html">About Us</a></li>
                                                                <li><a href="contact-2.html">Contact Us 02</a></li>
                                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                                <li><a href="404.html">Error 404</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <!--Mega Menu End-->
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!--Main Menu Area End--> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12"> 
                                    <!--Mobile Menu Area Start-->
                                    <div class="mobile-menu d-lg-none"></div>
                                    <!--Mobile Menu Area End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Header Bottom Area End-->
		    </div>
		</header>
		<!--Header Area End--> 
        <!--Slider Area Start-->
        <div class="slider-area">
            <div class="hero-slider owl-carousel">
                <!--Single Slider Start-->
                <div class="single-slider" style="background-image: url(assets/img/slider/home1-slider1.jpg)">   
                    <div class="slider-progress"></div>
                    <div class="container">
                        <div class="hero-slider-content">
                            <h1>Perfect Plant <br> Sale In LookBook</h1>
                            <div class="slider-border"></div>
                            <p>Captain America: Civil War Christopher Markus and Stephen McFeely see the Hulk as the game over moment. </p>
                            <div class="slider-btn">
                                <a href="#">Shop Collection <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Single Slider End-->
                <!--Single Slider Start-->
                <div class="single-slider" style="background-image: url(assets/img/slider/home1-slider2.jpg)">   
                    <div class="slider-progress"></div>
                    <div class="container">
                        <div class="hero-slider-content">
                            <h1>2018 Plant Trend</h1>
                            <div class="slider-border"></div>
                            <p>Captain America: Civil War Christopher Markus and Stephen McFeely see the Hulk as the game over moment. </p>
                            <div class="slider-btn">
                                <a href="#">Shop Collection <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Single Slider End-->
            </div>
        </div>
        <!--Slider Area End-->        
        <!--Our History Area Start-->
        <div class="our-history-area mt-85">
            <div class="container">
                <div class="row">
                    <!--Section Title Start-->
                    <div class="col-12">
                        <div class="section-title text-center mb-35">
                            <h2>Our History</h2>
                            <span>A little story about us</span>
                        </div>
                    </div>
                    <!--Section Title End-->
                </div>
                <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                        <div class="history-area-content text-center">
                            <p><strong>Captain America: Civil War Christopher Markus and Stephen McFeely see the Hulk as the game over moment.</strong></p>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus. Phasellus eu rhoncus dolor, vitae scelerisque sapien</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Our History Area End-->              
        <!--Blog Area Start-->
        <div class="blog-area ml-50 mr-50 mt-105">
            <div class="container">
                <div class="row">
                    <!--Section Title Start-->
                    <div class="col-12">
                        <div class="section-title text-center mb-35">
                            <span>From The Blogs</span>
                            <h3>Our Latest Posts</h3>
                        </div>
                    </div>
                    <!--Section Title End-->
                </div>
                
                <div class="row">
                    <div class="blog-slider-active">
                        <div class="col-md-4">
                            <!--Single Blog Start-->
                            <div class="single-blog">
                                <div class="blog-img img-full">
                                    <a href="single-blog.html">
                                        <img src="<?=base_url()?>assets/img/blog/blog1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="post-date">01/12/2018</div>
                                    <h3 class="post-title"><a href="single-blog.html">Blog image post</a></h3>
                                    <p class="post-description">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
                                    <p class="post-author">
                                       <img src="<?=base_url()?>assets/img/icon/author.png" alt=""> <span>Posted by </span>
                                       <a href="#">admin </a>
                                    </p>
                                </div>
                            </div>
                            <!--Single Blog End-->
                        </div>
                        <div class="col-md-4">
                            <!--Single Blog Start-->
                            <div class="single-blog">
                                <div class="blog-img img-full">
                                    <a href="single-blog.html">
                                        <img src="<?=base_url()?>assets/img/blog/blog2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="post-date">01/12/2018</div>
                                    <h3 class="post-title"><a href="single-blog.html">Post with Gallery</a></h3>
                                    <p class="post-description">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
                                    <p class="post-author">
                                       <img src="<?=base_url()?>assets/img/icon/author.png" alt=""> <span>Posted by </span>
                                       <a href="#">admin </a>
                                    </p>
                                </div>
                            </div>
                            <!--Single Blog End-->
                        </div>
                        <div class="col-md-4">
                            <!--Single Blog Start-->
                            <div class="single-blog">
                                <div class="blog-img img-full">
                                    <a href="single-blog.html">
                                        <img src="<?=base_url()?>assets/img/blog/blog3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="post-date">01/12/2018</div>
                                    <h3 class="post-title"><a href="single-blog.html">Post with Audio</a></h3>
                                    <p class="post-description">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
                                    <p class="post-author">
                                       <img src="<?=base_url()?>assets/img/icon/author.png" alt=""> <span>Posted by </span>
                                       <a href="#">admin </a>
                                    </p>
                                </div>
                            </div>
                            <!--Single Blog End-->
                        </div>
                        <div class="col-md-4">
                            <!--Single Blog Start-->
                            <div class="single-blog">
                                <div class="blog-img img-full">
                                    <a href="single-blog.html">
                                        <img src="<?=base_url()?>assets/img/blog/blog4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="post-date">01/12/2018</div>
                                    <h3 class="post-title"><a href="single-blog.html">Post with Video</a></h3>
                                    <p class="post-description">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
                                    <p class="post-author">
                                       <img src="<?=base_url()?>assets/img/icon/author.png" alt=""> <span>Posted by </span>
                                       <a href="#">admin </a>
                                    </p>
                                </div>
                            </div>
                            <!--Single Blog End-->
                        </div>
                        <div class="col-md-4">
                            <!--Single Blog Start-->
                            <div class="single-blog">
                                <div class="blog-img img-full">
                                    <a href="single-blog.html">
                                        <img src="<?=base_url()?>assets/img/blog/blog5.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="post-date">01/12/2018</div>
                                    <h3 class="post-title"><a href="single-blog.html">Maecenas ultricies</a></h3>
                                    <p class="post-description">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
                                    <p class="post-author">
                                       <img src="<?=base_url()?>assets/img/icon/author.png" alt=""> <span>Posted by </span>
                                       <a href="#">admin </a>
                                    </p>
                                </div>
                            </div>
                            <!--Single Blog End-->
                        </div>
                        <div class="col-md-4">
                            <!--Single Blog Start-->
                            <div class="single-blog">
                                <div class="blog-img img-full">
                                    <a href="single-blog.html">
                                        <img src="<?=base_url()?>assets/img/blog/blog1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="post-date">01/12/2018</div>
                                    <h3 class="post-title"><a href="single-blog.html">Blog image post</a></h3>
                                    <p class="post-description">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
                                    <p class="post-author">
                                       <img src="<?=base_url()?>assets/img/icon/author.png" alt=""> <span>Posted by </span>
                                       <a href="#">admin </a>
                                    </p>
                                </div>
                            </div>
                            <!--Single Blog End-->
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!--Blog Area Start-->        
        <!--Feature Area Start-->
        <div class="feature-area mt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!--Single Feature Start-->
                        <div class="single-feature mb-35">
                            <div class="feature-icon">
                                <span class="lnr lnr-rocket"></span>
                            </div>
                            <div class="feature-content">
                                <h3>FREE SHIPPING</h3>
                                <p>ALL ORDER OVER $100</p>
                            </div>
                        </div>
                        <!--Single Feature End-->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!--Single Feature Start-->
                        <div class="single-feature mb-35">
                            <div class="feature-icon">
                                <span class="lnr lnr-phone"></span>
                            </div>
                            <div class="feature-content">
                                <h3>24/7 DEDICATED SUPPORT</h3>
                                <p>0123 456 789</p>
                            </div>
                        </div>
                        <!--Single Feature End-->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!--Single Feature Start-->
                        <div class="single-feature mb-35">
                            <div class="feature-icon">
                                <span class="lnr lnr-redo"></span>
                            </div>
                            <div class="feature-content">
                                <h3>MONEY BACK</h3>
                                <p>IF THE ITEM DIDN’T SUIT YOU</p>
                            </div>
                        </div>
                        <!--Single Feature End-->
                    </div>
                </div>
            </div>
        </div> 
        <!--Feature Area End-->         
		<!--News Letter Area Start-->
		<div class="news-letter-area mt-90 mb-120">
		    <div class="container">
		        <div class="row">
		            <!--Section Title Start-->
		            <div class="col-12">
		                <div class="section-title text-center mb-35">
		                    <h3>Send Newsletter</h3>
		                </div>
		            </div>
		            <!--Section Title End-->
		        </div>
		        <div class="row">
		            <div class="col-md-12">
		                <div class="news-latter-box">
		                    <p>Enter Your Email Address For Our Mailing List To Keep Your Self Update</p>
		                    <div class="news-letter-form text-center">
		                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="popup-subscribe-form validate" target="_blank" novalidate>
                                   <div id="mc_embed_signup_scroll">
                                      <div id="mc-form" class="mc-form subscribe-form" >
                                        <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email here" />
                                        <button id="mc-submit">Subscribe <i class="fa fa-chevron-right"></i></button>
                                      </div>
                                   </div>
                               </form>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--News Letter Area End-->
		<!--Footer Area Start-->
		<footer>
		    <div class="footer-container">
		        <!--Footer Top Area Start-->
		        <div class="footer-top-area black-bg">
		            <div class="container">
		                <div class="row">
		                    <div class="col-lg-3 col-md-6">
		                        <!--Single Footer Widget Start-->
		                        <div class="single-footer-widget mb-40">
		                            <div class="footer-title">
		                                <h3>My Account</h3>
		                            </div>
		                            <ul class="link-widget">
		                                <li><a href="about.html">About Us</a></li>
		                                <li><a href="#">Team Member</a></li>
		                                <li><a href="#">Career</a></li>
		                                <li><a href="#">Specials</a></li>
		                                <li><a href="shop.html">Best sellers</a></li>
		                                <li><a href="#">Our stores</a></li>
		                                <li><a href="contact.html">Contact us</a></li>
		                            </ul>
		                        </div>
		                        <!--Single Footer Widget End-->
		                    </div>
		                    <div class="col-lg-3 col-md-6">
		                        <!--Single Footer Widget Start-->
		                        <div class="single-footer-widget mb-40">
		                            <div class="footer-title">
		                                <h3>Information</h3>
		                            </div>
		                            <ul class="link-widget">
		                                <li><a href="about.html">About Us</a></li>
		                                <li><a href="contact.html">Contact Us</a></li>
		                                <li><a href="#">My orders</a></li>
		                                <li><a href="#">Terms & Conditions</a></li>
		                                <li><a href="#">Returns & Exchanges</a></li>
		                                <li><a href="#">Shipping & Delivery</a></li>
		                                <li><a href="#">Privacy Policy</a></li>
		                            </ul>
		                        </div>
		                        <!--Single Footer Widget End-->
		                    </div>
		                    <div class="col-lg-3 col-md-6">
		                        <!--Single Footer Widget Start-->
		                        <div class="single-footer-widget mb-40">
		                            <div class="footer-title">
		                                <h3>Quick Links</h3>
		                            </div>
		                            <ul class="link-widget">
		                                <li><a href="#">Support Center</a></li>
		                                <li><a href="#">Term & Conditions</a></li>
		                                <li><a href="#">Shipping</a></li>
		                                <li><a href="#">Privacy Policy</a></li>
		                                <li><a href="#">Help</a></li>
		                                <li><a href="#">Products Return</a></li>
		                                <li><a href="faq.html">FAQS</a></li>
		                            </ul>
		                        </div>
		                        <!--Single Footer Widget End-->
		                    </div>
		                    <div class="col-lg-3 col-md-6">
		                        <!--Single Footer Widget Start-->
		                        <div class="single-footer-widget mb-40">
		                            <div class="footer-title">
		                                <h3>Categories</h3>
		                            </div>
		                            <ul class="link-widget">
		                                <li><a href="#">Bedroom</a></li>
		                                <li><a href="#">Furniture</a></li>
		                                <li><a href="#">Livingroom</a></li>
		                                <li><a href="#">Mobiles & Tablets</a></li>
		                                <li><a href="#">Men</a></li>
		                                <li><a href="#">Women</a></li>
		                                <li><a href="#">Accessories</a></li>
		                            </ul>
		                        </div>
		                        <!--Single Footer Widget End-->
		                    </div>
		                </div>
		            </div>
		        </div>
		        <!--Footer Top Area End-->
		        <!--Footer Middle Area Start-->
		        <div class="footer-middle-area black-bg">
		            <div class="container">
		                <div class="row">
		                    <div class="col-lg-3 col-md-6">
		                        <!--Single Footer Widget Start-->
		                        <div class="single-footer-widget mb-30">
		                            <div class="footer-logo">
		                                <a href="index.html"><img src="<?=base_url()?>assets/img/logo/logo-footer.png" alt=""></a>
		                            </div>
		                        </div>
		                        <!--Single Footer Widget End-->
		                    </div>
		                    <div class="col-lg-3 col-md-6">
		                        <!--Single Footer Widget Start-->
		                        <div class="single-footer-widget mb-30">
		                            <div class="footer-info">
		                                <div class="icon">
		                                    <i class="fa fa-home"></i>
		                                </div>
		                                <p>Address : No 40 Baria Sreet 15/2 NewYork City, NY, United States.</p>
		                            </div>
		                        </div>
		                        <!--Single Footer Widget End-->
		                    </div>
		                    <div class="col-lg-3 col-md-6">
		                        <!--Single Footer Widget Start-->
		                        <div class="single-footer-widget mb-30">
		                            <div class="footer-info">
		                                <div class="icon">
		                                    <i class="fa fa-envelope-open-o"></i>
		                                </div>
		                                <p>Email: <br>info@yourmail.com</p>
		                            </div>
		                        </div>
		                        <!--Single Footer Widget End-->
		                    </div>
		                    <div class="col-lg-3 col-md-6">
		                        <!--Single Footer Widget Start-->
		                        <div class="single-footer-widget mb-30">
		                            <div class="footer-info">
		                                <div class="icon">
		                                    <i class="fa fa-mobile"></i>
		                                </div>
		                                <p>Phone: <br>(+68) 123 456 7890</p>
		                            </div>
		                        </div>
		                        <!--Single Footer Widget End-->
		                    </div>
		                </div>
		            </div>
		        </div>
		        <!--Footer Middle Area End-->
		        <!--Footer Bottom Area Start-->
		        <div class="footer-bottom-area black-bg pt-50 pb-50">
		            <div class="container">
		                <div class="row">
		                    <div class="col-md-12">
                                <!--Footer Payment Start-->
		                        <div class="footer-payments-image">
		                            <img src="<?=base_url()?>assets/img/payment/payment-icon.png" alt="">
		                        </div>
		                        <!--Footer Payment End-->
		                        <!--Footer Menu Start-->
		                        <div class="footer-menu text-center">
		                            <nav>
		                                <ul>
		                                    <li><a href="#">Site Map</a></li>
		                                    <li><a href="#">Search Terms</a></li>
		                                    <li><a href="#">Advanced Search</a></li>
		                                    <li><a href="#">Orders and Returns</a></li>
		                                    <li><a href="#">Contact Us</a></li>
		                                </ul>
		                            </nav>
		                        </div>
		                        <!--Footer Menu End-->
		                        <!--Footer Copyright Start-->
		                        <div class="footer-copyright">
		                            <p class="copyright">&copy; 2021 <strong>Plantmore</strong> Made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://hasthemes.com/"><strong>HasThemes</strong></a>.</p>
		                        </div>
		                        <!--Footer Copyright End-->
		                    </div>
		                </div>
		            </div>
		        </div>
		        <!--Footer Bottom Area End-->
		    </div>
		</footer>
		<!--Footer Area End-->
		<!-- Modal Area Strat -->
        <div class="modal fade" id="open-modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
              </div>
              <div class="modal-body">
                <div class="row">
                    <!--Modal Img-->
                    <div class="col-md-5">
                        <!--Modal Tab Content Start-->
                        <div class="tab-content product-details-large" id="myTabContent">
                          <div class="tab-pane fade show active" id="single-slide1" role="tabpanel" aria-labelledby="single-slide-tab-1">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="<?=base_url()?>assets/img/single-product/large/single-product1.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="<?=base_url()?>assets/img/single-product/large/single-product2.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="<?=base_url()?>assets/img/single-product/large/single-product3.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="<?=base_url()?>assets/img/single-product/large/single-product4.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide5" role="tabpanel" aria-labelledby="single-slide-tab-4">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="<?=base_url()?>assets/img/single-product/large/single-product5.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                          <div class="tab-pane fade" id="single-slide6" role="tabpanel" aria-labelledby="single-slide-tab-4">
                              <!--Single Product Image Start-->
                              <div class="single-product-img img-full">
                                <img src="<?=base_url()?>assets/img/single-product/large/single-product6.jpg" alt="">
                              </div>
                              <!--Single Product Image End-->
                          </div>
                        </div>
                        <!--Modal Content End-->
                        <!--Modal Tab Menu Start-->
                        <div class="single-product-menu">
                            <div class="nav single-slide-menu owl-carousel" role="tablist">
                                <div class="single-tab-menu img-full">
                                    <a class="active" data-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img src="<?=base_url()?>assets/img/single-product/small/single-product1.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img src="<?=base_url()?>assets/img/single-product/small/single-product2.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img src="<?=base_url()?>assets/img/single-product/small/single-product3.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img src="<?=base_url()?>assets/img/single-product/small/single-product4.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-5" href="#single-slide5"><img src="<?=base_url()?>assets/img/single-product/small/single-product5.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-toggle="tab" id="single-slide-tab-6" href="#single-slide6"><img src="<?=base_url()?>assets/img/single-product/small/single-product6.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!--Modal Tab Menu End-->
                    </div>
                    <!--Modal Img-->
                    <!--Modal Content-->
                    <div class="col-md-7">
                        <div class="modal-product-info">
                            <h1>Sit voluptatem</h1>
                            <div class="modal-product-price">
                               <span class="old-price">$74.00</span>
                               <span class="new-price">$69.00</span>
                           </div>
                           <a href="single-product.html" class="see-all">See all features</a>
                           <div class="add-to-cart quantity">
                                <form class="add-quantity" action="#">
                                     <div class="modal-quantity">
                                         <input type="number" value="1">
                                     </div>
                                    <div class="add-to-link">
                                        <button class="form-button" data-text="add to cart">add to cart</button>
                                    </div>
                                </form>
                           </div>
                           <div class="cart-description">
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus.</p>
                           </div>
                            <div class="social-share">
                               <h3>Share this product</h3>
                               <ul class="socil-icon2">
                                   <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                   <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                   <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                   <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                   <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                               </ul>
                            </div>
                        </div>
                    </div>
                    <!--Modal Content-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Area End -->
	</div>





    <!--All Js Here-->
    
	<!--Jquery 1.12.4-->
	<script src="<?=base_url()?>assets/js/vendor/jquery-1.12.4.min.js"></script>
	<!--Popper-->
	<script src="<?=base_url()?>assets/js/popper.min.js"></script>
	<!--Bootstrap-->
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	<!--Imagesloaded-->
	<script src="<?=base_url()?>assets/js/imagesloaded.pkgd.min.js"></script> 
	<!--Isotope-->
	<script src="<?=base_url()?>assets/js/isotope.pkgd.min.js"></script>
	<!--Waypoints-->
	<script src="<?=base_url()?>assets/js/waypoints.min.js"></script>
	<!--Counterup-->
	<script src="<?=base_url()?>assets/js/jquery.counterup.min.js"></script>
	<!--Carousel-->
	<script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
	<!--Slick-->
	<script src="<?=base_url()?>assets/js/slick.min.js"></script>
	<!--Meanmenu-->
	<script src="<?=base_url()?>assets/js/jquery.meanmenu.min.js"></script>
	<!--Easyzoom-->
	<script src="<?=base_url()?>assets/js/easyzoom.min.js"></script>
	<!--Nice Select-->
	<script src="<?=base_url()?>assets/js/jquery.nice-select.min.js"></script>
	<!--ScrollUp-->
	<script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
	<!--Wow-->
	<script src="<?=base_url()?>assets/js/wow.min.js"></script>
	<!--Venobox-->
	<script src="<?=base_url()?>assets/js/venobox.min.js"></script>
	<!--Jquery Ui-->
	<script src="<?=base_url()?>assets/js/jquery-ui.js"></script>
	<!--Countdown-->
	<script src="<?=base_url()?>assets/js/jquery.countdown.min.js"></script>
	<!--Plugins-->
	<script src="<?=base_url()?>assets/js/plugins.js"></script>
	<!--Main Js-->
	<script src="<?=base_url()?>assets/js/main.js"></script>
</body>
</html>
