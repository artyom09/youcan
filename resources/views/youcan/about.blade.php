@extends('layouts.main')

@section('content')
<div class="page-banner-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>@lang('main.about-us')</h2>
                    <ul>
                        <li>
                            <a href="/{{app()->getlocale()}}"> @lang('main.general')</a>
                        </li>
                        <li> @lang('main.about-us')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="who-we-are ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="who-we-are-content">
                    <span> @lang('main.about-us')</span>
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

            <div class="col-lg-6">
                <div class="who-we-are-image-wrap">
                    <img src="/storage/{{$about_header->image}}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="fun-facts-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                    <h3>
                    <span class="odometer odometer-auto-theme" data-count="{{$about_service1->text}}"></span>
                    </h3>
                    <p> {{$about_service1->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact bg-1">
                    <h3>
                        <span class="odometer odometer-auto-theme" data-count="{{$about_service2->text}}"> </span>
                    </h3>
                    <p> {{$about_service2->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact bg-2">
                    <h3>
                        <span class="odometer odometer-auto-theme" data-count="{{$about_service3->text}}"></span>
                    </h3>
                    <p> {{$about_service3->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact bg-3">
                    <h3>
                        <span class="odometer odometer-auto-theme" data-count="{{$about_service4->text}}"></span>
                    </h3>
                    <p> {{$about_service4->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}}</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Start Choose Area -->
<section class="choose-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="single-choose-item">
                    <span>@lang('main.everywhere')</span>
                    <h3>{{$about_kids->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}} </h3>
                    <p>{{$about_kids->getTranslatedAttribute('text',config('app.locale'),config('voyager.multilingual.default'))}} .</p>

                    <div class="choose-btn">
                        <a href="{{$about_kids->link}}" target="_blank" class="default-btn">@lang('main.learn-more')</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="choose-image">
                    <img src="/storage/{{$about_kids->image}}" alt="image">

                    <div class="choose-image-shape">
                        <div class="shape-1">
                            <img src="/youcan/assets/img/choose/choose-shape-1.png" alt="image">
                        </div>
                        <div class="shape-2">
                            <img src="/youcan/assets/img/choose/choose-shape-2.png" alt="image">
                        </div>
                        <div class="shape-3">
                            <img src="/youcan/assets/img/choose/choose-shape-3.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="newsletter-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="newsletter-content">
                    <h2 style="color: #fff;">@lang('main.follow')</h2>
                </div>
            </div>

            <div class="col-lg-6">
                <form class="newsletter-form" novalidate="true" action="/follow" method="post">
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                    <input type="email" class="input-newsletter" id="email" placeholder="@lang('main.email')" name="email" required autocomplete="off">
                    <button type="submit" class="disabled" >@lang('main.send')</button>
                    <div id="validator-newsletter" class="form-result"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="partner-area ptb-100">
    <div class="container">
        <div class="partner-slider owl-carousel owl-theme owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    @foreach($about_partners as $about_partner)
                    <div class="owl-item">
                        <a href="{{$about_partner->link}}" target="_blank">
                        <div class="partner-item">
                           <img src="/storage/{{$about_partner->image}}" alt="image">
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="owl-dots disabled"></div>
        </div>
    </div>
</div>
@endsection
