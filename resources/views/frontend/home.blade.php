@extends('layouts.header')
@section('content')
            <section id="home">
                <!-- Slider Revolution Start -->
                <div class="rev_slider_wrapper">
                    <div class="rev_slider" data-version="5.0">
                        <ul>
                            <!-- SLIDE 1 -->
                            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('assets/images/slider-7.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Shelter" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('assets/images/slider-7.jpg')}}"  alt=""  data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme text-uppercase  bg-theme-colored-transparent text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                                     id="rs-1-layer-1"

                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['-90']"
                                     data-fontsize="['28']"
                                     data-lineheight="['54']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">Shelter for Street Children
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                                     id="rs-1-layer-2"

                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['-20']"
                                     data-fontsize="['48']"
                                     data-lineheight="['70']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">“Thikana Shelter”
                                </div>
                                <!-- LAYER NR. 3 -->

                                <div class="tp-caption tp-resizeme text-white text-center"
                                     id="rs-1-layer-3"

                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['50']"
                                     data-fontsize="['16']"
                                     data-lineheight="['28']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Since January 2017,Voice of Bangladesh has been operating a shelter titled “Thikana Shelter” for street connected children in Dhaka city
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme"
                                     id="rs-1-layer-4"

                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['115']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a style="border-color: #ED1C24;background-color:#ED1C24;" class="btn btn-theme-colored btn-circled btn-transparent1 pl-20 pr-20" href="{{ route('news') }}">Read More...</a>
                                </div>
                            </li>

                            <!-- SLIDE 1 -->
                            <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('assets/images/slider-6.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Covid-19" data-description="">
                              <!-- MAIN IMAGE -->
                              <img src="{{ asset('assets/images/slider-6.jpg')}}"  alt=""  data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                              <!-- LAYERS -->

                              <!-- LAYER NR. 1 -->
                              <div class="tp-caption tp-resizeme text-uppercase  bg-theme-colored-transparent text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                                id="rs-2-layer-1"

                                data-x="['center']"
                                data-hoffset="['0']"
                                data-y="['middle']"
                                data-voffset="['-90']"
                                data-fontsize="['28']"
                                data-lineheight="['54']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                data-start="1000"
                                data-splitin="none"
                                data-splitout="none"
                                data-responsive_offset="on"
                                style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">Appeal for emergency funds in the fight against COVID-19
                              </div>

                              <!-- LAYER NR. 2 -->
                              <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                                id="rs-2-layer-2"

                                data-x="['center']"
                                data-hoffset="['0']"
                                data-y="['middle']"
                                data-voffset="['-20']"
                                data-fontsize="['48']"
                                data-lineheight="['70']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                data-start="1000"
                                data-splitin="none"
                                data-splitout="none"
                                data-responsive_offset="on"
                                style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">Make A Change
                              </div>

                              <!-- LAYER NR. 3 -->
                              <div class="tp-caption tp-resizeme text-white text-center"
                                id="rs-2-layer-3"

                                data-x="['center']"
                                data-hoffset="['0']"
                                data-y="['middle']"
                                data-voffset="['50']"
                                data-fontsize="['16']"
                                data-lineheight="['28']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;s:500"
                                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                data-start="1400"
                                data-splitin="none"
                                data-splitout="none"
                                data-responsive_offset="on"
                                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Support APON in it's goal of providing emergency assistance to 500 families. A small contribution can make a big change.
                              </div>

                              <!-- LAYER NR. 4 -->
                              <div class="tp-caption tp-resizeme"
                                id="rs-2-layer-4"

                                data-x="['center']"
                                data-hoffset="['0']"
                                data-y="['middle']"
                                data-voffset="['115']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                data-start="1400"
                                data-splitin="none"
                                data-splitout="none"
                                data-responsive_offset="on"
                                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a style="border-color: #ED1C24;background-color:#ED1C24;" class="btn btn-theme-colored btn-circled btn-transparent1 pl-20 pr-20" href="register.html">Donate Now</a>
                              </div>
                            </li>

                            <!-- SLIDE 2 -->
                            <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('assets/images/slider-2.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Nutrition Support for Children" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('assets/images/slider-2.jpg')}}" alt="" data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme text-uppercase  bg-theme-colored-transparent text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                                     id="rs-3-layer-1"
                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['-90']"
                                     data-fontsize="['28']"
                                     data-lineheight="['54']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight: 400; border-radius: 30px;">
                                    Nutrition Support
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                                     id="rs-3-layer-2"
                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['-20']"
                                     data-fontsize="['48']"
                                     data-lineheight="['70']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight: 700; border-radius: 30px;">
                                    For Children
                                </div>
                            </li>

                            <!-- SLIDE 3 -->
                            <li data-index="rs-4" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('assets/images/slider-3.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Family Support Program" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('assets/images/slider-3.jpg')}}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                                     id="rs-4-layer-1"
                                     data-x="['right']"
                                     data-hoffset="['30']"
                                     data-y="['middle']"
                                     data-voffset="['-90']"
                                     data-fontsize="['64']"
                                     data-lineheight="['72']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight: 600;">
                                    Family Support Program
                                </div>
                            </li>

                            <!-- SLIDE 4 -->
                            <li data-index="rs-5" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('assets/images/slider-4.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Sewing Training for Destitute women" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('assets/images/slider-4.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                                     id="rs-5-layer-2"
                                     data-x="['left']"
                                     data-hoffset="['35']"
                                     data-y="['middle']"
                                     data-voffset="['-25']"
                                     data-fontsize="['35']"
                                     data-lineheight="['54']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight: 600;">
                                    Sewing Training for Destitute women
                                </div>

                            </li>

                            <!-- SLIDE 5 -->
                            <li data-index="rs-6" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('assets/images/slider-5.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Child Care Center for Rohingya Refugee Children" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('assets/images/slider-5.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                                     id="rs-6-layer-2"
                                     data-x="['left']"
                                     data-hoffset="['35']"
                                     data-y="['middle']"
                                     data-voffset="['-25']"
                                     data-fontsize="['35']"
                                     data-lineheight="['54']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight: 600;">
                                    Child Care Center for Rohingya Refugee Children
                                </div>

                            </li>

                            <!-- SLIDE 6 -->
                            <li data-index="rs-7" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('assets/images/slider-1.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Education program for Underprivileged Children" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('assets/images/slider-1.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                                     id="rs-7-layer-1"
                                     data-x="['left']"
                                     data-hoffset="['35']"
                                     data-y="['middle']"
                                     data-voffset="['-25']"
                                     data-fontsize="['35']"
                                     data-lineheight="['54']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight: 600;">
                                    Education program for Underprivileged Children
                                </div>
                            </li>


                        </ul>
                    </div>
                    <!-- end .rev_slider -->
                </div>
                <!-- end .rev_slider_wrapper -->
                <script>
                    $(document).ready(function (e) {
                        $(".rev_slider").revolution({
                            sliderType: "standard",
                            sliderLayout: "auto",
                            dottedOverlay: "none",
                            delay: 5000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    style: "zeus",
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 600,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 30,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 30,
                                        v_offset: 0
                                    }
                                },
                                bullets: {
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 600,
                                    style: "metis",
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 30,
                                    space: 5,
                                    tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                                }
                            },
                            responsiveLevels: [1240, 1024, 778],
                            visibilityLevels: [1240, 1024, 778],
                            gridwidth: [1170, 1024, 778, 480],
                            gridheight: [650, 768, 960, 720],
                            lazyType: "none",
                            parallax: {
                                origo: "slidercenter",
                                speed: 1000,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                                type: "scroll"
                            },
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "on",
                            stopAfterLoops: 0,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "0",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    });
                </script>
                <!-- Slider Revolution Ends -->

            </section>

            <section>
                <div class="container-fluid p-0 p-sm-15">
                    <div class="section-content">
                        <div class="row equal-height-inner home-boxes">
                            <div class="col-sm-12 col-md-3 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
                                <div class="sm-height-auto bg-theme-colored">
                                    <div class="p-30">
                                        <h3 class="text-uppercase text-white mt-0">APON EDUCATION PROGRAM</h3>
                                        <p class="text-white">APON School Project was launched in 2008 for providing education to child labourers in Dhanmondi area. </p>
                                        <a href="{{ route('news') }}" class="btn btn-border btn-circled btn-transparent btn-xs mt-5">More</a>
                                    </div>
                                    <i class="flaticon-charity-shaking-hands-inside-a-heart bg-icon"></i>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
                                <div class="sm-height-auto bg-theme-colored-darker2">
                                    <div class="p-30">
                                        <h3 class="text-uppercase text-white mt-0">APON CHILD CARE CENTRE FOR ROHINGYA REGUGEE CHILDREN</h3>
                                        <p class="text-white">APON is operating a Child Care Center for Rohingya Refugee Children at Balukhali Camp, Ukhia, Cox’s Bazar to provide recreation, nutrition and basic education, including early learning programs, to the Rohingya children.</p>
                                        <a href="{{ route('news') }}" class="btn btn-border btn-circled btn-transparent btn-xs mt-5">More</a>
                                    </div>
                                    <i class="flaticon-charity-home-insurance bg-icon"></i>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 pl-0 pr-0 pl-sm-15 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
                                <div class="sm-height-auto bg-theme-colored-darker3">
                                    <div class="p-30">
                                        <h3 class="text-uppercase text-white mt-0">TRANSITIONAL SHELTER FOR STREET CHILDREN</h3>
                                        <p class="text-white">Since January 2017,Voice of Bangladesh has been operating a transitional shelter for street children with the help of a UK-based charity organization in Dhaka city.</p>
                                        <a href="{{ route('news') }}" class="btn btn-border btn-circled btn-transparent btn-xs mt-5">More</a>
                                    </div>
                                    <i class="flaticon-charity-home-insurance bg-icon"></i>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
                                <div class="sm-height-auto bg-theme-colored-darker4">
                                    <div class="p-30">
                                        <h3 class="text-white mt-0 mb-5">SPONSOR A CHILD</h3>
                                        <p class="text-white">You can contribute by making a donation, or even by volunteering to work on the numerous on-going projects ofVoice of Bangladesh. </p>
                                        <a href="{{ route('news') }}" class="btn btn-border btn-circled btn-transparent btn-xs mt-5">More</a>
                                    </div>
                                    <i class="flaticon-charity-make-an-online-donation bg-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: About -->
            <section id="about">
                <div class="container mb-0 pt-0 mt-60">
                    <div class="section-content">
                        <div class="row mt-10">
                            <div class="col-xs-12 col-sm-6 col-md-4 mb-sm-20 p-20 pt-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                <h3 class="text-uppercase line-bottom mt-0">Welcome To <span class="text-theme-colored">Voice of Bangladesh</span></h3>
                                <p class="lead text-justify">Alor Pothe Nobojatray (APON) Foundation (literally translated as ‘In the journey towards enlightenment’) is a non-profit, government approved, charitable organisation dedicated towards enlightening and improving the lives of the economically and socially deprived members of the community. At APON (literally translated as ‘warm and friendly’), we aim to provide basic education to child labourers and to create employment opportunities among the underprivileged and disadvantaged sections of the society. </p>
                                <!--<div class="row">-->
                                <!--<div class="col-xs-6">-->
                                <!--<ul class="mt-10">-->
                                <!--<li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;To provide relief materials and undertake rehabilitation programs for victims of floods, cyclones, earthquakes, storms and other natural disasters.</li>-->
                                <!--<li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;To set up ‘Satellite Learning Centers’ for providing free basic education to underprivileged children like working, street and slum children with particular emphasis on the provision of education to girls.</li>-->
                                <!--<li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;To set up ‘Vocational Training Centers’ for providing technical education to underprivileged children and youth.</li>-->
                                <!--<li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;To provide financial assistance to impoverished with a view to enabling them to undertake small business ventures.</li>-->
                                <!--<li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;To set up free clinics and health camps for ensuring quality health care among the poverty stricken sections of the community.</li>-->
                                <!--<li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;To undertake various activities and programs for observing national and international days.</li>-->
                                <!--<li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;To raise public awareness regarding AIDS/HIV</li>-->
                                <!--</ul>-->
                                <!--</div>-->
                                <!--<div class="col-xs-6">-->
                                <!--<ul class="mt-10">-->
                                <!--<li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;To provide assistance to victims and survivors of acid burns including taking legal actions against perpetrators of such crimes and to undertake various programs for raising public awareness about such social evils.</li>-->
                                <!--<li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;To engender discussion on child rights, child malnutrition, child labour and the trafficking of women and children.</li>-->
                                <!--<li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;To create awareness regarding the protection of the environment.</li>-->
                                <!--<li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;To facilitate a better understanding of drug abuse in society and to set up rehabilitation centers for providing medical treatment to addicts thereby enabling them to lead a normal healthy life.</li>-->
                                <!--<li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;To undertakes various activities and programs for improving the standard of living of the elderly and the psychically challenged people.</li>-->
                                <!--<li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;To raise awareness of basic human rights, especially regarding the rights of children and women and working towards better protection of those rights.</li>-->
                                <!--</ul>-->
                                <!--</div>-->
                                <!--</div>-->
                                <a class="btn btn-colored btn-theme-colored btn-lg text-uppercase font-13 mt-10 mb-10" href="{{ route('news') }}">View Details</a>
                                <iframe width="480" height="270" src="https://www.youtube.com/embed/SLBFiDgT8KE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                <h3 class="text-uppercase line-bottom mt-0">OUR <span class="text-theme-colored">PROGRAMS</span></h3>
                                <div class="owl-carousel-1col">
                                    <div class="item">
                                        <div class="causes">
                                            <div class="thumb">
                                                <img class="img-fullwidth mb-sm-0" src="{{ asset('assets/images/program-1.jpg')}}" alt="">
                                            </div>
                                            <div class="progress-item mt-0">
                                                <div class="progress mb-0">
                                                    <div class="progress-bar" data-percent="120"></div>
                                                </div>
                                            </div>
                                            <div class="causes-details bg-white clearfix border-2px p-15 pt-10">
                                                <h4><a href="{{ route('news') }}">Basic Education for Underprivileged Children</a></h4>
                                                <p class="font-15 text-justify">Every child has the right to receive a basic education. But unfortunately, in Bangladesh, hundreds of thousands of children are being deprived of a basic education because of their socio-economic condition and lack of awareness.</p>
                                                <div class="mt-10">
                                                    <a class="btn btn-dark btn-md font-16 btn-theme-colored btn-sm pull-left mt-10" href="{{ route('news') }}">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="causes">
                                            <div class="thumb">
                                                <img class="img-fullwidth mb-sm-0" src="{{ asset('assets/images/program-2.jpg')}}" alt="">
                                            </div>
                                            <div class="progress-item mt-0">
                                                <div class="progress mb-0">
                                                    <div class="progress-bar" data-percent="120"></div>
                                                </div>
                                            </div>
                                            <div class="causes-details bg-white clearfix border-2px p-15 pt-10">
                                                <h4><a href="{{ route('news') }}">Nutrition Support Program</a></h4>
                                                <p class="font-15 text-justify">As per a joint study of UNICEF, WFP and the Institute of Public Health and Nutrition, at least 20% of the children in Bangladesh suffer from malnutrition.</p>
                                                <div class="mt-10">
                                                    <a class="btn btn-dark btn-md font-16 btn-theme-colored btn-sm pull-left mt-10" href="{{ route('news') }}">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="causes">
                                            <div class="thumb">
                                                <img class="img-fullwidth mb-sm-0" src="{{ asset('assets/images/program-3.jpg')}}" alt="">
                                            </div>
                                            <div class="progress-item mt-0">
                                                <div class="progress mb-0">
                                                    <div class="progress-bar" data-percent="120"></div>
                                                </div>
                                            </div>
                                            <div class="causes-details bg-white clearfix border-2px p-15 pt-10">
                                                <h4><a href="{{ route('news') }}">Health and Hygiene Program</a></h4>
                                                <p class="font-15 text-justify">APON appreciates and understands the necessity of a basic health and hygiene education for the children. Many APON students spend the entire day in garbage dumps sifting through filth to collect paper/plastic bags to benefit from their resale value in the market.</p>
                                                <div class="mt-10">
                                                    <a class="btn btn-dark btn-md font-16 btn-theme-colored btn-sm pull-left mt-10" href="{{ route('news') }}">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="causes">
                                            <div class="thumb">
                                                <img class="img-fullwidth mb-sm-0" src="{{ asset('assets/images/program-4.jpg')}}" alt="">
                                            </div>
                                            <div class="progress-item mt-0">
                                                <div class="progress mb-0">
                                                    <div class="progress-bar" data-percent="120"></div>
                                                </div>
                                            </div>
                                            <div class="causes-details bg-white clearfix border-2px p-15 pt-10">
                                                <h4><a href="{{ route('news') }}">Transitional Shelter for  Street Children</a></h4>
                                                <p class="font-15 text-justify">At present, about 1 million of the country’s children are street children. These children live in deplorable conditions in squalid slums and/or makeshift shelters, and are prone to be abused and exploited. </p>
                                                <div class="mt-10">
                                                    <a class="btn btn-dark btn-md font-16 btn-theme-colored btn-sm pull-left mt-10" href="{{ route('news') }}">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="causes">
                                            <div class="thumb">
                                                <img class="img-fullwidth mb-sm-0" src="{{ asset('assets/images/program-5.jpg')}}" alt="">
                                            </div>
                                            <div class="progress-item mt-0">
                                                <div class="progress mb-0">
                                                    <div class="progress-bar" data-percent="120"></div>
                                                </div>
                                            </div>
                                            <div class="causes-details bg-white clearfix border-2px p-15 pt-10">
                                                <h4><a href="{{ route('news') }}">Sewing Training Centre for Destitute Women</a></h4>
                                                <p class="font-15 text-justify">In Bangladesh, women from disadvantaged socio-economic backgrounds are often oppressed because of their lack of knowledge and skills.</p>
                                                <div class="mt-10">
                                                    <a class="btn btn-dark btn-md font-16 btn-theme-colored btn-sm pull-left mt-10" href="{{ route('news') }}">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="causes">
                                            <div class="thumb">
                                                <img class="img-fullwidth mb-sm-0" src="{{ asset('assets/images/program-6.jpg')}}" alt="">
                                            </div>
                                            <div class="progress-item mt-0">
                                                <div class="progress mb-0">
                                                    <div class="progress-bar" data-percent="120"></div>
                                                </div>
                                            </div>
                                            <div class="causes-details bg-white clearfix border-2px p-15 pt-10">
                                                <h4><a href="{{ route('news') }}">APON Computer Training Center for  Vulnerable Youth</a></h4>
                                                <p class="font-15 text-justify">At present, the youth comprise about 45% of the population of Bangladesh. In the absence of education, guidance and proper training, a large section of youth find themselves unemployed and often prone to engaging in criminal and anti-social activities.</p>
                                                <div class="mt-10">
                                                    <a class="btn btn-dark btn-md font-16 btn-theme-colored btn-sm pull-left mt-10" href="{{ route('news') }}">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="causes">
                                            <div class="thumb">
                                                <img class="img-fullwidth mb-sm-0" src="{{ asset('assets/images/program-7.jpg')}}" alt="">
                                            </div>
                                            <div class="progress-item mt-0">
                                                <div class="progress mb-0">
                                                    <div class="progress-bar" data-percent="120"></div>
                                                </div>
                                            </div>
                                            <div class="causes-details bg-white clearfix border-2px p-15 pt-10">
                                                <h4><a href="{{ route('news') }}">Day- Care Center for Rohingya Refugee  Children </a></h4>
                                                <p class="font-15 text-justify">More than 1 million members Rohingya community were recently forcibly evacuated from Rakhine State by the Myanmar military, who have now taken refuge in temporary shelters in Cox's Bazar, Bangladesh.</p>
                                                <div class="mt-10">
                                                    <a class="btn btn-dark btn-md font-16 btn-theme-colored btn-sm pull-left mt-10" href="{{ route('news') }}">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="causes">
                                            <div class="thumb">
                                                <img class="img-fullwidth mb-sm-0" src="{{ asset('assets/images/program-8.jpg')}}" alt="">
                                            </div>
                                            <div class="progress-item mt-0">
                                                <div class="progress mb-0">
                                                    <div class="progress-bar" data-percent="120"></div>
                                                </div>
                                            </div>
                                            <div class="causes-details bg-white clearfix border-2px p-15 pt-10">
                                                <h4><a href="{{ route('news') }}">Climate Change and Disaster Rehabilitation Program</a></h4>
                                                <p class="font-15 text-justify">Bangladesh is one of the most vulnerable nations to the impacts of climate change. According to the Global Climate Risk Index 2013, as a result of global warming and an unusual weather pattern, every year Bangladesh becomes the worst victim of natural calamities causing massive loss of lives and extensive damage to flora & fauna.</p>
                                                <div class="mt-10">
                                                    <a class="btn btn-dark btn-md font-16 btn-theme-colored btn-sm pull-left mt-10" href="{{ route('news') }}">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="causes">
                                            <div class="thumb">
                                                <img class="img-fullwidth mb-sm-0" src="{{ asset('assets/images/program-9.jpg')}}" alt="">
                                            </div>
                                            <div class="progress-item mt-0">
                                                <div class="progress mb-0">
                                                    <div class="progress-bar" data-percent="120"></div>
                                                </div>
                                            </div>
                                            <div class="causes-details bg-white clearfix border-2px p-15 pt-10">
                                                <h4><a href="{{ route('news') }}">Research and Program Development</a></h4>
                                                <p class="font-15 text-justify">In a country plagued by scarce resources, it is imperative that the best use is made of resources prior to program formulation. APON’s programs are preceded by extensive research, survey and planning.</p>
                                                <div class="mt-10">
                                                    <a class="btn btn-dark btn-md font-16 btn-theme-colored btn-sm pull-left mt-10" href="{{ route('news') }}">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 pl-40 pl-sm-20 mr-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                <h3 class="text-uppercase line-bottom mt-sm-30 mt-0">Get <span class="text-theme-colored">Involved</span></h3>
                                <div class="icon-box icon-box-effect mb-20 p-15 bg-light border-bottom-3px">
                                    <a href="{{ route('news') }}" class="icon mb-0 mr-0 pull-left flip">
                                        <i class="flaticon-charity-responsible-energy-use text-theme-colored font-48"></i>
                                    </a>
                                    <div class="ml-80">
                                        <h4 class="icon-box-title mt-15 mb-5"><strong>Become a Donar</strong></h4>
                                        <p class="text-gray">Any individual and organization may be APON’s donor.Voice of Bangladesh has numerous life changing programs ...<a class="font-14 pl-10 text-theme-colored" href="{{ route('news') }}"> read more</a></p>
                                    </div>
                                </div>
                                <div class="icon-box icon-box-effect mb-20 p-15 bg-light border-bottom-3px">
                                    <a href="{{ route('news') }}" class="icon mb-0 mr-0 pull-left flip">
                                        <i class="flaticon-charity-shelter text-theme-colored font-48"></i>
                                    </a>
                                    <div class="ml-80">
                                        <h4 class="icon-box-title mt-15 mb-5"><strong>Become a Partner</strong></h4>
                                        <p class="text-gray">Voice of Bangladesh is open to partnership agreements with national and international organizations with ...<a class="font-14 pl-10 text-theme-colored" href="{{ route('news') }}"> read more</a></p>
                                    </div>
                                </div>
                                <div class="icon-box icon-box-effect p-15 bg-light border-bottom-3px">
                                    <a href="{{ route('news') }}" class="icon mb-0 mr-0 pull-left flip">
                                        <i class="flaticon-charity-hand-holding-a-heart text-theme-colored font-48"></i>
                                    </a>
                                    <div class="ml-80">
                                        <h4 class="icon-box-title mt-15 mb-5"><strong>Become a Volunteer</strong></h4>
                                        <p class="text-gray">Voice of Bangladesh welcomes enthusiastic and qualified youth to join our internship program.<a class="font-14 pl-10 text-theme-colored" href="{{ route('news') }}">read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

               <section id="apply">
                <div class="container">
                <div class="row wpb_row vc_row-fluid vc_custom_1521696522255 vc_row-has-fill">
                    <div class="wpb_column vc_column_container col-sm-12 vc_col-has-fill">
                        <div class="vc_column-inner vc_custom_1490271091078">
                            <div class="wpb_wrapper">
                                <div class="addon-themeum-action " style="text-align:left;">
                                    <div class="themeum-action">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <h3 class="action-titlecustomstyle" style="font-size:14px;line-height: normal;color:#ffffff;font-weight:400;margin:28px 0 0;">Let's Rebuild Our Nation!</h3>
                                                <span class="action-sub-titlecustomstylesub" style="font-size:24px;line-height: normal;color:#ffffff;font-weight:700;">JOIN THE VOLUNTEER REGISTRATION!
                                                </span>
                                            </div>
                                            <div class="col-sm-3 btnright">
                                                <a class="action-btn btn btn-default btn-lg btnright" href="register.html">
                                                    APPLY NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>

            <!-- Section: Running Project 1  -->
            <section class="divider parallax layer-overlay overlay-dark-8" data-stellar-background-ratio="0.5" data-bg-img="{{ asset('assets/images/bg/bg7.jpg')}}">
                <div class="container pb-60 pt-70">
                    <div class="section-title text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="mt-0 line-height-1 text-white">RECENT <span class="text-theme-colored">EVENTS</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="row">
                            <div class="owl-carousel-4col horse-gallery" data-dots="true">
                                <div class="gallery-item">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('assets/images/events/10_1.jpg')}}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a data-lightbox="image" href="{{ asset('assets/images/events/10_1.jpg')}}"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="horse-details">
                                        <h4 class="title mb-5"><a href="{{ route('news') }}">Human chain demands exemplary punishment for the rapists.</a></h4>
                                        <span class="category">October 10th, 2020</span>
                                        <p class="font-13 pt-10">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits. ...<a class="font-14 pl-10 text-theme-colored" href="{{ route('news') }}"> read more</a></p>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('assets/images/events/9.jpg')}}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a data-lightbox="image" href="{{ asset('assets/images/events/7.jpg')}}"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="horse-details">
                                        <h4 class="title mb-5"><a href="{{ route('news') }}">Human chain demands exemplary punishment for the rapists.</a></h4>
                                        <span class="category">April 15, 2020</span>
                                        <p class="font-13 pt-10">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits. ...<a class="font-14 pl-10 text-theme-colored" href="{{ route('news') }}"> read more</a></p>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('assets/images/events/7.jpg')}}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a data-lightbox="image" href="{{ asset('assets/images/events/7.jpg')}}"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="horse-details">
                                        <h4 class="title mb-5"><a href="{{ route('news') }}">Human chain demands exemplary punishment for the rapists.</a></h4>
                                        <span class="category">April 05, 2020</span>
                                       <p class="font-13 pt-10">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits. ...<a class="font-14 pl-10 text-theme-colored" href="{{ route('news') }}"> read more</a></p>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('assets/images/events/3.jpg')}}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a data-lightbox="image" href="{{ asset('assets/images/events/3.jpg')}}"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="horse-details">
                                        <h4 class="title mb-5"><a href="{{ route('news') }}">Human chain demands exemplary punishment for the rapists.</a></h4>
                                        <span class="category">August 22, 2018</span>
                                        <p class="font-13 pt-10">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits. ...<a class="font-14 pl-10 text-theme-colored" href="{{ route('news') }}"> read more</a></p>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('assets/images/events/4.jpg')}}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a data-lightbox="image" href="{{ asset('assets/images/events/4.jpg')}}"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="horse-details">
                                       <h4 class="title mb-5"><a href="{{ route('news') }}">Human chain demands exemplary punishment for the rapists.</a></h4>
                                        <span class="category">August 14, 2018</span>
                                        <p class="font-13 pt-10">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits. ...<a class="font-14 pl-10 text-theme-colored" href="{{ route('news') }}"> read more</a></p>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('assets/images/events/5.jpg')}}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a data-lightbox="image" href="{{ asset('assets/images/events/5.jpg')}}"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="horse-details">
                                        <h4 class="title mb-5"><a href="{{ route('news') }}">Human chain demands exemplary punishment for the rapists.</a></h4>
                                        <span class="category">August 7, 2018</span>
                                        <p class="font-13 pt-10">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits. ...<a class="font-14 pl-10 text-theme-colored" href="{{ route('news') }}"> read more</a></p>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('assets/images/events/2.jpg')}}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a data-lightbox="image" href="{{ asset('assets/images/events/2.jpg')}}"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="horse-details">
                                        <h4 class="title mb-5"><a href="{{ route('news') }}">Human chain demands exemplary punishment for the rapists.</a></h4>
                                        <span class="category">August 1st, 2018</span>
                                        <p class="font-13 pt-10">Speakers demanded exemplary punishment for those who raped women and children all around the country. They also demanded proper compensation ms and stopped political influence in favor of the culprits. ...<a class="font-14 pl-10 text-theme-colored" href="{{ route('news') }}"> read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

          

            <!-- Section: Upcoming Events -->
            <section id="events" class="">
                <div class="container pt-60 pb-40">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="section-content">
                                    <h3 class="text-uppercase title line-bottom mt-0 mb-30">Our <span class="text-theme-colored">Gallery</span></h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Portfolio Gallery Grid -->

                                            <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                                                <!-- Portfolio Item Start -->
                                                <div class="gallery-item">
                                                    <div class="thumb">
                                                        <img alt="project" src="{{ asset('assets/images/gallery/1.jpg')}}" class="img-fullwidth">
                                                        <div class="overlay-shade"></div>
                                                        <div class="icons-holder">
                                                            <div class="icons-holder-inner">
                                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                    <a href="{{ asset('assets/images/gallery/1.jpg')}}" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Portfolio Item End -->

                                                <!-- Portfolio Item Start -->
                                                <div class="gallery-item">
                                                    <div class="thumb">
                                                        <img alt="project" src="{{ asset('assets/images/gallery/2.jpg')}}" class="img-fullwidth">
                                                        <div class="overlay-shade"></div>
                                                        <div class="icons-holder">
                                                            <div class="icons-holder-inner">
                                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                    <a href="{{ asset('assets/images/gallery/2.jpg')}}" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Portfolio Item End -->

                                                <!-- Portfolio Item Start -->
                                                <div class="gallery-item">
                                                    <div class="thumb">
                                                        <img alt="project" src="{{ asset('assets/images/gallery/3.jpg')}}" class="img-fullwidth">
                                                        <div class="overlay-shade"></div>
                                                        <div class="icons-holder">
                                                            <div class="icons-holder-inner">
                                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                    <a href="{{ asset('assets/images/gallery/3.jpg')}}" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Portfolio Item End -->

                                                <!-- Portfolio Item Start -->
                                                <div class="gallery-item">
                                                    <div class="thumb">
                                                        <img alt="project" src="{{ asset('assets/images/gallery/4.jpg')}}" class="img-fullwidth">
                                                        <div class="overlay-shade"></div>
                                                        <div class="icons-holder">
                                                            <div class="icons-holder-inner">
                                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                    <a href="{{ asset('assets/images/gallery/4.jpg')}}" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Portfolio Item End -->

                                                <!-- Portfolio Item Start -->
                                                <div class="gallery-item">
                                                    <div class="thumb">
                                                        <img alt="project" src="{{ asset('assets/images/gallery/5.jpg')}}" class="img-fullwidth">
                                                        <div class="overlay-shade"></div>
                                                        <div class="icons-holder">
                                                            <div class="icons-holder-inner">
                                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                    <a href="{{ asset('assets/images/gallery/5.jpg')}}" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Portfolio Item End -->



                                                <!-- Portfolio Item Start -->
                                                <div class="gallery-item">
                                                    <div class="thumb">
                                                        <img alt="project" src="{{ asset('assets/images/gallery/6.jpg')}}" class="img-fullwidth">
                                                        <div class="overlay-shade"></div>
                                                        <div class="icons-holder">
                                                            <div class="icons-holder-inner">
                                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                    <a href="{{ asset('assets/images/gallery/6.jpg')}}" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Portfolio Item End -->

                                                <!-- Portfolio Item Start -->
                                                <div class="gallery-item">
                                                    <div class="thumb">
                                                        <img alt="project" src="{{ asset('assets/images/gallery/7.jpg')}}" class="img-fullwidth">
                                                        <div class="overlay-shade"></div>
                                                        <div class="icons-holder">
                                                            <div class="icons-holder-inner">
                                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                    <a href="{{ asset('assets/images/gallery/7.jpg')}}" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Portfolio Item End -->



                                                <!-- Portfolio Item Start -->
                                                <div class="gallery-item">
                                                    <div class="thumb">
                                                        <img alt="project" src="{{ asset('assets/images/gallery/8.jpg')}}" class="img-fullwidth">
                                                        <div class="overlay-shade"></div>
                                                        <div class="icons-holder">
                                                            <div class="icons-holder-inner">
                                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                    <a href="{{ asset('assets/images/gallery/8.jpg')}}" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Portfolio Item End -->


                                                <!-- Portfolio Item Start -->
                                                <div class="gallery-item">
                                                    <div class="thumb">
                                                        <img alt="project" src="{{ asset('assets/images/gallery/9.jpg')}}" class="img-fullwidth">
                                                        <div class="overlay-shade"></div>
                                                        <div class="icons-holder">
                                                            <div class="icons-holder-inner">
                                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                    <a href="{{ asset('assets/images/gallery/9.jpg')}}" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Portfolio Item End -->



                                                <!-- Portfolio Item Start -->
                                                <div class="gallery-item">
                                                    <div class="thumb">
                                                        <img alt="project" src="{{ asset('assets/images/gallery/10.jpg')}}" class="img-fullwidth">
                                                        <div class="overlay-shade"></div>
                                                        <div class="icons-holder">
                                                            <div class="icons-holder-inner">
                                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                    <a href="{{ asset('assets/images/gallery/10.jpg')}}" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Portfolio Item End -->

                                                <!-- Portfolio Item Start -->
                                                <div class="gallery-item">
                                                    <div class="thumb">
                                                        <img alt="project" src="{{ asset('assets/images/gallery/11.jpg')}}" class="img-fullwidth">
                                                        <div class="overlay-shade"></div>
                                                        <div class="icons-holder">
                                                            <div class="icons-holder-inner">
                                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                    <a href="{{ asset('assets/images/gallery/11.jpg')}}" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Portfolio Item End -->



                                                <!-- Portfolio Item Start -->
                                                <div class="gallery-item">
                                                    <div class="thumb">
                                                        <img alt="project" src="{{ asset('assets/images/gallery/12.jpg')}}" class="img-fullwidth">
                                                        <div class="overlay-shade"></div>
                                                        <div class="icons-holder">
                                                            <div class="icons-holder-inner">
                                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                    <a href="{{ asset('assets/images/gallery/12.jpg')}}" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Portfolio Item End -->


                                                <!-- Portfolio Item Start -->
                                                <div class="gallery-item">
                                                    <div class="thumb">
                                                        <img alt="project" src="{{ asset('assets/images/gallery/13.jpg')}}" class="img-fullwidth">
                                                        <div class="overlay-shade"></div>
                                                        <div class="icons-holder">
                                                            <div class="icons-holder-inner">
                                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                    <a href="{{ asset('assets/images/gallery/13.jpg')}}" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Portfolio Item End -->



                                                <!-- Portfolio Item Start -->
                                                <div class="gallery-item">
                                                    <div class="thumb">
                                                        <img alt="project" src="{{ asset('assets/images/gallery/14.jpg')}}" class="img-fullwidth">
                                                        <div class="overlay-shade"></div>
                                                        <div class="icons-holder">
                                                            <div class="icons-holder-inner">
                                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                    <a href="{{ asset('assets/images/gallery/14.jpg')}}" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Portfolio Item End -->

                                                <!-- Portfolio Item Start -->
                                                <div class="gallery-item">
                                                    <div class="thumb">
                                                        <img alt="project" src="{{ asset('assets/images/gallery/15.jpg')}}" class="img-fullwidth">
                                                        <div class="overlay-shade"></div>
                                                        <div class="icons-holder">
                                                            <div class="icons-holder-inner">
                                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                    <a href="{{ asset('assets/images/gallery/15.jpg')}}" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Portfolio Item End -->



                                                <!-- Portfolio Item Start -->
                                                <div class="gallery-item">
                                                    <div class="thumb">
                                                        <img alt="project" src="{{ asset('assets/images/gallery/16.jpg')}}" class="img-fullwidth">
                                                        <div class="overlay-shade"></div>
                                                        <div class="icons-holder">
                                                            <div class="icons-holder-inner">
                                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                    <a href="{{ asset('assets/images/gallery/16.jpg')}}" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Portfolio Item End -->

                                            </div>
                                            <!-- End Portfolio Gallery Grid -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <h3 class="text-uppercase title line-bottom mt-0 mb-30"><i class="fa fa-calendar text-gray-darkgray mr-10"></i>Upcoming <span class="text-theme-colored">Events</span></h3>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="{{ route('news') }}" class="post-thumb mr-20">
                                        <img alt="" src="{{ asset('assets/images/events/upcoming-events.png')}}"></a>
                                    <div class="post-right">
                                        <h4 class="mt-0 mb-5"><a href="{{ route('news') }}">World Children Day and National Child Rights Week 2020</a></h4>
                                        <ul class="list-inline font-12 mb-5">
                                            <li class="pr-0"><i class="fa fa-calendar mr-5"></i>1-7 October, 2020 |</li>
                                            <!--<li class="pl-5"><i class="fa fa-map-marker mr-5"></i>Dhaka University</li>-->
                                        </ul>
                                        <p class="mb-0 font-13">Voice of Bangladesh plans to celebrate National Child Rights Week ...</p>
                                        <a class="text-theme-colored font-13" href="{{ route('news') }}">Read More →</a>
                                    </div>
                                </article>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="{{ route('news') }}" class="post-thumb mr-20">
                                        <img alt="" src="{{ asset('assets/images/events/upcoming-events.png')}}"></a>
                                    <div class="post-right">
                                        <h4 class="mt-0 mb-5"><a href="{{ route('news') }}">Celebrating Victory Day 2020 with Volunteerism</a></h4>
                                        <ul class="list-inline font-12 mb-5">
                                            <li class="pr-0"><i class="fa fa-calendar mr-5"></i>16 December, 2020 |</li>
                                            <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>Dhanmondi Lake</li>
                                        </ul>
                                        <p class="mb-0 font-13">Voice of Bangladesh is going to celebrate our glorious Victory day 2020 with the hundreds of students of APON education program  on December 16 at APON (Pathshala) School, Dhanmondi Lake, Dhaka.</p>
                                        <!--<a class="text-theme-colored font-13" href="{{ route('news') }}">Read More →</a>-->
                                    </div>
                                </article>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

   <!-- statics begin -->
        <section class="statics">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-counter">
                            <span class="number odometer" data-count="1854">0000</span>
                            <span class="title">Project Finished</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-counter">
                            <span class="number odometer" data-count="3254">0000</span>
                            <span class="title">Line Of Coding</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-counter">
                            <span class="number odometer" data-count="584">000</span>
                            <span class="title">Award Won</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-counter">
                            <span class="number odometer" data-count="1731">0000</span>
                            <span class="title">Satisfied Clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- statics end -->
            <!-- Section: Volunteers -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center">
                                <h2 class="mt-0 text-uppercase font-28">Our <span class="font-30 text-theme-colored">Partners</span></h2>

                            </div>
                            <div class="owl-carousel-6col" data-nav="true">
                                <div class="item text-center">
                                    <a href="{{ route('news') }}" target="_blank"><img alt="" src="{{ asset('assets/images/undp.jpg')}}"></a>
                                </div>
                                <div class="item text-center">
                                    <a href="{{ route('news') }}" target="_blank"><img alt="" src="{{ asset('assets/images/global_fund_for_children.jpg')}}"></a>
                                </div>
                                <div class="item text-center">
                                    <a href="{{ route('news') }}" target="_blank"><img alt="" src="{{ asset('assets/images/muslic_charity.jpg')}}"></a>
                                </div>
                                <div class="item text-center">
                                    <a href="{{ route('news') }}" target="_blank"><img alt="" src="{{ asset('assets/images/ausrelief_logo.jpg')}}"></a>
                                </div>
                                <div class="item text-center">
                                    <a href="{{ route('news') }}" target="_blank"><img alt="" src="{{ asset('assets/images/isd.jpg')}}"></a>
                                </div>
                                <div class="item text-center">
                                    <a href="{{ route('news') }}" target="_blank"><img alt="" src="{{ asset('assets/images/group_qa_logo.jpg')}}"></a>
                                </div>
                                <div class="item text-center">
                                    <a href="{{ route('news') }}" target="_blank"><img alt="" src="{{ asset('assets/images/sel.jpg')}}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection