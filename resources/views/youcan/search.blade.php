@extends('layouts.main')

@section('content')
    <div class="shop mt-30 mt-xs-20">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                        @foreach($product_notranslate as $product)
                            <div class="product-layout product-grid col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a class="rec-fill front front--slide-left" href="/{{config('app.locale', app()->getLocale())}}/product/{{ $product->id}}"><img src="/storage/{{$product->image_path}}" alt="image" title="image" class="img-responsive" /></a>
                                        <a class="rec-fill back back--slide-left" href="/{{config('app.locale', app()->getLocale())}}/product/{{ $product->id}}"><img src="/storage/{{$product->image_path}}" alt="image" title="image" class="img-responsive" /></a>
                                        <div class="sale">
                                            <p>@lang('main.discount')</p>
                                        </div>
                                        <div class="onhover">
                                            <ul class="list-inline">
                                                <li>
                                                    <a class="thm-btn  shoping-cart" data-id="{{$product->id}}" data-name="{{$product->name}}" data-price="{{$product->price}}" data-image="{{$product->image_path}}" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('main.add-to-card')</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4><a href="/{{config('app.locale', app()->getLocale())}}/product/{{ $product->id}}">{{ $product->getTranslatedAttribute('name',config('app.locale'),config('voyager.multilingual.default'))}}</a></h4>
                                        <p class="price">
                                            @if($product->action_price != null)
                                                <span class="price-old">{{$product->price}} {{App\Services\CurrencyConversion::getCurrencySymbol()}}</span>{{round($product->action_price/$currencys->rate,2)}} {{App\Services\CurrencyConversion::getCurrencySymbol()}}</p>
                                        @else
                                        {{$product->price}} {{App\Services\CurrencyConversion::getCurrencySymbol()}}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                            @foreach($prod_translate as $product)
                                <div class="product-layout product-grid col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a class="rec-fill front front--slide-left" href="/{{config('app.locale', app()->getLocale())}}/product/{{ $product->id}}"><img src="/storage/{{$product->image_path}}" alt="image" title="image" class="img-responsive" /></a>
                                            <a class="rec-fill back back--slide-left" href="/{{config('app.locale', app()->getLocale())}}/product/{{ $product->id}}"><img src="/storage/{{$product->image_path}}" alt="image" title="image" class="img-responsive" /></a>
                                            <div class="sale">
                                                <p>@lang('main.discount')</p>
                                            </div>
                                            <div class="onhover">
                                                <ul class="list-inline">
                                                    <li>
                                                        <a class="thm-btn  shoping-cart" data-id="{{$product->id}}" data-name="{{$product->name}}" data-price="{{$product->price}}" data-image="{{$product->image_path}}" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i>@lang('main.add-to-card')</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="/{{config('app.locale', app()->getLocale())}}/product/{{ $product->id}}">{{ $product->getTranslatedAttribute('name',config('app.locale'),config('voyager.multilingual.default'))}}</a></h4>
                                            <p class="price">
                                                @if($product->action_price != null)
                                                    <span class="price-old">{{$product->price}} {{App\Services\CurrencyConversion::getCurrencySymbol()}}</span>{{round($product->action_price/$currencys->rate,2)}} {{App\Services\CurrencyConversion::getCurrencySymbol()}}</p>
                                            @else
                                            {{$product->price}} {{App\Services\CurrencyConversion::getCurrencySymbol()}}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    </div>
{{--                    <ul class="list-inline pagination">--}}
{{--                        {{$product_notranslate->links()}}--}}
{{--                    </ul>--}}
{{--                    <ul class="list-inline pagination">--}}
{{--                        {{$prod_translate->links()}}--}}
{{--                    </ul>--}}
                </div>
            </div>
        </div>
    </div>

@endsection

