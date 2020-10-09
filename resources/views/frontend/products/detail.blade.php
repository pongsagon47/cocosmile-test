@extends('frontend.layouts.main')
@section('title','Logistic - Products Detail')
@section('content')
 <!-- HERO BANNER -->
        <section class="hero-banner small background no-padding" style="background-image: URL({{asset('cocosmile/images/background.jpg')}})">
            <div class="floral-pattern" data-stellar-background-ratio="0.8"></div>
            <span class="triangle triangle--top-left-small" style="border-width: 50px 0px 0px 1388px;"></span>
        </section>
        <!-- END HERO BANNER -->

        <!-- PRODUCT SINGLE -->
        <section class="product-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product" itemscope="" itemtype="http://schema.org/Product">

                            <!-- Schema.org -->
                            <meta itemprop="url" content="PRODUCTURL">
                            <meta itemprop="image" content="PRODUCTIMAGE">

                            <div class="row">
                                <div class="col-md-12">

                                    <!-- PRODUCT TITLE -->
                                    <div class="product-title">
                                        <h3 class="moist-heading text-center no-padding-top no-after"><span>Coco Smile</span></h3>
                                        <h1 class="text-center page-title" itemprop="name">{{$product->name}}</h1>
                                    </div>
                                    <!-- END PRODUCT TITLE -->

                                </div>
                                <div class="col-md-6">

                                    <!-- PRODUCT MAIN IMAGE -->
                                    <div class="image">
                                        <img src="{{asset('storage/'.$product->image1)}}" alt="">
                                    </div>
                                    <!-- END PRODUCT MAIN IMAGE -->

                                    <!-- PRODUCT SECONDAY IMAGES -->
                                    <div class="secundary-images">
                                        <a href="#">
                                            <img src="{{asset('storage/'.$product->image1)}}" alt="">
                                        </a>
                                      
                                        @if($product->image2 != null)
                                        	<a href="#">
                                            	<img src="{{asset('storage/'.$product->image2)}}" alt="">
                                            </a>
                                        @endif
                                        @if($product->image3 != null)
                                        	<a href="#">
                                            	<img src="{{asset('storage/'.$product->image3)}}" alt="">
                                            </a>
                                        @endif
                                    </div>
                                    <!-- END PRODUCT SECONDAY IMAGES -->
                                    
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="content">

                                            <h2>{{ $product->quantity }}</h2>
                                       
                                        <!-- END PRODUCT PRICE -->

                                        <!-- PRODUCT SHORT DESCRIPTION -->
                                        <div class="product-short-description">
                                        	<p>{{ $product->ingredient}}</p>
                                            {!! $product->subingredient !!}
                                        </div>
                                        <!-- END PRODUCT SHORT DESCRIPTION -->

                                        <!--  CONTENTS -->

                        <img src="{{asset('cocosmile/images/product-icon.png')}}" alt="" >

                                       <div class="share-it">
                        <span class="screen-reader-text">Share this</span>
                        <div style="margin-top: 30px">
                            <div class="ro-font-size-4" style="float:left; margin-right:15px">
                            <div class="fb-like" data-href="https://www.facebook.com/" data-layout="button" data-action="like" data-show-faces="false" data-share="true">                              
                            </div>
                            </div>
                
                            <div style="margin-top:6px; float:left; margin-right:15px"><a href="https://twitter.com/share" class="twitter-share-button"{count}>Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                            </div>
                
                            <div style="margin-top:6px; float:left; margin-right:15px">
                            <div class="g-plus" data-action="share" data-annotation="none">                                
                            </div>
                            </div>
                
                            <div style="margin-top:1px; float:left; margin-bottom:40px"><a href="http://line.me/R/msg/text/?LINE%20it%21%0d%0ahttp%3a%2f%2fline%2enaver%2ejp%2f"><img src="{{asset('cocosmile/images/linebutton_68x20_en.png')}}" width="68px" height="20px" alt="LINE it!" /></a>
                            </div>
                        </div>
                    </div><!-- .share-it -->

                                    </div>
                                </div>
                            </div><!-- END Row -->
                            <div class="row">
                                <div class="col-md-12 ">

                                    <!-- PRODUCT LARGE DESCRIPTION -->
                                    <div class="product-large-description text-center" itemprop="description">
                                        <h2>Product Description</h2>
                                        {!! $product->description !!}
                                        <p><img src="{{asset('cocosmile/images/product-table.jpg')}}"></p>
                                    </div>
                                    <!-- END PRODUCT LARGE DESCRIPTION -->

                                </div>
                            </div><!-- END Row -->
                        </div>
                    </div>
                </div><!-- END Row -->
            </div><!-- END Container -->
        </section>
        <!-- END PRODUCT SINGLE -->

        <!-- RELATED PRODUCTS -->
        <section class="related-products no-padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3 class="moist-heading text-center no-padding-top no-after"><span>Just for you</span></h3>
                        <h2 class="text-center page-title">Similar Extracts</h2>
                    </div>
                </div><!-- END Row -->
                <div class="row">
                    <div class="products-grid">

                        @foreach($relateProducts as $relateProduct)

                        <!-- RELATED PRODUCT -->
                        <div class="col-md-4 product">
                            <div>
                                <a href="{{ route('cocosmile.product.detail',[$relateProduct->id]) }}"><img src="{{asset('storage/'.$relateProduct->image1)}}" alt=""></a>
                            </div>
                            <div class="description">
                                <h2 class="text-center title" style="line-height: 70px"><a href="{{ route('cocosmile.product.detail',[$relateProduct->id]) }}">{{$relateProduct->quantity}}</a></h2>
                            </div>
                        </div>
                        <!-- END RELATED PRODUCT -->

                        @endforeach
                    </div>
                </div><!-- END Row -->
            </div><!-- END Container -->
        </section>
        <!-- END RELATED PRODUCTS -->
@endsection