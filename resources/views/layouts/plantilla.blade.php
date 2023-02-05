@extends('layouts.base')

@section('body')
<nav class="menu-navigation">
    <div class="navigation-bar menu-bar">
        <div class="wrapper wrapper-allcoll">

            <div id="html-section-navigation" class="html-section">
                <div data-section-id="navigation" data-section-type="horizontal-menu-section">
                    <div class="grid--full grid--table">
                        <div class="horizontal-menu desktop-menu medium-down--hide" style="">
                            <ul class="site-nav site-nav--init" id="AccessibleNav">
                                <li class="site-nav__item site-nav__expanded-item  active" data-url="/">
                                    <a href="{{(route('index'))}}" class="site-nav__link">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="site-nav__item site-nav__expanded-item " data-url="/pages/contact-us">
                                    <a href="https://aacells.com/pages/contact-us" class="site-nav__link" target="_blank">
                                        <span>Contact Us</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="horizontal-menu mobile-menu large--hide">
                            <div id="MobileNav" class="mobileNav-left">
                                <div class="mobileNav-header">
                                    <div class="mobileNav-close">
                                        <button type="button" class="icon-fallback-text mobileNav-icon-close">
                                            <span class="icon icon-x" aria-hidden="true"></span>
                                            <span class="fallback-text">Close menu</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="mobileNav-menu">
                                    <ul class="mobileNav-nav">
                                        <li class="mobile-nav__item active" data-url="/">
                                            <a href="{{(route('index'))}}" class="site-nav__link">
                                                <span>Home</span>
                                            </a>
                                        </li>
                                        <li class="mobile-nav__item mobile-nav__item-menulv1 mega-menu" data-father="none" data-url="/collections/all">
                                            <div class="mobile-nav__has-sublist">
                                                <a href="./collection.html" class="mobile-nav__link">Menu</a>
                                                <div class="mobile-nav__toggle">
                                                    <button type="button" class="mobile-nav__toggle-btn icon-fallback-text mobileNav-menulv1-button">
                                                        <span class="icon-fallback-text mobile-nav__toggle-open">
                                                            <span class="icon icon-plus" aria-hidden="true"></span>
                                                            <span class="fallback-text">Expand submenu</span>
                                                        </span>
                                                        <span class="icon-fallback-text mobile-nav__toggle-close">
                                                            <span class="icon icon-minus" aria-hidden="true"></span>
                                                            <span class="fallback-text">Collapse submenu</span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <ul class="mobile-nav__sublist mobile-nav__sublist-menulv1 megamenu__dropdown megamenu_1">
                                                <li class="mobile-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
                                                    <ul>
                                                        @foreach ( $categorias as  $ca )
                                                        <li class="site-nav__item">
                                                            <a href="{{route('categoria', $ca->slug)}}" class="site-nav__link">
                                                                <span>{{$ca->category}}</span>
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        {{-- <li class="mobile-nav__item mobile-nav__item-menulv1 dropdown-menu" data-father="none" data-url="/collections/all">
                                            <div class="mobile-nav__has-sublist">
                                                <a href="./page-about.html" class="mobile-nav__link">Pages</a>
                                                <div class="mobile-nav__toggle">
                                                    <button type="button" class="mobile-nav__toggle-btn icon-fallback-text mobileNav-menulv1-button">
                                                        <span class="icon-fallback-text mobile-nav__toggle-open">
                                                            <span class="icon icon-plus" aria-hidden="true"></span>
                                                            <span class="fallback-text">Expand submenu</span>
                                                        </span>
                                                        <span class="icon-fallback-text mobile-nav__toggle-close">
                                                            <span class="icon icon-minus" aria-hidden="true"></span>
                                                            <span class="fallback-text">Collapse submenu</span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <ul class="mobile-nav__sublist mobile-nav__sublist-menulv1 megamenu__dropdown megamenu_1">
                                                <li class="mobile-nav__item mobile-nav__item-menulv2">
                                                    <div class="mobile-nav__has-sublist">
                                                        <a href="./page-about.html" class="mobile-nav__link">About Us</a>
                                                        <div class="mobile-nav__toggle">
                                                            <button type="button" class="mobile-nav__toggle-btn icon-fallback-text mobileNav-menulv2-button">
                                                                <span class="icon-fallback-text mobile-nav__toggle-open">
                                                                    <span class="icon icon-plus" aria-hidden="true"></span>
                                                                    <span class="fallback-text">Expand submenu</span>
                                                                </span>
                                                                <span class="icon-fallback-text mobile-nav__toggle-close">
                                                                    <span class="icon icon-minus" aria-hidden="true"></span>
                                                                    <span class="fallback-text">Collapse submenu</span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <ul class="mobile-nav__sublist mobile-nav__sublist-menulv2">
                                                        <li class="mobile-nav__item">
                                                            <a href="./page-about.html" class="site-nav__link">
                                                                <span>Services</span>
                                                            </a>
                                                        </li>
                                                        <li class="mobile-nav__item">
                                                            <a href="./page-about.html" class="site-nav__link">
                                                                <span>Shopping Guide</span>
                                                            </a>
                                                        </li>
                                                        <li class="mobile-nav__item">
                                                            <a href="./page-about.html" class="site-nav__link">
                                                                <span>Typography</span>
                                                            </a>
                                                        </li>
                                                        <li class="mobile-nav__item">
                                                            <a href="./page-about.html" class="site-nav__link">
                                                                <span>Store Location</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="mobile-nav__item">
                                                    <a href="./page-contact.html" class="site-nav__link">
                                                        <span>Contact Us</span>
                                                    </a>
                                                </li>

                                                <li class="mobile-nav__item">
                                                    <a href="./page-faq.html" class="site-nav__link">
                                                        <span>FAQ</span>
                                                    </a>
                                                </li>

                                                <li class="mobile-nav__item">
                                                    <a href="./page-about.html" class="site-nav__link">
                                                        <span>Heading</span>
                                                    </a>
                                                </li>

                                                <li class="mobile-nav__item">
                                                    <a href="./page-about.html" class="site-nav__link">
                                                        <span>Sale Off</span>
                                                    </a>
                                                </li>

                                                <li class="mobile-nav__item">
                                                    <a href="./page-wishlist.html" class="site-nav__link">
                                                        <span>Wishlist</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li> --}}
                                        <li class="mobile-nav__item" data-url="/pages/contact-us">
                                            <a href="https://aacells.com/pages/contact-us" class="site-nav__link" target="_blank">
                                                <span>Contact Us</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                {{-- <div class="mobileNav-information">
                                    <div class="mobileNav__item nav-customerlink">
                                        <a class="site-nav__link site-nav__link--icon js-login-modal" data-mfp-src="#LoginModal">
                                            <span class="text">My Account</span>
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
</nav>
		<main class="main-content">
			<div class="html-section index-top-section index-section--flush clearfix">
				<div class="wrapper">
					<div class="wrap_allcoll grid__item large--one-quarter">
						<div id="html-section-home-vertical-menu" class="html-section index-section revolution-slider">
							<div class="allcollections-title">
								<span class="title">Shop By Categories</span>
								<div class="icon-main-toggle navbar-toggle large--hide">
									<i class="fa fa-caret-down" aria-hidden="true"></i>
								</div>
							</div>
							<div class="allcollections-content have-icon">
								<ul class="sdcollections-list">
                                    @foreach ( $categorias as $categoria )
                                    <li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long" aria-haspopup="true">
										<p class="site-nav__link">
											{{-- <span class="site-nav__icon icon-1">
												  <img src="./assets/images/cocktail-dress.png" alt="">
												</span> --}}
											<a href="{{route('categoria', $categoria->slug)}} " class="site-nav__text">{{ $categoria->category }}</a>
											<span class="fa fa-caret-right click_arrow" aria-hidden="true"></span>
										</p>
                                    </li>
                                    @endforeach
								</ul>
							</div>
						</div>
					</div>
					<div class="wrap_main_slideshow grid__item large--two-quarters">
						<div id="html-section-home-revolution" class="html-section index-section revolution-slider">
							<div class="slideshow-revolution">
								<section class="tp-banner-container">
									<div class="tp-banner" >
										<ul>
											<li data-transition="boxslide"  data-masterspeed="2000" data-saveperformance="on"  data-title="Slideshow 1" >
												<img src="{{asset('assets/images/cellsmr-the-weighing-superstore-store.jpg')}}" data-lazyload="{{asset('assets/images/cellsmr-the-weighing-superstore-store.jpg')}}"  alt="Slideshow 1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
												<div class="tp-caption  easeOutBack" data-x='30' data-y='150'
													data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
													data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
													data-speed="2000" data-start="2000" data-easing="Back.easeInOut" data-endspeed="500" style="z-index: 6;visibility:hidden;">
													{{-- <img src="./assets/images/slideshow1-caption.png" alt="Caption 1" /> --}}
												</div>
												<a class="slideshow-action-link" href="#"></a>
											</li>
											<li data-transition="slideright"  data-masterspeed="2000" data-saveperformance="on"  data-title="Slideshow 1" >
												<img src="{{asset('assets/images/store-cellsmr-the-weighing-superstore.jpg')}}" data-lazyload="{{asset('assets/images/store-cellsmr-the-weighing-superstore.jpg')}}"  alt="Slideshow 1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
												<div class="tp-caption  easeOutBack" data-x='60' data-y='120'
													data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
													data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
													data-speed="2000" data-start="2000" data-easing="Back.easeInOut" data-endspeed="500" style="z-index: 6;visibility:hidden;">
													{{-- <img src="./assets/images/slideshow1-caption.png" alt="Caption 1" /> --}}
												</div>
												<a class="slideshow-action-link" href="#"></a>
											</li>
										</ul>
										<div class="tp-bannertimer"></div>
									</div>
								</section>
							</div>
						</div>
						<div class="brand-area">
							<div class="brandslider home-brandslider">
								<div class="brand-elemet">
									<a href="#">
										<img src="{{asset('assets/images/artech_scalemarket_load_cells.avif')}}" alt="">
									</a>
								</div>
								<div class="brand-elemet">
									<a href="#">
										<img src="{{asset('assets/images/revere-transducers-load-cells-scalemarket.avif')}}" alt="">
									</a>
								</div>
								<div class="brand-elemet">
									<a href="#">
										<img src="{{asset('assets/images/anyload.avif')}}" alt="">
									</a>
								</div>
								<div class="brand-elemet">
									<a href="#">
										<img src="{{asset('assets/images/rice_lake_scalemarket.avif')}}" alt="">
									</a>
								</div>
								<div class="brand-elemet">
									<a href="#">
										<img src="{{asset('assets/images/dillon_force_scalemarket.avif')}}" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="wrap_banner grid__item large--one-quarter">
						<div id="html-section-home-topbanners" class="html-section index-section index-section--flush">
							<div class="banners-box">
								<div class="banner-element banner-1" style="text-align: center;">
									<a href="#">
										<img src="{{asset('assets/images/load_cells-weight.png')}}" alt="" style="width:180px;">
									</a>
								</div>
								<div class="banner-element banner-2" style="text-align: center;">
									<a href="#">
										<img src="{{asset('assets/images/tanks-hopper-price_58e1e8ed-8510-40d2-bb56-1c3d68d31d18.avif')}}" alt="" style="width:180px;">
									</a>
								</div>
								<div class="banner-element banner-3" style="text-align: center;">
									<a href="#">
										<img src="{{asset('assets/images/farm-kit-offer-price.jpg')}}" alt="" style="width:180px;">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="index-sections">



				<div id="html-section-1542812906653" class="html-section index-section index-section--flush">
					<div class="wrapper">
						<div class="banners-box">
							<div class="grid banners-section ">
								<div class="banner-element banner-1 grid__item  captionposition-left">
									<a href="#">
										<img src="{{asset('assets/images/sentronik_load_cells_price_1920x.webp')}}" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="html-section-1542896197880" class="html-section index-section index-section--flush">
					<div class="wrapper">
						<div class="bestseller-box" style="padding-top:40px; padding-bottom:40px;">
							<div class="section-header">
								<h2>Best Seller</h2>
							</div>
							<div class="grid">
								<div class="bestseller-section bestsellerslider_1542896197880">
                                    @foreach ( $bestsellers as $categoryName => $best)

									<div class="bestseller-element bestseller-1">
										<div class="bestseller-products">
											<div class="big-area grid__item two-thirds">
												<div class="big-product bestseller-product">
													{{-- <div class="bestseller-count">1</div> --}}
													<a class="grid-view-item__link" href="{{route('producto', $best[0]->slug)}}">
														<img class="grid-view-item__image" src="{{asset($best[0]->image_path)}}" alt="">
													</a>
												</div>
											</div>
											<div class="small-area grid__item one-third">
												<div class="top-product bestseller-product">
													{{-- <div class="bestseller-count">2</div> --}}
													<a class="grid-view-item__link" href="{{route('producto', $best[1]->slug)}}">
														<img class="grid-view-item__image" src="{{asset($best[1]->image_path)}}" alt="">
													</a>
                                            </div>
                                            <div class="bottom-product bestseller-product">
													{{-- <div class="bestseller-count">3</div> --}}
													<a class="grid-view-item__link" href="{{route('producto', $best[2]->slug)}}">
														<img class="grid-view-item__image" src="{{asset($best[2]->image_path)}}" alt="">
													</a>
												</div>
											</div>
										</div>
										<p class="bestseller-name">{{$categoryName}}</p>
									</div>

                                    @endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="html-section-1539877863095" class="html-section index-section product-in-random">
					<div class="wrapper">
						<div class="page-width section-product-slider clearfix" style="padding-bottom:50px;">
							<div class="section-header ">
								<h2>Today's suggestion (Random products)</h2>
							</div>
							<div class="grid grid--uniform grid--view-items ">
								<div class="product-grid-random product-grid-1539877863095">

                                @foreach ( $ramdomproducts as  $random)
                                <div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" >
                                    <div class="grid-view-item">
                                        <div class="grid-normal-display">
                                            <div class="grid__image product-image">
                                                <a class="grid-view-item__link" href="{{route('producto', $random->slug)}}">
                                                    <img class="grid-view-item__image" src="{{asset($random->image_path)}}" alt="{{$random->slug}}">
                                                    <img class="hover-image" src="{{asset($random->image_path)}}" alt="{{$random->product}}" title="{{$random->slug}}">
                                                </a>

                                            </div>
                                            <div class="quickbuy">
                                                <div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">
                                                    <div class="effect-ajax-cart">
                                                        <form action="https://aacells.com/" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                            <input type="hidden" name="quantity" value="1">
                                                            <div class="product-single__add-to-cart">
                                                                <button type="submit" name="add" class="btn AddToCart">
                                                                    <span class="AddToCartText">
                                                                        Buy Now
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group-information style-">
                                            {{-- <div class="grid-view-item__vendor">KingStone</div> --}}
                                            <div class="h4 grid-view-item__title"><a href="{{route('producto', $random->slug)}}">{{$random->product}}</a></div>
                                            <div class="price-and-ship">
                                                <div class="grid-view-item__meta grid__item large--three-quarters">

                                                    <span class="product-price__price product-price__sale">
                                                    <span class="money">$ {{$random->list_price}} USD</span>
                                                    <span class="product-price__sale-label">On Sale</span>
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                @endforeach


								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</main>



@stop
