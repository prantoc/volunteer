@extends('layouts.header')
@section('content')
 <!-- Start main-content -->
            <div class="main-content">
                <section id="programs" class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg8.jpg" style="background-image: url(&quot;images/bg/bg8.jpg&quot;); background-position: 50% 41px;">
                    <div class="container pt-70 pb-20">
                        <!-- Section Content -->
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="title text-white text-center">News</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section: news -->
                <section class="pt-70 pb-20">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-2"></div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <div class="section-title">
                                    <h2>JOIN THE VOLUNTEER REGISTRATION</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                            <!--  ==================================SESSION MESSAGES==================================  -->
                                @if (session()->has('message'))
                                    <div class="alert alert-{!! session()->get('type')  !!} alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        {!! session()->get('message')  !!}
                                    </div>
                                @endif
                            <!--  ==================================SESSION MESSAGES==================================  -->


                            <!--  ==================================VALIDATION ERRORS==================================  -->
                                @if($errors->any())
                                    @foreach ($errors->all() as $error)

                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                              {!!  $error !!}
                                        </div>
                                    @endforeach
                                @endif
                            <!--  ==================================SESSION MESSAGES==================================  -->
                            </div>
                            <div class="col-xl-2 col-lg-2"></div>
                            <div class="col-xl-8 col-lg-8">
                                <form  id="contact_form" method="POST" action="{{ route('volunteer-register') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group mb-30">
                                                <label for="">Full Name <span style="color:red;">*</span></label>
                                                <input name="name" class="form-control" type="text" placeholder="Enter Your Full Name" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-30">
                                                <label for="">Email Address <span style="color:red;">*</span></label>
                                                <input name="email" class="form-control required email" type="email" placeholder="Enter Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group mb-30">
                                                <label for="">Phone <span style="color:red;">*</span></label>
                                                <input name="phone" class="form-control required" type="text" placeholder="Enter Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-30">
                                                <label for="">District <span style="color:red;">*</span></label>
                                                <select class="form-control select2bs4" name="dis_id" style="width: 100%;" required>
                                                @foreach($districts as $ds)
                                                  <option value="{{$ds->id}}">{{$ds->name}}</option>
                                                @endforeach
                                               </select>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group mb-30">
                                                <label for="">Blood Group<span style="color:red;">*</span></label>
                                                <input name="blood" class="form-control" type="text" placeholder="Enter Your Blood Group" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-30">
                                                <label for="">Gender <span style="color:red;">*</span></label>
                                                <select class="form-control select2bs4" name="gender" style="width: 100%;" required>
                                                  <option value="male">Male</option>
                                                  <option value="female">Female</option>
                                                  <option value="common-gender">Common Gender</option>
                                               </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-30">
                                        <label for="">Your Picture  <span style="color:red;">*</span></label>
                                        <input name="image" class="form-control required" type="file" placeholder="Enter Your Picture" required>
                                    </div>
                                    

                                    <div class="form-group mb-30">
                                    
                                        <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-20 mb-sm-30 border-left-theme-color-2-4px">Submit</button>

                                        <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-20 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </section>
            </div>
            <!-- end main-content -->

@endsection