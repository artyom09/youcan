@extends('layouts.main')

@section('content')

        <!-- Start Blog Details Area -->
        <section class="blog-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details-desc">
                            <div class="article-image">
                                <img src="/storage/{{$services->image}}" alt="image">
                            </div>

                            <div class="article-content">

                                <h3>{{$services->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}}</h3>
                                <p>{!! $services->getTranslatedAttribute('text',config('app.locale'),config('voyager.multilingual.default')) !!}</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area">
                            <section class="widget widget_ketan_posts_thumb">
                                <h3 class="widget-title">@lang('main.services')</h3>
                                @foreach($blog_services as $blog_post)
                                <article class="item">
                                    <a href="{{route('service.show', $blog_post->slug)}}" class="thumb">
                                        <img class="fullimage cover" role="img" src="/storage/{{$blog_post->image}}">
                                        <h5 style="font-size: 14px; display: inline-block;">{{$blog_post->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}}</h5>
                                    </a>
                                </article>
                                @endforeach
                            </section>

                            <section class="widget widget_ketan_posts_thumb">
                                <h3 class="widget-title">@lang('main.gallery')</h3>
                                <article class="item">
                                @foreach($photos as $photo)
                                    <a href="{{route('gallery')}}" class="thumb">
                                        <img class="fullimage cover" role="img" src="/storage/{{$photo->image}}">
                                    </a>
                                @endforeach
                            </article>
                            </section>

                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Details Area -->
@endsection
