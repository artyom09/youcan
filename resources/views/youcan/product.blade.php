@extends('layouts.main')

@section('content')
<section class="section padding-off">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <header class="page-header">
                    <h1>{{$category->getTranslatedAttribute('name',config('app.locale'),config('voyager.multilingual.default'))}}</h1>
                </header><!--/ .page-header-->
            </div>
        </div><!--/ .row-->

    </div><!--/ .container-->
    <section id="portfolio-items" class="portfolio-items popup-gallery col-4">
        @foreach($products as $product)
            <article class="photo mix">
                <div class="work-item">
                    <img src="/storage/{{$product->image}}" alt="" />
                    <div class="item-overlay single-image plus-icon popup-link" href="/storage/{{$product->image}}">
                        <div class="extra-content">
                            <h2 class="extra-title">{{$product->getTranslatedAttribute('info',config('app.locale'),config('voyager.multilingual.default'))}}</h2>
                            <h6 class="extra-category">photography</h6>
                            <a class="single-image plus-icon popup-link" href="/storage/{{$product->image}}">Image</a>
                        </div><!--/ .extra-content-->
                    </div><!--/ .item-overlay-->
                </div><!--/ .work-item-->
            </article>
        @endforeach
    </section><!--/ .portfolio-items-->
    <div class="pagenavbar">
        <div class="pagenavi">
            {{$products->links()}}
        </div><!--/ .pagenavi-->
    </div><!--/ .pagenavbar-->
</section><!--/ .section-->


@endsection
