@extends('backend.layouts.main_dashboard')
@section('title', 'Intro Edit')
@section('content')
    <div id="intro" class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header intro-title" >ข้อความหน้าหลัก</div>

                    <div class="card-body">

                        @if(\Session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{\Session::get('success')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('welcome.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-md-12 col-form-label text-md-left" >หัวข้อ</label>

                                <div class="col-md-4">
                                    <input id="title"  type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title"
                                           value="{{ array_get($welcome,'0.title') == null? old('title') : array_get($welcome,'0.title') }}" >

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="subtitle" class="col-md-12 col-form-label text-md-left" >คำอธิบาย</label>

                                <div class="col-md-12">
                                    <textarea rows="3" id="subtitle" placeholder="คำอธิบายเกี่ยวกับเรา"  type="text" class="form-control ckeditor {{ $errors->has('subtitle') ? ' is-invalid' : '' }}"
                                              name="subtitle"  >{{ array_get($welcome,'0.subtitle') == null? old('subtitle') : array_get($welcome,'0.subtitle') }}</textarea>

                                    @if ($errors->has('subtitle'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('subtitle') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <input type="hidden" value="{{ array_get($welcome,'0.id') }}" name="id">

                            <div class="form-group row mb-0" style="margin-top: 30px">
                                <div class="col-md-8 offset-md-5">
                                    <a class="btn btn-danger" href="{{route('home')}}" style="margin-right: 10px">&laquo; กลับ</a>
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
