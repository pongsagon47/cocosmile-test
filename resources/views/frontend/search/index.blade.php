@extends('frontend.layouts.main')
@section('title','Coco Smile - Search')
@section('content')
 <!-- HERO BANNER -->
        <section class="hero-banner small background no-padding" style="background-image: URL({{asset('cocosmile/images/background.jpg')}})">
            <div class="floral-pattern" data-stellar-background-ratio="0.8"></div>
            <span class="triangle triangle--top-left-small" style="border-width: 50px 0px 0px 1388px;"></span>
        </section>
        <!-- END HERO BANNER -->

        <!-- SEARCH -->
        <section class="search-wrapper no-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-title">
                            <h3 class="moist-heading text-center no-padding-top no-after"><span>Coco Smile</span></h3>
                            <h1 class="text-center page-title">Search<br><img src="{{asset('images/after.jpg')}}" alt=""></h1>
                        </div>
                    </div>
                </div><!-- END Row -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form  class="input-group search-bar">
                          <input type="search" name="s" value="" placeholder="Search our store" class="input-group-field form-control" aria-label="Search our store">
                          <span class="input-group-btn">
                            <button type="submit" class="btn btn-default icon-fallback-text">
                              <i class="fa fa-search"></i>
                              <span class="fallback-text">Search</span>
                            </button>
                          </span>
                        </form>
                    </div>
                </div><!-- END Row -->
            </div><!-- END Container -->
        </section>
        <!-- END SEARCH -->

        <div style="height: 120px"></div>
@endsection