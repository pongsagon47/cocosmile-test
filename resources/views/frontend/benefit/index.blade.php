@extends('frontend.layouts.main')
@section('title','Coco Smile - About us')
@section('content')
 		
 		<!-- HERO BANNER -->
        <section class="hero-banner small background no-padding" style="background-image: URL({{ asset('cocosmile/images/background.jpg') }})">
            <div class="floral-pattern" data-stellar-background-ratio="0.8"></div>
            <span class="triangle triangle--top-left-small" style="border-width: 50px 0px 0px 1388px;"></span>
        </section>
        <!-- END HERO BANNER -->

        <!-- ABOUT -->
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-title">
                            <h3 class="moist-heading text-center no-padding-top no-after"><span>Coco Smile</span></h3>
                            <h1 class="text-center page-title">Benefit<br><img src="{{asset('cocosmile/images/after.jpg')}}" alt=""></h1>
                        </div>
                    </div>
                </div><!-- END Row -->
                <div class="row" style="padding-bottom: 60px ;border-bottom: solid 1px #58c3f1">
                    <div class="col-md-4 col-md-offset-1">
                        <div class="about">
                            <div class="account-offer-slider">
                                <div class="offer-slide">
                                    <img src="\cocosmile\images\10825.jpg" alt="">
                                </div>
                                <div class="offer-slide">
                                    <img src="\cocosmile\images\10825.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="about">
                            <div class="post-content">
                                <!--<h3 class="moist-heading no-after" style="font-size: 16px"><span>Vision/ Mission</span></h3>-->
                                <h3>ข้อดีของน้ำมะพร้าว Cocosmile</h3>
                                <p>1.   ช่วยลดอาการก่อนมีรอบเดือน ของสตรีวัยเจริญพันธุ์เช่นอาการปวดศีรษะ  ปวดท้องน้อย</p>
                                <p>2.  ถ้าทานน้ำมะพร้าว ร่างกายจะได้ทั้งเอสโตรเจน และโปรเจสติน ซึ่งจะไปออกฤทธิ์ ต้านฮอร์โมนแอนโดรเจน ทำให้สิวลดลง ผิวพรรณเรียบเนียน แลดูสุขภาพผิวดีขึ้น  เหมาะสำหรับวัยรุ่นที่เป็นสิว</p>
                                <p>3.  ช่วยตับทำลาย “เอสโทรน” (estrone) ซึ่งเป็นสารที่ถูกเปลี่ยนไปเป็นฮอร์โมนเอสโตรเจน ให้กลายเป็นสาร  “เอสไทรออล” (estriol) ซึ่งถือว่าเป็นรูปเอสโตรเจนที่ปลอดภัยที่สุด </p> 
                                <p>4.  คนที่รับประทานน้ำมะพร้าวสามารถป้องกันมะเร็งเต้านมได้  เพราะทานน้ำมะพร้าวจะช่วยรักษาสมดุลเอสโตรเจนได้ลดอาการ ร้อนวูบวาบ เหงื่อออกกลางคืนในสตรีวัยหมดประจำเดือน</p>
                            </div>
                        </div>
                    </div>
                </div><!-- END Row -->
            </div><!-- END Container -->
        </section>
        <!-- END ABOUT -->

        <!-- ABOUT BLOCK -->
        <section class="bordered no-padding-top">
            <div class="container">
                <div class="row" style="padding-bottom: 60px ;border-bottom: solid 1px #58c3f1;">
                    <div class="col-md-5 col-md-offset-1">
                        <div class="about">
                            <div class="post-content ">
                                <!--<h3 class="moist-heading no-after" style="font-size: 16px"><span>Company</span></h3>-->
                                <h3>คุณค่าทางการแพทย์</h3>
                                <p>ชะลออาการอัลไซเมอร์ การดื่มน้ำมะพร้าวทุกวันจะช่วยชะลออาการอัลไซเมอร์ได้ จากผลงานวิจัยของ ดร.นิซาอูดะห์ ระเด่นอาหมัด อาจารย์ประจำภาควิชากายวิภาคศาสตร์ คณะวิทยาศาสตร์ มหาวิทยาลัยสงขลานครินทร์ พบว่า ในน้ำมะพร้าวมีฮอร์โมนคล้ายฮอร์โมนเพศหญิงหรือเอสโตรเจนสูง ซึ่งมีผลช่วยชะลอการเกิดโรคอัลไซเมอร์หรือความจำเสื่อมในสตรีวัยทอง นอกจากนี้ การดื่ม น้ำมะพร้าวเป็นประจำทุกวัน ยังสามารถช่วยสมานแผล ทำให้แผลหายเร็วขึ้นกว่าปกติ และไม่ทิ้งรอยแผลเป็นอีกด้วย </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <div class="about">
                           <div class="account-offer-slider">
                                <div class="offer-slide">
                                    <img src="\cocosmile\images\Coconut-1.jpg" alt="">
                                </div>
                                <div class="offer-slide">
                                    <img src="\cocosmile\images\Coconut-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- END Row -->
            </div><!-- END Container -->
        </section>
        <!-- END ABOUT BLOCK -->

         <!-- ABOUT -->
        <section class="bordered no-padding-top" style="margin-bottom:-100px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div><!-- END Row -->
                <div class="row">
                    <div class="col-md-4 col-md-offset-1">
                        <div class="about">
                            <div class="account-offer-slider">
                                <div class="offer-slide">
                                    <img src="\cocosmile\images\151002041341GP6A.jpg" alt="">
                                </div>
                                <div class="offer-slide">
                                    <img src="\cocosmile\images\151002041341GP6A.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="about">
                            <div class="post-content">
                                <!--<h3 class="moist-heading no-after" style="font-size: 16px"><span>History</span></h3>-->
                                <h3>คุณค่าด้านสุขภาพ</h3>
                                <p>ช่วยให้ผิวพรรณเปล่งปลั่ง น้ำมะพร้าวสามารถช่วยเสริมสร้างความสวยใสของผิวพรรณ ทำให้เปล่งปลั่งและขาวนวลขึ้นจากภายในสู่ภายนอก เพราะในน้ำมะพร้าวมีเอสโตรเจนอยู่ ซึ่งมีส่วนสำคัญต่อการสร้างคอลลาเจนและอีลาสติน ทำให้ผิวกระชับ ยืดหยุ่น และชะลอการเกิดริ้วรอยก่อนวัยได้ และในน้ำมะพร้าวยังสามารถกระตุ้นการเจริญเติบโตและแบ่งเซลล์ได้ดี แถมยังมีฤทธิ์ขับปัสสาวะ ขับของเสียหรือสารพิษออกจากร่างกาย (คล้ายๆ กับการดีท็อกซ์) จึงช่วยทำให้ผิวพรรณผ่องใส อีกทั้งความเป็นด่างของน้ำมะพร้าวยังช่วยปรับสมดุลของร่างกายในช่วงที่มีความเป็นกรดสูง ทำให้กลไกการทำงานของระบบภายในเป็นปกติ ส่งผลให้มีสุขภาพดีจากภายในสู่ภายนอก </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <img src="images/about-content.png" alt="">
                    </div>
                </div><!-- END Row -->
                
            </div><!-- END Container -->
        </section>

@endsection