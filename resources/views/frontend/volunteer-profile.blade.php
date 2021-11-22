@extends('layouts.header')
@section('content')
 <!-- Start main-content -->
            <div class="main-content">
                <section id="programs" class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('assets/images/bg/bg8.jpg')}}" style="background-image: url(&quot;images/bg/bg8.jpg&quot;); background-position: 50% 41px;">
                    <div class="container pt-70 pb-20">
                        <!-- Section Content -->
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="title text-white text-center">PROFILE DETAILS</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section: news -->
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="single-profile-wrap">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="blog-details-img">
                                            <img width="351" height="277" src="{{ Voyager::image( $volunteerProfile->image ) }}" sizes="(max-width: 351px) 100vw, 351px">                                              
                                        </div>  
                                    </div>
                                    <div class="col-md-7">
                                        <h2 class="thm-sp-title">{{$volunteerProfile->name}}</h2>
                                        <ul class="thm-sp-info">
                                            <li><span>{{$volunteerProfile->position}}, {{$volunteerProfile->district->name}} District</span>Volunteer for Bangladesh</li>
                                        </ul>
                                        
                                        
                                        
                                        <div class="thm-sp-contact-info">
                                            <h3>Contact Info:</h3>
                                            <ul>
                                                <li><i class="far fa-envelope"></i> {{$volunteerProfile->email}}</li>
                                            </ul>
                                        </div>
                                        <ul class="thm-profile-social">
                                            <li><a href="{{$volunteerProfile->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="{{$volunteerProfile->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="{{$volunteerProfile->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="thm-sp-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- end main-content -->

@endsection