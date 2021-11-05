@extends('layouts.main')

@section('content')
        <!-- Start Blog Area -->
        <section class="blog-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-item">
                            <div class="blog-image">
                                <a href="#">
                                    <img src="/storage/{{$post->image}}" alt="image">
                                </a>
                            </div>

                            <div class="blog-content">
                                <ul class="post-meta">
                                    <li>
                                        <span>By Admin:</span>
                                    </li>
                                    <li>
                                        <span>{{$post->getDayNews($post->created_at)}}/{{$post->getMonthNews($post->created_at)}}/{{$post->getDate($post->created_at)}}</span>

                                    </li>
                                </ul>
                                <h3>
                                    <a href="{{route('blog.show', $post->slug)}}">{{$post->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}}</a>
                                </h3>
                                <p> {{$post->getTranslatedAttribute('excerpt',config('app.locale'),config('voyager.multilingual.default'))}}</p>

                                <div class="blog-btn">
                                    <a href="{{route('blog.show', $post->slug)}}" class="default-btn">@lang('main.read-more')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            {{$posts->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->


@endsection
