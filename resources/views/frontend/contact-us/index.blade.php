@extends('frontend.layouts.main')
@section('title','Coco Smile - Contact Us')
@section('content')
 <!-- HERO BANNER MAP -->
        <section class="hero-banner contact background no-padding" style="background-color: #56c3f0"> 
            
            <!-- Place your coordonates here -->
            <iframe  style="background-size: cover !important;position: absolute;top: 0;left: 0;width: 100%;height: 100%;opacity: .2;" 
            src="https://www.google.com/maps/embed/v1/place?q=122%20SOI%20LARDPRAO%2026%2C%20JOMPOL%2C%20JATUJAK%2C%20BANGKOK%2010900%20THAILAND&key=AIzaSyD6ZfzPjlZogveeC7_1nLJGn2h5diiHu98" allowfullscreen></iframe>
          <!--  <div id="map" data-lat="13.803270" data-long="100.5725933"></div> 
           Place your coordonates here -->

            <div class="slide">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-md-offset-9">
                            <div class="map-caption element text-left" data-stellar-ratio="1.2">
                                <h2>NATURE FOOD & BEVERAGE CO.,LTD.</h2>
                                <p>122 SOI LARDPRAO 26, JOMPOL, JATUJAK, BANGKOK 10900 THAILAND</p>
                            </div>
                        </div>
                    </div><!-- END Row -->
                </div><!-- END Container -->
            </div>
            <span class="triangle triangle--top-left" style="border-width: 420px 0px 0px 1388px;"></span>
        </section>
        <!-- END HERO BANNER MAP -->

        <!-- CONTACT FORM -->
        <section class="no-padding-top contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form class="contact-form" method="POST" action="{{ route('cocosmile.contact-us.store') }}">
                            @csrf
                            <div class="row">
                                @if(\Session('success'))
                                    <div class="col-md-12 alert alert-success " role="alert">
                                        {{\Session::get('success')}}
                                    </div>
                                @endif
                                <div class="col-md-6">
                                    <label for="name">Name</label>
                                    <input class="form-name form-control validate" type="text" name="name" id="name">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert" style="color: #F80505">
                                             <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input class="form-email form-control validate validate-email" type="email" name="email" id="email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert" style="color: #F80505">
                                             <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <label for="subject">Subject</label>
                            <input class="form-subject form-control" type="text" name="subject" id="subject">
                                @if ($errors->has('subject'))
                                    <span class="invalid-feedback" role="alert" style="color: #F80505">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            <label for="message">Message</label>
                            <textarea class="form-message form-control validate" name="message" id="message"></textarea>

                                @if ($errors->has('message'))
                                <div class="col-md-12">
                                    <span class="invalid-feedback" role="alert" style="color: #F80505">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                </div>
                                @endif
                            <input type="submit" class="btn btn-default" value="Submit">
                        </form>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <div class="contact-info">
                            <h2>Contact<br><img src="images/after-2.jpg" alt=""></h2>
                            <p>NATURE FOOD & BEVERAGE CO.,LTD.</p>
                            <h3 class="moist-heading no-after"><strong>Phone:</strong> 02-938-4477<br> <strong>Fax:</strong> 02-938-6275<br> <strong>Email:</strong> info@naturefb.com <br> <strong>Address:</strong> 122 SOI LARDPRAO 26, JOMPOL, JATUJAK, BANGKOK 10900 THAILAND</h3>
                         </div>
                    </div>
                </div><!-- END Row -->
            </div><!-- END Container -->

        </section>
        <!-- END CONTACT FORM -->
@endsection