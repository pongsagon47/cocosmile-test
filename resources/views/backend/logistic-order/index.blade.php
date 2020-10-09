@extends('backend.layouts.main_dashboard')
@section('title', 'Logistic & Order')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Logistic & Order</div>

                    <div class="card-body">

                        @if(\Session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 20px">
                                {{\Session::get('success')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if(\Session('delete'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 20px">
                                {{\Session::get('delete')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <form class="success_form"  method="POST" action="{{ route('logistic-order.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="introduction" class="col-md-12 col-form-label text-md-left" >Introduction</label>

                                <div class="col-md-12">
                                    <textarea rows="3" id="introduction" placeholder="คำอธิบายเกี่ยวกับเรา"  type="text" class="form-control ckeditor {{ $errors->has('introduction') ? ' is-invalid' : '' }}"
                                              name="introduction"  >{{ array_get($logisticOrder,'0.introduction') == null? old('introduction') : array_get($logisticOrder,'0.introduction') }}</textarea>

                                    @if ($errors->has('introduction'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('introduction') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="article" class="col-md-12 col-form-label text-md-left" >Article</label>

                                <div class="col-md-12">
                                    <textarea rows="3" id="article" placeholder="คำอธิบายเกี่ยวกับเรา"  type="text" class="form-control ckeditor {{ $errors->has('article') ? ' is-invalid' : '' }}"
                                              name="article"  >{{ array_get($logisticOrder,'0.article') == null? old('article') : array_get($logisticOrder,'0.article') }}</textarea>

                                    @if ($errors->has('article'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('article') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="container">
                                <div class="row">

                                    <label class="col-md-12 col-form-label text-md-left" >รูปสินค้าของพวกเรา</label>

                                    <div class="col-md-6">
                                        <a class="btn btn-danger" href="{{route('logistic-order.delete',[array_get($logisticOrder,'0.id')])}}">ลบรูปภาพ</a>
                                        <div class="form-group">
                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                <span style="color:red">*</span> กรุณาใส่รูปภาพ
                                            </small>
                                            <div id="divShowImg">

                                                <img  class="rounded" id="previewProduct1" style="width: 100%; height: 100%"
                                                      src="{{ array_get($logisticOrder,'0.image') == null? 'https://via.placeholder.com/180x120.png?text=No%20Image' : asset('storage/'.array_get($logisticOrder,'0.image'))  }}">
                                                <div class="py-1"><input class="btn btn-warning" type="button" value="Clear" onclick="clearProduct1({{ count($logisticOrder)}})"></div>
                                            </div>

                                            <input type="file" accept="image/jpeg, image/png"  onchange="readProduct1(this);" id="fileProduct1" name="image">
                                        </div>
                                        @if ($errors->has('image'))
                                            <span style="color: rgba(226,20,17,0.77);font-size: 13px">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" value="{{ array_get($logisticOrder,'0.id') }}" name="id">

                            <div class="form-group row mb-0" style="margin-top: 30px">
                                <div class="col-md-3 offset-md-5">
                                    <a class="btn btn-danger" href="{{route('home')}}" >&laquo; กลับ</a>
                                    <input type="submit" value="บันทึก &raquo;" class="btn btn-success">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('script')
    <script>

         $(document).ready(function () {
            $('.success_form').on('submit',function () {
                if(confirm("Are you sure?")){
                    return true;
                }
                else {
                    return false;
                }
            })
        })

        function readProduct1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#previewProduct1').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function clearProduct1(check1) {
            var image = check1;
            if (image == 0)
            {
                $('#previewProduct1').attr('src', "https://via.placeholder.com/180x120.png?text=No%20Image");
            }
            else
            {
                $('#previewProduct1').attr('src', "{{ asset('storage/'.array_get($logisticOrder,'0.image')) }}");
            }
            $('#fileProduct1').val(null);
        }
    </script>
@endpush

