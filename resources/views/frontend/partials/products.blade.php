<!-- PRODUCTS -->
        <section class="products text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="products-carousel">

                            @foreach($products as $product)
                            <!-- PRODUCT -->
                            <div class="product">
                                
                                    <img src="{{asset('storage/'.$product->image1)}}" alt="">
                                
                                <p class="product-title">{{$product->quantity}}</p>
                            </div>
                            <!-- END PRODUCT -->
                            @endforeach
                        </div>
                    </div>
                </div><!-- END Row -->
            </div><!-- END Container -->
        </section>
        <!-- END PRODUCTS -->
