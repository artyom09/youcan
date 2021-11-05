@extends('layouts.main')

@section('content')
    <!-- Start Teacher Area -->
    <section class="teacher-area pt-100 pb-70">
        <div class="container-fluid">
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
                <div class="view-btn">
                    {{$teachers->links()}}
                </div>
            </div>
        </div>
    </section>
<!-- End Teacher Area -->
@endsection
