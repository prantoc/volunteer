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
                                    <h2 class="title text-white text-center">MEMBERS</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section: news -->
                <section>
                    <div class="container">
                        <div class="row">
                            @if(count($volunteers))
                            @foreach($volunteers as $vlntr)
                            <div class="col-sm-4">
                                <div class="thm-profile">
                                    <div class="thm-profile-img">
                                        <img src="{{ Voyager::image( $vlntr->image ) }}" alt="Nayem Durjai" class="img-responsive">
                                    </div>
                                    <div class="thm-profile-content">
                                        <div class="thm-profile-sub-title">{{$vlntr->position}}, {{$vlntr->district->name}} District</div>
                                        <h3 class="thm-profile-title"><a href="{{ route ('volunteer-profile', $vlntr->slug)}}">{{$vlntr->name}}</a></h3>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            No Data found!
                            @endif
                        </div>
                    </div>
                </section>
            </div>

@endsection