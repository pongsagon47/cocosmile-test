@extends('frontend.layouts.main')
@section('title','Coco Smile - Logistic - Order')
@section('content')
	  <!-- HERO BANNER -->
        <section class="hero-banner small background no-padding" style="background-image: URL({{asset('cocosmile/images/background.jpg')}})">
            <div class="floral-pattern" data-stellar-background-ratio="0.8"></div>
            <span class="triangle triangle--top-left-small" style="border-width: 50px 0px 0px 1388px;"></span>
        </section>
        <!-- END HERO BANNER -->

        <!-- ARTICLE -->
        <section class="article-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-title">
                        <h3 class="moist-heading text-center no-padding-top no-after"><span>Coco Smile</span></h3>
                            <h1 class="text-center page-title">Logistic & Order<br><img src="{{asset('cocosmile/images/after.jpg')}}" alt=""></h1>
                        </div>
                    </div>
                </div><!-- END Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="article">

                            <!-- ARTICLE IMAGE -->
                            <div class="article-image" style="text-align: center;">
                                @if(array_get($logisticOrder,'0.image') == null)
                                    <img src="http://placehold.it/900x600" alt="">
                                @else
                                    <img src="{{asset('storage/'.array_get($logisticOrder,'0.image'))}}" alt="">
                                @endif
                            </div>
                            <!-- END ARTICLE IMAGE -->

                            <!-- ARTICLE CONTENT -->
                            <div class="article-content">
                                @if(array_get($logisticOrder,'0.introduction') == null)
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim erat ut laoreet pharetra. Proin mauris mi, egestas eget nibh sit amet, egestas vulputate dui. Sed egestas non sem at sagittis. Mauris augue metus, posuere at porttitor eget, auctor sed tortor. In lobortis ligula vitae odio luctus, posuere luctus lectus suscipit. Proin mauris leo, sollicitudin vel egestas sit amet, egestas at neque. Curabitur sem diam, ultrices eget hendrerit eget, pharetra vel est. Morbi ullamcorper tristique aliquet. Curabitur nec orci a tellus faucibus sollicitudin dapibus id mauris. Proin dolor metus, blandit quis aliquam tincidunt, pharetra a risus. Duis molestie, quam non commodo faucibus, lorem elit suscipit risus, in consectetur lorem sapien non lorem. Maecenas in nibh viverra, bibendum augue ac, dapibus tortor. Aenean eleifend dignissim sem, ac blandit nunc dignissim eget. Ut condimentum lacus at velit pellentesque, id blandit massa vestibulum. Quisque luctus tempus convallis. Curabitur id tincidunt est. Donec vehicula tempor tellus, sit amet aliquam enim lobortis vitae. Maecenas tortor orci, scelerisque quis erat sit amet, dictum faucibus ante. </p>
                                @else
                                    {!! array_get($logisticOrder,'0.introduction') !!}
                                @endif
                               
                            </div>
                            <!-- END ARTICLE CONTENT -->
                        
                        <div class="content" style="margin-top: 25px">
                      <div class="col-md-6" style="margin-bottom: 25px"><iframe width="100%" height="315"  src="https://www.youtube.com/embed/8xe8Um-p4xA" frameborder="0" allowfullscreen></iframe></div>
                            <div class="col-md-6">
                                @if(array_get($logisticOrder,'0.article') == null)
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim erat ut laoreet pharetra. Proin mauris mi, egestas eget nibh sit amet, egestas vulputate dui. Sed egestas non sem at sagittis. Mauris augue metus, posuere at porttitor eget, auctor sed tortor. In lobortis ligula vitae odio luctus, posuere luctus lectus suscipit. Proin mauris leo, sollicitudin vel egestas sit amet, egestas at neque. 
                                @else
                                    {!! array_get($logisticOrder,'0.article') !!}
                                @endif
                                   
                            </div>
                           
                            </div>
                        </div>
                    </div>
                </div><!-- END Row -->
            </div><!-- END Container -->
        </section>
        <!-- END ARTICLE -->

@endsection