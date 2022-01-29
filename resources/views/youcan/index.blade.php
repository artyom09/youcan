
@extends('layouts.main')

@section('content')

    <div class="main-banner">
        <div class="main-banner-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="main-banner-content">
                                    <span>{{$home_slider->getTranslatedAttribute('min_title',config('app.locale'),config('voyager.multilingual.default'))}}</span>
                                    <h1>{{$home_slider->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}}</h1>
                                    <p>{{$home_slider->getTranslatedAttribute('text',config('app.locale'),config('voyager.multilingual.default'))}}</p>

                                    <div class="banner-btn">
                                        <a href="{{$home_slider->link}}" class="default-btn">
                                            @lang('main.read-more')
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="main-banner-image">
                                    <img src="/storage/{{$home_slider->image}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-banner-shape">
            <div class="banner-bg-shape">
                <img src="/youcan/assets/img/main-banner/banner-bg-shape-1.png" alt="image">
            </div>
        </div>
    </div>

    <section class="who-we-are ptb-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="who-we-are-image">
                        <img src="/storage/{{$about_header->image}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="who-we-are-content">
                        <span>@lang('main.about-us')</span>
                        <h3>{{ $about_header->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}}</h3>
                        <p>{!! $about_header->getTranslatedAttribute('information',config('app.locale'),config('voyager.multilingual.default'))!!}</p>

                        {{-- <ul class="who-we-are-list">
                            <li>
                                <span>1</span>
                                {{ $about_header->getTranslatedAttribute('info_one',config('app.locale'),config('voyager.multilingual.default'))}}
                            </li>
                            <li>
                                <span>2</span>
                                {{ $about_header->getTranslatedAttribute('info_two',config('app.locale'),config('voyager.multilingual.default'))}}
                            </li>
                            <li>
                                <span>3</span>
                                {{ $about_header->getTranslatedAttribute('info_three',config('app.locale'),config('voyager.multilingual.default'))}}
                            </li>
                            <li>
                                <span>4</span>
                                {{ $about_header->getTranslatedAttribute('info_four',config('app.locale'),config('voyager.multilingual.default'))}}
                            </li>
                        </ul> --}}
                        <div class="who-we-are-btn">
                            <a href="{{$about_header->link}}" class="default-btn">@lang('main.read-more')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="value-area ptb-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="value-item">
                        <div class="value-content">
                            <span>{{$faquestion->getTranslatedAttribute('min_title',config('app.locale'),config('voyager.multilingual.default'))}}</span>
                            <h3>{{$faquestion->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}}</h3>
                        </div>

                        @foreach($home_infos as $home_info)
                        <div class="value-inner-content">
                            <div class="number">
                                <span class="bg-{{$home_info->icon}}">{{$home_info->icon}}</span>
                            </div>
                            <h4>{{$home_info->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}}</h4>
                            <p>{{$home_info->getTranslatedAttribute('text',config('app.locale'),config('voyager.multilingual.default'))}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="value-image">
                    <img src="/storage/{{$faquestion->image}}" alt="image">
                    </div>
                </div>


            </div>
        </div>
    </section>

{{-- 
    <section class="teacher-area bg-ffffff pt-100">
        <div class="container-fluid">
            <div class="section-title">
                <span> @lang('main.staff')</span>
            </div>

            <div class="row">

                @foreach($teachers as $teacher)
                <div class="col-lg-3 col-md-6">
                    <div class="single-teacher">
                        <div class="image">
                        <img src="/storage/{{$teacher->image}}" alt="image">
                            <ul class="social">
                                @if($teacher->fb != null)
                                <li>
                                    <a href="{{$teacher->fb}}" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                @endif
                                @if($teacher->tw != null)
                                <li>
                                    <a href="{{$teacher->tw}}" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                @endif
                                @if($teacher->inst != null)
                                <li>
                                    <a href="{{$teacher->inst}}" target="_blank">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>

                        <div class="content">
                            <h3>{{ $teacher->getTranslatedAttribute('name',config('app.locale'),config('voyager.multilingual.default'))}}</h3>
                            <span>{{ $teacher->getTranslatedAttribute('prof',config('app.locale'),config('voyager.multilingual.default'))}}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section> --}}

    <!-- Start Testimonials Area -->
    <section class="testimonials-area pt-70 ">
        <div class="container">
            <div class="section-title">
                <h2>@lang('main.comments')</h2>
            </div>
            <div class="testimonials-slides owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        @foreach($about_comments as $about_comment)
                        <div class="owl-item" >
                            <div class="testimonials-item">
                                <div class="testimonials-item-box">
                                    <div class="icon">
                                        <i class="bx bxs-quote-left"></i>
                                    </div>
                                    <p>{{$about_comment->getTranslatedAttribute('text',config('app.locale'),config('voyager.multilingual.default'))}}</p>
                                    <div class="info-box">
                                        <h3>{{$about_comment->getTranslatedAttribute('name',config('app.locale'),config('voyager.multilingual.default'))}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="bx bx-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="bx bx-chevron-right"></i></button></div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </section>

    <section class="blog-area pt-100">
        <div class="container">
            <div class="section-title">
                <h2>@lang('main.blog')</h2>
            </div>
            <div class="row">
                @foreach($blog_posts as $blog_post)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="blog-image">
                            <a href="#">
                                <img src="/storage/{{$blog_post->image}}" alt="image">
                            </a>
                        </div>

                        <div class="blog-content">
                            <ul class="post-meta">
                                <li>
                                    <span>By Admin:</span>
                                </li>
                                <li>
                                    <span>@lang('main.created-prod'):</span>
                                    {{$blog_post->created_at}}
                                </li>
                            </ul>
                            <h3>
                                <a href="{{route('blog.show', $blog_post->slug)}}">{{$blog_post->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}}</a>
                            </h3>
                            <p>{{$blog_post->getTranslatedAttribute('excerpt',config('app.locale'),config('voyager.multilingual.default'))}}</p>

                            <div class="blog-btn">
                                <a href="{{route('blog.show', $blog_post->slug)}}" class="default-btn">@lang('main.read-more')</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
