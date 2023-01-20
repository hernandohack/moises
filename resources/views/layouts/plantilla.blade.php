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
											<a href="./index.html" class="site-nav__link">
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
													<a href="#"><img src="./assets/images/mega-img1.png" alt=""></a>
												</li>
												<li class="site-nav__item column-image grid__item small--one-whole medium-up--one-third one-fifth">
													<a href="#"><img src="./assets/images/mega-img2.png" alt=""></a>
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
											<a href="./page-contact.html" class="site-nav__link">
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
													<a href="./index.html" class="site-nav__link">
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
															<a href="#"><img src="./assets/images/mega-img1.png" alt=""></a>
														</li>
														<li class="mobile-nav__item column-image grid__item small--one-whole medium-up--one-third one-fifth">
															<a href="#"><img src="./assets/images/mega-img1.png" alt=""></a>
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
												</li>
												<li class="mobile-nav__item" data-url="/pages/contact-us">
													<a href="./page-contact.html" class="site-nav__link">
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
			<div class="html-section index-top-section index-section--flush clearfix">
				<div class="wrapper">
					<div class="wrap_allcoll grid__item large--one-quarter">
						<div id="html-section-home-vertical-menu" class="html-section index-section revolution-slider">
							<div class="allcollections-title">
								<span class="title">Categories</span>
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
											<a href="{{route('categoria', $categoria->categoryid)}} " class="site-nav__text">{{ $categoria->category }}</a>
											<span class="fa fa-caret-right click_arrow" aria-hidden="true"></span>
										</p>
                                    </li>
                                    @endforeach
									{{-- <li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long" aria-haspopup="true">
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Dresses</a></li>
															<li class="site-nav__link"><a href="#">Jackets &amp; Coats</a></li>
															<li class="site-nav__link"><a href="#">Sweaters</a></li>
															<li class="site-nav__link"><a href="#">Jeans</a></li>
															<li class="site-nav__link"><a href="#">Suits &amp; Sets</a></li>
															<li class="site-nav__link"><a href="#">Blouses &amp; Shirts</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Bottoms</li>
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Skirts</a></li>
															<li class="site-nav__link"><a href="#">Leggings</a></li>
															<li class="site-nav__link"><a href="#">Jeans</a></li>
															<li class="site-nav__link"><a href="#">Pants &amp; Capris</a></li>
															<li class="site-nav__link"><a href="#">Wide Leg Pants</a></li>
															<li class="site-nav__link"><a href="#">Shorts</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-3">
													<div class="box-border">
														<div class="site-nav__text"><a href="#">New arrival plus size</a></div>
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Basic Jackets</a></li>
															<li class="site-nav__link"><a href="#">Real Fur</a></li>
															<li class="site-nav__link"><a href="#">Down Coats</a></li>
															<li class="site-nav__link"><a href="#">Blazers</a></li>
															<li class="site-nav__link"><a href="#">Trench</a></li>
															<li class="site-nav__link"><a href="#">Parkas</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Tops &amp; Sets</li>
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Tank Tops</a></li>
															<li class="site-nav__link"><a href="#">Suits &amp; Sets</a></li>
															<li class="site-nav__link"><a href="#">Jumpsuits</a></li>
															<li class="site-nav__link"><a href="#">Rompers</a></li>
															<li class="site-nav__link"><a href="#">Intimates</a></li>
															<li class="site-nav__link"><a href="#">Sleep &amp; Lounge</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-3">
													<div class="box-border">
														<div class="site-nav__text"><a href="#">Sweater Collection</a></div>
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Wedding Dresses</a></li>
															<li class="site-nav__link"><a href="#">Evening Dresses</a></li>
															<li class="site-nav__link"><a href="#">Prom Dresses</a></li>
															<li class="site-nav__link"><a href="#">Bridesmaid Dresses</a></li>
															<li class="site-nav__link"><a href="#">Flower Girl Dresses</a></li>
															<li class="site-nav__link"><a href="#">Cocktail Dresses</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Accessories</li>
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Eyewear &amp; Accessories</a></li>
															<li class="site-nav__link"><a href="#">Hats &amp; Caps</a></li>
															<li class="site-nav__link"><a href="#">Belts &amp; Cummerbunds</a></li>
															<li class="site-nav__link"><a href="#">Scarves &amp; Wraps</a></li>
															<li class="site-nav__link"><a href="#">Gloves &amp; Mittens</a></li>
															<li class="site-nav__link"><a href="#">Prescription Glasses</a></li></ul>
														</li>
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
									</li> --}}
									{{-- <li class="site-nav__item site-nav--has-dropdown dropdown megamenu-vertical megacol-3 dropdown-long" aria-haspopup="true">
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Hoodies &amp; Sweatshirts</a></li>
															<li class="site-nav__link"><a href="#">Jackets</a></li>
															<li class="site-nav__link"><a href="#">T-Shirts</a></li>
															<li class="site-nav__link"><a href="#">Shirts</a></li>
															<li class="site-nav__link"><a href="#">Sweaters</a></li>
															<li class="site-nav__link"><a href="#">Socks</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Bottoms</li>
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Skirts</a></li>
															<li class="site-nav__link"><a href="#">Leggings</a></li>
															<li class="site-nav__link"><a href="#">Jeans</a></li>
															<li class="site-nav__link"><a href="#">Pants &amp; Capris</a></li>
															<li class="site-nav__link"><a href="#">Wide Leg Pants</a></li>
															<li class="site-nav__link"><a href="#">Shorts</a></li></ul>
														</li>
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Boxers</a></li>
															<li class="site-nav__link"><a href="#">Briefs</a></li>
															<li class="site-nav__link"><a href="#">Long Johns</a></li>
															<li class="site-nav__link"><a href="#">Men's Sleep &amp; Lounge</a></li>
															<li class="site-nav__link"><a href="#">Pajama Sets</a></li>
															<li class="site-nav__link"><a href="#">Robes</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Outwear &amp; Jackets</li>
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Basic Jackets</a></li>
															<li class="site-nav__link"><a href="#">Real Fur</a></li>
															<li class="site-nav__link"><a href="#">Down Coats</a></li>
															<li class="site-nav__link"><a href="#">Blazers</a></li>
															<li class="site-nav__link"><a href="#">Trench</a></li>
															<li class="site-nav__link"><a href="#">Parkas</a></li></ul>
														</li>
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Scarves</a></li>
															<li class="site-nav__link"><a href="#">Skullies &amp; Beanies</a></li>
															<li class="site-nav__link"><a href="#">Prescription Glasses</a></li>
															<li class="site-nav__link"><a href="#">Gloves &amp; Mittens</a></li>
															<li class="site-nav__link"><a href="#">Belts</a></li>
															<li class="site-nav__link"><a href="#">Bomber Hats</a></li>
															<li class="site-nav__link"><a href="#">Fedoras</a></li>
															<li class="site-nav__link"><a href="#">Berets</a></li>
															<li class="site-nav__link"><a href="#">Baseball Caps</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Novelty &amp; Special Use</li>
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Cosplay Costumes</a></li>
															<li class="site-nav__link"><a href="#">Stage &amp; Dance Wear</a></li>
															<li class="site-nav__link"><a href="#">Exotic Apparel</a></li></ul>
														</li>
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Octa Core</a></li>
															<li class="site-nav__link"><a href="#">Deca Core</a></li>
															<li class="site-nav__link"><a href="#">Single SIM Card</a></li>
															<li class="site-nav__link"><a href="#">Dual SIM Card</a></li>
															<li class="site-nav__link"><a href="#">4GB RAM</a></li>
															<li class="site-nav__link"><a href="#">5.5-inch Display</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Mobile Phone Parts</li>
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Mobile Phone LCDs</a></li>
															<li class="site-nav__link"><a href="#">Mobile Phone Batteries</a></li>
															<li class="site-nav__link"><a href="#">Mobile Phone Housings</a></li>
															<li class="site-nav__link"><a href="#">Mobile Phone Touch Panel</a></li>
															<li class="site-nav__link"><a href="#">Flex Cables</a></li>
															<li class="site-nav__link"><a href="#">SIM Card &amp; Tools</a></li></ul>
														</li>
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Patterned Cases</a></li>
															<li class="site-nav__link"><a href="#">Wallet Cases</a></li>
															<li class="site-nav__link"><a href="#">Waterproof Cases</a></li>
															<li class="site-nav__link"><a href="#">Leather Cases</a></li>
															<li class="site-nav__link"><a href="#">Silicone Cases</a></li>
															<li class="site-nav__link"><a href="#">Flip Cases</a></li>
															<li class="site-nav__link"><a href="#">iPhone X Cases</a></li>
															<li class="site-nav__link"><a href="#">Cases For iPhone 8/8 Plus </a></li>
															<li class="site-nav__link"><a href="#">Cases For iPhone 7/7 Plus</a></li>
															<li class="site-nav__link"><a href="#">Cases For iPhone 6/6 Plus</a></li>
															<li class="site-nav__link"><a href="#">Galaxy S8 Cases</a></li>
															<li class="site-nav__link"><a href="#">Galaxy S7 Cases</a></li>
															<li class="site-nav__link"><a href="#">Xiaomi Cases</a></li>
															<li class="site-nav__link"><a href="#">Huawei Cases</a></li></ul>
														</li>
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Power Bank</a></li>
															<li class="site-nav__link"><a href="#">Screen Protectors</a></li>
															<li class="site-nav__link"><a href="#">Mobile Phone Cables</a></li>
															<li class="site-nav__link"><a href="#">Mobile Phone Chargers</a></li>
															<li class="site-nav__link"><a href="#">Holders &amp; Stands</a></li>
															<li class="site-nav__link"><a href="#">Mobile Phone Lenses</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Hot Categories</li>
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Car Chargers</a></li>
															<li class="site-nav__link"><a href="#">Quick Chargers</a></li>
															<li class="site-nav__link"><a href="#">iPhone Cables</a></li>
															<li class="site-nav__link"><a href="#">Type C Cables</a></li>
															<li class="site-nav__link"><a href="#">20000mAh Power Bank</a></li>
															<li class="site-nav__link"><a href="#">Battery Charger Cases</a></li></ul>
														</li>
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Gaming Laptops</a></li>
															<li class="site-nav__link"><a href="#">Tablets</a></li>
															<li class="site-nav__link"><a href="#">2 in 1 Tablets</a></li>
															<li class="site-nav__link"><a href="#">Phone Call Tablets</a></li>
															<li class="site-nav__link"><a href="#">iPad</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Tablet &amp; Laptop Accessories</li>
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Laptop Bags &amp; Cases</a></li>
															<li class="site-nav__link"><a href="#">Laptop Batteries</a></li>
															<li class="site-nav__link"><a href="#">Tablet Accessories</a></li>
															<li class="site-nav__link"><a href="#">Tablet LCD Screens</a></li>
															<li class="site-nav__link"><a href="#">Tablet Cases</a></li></ul>
														</li>
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Surveillance Products</a></li>
															<li class="site-nav__link"><a href="#">Access Control</a></li>
															<li class="site-nav__link"><a href="#">Fire Protection</a></li>
															<li class="site-nav__link"><a href="#">Workplace Safety Supplies</a></li>
															<li class="site-nav__link"><a href="#">Alarm &amp; Sensor</a></li>
															<li class="site-nav__link"><a href="#">Door Intercom</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Storage Devices</li>
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">USB Flash Drives</a></li>
															<li class="site-nav__link"><a href="#">Memory Cards</a></li>
															<li class="site-nav__link"><a href="#">External Hard Drives</a></li>
															<li class="site-nav__link"><a href="#">HDD Enclosures</a></li>
															<li class="site-nav__link"><a href="#">SSD</a></li></ul>
														</li>
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Printer Supplies</a></li>
															<li class="site-nav__link"><a href="#">Office &amp; School Supplies</a></li>
															<li class="site-nav__link"><a href="#">3D Printers</a></li>
															<li class="site-nav__link"><a href="#">Printers</a></li>
															<li class="site-nav__link"><a href="#">Scanners</a></li>
															<li class="site-nav__link"><a href="#">3D Pens</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Networking</li>
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="#">Wireless Routers</a></li>
															<li class="site-nav__link"><a href="#">Network Cards</a></li>
															<li class="site-nav__link"><a href="#">3G Modems</a></li>
															<li class="site-nav__link"><a href="./collection.html">Modem-Router Combos</a></li>
															<li class="site-nav__link"><a href="./collection.html">Networking Tools</a></li></ul>
														</li>
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="./collection.html">Digital Cables</a></li>
															<li class="site-nav__link"><a href="./collection.htmlsearch">Electronic Cigarettes</a></li>
															<li class="site-nav__link"><a href="./collection.html">Batteries</a></li>
															<li class="site-nav__link"><a href="./collection.html">Charger</a></li>
															<li class="site-nav__link"><a href="./collection.html">Home Electronic Accessories</a></li>
															<li class="site-nav__link"><a href="./collection.html">Digital Gear Bags</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Home Audio &amp; Video</li>
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="./collection.html">Television</a></li>
															<li class="site-nav__link"><a href="./collection.html">TV Receivers</a></li>
															<li class="site-nav__link"><a href="./collection.html">Projectors</a></li>
															<li class="site-nav__link"><a href="./collection.html">Audio Amplifiers</a></li>
															<li class="site-nav__link"><a href="./collection.html">TV Sticks</a></li></ul>
														</li>
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="./collection.html">Digital Cameras</a></li>
															<li class="site-nav__link"><a href="./collection.html">Camcorders</a></li>
															<li class="site-nav__link"><a href="./collection.html">Camera Drones</a></li>
															<li class="site-nav__link"><a href="./collection.html">Action Cameras</a></li>
															<li class="site-nav__link"><a href="./collection.html">Photo Studio</a></li>
															<li class="site-nav__link"><a href="./collection.html">Camera &amp; Photo Accessories</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Portable Audio &amp; Video</li>
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="./collection.html">Earphones &amp; Headphones</a></li>
															<li class="site-nav__link"><a href="./collection.html">Speakers</a></li>
															<li class="site-nav__link"><a href="./collection.html">MP3 Players</a></li>
															<li class="site-nav__link"><a href="./collection.html">Microphones</a></li>
															<li class="site-nav__link"><a href="./collection.html">VR/AR Devices</a></li></ul>
														</li>
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="./collection.html">Wearable Devices</a></li>
															<li class="site-nav__link"><a href="./collection.html">Smart Home Appliances</a></li>
															<li class="site-nav__link"><a href="./collection.html">Smart Wearable Accessories</a></li>
															<li class="site-nav__link"><a href="./collection.html">Smart Remote Controls</a></li>
															<li class="site-nav__link"><a href="./collection.html">Smart Watches</a></li>
															<li class="site-nav__link"><a href="./collection.html">Smart Wristbands</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Video Games</li>
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="./collection.html">Handheld Game Players</a></li>
															<li class="site-nav__link"><a href="./collection.html">Gamepads</a></li>
															<li class="site-nav__link"><a href="./collection.html">Joysticks</a></li>
															<li class="site-nav__link"><a href="./collection.html">Stickers</a></li></ul>
														</li>
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="./collection.html">925 Silver Jewelry </a></li>
															<li class="site-nav__link"><a href="./collection.html">Diamond Jewelry</a></li>
															<li class="site-nav__link"><a href="./collection.html">Pearls Jewelry</a></li>
															<li class="site-nav__link"><a href="./collection.html">Various Gemstones</a></li>
															<li class="site-nav__link"><a href="./collection.html">K-Gold</a></li>
															<li class="site-nav__link"><a href="./collection.html">Fine Earrings</a></li>
															<li class="site-nav__link"><a href="./collection.html">Fine Jewelry Sets</a></li>
															<li class="site-nav__link"><a href="./collection.html">Men's Fine Jewelry</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Wedding &amp; Engagement</li>
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="./collection.html">Bridal Jewelry Sets</a></li>
															<li class="site-nav__link"><a href="./collection.html">Engagement Rings</a></li>
															<li class="site-nav__link"><a href="./collection.html">Wedding Hair Jewelry</a></li></ul>
														</li>
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="./collection.html">Mechanical Watches</a></li>
															<li class="site-nav__link"><a href="./collection.html">Quartz Watches</a></li>
															<li class="site-nav__link"><a href="./collection.html">Digital Watches</a></li>
															<li class="site-nav__link"><a href="./collection.html">Dual Display Watches</a></li>
															<li class="site-nav__link"><a href="./collection.html">Sports Watches</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Women's Watches</li>
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="./collection.html">Sports Watches</a></li>
															<li class="site-nav__link"><a href="./collection.html">Women's Bracelet Watches</a></li>
															<li class="site-nav__link"><a href="./collection.html">Dress Watches</a></li>
															<li class="site-nav__link"><a href="./collection.html">Lovers' Watches</a></li>
															<li class="site-nav__link"><a href="./collection.html">Children's Watches</a></li>
															<li class="site-nav__link"><a href="./collection.html">Creative Watches</a></li></ul>
														</li>
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
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="./collection.html">Necklaces &amp; Pendants</a></li>
															<li class="site-nav__link"><a href="./collection.html">Hot Rings</a></li>
															<li class="site-nav__link"><a href="./collection.html">Trendy Earrings</a></li>
															<li class="site-nav__link"><a href="./collection.html">Bracelets &amp; Bangles</a></li>
															<li class="site-nav__link"><a href="./collection.html">Men's Cuff Links</a></li>
															<li class="site-nav__link"><a href="./collection.html">Fashion Jewelry Sets</a></li>
															<li class="site-nav__link"><a href="./collection.html">Charms</a></li>
															<li class="site-nav__link"><a href="./collection.html">Body Jewelry</a></li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Beads &amp; DIY Jewelry</li>
														<li class="sub"><ul>
															<li class="site-nav__link"><a href="./collection.html">Beads</a></li>
															<li class="site-nav__link"><a href="./collection.html">Jewelry Findings &amp; Components</a></li>
															<li class="site-nav__link"><a href="./collection.html">Jewelry Packaging &amp; Display</a></li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Home Decor</li>
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Home Storage</li>
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Furniture</li>
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Women's Shoes</li>
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Men's Shoes</li>
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Bestselling Shoes</li>
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Toys &amp; Hobbies</li>
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Shoes &amp; Bags</li>
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Baby &amp; Mother</li>
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Cycling</li>
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Fishing</li>
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Other Sports Equipment</li>
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Lace Wigs</li>
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Nail Art &amp; Tools</li>
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
													</ul>
												</div>
												<div class="row-2">
													<ul>
														<li class="site-nav__heading">Skin Care</li>
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
														<li class="sub"><ul>
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
															</li></ul>
														</li>
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
									</li> --}}
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
												<img src="{{asset('assets/images/scales-and-balances-all-brands.webp')}}" data-lazyload="{{asset('assets/images/scales-and-balances-all-brands.webp')}}"  alt="Slideshow 1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
												<div class="tp-caption  easeOutBack" data-x='30' data-y='150'
													data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
													data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
													data-speed="2000" data-start="2000" data-easing="Back.easeInOut" data-endspeed="500" style="z-index: 6;visibility:hidden;">
													<img src="./assets/images/slideshow1-caption.png" alt="Caption 1" />
												</div>
												<a class="slideshow-action-link" href="./collection.html"></a>
											</li>
											<li data-transition="slideright"  data-masterspeed="2000" data-saveperformance="on"  data-title="Slideshow 1" >
												<img src="{{asset('assets/images/scales-and-balances-all-brands.webp')}}" data-lazyload="{{asset('assets/images/scales-and-balances-all-brands.webp')}}"  alt="Slideshow 1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
												<div class="tp-caption  easeOutBack" data-x='60' data-y='120'
													data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
													data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
													data-speed="2000" data-start="2000" data-easing="Back.easeInOut" data-endspeed="500" style="z-index: 6;visibility:hidden;">
													<img src="./assets/images/slideshow1-caption.png" alt="Caption 1" />
												</div>
												<a class="slideshow-action-link" href="./product.html"></a>
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
									<a href="./collection.html">
										<img src="./assets/images/market-adidas.png" alt="">
									</a>
								</div>
								<div class="brand-elemet">
									<a href="./collection.html">
										<img src="./assets/images/market-adidas.png" alt="">
									</a>
								</div>
								<div class="brand-elemet">
									<a href="./collection.html">
										<img src="./assets/images/market-adidas.png" alt="">
									</a>
								</div>
								<div class="brand-elemet">
									<a href="./collection.html">
										<img src="./assets/images/market-adidas.png" alt="">
									</a>
								</div>
								<div class="brand-elemet">
									<a href="#">
										<img src="./assets/images/market-adidas.png" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="wrap_banner grid__item large--one-quarter">
						<div id="html-section-home-topbanners" class="html-section index-section index-section--flush">
							<div class="banners-box">
								<div class="banner-element banner-1">
									<a href="#">
										<img src="{{asset('assets/images/scales-price-load-cells.avif')}}" alt="">
									</a>
								</div>
								<div class="banner-element banner-2">
									<a href="#">
										<img src="{{asset('assets/images/tanks-hopper-price_58e1e8ed-8510-40d2-bb56-1c3d68d31d18.avif')}}" alt="">
									</a>
								</div>
								<div class="banner-element banner-3">
									<a href="#">
										<img src="{{asset('assets/images/farm-kit-offer-price.jpg')}}" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="index-sections">
				<div class="html-section index-section product-in-slider">
					<div class="wrapper">
						<div class="page-width section-product-deals" style="padding-top:40px; padding-bottom:40px;">
							<div class="section-header ">
								<h2>Flash Deals</h2>
								<div class="countdown">
									<div class="timer-countdown">
										<span id="timer-1525446629879" class="timer"></span>
									</div>
								</div>
							</div>
							<div class="grid grid--uniform grid--view-items ">
								<div class="product-slider-1525446629879">
									<div class="grid__item">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product1.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product1x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
													</a>
													<div class="product-label">
														<div class="label-element deal-label">
															<span>Sale off</span>
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
														<img src="./assets/images/freeshipicon.svg" alt="free shipping icon" />
													</div>
												</div>
												<div class="meter red nostripes">
													<span class="process" style="width: 55px;"></span>
													<span style="width: 42px; display: inline-block;">sold 5</span>
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
															<a class="wish-list wlc wl-1559291710422" data-wishlistid="1559291710422" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1559291710422" data-compareid="1559291710422" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item">
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
												<div class="grid-view-item__vendor">Apple</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$30.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$19.99 USD</span>
														<span class="product-price__sale-label">On Sale</span>
														</span>
													</div>
													<div class="shipcode grid__item large--one-quarter">
														<img src="./assets/images/freeshipicon.svg" alt="free shipping icon" />
													</div>
												</div>
												<div class="meter red nostripes">
													<span class="process" style="width: 145px;"></span>
													<span style="width: 48px; display: inline-block;">sold 10</span>
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
															<a class="wish-list wlc wl-1559291704085" data-wishlistid="1559291704085" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1559291704085" data-compareid="1559291704085" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item">
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
												<div class="grid-view-item__vendor">ACME</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$25.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$10.99 USD</span>
														<span class="product-price__sale-label">On Sale</span>
														</span>
													</div>
													<div class="shipcode grid__item large--one-quarter">
														<img src="./assets/images/freeshipicon.svg" alt="free shipping icon" />
													</div>
												</div>
												<div class="meter red nostripes">
													<span class="process" style="width: 110px;"></span>
													<span style="width: 48px; display: inline-block;">sold 15</span>
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
															<a class="wish-list wlc wl-1559291695781" data-wishlistid="1559291695781" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1559291695781" data-compareid="1559291695781" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product4.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product4x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
													</a>
													<div class="product-label">
														<div class="label-element deal-label">
															<span>Sale off</span>
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
												<div class="grid-view-item__vendor">Converse</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$50.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$16.99 USD</span>
														<span class="product-price__sale-label">On Sale</span>
														</span>
													</div>
													<div class="shipcode grid__item large--one-quarter">
														<img src="./assets/images/freeshipicon.svg" alt="free shipping icon" />
													</div>
												</div>
												<div class="meter red nostripes">
													<span class="process" style="width: 145px;"></span>
													<span style="width: 48px; display: inline-block;">sold 20</span>
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
															<a class="wish-list wlc wl-1559291660861" data-wishlistid="1559291660861" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1559291660861" data-compareid="1559291660861" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product5.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product5x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
													</a>
													<div class="product-label">
														<div class="label-element deal-label">
															<span>Sale off</span>
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
												<div class="grid-view-item__vendor">Samsung</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$70.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$20.99 USD</span>
														<span class="product-price__sale-label">On Sale</span>
														</span>
													</div>
													<div class="shipcode grid__item large--one-quarter">
														<img src="./assets/images/freeshipicon.svg" alt="free shipping icon" />
													</div>
												</div>
												<div class="meter red nostripes">
													<span class="process" style="width: 101px;"></span>
													<span style="width: 48px; display: inline-block;">sold 7</span>
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
															<a class="wish-list wlc wl-1559291622624" data-wishlistid="1559291622624" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1559291622624" data-compareid="1559291622624" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product6.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product6x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
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
														<s class="product-price__price"><span class="money">$80.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$25.99 USD</span>
														<span class="product-price__sale-label">On Sale</span>
														</span>
													</div>
													<div class="shipcode grid__item large--one-quarter">
														<img src="./assets/images/freeshipicon.svg" alt="free shipping icon" />
													</div>
												</div>
												<div class="meter red nostripes">
													<span class="process" style="width: 110px;"></span>
													<span style="width: 48px; display: inline-block;">sold 20</span>
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
															<a class="wish-list wlc wl-1559291082169" data-wishlistid="1559291082169" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1559291082169" data-compareid="1559291082169" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product7.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product7x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
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
												<div class="grid-view-item__vendor">ensuregold</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$90.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$25.99 USD</span>
														<span class="product-price__sale-label">On Sale</span>
														</span>
													</div>
													<div class="shipcode grid__item large--one-quarter">
														<img src="./assets/images/freeshipicon.svg" alt="free shipping icon" />
													</div>
												</div>
												<div class="meter red nostripes">
													<span class="process" style="width: 44px;"></span>
													<span style="width: 48px; display: inline-block;">sold 12</span>
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
															<a class="wish-list wlc wl-1559289136664" data-wishlistid="1559289136664" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1559289136664" data-compareid="1559289136664" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product8.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product8x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
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
												<div class="grid-view-item__vendor">Loremous</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$95.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$25.99 USD</span>
														<span class="product-price__sale-label">On Sale</span>
														</span>
													</div>
													<div class="shipcode grid__item large--one-quarter">
														<img src="./assets/images/freeshipicon.svg" alt="free shipping icon" />
													</div>
												</div>
												<div class="meter red nostripes">
													<span class="process" style="width: 55px;"></span>
													<span style="width: 48px; display: inline-block;">sold 5</span>
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
															<a class="wish-list wlc wl-1559290477513" data-wishlistid="1559290477513" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1559290477513" data-compareid="1559290477513" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="html-section-1539617329459" class="html-section index-section index-section--flush">
					<div class="wrapper">
						<div class="brands-box" style="padding-bottom:40px;">
							<div class="section-header">
								<h2>Featured Brands</h2>
							</div>
							<div class="grid">
								<div class="brands-section brandslider_1539617329459">
									<div class="brand-element brand-1">
										<div class="brand-image">
											<div class="activity-image">
												<img src="./assets/images/brand1.png" alt="" />
											</div>
											<div class="brand-hover-items">
												<ul>
													<li class="product-element product-1 grid__item small--one-third medium-up--one-third one-third">
														<a class="grid-view-item__link" href="./product.html">
															<img class="grid-view-item__image" src="./assets/images/product1.png" alt="">
														</a>
													</li>
													<li class="product-element product-2 grid__item small--one-third medium-up--one-third one-third">
														<a class="grid-view-item__link" href="./product.html">
															<img class="grid-view-item__image" src="./assets/images/product2.png" alt="">
														</a>
													</li>
													<li class="product-element product-3 grid__item small--one-third medium-up--one-third one-third">
														<a class="grid-view-item__link" href="./product.html">
															<img class="grid-view-item__image" src="./assets/images/product3.png" alt="">
														</a>
													</li>
												</ul>
											</div>
										</div>
										<a class="brand-name" href="./collection.html">Samsung</a>
										<div class="brand-desc">Samsung Electronics Co., Ltd. is a South Korean multinational electronics company headquartered.</div>
									</div>
									<div class="brand-element brand-2">
										<div class="brand-image">
											<div class="activity-image">
												<img src="./assets/images/brand2.png" alt="" />
											</div>
											<div class="brand-hover-items">
												<ul>
													<li class="product-element product-1 grid__item small--one-third medium-up--one-third one-third">
														<a class="grid-view-item__link" href="./product.html">
															<img class="grid-view-item__image" src="./assets/images/product4.png" alt="">
														</a>
													</li>
													<li class="product-element product-2 grid__item small--one-third medium-up--one-third one-third">
														<a class="grid-view-item__link" href="./product.html">
															<img class="grid-view-item__image" src="./assets/images/product5.png" alt="">
														</a>
													</li>
													<li class="product-element product-3 grid__item small--one-third medium-up--one-third one-third">
														<a class="grid-view-item__link" href="./product.html">
															<img class="grid-view-item__image" src="./assets/images/product6.png" alt="">
														</a>
													</li>
												</ul>
											</div>
										</div>
										<a class="brand-name" href="./collection.html">Bosch</a>
										<div class="brand-desc">One of the world's leading providers of cordless & corded power tools, tool accessories & measuring tools.</div>
									</div>
									<div class="brand-element brand-3">
										<div class="brand-image">
											<div class="activity-image">
												<img src="./assets/images/brand3.png" alt="" />
											</div>
											<div class="brand-hover-items">
												<ul>
													<li class="product-element product-1 grid__item small--one-third medium-up--one-third one-third">
														<a class="grid-view-item__link" href="./product.html">
															<img class="grid-view-item__image" src="./assets/images/product7.png" alt="">
														</a>
													</li>
													<li class="product-element product-2 grid__item small--one-third medium-up--one-third one-third">
														<a class="grid-view-item__link" href="./product.html">
															<img class="grid-view-item__image" src="./assets/images/product8.png" alt="">
														</a>
													</li>
													<li class="product-element product-3 grid__item small--one-third medium-up--one-third one-third">
														<a class="grid-view-item__link" href="./product.html">
															<img class="grid-view-item__image" src="./assets/images/product9.png" alt="">
														</a>
													</li>
												</ul>
											</div>
										</div>
										<a class="brand-name" href="./collection.html">Kingston</a>
										<div class="brand-desc">exceptional quality, reliability, and support you can trust.</div>
									</div>
									<div class="brand-element brand-4">
										<div class="brand-image">
											<div class="activity-image">
												<img src="./assets/images/brand1.png" alt="" />
											</div>
											<div class="brand-hover-items">
												<ul>
													<li class="product-element product-1 grid__item small--one-third medium-up--one-third one-third">
														<a class="grid-view-item__link" href="./product.html">
															<img class="grid-view-item__image" src="./assets/images/product10.png" alt="">
														</a>
													</li>
													<li class="product-element product-2 grid__item small--one-third medium-up--one-third one-third">
														<a class="grid-view-item__link" href="./product.html">
															<img class="grid-view-item__image" src="./assets/images/product11.png" alt="">
														</a>
													</li>
													<li class="product-element product-3 grid__item small--one-third medium-up--one-third one-third">
														<a class="grid-view-item__link" href="./product.html">
															<img class="grid-view-item__image" src="./assets/images/product12.png" alt="">
														</a>
													</li>
												</ul>
											</div>
										</div>
										<a class="brand-name" href="./collection.html">EnsureGold</a>
										<div class="brand-desc">The brand name of nutritional supplements and meal replacements manufactured by Abbott Laboratories.</div>
									</div>
									<div class="brand-element brand-5">
										<div class="brand-image">
											<div class="activity-image">
												<img src="./assets/images/brand2.png" alt="" />
											</div>
											<div class="brand-hover-items">
												<ul>
													<li class="product-element product-1 grid__item small--one-third medium-up--one-third one-third">
														<a class="grid-view-item__link" href="./product.html">
															<img class="grid-view-item__image" src="./assets/images/product13.png" alt="">
														</a>
													</li>
													<li class="product-element product-2 grid__item small--one-third medium-up--one-third one-third">
														<a class="grid-view-item__link" href="./product.html">
															<img class="grid-view-item__image" src="./assets/images/product14.png" alt="">
														</a>
													</li>
													<li class="product-element product-3 grid__item small--one-third medium-up--one-third one-third">
														<a class="grid-view-item__link" href="./product.html">
															<img class="grid-view-item__image" src="./assets/images/product15.png" alt="">
														</a>
													</li>
												</ul>
											</div>
										</div>
										<a class="brand-name" href="./collection.html">Converse</a>
										<div class="brand-desc">Converse offers the complete sneaker, clothing, gear & collaborations.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="html-section-1542810603284" class="html-section index-section index-section--flush">
					<div class="wrapper">
						<div class="search-box">
							<div class="section-header">
								<h2>Trends of Search</h2>
							</div>
							<div class="search-section searchslider_1542810603284">
								<div class="search-element brand-1">
									<a class="search-image" href="./collection.html">
										<img src="./assets/images/search1.png" alt="" />
									</a>
									<div class="search-info">
										<a class="search-title" href="./collection.html">Cases for iPhone XR, XS, XS Max</a>
										<div class="search-count">200 products</div>
									</div>
								</div>
								<div class="search-element brand-2">
									<a class="search-image" href="./collection.html">
										<img src="./assets/images/search2.png" alt="" />
									</a>
									<div class="search-info">
										<a class="search-title" href="./collection.html">Cases for Samsung Note 8/9</a>
										<div class="search-count">340 products</div>
									</div>
								</div>
								<div class="search-element brand-3">
									<a class="search-image" href="./collection.html">
										<img src="./assets/images/search3.png" alt="" />
									</a>
									<div class="search-info">
										<a class="search-title" href="./collection.html">Winter 2019 Fashion</a>
										<div class="search-count">160 products</div>
									</div>
								</div>
								<div class="search-element brand-4">
									<a class="search-image" href="./collection.html">
										<img src="./assets/images/search4.png" alt="" />
									</a>
									<div class="search-info">
										<a class="search-title" href="./collection.html">Accessories DJI Spark</a>
										<div class="search-count">410 products</div>
									</div>
								</div>
								<div class="search-element brand-5">
									<a class="search-image" href="./collection.html">
										<img src="./assets/images/search5.png" alt="" />
									</a>
									<div class="search-info">
										<a class="search-title" href="./collection.html">Men's Luxury Watches</a>
										<div class="search-count">320 products</div>
									</div>
								</div>
								<div class="search-element brand-6">
									<a class="search-image" href="./collection.html">
										<img src="./assets/images/search6.png" alt="" />
									</a>
									<div class="search-info">
										<a class="search-title" href="./collection.html">Converse New Arrivals</a>
										<div class="search-count">270 products</div>
									</div>
								</div>
								<div class="search-element brand-7">
									<a class="search-image" href="./collection.html">
										<img src="./assets/images/search7.png" alt="" />
									</a>
									<div class="search-info">
										<a class="search-title" href="./collection.html">Best Phones 2019</a>
										<div class="search-count">250 products</div>
									</div>
								</div>
								<div class="search-element brand-8">
									<a class="search-image" href="./collection.html">
										<img src="./assets/images/search8.png" alt="" />
									</a>
									<div class="search-info">
										<a class="search-title" href="./collection.html">Bosch 2019 Collection</a>
										<div class="search-count">450 products</div>
									</div>
								</div>
								<div class="search-element brand-9">
									<a class="search-image" href="./collection.html">
										<img src="./assets/images/search9.png" alt="" />
									</a>
									<div class="search-info">
										<a class="search-title" href="./collection.html">Accessories DJI Spark</a>
										<div class="search-count">300 products</div>
									</div>
								</div>
								<div class="search-element brand-10">
									<a class="search-image" href="./collection.html">
										<img src="./assets/images/search10.png" alt="" />
									</a>
									<div class="search-info">
										<a class="search-title" href="./collection.html">Adisdas Collection</a>
										<div class="search-count">260 products</div>
									</div>
								</div>
								<div class="search-element brand-11">
									<a class="search-image" href="./collection.html">
										<img src="./assets/images/search11.png" alt="" />
									</a>
									<div class="search-info">
										<a class="search-title" href="./collection.html">Accessories</a>
										<div class="search-count">140 products</div>
									</div>
								</div>
								<div class="search-element brand-12">
									<a class="search-image" href="./collection.html">
										<img src="./assets/images/search12.png" alt="" />
									</a>
									<div class="search-info">
										<a class="search-title" href="./collection.html">Women's Luxury Watches</a>
										<div class="search-count">100 products</div>
									</div>
								</div>
								<div class="search-element brand-13">
									<a class="search-image" href="./collection.html">
										<img src="./assets/images/search13.png" alt="" />
									</a>
									<div class="search-info">
										<a class="search-title" href="./collection.html">Kid Fashion</a>
										<div class="search-count">210 products</div>
									</div>
								</div>
								<div class="search-element brand-14">
									<a class="search-image" href="./collection.html">
										<img src="./assets/images/search14.png" alt="" />
									</a>
									<div class="search-info">
										<a class="search-title" href="./collection.html">Toys and Games</a>
										<div class="search-count">250 products</div>
									</div>
								</div>
								<div class="search-element brand-15">
									<a class="search-image" href="./collection.html">
										<img src="./assets/images/search15.png" alt="" />
									</a>
									<div class="search-info">
										<a class="search-title" href="./collection.html">Treding 2020</a>
										<div class="search-count">300 products</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="html-section-1542812906653" class="html-section index-section index-section--flush">
					<div class="wrapper">
						<div class="banners-box">
							<div class="grid banners-section ">
								<div class="banner-element banner-1 grid__item  captionposition-left">
									<a href="#">
										<img src="./assets/images/banner1.png" alt="">
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
									<div class="bestseller-element bestseller-1">
										<div class="bestseller-products">
											<div class="big-area grid__item two-thirds">
												<div class="big-product bestseller-product">
													<div class="bestseller-count">1</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product14.png" alt="">
													</a>
												</div>
											</div>
											<div class="small-area grid__item one-third">
												<div class="top-product bestseller-product">
													<div class="bestseller-count">2</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product13.png" alt="">
													</a>
												</div>
												<div class="bottom-product bestseller-product">
													<div class="bestseller-count">3</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product12.png" alt="">
													</a>
												</div>
											</div>
										</div>
										<a class="bestseller-name" href="./collection.html">Watches</a>
									</div>
									<div class="bestseller-element bestseller-2">
										<div class="bestseller-products">
											<div class="big-area grid__item two-thirds">
												<div class="big-product bestseller-product">
													<div class="bestseller-count">1</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product17.png" alt="">
													</a>
												</div>
											</div>
											<div class="small-area grid__item one-third">
												<div class="top-product bestseller-product">
													<div class="bestseller-count">2</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product16.png" alt="">
													</a>
												</div>
												<div class="bottom-product bestseller-product">
													<div class="bestseller-count">3</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product15.png" alt="">
													</a>
												</div>
											</div>
										</div>
										<a class="bestseller-name" href="./collection.html">Sunglasses</a>
									</div>
									<div class="bestseller-element bestseller-3">
										<div class="bestseller-products">
											<div class="big-area grid__item two-thirds">
												<div class="big-product bestseller-product">
													<div class="bestseller-count">1</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product11.png" alt="">
													</a>
												</div>
											</div>
											<div class="small-area grid__item one-third">
												<div class="top-product bestseller-product">
													<div class="bestseller-count">2</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product10.png" alt="">
													</a>
												</div>
												<div class="bottom-product bestseller-product">
													<div class="bestseller-count">3</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product9.png" alt="">
													</a>
												</div>
											</div>
										</div>
										<a class="bestseller-name" href="./collection.html">Shoes</a>
									</div>
									<div class="bestseller-element bestseller-4">
										<div class="bestseller-products">
											<div class="big-area grid__item two-thirds">
												<div class="big-product bestseller-product">
													<div class="bestseller-count">1</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product20.png" alt="">
													</a>
												</div>
											</div>
											<div class="small-area grid__item one-third">
												<div class="top-product bestseller-product">
													<div class="bestseller-count">2</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product19.png" alt="">
													</a>
												</div>
												<div class="bottom-product bestseller-product">
													<div class="bestseller-count">3</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product18.png" alt="">
													</a>
												</div>
											</div>
										</div>
										<a class="bestseller-name" href="./collection.html">Bags</a>
									</div>
									<div class="bestseller-element bestseller-5">
										<div class="bestseller-products">
											<div class="big-area grid__item two-thirds">
												<div class="big-product bestseller-product">
													<div class="bestseller-count">1</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product8.png" alt="">
													</a>
												</div>
											</div>
											<div class="small-area grid__item one-third">
												<div class="top-product bestseller-product">
													<div class="bestseller-count">2</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product7.png" alt="">
													</a>
												</div>
												<div class="bottom-product bestseller-product">
													<div class="bestseller-count">3</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product6.png" alt="">
													</a>
												</div>
											</div>
										</div>
										<a class="bestseller-name" href="./collection.html">Beauty</a>
									</div>
									<div class="bestseller-element bestseller-6">
										<div class="bestseller-products">
											<div class="big-area grid__item two-thirds">
												<div class="big-product bestseller-product">
													<div class="bestseller-count">1</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product5.png" alt="">
													</a>
												</div>
											</div>
											<div class="small-area grid__item one-third">
												<div class="top-product bestseller-product">
													<div class="bestseller-count">2</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product4.png" alt="">
													</a>
												</div>
												<div class="bottom-product bestseller-product">
													<div class="bestseller-count">3</div>
													<a class="grid-view-item__link" href="./collection.html">
														<img class="grid-view-item__image" src="./assets/images/product3.png" alt="">
													</a>
												</div>
											</div>
										</div>
										<a class="bestseller-name" href="./collection.html">Decor</a>
									</div>
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
								<div class="product-grid-random product-grid-1539877863095" id="loadMoreContainer_1539877863095">
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
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
															<a class="wish-list wlc wl-1559290471878" data-wishlistid="1559290471878" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1559290471878" data-compareid="1559290471878" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product2.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product2x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
													</a>
													<div class="product-label">
														<div class="label-element deal-label">
															<span>Sale off</span>
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
												<div class="grid-view-item__vendor">Apple</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$30.99 USD</span></s>
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
															<a class="wish-list wlc wl-1559290460343" data-wishlistid="1559290460343" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1559290460343" data-compareid="1559290460343" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
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
												<div class="grid-view-item__vendor">ACME</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$25.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$10.99 USD</span>
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
															<a class="wish-list wlc wl-1559276519990" data-wishlistid="1559276519990" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1559276519990" data-compareid="1559276519990" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product4.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product4x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
													</a>
													<div class="product-label">
														<div class="label-element deal-label">
															<span>Sale off</span>
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
												<div class="grid-view-item__vendor">Converse</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$50.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$16.99 USD</span>
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
															<a class="wish-list wlc wl-1559276515457" data-wishlistid="1559276515457" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1559276515457" data-compareid="1559276515457" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
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
												<div class="grid-view-item__vendor">Samsung</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$70.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$20.99 USD</span>
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
															<a class="wish-list wlc wl-1559289860144" data-wishlistid="1559289860144" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1559289860144" data-compareid="1559289860144" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product6.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product6x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
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
														<s class="product-price__price"><span class="money">$80.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$25.99 USD</span>
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
															<a class="wish-list wlc wl-1559289850774" data-wishlistid="1559289850774" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1559289850774" data-compareid="1559289850774" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product7.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product7x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
													</a>
													<div class="product-label">
														<div class="label-element deal-label">
															<span>Sale off</span>
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
												<div class="grid-view-item__vendor">ensuregold</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$90.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$25.99 USD</span>
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
															<a class="wish-list wlc wl-1526878742478" data-wishlistid="1526878742478" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1526878742478" data-compareid="1526878742478" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product8.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product8x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
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
												<div class="grid-view-item__vendor">Loremous</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$95.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$25.99 USD</span>
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
															<a class="wish-list wlc wl-1526878646970" data-wishlistid="1526878646970" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1526878646970" data-compareid="1526878646970" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product9.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product9x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
													</a>
													<div class="product-label">
														<div class="label-element deal-label">
															<span>Sale off</span>
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
															<a class="wish-list wlc wl-1526878232893" data-wishlistid="1526878232893" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1526878232893" data-compareid="1526878232893" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product10.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product10x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
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
												<div class="grid-view-item__vendor">Apple</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$30.99 USD</span></s>
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
															<a class="wish-list wlc wl-1526875489945" data-wishlistid="1526875489945" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1526875489945" data-compareid="1526875489945" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product11.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product11x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
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
														<s class="product-price__price"><span class="money">$25.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$10.99 USD</span>
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
															<a class="wish-list wlc wl-1529051585390" data-wishlistid="1529051585390" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1529051585390" data-compareid="1529051585390" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product12.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product12x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
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
												<div class="grid-view-item__vendor">Converse</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$50.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$16.99 USD</span>
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
															<a class="wish-list wlc wl-1553074512467" data-wishlistid="1553074512467" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1553074512467" data-compareid="1553074512467" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product13.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product13x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
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
												<div class="grid-view-item__vendor">Samsung</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$70.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$20.99 USD</span>
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
															<a class="wish-list wlc wl-1553074493814" data-wishlistid="1553074493814" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1553074493814" data-compareid="1553074493814" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product14.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product14x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
													</a>
													<div class="product-label">
														<div class="label-element deal-label">
															<span>Sale off</span>
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
												<div class="grid-view-item__vendor">BOSCH</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$80.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$25.99 USD</span>
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
															<a class="wish-list wlc wl-1543206361904" data-wishlistid="1543206361904" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1543206361904" data-compareid="1543206361904" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product15.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product15x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
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
												<div class="grid-view-item__vendor">ensuregold</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$90.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$25.99 USD</span>
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
															<a class="wish-list wlc wl-1526030368134" data-wishlistid="1526030368134" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1526030368134" data-compareid="1526030368134" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product16.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product16x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
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
												<div class="grid-view-item__vendor">Loremous</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$95.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$25.99 USD</span>
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
															<a class="wish-list wlc wl-1526030319185" data-wishlistid="1526030319185" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1526030319185" data-compareid="1526030319185" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product17.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product17x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
													</a>
													<div class="product-label">
														<div class="label-element deal-label">
															<span>Sale off</span>
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
															<a class="wish-list wlc wl-1537160789015" data-wishlistid="1537160789015" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1537160789015" data-compareid="1537160789015" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product18.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product18x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
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
												<div class="grid-view-item__vendor">Apple</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$30.99 USD</span></s>
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
															<a class="wish-list wlc wl-1552981682972" data-wishlistid="1552981682972" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1552981682972" data-compareid="1552981682972" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product19.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product19x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
													</a>
													<div class="product-label">
														<div class="label-element deal-label">
															<span>Sale off</span>
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
												<div class="grid-view-item__vendor">ACME</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$25.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$10.99 USD</span>
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
															<a class="wish-list wlc wl-1552981364929" data-wishlistid="1552981364929" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1552981364929" data-compareid="1552981364929" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="grid__item small--one-half medium-up--one-quarter one-fifth shuffle-element loadmore_element" style="display:none;">
										<div class="grid-view-item">
											<div class="grid-normal-display">
												<div class="grid__image product-image">
													<a class="grid-view-item__link" href="./product.html">
														<img class="grid-view-item__image" src="./assets/images/product20.png" alt="Consequuntur magni dolores">
														<img class="hover-image" src="./assets/images/product20x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
													</a>
													<div class="product-label">
														<div class="label-element deal-label">
															<span>Sale off</span>
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
												<div class="grid-view-item__vendor">Converse</div>
												<div class="h4 grid-view-item__title"><a href="./product.html">Consequuntur magni dolores</a></div>
												<div class="price-and-ship">
													<div class="grid-view-item__meta grid__item large--three-quarters">
														<s class="product-price__price"><span class="money">$50.99 USD</span></s>
														<span class="product-price__price product-price__sale">
														<span class="money">$16.99 USD</span>
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
															<a class="wish-list wlc wl-1552981352402" data-wishlistid="1552981352402" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
														</li>
														<li class="button-compare">
															<a class="wish-list cmc cm-1552981352402" data-compareid="1552981352402" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div style="text-align:center">
									<div id="loadMore_1539877863095" class="btn btn-more">Load More</div>
									<div id="showLess_1539877863095" class="btn--secondary btn-less hide">Show Less</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<div id="html-section-footer" class="html-section">
			<footer class="site-footer" role="contentinfo">
				<div class="footer-info">
					<div class="wrapper">
						<div class="grid footer-info-inner">
							<div class="info-element grid__item one-quarter small--one-half">
								<div class="info-wrapper">
									<div class="image grid__item one-whole">
										<img src="./assets/images/icon1.png" alt="">
									</div>
									<div class="text grid__item one-whole">
										<div class="text1">WORLDWIDE DELIVERY</div>
										<div class="text2">We ship to over 200 countries &amp; regions.</div>
									</div>
								</div>
							</div>
							<div class="info-element grid__item one-quarter small--one-half">
								<div class="info-wrapper">
									<div class="image grid__item one-whole">
										<img src="./assets/images/icon2.png" alt="">
									</div>
									<div class="text grid__item one-whole">
										<div class="text1">SAFE PAYMENT</div>
										<div class="text2">Pay with the world’s most popular and secure payment methods.</div>
									</div>
								</div>
							</div>
							<div class="info-element grid__item one-quarter small--one-half">
								<div class="info-wrapper">
									<div class="image grid__item one-whole">
										<img src="./assets/images/icon3.png" alt="">
									</div>
									<div class="text grid__item one-whole">
										<div class="text1">SHOP WITH CONFIDENCE</div>
										<div class="text2">Our Buyer Protection covers your purchase from click to delivery.</div>
									</div>
								</div>
							</div>
							<div class="info-element grid__item one-quarter small--one-half">
								<div class="info-wrapper">
									<div class="image grid__item one-whole">
										<img src="./assets/images/icon4.png" alt="">
									</div>
									<div class="text grid__item one-whole">
										<div class="text1">24/7 HELP CENTER</div>
										<div class="text2">Round-the-clock assistance for a smooth shopping experience.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-main">
					<div class="wrapper">
						<div class="grid">
							<div class="link-block grid__item one-fifth">
								<div class="heading">Buyer Central
									<i class="fa fa-caret-down" aria-hidden="true"></i>
								</div>
								<div class="content">
									<ul class="grid__link">
										<li>
											<a href="#">
												<span>Sign in</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span>Buyer Protection</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span>Payment Options</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span>Shipping Policy</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span>Return Policy</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="link-block grid__item one-fifth">
								<div class="heading">Information
									<i class="fa fa-caret-down" aria-hidden="true"></i>
								</div>
								<div class="content">
									<ul class="grid__link">
										<li>
											<a href="#">
												<span>Merchant Central</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span>Merchant Sign In</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span>Merchant Registration</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span>How Does It Work</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span>Pricing</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="link-block grid__item one-fifth">
								<div class="heading">Help
									<i class="fa fa-caret-down" aria-hidden="true"></i>
								</div>
								<div class="content">
									<ul class="grid__link">
										<li>
											<a href="#">
												<span>See all Help</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span>My Account</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span>FAQs</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span>Other Services</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span>Shop Box</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="newsletter-social-block grid__item two-fifths">
								<div class="newsletter-area">
									<div class="heading">Subscription</div>
									<div class="desc">
										Register now to get updates on promotions and coupons
									</div>
									<div class="action">
										<form method="post" action="#" id="contact_form" accept-charset="UTF-8" class="contact-form">
											<input type="hidden" name="form_type" value="customer">
											<input type="hidden" name="utf8" value="✓">
											<div class="newsletter-box input-group">
												<input type="hidden" name="contact[tags]" value="newsletter">
												<input type="email" name="contact[email]" id="Email" class="input-group__field newsletter__input" value="" placeholder="Please enter your email">
												<span class="input-group__btn">
													<button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe">Subscription</button>
												</span>
											</div>
										</form>
									</div>
								</div>
								<div class="social-area">
									<div class="heading">Stay connected</div>
									<div class="social">
										<ul class="socialLinks socialLinks--alt">
											<li class="socialLinks-item">
												<a href="./collection.html" title="" class="icon-social facebook">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li class="socialLinks-item">
												<a href="./collection.html" title="" class="icon-social twitter">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li class="socialLinks-item">
												<a href="./collection.html" title="" class="icon-social google-plus">
													<i class="fa fa-google-plus"></i>
												</a>
											</li>
											<li class="socialLinks-item">
												<a href="./collection.html" title="" class="icon-social pinterest">
													<i class="fa fa-pinterest"></i>
												</a>
											</li>
											<li class="socialLinks-item">
												<a href="./collection.html" title="" class="icon-social instagram">
													<i class="fa fa-instagram"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="wrapper">
						<div class="grid">
							<div class="copyright-block grid__item one-half">
								<div class="cr-text">
									<p>© 2019 Megastore. All rights Reserved</p>
								</div>
							</div>
							<div class="payment-block">
								<ul class="payment-icons list--inline">
									<li class="payment-icon">
										<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-visa" viewBox="0 0 27 20">
											<path fill="#444" d="M19.16 8.465q-.781-.352-1.621-.332-.605 0-.928.225t-.322.508.283.508.947.557q1.855.84 1.836 2.285 0 1.328-1.035 2.119t-2.773.791q-1.445-.02-2.441-.449l.293-1.914.273.156q1.113.449 2.07.449.527 0 .918-.225t.41-.635q0-.273-.254-.498t-.918-.557q-.371-.195-.654-.371t-.596-.459-.488-.664-.176-.811q.02-1.23 1.064-2.002t2.666-.771q1.035 0 1.953.332l-.273 1.855zm-9.14-1.934l-3.457 8.477H4.258L2.461 8.25q.938.371 1.709 1.133t1.104 1.66Q4.063 7.703.001 6.688l.02-.156h3.535q.82 0 .996.684l.762 3.906.254 1.172 2.129-5.762h2.324zm3.085 0l-1.367 8.477H9.55l1.367-8.477h2.188zm13.946 8.477H25q-.156-.996-.234-1.27l-2.813-.02-.449 1.289H19.18l3.262-7.793q.293-.684 1.152-.684h1.68zM23.77 8.797l-.137.361q-.078.205-.127.342t-.029.117q-.703 1.875-.879 2.383h1.777l-.469-2.461z"></path>
										</svg>
									</li>
									<li class="payment-icon">
										<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-master" viewBox="0 0 23 15">
											<path d="M17.375 8.166c-.537 0-.644.237-.644.437 0 .1.061.276.284.276.437 0 .53-.575.514-.699-.015 0-.03-.015-.154-.015zm-6.301-.975c-.399 0-.476.453-.476.499h.813c-.008-.039.07-.499-.337-.499zm-5.526.975c-.537 0-.645.237-.645.437 0 .1.061.276.285.276.437 0 .53-.575.514-.699-.016 0-.03-.015-.154-.015zm15.45-.899c-.323 0-.576.376-.576.937 0 .346.122.568.384.568.399 0 .583-.515.583-.899.008-.422-.13-.606-.392-.606zM16.292.951a6.7 6.7 0 0 0-4.368 1.62 7.007 7.007 0 0 1 1.88 3.024h-.322a6.772 6.772 0 0 0-1.789-2.817 6.723 6.723 0 0 0-1.788 2.817h-.323A7.004 7.004 0 0 1 11.58 2.47 6.817 6.817 0 0 0 7.097.798 6.859 6.859 0 0 0 .236 7.659a6.86 6.86 0 0 0 11.343 5.196 7.07 7.07 0 0 1-1.872-2.764h.33a6.727 6.727 0 0 0 1.657 2.449 6.731 6.731 0 0 0 1.659-2.449h.33a6.937 6.937 0 0 1-1.759 2.656 6.7 6.7 0 0 0 4.368 1.62c3.699 0 6.708-3.009 6.708-6.709C23 3.958 19.992.95 16.292.95v.001zM3.13 9.44l.414-2.618-.936 2.618h-.499l-.061-2.618-.445 2.618H.897l.584-3.477h1.066l.031 2.133.721-2.133H4.45L3.875 9.44H3.13zm2.495 0l.022-.277c-.015 0-.23.338-.752.338-.268 0-.705-.146-.705-.783 0-.813.66-1.081 1.297-1.081.1 0 .314.015.314.015s.023-.046.023-.184c0-.223-.2-.254-.468-.254-.475 0-.798.13-.798.13l.107-.63s.384-.16.883-.16c.26 0 1.005.03 1.005.882l-.284 2.01h-.644V9.44zm2.709-.89c0 .967-.937.928-1.105.928-.614 0-.799-.085-.822-.092l.1-.636c0-.008.307.107.645.107.199 0 .453-.015.453-.253 0-.354-.913-.269-.913-1.106 0-.737.544-.951 1.09-.951.414 0 .674.053.674.053l-.091.645s-.4-.03-.499-.03c-.26 0-.399.052-.399.237 0 .376.868.191.868 1.098h-.001zM9.4 7.306l-.207 1.266c-.016.1.015.238.268.238.061 0 .138-.023.185-.023l-.092.622c-.077.023-.284.092-.545.092-.338 0-.583-.192-.583-.622 0-.292.414-2.67.43-2.686h.73l-.078.43h.36l-.091.683H9.4zm1.772 1.55c.369 0 .775-.176.775-.176l-.13.705s-.238.123-.768.123c-.583 0-1.258-.246-1.258-1.274 0-.89.544-1.681 1.274-1.681.798 0 1.044.583 1.044 1.067 0 .191-.092.668-.092.668h-1.49c0-.016-.137.567.645.567v.001zm2.426-1.42c-.506-.176-.544.799-.76 2.01h-.752l.453-2.824h.683l-.06.407s.245-.445.567-.445a.92.92 0 0 1 .138.007c-.092.2-.185.376-.269.844v.001zm2.096 1.965s-.392.1-.637.1c-.868 0-1.313-.6-1.313-1.512 0-1.374.822-2.103 1.666-2.103.376 0 .821.176.821.176l-.122.775s-.299-.207-.668-.207c-.498 0-.944.476-.944 1.335 0 .423.208.821.722.821.246 0 .606-.176.606-.176l-.13.79-.001.001zm1.756.039l.023-.277c-.016 0-.23.338-.752.338-.268 0-.706-.146-.706-.783 0-.813.66-1.081 1.297-1.081.1 0 .315.015.315.015s.023-.046.023-.184c0-.223-.2-.254-.468-.254-.476 0-.799.13-.799.13l.108-.63s.384-.16.882-.16c.26 0 1.006.03 1.006.882l-.284 2.01c-.008-.007-.645-.007-.645-.007zm1.512.008h-.752l.453-2.825h.683l-.06.407s.245-.446.567-.446c.091 0 .138.008.138.008-.1.2-.185.376-.269.844-.506-.176-.544.807-.76 2.01v.002zm2.234-.008l.03-.26s-.245.306-.683.306c-.606 0-.906-.583-.906-1.182 0-.929.561-1.735 1.228-1.735.43 0 .706.376.706.376l.16-.975h.73l-.56 3.469h-.706zm1.367-.015a.195.195 0 0 1-.108.03.178.178 0 0 1-.107-.03.226.226 0 0 1-.085-.085.187.187 0 0 1-.03-.108c0-.038.007-.077.03-.107a.226.226 0 0 1 .085-.085.187.187 0 0 1 .107-.03c.039 0 .077.007.108.03.038.016.061.046.085.085.023.038.03.069.03.107a.178.178 0 0 1-.03.108.218.218 0 0 1-.085.085zm-.024-.353a.197.197 0 0 0-.183 0 .156.156 0 0 0-.07.069.197.197 0 0 0 0 .183c.016.03.039.054.07.07a.197.197 0 0 0 .183 0 .151.151 0 0 0 .07-.07.197.197 0 0 0 0-.183.156.156 0 0 0-.07-.07zm-.03.284l-.023-.039a.18.18 0 0 0-.039-.053c-.008-.007-.015-.008-.03-.008h-.023v.1h-.038v-.238h.084c.031 0 .047 0 .062.008.014.008.022.016.03.023.008.007.008.022.008.038s-.008.03-.016.046c-.016.016-.03.023-.046.023.008 0 .016.008.023.016.006.008.022.023.038.046l.03.047h-.06v-.01zm-.015-.17c0-.008 0-.016-.008-.016l-.016-.015c-.008 0-.023-.008-.038-.008h-.047v.069h.047c.022 0 .038 0 .046-.008.016-.008.016-.016.016-.023v.001z" fill="#444" fill-rule="evenodd"></path>
										</svg>
									</li>
									<li class="payment-icon">
										<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-american_express" viewBox="0 0 20 20">
											<path fill="#444" d="M8.373 7.623v-.46H6.606V9.37h1.767v-.453h-1.24v-.44H8.34v-.453H7.133v-.4zm2.487.134c0-.247-.1-.393-.267-.487-.173-.1-.367-.107-.64-.107H8.74v2.213h.527v-.807h.567c.193 0 .307.02.387.093.093.107.087.3.087.433v.28h.533v-.433c0-.2-.013-.293-.087-.407a.629.629 0 0 0-.26-.187.638.638 0 0 0 .367-.593zm-.693.313c-.073.047-.16.047-.26.047h-.64v-.493h.653c.093 0 .187.007.253.04s.113.1.113.193c-.007.1-.047.173-.12.213zm-8.874.813h1.1l.2.493h1.073V7.643l.767 1.733H4.9l.767-1.733v1.733h.54V7.163h-.873l-.633 1.5-.693-1.5h-.86v2.093l-.9-2.093h-.787L.574 9.23v.14h.513l.207-.487zm.547-1.346l.36.88h-.72l.36-.88zm11.22.1h.5v-.473h-.513c-.367 0-.633.08-.8.26-.227.24-.287.533-.287.867 0 .4.093.653.28.847.147.2.413.273.767.247h.62l.2-.493h1.1l.207.493h1.073v-1.66l1 1.66h.747V7.172h-.54v1.54l-.927-1.54h-.807v2.093l-.893-2.093H14l-.747 1.74h-.24c-.14 0-.287-.027-.367-.113-.1-.113-.147-.28-.147-.52 0-.233.06-.407.153-.5.107-.113.213-.14.407-.14zm1.32-.1l.367.88h-.727l.36-.88zm-3.213-.374h.54v2.213h-.54V7.163zm1.96 4.4a.522.522 0 0 0-.273-.493c-.173-.093-.367-.107-.633-.107h-1.22v2.213h.533v-.807h.567c.193 0 .313.02.387.1.1.1.087.3.087.433v.273h.533v-.44c0-.193-.013-.293-.087-.407a.585.585 0 0 0-.26-.187.61.61 0 0 0 .367-.58zm-.694.314a.534.534 0 0 1-.26.047h-.64v-.493h.653c.093 0 .187 0 .253.04.067.033.107.107.107.2s-.047.167-.113.207zM9.86 10.97H8.173l-.673.727-.653-.727h-2.12v2.213H6.82l.673-.733.653.733h1.027v-.74h.66c.46 0 .92-.127.92-.74-.007-.62-.473-.733-.893-.733zm-3.313 1.747H5.254v-.44h1.16v-.453h-1.16v-.4h1.327l.58.647-.613.647zm2.1.26l-.813-.9.813-.873v1.773zm1.206-.987h-.68v-.56h.687c.193 0 .32.08.32.273 0 .187-.127.287-.327.287zm5.327-.567v-.453h-1.76v2.207h1.76v-.46h-1.233v-.44h1.207v-.453h-1.207v-.4zm4.127.647a.171.171 0 0 0-.047-.053c-.12-.12-.313-.173-.6-.18l-.287-.007a.623.623 0 0 1-.207-.027.169.169 0 0 1-.113-.167c0-.073.02-.12.08-.16.053-.033.12-.04.213-.04h.96v-.473h-1.053c-.553 0-.76.34-.76.66 0 .7.62.667 1.113.687.093 0 .147.013.187.047s.067.08.067.147c0 .06-.027.107-.06.147-.04.04-.113.053-.213.053h-1.013v.473h1.02c.34 0 .587-.093.72-.28a.724.724 0 0 0 .113-.413c-.007-.193-.047-.313-.12-.413zm-.774 1.54h-1.367v-.2c-.16.127-.447.2-.72.2h-4.313v-.713c0-.087-.007-.093-.093-.093h-.067v.807h-1.42v-.833c-.24.1-.507.113-.733.107h-.167v.733h-1.72l-.427-.48-.447.48H4.246v-3.087h2.847l.407.473.433-.473H9.84c.22 0 .58.02.747.18v-.18h1.707c.16 0 .507.033.713.18v-.18h2.58v.18c.127-.12.4-.18.633-.18h1.447v.18c.153-.107.367-.18.66-.18h.98V.258H.574v7.78l.573-1.313h1.38l.18.367v-.367H4.32l.353.793.347-.793h5.127c.233 0 .44.047.593.18v-.18h1.407v.18c.24-.133.54-.18.88-.18h2.033l.187.367v-.367h1.507l.207.367v-.367h1.467v3.08h-1.48l-.28-.467v.467h-1.853l-.2-.493h-.453l-.207.493h-.96c-.38 0-.66-.087-.847-.187v.187h-2.28v-.7c0-.1-.02-.107-.08-.107h-.087v.807H5.288v-.38l-.16.38h-.92l-.16-.38v.373H2.275l-.2-.493h-.453l-.207.493h-.84v9.313h18.727v-5.653c-.207.113-.487.153-.767.153zm-2.013-.907h-1.027v.473h1.027c.533 0 .827-.22.827-.7 0-.227-.053-.36-.16-.467-.12-.12-.313-.173-.607-.18l-.287-.007a.623.623 0 0 1-.207-.027.169.169 0 0 1-.113-.167c0-.073.02-.12.08-.16.053-.033.113-.04.213-.04h.967v-.473h-1.06c-.553 0-.753.34-.753.66 0 .7.62.667 1.113.687.093 0 .147.013.187.047.033.033.067.08.067.147 0 .06-.027.107-.06.147-.033.047-.107.06-.207.06z"></path>
										</svg>
									</li>
									<li class="payment-icon">
										<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-paypal" viewBox="0 0 36 20">
											<path fill="#444" d="M33.691 7.141h2.012l-1.66 7.5h-1.992zM5.332 7.16q.918 0 1.553.674t.381 1.865q-.234 1.152-1.064 1.807t-1.963.654H2.696l-.547 2.48H.001l1.641-7.48h3.691zm19.141 0q.918 0 1.563.674t.391 1.865q-.156.762-.596 1.328t-1.074.85-1.396.283h-1.523l-.527 2.48h-2.148l1.641-7.48h3.672zM8.027 9.055q.098-.02.42-.098t.537-.127.566-.098.684-.049q.547-.02 1.025.078t.879.313.566.645.029 1.016l-.82 3.906H9.94l.137-.586q-.41.41-1.035.586t-1.182.088-.889-.615-.176-1.387q.215-1.016 1.221-1.455t2.744-.439q.059-.293-.059-.469t-.352-.244-.625-.049q-.508.02-1.094.156t-.781.254zm19.18 0q.117-.02.342-.078t.42-.107.439-.088.508-.068.537-.029q.566-.02 1.045.078t.879.313.576.645.039 1.016l-.84 3.906H29.16l.137-.586q-.41.41-1.045.586t-1.201.088-.898-.615-.176-1.387q.137-.703.684-1.123t1.348-.596 1.973-.176q.098-.449-.166-.615t-.869-.146q-.352 0-.762.078t-.713.166-.459.166zM4.004 10.734q.273 0 .537-.137t.449-.371.244-.527q.117-.43-.098-.723t-.625-.293H3.476l-.469 2.051h.996zm19.16 0q.41 0 .781-.303t.469-.732-.127-.723-.615-.293h-1.094l-.43 2.051h1.016zm-9.531-1.933l.801 5.879-1.445 2.461h2.207l4.688-8.34h-2.031L15.9 12.278l-.313-3.477h-1.953zm-3.242 3.887q0-.195.098-.527h-.508q-.918 0-1.172.488-.195.352-.01.586t.537.234q.859-.039 1.055-.781zm19.199 0q.039-.332.117-.527h-.488q-.977 0-1.191.488-.195.352-.01.586t.537.234q.879-.039 1.035-.781z"></path>
										</svg>
									</li>
									<li class="payment-icon">
										<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-diners_club" viewBox="0 0 17 20">
											<path fill="#444" d="M10.156 3.875q1.895 0 3.525.859t2.646 2.471 1.016 3.584q0 1.836-1.006 3.418t-2.666 2.49-3.516.908H6.913q-1.855 0-3.457-.908t-2.529-2.49-.928-3.418q0-1.992.938-3.584t2.51-2.461 3.467-.869h3.242zM6.934 17.02q1.719 0 3.164-.84t2.285-2.285.84-3.164q0-1.699-.84-3.145t-2.285-2.285-3.164-.84q-1.699 0-3.145.84T1.504 7.586t-.84 3.145q0 1.719.84 3.164t2.285 2.285 3.145.84zm-1.426-2.579q-1.133-.43-1.836-1.445t-.723-2.266q.02-1.25.732-2.275t1.826-1.436v7.422zM8.379 7.02q1.113.41 1.826 1.436t.713 2.275-.713 2.266-1.826 1.445V7.02z"></path>
										</svg>
									</li>
									<li class="payment-icon">
										<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-discover" viewBox="0 0 52 20">
											<path fill="#444" d="M22.598 14.617q-1.094.488-2.031.488-1.855 0-3.125-1.26t-1.27-3.115q0-1.797 1.299-3.076t3.135-1.279q1.035 0 1.992.508v1.914q-.957-.938-2.031-.938-1.152 0-1.943.84t-.791 2.031q0 1.27.791 2.07t2.021.801q1.055 0 1.953-.898v1.914zm-8.086-6.152q-.586-.664-1.328-.664-.527 0-.869.264t-.342.654q0 .332.264.557t.986.479q1.406.508 1.914 1.064t.508 1.553q0 1.211-.811 1.973t-2.08.762q-1.816 0-2.891-1.582l1.055-1.016q.586 1.113 1.777 1.113.547 0 .908-.332t.361-.84q0-.527-.488-.859-.273-.176-1.133-.469-1.133-.43-1.592-.938t-.459-1.387q0-1.016.752-1.699t1.846-.684q1.387 0 2.461.957zm13.164-2.051q1.875 0 3.154 1.26t1.279 3.076-1.289 3.086-3.145 1.27q-1.914 0-3.193-1.25t-1.279-3.145q0-1.797 1.309-3.047t3.164-1.25zm-25.293.137q1.973 0 3.232 1.172t1.26 3.008q0 .918-.391 1.768t-1.113 1.455q-1.211.977-2.988.977H0V6.552h2.383zm5.234 0h1.641v8.379H7.617V6.551zm30.43 0h1.777l-3.633 8.574h-.859l-3.535-8.574h1.758l2.227 5.625zm2.5 0h4.629v1.426h-2.988v1.855h2.871v1.406h-2.871v2.266h2.988v1.426h-4.629V6.551zm8.125 0q1.406 0 2.168.645t.762 1.836q0 .957-.479 1.563t-1.396.801l2.617 3.535h-1.992l-2.266-3.398h-.195v3.398H46.25V6.552h2.422zm-.313 3.847q1.582 0 1.582-1.289 0-1.23-1.582-1.23h-.469v2.52h.469zM2.09 13.504q1.484 0 2.207-.664.43-.391.674-.947t.244-1.162q0-1.27-.918-2.07-.742-.684-2.207-.684h-.449v5.527h.449z"></path>
										</svg>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<div class="combo-icons medium-down--hide">
		<div id="float-saleoff" title="Special Deals">
			<a href="./page-saleoff.html">
				<i class="fa fa-gift" aria-hidden="true"></i>
			</a>
		</div>
		<div id="float-wishlist" title="My Wishlist">
			<a href="./page-wishlist.html">
				<i class="fa fa-heart" aria-hidden="true"></i>
				<span class="number">
					<span class="wlnumber">0</span>
				</span>
			</a>
		</div>
		<div id="float-compare" title="My Compare">
			<a href="./page-compare.html">
				<i class="fa fa-refresh" aria-hidden="true"></i>
				<span class="number">
					<span class="cpnumber">0</span>
				</span>
			</a>
		</div>
	</div>
	<div id="scroll-to-top" title="Scroll to Top" class="off">
		<i class="fa fa-caret-up"></i>
	</div>
@stop
