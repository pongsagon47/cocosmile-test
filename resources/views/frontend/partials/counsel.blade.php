<!-- NEWSLETTER -->
    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h2>ยินดีให้คำปรึกษา</h2>
                    <p>กรุณากรอก E-mail ของท่านลงในช่องด้านล่าง</p>
                    <form class="delete_form newsletter-form" method="POST" action="{{ route('cocosmile.counsel.store') }}">
                        @csrf
                        <input type="email" placeholder="Your email" class="form-control" name="email" value="{{ old('email') }}">
                        <input type="submit" class="btn btn-default" value="SUBMIT">
                    </form>
                </div>
                <div class="col-md-6 col-sm-12">
                <div class="newsletter-offer text-center">
                    <img src="{{asset('cocosmile/images/newsletter.png')}}" alt="">
                </div>
                </div>
            </div><!-- END Row -->
        </div><!-- END Container -->
    </section>
<!-- END NEWSLETTER -->
@push('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.delete_form').on('submit',function () {
                if(confirm("Are you sure?")){
                    return true;
                }
                else {
                    return false;
                }
            })
        })
    </script>
@endpush