@extends('layouts.main')

@section('content')
    <div class="row">
        <section id="main" class="col-md-12">
            <div id="post-area">
                <article class="entry-item price">
                    <div class="entry-body">
                        @foreach($prices as $price)
                        <br>
                        <div class="col-md-12">
                            <div class="row entry-media">
                                <div class="container popup-gallery">
                                    <div class="col-md-4">
                                        <a href="/storage/{{$price->image}}" class=" popup-link plus-icon" >
                                            <img src="/storage/{{$price->image}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <h3>{{$price->getTranslatedAttribute('title',config('app.locale'),config('voyager.multilingual.default'))}}</h3>
                                        <p>{{$price->getTranslatedAttribute('info',config('app.locale'),config('voyager.multilingual.default'))}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </article>
            </div>
        </section>
    </div>
@endsection