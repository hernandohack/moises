@extends('layouts.producto')

@section('detail')

<div class="grid product-single">
    <div class="grid__item large--one-half text-center">
        <div class="product-single__photos elevatezoom" id="ProductPhoto">
            <img src="{{asset($imagenes[0]->image_path)}}" alt="Reprehenderit qui in ea" id="ProductPhotoImg" data-image-id="3885204537433" data-zoom-image="./assets/images/detail1.png">
        </div>
        <div class="product-single__thumbnails-grid">
            <ul class="product-single__thumbnails" id="ProductThumbs">
                @foreach ($imagenes as $img)

                <li class="thumb__element">
                    <a href="{{asset($img->image_path)}}" class="product-single__thumbnail">
                        <img src="{{asset($img->image_path)}}" alt="Reprehenderit qui in ea">
                    </a>
                </li>

                @endforeach


            </ul>
        </div>
    </div>
    <div class="grid__item product-single__meta--wrapper large--one-half">
        <div class="product-single__meta">
            <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                <h3>{{$producto->product}}</h3>

                <div class="group-addditionaldata">
                    <div class="watching-order">
                        <div class="watching-area">
                            <div class="watching-icon"></div>
                            <div class="watching-count" data-watchingmin="100" data-watchingmax="300">269</div>
                            <div class="watching-text">watching</div>
                        </div>
                        <div class="order-area">
                            <div class="order-icon"></div>
                            <div class="order-count" data-ordermin="10" data-ordermax="30">20</div>
                            <div class="order-text">sold in the last hour</div>
                        </div>
                    </div>
                    <div class="qty-bar">
                        <span class="order-process process" style="width: 78.9474%;"></span>
                        <div class="order-text">
                            <span class="qty-count" data-qtymin="5" data-qtymax="19">15</span> of 20 sold

                        </div>
                    </div>
                </div>
                <div class="price_wrapper">
                    {{-- <span id="PriceA11y" class="visually-hidden">Regular price</span>
                    <span class="product-single__price--wrapper">
                        <span id="ComparePrice" class="product-single__price--compare-at">
                        <span class="money">$ {{$producto->list_price}} USD</span>
                    </span>
                    </span> --}}
                    <span id="ComparePriceA11y" class="visually-hidden">Sale price</span>
                    <span id="ProductPrice" class="product-single__price on-sale" itemprop="price" content="25.0">
                        <span class="money">${{$producto->price}} USD</span>
                    </span>
                    <div class="product-salelabel ">
                        <span class="salelabel-area" style="color:#ff5722; background-color: #ffd839;">-20%</span>
                        <span class="salelabel-days">6 days left</span>
                    </div>
                </div>
                <div class="sku">
                    <strong>SKU: </strong> {{$producto->productcode}}
                </div>
                <div class="collshow">
                    <strong>Category:  </strong>
                    <a href="./collection.html">All Products</a>,
                    <a href="./collection.html">Flash Sale</a>,
                    <a href="./collection.html">Jewelry</a>
                </div>
                <div class="tags">
                    <strong>Tags:  </strong>
                    <a href="./collection.html">jewelry</a>,
                    <a href="./collection.html">voluptate</a>
                </div>
                <meta itemprop="priceCurrency" content="USD">
                <link itemprop="availability" href="http://schema.org/InStock">
                <form action="#" method="post" enctype="multipart/form-data" class="product-single__form AddToCartForm" id="">
                    <div class="product-single__quantity">
                        <label for="Quantity" class="product-single__quantity-label js-quantity-selector">Quantity</label>
                        <div class="js-qty">
                            <button type="button" class="js-qty__adjust js-qty__adjust--minus icon-fallback-text" data-id="" data-qty="0" aria-label="Reduce item quantity by one">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text" aria-hidden="true">−</span>
                            </button>
                            <input type="text" class="js-qty__num" value="1" min="1" data-id="" aria-label="quantity" pattern="[0-9]*" name="quantity" id="Quantity">
                            <button type="button" class="js-qty__adjust js-qty__adjust--plus icon-fallback-text" data-id="" data-qty="11" aria-label="Increase item quantity by one">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text" aria-hidden="true">+</span>
                            </button>
                        </div>
                    </div>
                    <div class="group-button">
                        <div class="product-single__buynow">
                            <div class="btn Buynow" title="Add and Go to Checkout directly!">
                                <span class="BuynowText">Buy Now</span>
                            </div>
                        </div>
                        <div class="product-single__add-to-cart">
                            <button type="submit" name="add" class="btn AddToCart" title="Add this product to Cart">
                                <span class="AddToCartText">Add to Cart</span>
                            </button>
                        </div>
                        <break></break>
                    </div>
                </form>

                <div class="returnpolicy">
                    <div class="block-element">
                        <div class="element-text">Return Policy</div>
                        <div class="element-content">
                            <div class="text">Returns accepted if product not as described, buyer pays return shipping fee; or keep the product &amp; agree refund with seller.
                                <a href="pages/contact-us">View details</a>
                            </div>
                        </div>
                    </div>
                    <div class="block-element">
                        <div class="element-text">Seller Guarantees:</div>
                        <div class="element-content">
                            <div class="text">On-time Delivery
                                <span>25 days</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="payment">
                    <div class="block-element">
                        <div class="element-text">Payment:</div>
                        <div class="element-content">
                            <img src="./assets/images/payment.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="buyerprotection">
                    <div class="block-element">
                        <div class="element-content">
                            <div class="buyer-heading">Buyer Protection</div>
                            <div class="buyer-text1">
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                <strong>Full Refund</strong> if you don't receive your order.
                            </div>
                            <div class="buyer-text2">
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                <strong>Full or Partial Refund</strong> , if the item is not as described
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-right button-backtocol">
        <a href="/collections/flash-sale" class="return-link">← Back to Flash Sale</a>
    </div>
    <div class="grid grid__item product-information">
        <div id="tabs-information">
            <ul class="nav nav-tabs tabs-left sideways">
                <li class="description">
                    <a href="#desc" data-toggle="tab" class="active">Description</a>
                </li>
                <li class="warranty">
                    <a href="#size" data-toggle="tab">Warranty</a>
                </li>
                <li class="delivery">
                    <a href="#delivery" data-toggle="tab">Delivery</a>
                </li>
                <li class="payment">
                    <a href="#payment" data-toggle="tab">Payment</a>
                </li>
                <li class="reviews">
                    <a href="#customerreview" data-toggle="tab">Customer Review</a>
                </li>
            </ul>
            <div class="tab-panel active" id="desc">
                <p style="text-align:center;">{!!$producto->fulldescr!!}

                </p>
            </div>
            <div class="tab-panel fade " id="size">
                <h2>Warranty Information</h2>
                <p>LIMITED WARRANTIES
                    <br>Limited Warranties are non-transferable. The following Limited Warranties are given to the original retail purchaser of the following Ashley Furniture Industries, Inc.Products:
                </p>
                <p>Frames Used In Upholstered and Leather Products
                    <br>Limited Lifetime Warranty
                    <br> A Limited Lifetime Warranty applies to all frames used in sofas, couches, love seats, upholstered chairs, ottomans, sectionals, and sleepers. Ashley Furniture Industries,Inc. warrants these components to you, the original retail purchaser, to be free from material manufacturing defects.
                </p>
            </div>
            <div class="tab-panel fade " id="delivery">
                <h2>Purchasing &amp; Delivery</h2> Before you make your purchase, it’s helpful to know the measurements of the area you plan to place the furniture. You should also measure any doorways and hallways through which the furniture will pass to get to its final destination.
                <br>
                <h5>Picking up at the store</h5> Shop requires that all products are properly inspected BEFORE you take it home to insure there are no surprises. Our team is happy to open all packages and will assist in the inspection process. We will then reseal packages for safe transport. We encourage all customers to bring furniture pads or blankets to protect the items during transport as well as rope or tie downs. Shop will not be responsible for damage that occurs after leaving the store or during transit. It is the purchaser’s responsibility to make sure the correct items are picked up and in good condition.
                <br>
                <h5>Delivery</h5> Customers are able to pick the next available delivery day that best fits their schedule. However, to route stops as efficiently as possible, Shop will provide the time frame. Customers will not be able to choose a time. You will be notified in advance of your scheduled time frame. Please make sure that a responsible adult (18 years or older) will be home at that time.

                <br> In preparation for your delivery, please remove existing furniture, pictures, mirrors, accessories, etc. to prevent damages. Also insure that the area where you would like your furniture placed is clear of any old furniture and any other items that may obstruct the passageway of the delivery team. Shop will deliver, assemble, and set-up your new furniture purchase and remove all packing materials from your home. Our delivery crews are not permitted to move your existing furniture or other household items. Delivery personnel will attempt to deliver the purchased items in a safe and controlled manner but will not attempt to place furniture if they feel it will result in damage to the product or your home. Delivery personnel are unable to remove doors, hoist furniture or carry furniture up more than 3 flights of stairs. An elevator must be available for deliveries to the 4th floor and above.

            </div>
            <div class="tab-panel fade " id="payment">
                <h2>Purchasing &amp; Delivery</h2> Before you make your purchase, it’s helpful to know the measurements of the area you plan to place the furniture. You should also measure any doorways and hallways through which the furniture will pass to get to its final destination.
                <br>
                <h5>Picking up at the store</h5> Shop requires that all products are properly inspected BEFORE you take it home to insure there are no surprises. Our team is happy to open all packages and will assist in the inspection process. We will then reseal packages for safe transport. We encourage all customers to bring furniture pads or blankets to protect the items during transport as well as rope or tie downs. Shop will not be responsible for damage that occurs after leaving the store or during transit. It is the purchaser’s responsibility to make sure the correct items are picked up and in good condition.
                <br>
                <h5>Delivery</h5> Customers are able to pick the next available delivery day that best fits their schedule. However, to route stops as efficiently as possible, Shop will provide the time frame. Customers will not be able to choose a time. You will be notified in advance of your scheduled time frame. Please make sure that a responsible adult (18 years or older) will be home at that time.

                <br> In preparation for your delivery, please remove existing furniture, pictures, mirrors, accessories, etc. to prevent damages. Also insure that the area where you would like your furniture placed is clear of any old furniture and any other items that may obstruct the passageway of the delivery team. Shop will deliver, assemble, and set-up your new furniture purchase and remove all packing materials from your home. Our delivery crews are not permitted to move your existing furniture or other household items. Delivery personnel will attempt to deliver the purchased items in a safe and controlled manner but will not attempt to place furniture if they feel it will result in damage to the product or your home. Delivery personnel are unable to remove doors, hoist furniture or carry furniture up more than 3 flights of stairs. An elevator must be available for deliveries to the 4th floor and above.

            </div>
            <div class="tab-panel fade " id="customerreview">

            </div>
        </div>
        <div id="product-additional-information">
            <div class="related-products">
                <div class="section-header">
                    <h2>Other Customers also buy</h2>
                </div>
                <div class="grid-uniform">
                    <ul class="related-products-items related-slider">
                        @foreach ($randomProducts as  $ramdom)
                        <div class="grid__item">
                            <div class="grid-view-item">
                                <div class="grid-normal-display">
                                    <div class="grid__image product-image">
                                        <a class="grid-view-item__link" href="{{route('producto',$ramdom->slug)}}">
                                            <img class="grid-view-item__image" src="{{asset($ramdom->image_path)}}" alt="Consequuntur magni dolores">
                                            <img class="hover-image" src="{{asset($ramdom->image_path)}}" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
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
                                    <div class="grid-view-item__vendor"><a href="{{route('producto',$ramdom->slug)}}">{{$ramdom->product}}</a></div>
                                    <div class="h4 grid-view-item__title"><a  href="{{route('producto',$ramdom->slug)}}">{{$ramdom->productcode}}</a></div>
                                    <div class="price-and-ship">
                                        <div class="grid-view-item__meta grid__item large--three-quarters">
                                            <span class="product-price__price product-price__sale">
                                            <span class="money">${{$ramdom->list_price}} USD</span>
                                            <span class="product-price__sale-label">On Sale</span>
                                            </span>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
