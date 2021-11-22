  <!-- Footer -->
        <footer id="footer" class="footer bg-black-222" data-bg-img="{{ asset('assets/images/footer-bg.png')}}">
                <div class="container pt-70 pb-40">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="widget dark">
                                <div class="col-sm-3 col-md-3">
                                <img class="mt-10 mb-15" alt="" src="{{ Voyager::image( Voyager::setting('site.logo')) }}"></div>
                                <div class="col-sm-9 col-md-9 text-justify">
                                    @if(!empty(setting('site.footer_desc')))
                                    {{setting('site.footer_desc')}}
                                    @else
                                    
                                    @endif
                            <ul class="styled-icons icon-dark mt-20">

                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s;"><a href=" {{setting('site.facebook')}}" data-bg-color="#3B5998" style="background: rgb(59, 89, 152) !important;"><i class="fab fa-facebook-f"></i></a></li>
                               
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s;"><a href=" {{setting('site.twitter')}}" data-bg-color="#02B0E8" style="background: rgb(2, 176, 232) !important;"><i class="fab fa-twitter"></i></a></li>
                              
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10"><a href=" {{setting('site.skype')}}" data-bg-color="#05A7E3"><i class="fab fa-skype"></i></a></li>
                               
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s" data-wow-offset="10"><a href=" {{setting('site.gplus')}}" data-bg-color="#A11312"><i class="fab fa-google-plus-g"></i></a></li>
                               
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.5s;"><a href=" {{setting('site.youtube')}}" data-bg-color="#C22E2A" style="background: rgb(194, 46, 42) !important;"><i class="fab fa-youtube"></i></a></li>
                                
                            </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h5 class="widget-title line-bottom">Useful Links</h5>
                                <ul class="list angle-double-right list-border">
                                    @foreach($posts as $post)
                                    <li><a href="{{ route('single-news', $post->slug) }}">{{$post->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h5 class="widget-title line-bottom">Quick Contact</h5>
                                <ul class="list-border">
                                    <li>{{setting('site.phone')}}</li>
                                    <li>{{setting('site.mail')}}</li>
                                    <li> {{setting('site.address')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom bg-black-333">
                    <div class="container pt-20 pb-20">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="font-11 text-black-777 m-0">Copyright &copy;2021 {{setting('site.title')}}</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <p class="font-11 text-black-777 m-0">Developed By: <a href="http://www.mybdhost.com/" target="_blank" class="text-white">MybdHost Inc.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        
