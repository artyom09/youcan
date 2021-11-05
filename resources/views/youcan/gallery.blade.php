@extends('layouts.main')

@section('content')


        <!-- Start Gallery Area -->
        <div class="gallery-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    @foreach($images as $image)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery-box">
                        <img src="/storage/{{$image->image}}" alt="image">

                            <a href="/storage/{{$image->image}}" class="gallery-btn" data-imagelightbox="popup-btn">
                                <i class="bx bx-search-alt"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        {{$images->links()}}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Gallery Area -->


@endsection
