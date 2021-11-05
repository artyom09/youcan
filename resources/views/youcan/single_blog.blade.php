@extends('layouts.main')

@section('content')

        <!-- Start Blog Details Area -->
        <section class="blog-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details-desc">
                            <div class="article-image">
                                <img src="/storage/{{$post->image}}" alt="image">
                            </div>

                            <div class="article-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li>
                                            <a href="#">{{$post->created_at}}</a>
                                        </li>
                                        <li>
                                            <span>Posted By:</span>
                                            <a href="#">Admin</a>
                                        </li>
                                    </ul>
                                </div>

                                <h3>{{$post->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}}</h3>
                                <p>{!! $post->getTranslatedAttribute('body',config('app.locale'),config('voyager.multilingual.default')) !!}</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area">
                            <section class="widget widget_ketan_posts_thumb">
                                <h3 class="widget-title">@lang('main.popular-posts')</h3>
                                @foreach($blog_posts as $blog_post)
                                <article class="item">
                                    <a href="{{route('blog.show', $blog_post->slug)}}" class="thumb">
                                        <img class="fullimage cover" role="img" src="/storage/{{$blog_post->image}}">
                                    </a>
                                    <div class="info">
                                        <span>{{$blog_post->created_at}}</span>
                                        <h4 class="title usmall"><a href="#">{{$blog_post->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}}</a></h4>
                                    </div>
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
