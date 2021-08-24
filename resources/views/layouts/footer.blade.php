  <!-- Footer -->
        <footer id="footer" class="footer bg-black-222" data-bg-img="{{ asset('assets/images/footer-bg.png')}}">
                <div class="container pt-70 pb-40">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="widget dark">
                                <div class="col-sm-3 col-md-3">
                                <img class="mt-10 mb-15" alt="" src="{{ asset('assets/images/logo-1.jpg')}}"></div>
                                <div class="col-sm-9 col-md-9 text-justify">
                                    Our mission is to meet the basic needs and secure the basic rights of underprivileged children bringing about a favourable impact on their lives. Providing basic education facilities and nutritional support to underprivileged children and creating employment opportunities and providing vocational training to the unemployed youth.
                                     <ul class="styled-icons icon-dark mt-20">
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s;"><a href="{{ route('news') }}" data-bg-color="#3B5998" style="background: rgb(59, 89, 152) !important;"><i class="fa fa-facebook"></i></a></li>
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s;"><a href="{{ route('news') }}" data-bg-color="#02B0E8" style="background: rgb(2, 176, 232) !important;"><i class="fa fa-twitter"></i></a></li>
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10"><a href="{{ route('news') }}" data-bg-color="#05A7E3"><i class="fa fa-skype"></i></a></li>
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s" data-wow-offset="10"><a href="{{ route('news') }}" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a></li>
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.5s;"><a href="{{ route('news') }}" data-bg-color="#C22E2A" style="background: rgb(194, 46, 42) !important;"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h5 class="widget-title line-bottom">Useful Links</h5>
                                <ul class="list angle-double-right list-border">
                                    <li><a href="{{ route('news') }}">Ministry of Women and Children Affairs</a></li>
                                    <li><a href="{{ route('news') }}">Global Fund for Children</a></li>
                                    <li><a href="{{ route('news') }}">UNICEF</a></li>
                                    <li><a href="{{ route('news') }}">Save the Children</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget dark">
                                <h5 class="widget-title line-bottom">Quick Contact</h5>
                                <ul class="list-border">
                                    <li><a href="{{ route('news') }}">+8801534508931-32, +8801711054701</a></li>
                                    <li><a href="{{ route('news') }}">info@aponfoundation.org</a></li>
                                    <li><a href="{{ route('news') }}" class="lineheight-20">202/Kha, Haji Solim Uddin Lane, Flat -7A, Middle Badda, Dhaka-1212</a></li>
                                </ul>
                                <p class="font-16 text-white mb-5 mt-15">Subscribe to our newsletter</p>
                                <form id="footer-mailchimp-subscription-form" class="newsletter-form mt-10">
                                    <label class="display-block" for="mce-EMAIL"></label>
                                    <div class="input-group">
                                        <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control" data-height="37px" id="mce-EMAIL">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-colored btn-theme-colored m-0"><i class="fa fa-paper-plane-o text-white"></i></button>
                                        </span>
                                    </div>
                                </form>
                                <!-- Mailchimp Subscription Form Validation-->
                                <script type="text/javascript">
                                $('#footer-mailchimp-subscription-form').ajaxChimp({
                                callback: mailChimpCallBack,
                                url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                                });
                                function mailChimpCallBack(resp) {
                                // Hide any previous response text
                                var $mailchimpform = $('#footer-mailchimp-subscription-form'),
                                $response = '';
                                $mailchimpform.children(".alert").remove();
                                if (resp.result === 'success') {
                                $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                } else if (resp.result === 'error') {
                                $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                }
                                $mailchimpform.prepend($response);
                                }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom bg-black-333">
                    <div class="container pt-20 pb-20">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="font-11 text-black-777 m-0">Copyright &copy;2018 Voice of Bangladesh</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <p class="font-11 text-black-777 m-0">Developed By: <a href="http://www.mybdhost.com/" target="_blank">mybdhost</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        
