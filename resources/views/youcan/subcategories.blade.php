@extends('layouts.main')

@section('content')
    @if(isset($groupies))
        <div class="shop">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                        <span class="subcats-title"><a href="/{{config('app.locale')}}/{{$category_id->slug}}" class="previous">{{ $category_id->getTranslatedAttribute('name',config('app.locale'),config('voyager.multilingual.default')) }}</a></span>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <span class="subcats-title">{{ $subcategory_id->getTranslatedAttribute('name',config('app.locale'),config('voyager.multilingual.default')) }}</span>
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                        <span class="subcats-title">{{$products_all->count()}}</span>
                        <div class="row">
                            <div class="product-layout product-grid col-lg-12">
                                @foreach($groupies as $group)
                                    <div class="disp-inl-right col-md-2 col-xs-6">
                                        @if($group->image != null)
                                            <img src="/storage/{{$group->image}}" style="width: 120px; height:90px; margin: 0 auto" alt="image" title="image" class="img-responsive">
                                        @else
                                            <img src="/evrika/img/no-cat-image.png" style=" height:90px; margin: 0 auto" alt="image" title="image" class="img-responsive">
                                        @endif
                                        <a class="btn btn-sub" href="/{{config('app.locale')}}/{{$category_id->slug}}/{{$subcategory_id->slug}}/{{$group->slug}}"><span>{{$group->getTranslatedAttribute('name',config('app.locale'),config('voyager.multilingual.default')) }}</span></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                        <div class="row">
                            @foreach($products_all as $product)
                                <div class="product-layout product-grid col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a class="rec-fill front front--slide-left" href="/{{config('app.locale')}}/{{$category_id->slug}}/{{$subcategory_id->slug}}/product/{{ $product->id}}"><img src="/storage/{{$product->image_path}}" alt="image" title="image" class="img-responsive" /></a>
                                            <a class="rec-fill back back--slide-left" href="/{{config('app.locale')}}/{{$category_id->slug}}/{{$subcategory_id->slug}}/product/{{ $product->id}}"><img src="/storage/{{$product->image_path}}" alt="image" title="image" class="img-responsive" /></a>
                                            @if($product->action_price != null)
                                                <div class="sale">
                                                    <p>@lang('main.discount')</p>
                                                </div>
                                            @endif

                                        </div>
                                        <div class="caption">
                                            <h4><a href="/{{config('app.locale')}}/{{$category_id->slug}}/{{$subcategory_id->slug}}/product/{{ $product->id}}">{{ $product->getTranslatedAttribute('name',config('app.locale'),config('voyager.multilingual.default'))}}</a></h4>
                                            <p class="price">
                                                @if($product->action_price != null)
                                                    <span class="price-old">{{$product->price}} {{App\Services\CurrencyConversion::getCurrencySymbol()}}</span>{{round($product->action_price/$currencys->rate,2)}} {{App\Services\CurrencyConversion::getCurrencySymbol()}}</p>
                                            @else
                                            {{$product->price}} {{App\Services\CurrencyConversion::getCurrencySymbol()}}</p>
                                            @endif
                                            <div class="onhover">
                                                <ul class="list-inline">
                                                    <li>
                                                        @if($product->action_price != null)
                                                            <a onclick="refreshPage({{$product->id}})" class="thm-btn shoping-cart" data-id="{{$product->id}}" data-name="{{$product->getTranslatedAttribute('name',config('app.locale'),config('voyager.multilingual.default'))}}" data-price="{{$product->action_price/$currencys->rate}}" data-image="{{$product->image_path}}"><i id="{{$product->id}}" class="fa fa-shopping-cart"></i> @lang('main.add-to-card')</a>
                                                        @else
                                                            <a onclick="refreshPage({{$product->id}})" class="thm-btn shoping-cart" data-id="{{$product->id}}" data-name="{{$product->getTranslatedAttribute('name',config('app.locale'),config('voyager.multilingual.default'))}}" data-price="{{$product->price}}" data-image="{{$product->image_path}}"><i id="{{$product->id}}" class="fa fa-shopping-cart"></i> @lang('main.add-to-card')</a>
                                                        @endif
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                        <ul class="list-inline pagination">
                            {{$products_all->links()}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="shop">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                        <div class="row">
                            @foreach($products_all as $product)

                                <div class="product-layout product-grid col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a class="rec-fill front front--slide-left" href="/{{config('app.locale')}}/{{$category_id->slug}}/{{$subcategory_id->slug}}/product/{{ $product->id}}"><img src="/storage/{{$product->image_path}}" alt="image" title="image" class="img-responsive" /></a>
                                            <a class="rec-fill back back--slide-left" href="/{{config('app.locale')}}/{{$category_id->slug}}/{{$subcategory_id->slug}}/product/{{ $product->id}}"><img src="/storage/{{$product->image_path}}" alt="image" title="image" class="img-responsive" /></a>
                                            @if($product->action_price != null)
                                                <div class="sale">
                                                    <p>@lang('main.discount')</p>
                                                </div>
                                            @endif

                                        </div>
                                        <div class="caption">
                                            <h4><a href="/{{config('app.locale')}}/{{$category_id->slug}}/{{$subcategory_id->slug}}/product/{{ $product->id}}">{{ $product->getTranslatedAttribute('name',config('app.locale'),config('voyager.multilingual.default'))}}</a></h4>
                                            <p class="price">
                                            @if($product->action_price != null)
                                                <span class="price-old">{{$product->price}} {{App\Services\CurrencyConversion::getCurrencySymbol()}}</span>{{round($product->action_price/$currency->rate,2)}} {{App\Services\CurrencyConversion::getCurrencySymbol()}}</p>
                                            @else
                                                {{$product->price}} {{App\Services\CurrencyConversion::getCurrencySymbol()}}</p>
                                            @endif
                                            <div class="onhover">
                                                <ul class="list-inline">
                                                    <li>
                                                        @if($product->action_price != null)
                                                            <a onclick="refreshPage({{$product->id}})" class="thm-btn shoping-cart" data-id="{{$product->id}}" data-name="{{$product->name}}" data-price="{{$product->action_price/$currency->rate}}" data-image="{{$product->image_path}}"><i id="{{$product->id}}" class="fa fa-shopping-cart"></i>@lang('main.add-to-card')</a>
                                                        @else
                                                            <a onclick="refreshPage({{$product->id}})" class="thm-btn shoping-cart" data-id="{{$product->id}}" data-name="{{$product->name}}" data-price="{{$product->action_price}}" data-image="{{$product->image_path}}"><i id="{{$product->id}}" class="fa fa-shopping-cart"></i>@lang('main.add-to-card')</a>
                                                        @endif
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <ul class="list-inline pagination">
                            {{$products_all->links()}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
