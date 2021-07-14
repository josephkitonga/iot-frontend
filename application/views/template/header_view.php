		<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
		<!doctype html>
		<html class="no-js" lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="x-ua-compatible" content="ie=edge">
			<title>UstremIoT</title>
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
			<link rel="stylesheet" href="<?=base_url()?>style.css">
			<!-- Responsive CSS -->
			<link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
			<!-- Modernizr Js -->
			<script src="<?=base_url()?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
		</head>

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
                                                            <!-- <ul class="switcher-dropdown">
                                                                <li><a href="#">German</a></li>
                                                                <li><a href="#">French</a></li>
                                                            </ul> -->
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="currency">
                                                <span class="switcher-title">Currency: </span>
                                                <div class="switcher-menu">
                                                    <ul>
                                                        <li><a href="#">KSH</a>
                                                            <!-- <ul class="switcher-dropdown">
                                                                <li><a href="#">€ EUR</a></li>
                                                            </ul> -->
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
                                        <li><a href="<?=base_url('my-account')?>">My Account</a></li>
                                        <li><a href="<?=base_url('wishlist')?>">Wishlist</a></li>
                                        <li><a href="<?=base_url('shopping-cart')?>">Shopping cart</a></li>
                                        <li><a href="<?=base_url('checkout')?>">Checkout</a></li>
                                        <li><a href="<?=base_url('login-register')?>">Log In</a></li>
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
                                    <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/img/logo/logo.png" alt=""></a>
                                </div>
                                <!--Header Logo End-->
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4">
                                <!--Header Phone Start-->
                                <div class="header-phone">
                                    <div class="icon">
                                        <i class="fa fa-mobile"></i>
                                    </div>
                                    <p>Phone: <br>(+254) 708 410 859</p>
                                </div>
                                <!--Header Phone End-->
                            </div>

                        	<!--Header Search Area-->
                            <div class="col-xl-4 col-lg-3 col-md-10 order-md-4 order-lg-3">
                                <div class="header-search-area">
                                    <form action="#">
                                        <div class="form-input">
                                            <input name="search" id="search" placeholder="" value="Search..." onblur="if(this.value==''){this.value='Search...'}" onfocus="if(this.value=='Search...'){this.value=''}" type="text">
                                            <button type="submit" class="header-search-btn"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--Header Search Area-->
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
                                                  <a href="<?=base_url('single-product')?>"><img src="<?=base_url()?>assets/img/cart/cart1.jpg" alt=""></a>
                                              </div>
                                              <div class="cart-content">
                                                  <h5 class="product-name"><a href="<?=base_url('single-product')?>">Odio tortor consequat</a></h5>
                                                  <span class="cart-price">1 × $90.00</span>
                                              </div>
                                              <div class="cart-remove">
                                                  <a title="Remove" href="#"><i class="fa fa-times"></i></a>
                                              </div>
                                          </li>
                                          <li class="single-cart-item">
                                              <div class="cart-img">
                                                  <a href="<?=base_url('single-product')?>"><img src="<?=base_url()?>assets/img/cart/cart2.jpg" alt=""></a>
                                              </div>
                                              <div class="cart-content">
                                                  <h5 class="product-name"><a href="<?=base_url('single-product')?>">Auctor sem</a></h5>
                                                  <span class="cart-price">1 × $100.00</span>
                                              </div>
                                              <div class="cart-remove">
                                                  <a title="Remove" href="#"><i class="fa fa-times"></i></a>
                                              </div>
                                          </li>
                                       </ul> 
                                      <p class="cart-subtotal"><strong>Subtotal:</strong> <span class="float-right">$190.00</span></p> 
                                      <p class="cart-btn">
                                          <a href="<?=base_url('cart')?>">View cart</a>
                                          <a href="<?=base_url('checkout')?>">Checkout</a>
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
                                     <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                   <!--Logo Sticky End-->
                                   <!--Main Menu Area Start-->
                                    <div class="header-menu text-center">
                                        <nav>
                                            <ul class="main-menu">
                                                <li><a href="<?=base_url()?>">home</a></li>
                                                <li><a href="<?=base_url('shop')?>">IoT Shop</a></li>
                                                <!-- <li><a href="<?=base_url('portfolio')?>">Portfolio</a></li> -->
                                                <li><a href="<?=base_url('blog')?>">Blog</a></li>
                                                <!-- <li><a href="blog.html">Pages</a> -->
                                                <!--Dropdown Menu Start-->
                                                <!-- <ul class="dropdown">
                                                    <li><a href="<?=base_url('single-product')?>">Single Product</a></li>
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
                                                </ul> -->
                                                <!--Dropdown Menu End-->
                                            </li>
                                                <li><a href="#">Services</a>
                                                    <!--Mega Menu Start-->
                                                    <ul class="mega-menu">
                                                        <li><a href="#" class="item-link">Other</a>
                                                            <ul>
                                                                <li><a href="<?=base_url('about')?>">About Us</a></li>
                                                                <li><a href="<?=base_url('contact-us')?>">Contact Us</a></li>
                                                                <li><a href="<?=base_url('faq')?>">Frequently Questions</a></li>
                                                                <!-- <li><a href="404.html">Error 404</a></li> -->
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
