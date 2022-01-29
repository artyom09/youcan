@extends('layouts.main')

@section('content')
    {{-- <section class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-12 col-md-6">
                    <div class="single-blog-item">
                        <div class="blog-image service-image">
                            <a href="#">
                                <img src="/storage/{{$service->image}}" alt="image">
                            </a>
                        </div>

                        <div class="blog-content service-text  service-texts">
                            <h3>
                                {{$service->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}}
                            </h3>
                            <p> {{$service->getTranslatedAttribute('text',config('app.locale'),config('voyager.multilingual.default'))}}</p>
                        </div>
                    </div>
                </div>
                <br><hr>
                @endforeach
            </div>
        </div>
    </section> --}}
    <section class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="blog-image">
                            <a href="#">
                                <img src="/storage/{{$service->image}}" alt="image">
                            </a>
                        </div>

                        <div class="blog-content">
                            <h3>
                                <a href="{{route('service.show', $service->slug)}}">{{$service->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}}</a>
                            </h3>
                            <p> {{$service->getTranslatedAttribute('excerpt',config('app.locale'),config('voyager.multilingual.default'))}}</p>

                            <div class="blog-btn">
                                <a href="{{route('service.show', $service->slug)}}" class="default-btn">@lang('main.read-more')</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
