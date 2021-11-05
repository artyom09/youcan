@extends('layouts.main')

@section('content')

        <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>@lang('main.contact-us')</h2>
                            <ul>
                                <li>
                                    <a href="/{{app()->getlocale()}}">@lang('main.general')</a>
                                </li>
                                <li>@lang('main.contact-us')</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="contact-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="contact-form">
                            <h3>@lang('main.send-us-message')</h3>

                            <form id="contactForm" novalidate="true" action="{{route('contact_post', app()->getLocale())}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name" placeholder="@lang('main.name')">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="@lang('main.email')">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone_number" class="form-control" required="" data-error="Please enter your phone number" placeholder="@lang('main.phone')">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="subject" id="subjects" class="form-control" required="" data-error="Please enter your subjects" placeholder="@lang('main.subject')">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" cols="30" rows="5" required="" data-error="Please enter your message" class="form-control" placeholder="@lang('main.message')"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">@lang('main.send')</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="contact-information">
                            <h3>@lang('main.contact-information')</h3>

                            <ul class="contact-list">
                                <li><i class="bx bx-map"></i> @lang('main.address'): <span>{{$contact_us->address}}</span></li>
                                <li><i class="bx bx-phone-call"></i> @lang('main.phone'): <a href="tel:+{{$contact_us->phone}}">{{$contact_us->phone}}</a></li>
                                <li><i class="bx bx-envelope"></i> @lang('main.email'): <a href="mailto:{{$contact_us->email}}">{{$contact_us->email}}</a></li>
                            </ul>

                            <h3>@lang('main.working-hours'):</h3>
                            <ul class="opening-hours">
                                <li><span>@lang('main.working-hours'): </span> {{$contact_us->working_hours}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->

        <!-- Map -->
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9476519598093!2d-73.99185268459418!3d40.74117737932881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a3f81d549f%3A0xb2a39bb5cacc7da0!2s175%205th%20Ave%2C%20New%20York%2C%20NY%2010010%2C%20USA!5e0!3m2!1sen!2sbd!4v1588746137032!5m2!1sen!2sbd"></iframe>
        </div>
        <!-- End Map -->
@endsection
