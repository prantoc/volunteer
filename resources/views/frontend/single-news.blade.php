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
                                    <h2 class="title text-white text-center">
                                    @if($news)
                                    Events
                                    @else
                                    Volunteer Story
                                    @endif
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section: news -->
                <section>
            <div class="container mb-0 pt-0 mt-60">
                <div class="section-content">
                    <div class="row mt-10">
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-sm-20 p-20 pt-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s;">
                            <h3 class="mt-0"><span class="text-theme-colored">{{$singlePost->title}} </span></h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <img class="pull-left flip pr-20" width="300" src="{{ Voyager::image( $singlePost->image ) }}" alt="">

                            <p>
                                {!! $singlePost->body !!}
                            </p>

                            <ul class="styled-icons icon-dark mt-20 social-links">

                                @foreach($socialshare as $key=> $value)
                                    @if($key == 'facebook')
                                        <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s;">
                                            
                                            
                                            <a href="{{$value}}" class="social-button" data-bg-color="#3B5998" style="background: rgb(59, 89, 152) !important;">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            
                                        </li>
                                    @elseif($key == 'twitter')
                                        <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s;">
                                            <a href="{{$value}}" class="social-button" data-bg-color="#02B0E8" style="background: rgb(2, 176, 232) !important;">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                    @else
                                        <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10">
                                            <a href="{{$value}}" class="social-button" data-bg-color="#05A7E3">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach






                               
                                
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
            </div>
            <!-- end main-content -->

@endsection