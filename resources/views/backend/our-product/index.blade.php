@extends('backend.layouts.main_dashboard')
@section('title', 'Our Product')
@section('content')
 <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Our Product</div>

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

                        <form class="delete_form"  method="POST" action="{{ route('our-product.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-md-12 col-form-label text-md-left" >หัวข้อ</label>

                                <div class="col-md-4">
                                    <input id="title"  type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title"
                                           value="{{ array_get($ourProduct,'0.title') == null? old('title') : array_get($ourProduct,'0.title') }}" >

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-12 col-form-label text-md-left" >คำอธิบาย</label>

                                <div class="col-md-12">
                                    <textarea rows="3" id="description" placeholder="คำอธิบายเกี่ยวกับเรา"  type="text" class="form-control ckeditor {{ $errors->has('description') ? ' is-invalid' : '' }}"
                                              name="description"  >{{ array_get($ourProduct,'0.description') == null? old('description') : array_get($ourProduct,'0.description') }}</textarea>

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="container">
                                <div class="row">

                                    <label class="col-md-12 col-form-label text-md-left" >รูปสินค้าของพวกเรา</label>

                                    <div class="col-md-6">
                                    	<a class="btn btn-danger" href="{{route('our-product.delete',[array_get($ourProduct,'0.id')])}}">ลบรูปภาพ</a>
                                        <div class="form-group">
                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                <span style="color:red">*</span> กรุณาใส่รูปภาพ
                                            </small>
                                            <div id="divShowImg">

                                                <img  class="rounded" id="previewProduct1" style="width: 100%; height: 100%"
                                                      src="{{ array_get($ourProduct,'0.image') == null? 'https://via.placeholder.com/180x120.png?text=No%20Image' : asset('storage/'.array_get($ourProduct,'0.image'))  }}">

                                                <div class="py-1"><input class="btn btn-warning" type="button" value="Clear" onclick="clearProduct1({{ count($ourProduct)}})"></div>
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

                            <input type="hidden" value="{{ array_get($ourProduct,'0.id') }}" name="id">

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
            $('.delete_form').on('submit',function () {
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
                $('#previewProduct1').attr('src', "{{ asset('storage/'.array_get($ourProduct,'0.image')) }}");
            }
            $('#fileProduct1').val(null);
        }
    </script>
@endpush
