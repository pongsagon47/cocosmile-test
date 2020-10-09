@extends('backend.layouts.main_dashboard')
@section('title', 'Product')
@section('content')
<div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">รายการสินค้าทั้งหมด</h1>
             <a href="{{route('product.create')}}" class="btn btn-primary btn-sm" style="margin-right: 40px">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                <span class="text">เพิ่มสินค้า</span>
            </a>
        </div>

        @if(\Session('deleted'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 20px">
                {{\Session::get('deleted')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="margin-top: 20px;background-color: white; ">
                <thead style="font-size: 15px; color: #fffdfd; background: linear-gradient(45deg, #289bff, #a5ffd5)">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>quantity</th>
                    <th>Image</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                </thead >
                @if(count($data) != 0)
                @foreach( $data as $value)
                    <tbody style="font-size: 14px ; color: #110100">
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->quantity}}</td>
                        <td><img width="70" height="90" src="{{asset('storage/'.$value->image1)}}" alt=""></td>
                        <td>{{ date('d/m/Y  เวลา H:i น.',strtotime($value->created_at)) }}</td>
                        <td>
                            <form class="delete_form" method="post" action="{{route('product.delete',[$value->id])}}">
                                @csrf

                                <a href="{{route('product.detail',[$value->id])}}" class="btn btn-info btn-circle" title="Detail Record">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a href="{{route('product.edit',[$value->id])}}" class="btn btn-warning btn-circle" title="Edit Record">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <button type="submit" class="btn btn-danger btn-circle" title="Delete Record">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                {{method_field('DELETE')}}
                            </form>
                        </td>
                    </tr>
                    </tbody>
                @endforeach
                @else
                    <tbody style="font-size: 16px ; color: #110100">
                    <tr>
                        <td class="text-center" colspan="7">ไม่มีสินค้า</td>
                    </tr>
                    </tbody>
                @endif
            </table>

            <div class="flex-center">
                {{ $data->render() }}
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
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

