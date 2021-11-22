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
                                    @elseif($search)
                                    Search Result
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
                <section id="news">
                    <div class="container">
                        <div class="row">
                            @if(count($posts))
                            @foreach($posts as $vs)
                            <div class="col-md-4 pb-5 mb-5">
                                <div class=" horse-gallery" data-dots="true">
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <img style="height: 200px;" class="img-fullwidth" src="{{ Voyager::image( $vs->image ) }}" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a data-lightbox="image" href="{{ Voyager::image( $vs->image ) }}"><i class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="horse-details">
                                            <h4 class="title mb-5"><a href="{{ route('single-news', $vs->slug) }}">{{$vs->title}}</a></h4>
                                            <span class="category">
                                                @if($news)
                                                {{date('j F Y',strtotime($vs->event_date))}}
                                                @else
                                                {{date('j F Y',strtotime($vs->created_at))}}
                                                @endif
                                            </span>
                                            <p class="font-13 pt-10">{!! \Illuminate\Support\Str::limit($vs->body,200,$end='...') !!}<a class="font-14 pl-10 text-theme-colored" href="{{ route('single-news', $vs->slug) }}"> read more</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            No Data found !
                            @endif
                        </div>
                    </div>
                </section>
            </div>
            <!-- end main-content -->

@endsection