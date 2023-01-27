@extends('layouts.base')

@section('body')

		<nav class="menu-navigation">
			<div class="navigation-bar menu-bar">
				<div class="wrapper wrapper-allcoll">
					<div class="innerpages-allcoll small--hide">
						<div class="wrap_allcoll">
							<div id="html-section-home-vertical-menu" class="html-section index-section revolution-slider">
								<div class="allcollections-title">
									<span class="title">Categories</span>
									<div class="icon-main-toggle navbar-toggle">
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
					</div>
					<div id="html-section-navigation" class="html-section">
						<div data-section-id="navigation" data-section-type="horizontal-menu-section">
							<div class="grid--full grid--table">
								<div class="horizontal-menu desktop-menu medium-down--hide" style="">
									<ul class="site-nav site-nav--init" id="AccessibleNav">
										<li class="site-nav__item site-nav__expanded-item  active" data-url="/">
											<a href="{{route('index')}}" class="site-nav__link">
												<span>Home</span>
											</a>
										</li>
										{{-- <li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown dropdown navigation desknav mega-menu" aria-haspopup="true">
											<a href="./collection.html" class="site-nav__link">
												<span>Collections</span>
												<span class="icon icon-arrow-down" aria-hidden="true"></span>
											</a>
											<ul class="site-nav__dropdown column-5" style="max-width:1220px">
												<li class="site-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
													<ul>
														<li class="site-nav__item site-nav__item-title">Fashion Collection</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Dresses</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Blouses &amp; Shirts</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Jumpsuits</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Jackets</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Trench Coats</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Tops &amp; Tees</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Hoodies</span>
															</a>
														</li>
													</ul>
												</li>
												<li class="site-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
													<ul>
														<li class="site-nav__item site-nav__item-title">Jewelry Collection</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Pendant Necklaces</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Rings</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Hot Earrings</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Popular Bracelets</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Jewelry Sets</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Beads for DIY Jewelry</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Men's Brand Watches</span>
															</a>
														</li>
													</ul>
												</li>
												<li class="site-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
													<ul>
														<li class="site-nav__item site-nav__item-title">Beauty Collection</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Human Hair</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Natural Color Weave</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Pre-Colored Weave</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Nail Polish</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Nail Tools</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Makeup</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Face Care</span>
															</a>
														</li>
													</ul>
												</li>
												<li class="site-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
													<ul>
														<li class="site-nav__item site-nav__item-title">Furniture Collection</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Space Home Store</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Living Room</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Bedroom</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Kitchen</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Bathroom</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Dining Room</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Children's Room</span>
															</a>
														</li>
													</ul>
												</li>
												<li class="site-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
													<ul>
														<li class="site-nav__item site-nav__item-title">Weddings &amp; Events</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Wedding Dresses</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Evening Dresses</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Prom Dresses</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Bridesmaid Dresses</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Flower Girl Dresses</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Cocktail Dresses</span>
															</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown dropdown navigation desknav mega-menu" aria-haspopup="true">
											<a href="./collection.html" class="site-nav__link">
												<span>New Arrivals</span>
												<span class="icon icon-arrow-down" aria-hidden="true"></span>
											</a>
											<ul class="site-nav__dropdown column-5" style="max-width:1220px">
												<li class="mobile-nav__item column-product grid__item small--one-whole medium-up--one-third one-fifth">
													<div class="grid-view-item">
														<div class="grid-normal-display">
															<div class="grid__image product-image">
																<a class="grid-view-item__link" href="./product.html">
																	<img class="grid-view-item__image" src="./assets/images/product1.png" alt="Consequuntur magni dolores">
																	<img class="hover-image" src="./assets/images/product1x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
																</a>
																<div class="product-label">
																	<div class="label-element deal-label">
																		<span style="color:#ff5722; background-color: #ffd839;">20% off</span>
																	</div>
																</div>
															</div>
															<div class="quickbuy">
																<div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">
																	<div class="effect-ajax-cart">
																		<form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
																			<input type="hidden" name="quantity" value="1">
																			<div class="product-single__add-to-cart">
																				<button type="submit" name="add" class="btn AddToCart">
																					<span class="AddToCartText">
																						Add to Cart
																					</span>
																				</button>
																			</div>
																		</form>
																	</div>
																</div>
															</div>
														</div>
														<div class="group-information style-">
															<div class="grid-view-item__vendor">APPLE</div>
															<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
															<div class="price-and-ship">
																<div class="grid-view-item__meta grid__item large--three-quarters">
																	<s class="product-price__price"><span class="money">$24.99 USD</span></s>
																	<span class="product-price__price product-price__sale">
																	<span class="money">$19.99 USD</span>
																	<span class="product-price__sale-label">On Sale</span>
																	</span>
																</div>
																<div class="shipcode grid__item large--one-quarter">
																	<img src="./assets/images/freeshipicon.svg" alt="free shipping icon" />
																</div>
															</div>
															<div class="group-functions">
																<div class="rating-star grid__item one-half">
																	<span class="spr-badge" data-rating="5.0">
																		<span class="spr-starrating spr-badge-starrating">
																			<i class="spr-icon spr-icon-star"></i>
																			<i class="spr-icon spr-icon-star"></i>
																			<i class="spr-icon spr-icon-star"></i>
																			<i class="spr-icon spr-icon-star"></i>
																			<i class="spr-icon spr-icon-star"></i>
																		</span>
																	</span>
																</div>
																<ul class="action-button grid__item one-half">
																	<li class="button-wishlist">
																		<a class="wish-list wlc wl-1552981229660" data-wishlistid="1552981229660" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
																	</li>
																	<li class="button-compare">
																		<a class="wish-list cmc cm-1552981229660" data-compareid="1552981229660" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</li>
												<li class="mobile-nav__item column-product grid__item small--one-whole medium-up--one-third one-fifth">
													<div class="grid-view-item">
														<div class="grid-normal-display">
															<div class="grid__image product-image">
																<a class="grid-view-item__link" href="./product.html">
																	<img class="grid-view-item__image" src="./assets/images/product3.png" alt="Consequuntur magni dolores">
																	<img class="hover-image" src="./assets/images/product3x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
																</a>
															</div>
															<div class="quickbuy">
																<div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">
																	<div class="effect-ajax-cart">
																		<form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
																			<input type="hidden" name="quantity" value="1">
																			<div class="product-single__add-to-cart">
																				<button type="submit" name="add" class="btn AddToCart">
																					<span class="AddToCartText">
																						Add to Cart
																					</span>
																				</button>
																			</div>
																		</form>
																	</div>
																</div>
															</div>
														</div>
														<div class="group-information style-">
															<div class="grid-view-item__vendor">KingStone</div>
															<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
															<div class="price-and-ship">
																<div class="grid-view-item__meta grid__item large--three-quarters">
																	<s class="product-price__price"><span class="money">$24.99 USD</span></s>
																	<span class="product-price__price product-price__sale">
																	<span class="money">$19.99 USD</span>
																	<span class="product-price__sale-label">On Sale</span>
																	</span>
																</div>
																<div class="shipcode grid__item large--one-quarter">

																</div>
															</div>
															<div class="group-functions">
																<div class="rating-star grid__item one-half">
																	<span class="spr-badge" data-rating="5.0">
																		<span class="spr-starrating spr-badge-starrating">
																			<i class="spr-icon spr-icon-star"></i>
																			<i class="spr-icon spr-icon-star"></i>
																			<i class="spr-icon spr-icon-star"></i>
																			<i class="spr-icon spr-icon-star"></i>
																			<i class="spr-icon spr-icon-star"></i>
																		</span>
																	</span>
																</div>
																<ul class="action-button grid__item one-half">
																	<li class="button-wishlist">
																		<a class="wish-list wlc wl-1559895399994" data-wishlistid="1559895399994" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
																	</li>
																	<li class="button-compare">
																		<a class="wish-list cmc cm-1559895399994" data-compareid="1559895399994" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</li>
												<li class="mobile-nav__item column-product grid__item small--one-whole medium-up--one-third one-fifth">
													<div class="grid-view-item">
														<div class="grid-normal-display">
															<div class="grid__image product-image">
																<a class="grid-view-item__link" href="./product.html">
																	<img class="grid-view-item__image" src="./assets/images/product4.png" alt="Consequuntur magni dolores">
																	<img class="hover-image" src="./assets/images/product4x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
																</a>
																<div class="product-label">
																	<div class="label-element deal-label">
																		<span style="color:#ff5722; background-color: #ffd839;">20% off</span>
																	</div>
																</div>
															</div>
															<div class="quickbuy">
																<div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">
																	<div class="effect-ajax-cart">
																		<form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
																			<input type="hidden" name="quantity" value="1">
																			<div class="product-single__add-to-cart">
																				<button type="submit" name="add" class="btn AddToCart">
																					<span class="AddToCartText">
																						Add to Cart
																					</span>
																				</button>
																			</div>
																		</form>
																	</div>
																</div>
															</div>
														</div>
														<div class="group-information style-">
															<div class="grid-view-item__vendor">SAMSUNG</div>
															<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
															<div class="price-and-ship">
																<div class="grid-view-item__meta grid__item large--three-quarters">
																	<s class="product-price__price"><span class="money">$24.99 USD</span></s>
																	<span class="product-price__price product-price__sale">
																	<span class="money">$19.99 USD</span>
																	<span class="product-price__sale-label">On Sale</span>
																	</span>
																</div>
																<div class="shipcode grid__item large--one-quarter">

																</div>
															</div>
															<div class="group-functions">
																<div class="rating-star grid__item one-half">
																	<span class="spr-badge" id="spr_badge_1419620057177" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i></span><span class="spr-badge-caption">No reviews</span>
																	</span>
																</div>
																<ul class="action-button grid__item one-half">
																	<li class="button-wishlist">
																		<a class="wish-list wlc wl-1554438559100" data-wishlistid="1554438559100" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
																	</li>
																	<li class="button-compare">
																		<a class="wish-list cmc cm-1554438559100" data-compareid="1554438559100" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</li>
												<li class="mobile-nav__item column-product grid__item small--one-whole medium-up--one-third one-fifth">
													<div class="grid-view-item">
														<div class="grid-normal-display">
															<div class="grid__image product-image">
																<a class="grid-view-item__link" href="./product.html">
																	<img class="grid-view-item__image" src="./assets/images/product2.png" alt="Consequuntur magni dolores">
																	<img class="hover-image" src="./assets/images/product2x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
																</a>
															</div>
															<div class="quickbuy">
																<div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">
																	<div class="effect-ajax-cart">
																		<form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
																			<input type="hidden" name="quantity" value="1">
																			<div class="product-single__add-to-cart">
																				<button type="submit" name="add" class="btn AddToCart">
																					<span class="AddToCartText">
																						Add to Cart
																					</span>
																				</button>
																			</div>
																		</form>
																	</div>
																</div>
															</div>
														</div>
														<div class="group-information style-">
															<div class="grid-view-item__vendor">BOSCH</div>
															<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
															<div class="price-and-ship">
																<div class="grid-view-item__meta grid__item large--three-quarters">
																	<s class="product-price__price"><span class="money">$24.99 USD</span></s>
																	<span class="product-price__price product-price__sale">
																	<span class="money">$19.99 USD</span>
																	<span class="product-price__sale-label">On Sale</span>
																	</span>
																</div>
																<div class="shipcode grid__item large--one-quarter">

																</div>
															</div>
															<div class="group-functions">
																<div class="rating-star grid__item one-half">
																	<span class="spr-badge" data-rating="5.0">
																		<span class="spr-starrating spr-badge-starrating">
																			<i class="spr-icon spr-icon-star"></i>
																			<i class="spr-icon spr-icon-star"></i>
																			<i class="spr-icon spr-icon-star"></i>
																			<i class="spr-icon spr-icon-star"></i>
																			<i class="spr-icon spr-icon-star"></i>
																		</span>
																	</span>
																</div>
																<ul class="action-button grid__item one-half">
																	<li class="button-wishlist">
																		<a class="wish-list wlc wl-1559895406376" data-wishlistid="1559895406376" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
																	</li>
																	<li class="button-compare">
																		<a class="wish-list cmc cm-1559895406376" data-compareid="1559895406376" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</li>
												<li class="mobile-nav__item column-product grid__item small--one-whole medium-up--one-third one-fifth">
													<div class="grid-view-item">
														<div class="grid-normal-display">
															<div class="grid__image product-image">
																<a class="grid-view-item__link" href="./product.html">
																	<img class="grid-view-item__image" src="./assets/images/product5.png" alt="Consequuntur magni dolores">
																	<img class="hover-image" src="./assets/images/product5x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
																</a>
															</div>
															<div class="quickbuy">
																<div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">
																	<div class="effect-ajax-cart">
																		<form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
																			<input type="hidden" name="quantity" value="1">
																			<div class="product-single__add-to-cart">
																				<button type="submit" name="add" class="btn AddToCart">
																					<span class="AddToCartText">
																						Add to Cart
																					</span>
																				</button>
																			</div>
																		</form>
																	</div>
																</div>
															</div>
														</div>
														<div class="group-information style-">
															<div class="grid-view-item__vendor">ACME</div>
															<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
															<div class="price-and-ship">
																<div class="grid-view-item__meta grid__item large--three-quarters">
																	<s class="product-price__price"><span class="money">$24.99 USD</span></s>
																	<span class="product-price__price product-price__sale">
																	<span class="money">$19.99 USD</span>
																	<span class="product-price__sale-label">On Sale</span>
																	</span>
																</div>
																<div class="shipcode grid__item large--one-quarter">
																	<img src="./assets/images/freeshipicon.svg" alt="free shipping icon" />
																</div>
															</div>
															<div class="group-functions">
																<div class="rating-star grid__item one-half">
																	<span class="spr-badge" data-rating="5.0">
																		<span class="spr-starrating spr-badge-starrating">
																			<i class="spr-icon spr-icon-star"></i>
																			<i class="spr-icon spr-icon-star"></i>
																			<i class="spr-icon spr-icon-star"></i>
																			<i class="spr-icon spr-icon-star"></i>
																			<i class="spr-icon spr-icon-star"></i>
																		</span>
																	</span>
																</div>
																<ul class="action-button grid__item one-half">
																	<li class="button-wishlist">
																		<a class="wish-list wlc wl-1559895404763" data-wishlistid="1559895404763" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
																	</li>
																	<li class="button-compare">
																		<a class="wish-list cmc cm-1559895404763" data-compareid="1559895404763" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown dropdown navigation desknav mega-menu" aria-haspopup="true" data-url="/collections/all">
											<a href="./collection.html" class="site-nav__link">
												<span>Special Deals</span>
												<span class="icon icon-arrow-down" aria-hidden="true"></span>
											</a>
											<ul class="site-nav__dropdown column-5" style="max-width:1220px">
												<li class="site-nav__item column-text grid__item small--one-whole medium-up--one-third one-fifth">
													<div class="heading">Jewelry Collection</div>
													<div class="content">
														<ul>
															<li>Rings</li>
															<li>Hot Earrings</li>
															<li>Popular Bracelets</li>
															<li>Jewelry Sets</li>
															<li>Beads for DIY Jewelry</li>
															<li>Men's Brand Watches</li>
															<li>Pendant Necklaces</li>
														</ul>
													</div>
												</li>
												<li class="site-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
													<ul>
														<li class="site-nav__item site-nav__item-title">Fashion Collection</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Dresses</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Blouses &amp; Shirts</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Jumpsuits</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Jackets</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Trench Coats</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Tops &amp; Tees</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Hoodies</span>
															</a>
														</li>
													</ul>
												</li>
												<li class="site-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
													<ul>
														<li class="site-nav__item site-nav__item-title">Accessories</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Eyewear &amp; Accessories</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Hats &amp; Caps</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Belts &amp; Cummerbunds</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Scarves &amp; Wraps</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Gloves &amp; Mittens</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Prescription Glasses</span>
															</a>
														</li>
														<li class="site-nav__item">
															<a href="./collection.html" class="site-nav__link">
																<span>Scarves &amp; Wraps</span>
															</a>
														</li>
													</ul>
												</li>
												<li class="site-nav__item column-image grid__item small--one-whole medium-up--one-third one-fifth">
													<a href="./collection.html"><img src="./assets/images/mega-img1.png" alt=""></a>
												</li>
												<li class="site-nav__item column-image grid__item small--one-whole medium-up--one-third one-fifth">
													<a href="./collection.html"><img src="./assets/images/mega-img2.png" alt=""></a>
												</li>
											</ul>
										</li>
										<li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown dropdown navigation desknav dropdown-menu" aria-haspopup="true" data-url="/collections/all">
											<a href="./collection.html" class="site-nav__link">
												<span>Pages</span>
												<span class="icon icon-arrow-down" aria-hidden="true"></span>
											</a>
											<ul class="site-nav__dropdown column-1" style="max-width:300px">
												<li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown  dropdown navigation desknav" aria-haspopup="true">
													<a href="./page-about.html" class="site-nav__link">
														<span>About Us</span>
														<span class="icon icon-arrow-down" aria-hidden="true"></span>
													</a>
													<ul class="site-nav__dropdown">
														<li class="li-sub-mega">
															<a tabindex="-1" href="./page-about.html">Services</a>
														</li>
														<li class="li-sub-mega">
															<a tabindex="-1" href="./page-about.html">Shopping Guide</a>
														</li>
														<li class="li-sub-mega">
															<a tabindex="-1" href="./page-about.html">Typography</a>
														</li>
														<li class="li-sub-mega">
															<a tabindex="-1" href="./page-about.html">Store Location</a>
														</li>
													</ul>
												</li>
												<li class="site-nav__item site-nav__expanded-item">
													<a href="./page-contact.html" class="site-nav__link">
														<span>Contact Us</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item">
													<a href="./page-faqs.html" class="site-nav__link">
														<span>FAQ</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item">
													<a href="./page-about.html" class="site-nav__link">
														<span>Heading</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item">
													<a href="./collection.html" class="site-nav__link">
														<span>Sale Off</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item">
													<a href="./page-wishlist.html" class="site-nav__link">
														<span>Wishlist</span>
													</a>
												</li>
											</ul>
										</li> --}}
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
													<a href="{{route('index')}}" class="site-nav__link">
														<span>Home</span>
													</a>
												</li>
												<li class="mobile-nav__item mobile-nav__item-menulv1 mega-menu" data-father="none" data-url="/collections/all">
													<div class="mobile-nav__has-sublist">
														<a href="./collection.html" class="mobile-nav__link">Collections</a>
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
																<li class="site-nav__item site-nav__item-title">Fashion Collection</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Dresses</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Blouses &amp; Shirts</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Jumpsuits</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Jackets</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Trench Coats</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Tops &amp; Tees</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Hoodies</span>
																	</a>
																</li>
															</ul>
														</li>

														<li class="mobile-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
															<ul>
																<li class="site-nav__item site-nav__item-title">Jewelry Collection</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Pendant Necklaces</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Rings</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Hot Earrings</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Popular Bracelets</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Jewelry Sets</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Beads for DIY Jewelry</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Men's Brand Watches</span>
																	</a>
																</li>
															</ul>
														</li>

														<li class="mobile-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
															<ul>
																<li class="site-nav__item site-nav__item-title">Beauty Collection</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Human Hair</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Natural Color Weave</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Pre-Colored Weave</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Nail Polish</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Nail Tools</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Makeup</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Face Care</span>
																	</a>
																</li>
															</ul>
														</li>

														<li class="mobile-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
															<ul>
																<li class="site-nav__item site-nav__item-title">Furniture Collection</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Space Home Store</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Living Room</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Bedroom</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Kitchen</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Bathroom</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Dining Room</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Children's Room</span>
																	</a>
																</li>
															</ul>
														</li>

														<li class="mobile-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
															<ul>
																<li class="site-nav__item site-nav__item-title">Weddings &amp; Events</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Wedding Dresses</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Evening Dresses</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Prom Dresses</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Bridesmaid Dresses</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Flower Girl Dresses</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Cocktail Dresses</span>
																	</a>
																</li>
															</ul>
														</li>
													</ul>
												</li>
												<li class="mobile-nav__item mobile-nav__item-menulv1 mega-menu" data-father="none" data-url="/collections/all">
													<div class="mobile-nav__has-sublist">
														<a href="./collection.html" class="mobile-nav__link">New Arrivals</a>
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
														<li class="mobile-nav__item column-product grid__item small--one-whole medium-up--one-third one-fifth">
															<div class="grid-view-item">
																<div class="grid-normal-display">
																	<div class="grid__image product-image">
																		<a class="grid-view-item__link" href="./product.html">
																			<img class="grid-view-item__image" src="./assets/images/product1.png" alt="Consequuntur magni dolores">
																			<img class="hover-image" src="./assets/images/product1x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
																		</a>
																		<div class="product-label">
																			<div class="label-element deal-label">
																				<span style="color:#ff5722; background-color: #ffd839;">20% off</span>
																			</div>
																		</div>
																	</div>
																	<div class="quickbuy">
																		<div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">
																			<div class="effect-ajax-cart">
																				<form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
																					<input type="hidden" name="quantity" value="1">
																					<div class="product-single__add-to-cart">
																						<button type="submit" name="add" class="btn AddToCart">
																							<span class="AddToCartText">
																								Add to Cart
																							</span>
																						</button>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="group-information style-">
																	<div class="grid-view-item__vendor">APPLE</div>
																	<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
																	<div class="price-and-ship">
																		<div class="grid-view-item__meta grid__item large--three-quarters">
																			<s class="product-price__price"><span class="money">$24.99 USD</span></s>
																			<span class="product-price__price product-price__sale">
																			<span class="money">$19.99 USD</span>
																			<span class="product-price__sale-label">On Sale</span>
																			</span>
																		</div>
																		<div class="shipcode grid__item large--one-quarter">
																			<img src="./assets/images/freeshipicon.svg" alt="free shipping icon" />
																		</div>
																	</div>
																	<div class="group-functions">
																		<div class="rating-star grid__item one-half">
																			<span class="spr-badge" data-rating="5.0">
																				<span class="spr-starrating spr-badge-starrating">
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																				</span>
																			</span>
																		</div>
																		<ul class="action-button grid__item one-half">
																			<li class="button-wishlist">
																				<a class="wish-list wlc wl-1559895403066" data-wishlistid="1559895403066" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
																			</li>
																			<li class="button-compare">
																				<a class="wish-list cmc cm-1559895403066" data-compareid="1559895403066" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</li>
														<li class="mobile-nav__item column-product grid__item small--one-whole medium-up--one-third one-fifth">
															<div class="grid-view-item">
																<div class="grid-normal-display">
																	<div class="grid__image product-image">
																		<a class="grid-view-item__link" href="./product.html">
																			<img class="grid-view-item__image" src="./assets/images/product3.png" alt="Consequuntur magni dolores">
																			<img class="hover-image" src="./assets/images/product3x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
																		</a>
																	</div>
																	<div class="quickbuy">
																		<div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">
																			<div class="effect-ajax-cart">
																				<form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
																					<input type="hidden" name="quantity" value="1">
																					<div class="product-single__add-to-cart">
																						<button type="submit" name="add" class="btn AddToCart">
																							<span class="AddToCartText">
																								Add to Cart
																							</span>
																						</button>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="group-information style-">
																	<div class="grid-view-item__vendor">KingStone</div>
																	<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
																	<div class="price-and-ship">
																		<div class="grid-view-item__meta grid__item large--three-quarters">
																			<s class="product-price__price"><span class="money">$24.99 USD</span></s>
																			<span class="product-price__price product-price__sale">
																			<span class="money">$19.99 USD</span>
																			<span class="product-price__sale-label">On Sale</span>
																			</span>
																		</div>
																		<div class="shipcode grid__item large--one-quarter">

																		</div>
																	</div>
																	<div class="group-functions">
																		<div class="rating-star grid__item one-half">
																			<span class="spr-badge" data-rating="5.0">
																				<span class="spr-starrating spr-badge-starrating">
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																				</span>
																			</span>
																		</div>
																		<ul class="action-button grid__item one-half">
																			<li class="button-wishlist">
																				<a class="wish-list wlc wl-1559895398140" data-wishlistid="1559895398140" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
																			</li>
																			<li class="button-compare">
																				<a class="wish-list cmc cm-1559895398140" data-compareid="1559895398140" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</li>
														<li class="mobile-nav__item column-product grid__item small--one-whole medium-up--one-third one-fifth">
															<div class="grid-view-item">
																<div class="grid-normal-display">
																	<div class="grid__image product-image">
																		<a class="grid-view-item__link" href="./product.html">
																			<img class="grid-view-item__image" src="./assets/images/product4.png" alt="Consequuntur magni dolores">
																			<img class="hover-image" src="./assets/images/product4x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
																		</a>
																		<div class="product-label">
																			<div class="label-element deal-label">
																				<span style="color:#ff5722; background-color: #ffd839;">20% off</span>
																			</div>
																		</div>
																	</div>
																	<div class="quickbuy">
																		<div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">
																			<div class="effect-ajax-cart">
																				<form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
																					<input type="hidden" name="quantity" value="1">
																					<div class="product-single__add-to-cart">
																						<button type="submit" name="add" class="btn AddToCart">
																							<span class="AddToCartText">
																								Add to Cart
																							</span>
																						</button>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="group-information style-">
																	<div class="grid-view-item__vendor">SAMSUNG</div>
																	<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
																	<div class="price-and-ship">
																		<div class="grid-view-item__meta grid__item large--three-quarters">
																			<s class="product-price__price"><span class="money">$24.99 USD</span></s>
																			<span class="product-price__price product-price__sale">
																			<span class="money">$19.99 USD</span>
																			<span class="product-price__sale-label">On Sale</span>
																			</span>
																		</div>
																		<div class="shipcode grid__item large--one-quarter">

																		</div>
																	</div>
																	<div class="group-functions">
																		<div class="rating-star grid__item one-half">
																			<span class="spr-badge" data-rating="5.0">
																				<span class="spr-starrating spr-badge-starrating">
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																				</span>
																			</span>
																		</div>
																		<ul class="action-button grid__item one-half">
																			<li class="button-wishlist">
																				<a class="wish-list wlc wl-1559895396466" data-wishlistid="1559895396466" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
																			</li>
																			<li class="button-compare">
																				<a class="wish-list cmc cm-1559895396466" data-compareid="1559895396466" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</li>
														<li class="mobile-nav__item column-product grid__item small--one-whole medium-up--one-third one-fifth">
															<div class="grid-view-item">
																<div class="grid-normal-display">
																	<div class="grid__image product-image">
																		<a class="grid-view-item__link" href="./product.html">
																			<img class="grid-view-item__image" src="./assets/images/product2.png" alt="Consequuntur magni dolores">
																			<img class="hover-image" src="./assets/images/product2x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
																		</a>
																	</div>
																	<div class="quickbuy">
																		<div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">
																			<div class="effect-ajax-cart">
																				<form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
																					<input type="hidden" name="quantity" value="1">
																					<div class="product-single__add-to-cart">
																						<button type="submit" name="add" class="btn AddToCart">
																							<span class="AddToCartText">
																								Add to Cart
																							</span>
																						</button>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="group-information style-">
																	<div class="grid-view-item__vendor">BOSCH</div>
																	<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
																	<div class="price-and-ship">
																		<div class="grid-view-item__meta grid__item large--three-quarters">
																			<s class="product-price__price"><span class="money">$24.99 USD</span></s>
																			<span class="product-price__price product-price__sale">
																			<span class="money">$19.99 USD</span>
																			<span class="product-price__sale-label">On Sale</span>
																			</span>
																		</div>
																		<div class="shipcode grid__item large--one-quarter">

																		</div>
																	</div>
																	<div class="group-functions">
																		<div class="rating-star grid__item one-half">
																			<span class="spr-badge" data-rating="5.0">
																				<span class="spr-starrating spr-badge-starrating">
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																				</span>
																			</span>
																		</div>
																		<ul class="action-button grid__item one-half">
																			<li class="button-wishlist">
																				<a class="wish-list wlc wl-1559895394200" data-wishlistid="1559895394200" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
																			</li>
																			<li class="button-compare">
																				<a class="wish-list cmc cm-1559895394200" data-compareid="1559895394200" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</li>
														<li class="mobile-nav__item column-product grid__item small--one-whole medium-up--one-third one-fifth">
															<div class="grid-view-item">
																<div class="grid-normal-display">
																	<div class="grid__image product-image">
																		<a class="grid-view-item__link" href="./product.html">
																			<img class="grid-view-item__image" src="./assets/images/product5.png" alt="Consequuntur magni dolores">
																			<img class="hover-image" src="./assets/images/product5x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
																		</a>
																	</div>
																	<div class="quickbuy">
																		<div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">
																			<div class="effect-ajax-cart">
																				<form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
																					<input type="hidden" name="quantity" value="1">
																					<div class="product-single__add-to-cart">
																						<button type="submit" name="add" class="btn AddToCart">
																							<span class="AddToCartText">
																								Add to Cart
																							</span>
																						</button>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="group-information style-">
																	<div class="grid-view-item__vendor">ACME</div>
																	<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
																	<div class="price-and-ship">
																		<div class="grid-view-item__meta grid__item large--three-quarters">
																			<s class="product-price__price"><span class="money">$24.99 USD</span></s>
																			<span class="product-price__price product-price__sale">
																			<span class="money">$19.99 USD</span>
																			<span class="product-price__sale-label">On Sale</span>
																			</span>
																		</div>
																		<div class="shipcode grid__item large--one-quarter">
																			<img src="./assets/images/freeshipicon.svg" alt="free shipping icon" />
																		</div>
																	</div>
																	<div class="group-functions">
																		<div class="rating-star grid__item one-half">
																			<span class="spr-badge" data-rating="5.0">
																				<span class="spr-starrating spr-badge-starrating">
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																				</span>
																			</span>
																		</div>
																		<ul class="action-button grid__item one-half">
																			<li class="button-wishlist">
																				<a class="wish-list wlc wl-1559895387337" data-wishlistid="1559895387337" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
																			</li>
																			<li class="button-compare">
																				<a class="wish-list cmc cm-1559895387337" data-compareid="1559895387337" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li class="mobile-nav__item mobile-nav__item-menulv1 mega-menu" data-father="none" data-url="/collections/all">
													<div class="mobile-nav__has-sublist">
														<a href="./collection.html" class="mobile-nav__link">Special Deals</a>
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
														<li class="mobile-nav__item column-text grid__item small--one-whole medium-up--one-third one-fifth">
															<div class="heading">Text Column</div>
															<div class="content">
																<ul>
																	<li>Rings</li>
																	<li>Hot Earrings</li>
																	<li>Popular Bracelets</li>
																	<li>Jewelry Sets</li>
																	<li>Beads for DIY Jewelry</li>
																	<li>Men's Brand Watches</li>
																	<li>Pendant Necklaces</li>
																</ul>
															</div>
														</li>
														<li class="mobile-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
															<ul>
																<li class="site-nav__item site-nav__item-title">Fashion Collection</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Dresses</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Blouses &amp; Shirts</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Jumpsuits</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Jackets</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Trench Coats</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Tops &amp; Tees</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Hoodies</span>
																	</a>
																</li>
															</ul>
														</li>
														<li class="mobile-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
															<ul>
																<li class="site-nav__item site-nav__item-title">Accessories</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Eyewear &amp; Accessories</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Hats &amp; Caps</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Belts &amp; Cummerbunds</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Scarves &amp; Wraps</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Gloves &amp; Mittens</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="./collection.html" class="site-nav__link">
																		<span>Prescription Glasses</span>
																	</a>
																</li>
															</ul>
														</li>
														<li class="mobile-nav__item column-image grid__item small--one-whole medium-up--one-third one-fifth">
															<a href="./collection.html"><img src="./assets/images/mega-img1.png" alt=""></a>
														</li>
														<li class="mobile-nav__item column-image grid__item small--one-whole medium-up--one-third one-fifth">
															<a href="./collection.html"><img src="./assets/images/mega-img1.png" alt=""></a>
														</li>
													</ul>
												</li>
												<li class="mobile-nav__item mobile-nav__item-menulv1 dropdown-menu" data-father="none" data-url="/collections/all">
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
															<a href="https://aacells.com/pages/contact-us" class="site-nav__link" target="_blank">
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
												</li>
												<li class="mobile-nav__item" data-url="/pages/contact-us">
													<a href="https://aacells.com/pages/contact-us" class="site-nav__link" target="_blank">
														<span>Contact Us</span>
													</a>
												</li>
											</ul>
										</div>
										<div class="mobileNav-information">
											<div class="mobileNav__item nav-customerlink">
												<a class="site-nav__link site-nav__link--icon js-login-modal" data-mfp-src="#LoginModal">
													<span class="text">My Account</span>
												</a>
											</div>
											<div class="mobileNav__item nav-compare">
												<a href="./pages-compare.html">My Compare</a>
											</div>
											<div class="mobileNav__item nav-wishlist">
												<a href="./page-wishlist.html">My Wishlist</a>
											</div>
										</div>
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
									<span class="title">Categories</span>
									<div class="icon-main-toggle navbar-toggle">
										<i class="fa fa-caret-down" aria-hidden="true"></i>
									</div>
								</div>
								<div class="allcollections-content have-icon">
									<ul class="sdcollections-list">
										<li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long" aria-haspopup="true">
											<p class="site-nav__link">
												<span class="site-nav__icon icon-1">
													  <img src="./assets/images/cocktail-dress.png" alt="">
													</span>
												<a href="./collection.html" class="site-nav__text">Women’s Clothing</a>
												<span class="fa fa-caret-right click_arrow" aria-hidden="true"></span>
											</p>
											<ul class="site-nav__dropdown" style="z-index: 999;">
												<li class="column-1 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Hot Categories</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Dresses</a></li>
																<li class="site-nav__link"><a href="./collection.html">Jackets &amp; Coats</a></li>
																<li class="site-nav__link"><a href="./collection.html">Sweaters</a></li>
																<li class="site-nav__link"><a href="./collection.html">Jeans</a></li>
																<li class="site-nav__link"><a href="./collection.html">Suits &amp; Sets</a></li>
																<li class="site-nav__link"><a href="./collection.html">Blouses &amp; Shirts</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Bottoms</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Skirts</a></li>
																<li class="site-nav__link"><a href="./collection.html">Leggings</a></li>
																<li class="site-nav__link"><a href="./collection.html">Jeans</a></li>
																<li class="site-nav__link"><a href="./collection.html">Pants &amp; Capris</a></li>
																<li class="site-nav__link"><a href="./collection.html">Wide Leg Pants</a></li>
																<li class="site-nav__link"><a href="./collection.html">Shorts</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./collection.html">New arrival plus size</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="./assets/images/product1.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-2 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Outwear &amp; Jackets</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Basic Jackets</a></li>
																<li class="site-nav__link"><a href="./collection.html">Real Fur</a></li>
																<li class="site-nav__link"><a href="./collection.html">Down Coats</a></li>
																<li class="site-nav__link"><a href="./collection.html">Blazers</a></li>
																<li class="site-nav__link"><a href="./collection.html">Trench</a></li>
																<li class="site-nav__link"><a href="./collection.html">Parkas</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Tops &amp; Sets</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Tank Tops</a></li>
																<li class="site-nav__link"><a href="./collection.html">Suits &amp; Sets</a></li>
																<li class="site-nav__link"><a href="./collection.html">Jumpsuits</a></li>
																<li class="site-nav__link"><a href="./collection.html">Rompers</a></li>
																<li class="site-nav__link"><a href="./collection.html">Intimates</a></li>
																<li class="site-nav__link"><a href="./collection.html">Sleep &amp; Lounge</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./collection.html">Sweater Collection</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="assets/images/product2.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-3 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Weddings &amp; Events</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Wedding Dresses</a></li>
																<li class="site-nav__link"><a href="./collection.html">Evening Dresses</a></li>
																<li class="site-nav__link"><a href="./collection.html">Prom Dresses</a></li>
																<li class="site-nav__link"><a href="./collection.html">Bridesmaid Dresses</a></li>
																<li class="site-nav__link"><a href="./collection.html">Flower Girl Dresses</a></li>
																<li class="site-nav__link"><a href="./collection.html">Cocktail Dresses</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Accessories</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Eyewear &amp; Accessories</a></li>
																<li class="site-nav__link"><a href="./collection.html">Hats &amp; Caps</a></li>
																<li class="site-nav__link"><a href="./collection.html">Belts &amp; Cummerbunds</a></li>
																<li class="site-nav__link"><a href="./collection.html">Scarves &amp; Wraps</a></li>
																<li class="site-nav__link"><a href="./collection.html">Gloves &amp; Mittens</a></li>
																<li class="site-nav__link"><a href="./collection.html">Prescription Glasses</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./product.html">High Quality Formal Dresses</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="assets/images/product3.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long" aria-haspopup="true">
											<p class="site-nav__link">
												<span class="site-nav__icon icon-2">
													  <img src="./assets/images/cotton-polo-shirt.png" alt="">
													</span>
												<a href="./collection.html" class="site-nav__text">Men’s Clothing</a>
												<span class="fa fa-caret-right click_arrow" aria-hidden="true"></span>
											</p>
											<ul class="site-nav__dropdown" style="z-index: 999;">
												<li class="column-1 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Hot Sale</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Hoodies &amp; Sweatshirts</a></li>
																<li class="site-nav__link"><a href="./collection.html">Jackets</a></li>
																<li class="site-nav__link"><a href="./collection.html">T-Shirts</a></li>
																<li class="site-nav__link"><a href="./collection.html">Shirts</a></li>
																<li class="site-nav__link"><a href="./collection.html">Sweaters</a></li>
																<li class="site-nav__link"><a href="./collection.html">Socks</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Bottoms</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Skirts</a></li>
																<li class="site-nav__link"><a href="./collection.html">Leggings</a></li>
																<li class="site-nav__link"><a href="./collection.html">Jeans</a></li>
																<li class="site-nav__link"><a href="./collection.html">Pants &amp; Capris</a></li>
																<li class="site-nav__link"><a href="./collection.html">Wide Leg Pants</a></li>
																<li class="site-nav__link"><a href="./collection.html">Shorts</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./product.html">Workout &amp; Training Clothes</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="./assets/images/product4.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-2 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Underwear &amp; Loungewear</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Boxers</a></li>
																<li class="site-nav__link"><a href="./collection.html">Briefs</a></li>
																<li class="site-nav__link"><a href="./collection.html">Long Johns</a></li>
																<li class="site-nav__link"><a href="./collection.html">Men's Sleep &amp; Lounge</a></li>
																<li class="site-nav__link"><a href="./collection.html">Pajama Sets</a></li>
																<li class="site-nav__link"><a href="./collection.html">Robes</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Outwear &amp; Jackets</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Basic Jackets</a></li>
																<li class="site-nav__link"><a href="./collection.html">Real Fur</a></li>
																<li class="site-nav__link"><a href="./collection.html">Down Coats</a></li>
																<li class="site-nav__link"><a href="./collection.html">Blazers</a></li>
																<li class="site-nav__link"><a href="./collection.html">Trench</a></li>
																<li class="site-nav__link"><a href="./collection.html">Parkas</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./product.html">3D Printed Hoodies</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="./assets/images/product5.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-3 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Accessories</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Scarves</a></li>
																<li class="site-nav__link"><a href="./collection.html">Skullies &amp; Beanies</a></li>
																<li class="site-nav__link"><a href="./collection.html">Prescription Glasses</a></li>
																<li class="site-nav__link"><a href="./collection.html">Gloves &amp; Mittens</a></li>
																<li class="site-nav__link"><a href="./collection.html">Belts</a></li>
																<li class="site-nav__link"><a href="./collection.html">Bomber Hats</a></li>
																<li class="site-nav__link"><a href="./collection.html">Fedoras</a></li>
																<li class="site-nav__link"><a href="./collection.html">Berets</a></li>
																<li class="site-nav__link"><a href="./collection.html">Baseball Caps</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Novelty &amp; Special Use</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Cosplay Costumes</a></li>
																<li class="site-nav__link"><a href="./collection.html">Stage &amp; Dance Wear</a></li>
																<li class="site-nav__link"><a href="./collection.html">Exotic Apparel</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./product.html">Sunglasses</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="./assets/images/product6.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3" aria-haspopup="true">
											<p class="site-nav__link">
												<span class="site-nav__icon icon-3">
													  <img src="./assets/images/mobile-phone-popular-model-nexus-5.png" alt="">
													</span>
												<a href="./collection.html" class="site-nav__text">Cellphones &amp; Accessories</a>
												<span class="fa fa-caret-right click_arrow" aria-hidden="true"></span>
											</p>
											<ul class="site-nav__dropdown" style="z-index: 999;">
												<li class="column-1 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Mobile Phones</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Octa Core</a></li>
																<li class="site-nav__link"><a href="./collection.html">Deca Core</a></li>
																<li class="site-nav__link"><a href="./collection.html">Single SIM Card</a></li>
																<li class="site-nav__link"><a href="./collection.html">Dual SIM Card</a></li>
																<li class="site-nav__link"><a href="./collection.html">4GB RAM</a></li>
																<li class="site-nav__link"><a href="./collection.html">5.5-inch Display</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Mobile Phone Parts</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Mobile Phone LCDs</a></li>
																<li class="site-nav__link"><a href="./collection.html">Mobile Phone Batteries</a></li>
																<li class="site-nav__link"><a href="./collection.html">Mobile Phone Housings</a></li>
																<li class="site-nav__link"><a href="./collection.html">Mobile Phone Touch Panel</a></li>
																<li class="site-nav__link"><a href="./collection.html">Flex Cables</a></li>
																<li class="site-nav__link"><a href="./collection.html">SIM Card &amp; Tools</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./product.html">Samsung Smartphones</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="./assets/images/product7.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-2 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Cases &amp; Covers</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Patterned Cases</a></li>
																<li class="site-nav__link"><a href="./collection.html">Wallet Cases</a></li>
																<li class="site-nav__link"><a href="./collection.html">Waterproof Cases</a></li>
																<li class="site-nav__link"><a href="./collection.html">Leather Cases</a></li>
																<li class="site-nav__link"><a href="./collection.html">Silicone Cases</a></li>
																<li class="site-nav__link"><a href="./collection.html">Flip Cases</a></li>
																<li class="site-nav__link"><a href="./collection.html">iPhone X Cases</a></li>
																<li class="site-nav__link"><a href="./collection.html">Cases For iPhone 8/8 Plus </a></li>
																<li class="site-nav__link"><a href="./collection.html">Cases For iPhone 7/7 Plus</a></li>
																<li class="site-nav__link"><a href="./collection.html">Cases For iPhone 6/6 Plus</a></li>
																<li class="site-nav__link"><a href="./collection.html">Galaxy S8 Cases</a></li>
																<li class="site-nav__link"><a href="./collection.html">Galaxy S7 Cases</a></li>
																<li class="site-nav__link"><a href="./collection.html">Xiaomi Cases</a></li>
																<li class="site-nav__link"><a href="./collection.html">Huawei Cases</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./product.html">New iPhone</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="./assets/images/product8.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>

												<li class="column-3 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Mobile Phone Accessories</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Power Bank</a></li>
																<li class="site-nav__link"><a href="./collection.html">Screen Protectors</a></li>
																<li class="site-nav__link"><a href="./collection.html">Mobile Phone Cables</a></li>
																<li class="site-nav__link"><a href="./collection.html">Mobile Phone Chargers</a></li>
																<li class="site-nav__link"><a href="./collection.html">Holders &amp; Stands</a></li>
																<li class="site-nav__link"><a href="./collection.html">Mobile Phone Lenses</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Hot Categories</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Car Chargers</a></li>
																<li class="site-nav__link"><a href="./collection.html">Quick Chargers</a></li>
																<li class="site-nav__link"><a href="./collection.html">iPhone Cables</a></li>
																<li class="site-nav__link"><a href="./collection.html">Type C Cables</a></li>
																<li class="site-nav__link"><a href="./collection.html">20000mAh Power Bank</a></li>
																<li class="site-nav__link"><a href="./collection.html">Battery Charger Cases</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./product.html">Power Bank</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="./assets/images/product9.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long" aria-haspopup="true">
											<p class="site-nav__link">
												<span class="site-nav__icon icon-4">
													  <img src="./assets/images/web.png" alt="">
													</span>
												<a href="./collection.html" class="site-nav__text">Computer, Office, Security</a>
												<span class="fa fa-caret-right click_arrow" aria-hidden="true"></span>
											</p>
											<ul class="site-nav__dropdown" style="z-index: 999;">
												<li class="column-1 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Laptops</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Gaming Laptops</a></li>
																<li class="site-nav__link"><a href="./collection.html">Tablets</a></li>
																<li class="site-nav__link"><a href="./collection.html">2 in 1 Tablets</a></li>
																<li class="site-nav__link"><a href="./collection.html">Phone Call Tablets</a></li>
																<li class="site-nav__link"><a href="./collection.html">iPad</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Tablet &amp; Laptop Accessories</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Laptop Bags &amp; Cases</a></li>
																<li class="site-nav__link"><a href="./collection.html">Laptop Batteries</a></li>
																<li class="site-nav__link"><a href="./collection.html">Tablet Accessories</a></li>
																<li class="site-nav__link"><a href="./collection.html">Tablet LCD Screens</a></li>
																<li class="site-nav__link"><a href="./collection.html">Tablet Cases</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./product.html">Gaming Laptops</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="./assets/images/product10.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-2 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Security &amp; Protection</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Surveillance Products</a></li>
																<li class="site-nav__link"><a href="./collection.html">Access Control</a></li>
																<li class="site-nav__link"><a href="./collection.html">Fire Protection</a></li>
																<li class="site-nav__link"><a href="./collection.html">Workplace Safety Supplies</a></li>
																<li class="site-nav__link"><a href="./collection.html">Alarm &amp; Sensor</a></li>
																<li class="site-nav__link"><a href="./collection.html">Door Intercom</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Storage Devices</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">USB Flash Drives</a></li>
																<li class="site-nav__link"><a href="./collection.html">Memory Cards</a></li>
																<li class="site-nav__link"><a href="./collection.html">External Hard Drives</a></li>
																<li class="site-nav__link"><a href="./collection.html">HDD Enclosures</a></li>
																<li class="site-nav__link"><a href="./collection.html">SSD</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./product.html">IP Cameras</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="./assets/images/product11.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-3 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Office Electronics</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Printer Supplies</a></li>
																<li class="site-nav__link"><a href="./collection.html">Office &amp; School Supplies</a></li>
																<li class="site-nav__link"><a href="./collection.html">3D Printers</a></li>
																<li class="site-nav__link"><a href="./collection.html">Printers</a></li>
																<li class="site-nav__link"><a href="./collection.html">Scanners</a></li>
																<li class="site-nav__link"><a href="./collection.html">3D Pens</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Networking</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Wireless Routers</a></li>
																<li class="site-nav__link"><a href="./collection.html">Network Cards</a></li>
																<li class="site-nav__link"><a href="./collection.html">3G Modems</a></li>
																<li class="site-nav__link"><a href="./collection.html">Modem-Router Combos</a></li>
																<li class="site-nav__link"><a href="./collection.html">Networking Tools</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./product.html">Mouse &amp; Keyboards</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="./assets/images/product12.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long" aria-haspopup="true">
											<p class="site-nav__link">
												<span class="site-nav__icon icon-5">
													  <img src="./assets/images/fan.png" alt="">
													</span>
												<a href="./collection.html" class="site-nav__text">Consumer Electronics</a>
												<span class="fa fa-caret-right click_arrow" aria-hidden="true"></span>
											</p>
											<ul class="site-nav__dropdown" style="z-index: 999;">
												<li class="column-1 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Accessories &amp; Parts</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Digital Cables</a></li>
																<li class="site-nav__link"><a href="./collection.htmlsearch">Electronic Cigarettes</a></li>
																<li class="site-nav__link"><a href="./collection.html">Batteries</a></li>
																<li class="site-nav__link"><a href="./collection.html">Charger</a></li>
																<li class="site-nav__link"><a href="./collection.html">Home Electronic Accessories</a></li>
																<li class="site-nav__link"><a href="./collection.html">Digital Gear Bags</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Home Audio &amp; Video</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Television</a></li>
																<li class="site-nav__link"><a href="./collection.html">TV Receivers</a></li>
																<li class="site-nav__link"><a href="./collection.html">Projectors</a></li>
																<li class="site-nav__link"><a href="./collection.html">Audio Amplifiers</a></li>
																<li class="site-nav__link"><a href="./collection.html">TV Sticks</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./product.html">Drones</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="./assets/images/product13.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-2 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Camera &amp; Photo</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Digital Cameras</a></li>
																<li class="site-nav__link"><a href="./collection.html">Camcorders</a></li>
																<li class="site-nav__link"><a href="./collection.html">Camera Drones</a></li>
																<li class="site-nav__link"><a href="./collection.html">Action Cameras</a></li>
																<li class="site-nav__link"><a href="./collection.html">Photo Studio</a></li>
																<li class="site-nav__link"><a href="./collection.html">Camera &amp; Photo Accessories</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Portable Audio &amp; Video</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Earphones &amp; Headphones</a></li>
																<li class="site-nav__link"><a href="./collection.html">Speakers</a></li>
																<li class="site-nav__link"><a href="./collection.html">MP3 Players</a></li>
																<li class="site-nav__link"><a href="./collection.html">Microphones</a></li>
																<li class="site-nav__link"><a href="./collection.html">VR/AR Devices</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./product.html">VR/AR Devices</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="./assets/images/product14.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-3 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Smart Electronics</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Wearable Devices</a></li>
																<li class="site-nav__link"><a href="./collection.html">Smart Home Appliances</a></li>
																<li class="site-nav__link"><a href="./collection.html">Smart Wearable Accessories</a></li>
																<li class="site-nav__link"><a href="./collection.html">Smart Remote Controls</a></li>
																<li class="site-nav__link"><a href="./collection.html">Smart Watches</a></li>
																<li class="site-nav__link"><a href="./collection.html">Smart Wristbands</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Video Games</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Handheld Game Players</a></li>
																<li class="site-nav__link"><a href="./collection.html">Gamepads</a></li>
																<li class="site-nav__link"><a href="./collection.html">Joysticks</a></li>
																<li class="site-nav__link"><a href="./collection.html">Stickers</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./product.html">Smart Watches</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="./assets/images/product15.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long" aria-haspopup="true">
											<p class="site-nav__link">
												<span class="site-nav__icon icon-6">
													  <img src="./assets/images/diamond.png" alt="">
													</span>
												<a href="./collection.html" class="site-nav__text">Jewelry &amp; Watches</a>
												<span class="fa fa-caret-right click_arrow" aria-hidden="true"></span>
											</p>
											<ul class="site-nav__dropdown" style="z-index: 999;">
												<li class="column-1 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Fine Jewelry</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">925 Silver Jewelry </a></li>
																<li class="site-nav__link"><a href="./collection.html">Diamond Jewelry</a></li>
																<li class="site-nav__link"><a href="./collection.html">Pearls Jewelry</a></li>
																<li class="site-nav__link"><a href="./collection.html">Various Gemstones</a></li>
																<li class="site-nav__link"><a href="./collection.html">K-Gold</a></li>
																<li class="site-nav__link"><a href="./collection.html">Fine Earrings</a></li>
																<li class="site-nav__link"><a href="./collection.html">Fine Jewelry Sets</a></li>
																<li class="site-nav__link"><a href="./collection.html">Men's Fine Jewelry</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Wedding &amp; Engagement</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Bridal Jewelry Sets</a></li>
																<li class="site-nav__link"><a href="./collection.html">Engagement Rings</a></li>
																<li class="site-nav__link"><a href="./collection.html">Wedding Hair Jewelry</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./product.html">Street Style Jewelry</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="./assets/images/product16.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-2 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Men's Watches</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Mechanical Watches</a></li>
																<li class="site-nav__link"><a href="./collection.html">Quartz Watches</a></li>
																<li class="site-nav__link"><a href="./collection.html">Digital Watches</a></li>
																<li class="site-nav__link"><a href="./collection.html">Dual Display Watches</a></li>
																<li class="site-nav__link"><a href="./collection.html">Sports Watches</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Women's Watches</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Sports Watches</a></li>
																<li class="site-nav__link"><a href="./collection.html">Women's Bracelet Watches</a></li>
																<li class="site-nav__link"><a href="./collection.html">Dress Watches</a></li>
																<li class="site-nav__link"><a href="./collection.html">Lovers' Watches</a></li>
																<li class="site-nav__link"><a href="./collection.html">Children's Watches</a></li>
																<li class="site-nav__link"><a href="./collection.html">Creative Watches</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./product.html">Chinese Brand Watches</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="./assets/images/product17.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-3 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Fashion Jewelry</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Necklaces &amp; Pendants</a></li>
																<li class="site-nav__link"><a href="./collection.html">Hot Rings</a></li>
																<li class="site-nav__link"><a href="./collection.html">Trendy Earrings</a></li>
																<li class="site-nav__link"><a href="./collection.html">Bracelets &amp; Bangles</a></li>
																<li class="site-nav__link"><a href="./collection.html">Men's Cuff Links</a></li>
																<li class="site-nav__link"><a href="./collection.html">Fashion Jewelry Sets</a></li>
																<li class="site-nav__link"><a href="./collection.html">Charms</a></li>
																<li class="site-nav__link"><a href="./collection.html">Body Jewelry</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Beads &amp; DIY Jewelry</li>
															<ul class="sub">
																<li class="site-nav__link"><a href="./collection.html">Beads</a></li>
																<li class="site-nav__link"><a href="./collection.html">Jewelry Findings &amp; Components</a></li>
																<li class="site-nav__link"><a href="./collection.html">Jewelry Packaging &amp; Display</a></li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text"><a href="./product.html">Religious Jewelry</a></div>
															<div class="site-nav__banner">
																<a href="./product.html"><img src="./assets/images/product18.png" alt=""></a>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3" aria-haspopup="true">
											<p class="site-nav__link">
												<span class="site-nav__icon icon-7">
																		<img src="./assets/images/shovels.png" alt="">
																		</span>
												<a href="./collection.html" class="site-nav__text">Home &amp; Garden, Appliance</a>
												<span class="fa fa-caret-right click_arrow" aria-hidden="true"></span>
											</p>
											<ul class="site-nav__dropdown" style="z-index: 999;">
												<li class="column-1 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Arts</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">DIY Apparel Sewing &amp; Fabric</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Needle Arts &amp; Craft</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Scrapbook &amp; Stamping</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">5D DIY Diamond Painting</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Home Decor</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Painting &amp; Calligraphy</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Wall Stickers</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Figurines &amp; Miniatures</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Wall Clocks</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Home Textile</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Cushions</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Curtains</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Bedding Set</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Beach Towels</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">Pet Supplies</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product19.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-2 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Festival</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Event &amp; Party</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Ballons</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Artificial &amp; Dried Flowers</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Gift Bags &amp; Boxes</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Home Storage</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Storage Boxes &amp; Bins</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Laundry Baskets</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Drawer Organizers </a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Makeup Organizers</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Household Merchandises</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Umbrellas</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Bathroom Scales</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Hand Push Sweepers</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Dust Covers</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">Birthday</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product20.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-3 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Kitchen</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Bakeware</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Drinkware</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Kitchen Tools &amp; Gadgets</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Kitchen Knives &amp; Accessories</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Garden Supplies</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Watering Kits</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Flower Pots &amp; Planters</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Repellents</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Garden Water Timers</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Furniture</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Home Furniture</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Office Furniture</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Outdoor Furniture</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Top Furniture Stores</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">Hot Small Appliances</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product1.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3" aria-haspopup="true">
											<p class="site-nav__link">
												<span class="site-nav__icon icon-8">
													<img src="./assets/images/shopping-bag.png" alt="">
													</span>
												<a href="h./collection.html" class="site-nav__text">Bags &amp; Shoes</a>
												<span class="fa fa-caret-right click_arrow" aria-hidden="true"></span>
											</p>
											<ul class="site-nav__dropdown" style="z-index: 999;">
												<li class="column-1 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Women's Luggage &amp; Bags</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Fashion Backpacks</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Totes</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Shoulder Bags</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Wallets</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Evening Bags</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Clutches</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Women's Shoes</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Boots</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Snow Boots</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Pumps</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Sandals</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">house slippers</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Vulcanize Shoes</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">Purse</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product2.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-2 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Men's Luggage &amp; Bags</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Men's Backpacks</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Crossbody Bags</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Briefcases</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Luggage &amp; Travel Bags</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Wallets</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Men's Shoes</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Basic boots</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Men's Casual Shoes</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Chelsea boots</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">motorcycle boots</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Snow Boots</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Vulcanized Shoes</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">Ankle Boots</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product3.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-3 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Other Bags &amp; Accessories</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Kids &amp; Baby Bags</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Cosmetic Bags &amp; Cases</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Coin Purses &amp; Holders</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Luggage Cover</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Passport Covers</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Bag Parts &amp; Accessories</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Bestselling Shoes</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Fashion Sneakers</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Flat Sandals</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Chunky Sandals</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Vulcanized Shoes</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Men's Loafers</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Shoes &amp; Accessories</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">Men's Oxfords</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product4.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long" aria-haspopup="true">
											<p class="site-nav__link">
												<span class="site-nav__icon icon-9">
													<img src="./assets/images/horse.png" alt="">
													</span>
												<a href="./collection.html" class="site-nav__text">Toys, Kids &amp; Baby</a>
												<span class="fa fa-caret-right click_arrow" aria-hidden="true"></span>
											</p>
											<ul class="site-nav__dropdown" style="z-index: 999;">
												<li class="column-1 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Baby Clothing</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Baby Dresses</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.htmlsearch">Baby Rompers</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Clothing Sets</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Baby Outerwear</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Baby Pants</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Baby Accessories</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Toys &amp; Hobbies</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">RC Helicopters</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Stuffed &amp; Plush Animals</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Action &amp; Toy Figures</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Blocks</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Electronic Pets</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">Marvel's The Avengers</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product5.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-2 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Girls Clothing</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Dresses</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Clothing Sets</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Tops &amp; Tees</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Sleepwear &amp; Robes</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Accessories</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Family Matching Outfits</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Shoes &amp; Bags</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Baby’s First Walkers</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Girls´ Shoes</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Boys’ Shoes</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">School Bags</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Kids´ Wallets</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">Blocks</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product6.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-3 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Boys Clothing</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Clothing Sets</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">T-Shirts</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Hoodies &amp; Sweatshirts</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Outerwear &amp; Coats</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Jeans</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Accessories</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Baby &amp; Mother</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Nappy Changing</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Activity &amp; Gear</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Baby Care</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Backpacks &amp; Carriers</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Maternity</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">Girls’ Clothing Sets</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product7.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long" aria-haspopup="true">
											<p class="site-nav__link">
												<span class="site-nav__icon icon-10">
													<img src="./assets/images/trophy.png" alt="">
													</span>
												<a href="./collection.html" class="site-nav__text">Sports &amp; Outdoors</a>
												<span class="fa fa-caret-right click_arrow" aria-hidden="true"></span>
											</p>
											<ul class="site-nav__dropdown" style="z-index: 999;">
												<li class="column-1 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Swimming</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Bikini Set</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">One-Piece Suits</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Two-Piece Suits</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Cover-Ups</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Men's Swimwear</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Children's Swimwear</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Cycling</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Bicycles</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Bicycle Frames</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Bicycle Lights</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Bicycle Helmets</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Cycling Jerseys</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Cycling Eyewear</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">Running Shoes</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product8.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-2 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Sneakers</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Running Shoes</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Hiking Shoes</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Soccer Shoes</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Skateboarding Shoes</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Dance Shoes</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Basketball Shoes</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Fishing</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Fishing Reels</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Fishing Lures</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Fishing Lines</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Fishing Rods</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Rod Combos</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Fishing Tackle Boxes</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">Guitars</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product9.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-3 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Sportswear</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Jerseys</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Hiking Jackets</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Pants</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Shorts</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Sports Bags</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Sports Accessories</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Other Sports Equipment</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Camping &amp; Hiking</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Hunting</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Golf</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Fitness &amp; Bodybuilding</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Skiing &amp; Snowboarding</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Musical Instruments</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">Bicycles</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product10.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3" aria-haspopup="true">
											<p class="site-nav__link">
												<span class="site-nav__icon icon-11">
													<img src="./assets/images/heart.png" alt="">
													</span>
												<a href="./collection.html" class="site-nav__text">Health &amp; Beauty, Hair</a>
												<span class="fa fa-caret-right click_arrow" aria-hidden="true"></span>
											</p>
											<ul class="site-nav__dropdown" style="z-index: 999;">
												<li class="column-1 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Hair Weaves</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Bundles With Closure</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">3/4 Bundles</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Pre-Colored Weaves</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Closures</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Top Quality Virgin Hair</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Remy Hair Weaves</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Lace Wigs</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.htmlsearch">Lace Front Wigs</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Full Lace Wig</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">360 Lace Wigs</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">250 Density Lace Wigs</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Synthetic Lace Wigs</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Hair Braids</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">Clip-in Hair Extensions</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product11.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-2 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Makeup</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Beauty Essentials</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Makeup Set</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Makeup Brushes</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Eyeshadow</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Lipstick</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">False Eyelashes</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Nail Art &amp; Tools</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Nail Art Kits</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Nail Gel</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Nail Dryers</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Nail Glitters</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Stickers &amp; Decals</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Nail Decorations</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">Fusion Hair Extensions</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product12.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-3 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Beauty Tools</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Curling Iron</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Straightening Irons</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Electric Face Cleanser</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Facial Steamer</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Face Skin Care Tools</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Massage &amp; Relaxation</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-2">
														<ul>
															<li class="site-nav__heading">Skin Care</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Essential Oil</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Face Mask</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Facial Care</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Sun care</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Body Care</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Razor</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">Tape Hair Extensions</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product13.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3" aria-haspopup="true">
											<p class="site-nav__link">
												<span class="site-nav__icon icon-12">
													<img src="./assets/images/motorcycle.png" alt="">
													</span>
												<a href="./collection.html" class="site-nav__text">Automobiles &amp; Motorcycles</a>
												<span class="fa fa-caret-right click_arrow" aria-hidden="true"></span>
											</p>
											<ul class="site-nav__dropdown" style="z-index: 999;">
												<li class="column-1 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Auto Replacement Parts</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Car Lights</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Interior Parts</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Exterior Parts</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Spark Plugs &amp; Ignition System</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Automobiles Sensors</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Brake System</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Windscreen Wipers &amp; Windows</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Other Replacement Parts</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">ATV,RV,Boat &amp; Other Vehicle</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product14.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-2 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Car Electronics</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Car Multimedia Player</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">DVR/Dash Camera</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Alarm Systems &amp; Security</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">GPS Trackers</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Car Radios</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Car Monitors</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Car Refrigerators</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Vehicle Camera</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Vehicle GPS</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Jump Starter</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">Travel &amp; Roadway Product</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product15.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
												<li class="column-3 grid__item one-third">
													<div class="row-1">
														<ul>
															<li class="site-nav__heading">Motorcycle Accessories &amp; Parts</li>
															<ul class="sub">
																<li class="site-nav__link">
																	<a href="./collection.html">Body &amp; Frame</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Helmet &amp; Protective Gear</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Lighting</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Brake System</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Exhaust &amp; Exhaust Systems</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Helmet Headset</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Motorcycle Seat Covers</a>
																</li>
																<li class="site-nav__link">
																	<a href="./collection.html">Other Motorcycle Accessories</a>
																</li>
															</ul>
														</ul>
													</div>
													<div class="row-3">
														<div class="box-border">
															<div class="site-nav__text">
																<a href="./product.html">Diagnostic Tools</a>
															</div>
															<div class="site-nav__banner">
																<a href="./product.html">
																	<img src="./assets/images/product16.png" alt="">
																</a>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
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
				<div class="product-horizontal-gallery" itemscope="" itemtype="http://schema.org/Product" id="ProductSection" data-section-id="product-horizontal" data-section-type="product-template" data-image-zoom-type="">
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
