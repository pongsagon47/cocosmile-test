@extends('frontend.layouts.main')
@section('title','Coco Smile - Article')
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
                            <h1 class="text-center page-title">น้ำมะพร้าวนมสด (มังสวิรัติ)<br><img src="{{asset('cocosmile/images/after.jpg')}}" alt=""></h1>
                        </div>
                    </div>
                </div><!-- END Row -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="article">

                            <!-- ARTICLE IMAGE -->
                            <div class="article-image">
                                <img src="{{asset('cocosmile/images/Nam.jpg')}}" alt="">
                            </div>
                            <!-- END ARTICLE IMAGE -->

                            <!-- ARTICLE CONTENT -->
                            <div class="article-content">
                                <p>น้ำมะพร้าวนมสด (มังสวิรัติ) เครื่องดื่มแนะนำจากร้านไคซินไช่ให้สั่ง น้ำมะพร้าวนมสด รสหวานมัน กลิ่นหอม ใครได้ลองเป็นต้องติดใจ</p>
                                <p>ส่วนผสม (สำหรับ 1 แก้ว)เตรียม 5 นาที ปรุง 10 นาที <br>
                                        •   น้ำมะพร้าว 60 มิลลิลิตร<br>
                                        •   นมข้นหวาน 15 มิลลิลิตร<br>
                                        •   ครีมเทียมข้นจืด 30 มิลลิลิตร<br>
                                        •   นมข้นจืด 30 มิลลิลิตร<br>
                                        •   นมสด 30 มิลลิลิตร<br>
                                        •   เนื้อมะพร้าวหั่นชิ้นเล็ก 2 ช้อนโต๊ะ<br>
                                        วิธีทำ<br>
                                        ผสมทุกอย่างให้เข้ากัน(ยกเว้นเนื้อมะพร้าว) เทใส่แก้วเติมน้ำแข็งลงไปเล็กน้อย โรยเนื้อมะพร้าวลงไป พร้อมเสิร์ฟ<br>
                                        พลังงานต่อหนึ่งแก้ว 203.30 กิโลแคลอรี<br>
                                        โปรตีน 4.03 กรัม ไขมัน 8.54 กรัม<br>
                                        คาร์โบไฮเดรต 27.45 กรัม ไฟเบอร์ 0.00 กรัม<br><br>
                                        สูตร : ไคซินไช่<br><br>
                                        Cr. http://www.healthandcuisine.com/20976/recipe/coconut-juice-182/
                                        </p>
                            </div>
                            <!-- END ARTICLE CONTENT -->

                            

                        </div>
                    </div>
                </div><!-- END Row -->
            </div><!-- END Container -->
        </section>
        <!-- END ARTICLE -->
@endsection