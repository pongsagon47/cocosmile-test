@extends('backend.layouts.main_dashboard')
@section('title', 'Add Product')
@section('content')
    <div id="about-us" class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header about-us-title">เพิ่มสินค้า</div>

                    <div class="card-body">

                        @if(\Session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 20px">
                                {{\Session::get('success')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <form class="success_form"  method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="name"  style="font-size: 16.8px;" >ชื่อสินค้า</label>

                                    <div >
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" >

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="quantity" style="font-size: 16.8px;" >ความจุ </label>

                                    <div >
                                        <input id="quantity" type="text" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" name="quantity" value="{{ old('quantity') }}" >

                                        @if ($errors->has('quantity'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                 <div class="form-group col-md-4">
                                    <label for="ingredient" style="font-size: 16.8px;" >ส่วนประกอบหลัก </label>

                                    <div >
                                        <input id="ingredient" type="text" class="form-control{{ $errors->has('ingredient') ? ' is-invalid' : '' }}" name="ingredient" value="{{ old('ingredient') }}" >

                                        @if ($errors->has('ingredient'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ingredient') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                             <div class="form-group row">
                                <label for="subingredient" class="col-md-12 col-form-label text-md-left" >ส่วนประกอบย่อย</label>

                                <div class="col-md-12">
                                    <textarea rows="1" id="subingredient" placeholder="คำอธิบายเกี่ยวกับเรา"  type="text" class="form-control ckeditor {{ $errors->has('subingredient') ? ' is-invalid' : '' }}"
                                              name="subingredient"  >{{ old('subingredient') }}</textarea>

                                    @if ($errors->has('subingredient'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('subingredient') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-12 col-form-label text-md-left" >คำอธิบายสินค้า</label>

                                <div class="col-md-12">
                                    <textarea rows="3" id="description" placeholder="คำอธิบายเกี่ยวกับเรา"  type="text" class="form-control ckeditor {{ $errors->has('description') ? ' is-invalid' : '' }}"
                                              name="description"  >{{ old('description') }}</textarea>

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="container">
                                <div class="row">

                                    <label class="col-md-12 col-form-label text-md-left" >รูปเกี่ยวกับเรา</label>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                <span style="color:red">*</span> กรุณาใส่รูปภาพที่ 1
                                            </small>
                                            <div id="divShowImg">

                                                <img  id="previewProduct1" style="width: 280px;height: 220px" src="https://via.placeholder.com/180x120.png?text=No%20Image">

                                                <div class="py-1"><input class="btn btn-warning" type="button" value="Clear" onclick="clearProduct1()"></div>
                                            </div>

                                            <input type="file" accept="image/jpeg, image/png"  onchange="readProduct1(this);" id="fileProduct1" name="image1">
                                        </div>
                                        @if ($errors->has('image1'))
                                            <span style="color: rgba(226,20,17,0.77);font-size: 13px">
                                                <strong>{{ $errors->first('image1') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                <span style="color:red">*</span> กรุณาใส่รูปภาพที่ 2
                                            </small>
                                            <div id="divShowImg">

                                                <img  id="previewProduct2" style="width: 280px;height: 220px" src="https://via.placeholder.com/180x120.png?text=No%20Image">

                                                <div class="py-1"><input class="btn btn-warning" type="button" value="Clear" onclick="clearProduct2()"></div>
                                            </div>

                                            <input type="file" accept="image/jpeg, image/png"  onchange="readProduct2(this);" id="fileProduct2" name="image2">
                                        </div>
                                        @if ($errors->has('image2'))
                                            <span style="color: rgba(226,20,17,0.77);font-size: 13px">
                                                <strong>{{ $errors->first('image2') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                <span style="color:red">*</span> กรุณาใส่รูปภาพที่ 3
                                            </small>
                                            <div id="divShowImg">

                                                <img  id="previewProduct3" style="width: 280px;height: 220px" src="https://via.placeholder.com/180x120.png?text=No%20Image">

                                                <div class="py-1"><input class="btn btn-warning" type="button" value="Clear" onclick="clearProduct3()"></div>
                                            </div>

                                            <input type="file" accept="image/jpeg, image/png"  onchange="readProduct3(this);" id="fileProduct3" name="image3">
                                        </div>
                                        @if ($errors->has('image3'))
                                            <span style="color: rgba(226,20,17,0.77);font-size: 13px">
                                                <strong>{{ $errors->first('image3') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <p class="col-md-7 col-form-label text-md-left  help-block py-2" style="font-size: 14px;">
                                        ไฟล์ภาพต้องเป็นนามสกุล jpeg,png เท่านั้น ขนาดไฟล์ไม่เกิน 1 MB 
                                    </p>
                                </div>
                            </div>

                            <div class="form-group row mb-0" style="margin-top: 30px">
                                <div class="col-md-3 offset-md-5">
                                    <a class="btn btn-danger" href="{{route('product.index')}}" >&laquo; กลับ</a>
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
            if (input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#previewProduct1').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function clearProduct1() {
            $('#previewProduct1').attr('src', "https://via.placeholder.com/180x120.png?text=No%20Image");
            $('#fileProduct1').val(null);
        }

        function readProduct2(input) {
            if (input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#previewProduct2').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function clearProduct2() {
            $('#previewProduct2').attr('src', "https://via.placeholder.com/180x120.png?text=No%20Image");
            $('#fileProduct2').val(null);
        }

        function readProduct3(input) {
            if (input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#previewProduct3').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function clearProduct3() {
            $('#previewProduct3').attr('src', "https://via.placeholder.com/180x120.png?text=No%20Image");
            $('#fileProduct3').val(null);
        }

    </script>
@endpush
