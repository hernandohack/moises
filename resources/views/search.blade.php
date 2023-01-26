@extends('layouts.producto')

@section('detail')


		<main class="main-content">
			<div id="html-section-collection-template" class="html-section">
				<div id="CollectionSection" class="collection-left" data-section-id="collection-template" data-section-type="collection-template" data-grid-type="4">
					<div class="wrapper">
						<div class="grid">
							<div class="grid__item">
								<header class="section-header text-center sticky affix animated">
									<h1 class="text-center">Your search for "{{$buscar}}" revealed the following:</h1>
									<hr class="hr--small">
								</header>

								<hr class="hr--medium hr--clear">
								<div class="grid-uniform">
                                    @foreach ($productos as $p)

                                    <div class="grid-element grid__item medium-up--one-quarter one-quarter" style="min-height: 350px">
                                        <div class="grid-view-item">
                                            <div class="grid-normal-display">
                                                <div class="grid__image product-image">
                                                    <a class="grid-view-item__link" href="{{route('producto', $p->slug)}}">
                                                        <img class="grid-view-item__image" src="{{asset($p->image_path)}}" alt="{{asset($p->product)}}">
                                                        <img class="hover-image" src="{{asset($p->image_path)}}" alt="{{($p->product)}}" title="{{($p->product)}}">
                                                    </a>
                                                    <div class="product-label">
                                                        <div class="label-element deal-label">
                                                            {{-- <span style="color:#ff5722; background-color: #ffd839;">20% off</span> --}}
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
                                                <div class="grid-view-item__vendor">{{$p->productcode}}</div>
                                                <div class="h4 grid-view-item__title"><a href="{{route('producto', $p->slug)}}">{{$p->product}}</a></div>
                                                <div class="price-and-ship">
                                                    <div class="grid-view-item__meta grid__item large--three-quarters">
                                                        {{-- <s class="product-price__price"><span class="money">$24.99 USD</span></s> --}}
                                                        <span class="product-price__price product-price__sale">
                                                        <span class="money">{{$p->list_price}}</span>
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
