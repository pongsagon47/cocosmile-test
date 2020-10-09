        <!-- HERO BANNER -->
        <section class="hero-banner background no-padding" style="background-image: URL({{ asset('cocosmile/images/background.jpg') }})">
            <div class="floral-pattern" data-stellar-background-ratio="0.8"></div>
            <div class="slide">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('cocosmile/images/banner.png') }}" alt="" class="visible-desk">
                            <div class="caption element text-left visible-mob" data-stellar-ratio="0.95"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="caption element text-left visible-desk" data-stellar-ratio="0.95">
                                <h2>
                                    @if(array_get($welcome,'0.title') == null )
                                    <span>100% Natural</span><span> Coconut Water</span>
                                    @else
                                    {{array_get($welcome,'0.title')}}
                                    @endif
                                </h2>
                                 @if(array_get($welcome,'0.subtitle') == null )
                                    <p><strong>Coco Smile</strong> is natural and helps refresh and</p>
                                    <p>rehydrate. It contains electrolytes with</p>
                                    <p>no added sugar, no fat and no cholesterol.</p>
                                @else
                                    {!!array_get($welcome,'0.subtitle')!!}
                                @endif
                                
                                <a href="{{ route('cocosmile.products') }}" class="btn btn-default">VIEW DETAILS <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                            <img src="images/banner.png" alt="" class="visible-mob">
                        </div>
                    </div><!-- END Row -->
                </div><!-- END Container -->
            </div>
            <span class="triangle triangle--top-left" style="border-width: 420px 0px 0px 1388px;"></span>
        </section>

        <!-- FEATURED COLLECTION -->
        <section class="featured-collection no-padding-top">
            <div class="container">
                <div class="row">
                <div class="col-md-5">
                        <h3 class="moist-heading" style="margin-left: 15px"><span>OUR PRODUCT</span></h3>
                        <h2>
                            @if(array_get($ourProduct,'0.title') == null )
                                 Cocosmile น้ำมะพร้าวแท้ 100%  ให้คุณดูแลตัวเองง่ายๆได้ทุกวัน
                            @else
                                {{array_get($ourProduct,'0.title')}}
                            @endif
                           
                        </h2>
                        <p>
                            @if(array_get($ourProduct,'0.description') == null )
                                 น้ำมะพร้าวเป็นอาหารบริสุทธิ์ ดื่มได้ทุกวัน ทุกเพศทุกวัย เพราะเป็นเครื่องดื่มจากธรรมชาติ ทำให้ร่างกายสดชื่นและเต็มไปด้วยกลูโคสที่ร่างกายดูดซึมเข้าไปใช้ได้ง่ายๆ
                            @else
                                {!!array_get($ourProduct,'0.description')!!}
                            @endif
                        </p>
                        <a href="{{ route('cocosmile.products') }}" class="btn btn-default">VIEW OUR PRODUCTS <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <div class="col-md-6 col-md-offset-1">  
                        @if(array_get($ourProduct,'0.image') == null )
                            <img src="{{ asset('cocosmile/images/hand.png') }}" alt="" class="absolute-parallax-image" data-stellar-ratio="1.1">
                        @else
                            <img src="{{asset('storage/'.array_get($ourProduct,'0.image'))}}" alt="" class="absolute-parallax-image" data-stellar-ratio="1.1">
                        @endif
                    </div>
                </div><!-- END Row -->
            </div><!-- END Container -->
        </section>
        <!-- END FEATURED COLLECTION -->

        <!-- CALL TO ACTION -->
        <section class="cta">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">    
                    </div>
                    <div class="col-md-7">
                        <h2 class="section-title">ติดต่อสอบถามเราได้ที่นี่</h2>
                        <p>ทางเรายินดีให้บริการกับลูกค้าทุกท่านด้วยรอยยิ้ม</p>
                    </div>
                    <div class="col-md-3 align-vertical">
                        <a href="{{ route('cocosmile.contact-us.index') }}" class="btn btn-primary">CONTACT US <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div><!-- END Row -->
            </div><!-- END Container -->
        </section>
        <!-- END CALL TO ACTION -->