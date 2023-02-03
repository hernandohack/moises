@extends('layouts.categoria')

@section('productos')

@foreach ( $productos as $pro )
<div class="grid-element grid__item medium-up--one-quarter one-quarter">
    <div class="grid-view-item">
        <div class="grid-normal-display">
            <div class="grid__image product-image">
                <a class="grid-view-item__link" href="{{route('producto',$pro->slug)}}">
                {{-- <a class="grid-view-item__link" href="{{ route('producto', [$pro->slug], false) }}"> --}}
                    <img class="grid-view-item__image" src="{{asset($pro->image_path)}}" alt="{{$pro->image_path}}">
                    <img class="hover-image" src="{{asset($pro->image_path)}}" alt="{{$pro->image_path}}" title="{{$pro->image_path}}">
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
            {{-- <div class="grid-view-item__vendor">KingStone</div> --}}
            <div class="h4 grid-view-item__title"><a href="{{route('producto',$pro->slug)}}">{{$pro->product}}</a></div>
            <div class="price-and-ship">
                <div class="grid-view-item__meta grid__item large--three-quarters">
                    {{-- <s class="product-price__price"><span class="money">$24.99 USD</span></s> --}}
                    <span class="product-price__price product-price__sale">
                    <span class="money">${{$pro->list_price}} USD</span>

                </div>

            </div>

        </div>
    </div>
</div>
@endforeach


@stop
