@extends('frontend.layouts.main')
@section('title','Logistic - Products')
@section('content')

  <!-- HERO BANNER -->
        <section class="hero-banner small background no-padding" style="background-image: URL({{ asset('cocosmile/images/background.jpg')}})">
            <div class="floral-pattern" data-stellar-background-ratio="0.8"></div>
            <span class="triangle triangle--top-left-small" style="border-width: 50px 0px 0px 1388px;"></span>
        </section>
        <!-- END HERO BANNER -->

        <!-- PRODUCTS -->
        <section class="products" style="margin-bottom:-100px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-title">
                            <h3 class="moist-heading text-center no-padding-top no-after"><span>Coco Smile</span></h3>
                            <h1 class="text-center page-title">Products<br><img src="{{asset('cocosmile/images/after.jpg')}}" alt=""></h1>
                        </div>
                    </div>
                </div><!-- END Row -->

                <div class="row">
                    <div class="products-grid">

                        @foreach($products as $product)
                        <!-- PRODUCT -->
                        <div class="col-md-3 product">
                            <div class="image">
                                <a href="{{ route('cocosmile.product.detail',[$product->id]) }}"><img src="{{asset('storage/'.$product->image1)}}" alt=""></a>
                            </div>
                                <h2 class="text-left title"><a href="{{ route('cocosmile.product.detail',[$product->id]) }}">{{ $product->quantity }}</a></h2>
                                {{ $product->ingredient }}
                        </div>
                        <!-- END PRODUCT -->
                        @endforeach


                        <div class="col-md-12">
                            <img src="{{ asset('cocosmile/images/product-content.png') }}" alt="">
                        </div>

                    </div>
                </div><!-- END ROw -->
            </div><!-- END Container -->
        </section>
        <!-- END PRODUCTS -->

@endsection