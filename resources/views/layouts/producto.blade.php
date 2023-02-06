@extends('layouts.base')

@section('body')
    <nav class="menu-navigation">
        <div class="navigation-bar menu-bar">
            <div class="wrapper wrapper-allcoll">
                <div class="innerpages-allcoll small--hide">
                    <div class="wrap_allcoll">
                        <div id="html-section-home-vertical-menu" class="html-section index-section revolution-slider">
                            <div class="allcollections-title">
                                <span class="title">Shop By Categories</span>
                                <div class="icon-main-toggle navbar-toggle">
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="allcollections-content have-icon">
                                <ul class="sdcollections-list">
                                    @foreach ($categorias as $cat)
                                        @if ($cat->category == '&nbsp;')
                                            <li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long"
                                                aria-haspopup="true">
                                                <p class="site-nav__link">
                                                    {{-- <span class="site-nav__icon icon-1">
                                              <img src="./assets/images/cocktail-dress.png" alt="">
                                            </span> --}}
                                                    <a href="{{ route('categoria', $cat->slug) }} "
                                                        class="site-nav__text">{!! $cat->category !!}</a>

                                                </p>
                                            </li>
                                        @else
                                            <li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long"
                                                aria-haspopup="true">
                                                <p class="site-nav__link">
                                                    {{-- <span class="site-nav__icon icon-1">
                                              <img src="./assets/images/cocktail-dress.png" alt="">
                                            </span> --}}
                                                    <a href="{{ route('categoria', $cat->slug) }} "
                                                        class="site-nav__text">{{ $cat->category }}</a>
                                                    <span class="fa fa-caret-right click_arrow" aria-hidden="true"></span>
                                                </p>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="html-section-navigation" class="html-section">
                    <div data-section-id="navigation" data-section-type="horizontal-menu-section">
                        <div class="grid--full grid--table">
                            <div class="horizontal-menu desktop-menu medium-down--hide" style="">
                                <ul class="site-nav site-nav--init" id="AccessibleNav">
                                    <li class="site-nav__item site-nav__expanded-item  active" data-url="/">
                                        <a href="{{ route('index') }}" class="site-nav__link">
                                            <span>Home</span>
                                        </a>
                                    </li>

                                    <li class="site-nav__item site-nav__expanded-item " data-url="/pages/contact-us">
                                        <a href="https://aacells.com/pages/contact-us" class="site-nav__link"
                                            target="_blank">
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
                                                <a href="{{ route('index') }}" class="site-nav__link">
                                                    <span>Home</span>
                                                </a>
                                            </li>
                                            <li class="mobile-nav__item mobile-nav__item-menulv1 mega-menu"
                                                data-father="none" data-url="/collections/all">
                                                <div class="mobile-nav__has-sublist">
                                                    <a href="./collection.html" class="mobile-nav__link">Menu</a>
                                                    <div class="mobile-nav__toggle">
                                                        <button type="button"
                                                            class="mobile-nav__toggle-btn icon-fallback-text mobileNav-menulv1-button">
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
                                                <ul
                                                    class="mobile-nav__sublist mobile-nav__sublist-menulv1 megamenu__dropdown megamenu_1">
                                                    <li
                                                        class="mobile-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
                                                        <ul>
                                                            @foreach ($categorias as $ca)
                                                                <li class="site-nav__item">
                                                                    <a href="{{ route('categoria', $ca->slug) }}"
                                                                        class="site-nav__link">
                                                                        <span>{{ $ca->category }}</span>
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
                                                <a href="https://aacells.com/pages/contact-us" class="site-nav__link"
                                                    target="_blank">
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
        <div class="mobile-allcoll small--show large--hide">
            <div class="wrap_allcoll grid__item small--one-whole">
                <div id="html-section-home-vertical-menu" class="html-section index-section revolution-slider">
                    <div class="allcollections-title">
                        <span class="title">Shop By Categories</span>
                        <div class="icon-main-toggle navbar-toggle">
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="allcollections-content have-icon">
                        <ul class="sdcollections-list">
                            @foreach ($categorias as $cat)
                                @if ($cat->category == '&nbsp;')
                                    <li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long"
                                        aria-haspopup="true">
                                        <p class="site-nav__link">
                                            {{-- <span class="site-nav__icon icon-1">
                                          <img src="./assets/images/cocktail-dress.png" alt="">
                                        </span> --}}
                                            <a href="{{ route('categoria', $cat->slug) }} "
                                                class="site-nav__text">{!! $cat->category !!}</a>

                                        </p>
                                    </li>
                                @else
                                    <li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long"
                                        aria-haspopup="true">
                                        <p class="site-nav__link">
                                            {{-- <span class="site-nav__icon icon-1">
                                          <img src="./assets/images/cocktail-dress.png" alt="">
                                        </span> --}}
                                            <a href="{{ route('categoria', $cat->slug) }} "
                                                class="site-nav__text">{{ $cat->category }}</a>
                                            <span class="fa fa-caret-right click_arrow" aria-hidden="true"></span>
                                        </p>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="html-section-product-horizontal" class="html-section">
            <header class="section-header wrapper-breadcrumb">
                <div class="wrapper">
                    <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                        {{-- <a href="/" title="Back to the frontpage">Home</a> --}}
                        <span aria-hidden="true">
                            {{-- <i class="fa fa-angle-right" aria-hidden="true"></i> --}}
                        </span>
                        {{-- <a href="/collections/flash-sale" title="">Flash Sale</a> --}}
                        <span aria-hidden="true">
                            {{-- <i class="fa fa-angle-right" aria-hidden="true"></i> --}}
                        </span>
                        {{-- <span>Reprehenderit qui in ea</span> --}}
                    </nav>
                </div>
            </header>
            <div class="product-horizontal-gallery" itemscope="" itemtype="http://schema.org/Product"
                id="ProductSection" data-section-id="product-horizontal" data-section-type="product-template"
                data-image-zoom-type="">
                <div class="wrapper">
                    <div itemscope="" itemtype="http://schema.org/Product">
                        <meta itemprop="url" content="./product.html">
                        <meta itemprop="image" content="./assets/images/detail1.png">
                        {{-- <div class="next-prev-products">
								<div class="prev-product2">
									<a href="./collection.html" title="Consequuntur magni dolores">
										<span class="icon">
											<i class="fa fa-angle-left" aria-hidden="true"></i>
										</span>
										<span class="img">
											<img src="./assets/images/product5.png" alt="">
										</span>
									</a>
								</div>
								<div class="next-product2">
									<a href="./collection.html" title="Raesent Scelerisque Dan">
										<span class="img">
											<img src="./assets/images/product7.png" alt="">
										</span>
										<span class="icon">
											<i class="fa fa-angle-right" aria-hidden="true"></i>
										</span>
									</a>
								</div>
							</div> --}}
                        @yield('detail')


                    </div>
                </div>
            </div>
        </div>
    </main>


@stop
