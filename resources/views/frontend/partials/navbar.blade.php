<!-- Main wrapper -->
    <div class="main-wrapper">
        <section class="navigation-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo-wrapper">
                            <a href="{{ route('cocosmile.index') }}"><img src="{{ asset('cocosmile/images/logo-white.png') }}" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <ul id="navigation" class="slimmenu pull-right">
                            <li><a href="{{ route('cocosmile.index') }}">HOME</a></li>
                            <li>
                                <a href="{{ route('cocosmile.about-us') }}">BENEFIT</a>
                            </li>
                            <li>
                                <a href="{{ route('cocosmile.products') }}">PRODUCTS</a>
                            </li>
                            <li>
                                <a href="{{ route('cocosmile.logistic-order') }}">LOGISTIC & ORDER</a>      
                            </li>
                            <li>
                                <a href="{{ route('cocosmile.contact-us.index') }}">CONTACT US</a>
                            </li>
                            <li class="search">
                                <a href="{{ route('cocosmile.search') }}"><span class="fa fa-search"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>