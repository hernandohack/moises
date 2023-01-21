<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface supports-pointerevents" lang="en" style="height: 100%;">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="canonical" href="https://yoursite.com">
	<link rel="shortcut icon" href="./assets/images/fav.png" type="image/png">

    <title>Product Page - Megastore HTML</title>
    <meta property="og:type" content="website">
    <meta property="og:title" content="Megastore HTML">
    <meta property="og:url" content="https://yoursite.com">
    <meta property="og:description" content="Responsive HTML Template">
    <meta property="og:site_name" content="Responsive HTML Template">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Megastore HTML">
    <meta name="twitter:description" content="">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- CSS ================================================== -->
   <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css" media="all">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
   <link href="{{asset('assets/css/timber.scss.css')}}" rel="stylesheet" type="text/css" media="all">
   <link href="{{asset('assets/css/theme.scss.css')}}" rel="stylesheet" type="text/css" media="all">
   <link href="{{asset('assets/css/themepunch.revolution.css')}}" rel="stylesheet" type="text/css" media="all">
   <link href="{{asset('assets/css/megastore.scss.css')}}" rel="stylesheet" type="text/css" media="all">
   <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet" type="text/css" media="all">
   <link href="{{asset('assets/css/rating.css')}}" rel="stylesheet" type="text/css" media="all">

    <!-- JS ================================================== -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.fancybox.min.js')}}" defer=""></script>
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easytabs.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-shuffle.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.themepunch.plugins.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.countdown.plugins.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/jquery.countdown.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/slick.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/jquery.elevateZoom-3.0.8.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/tada.js')}}"></script>
  </head>

  <body id="megastore-red" class="megastore template-index" style="position: relative; min-height: 100%; top: 0px;">
	<div id="CartDrawer" class="drawer drawer--right drawer--has-fixed-footer" tabindex="-1">
		<div class="drawer__fixed-header">
			<div class="drawer__header">
				<div class="drawer__title">Your cart</div>
				<div class="drawer__close">
					<button type="button" class="icon-fallback-text drawer__close-button js-drawer-close">
						<span class="icon icon-x" aria-hidden="true"></span>
						<span class="fallback-text">Close Cart</span>
					</button>
				</div>
			</div>
		</div>
		<div class="drawer__inner">
			<div id="CartContainer" class="drawer__cart">
				<form action="./cart.html" method="post" novalidate="" class="cart ajaxcart">
					<div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer">
						<div class="ajaxcart__product">
							<div class="ajaxcart__row" data-line="1">
								<div class="grid">
									<div class="grid__item one-quarter">
										<a href="./product.html" class="ajaxcart__product-image">
											<img src="./assets/images/cart1.png" alt="Raesent Scelerisque Dan">
										</a>
									</div>
									<div class="grid__item three-quarters">
										<div class="ajaxcart__product-name--wrapper">
											<a href="./product.html" class="ajaxcart__product-name">Raesent Scelerisque Dan</a>
											<span class="ajaxcart__product-meta">XS / Red</span>
										</div>
										<div class="grid--full display-table">
											<div class="grid__item display-table-cell one-half">
												<div class="ajaxcart__qty">
													<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text"" data-qty="0" data-line="1" aria-label="Reduce item quantity by one">
														<span class="icon icon-minus" aria-hidden="true"></span>
														<span class="fallback-text" aria-hidden="true">−</span>
													</button>
													<input type="text" name="updates[]" class="ajaxcart__qty-num" value="1" min="0" data-line="1" aria-label="quantity" pattern="[0-9]*">
													<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-line="1" data-qty="2" aria-label="Increase item quantity by one">
														<span class="icon icon-plus" aria-hidden="true"></span>
														<span class="fallback-text" aria-hidden="true">+</span>
													</button>
												</div>
											</div>
											<div class="grid__item display-table-cell one-half text-right">
												<span class="ajaxcart__price">
													<span class="money">$60.00 USD</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="ajaxcart__product">
							<div class="ajaxcart__row" data-line="2">
								<div class="grid">
									<div class="grid__item one-quarter">
										<a href="./product.html" class="ajaxcart__product-image">
											<img src="./assets/images/cart2.png" alt="Reprehenderit qui in ea">
										</a>
									</div>
									<div class="grid__item three-quarters">
										<div class="ajaxcart__product-name--wrapper">
											<a href="./product.html" class="ajaxcart__product-name">Reprehenderit qui in scales</a>
											<span class="ajaxcart__product-meta">Lithograph / Green</span>
										</div>
										<div class="grid--full display-table">
											<div class="grid__item display-table-cell one-half">
												<div class="ajaxcart__qty">
													<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text" data-qty="0" data-line="2" aria-label="Reduce item quantity by one">
														<span class="icon icon-minus" aria-hidden="true"></span>
														<span class="fallback-text" aria-hidden="true">−</span>
													</button>
													<input type="text" name="updates[]" class="ajaxcart__qty-num" value="1" min="0" data-line="2" aria-label="quantity" pattern="[0-9]*">
													<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-line="2" data-qty="2" aria-label="Increase item quantity by one">
														<span class="icon icon-plus" aria-hidden="true"></span>
														<span class="fallback-text" aria-hidden="true">+</span>
													</button>
												</div>
											</div>
											<div class="grid__item display-table-cell one-half text-right">
												<span class="ajaxcart__price">
													<span class="money">$25.00 USD</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="ajaxcart__product">
							<div class="ajaxcart__row" data-line="3">
								<div class="grid">
									<div class="grid__item one-quarter">
										<a href="./product.html" class="ajaxcart__product-image">
											<img src="./assets/images/cart3.png" alt="Etiam lobortis purus dictum">
										</a>
									</div>
									<div class="grid__item three-quarters">
										<div class="ajaxcart__product-name--wrapper">
											<a href="./product.html" class="ajaxcart__product-name">Etiam lobortis purus dictum</a>
											<span class="ajaxcart__product-meta">Large</span>
										</div>
										<div class="grid--full display-table">
											<div class="grid__item display-table-cell one-half">
												<div class="ajaxcart__qty">
													<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text" data-qty="0" data-line="3" aria-label="Reduce item quantity by one">
														<span class="icon icon-minus" aria-hidden="true"></span>
														<span class="fallback-text" aria-hidden="true">−</span>
													</button>
													<input type="text" name="updates[]" class="ajaxcart__qty-num" value="1" min="0" data-line="3" aria-label="quantity" pattern="[0-9]*">
													<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-line="3" data-qty="2" aria-label="Increase item quantity by one">
														<span class="icon icon-plus" aria-hidden="true"></span>
														<span class="fallback-text" aria-hidden="true">+</span>
													</button>
												</div>
											</div>
											<div class="grid__item display-table-cell one-half text-right">
												<span class="ajaxcart__price">
													<span class="money">$25.00 USD</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="ajaxcart__product">
							<div class="ajaxcart__row" data-line="4">
								<div class="grid">
									<div class="grid__item one-quarter">
										<a href="./product.html" class="ajaxcart__product-image">
											<img src="./assets/images/cart4.png" alt="Raesent Scelerisque Dan">
										</a>
									</div>
									<div class="grid__item three-quarters">
										<div class="ajaxcart__product-name--wrapper">
											<a href="./product.html" class="ajaxcart__product-name">Raesent Scelerisque Dan</a>
											<span class="ajaxcart__product-meta">XS / Red</span>
										</div>

										<div class="grid--full display-table">
											<div class="grid__item display-table-cell one-half">
												<div class="ajaxcart__qty">
													<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text" data-qty="0" data-line="4" aria-label="Reduce item quantity by one">
														<span class="icon icon-minus" aria-hidden="true"></span>
														<span class="fallback-text" aria-hidden="true">−</span>
													</button>
													<input type="text" name="updates[]" class="ajaxcart__qty-num" value="1" min="0" data-line="4" aria-label="quantity" pattern="[0-9]*">
													<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-line="4" data-qty="2" aria-label="Increase item quantity by one">
														<span class="icon icon-plus" aria-hidden="true"></span>
														<span class="fallback-text" aria-hidden="true">+</span>
													</button>
												</div>
											</div>
											<div class="grid__item display-table-cell one-half text-right">
												<span class="ajaxcart__price">
													<span class="money">$78.00 USD</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="ajaxcart__footer ajaxcart__footer--fixed">
						<div class="grid--full">
							<div class="grid__item two-thirds">
								<p class="ajaxcart__subtotal">Subtotal</p>
							</div>
							<div class="grid__item one-third text-right">
								<p class="ajaxcart__subtotal"><span class="money">$188.00 USD</span></p>
							</div>
						</div>
						<p class="ajaxcart__note text-center">Shipping, taxes, and discounts calculated at checkout.</p>
						<a href="./cart.html" class="btn--secondary btn--full cart__checkout" style="margin-bottom:10px;">
							Shopping Cart <span class="icon icon-arrow-right" aria-hidden="true"></span>
						</a>
						<button type="submit" class="btn--secondary btn--full cart__checkout" name="checkout">
							Check Out <span class="icon icon-arrow-right" aria-hidden="true"></span>
						</button>
					</div>
				</form>

			</div>
		</div>
	</div>

    <div id="PageContainer" class="is-moved-by-drawer">
		<header class="">
			<div id="html-section-header" class="html-section">
				<div class="topinfom small--hide">
					<div class="topinfo-text" style="background-color:#cccccc">
						<div class="wrapper">
							<a href="./collection.html">50+ Valentine's Day 2019 Food Freebies, Specials and Deals</a>
						</div>
					</div>
				</div>
				<div class="topheader small--hide">
					<div class="wrapper">
						<div class="left-area">
							<div class="site-nav__item nav-language medium-down--hide">

							</div>
							<div class="site-nav__item nav-currency medium-down--hide">
							    <div class="switcher notranslate">
                                    <i class="fa fa-money"></i>
								</div>
							</div>
							<div class="site-nav__item nav-qrcode">
								<div class="qrcode-title">
									<a>
										Shop in App
									</a>
								</div>
							</div>
							<div id="AppModal" class="mfp-hide" style="max-width: 500px;margin: 0 auto;">
								<div class="ios-area">
									<div class="qrimg-ios">
										<a href="#"><img src="./assets/images/QR_Code_Tadatheme.png" alt=""></a>
									</div>
									<div class="qropt-ios"><img src="./assets/images/apple-store.png" alt=""></div>
								</div>
								<div class="ios-area">
									<div class="qrimg-android">
										<a href="#"><img src="./assets/images/QR_Code_Megastore.png" alt="Image Column"></a>
									</div>
									<div class="qropt-android"><img src="./assets/images/google-play.png" alt=""></div>
								</div>
								<button title="Close (Esc)" type="button" class="mfp-close">×</button>
							</div>

							<div class="social-icons">
								<div class="social-title">
									<a >
										Connect with us
									</a>
								</div>
								<div id="SocialModal" class="mfp-hide" style="max-width: 500px;margin: 0 auto;">
									<div class="inline-list social-icons">
										<a href="#" title="Twitter" class="icon-social twitter" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
										<a href="#" title="Facebook" class="icon-social facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
										<a href="#" title="Google+" class="icon-social google" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus"></i></a>
										<a href="#" title="Pinterest" class="icon-social pinterest" data-toggle="tooltip" data-placement="top"><i class="fa fa-pinterest"></i></a>
										<a href="#" title="Youtube" class="icon-social youtube" data-toggle="tooltip" data-placement="top"><i class="fa fa-youtube"></i></a>
										<a href="#" title="Instagram" class="icon-social instagram" data-toggle="tooltip" data-placement="top"><i class="fa fa-instagram"></i></a>
										<a href="#" title="translation missing: en.layout.footer.news" class="icon-social atom" data-toggle="tooltip" data-placement="top"><i class="fa fa-share-alt"></i></a>
										<a href="#" title="Vimeo" class="icon-social vimeo" data-toggle="tooltip" data-placement="top"><i class="fa fa-vimeo"></i></a>
										<a href="#" title="Tumblr" class="icon-social tumblr" data-toggle="tooltip" data-placement="top"><i class="fa fa-tumblr"></i></a>
									</div>
									<button title="Close (Esc)" type="button" class="mfp-close">×</button>
								</div>
							</div>
						</div>
						<div class="right-area">
							<ul>
								<li class="shopguide-link site-nav__item medium-down--hide">
									<a href="./page-contact.html">Contact Us</a>
								</li>
								<li class="customer-link site-nav__item">
									<a class="site-nav__link site-nav__link--icon js-login-modal" data-mfp-src="#LoginModal">
										<i class="icon-customer" aria-hidden="true"></i>
										<span class="text">My Account</span>
									</a>
									<div id="LoginModal" class="mfp-hide" style="max-width: 500px;margin: 0 auto;">
										<div id="loginBox" class="loginLightbox">
											<div id="lightboxlogin">
												<form method="post" action="./account-login.html" id="customer_login" accept-charset="UTF-8">
													<input type="hidden" name="form_type" value="customer_login" />
													<input type="hidden" name="utf8" value="✓" />
													<div id="bodyBox">
														<h3>Login</h3>
														<label for="CustomerEmail" class="hidden-label">Email</label>
														<input type="email" name="customer[email]" id="CustomerEmail" class="input-full" placeholder="Email">

														<label for="CustomerPassword" class="hidden-label">Password</label>
														<input type="password" value="" name="customer[password]" id="CustomerPassword" class="input-full" placeholder="Password">

														<input type="submit" class="btn btn2 btn--full" value="Sign In">
														<div>
															<p class="forgot"><a href="#recover" onclick="showRecoverPasswordForm();return false;" id="RecoverPassword">Forgot your password?</a></p>
															<p class="create"><a href="#create_accountBox" onclick="showCreateAccountForm();return false;" id="CreateAccountPassword">Create Account</a></p>
														</div>
													</div>
												</form>
											</div>
											<div id="recover-password" style="display:none;">
												<h3>Reset your password</h3>
												<p class="note">We will send you an email to reset your password.</p>
												<form method="post" action="/account/recover" accept-charset="UTF-8">
													<input type="hidden" name="form_type" value="recover_customer_password" />
													<input type="hidden" name="utf8" value="✓" />
													<p>
														<label for="recover-email" class="label">Email</label>
													</p>
													<input type="email" value="" size="30" name="email" id="recover-email" class="text" />
													<div class="action_bottom">
														<p>
															<input class="btn btn2" type="submit" value="Submit" />
														</p>
														<p>
														<a class="btn--secondary back btn--full" href="#" onclick="hideRecoverPasswordForm();return false;">Cancel</a>
														</p>
													</div>
												</form>
											</div>
											<div id="create_accountBox" style="display:none;">
												<h3>Register</h3>
												<div class="form-vertical">
													<form method="post" action="/account" id="create_customer" accept-charset="UTF-8">
														<input type="hidden" name="form_type" value="create_customer" />
														<input type="hidden" name="utf8" value="✓" />
														<label for="FirstName" class="hidden-label">First Name</label>
														<input type="text" name="customer[first_name]" id="FirstName" class="input-full" placeholder="First Name">
														<label for="LastName" class="hidden-label">Last Name</label>
														<input type="text" name="customer[last_name]" id="LastName" class="input-full" placeholder="Last Name">
														<label for="Email" class="hidden-label">Email</label>
														<input type="email" name="customer[email]" id="Email2" class="input-full" placeholder="Email">
														<label for="CreatePassword" class="hidden-label">Password</label>
														<input type="password" name="customer[password]" id="CreatePassword" class="input-full" placeholder="Password">
														<p>
															<input type="submit" value="Create" class="btn btn2 btn--full">
														</p>
														<p><span><a class="btn--secondary btn--full" href="#" onclick="hideRecoverPasswordForm();return false;">Cancel</a></span></p>
													</form>
												</div>
											</div>
											<script>
												function showRecoverPasswordForm() {
													$('#recover-password').css("display", 'block');
													$('#lightboxlogin').css("display", 'none');
													$('#create_accountBox').css("display", 'none');
												}

												function hideRecoverPasswordForm() {
													$('#recover-password').css("display", 'none');
													$('#lightboxlogin').css("display", 'block');
													$('#create_accountBox').css("display", 'none');
												}

												function showCreateAccountForm() {
													$('#recover-password').css("display", 'none');
													$('#lightboxlogin').css("display", 'none');
													$('#create_accountBox').css("display", 'block');
												}
											</script>
										</div>
										<button title="Close (Esc)" type="button" class="mfp-close">×</button>
									</div>
								</li>
								<li class="site-nav__item compare_link">
									<a href="./page-compare.html"><i class="fa fa-refresh" aria-hidden="true" title="Compare"></i></a>
								</li>
								<li class="site-nav__item wishlist_link">
									<a href="./page-wishlist.html"><i class="fa fa-heart-o" aria-hidden="true" title="Wishlist"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div data-section-id="header" data-section-type="header-section" class="header-section" style="background-image: url({{asset('assets/images/header.png')}})">
					<div class="header-wrapper header-wrapper--over-hero" >
						<div class="wrapper main-header-wrapper" >
							<div class="grid--full grid--table">
								<!-- Mobile Button -->
								<div class="grid__item large--hide medium-down--one-quarter small--one-quarter nav-mobile">
									<div>
										<button type="button" class="icon-fallback-text site-nav__link js-drawer-open-left site-mobileNav-bar" aria-controls="NavDrawer">
											<span class="icon icon-hamburger" aria-hidden="true"></span>
											<span class="fallback-text">Site navigation</span>
										</button>
									</div>
								</div>
								<!-- Mobile Logo -->
								<div class="grid__item large--hide medium-down--two-quarters small--two-quarters logo-mobile" style="backgroud-color:#fff;">
									<a href="{{route('index')}}" class="site-header__logo-image">
										<img src="{{asset('assets/images/cellsmr_logo.png')}}" alt="">
									</a>
								</div>
								<!-- Mobile Cart -->
								{{-- <div class="grid__item large--hide medium-down--one-quarter small--one-quarter cart-mobile">
									<div class="text-right">
										<a href="./cart.html" class="site-nav__link cart-link js-drawer-open-right" aria-controls="CartDrawer" aria-expanded="false">
											<span class="icon-fallback-text">
												<span class="icon icon-cart" aria-hidden="true"></span>
												<span class="fallback-text">Shopping Cart</span>
											</span>
											<span class="cart-link__bubble"></span>
										</a>
									</div>
								</div> --}}
								<div class="mobileNav-search large--hide medium-down--one-whole small--one-whole">
									<form action="./search.html" method="get" class="input-group search-bar search-bar--drawer" role="search" style="position: relative;">
										<input type="search" name="q" value="" placeholder="Search something" class="input-group-field" aria-label="Search something" autocomplete="off">
										<span class="input-group-btn">
											<button type="submit" class="btn--secondary icon-fallback-text">
												<i class="icon-search" aria-hidden="true"></i>
												<span class="fallback-text">Search</span>
											</button>
										</span>
									</form>
								</div>

								<!-- Desktop Header -->
								<div class="grid__item large--show medium-down--hide smal--hide" >
									<div class="wrapper-middle">
										<!-- Logo -->
										<div class="grid__item large--three-tenths logo-wrapper">
											<a href="{{route('index')}}" itemprop="url" class="site-header__logo-image">
												<img src="{{asset('assets/images/cellsmr_logo.png')}}" alt="">
											</a>
										</div>
                                        	<!-- Search Box -->
										<div class="grid__item header-search large--five-tenths small--hide">
											<div class="header-search-inner">
												<form action="./search.html" method="get" class="input-group search-bar " role="search" style="position: relative;">
													<input type="hidden" name="type" value="product">
													<input type="search" name="q" value="" placeholder="Search something" class="input-group-field" aria-label="Search something" autocomplete="off">
													<span class="input-group-btn">
														<button type="submit" class=" icon-fallback-text">
															<i class="icon-search" aria-hidden="true"></i>
															<span class="fallback-text">Search</span>
														</button>
													</span>
													<ul class="search-results" style="position: absolute; left: 0px; top: 40px; display: none;"></ul>
												</form>
												<div class="header-search-suggestion">
													<ul class="grid__link">
														<li>
															<a href="./collection.html"><span>samsung</span></a>
														</li>
														<li>
															<a href="./collection.html"><span>bosch</span></a>
														</li>
														<li>
															<a href="./collection.html"><span>kingston</span></a>
														</li>
														<li>
															<a href="./collection.html"><span>ensure gold</span></a>
														</li>
														<li>
															<a href="./collection.html"><span>converse</span></a>
														</li>
													</ul>
												</div>

											</div>
										</div>

										<!-- Cart -->
										{{-- <div class="grid__item header-cart large--two-tenths small--hide">
											<div class="cart-link site-nav__item">
												<a href="./cart.html" class="site-nav__link site-nav__link--icon cart-link js-drawer-open-right" aria-controls="CartDrawer" aria-expanded="false">
													<span class="icon-fallback-text">
														<div class="left-block">
															<i class="fa fa-shopping-basket" aria-hidden="true"></i>
															<span class="cart-link__bubble">4</span>
														</div>
														<div class="right-block">
															<div class="text1">Shopping Cart</div>
														</div>
													</span>
												</a>
											</div>
										</div> --}}
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
        <div style="width: 100%; height: 50px; background-color: #e62e04;">
            <ul>
                <li style="width: 100%; position: absolute; z-index: 1001; overflow: visible; display: flex; justify-content: center; align-items: center;">
                    <img src="{{asset('assets/images/big-discount_cellsmr.png')}}" alt="">
                </li>
            </ul>
        </div>

  @yield('body')




  {{-- <script>
    var productsProIO=[];
    var productProIO= {
        "id": "1899239866457", "title": "Consequuntur magni dolores", "url": "./product.html", "price": "$199.00", "image": "./assets/images/product1.png"
    }
    productsProIO.push(productProIO);
    var productProIO= {
        "id": "1899239145561", "title": "Raesent Scelerisque Dan", "url": "./product.html", "price": "$19.99", "image": "./assets/images/product3.png"
    }
    productsProIO.push(productProIO);
    var productProIO= {
        "id": "1899238654041", "title": "Quisque vel enim quis", "url": "./product.html", "price": "$27.99", "image": "./assets/images/product5.png"
    }
    productsProIO.push(productProIO);
    var productProIO= {
        "id": "1899238064217", "title": "Quisque vel enim", "url": "./product.html", "price": "$79.99", "image": "./assets/images/product7.png"
    }
    productsProIO.push(productProIO);
    var productProIO= {
        "id": "1899238064217", "title": "Quis nostrum exercitationem", "url": "./product.html", "price": "$199.99", "image": "./assets/images/product9.png"
    }
    productsProIO.push(productProIO);

    var notifyProIO = {
        version: 1,
        // isNotifyEnabled: function() {
        //     var t = !0,
        //         e = document.getElementsByTagName("meta");
        //     for (i = 0; i < e.length; i++) "notify:enabled" == e[i].getAttribute("name") && "false" === e[i].getAttribute("content") && (t = !1);
        //     return this.settings.hideMobile && this.isMobileDevice() && (t = !1), t
        // },
        // isMobileDevice: function() {
        //     var t = navigator.userAgent || navigator.vendor || window.opera;
        //     return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(t) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(t.substr(0, 4)) ? !0 : !1
        // },
        // setup: function(t) {
        //     if (this.isNotifyEnabled()) {
        //         this.products = t;
        //         var i = document.createElement("div");
        //         i.id = "suggestproduct", i.className = "suggestion-modal", document.body.appendChild(i),
        //         this.notificationDiv = document.getElementById("suggestproduct"), setTimeout("notifyProIO.runNotifications()", this.settings.initialDelay + 1)
        //     }
        // },
        // runNotifications: function() {
        //     var t = !1;
        //     if (this.settings.totalDisplayed < this.settings.totalPerPage) {
        //         this.settings.totalDisplayed++;
        //         for (var i in this.products)
        //             if (product = this.products[i], null === localStorage.getItem("snv-" + product.id)) {
        //                 localStorage.setItem("snv-" + product.id, 1), this.displayNotification(product.title, product.image, product.url, product.price), t = !0;
        //                 break
        //             }
        //         t ? setTimeout("notifyProIO.runNotifications()", this.settings.displayInterval + this.settings.displayHold) : this.settings.loop && (this.clearLocalStorage(), this.runNotifications())
        //     }
        // },
        // displayNotification: function(t, i, e, o) {
        //     var n = '<a href="' + e + '">' + t + "</a>",
        //         p = "Other Customers also miraron",
        //         s = this.settings.message.replace("{product_with_link}", n).replace("{money}", '<span class="price">' + o + "</span>");
        //     document.getElementById("suggestproduct").innerHTML = i ? '<div class="title">' + p + '</div><div class="content"><img src="' + i + '"><p>' + s + "</p></div>" : "<p>" + s + "</p></div>", setTimeout(function() {
        //         notifyProIO.animateIn()
        //     }, 500), setTimeout(function() {
        //         notifyProIO.animateOut()
        //     }, this.settings.displayHold)
        // },
        // animateIn: function() {
        //     var t = 0,
        //         i = 0,
        //         e = this,
        //         o = setInterval(function() {
        //             t >= 1 && clearInterval(o), e.notificationDiv.style.bottom = i + "px", e.notificationDiv.style.opacity = t, e.notificationDiv.style.filter = "alpha(opacity=" + 100 * t + ")", e.notificationDiv.style.display = "block", t += .05, i += 1
        //         }, 25)
        // },
        animateOut: function() {
            var t = 1,
                i = 20,
                e = this,
                o = setInterval(function() {
                    return 0 >= t ? (clearInterval(o), e.notificationDiv.style.display = "none", !1) : (e.notificationDiv.style.bottom = i + "px", e.notificationDiv.style.opacity = t, e.notificationDiv.style.filter = "alpha(opacity=" + 100 * t + ")", t -= .05, t = t.toFixed(2), void(i -= 1))
                }, 25)
        },
        clearLocalStorage: function() {
            for (var t = localStorage.length - 1; t > 0; t--) "snv" === localStorage.key(t).split("-")[0] && localStorage.removeItem(localStorage.key(t))
        }
    };

    // notifyProIO.settings = {};
    // notifyProIO.settings.message = ' {product_with_link} {money}';
    // notifyProIO.settings.hideMobile = true;
    // notifyProIO.settings.initialDelay = 1000; // 1s
    // notifyProIO.settings.displayInterval = 10000; // 10s
    // notifyProIO.settings.displayHold = 5000; // 7s
    // notifyProIO.settings.totalPerPage = 30;
    // notifyProIO.settings.totalDisplayed = 0;
    // notifyProIO.settings.loop = true;
    // notifyProIO.setup(productsProIO);
</script> --}}
</body>
</html>
