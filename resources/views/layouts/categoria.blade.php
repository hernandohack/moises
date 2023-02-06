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
                        <span class="title">Shop by Categories</span>
                        <div class="icon-main-toggle navbar-toggle">
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="allcollections-content have-icon">
                        <ul class="sdcollections-list">
                            @foreach ($categorias as $cate)
                                @if ($cate->category == '&nbsp;')
                                    <li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long"
                                        aria-haspopup="true">
                                        <p class="site-nav__link">
                                            {{-- <span class="site-nav__icon icon-1">
                                                      <img src="./assets/images/cocktail-dress.png" alt="">
                                                    </span> --}}
                                            <a href="{{ route('categoria', $cate->slug) }} "
                                                class="site-nav__text">{!! $cate->category !!}</a>

                                        </p>
                                    </li>
                                @else
                                    <li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long"
                                        aria-haspopup="true">
                                        <p class="site-nav__link">
                                            {{-- <span class="site-nav__icon icon-1">
                                                      <img src="./assets/images/cocktail-dress.png" alt="">
                                                    </span> --}}
                                            <a href="{{ route('categoria', $cate->slug) }} "
                                                class="site-nav__text">{{ $cate->category }}</a>
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
        <div id="html-section-collection-template" class="html-section">
            <div id="CollectionSection" class="collection-left" data-section-id="collection-template"
                data-section-type="collection-template" data-grid-type="4">
                <header class="section-header wrapper-breadcrumb">
                    <div class="wrapper">
                        <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                            {{-- <a href="/" title="Back to the frontpage">Home</a>
								<span aria-hidden="true">
									<i class="fa fa-angle-right" aria-hidden="true"></i>
								</span>
								<span>Women’s Clothing</span> --}}
                        </nav>
                    </div>
                </header>
                <section id="collection_content">
                    <div class="wrapper">
                        <div class="grid--rev collayout-left" id="collection">
                            <div class="grid__item large--three-quarters">
                                <section class="section-image">
                                    <img src="{{ asset('assets/images/scales-balances-phone-USA.jpg') }}" alt="">
                                    <div class="search-section searchslider_1542810603284">
                                    </div>
                                </section>
                                <section>
                                    {!! $categoria->description !!}
                                </section>
                                <section>
                                    @foreach ($subcategorias as $sub)
                                        <div class="categorias">

                                            <a href="{{ $sub->slug }}">
                                                <img src="{{ asset($sub->image_path) }}" alt="">
                                                <p>{{ $sub->category }}</p>
                                            </a>

                                        </div>
                                    @endforeach
                                </section>
                                <section class="collection-toolbar">
                                    <div class="toolbar-left">
                                        <h3 class="collection-title">{{ $categoria->category }}</h3>
                                    </div>
                                    <div class="toolbar-right">
                                        <div class="collection-view">
                                            <button type="button" title="Grid view"
                                                class="grid-button change-view change-view--active" data-view="grid">
                                                <span class="icon-fallback-text">
                                                    <span class="icon icon-grid-view" aria-hidden="true"></span>
                                                    <span class="fallback-text">Grid view</span>
                                                </span>
                                            </button>
                                            <button type="button" title="List view" class="list-button change-view"
                                                data-view="list">
                                                <span class="icon-fallback-text">
                                                    <span class="icon icon-list-view" aria-hidden="true"></span>
                                                    <span class="fallback-text">List view</span>
                                                </span>
                                            </button>
                                        </div>
                                        {{-- <div class="collection-sort">
												<label for="SortBy">Sort by</label>
												<select name="SortBy" id="SortBy">
													<option value="manual">Featured</option>
													<option value="best-selling">Best Selling</option>
													<option value="title-ascending">Alphabetically, A-Z</option>
													<option value="title-descending">Alphabetically, Z-A</option>
													<option value="price-ascending">Price, low to high</option>
													<option value="price-descending">Price, high to low</option>
													<option value="created-descending">Date, new to old</option>
													<option value="created-ascending">Date, old to new</option>
												</select>
											</div> --}}
                                    </div>
                                </section>
                                <section class="products-area pull-vendor grid-uniform grid-uniform-category ">
                                    @yield('productos')
                                </section>
                            </div>
                            {{-- <div class="grid__item large--one-quarter">
									<div class="group_sidebar">
										<div class="sb-wrapper link-collections-wrapper clearfix" data-animate="" data-delay="0">
											<h6 class="sb-title no-icon">
												<span>Related Categories</span>
											</h6>
											<ul class="list-unstyled sb-content all-collections list-styled">
												<li class="site-nav__item site-nav__expanded-item ">
													<a href="./collection.html" class="site-nav__link">
														<span>Dresses</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item ">
													<a href="./collection.html" class="site-nav__link">
														<span>Blouses &amp; Shirts</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item ">
													<a href="./collection.html" class="site-nav__link">
														<span>Jumpsuits</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item ">
													<a href="./collection.html" class="site-nav__link">
														<span>Jackets</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item ">
													<a href="./collection.html" class="site-nav__link">
														<span>Trench Coats</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item ">
													<a href="./collection.html" class="site-nav__link">
														<span>Tops &amp; Tees</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item ">
													<a href="./collection.html" class="site-nav__link">
														<span>Hoodies</span>
													</a>
												</li>
											</ul>
										</div>
										<div class="sb-wrapper shop-by" data-animate="" data-delay="0">
											<h6 class="sb-title no-icon">
												<span>Shop by</span>
											</h6>
											<div class="shop-by-content" id="tags-filter-content">
												<div class="filter-tag-group">
													<div class="tag-group color-tags" id="coll-filter-1">
														<p class="title cfc1 open" data-toggle="collapse" data-target="#cfc1">Color
															<span class="ficon">
																<i class="fa fa-minus"></i>
															</span>
														</p>
														<ul id="cfc1" class="collapse in">
															<li class="swatch-tag ">
																<span style="background-color:#FF0000" class="btooltip" data-toggle="tooltip" data-placement="top" title="Red">
																	<a href="#">
																		<span class"checkbox"=""></span>
																	</a>
																</span>
																<span class="color-text">Red</span>
															</li>
															<li class="swatch-tag ">
																<span style="background-color:#0000FF" class="btooltip" data-toggle="tooltip" data-placement="top" title="Blue">
																	<a href="#">
																		<span class"checkbox"=""></span>
																	</a>
																</span>
																<span class="color-text">Blue</span>
															</li>
															<li class="swatch-tag  white-color">
																<span style="background-color:#FFFFFF" class="btooltip" data-toggle="tooltip" data-placement="top" title="White">
																	<a href="#">
																		<span class"checkbox"=""></span>
																	</a>
																</span>
																<span class="color-text">White</span>
															</li>
															<li class="swatch-tag ">
																<span style="background-color:#FFFF00" class="btooltip" data-toggle="tooltip" data-placement="top" title="Yellow">
																	<a href="#">
																		<span class"checkbox"=""></span>
																	</a>
																</span>
																<span class="color-text">Yellow</span>
															</li>
															<li class="swatch-tag ">
																<span style="background-color:#00FFFF" class="btooltip" data-toggle="tooltip" data-placement="top" title="Aqua">
																	<a href="#">
																		<span class"checkbox"=""></span>
																	</a>
																</span>
																<span class="color-text">Aqua</span>
															</li>
															<li class="swatch-tag ">
																<span style="background-color:#00FF00" class="btooltip" data-toggle="tooltip" data-placement="top" title="Lime">
																	<a href="#">
																		<span class"checkbox"=""></span>
																	</a>
																</span>
																<span class="color-text">Lime</span>
															</li>
															<li class="swatch-tag ">
																<span style="background-color:#800080" class="btooltip" data-toggle="tooltip" data-placement="top" title="Purple">
																	<a href="#">
																		<span class"checkbox"=""></span>
																	</a>
																</span>
																<span class="color-text">Purple</span>
															</li>
															<li class="swatch-tag ">
																<span style="background-color:#C0C0C0" class="btooltip" data-toggle="tooltip" data-placement="top" title="Silver">
																	<a href="#">
																		<span class"checkbox"=""></span>
																	</a>
																</span>
																<span class="color-text">Silver</span>
															</li>
															<li class="swatch-tag ">
																<span style="background-color:#FFA500" class="btooltip" data-toggle="tooltip" data-placement="top" title="Orange">
																	<a href="#">
																		<span class"checkbox"=""></span>
																</a>
																</span>
																<span class="color-text">Orange</span>
															</li>
														</ul>
													</div>
													<div class="tag-group " id="coll-filter-2">
														<p class="title cfc2 open" data-toggle="collapse" data-target="#cfc2">Type
															<span class="ficon">
																<i class="fa fa-minus"></i>
															</span>
														</p>
														<ul id="cfc2" class="collapse in">
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Vintage
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Bohemian
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Chic
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Artsy
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Sexy
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Casual
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Tomboy
																</a>
															</li>
														</ul>
													</div>
													<div class="tag-group " id="coll-filter-3">
														<p class="title cfc3 open" data-toggle="collapse" data-target="#cfc3">Manufacturer
															<span class="ficon">
																<i class="fa fa-minus"></i>
															</span>
														</p>
														<ul id="cfc3" class="collapse in">
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Omega
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Gucci
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Tissot
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Hamilton
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> BB
																</a>
															</li>
														</ul>
													</div>
													<div class="tag-group " id="coll-filter-4">
														<p class="title cfc4 open" data-toggle="collapse" data-target="#cfc4">Price
															<span class="ficon">
																<i class="fa fa-minus"></i>
															</span>
														</p>
														<ul id="cfc4" class="collapse in">
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Under 100
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> 100 - 200
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> 200 - 300
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> 300 - 400
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> 400 - 500
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="sb-wrapper featured-product-wrapper clearfix" data-animate="" data-delay="0">
											<div class="featured-product">
												<h6 class="sb-title no-icon">
													<span>Our Suggestion</span>
												</h6>
												<div class="sb-content featured-product-content beauty-health">
													<div class="element full_width" data-animate="fadeInUp" data-delay="0">
														<div class="grid-view-item">
															<div class="grid-normal-display grid__item one-half small-one-whole">
																<div class="grid__image product-image">
																	<a class="grid-view-item__link" href="./product.html">
																		<img class="grid-view-item__image" src="{{asset('assets/images/product10.png')}}" alt="Etiam lobortis purus dictum">
																		<img class="hover-image" src="{{asset('assets/images/product10x.png')}}" alt="Etiam lobortis purus dictum" title="Etiam lobortis purus dictum">
																	</a>
																	<div class="product-label">
																		<div class="label-element deal-label">
																			<span style="color:#ff5722; background-color: #ffd839;">4% off</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="grid-information style- grid__item one-half small-one-whole">
																<div class="h4 grid-view-item__title">
																	<a href="./product.html">Etiam lobortis purus dictum</a>
																</div>
																<div class="price-and-ship">
																	<div class="grid-view-item__meta grid__item large--one-whole">
																		<s class="product-price__price">
																			<span class="money">$70.00 USD</span>
																		</s>
																		<span class="product-price__price product-price__sale">
																		<span class="product__price">
																			<span class="money">$67.00 USD</span>
																		</span>
																		<span class="product-price__sale-label">On Sale</span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="element full_width" data-animate="fadeInUp" data-delay="100">
														<div class="grid-view-item">
															<div class="grid-normal-display grid__item one-half small-one-whole">
																<div class="grid__image product-image">
																	<a class="grid-view-item__link" href="./product.html">
																		<img class="grid-view-item__image" src="{{asset('assets/images/product11.png')}}" alt="Etiam dan lorem quis">
																		<img class="hover-image" src="{{asset('assets/images/product11x.png')}}" alt="Etiam dan lorem quis" title="Etiam dan lorem quis">
																	</a>
																	<div class="product-label">
																		<div class="label-element new-label">
																			<span style="color:#ffffff; background-color: #0f29f2;">New</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="grid-information style- grid__item one-half small-one-whole">
																<div class="h4 grid-view-item__title">
																	<a href="./product.html">Etiam dan lorem quis</a>
																</div>
																<div class="price-and-ship">
																	<div class="grid-view-item__meta grid__item large--one-whole">
																		<span class="product-price__price">
																			<span class="money">$100.00 USD</span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="element full_width" data-animate="fadeInUp" data-delay="200">
														<div class="grid-view-item">
															<div class="grid-normal-display grid__item one-half small-one-whole">
																<div class="grid__image product-image">
																	<a class="grid-view-item__link" href="./product.html">
																		<img class="grid-view-item__image" src="{{asset('assets/images/product12.png')}}" alt="Etiam dan lorem quis">
																		<img class="hover-image" src="{{asset('assets/images/product12x.png')}}" alt="Etiam dan lorem quis" title="Etiam dan lorem quis">
																	</a>
																	<div class="product-label"></div>
																</div>
															</div>
															<div class="grid-information style- grid__item one-half small-one-whole">
																<div class="h4 grid-view-item__title">
																	<a href="./product.html">Etiam dan lorem quis</a>
																</div>
																<div class="price-and-ship">
																	<div class="grid-view-item__meta grid__item large--one-whole">
																		<span class="product-price__price">
																			<span class="money">$100.00 USD</span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="element full_width" data-animate="fadeInUp" data-delay="300">
														<div class="grid-view-item">
															<div class="grid-normal-display grid__item one-half small-one-whole">
																<div class="grid__image product-image">
																	<a class="grid-view-item__link" href="./product.html">
																		<img class="grid-view-item__image" src="{{asset('assets/images/product13.png')}}" alt="Etiam dan lorem quis">
																		<img class="hover-image" src="{{asset('assets/images/product13x.png')}}" alt="Etiam dan lorem quis" title="Etiam dan lorem quis">
																	</a>
																	<div class="product-label"></div>
																</div>
															</div>
															<div class="grid-information style- grid__item one-half small-one-whole">
																<div class="h4 grid-view-item__title">
																	<a href="./product.html">Etiam dan lorem quis</a>
																</div>
																<div class="price-and-ship">
																	<div class="grid-view-item__meta grid__item large--one-whole">
																		<span class="product-price__price">
																			<span class="money">$100.00 USD</span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="element full_width" data-animate="fadeInUp" data-delay="400">
														<div class="grid-view-item">
															<div class="grid-normal-display grid__item one-half small-one-whole">
																<div class="grid__image product-image">
																	<a class="grid-view-item__link" href="./product.html">
																		<img class="grid-view-item__image" src="{{asset('assets/images/product14.png')}}" alt="Etiam dan lorem quis">
																		<img class="hover-image" src="{{asset('assets/images/product14x.png')}}" alt="Etiam dan lorem quis" title="Etiam dan lorem quis">
																	</a>
																	<div class="product-label">
																		<div class="label-element new-label">
																			<span style="color:#ffffff; background-color: #0f29f2;">New</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="grid-information style- grid__item one-half small-one-whole">
																<div class="h4 grid-view-item__title">
																	<a href="./product.html">Etiam dan lorem quis</a>
																</div>
																<div class="price-and-ship">
																	<div class="grid-view-item__meta grid__item large--one-whole">
																		<span class="product-price__price">
																			<span class="money">$100.00 USD</span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="element full_width" data-animate="fadeInUp" data-delay="0">
														<div class="grid-view-item">
															<div class="grid-normal-display grid__item one-half small-one-whole">
																<div class="grid__image product-image">
																	<a class="grid-view-item__link" href="./product.html">
																		<img class="grid-view-item__image" src="{{asset('assets/images/product15.png')}}" alt="Etiam lobortis purus dictum">
																		<img class="hover-image" src="{{asset('assets/images/product15x.png')}}" alt="Etiam lobortis purus dictum" title="Etiam lobortis purus dictum">
																	</a>
																	<div class="product-label">
																		<div class="label-element deal-label">
																			<span style="color:#ff5722; background-color: #ffd839;">4% off</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="grid-information style- grid__item one-half small-one-whole">
																<div class="h4 grid-view-item__title">
																	<a href="./product.html">Etiam lobortis purus dictum</a>
																</div>
																<div class="price-and-ship">
																	<div class="grid-view-item__meta grid__item large--one-whole">
																		<s class="product-price__price">
																			<span class="money">$70.00 USD</span>
																		</s>
																		<span class="product-price__price product-price__sale">
																		<span class="product__price">
																			<span class="money">$67.00 USD</span>
																		</span>
																		<span class="product-price__sale-label">On Sale</span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="element full_width" data-animate="fadeInUp" data-delay="100">
														<div class="grid-view-item">
															<div class="grid-normal-display grid__item one-half small-one-whole">
																<div class="grid__image product-image">
																	<a class="grid-view-item__link" href="./product.html">
																		<img class="grid-view-item__image" src="{{asset('assets/images/product16.png')}}" alt="Etiam dan lorem quis">
																		<img class="hover-image" src="{{asset('assets/images/product16x.png')}}" alt="Etiam dan lorem quis" title="Etiam dan lorem quis">
																	</a>
																	<div class="product-label">
																		<div class="label-element new-label">
																			<span style="color:#ffffff; background-color: #0f29f2;">New</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="grid-information style- grid__item one-half small-one-whole">
																<div class="h4 grid-view-item__title">
																	<a href="./product.html">Etiam dan lorem quis</a>
																</div>
																<div class="price-and-ship">
																	<div class="grid-view-item__meta grid__item large--one-whole">
																		<span class="product-price__price">
																			<span class="money">$100.00 USD</span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> --}}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>


@stop
